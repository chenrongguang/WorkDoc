<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 * 数据权限校验类
 */

namespace app\Common\Platform;

use think\Exception;

class Sign
{
    /*
     * 生成通知的消息
     */
    public function makesign_notify_msg($msg_id, $stomp)
    {
        $body = $msg_id;
        //$stomp_url = \tools\activemq\Activemq::geturl();
        //$user = config("conf-activemq.user");
        //$password = config("conf-activemq.password");
        //$stomp = new \Stomp($stomp_url, $user, $password);
        $destination = config("conf-activemq.des_sign_notify");
        $result = $stomp->send($destination, $body, array('persistent' => 'true'));
        if (!$result) {
            //记录日志吧
            \think\log::write('通知消息入列失败:' . $msg_id . " -time:" . time());
        }
        //unset($stomp); //手动释放
    }

    //计算是否通知(签约结果)，如果需要，返回下次通知时间，不需要返回0,
    public function calcnextSignnotify($notify_count, $notify_time)
    {
        //总共通知7次，规则：0s/30s/300s/30m/1h/12h/24h/
        if ($notify_count == 0) {
            $notify_time = $notify_time + 30;
        } elseif ($notify_count == 1) {
            $notify_time = $notify_time - 30 + 300;
        } elseif ($notify_count == 2) {
            $notify_time = $notify_time - 30 - 300 + 30 * 60;
        } elseif ($notify_count == 3) {
            $notify_time = $notify_time - 30 - 300 - 30 * 60 + 1 * 3600;
        } elseif ($notify_count == 4) {
            $notify_time = $notify_time - 30 - 300 - 30 * 60 - 1 * 3600 + 12 * 3600;
        } elseif ($notify_count == 5) {
            $notify_time = $notify_time - 30 - 300 - 30 * 60 - 1 * 3600 - 12 * 3600 + 24 * 3600;
        } else {
            $notify_time = 0;
        }
        return $notify_time;
    }

    //计算是否通知(流转签约)，如果需要，返回下次通知时间，不需要返回0,
    public function calcnextTransfernotify($notify_count, $notify_time)
    {
        //总共通知5次，规则：0s/30m/1h/3h/6h/
        if ($notify_count == 0) {
            $notify_time = $notify_time + 30 * 60;
        } elseif ($notify_count == 1) {
            $notify_time = $notify_time - 30 * 60 + 60 * 60;
        } elseif ($notify_count == 2) {
            $notify_time = $notify_time - 30 * 60 - 60 * 60 + 180 * 60;
        } elseif ($notify_count == 3) {
            $notify_time = $notify_time - 30 * 60 - 60 * 60 - 180 * 60 + 360 * 60;
        } else {
            $notify_time = 0;
        }
        return $notify_time;
    }

    //计算是否通知(流转签约完成)，如果需要，返回下次通知时间，不需要返回0,
    public function calcnextCompletenotify($notify_count, $notify_time)
    {
        //总共通知6次，规则：0s/5m/30m/1h/2h/5h
        if ($notify_count == 0) {
            $notify_time = $notify_time + 5 * 60;
        } elseif ($notify_count == 1) {
            $notify_time = $notify_time - 5 * 60 + 30 * 60;
        } elseif ($notify_count == 2) {
            $notify_time = $notify_time - 5 * 60 - 30 * 60 + 60 * 60;
        } elseif ($notify_count == 3) {
            $notify_time = $notify_time - 5 * 60 - 30 * 60 - 60 * 60 + 120 * 60;
        } elseif ($notify_count == 4) {
            $notify_time = $notify_time - 5 * 60 - 30 * 60 - 60 * 60 - 120 * 60 + 300 * 60;
        } else {
            $notify_time = 0;
        }
        return $notify_time;
    }


    /**
     * 异步通知开发者签约的结果
     */
    public function notify_sign_result($mg_result, $obj_mg_model)
    {
        //根据消息id,读取mongodb
        $msg_id = $mg_result->msg_id;
        $app_key = $mg_result->app_key;
        //根据appkey_获取通知地址，加密信息等,生成安全可靠的url

        //根据app_key,读取应用信息
        $model_app = new \app\Common\Model\Platform\App();
        $result_app = $model_app->getAppInfoByAppKey($app_key);
        unset($model_app);
        if ($result_app == null || empty($result_app)) {
            $update_data = array('notify_status' => 3); //找不到appkey对应的东西，不再通知了
        } else {
            //如果超时了，将不再通知了
            $notify_url = $result_app['app_notify_url'];
            $app_secrect = $result_app['app_secrect'];
            $timestamp = time();
            $port = $result_app['app_notify_port'];
            $time_out = config('notify_timeout');
            //todo
            $notify_content = json_encode($mg_result->notify_content); //对象变成数组
            $notify_url_full = \tools\route\CurlNotify::makeurl($notify_url, $app_key, $app_secrect, $timestamp);
            $notify_result = \tools\route\CurlNotify::notify($notify_url_full, $notify_content, $time_out, $port);
            //如果通知成功，更新记录
            if ($notify_result) {
                $update_data = array('notify_status' => 2);
            } else {
                //通知失败时，处理是否需要生成下次通知，更新状态
                $notify_time = $this->calcnextSignnotify($mg_result->notify_count, $mg_result->notify_time);
                //返回0，表示不再通知
                if ($notify_time == 0) {
                    $update_data = array('notify_status' => 3);
                } else {
                    $update_data = array('notify_count' => $mg_result->notify_count + 1, 'notify_time' => $notify_time);
                }
            }
        }

        $mg_updateresult = $obj_mg_model->updateStatus($msg_id, $update_data);//更新字段
        if (!$mg_updateresult) {
            //记录日志吧
            try {
                \think\log::write('签约结果消息通知处理失败:' . $msg_id . " -time:" . time());
            } catch (\Exception $e) {

            }
            return false;
        }
        return true;
    }


    /**
     * 异步通知开发者有需要流转签约的合同
     */
    public function notify_transfer($obj_transfer = null, $transfer_id)
    {
        //根据id,获取信息
        if ($obj_transfer == null) {
            $obj_transfer = new \app\Common\Model\Platform\ContractTransfer();
        }
        $transfer_result = $obj_transfer->getSingleById($transfer_id);
        //如果是线上流转，即流转接收方是企业或者个人，不是开发者时，直接发送短信或者邮件通知即可：
        $user_model = new \app\Common\Model\Platform\User();
        $user_info_model = new \app\Common\Model\Platform\UserInfo();
        $user_ids = $user_model->getUserById($transfer_result['target_id']); //获取用户id
        $applyer_mobile = $user_info_model->getInfoApplyerMobile($user_ids);  //获取用户申请人信息;
        $tmpel = 'SMS_105945155';
        if ($transfer_result['target_type'] == "user") {
            //todo 发送短信或者邮件通知
            $this->telsendSmsCode($applyer_mobile,$tmpel,date('Y-m-d H:i:s',$transfer_result['target_time']));
            return true;
        }

        $app_key = $transfer_result['target_id'];

        //根据app_key,读取应用信息
        $model_app = new \app\Common\Model\Platform\App();
        $result_app = $model_app->getAppInfoByAppKey($app_key);
        unset($model_app);
        if ($result_app == null || empty($result_app)) {
            $update_data = array('notify_status' => 3, 'last_time' => time()); //找不到appkey对应的东西，不再通知了
        } else {
            //已经超时了，不再通知
            if (time() > $transfer_result['target_time']) {
                $update_data = array('notify_status' => 3, 'last_time' => time()); //找不到appkey对应的东西，不再通知了
            } else {
                $notify_url = $result_app['app_notify_url'];
                $port = $result_app['app_notify_port'];
                $time_out = config('notify_timeout');

                $app_secrect = $result_app['app_secrect'];
                $timestamp = time();

                //todo
                $arr_content = array(
                    'msg_type' => 'transfer_notify',
                    'tmpl_code' => $transfer_result['tmpl_code'],
                    'query_code' => $transfer_result['query_code'],
                    'target_content' => $transfer_result['target_content'],
                    'target_time' => date('Y-m-d H:i:s', $transfer_result['target_time'])
                );
                $notify_content = json_encode($arr_content);
                $notify_url_full = \tools\route\CurlNotify::makeurl($notify_url, $app_key, $app_secrect, $timestamp);
                $notify_result = \tools\route\CurlNotify::notify($notify_url_full, $notify_content, $time_out, $port);
                //如果通知成功，更新记录
                if ($notify_result) {
                    $update_data = array('notify_status' => 2, 'last_time' => time());
                } else {
                    //通知失败时，处理是否需要生成下次通知，更新状态
                    if (isset($transfer_result['notify_time']) && !empty($transfer_result['notify_time'])) {
                        $tmp_time = $transfer_result['notify_time'];
                    } else {
                        $tmp_time = time();
                    }

                    $notify_time = $this->calcnextTransfernotify($transfer_result['notify_count'], $tmp_time);
                    //返回0，表示不再通知
                    if ($notify_time == 0) {
                        $update_data = array('notify_status' => 3, 'last_time' => time());
                    } else {
                        $update_data = array('notify_status' => 1, 'notify_count' => $transfer_result['notify_count'] + 1, 'notify_time' => $notify_time, 'last_time' => time());
                    }
                }
            }
        }

        $transfer_updateresult = $obj_transfer->updateTransfer($update_data, $transfer_id);//更新字段
        if ($transfer_updateresult == null || $transfer_updateresult == false) {
            //记录日志吧
            try {
                \think\log::write('流转签约消息通知处理失败:' . $transfer_id . " -time:" . time());
            } catch (\Exception $e) {

            }
            return false;
        }
        return true;
    }

    /**
     * 异步通知流转签约已经完成
     */
    public function notify_complete($obj_contract = null, $obj_contract_app = null, $obj_mg_model = null, $complete_contract_id)
    {
        //根据id,获取信息
        if ($obj_contract == null) {
            $obj_contract = new \app\Common\Model\Platform\Contract();
        }
        if ($obj_contract_app == null) {
            $obj_contract_app = new \app\Common\Model\Platform\ContractApp();
        }

        $where_contract_app = array(
            'contract_id' => $complete_contract_id,
            'type' => 'boot' //发起方
        );
        $result_contract_app = $obj_contract_app->getSingleByCondition($where_contract_app);
        $app_key = $result_contract_app['app_key'];

        //邮件+短信方式通知发件人，合同完成
        $Contracts = new \app\Common\Model\Platform\ContractApp();
        $Contract_status_model = new \app\Common\Model\Platform\Contract();
        $user_model = new \app\Common\Model\Platform\User();
        $user_info_model = new \app\Common\Model\Platform\UserInfo();
        $initiator = $Contracts->getUserIdSingle($complete_contract_id); //发起者
        $applyer_mobile = $user_info_model->getInfoApplyerMobile($initiator); //发起者申请人电话
        $username = $user_model->getuserbyname($initiator); //发起者姓名
        $constract_stataus = $Contract_status_model->getSingle($complete_contract_id);//判断合同status是否是2
        $tmpel ='SMS_108005016';//短信模板
        //todo 发送短信或者邮件通知，
        //给发起者发短信
        if($constract_stataus['status'] == 2){
            $this->telsendSmsInitiator($applyer_mobile,$tmpel,$username);
        }
        //如果app_key为系统默认的，那么此时只需要发送一条短信或者邮件通知发起者(action_userid)即可，之后标识通知完成，不再多次通知，
        //如果是其他app_key,则需要走系统回调通知
        if ($app_key == config('conf-dict.default_appkey')) {
            $update_data = array('notify_status' => 2, 'last_time' => time());
            $contract_update_result = $obj_contract->updateinfo($update_data, $complete_contract_id);
            return true;
        }

        //根据app_key,读取应用信息
        $model_app = new \app\Common\Model\Platform\App();
        $result_app = $model_app->getAppInfoByAppKey($app_key);
        unset($model_app);
        if ($result_app == null || empty($result_app)) {
            $update_data = array('notify_status' => 3, 'last_time' => time()); //找不到appkey对应的东西，不再通知了
        } else {
            //先判断下，如果含有msg_id字段不为空值的话，得去mongodb里边判断，该消息对应的
            //签约通知是否已经发送出去了，如果没法出去的话，这个不能发，因为这个是后状态，而前面那个是前状态，如果这个发出去的话，
            //就会造成开发者收到的合同状态错乱了
            $check_flag = false;
            if (isset($contract_result['msg_id']) && !empty($contract_result['msg_id'])) {
                if ($obj_mg_model == null) {
                    $obj_mg_model = new \app\Common\Model\Mg\MsgSign("ecs_msg_sign");
                }
                $where_mg = array('msg_id' => $contract_result['msg_id'], 'notify_status' => 2);//表示通知完成
                $cursor = $obj_mg_model->findmsg($where_mg); //返回对象列表，只取一个
                $mg_result = false;
                foreach ($cursor as $document) {
                    $mg_result = $document;
                    break;
                }
                //如果没有找到记录
                if (!$mg_result) {
                    //直接给设置一次通知吧，实际上这里可能点问题,5分钟之后再通知，但通知的次数并不增加，还是0次
                    $update_data = array('notify_status' => 1, 'notify_time' => time() + 5 * 60, 'last_time' => time());
                } else {
                    $check_flag = true;
                }
            } else {
                $check_flag = true;
            }

            if ($check_flag == true) {
                $notify_url = $result_app['app_notify_url'];
                $port = $result_app['app_notify_port'];
                $time_out = config('notify_timeout');

                $app_secrect = $result_app['app_secrect'];
                $timestamp = time();

                //todo
                //获取合同的详细信息
                $contract_result = $obj_contract->getSingle($complete_contract_id);

                $arr_content = array(
                    'msg_type' => 'sign_complete_notify',
                    'query_code' => $contract_result['query_code'],
                    'contract_status' => $contract_result['status'],
                    'contract_id' => $contract_result['contract_id'],
                );
                $notify_content = json_encode($arr_content);
                $notify_url_full = \tools\route\CurlNotify::makeurl($notify_url, $app_key, $app_secrect, $timestamp);
                $notify_result = \tools\route\CurlNotify::notify($notify_url_full, $notify_content, $time_out, $port);
                //如果通知成功，更新记录
                if ($notify_result) {
                    $update_data = array('notify_status' => 2, 'last_time' => time());
                } else {
                    //通知失败时，处理是否需要生成下次通知，更新状态
                    if (isset($contract_result['notify_time']) && !empty($contract_result['notify_time'])) {
                        $tmp_time = $contract_result['notify_time'];
                    } else {
                        $tmp_time = time();
                    }

                    $notify_time = $this->calcnextCompletenotify($contract_result['notify_count'], $tmp_time);
                    //返回0，表示不再通知
                    if ($notify_time == 0) {
                        $update_data = array('notify_status' => 3, 'last_time' => time());
                    } else {
                        $update_data = array('notify_status' => 1, 'notify_count' => $contract_result['notify_count'] + 1, 'notify_time' => $notify_time, 'last_time' => time());
                    }
                }
            }
        }

        $contract_update_result = $obj_contract->updateinfo($update_data, $complete_contract_id);
        if ($contract_update_result == null || $contract_update_result == false) {
            //记录日志吧
            try {
                \think\log::write('流转签约完成消息通知处理失败:' . $complete_contract_id . " -time:" . time());
            } catch (\Exception $e) {

            }
            return false;
        }
        return true;
    }

    /**
     * @param $sign_para
     * 检查通过返回false,检查失败返回失败编码，真实章的参数检查
     */
    public function checksignpara($sign_para)
    {
        //todo
        if (!($sign_para->location_type == 2 || $sign_para->location_type == 3)) {
            return "Y9967";
        }
        if ($sign_para->location_type == 2) {
            if (empty($sign_para->lx) || empty($sign_para->ly)) {
                return "Y9966";
            }
            if ($sign_para->lx < 0 || $sign_para->lx > 750) {
                return "Y9965";
            }
            if ($sign_para->ly < 0 || $sign_para->ly > 1200) {
                return "Y9964";
            }
        }
        if ($sign_para->location_type == 3) {
            if (empty($sign_para->keyword)) {
                return "Y9963";
            }
        }

        return false;
    }

    //大文件的，真章部分检测 ，不允许在每页盖真章
    public function checksignpara_bfep($sign_para)
    {
        //todo
        if (!($sign_para->location_type == 2 || $sign_para->location_type == 3)) {
            return "Y9967";
        }
        if ($sign_para->location_type == 2) {
            if (empty($sign_para->lx) || empty($sign_para->ly)) {
                return "Y9966";
            }
            if ($sign_para->lx < 0 || $sign_para->lx > 750) {
                return "Y9965";
            }
            if ($sign_para->ly < 0 || $sign_para->ly > 1200) {
                return "Y9964";
            }

            if ($sign_para->page == '0') {
                return "Y9926";
            }
        }
        if ($sign_para->location_type == 3) {
            if (empty($sign_para->keyword)) {
                return "Y9963";
            }
        }

        return false;
    }


    /**
     * @param $sign_para
     * 检查通过返回false,检查失败返回失败编码,图片虚拟章时的参数检查
     */
    public function checksignpara_pic($sign_para)
    {
        if ($sign_para->startPage < 1 || $sign_para->endPage == 0) {
            return "Y9929";
        }

        if ($sign_para->startPage < $sign_para->endPage && $sign_para->endPage != -1) {
            return "Y9930";
        }

        if ($sign_para->lx < 0 || $sign_para->lx > 750) {
            return "Y9965";
        }
        if ($sign_para->ly < 0 || $sign_para->ly > 1200) {
            return "Y9964";
        }

        return false;
    }


    /**
     * @param $sign_user 签约人
     * @param $arr_users 授权企业组
     * @param $check_user 是否需要检查开发者的权限
     * 检查签约人
     */
    public function checksignuser($sign_user, $check_user = true, $arr_users = '', $app_key = '')
    {
        //todo
        $user_type = $sign_user->user_type;
        //如果是企业
        if ($user_type == "e") {
            //检查其他参数
            //检查是否有user_id:先不校验了
            if (!isset($sign_user->user_id) || empty($sign_user->user_id)) {
                //return "Y9983"; //企业用户缺少user_id字段
                //如果没设置user_id,则根据mobileemail来获取user_id;
                //return array("result"=>"Y9983","seal_code"=>"","seal_password"=>"");
            }
            if (!isset($sign_user->seal_code) || empty($sign_user->seal_code)) {
                //return "Y9982"; //企业用户缺少seal_code字段
                return array("result" => "Y9982", "seal_code" => "", "seal_password" => "");
            }
            if (!isset($sign_user->seal_password) || empty($sign_user->seal_password)) {
                //return "Y9981";//企业用户缺少seal_password字段
                return array("result" => "Y9981", "seal_code" => "", "seal_password" => "");
            }


            $obj_user_model = new \app\Common\Model\Platform\User();
            //$match_info = $obj_user_model->getUserInfoByUserIdMobile($sign_user->user_id, $user_type, $sign_user->mobileemail);
            $match_info = $obj_user_model->getUserInfoByUserIdMobile($user_type, $sign_user->mobileemail);
            unset($obj_user_model);
            if ($match_info == false || $match_info == null) {
                //return 'Y9978'; //企业信息错误
                return array("result" => "Y9978", "seal_code" => "", "seal_password" => "");
            }
            $sign_user->user_id = $match_info["user_id"];

            if ($app_key == config('conf-dict.default_appkey')) {
            } else {
                if ($check_user) {
                    //企业授权验证
                    if (!in_array($sign_user->user_id, $arr_users)) {
                        return array("result" => "Y9980", "seal_code" => "", "seal_password" => "");
                    }
                }
            }

            $obj_userseal_model = new \app\Common\Model\Platform\UserSeal();

            //系统自动获取默认印章
            if ($sign_user->seal_code == "-1") {
                $where = array(
                    'user_id' => $sign_user->user_id,
                    'use_yn' => "Y",
                    'seal_type' => $user_type,
                    'default' => 'Y',
                    'confirm_status' => 2, //梁浩添加 默认印章必须已经审核通过的额
                );
                $ressult_info = $obj_userseal_model->getUserSeal($where);
                unset($obj_userseal_model);
                if ($ressult_info == false || $ressult_info == null) {
                    // 获取不到系统默认印章
                    return array("result" => "Y9921", "seal_code" => "", "seal_password" => "");
                } else {
                    //表示已经过期了
                    if ($ressult_info['end_time'] < \tools\util\TimeF::timeform1(date('Y-m-d H:i:s'))) {
                        //这个时候走重新生成流程
                        $obj_seal = new \app\Common\Platform\Seal();
                        $resut_reseal = $obj_seal->remakeSeal($ressult_info['id']);
                    }
                    return array("result" => "e", "seal_code" => $ressult_info["seal_code"], "seal_password" => $ressult_info["seal_password"], "user_id" => $sign_user->user_id);
                }
            } else {
                //根据用户传入的来判断
                $where = array(
                    'user_id' => $sign_user->user_id,
                    'use_yn' => "Y",
                    'seal_code' => $sign_user->seal_code,
                    'seal_password' => $sign_user->seal_password,
                    'seal_type' => $user_type,
                    'confirm_status' => 2, //梁浩添加 默认印章必须已经审核通过的额
                );
                $ressult_info = $obj_userseal_model->getUserSeal($where);  //验证印章

                unset($obj_userseal_model);
                if ($ressult_info == false || $ressult_info == null) {
                    // return 'Y9979'; //印章信息错误
                    return array("result" => "Y9979", "seal_code" => "", "seal_password" => "");
                } else {
                    //表示已经过期了
                    if ($ressult_info['end_time'] < \tools\util\TimeF::timeform1(date('Y-m-d H:i:s'))) {
                        //这个时候走重新生成流程
                        $obj_seal = new \app\Common\Platform\Seal();
                        $resut_reseal = $obj_seal->remakeSeal($ressult_info['id']);
                    }
                }
                //成功的话返回
                //return "e";
                return array("result" => "e", "seal_code" => "", "seal_password" => "", "user_id" => $sign_user->user_id);

            }


        } elseif ($user_type == "p") {
            //个人情况下，如果传入了user_id
            if (isset($sign_user->user_id) && !empty($sign_user->user_id)) {
                //检查是否有seal_code字段
                //检查是否有seal_password字段，并检查准确性
                if (!isset($sign_user->seal_code) || empty($sign_user->seal_code)) {
                    //return "Y9973"; //个人用户缺少seal_code字段
                    return array("result" => "Y9973", "seal_code" => "", "seal_password" => "");
                }

                $obj_user_model = new \app\Common\Model\Platform\User();
                // $match_info = $obj_user_model->getUserInfoByUserIdMobile($sign_user->user_id, $user_type, $sign_user->mobileemail);
                $match_info = $obj_user_model->getUserBaseInfobyWhere(array('user_id' => $sign_user->user_id, 'user_type' => $user_type, 'mobile' => $sign_user->mobileemail));
                unset($obj_user_model);
                if ($match_info == false || $match_info == null) {
                    //return 'Y9971'; //个人信息错误
                    return array("result" => "Y9971", "seal_code" => "", "seal_password" => "");
                }

                $obj_userseal_model = new \app\Common\Model\Platform\UserSeal();
                $where = array(
                    'user_id' => $sign_user->user_id,
                    'use_yn' => "Y",
                    'seal_code' => $sign_user->seal_code,
                    'seal_type' => $user_type,
                );
                $ressult_info = $obj_userseal_model->getUserSeal($where);
                unset($obj_userseal_model);
                if ($ressult_info == false || $ressult_info == null) {
                    //return 'Y9970'; //个人签名信息错误
                    return array("result" => "Y9970", "seal_code" => "", "seal_password" => "");
                } else {
                    //表示已经过期了
                    if ($ressult_info['end_time'] < \tools\util\TimeF::timeform1(date('Y-m-d H:i:s'))) {
                        //这个时候走重新生成流程
                        $obj_seal = new \app\Common\Platform\Seal();
                        $resut_reseal = $obj_seal->remakeSeal($ressult_info['id']);
                    }
                }
                //成功的话返回
                //return "p1";
                return array("result" => "p1", "seal_code" => "", "seal_password" => "");
            } else {
                //没有user_id的时候
                //检查必要字段mobile，user_name，identity_type，identity_no
                if (!isset($sign_user->user_name) || empty($sign_user->user_name)) {
                    //return "Y9976"; //动态创建用户缺少user_name字段
                    return array("result" => "Y9976", "seal_code" => "", "seal_password" => "");
                }
                if (!isset($sign_user->identity_type) || $sign_user->identity_type == "") {
                    //return "Y9975"; //动态创建用户缺少identity_type字段
                    return array("result" => "Y9975", "seal_code" => "", "seal_password" => "");
                }
                if (!array_key_exists($sign_user->identity_type, config('conf-identity.identity_type'))) {
                    //return 'Y0120'; //用户证件类型不正确
                    return array("result" => "Y0120", "seal_code" => "", "seal_password" => "");
                }
                if (!isset($sign_user->identity_no) || empty($sign_user->identity_no)) {
                    //return "Y9974"; //动态创建用户缺少identity_no字段
                    return array("result" => "Y9974", "seal_code" => "", "seal_password" => "");
                }
                //证件号码，如果是身份证，必须是15位或者18位
                if ($sign_user->identity_type == "0") {
                    if (strlen($sign_user->identity_no) == 15 || strlen($sign_user->identity_no) == 18) {
                    } else {
                        //return "Y0126"; //身份证，必须是15位或者18位
                        return array("result" => "Y0126", "seal_code" => "", "seal_password" => "");
                    }
                }
                //成功的话返回
                //return "p2";
                return array("result" => "p2", "seal_code" => "", "seal_password" => "");
            }
        } else {
            //返回失败码
            //return "Y9977"; //用户类型错误
            return array("result" => "Y9977", "seal_code" => "", "seal_password" => "");
        }
    }

    //检查流转签约是否合法
    public function check_transfer($tmpl_code, $app_key)
    {
        $obj_transfer = new \app\Common\Model\Platform\ContractTransfer();
        $where['tmpl_code'] = $tmpl_code;
        $where['target_id'] = $app_key;
        $result_transfer = $obj_transfer->getSingleByStr($where);
        $result_transfer = $result_transfer[0];
        if ($result_transfer == null || $result_transfer == false) {
            throw new \Exception('Y9943', 9943);
        }
        //过期了
        if ($result_transfer['target_time'] < time()) {
            throw new \Exception('Y9942', 9942);
        }
        //已经签署完成
        if ($result_transfer['sign_status'] != 0) {
            throw new \Exception('Y9936', 9936);
        }

        //暂时不可处理
        if ($result_transfer['islocking'] == 1) {
            throw new \Exception('Y9909', 9909);
        }

        $arr_ret['transfer_contract_id'] = $result_transfer['contract_id'];
        $arr_ret['transfer_id'] = $result_transfer['transfer_id'];
        //判断是否是最后流转签约方
        $wherelist['contract_id'] = $result_transfer['contract_id'];
        $wherelist['sign_status'] = 0;
        $result_transfer_list = $obj_transfer->getlistbycondition($wherelist, "transfer_id asc");
        $arr_ret['last_singer'] = true;
        foreach ($result_transfer_list as $key => $val) {
            if ($val['transfer_id'] != $result_transfer['transfer_id']) {
                $arr_ret['last_singer'] = false;
                break;
            }
        }
        return $arr_ret;
    }

    /**
     * 合同签约处理-对单个请求时的单个处理-发起方签署
     * @param $request
     * @param $stomp
     * @param string $msg_id
     * @return mixed
     * @throws \Exception
     */
    public function sign_single_proc($request, $stomp, $msg_id = "")
    {

        //获取该开发者对应的授权用户组
        $obj_dataauth = new \app\Common\Platform\Dataauth();
        $arr_users = $obj_dataauth->getalluser($request->app_key);

        //如果设置了file_data，并且不为空，则表示是用户自己传入了签署的文件流
        if (isset($request->file_data) && !empty($request->file_data)) {
            $tmpl_data = base64_decode($request->file_data); //数据流
            $tmpl_type = "common"; //模板类型，可以是普通的上传模板(common)，可以是签署的中间状态模板（transfer）
            $tmpl_code = "";//设置为空
        } else {
            if (isset($request->tmpl_code) && !empty($request->tmpl_code)) {
                $tmpl_code = $request->tmpl_code;
                $check_tmpl_auth = $obj_dataauth->tmpl_auth($arr_users, $tmpl_code, $request->app_key);
                //模板检验权限不通过
                if (!$check_tmpl_auth) {
                    throw new \Exception('Y9987', 9987);
                }
                //读取模板数据流
                $obj_tmpl_data = new \app\Common\Platform\Tmpl();
                $tmpl_result = $obj_tmpl_data->getTmplDataByCode($tmpl_code);
                unset($obj_tmpl_data);
                if ($tmpl_result == false) {
                    throw new \Exception('Y9956', 9956);
                }

                $tmpl_data = $tmpl_result['tmpl_data']; //数据流
                $tmpl_type = $tmpl_result['tmpl_type']; //模板类型，可以是普通的上传模板(common)，可以是签署的中间状态模板（transfer）

                //发起合同，该合同不能是中间状态的模板
                if ($tmpl_type == "transfer") {
                    throw new \Exception('Y9911', 9911);
                }

            } else {
                throw new \Exception('Y9933', 9933);//如果tmpl_code和file_data都为空则报错
            }
        }
        unset($obj_dataauth);

        //判断是否设置了合同名称
        if (isset($request->contract_name) && !empty($request->contract_name)) {
            $contract_name = $request->contract_name;
        } else {
            $contract_name = "";
        }
        $arr_extend['contract_name'] = $contract_name; //加入数组中，用于传递给其他的函数使用

        //判断是否设置了合同名称
        if (isset($request->theme) && !empty($request->theme)) {
            $theme = $request->theme;
        } else {
            $theme = "";
        }

        $arr_extend['theme'] = $theme; //加入数组中，合同主题字段

        //判断是否设置了合同实际签署方(或叫发起方)，最后该字段会记录在附件中，作为签署发起事件
        if (isset($request->action_user) && !empty($request->action_user)) {
            $action_user = $request->action_user;
        } else {
            $action_user = "";
        }
        $action_userid = $this->getActionuserId($request->app_key, $action_user, $arr_users);
        $arr_extend['action_userid'] = $action_userid; //加入数组中，用于传递给其他的函数使用

        //获取用户自设置存储目录参数
        $storage_folder = "";
        if (isset($request->storage_folder) && !empty($request->storage_folder)) {
            //判断是否正确，如果不正确，报错
            $list_storage = config('conf-storage.storage_folder');
            if (!array_key_exists($request->storage_folder, $list_storage)) {
                throw new \Exception('Y0221', 221);
            } else {
                $storage_folder = config('conf-storage.storage_folder')[$request->storage_folder];
            }

        } else {
            //没设置，采用默认值
            $storage_folder = config('conf-storage.storage_folder')['000'];
        }
        $arr_extend['storage_folder'] = $storage_folder; //加入数组中，用于传递给其他的函数使用

        //如果有共通的业务动态替换
        $arr_bus = array();
        if (isset($request->pub_business) && !empty($request->pub_business)) {
            $arr_bus = explode('@#@', $request->pub_business);
        }
        //二维码嵌入信息
        //$arr_qr=array();

        $arr_target = array();
        //不为空，并且是可以发起方的时候，才可以，否则
        if (isset($request->pub_target_list) && !empty($request->pub_target_list)) {
            $arr_target = json_decode(json_encode($request->pub_target_list), true);
        }

        $target_count = count($arr_target);

        if ($target_count > 3) {
            throw new \Exception('Y9920', 9920);//如果tmpl_code和file_data都为空则报错
        }

        //验证每个收件人是否合法
        if ($target_count > 0) {
            $this->check_target($arr_target);
        }
        //$last_singer = false; //是否是最后流转签约人
        //$transfer_contract_id = 0;//流转签约已经形成的合同id
        //$transfer_id = 0; //该流转id

        //签署类型(产品业务线),判断该发起者是否开通了该业务线
        //如果是合同发起的时候，需要判断
        $subject = $request->subject;
        $subject_check = $this->checksubject($subject, $action_userid);
        $arr_extend['subject'] = $subject; //加入数组中，用于传递给其他的函数使用

        $arr_contact_user_signpara = array();
        //循环读取签约信息
        foreach ($request->sign_list as $key => $val) {
            //检查该签约人信息
            $user_check = $this->checksignuser($val->sign_user, true, $arr_users, $request->app_key);
            //企业类型检查成功
            if ($user_check['result'] == "e") {
                //$arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_contact_user[$key] = $user_check['user_id']; //签约人加入列表
                $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password[$key] = $val->sign_user->seal_password; //企业签约，采用企业自己设置的密码
                //如果是默认印章 ，那么这里设置一下
                if ($val->sign_user->seal_code == "-1") {
                    $arr_sign_seal_code[$key] = $user_check['seal_code'];
                    $arr_sign_seal_password[$key] = $user_check['seal_password']; //企业签约，采用企业自己设置的密码
                }

            } else if ($user_check['result'] == "p1") {
                $arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码
            } //个人类型需要动态创建
            else if ($user_check['result'] == "p2") {
                //todo
                //创建用户，返回user_id
                $data_user['mobile'] = $val->sign_user->mobileemail;
                //$data_user['user_name'] = $val->sign_user->user_name;
                //$data_user['identity_type'] = $val->sign_user->identity_type;
                //$data_user['identity_no'] = $val->sign_user->identity_no;
                $result_user_json = \tools\api\Inner::callAPI('platform.user.addp', $data_user);
                $result_user = json_decode($result_user_json);
                if ($result_user->code === 0) {
                    $arr_contact_user[$key] = (int)$result_user->data->user_id; //得到user_id
                } else {
                    throw new \Exception("Y9969", 9969);
                }

                $data_seal['user_id'] = $arr_contact_user[$key];
                $data_seal['mobile'] = $val->sign_user->mobileemail;
                $data_seal['akey'] = $request->app_key;
                $data_seal['user_name'] = $val->sign_user->user_name;
                $data_seal['identity_type'] = $val->sign_user->identity_type;
                $data_seal['identity_no'] = $val->sign_user->identity_no;
                //设置了图片
                if (isset($val->sign_user->seal_pic) && !empty($val->sign_user->seal_pic)) {
                    $data_seal['seal_pic'] = $val->sign_user->seal_pic;
                }
                $result_seal_json = \tools\api\Inner::callAPI('platform.seal.addp', $data_seal);
                $result_seal = json_decode($result_seal_json);
                if ($result_seal->code === 0) {
                    $arr_sign_seal_code[$key] = $result_seal->data->seal_code; //得到seal_code
                } else {
                    throw new \Exception("Y9968", 9968);
                }
                $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码

            } //检查失败，获得失败码 ,直接返回
            else {
                throw new \Exception($user_check['result'], (int)$user_check['result']);
            }
            //检查签约参数
            //$tmp_sign_para = "";
            foreach ($val->sign_para_list as $k_para => $val_para) {
                $check_sign_para = $this->checksignpara($val_para->sign_para);
                if ($check_sign_para) {
                    //失败编码，直接返回
                    throw new \Exception($check_sign_para, (int)$check_sign_para);
                }

                $temp_seal_code = $arr_sign_seal_code[$key];
                if (@$arr_contact_user_signpara[$temp_seal_code] == "") {
                    //@$arr_contact_user_signpara[$temp_seal_code] = $val_para->sign_para->page;
                    @$arr_contact_user_signpara[$temp_seal_code] = $this->getsignparainfo($val_para->sign_para);
                } else {
                    //@$arr_contact_user_signpara[$temp_seal_code] .= "," . $val_para->sign_para->page;
                    @$arr_contact_user_signpara[$temp_seal_code] .= "," . $this->getsignparainfo($val_para->sign_para);
                }
            }

            //动态替换pdf内容
            if (isset($val->sign_user->business) && !empty($val->sign_user->business)) {
                $arr_bus = array_merge($arr_bus, explode('@#@', $val->sign_user->business)); //合并数组
            }
        }

        $seal_count = @count($arr_contact_user_signpara);
        if ($seal_count > 5) {
            throw new \Exception("Y9919", 9919);
        }

        //只有发起方，或者普通签约模式，才能修改合同替换，流转方是不可以修改合同内容的
        $obj_seal = new \app\Common\Cafactory\Seal();
        $tmpl_data = $this->handle_business($arr_bus, $tmpl_data, $obj_seal); //动态替换业务内容，返回新的pdf文件流

        $final_pdf = $obj_seal->signpdf_multi($tmpl_data, $request, $arr_sign_seal_code, $arr_sign_seal_password);
        unset($obj_seal);
        unset($tmpl_data);

        //只有模板是普通类型，并且target参数为空时，才是最普通的签约模式
        if ($final_pdf) {
            //存储合同的服务器/oss上
            //同步时，直接在这里new,异步的时候是传入的
            //普通模板，并且没有收件人，是最普通的独占签约模式
            if ($target_count == 0) {
                if (config('platform_sign')) {
                    $final_pdf = $this->sign_platform($final_pdf);
                    if (!$final_pdf) {
                        //todo  抛出异常到上层处理
                        throw new \Exception('Y9918', 9918);
                    }
                }
                $contract_type = 0; //合同类型，0：普通合同，1：流转签约合同
                $after_result = $this->after_sign($final_pdf, $arr_contact_user, $request->query_code, $tmpl_code, $contract_type, $stomp, $request->app_key, $request->client_ip, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend);
            } //表示是流转签约的发起签约动作
            elseif ($target_count > 0) {
                $contract_type = 1;
                $after_result = $this->after_sign_boot($final_pdf, $arr_contact_user, $request->query_code, $tmpl_code, $contract_type, $stomp, $request->app_key, $request->client_ip, $arr_target, $msg_id, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend);
            }

            unset($final_pdf);
            return $after_result;
        } else {
            //失败
            //todo  抛出异常到上层处理
            throw new \Exception('Y9984', 9984);
        }
    }

    //判断返回是否设置了合同发起方，并且有没有权限，以及返回合同发起方对应的user_id
    //如果有权限问题，那么直接抛出异常
    private function getActionuserId($app_key, $action_user, $arr_users)
    {
        //如果用户设置了发起者，那么判断该发起者设置是否正确，并且是否授权了
        if (isset($action_user) && !empty($action_user)) {
            $obj_user = new \app\Common\Model\Platform\User();
            $where_user['mobile'] = $action_user;
            $where_user['use_yn'] = "Y";
            $user_result = $obj_user->getUserBaseInfobyWhere($where_user);
            unset($obj_user);
            if ($user_result == null || $user_result == false) {
                throw new \Exception('Y9917', 9917);
            }
            $temp_userid = $user_result['user_id'];
            //判断其和app_key的授权关系、如果是个人不限制
            //如果是用的是默认的app_key,那么也不判断授权
            if ($user_result['user_type'] == "p" || $app_key == config('conf-dict.default_appkey')) {
                $final_user_id = $temp_userid;
            } else {
                if (!in_array($temp_userid, $arr_users)) {
                    throw new \Exception('Y9916', 9916);
                } else {
                    $final_user_id = $temp_userid;
                }
            }
            return $final_user_id;
        } else {
            //如果不设置，则获取该app_key对应的user_id作为发起用户
            $obj_app = new \app\Common\Model\Platform\App();
            $app_result = $obj_app->getAppInfoByAppKey($app_key);
            if ($app_result == null || $app_result == false) {
                throw new \Exception('Y9915', 9915);
            } else {
                $final_user_id = $app_result['user_id'];
                return $final_user_id;
            }
        }
    }
    //判断该合同发起者是否有该业务线
    //如果有权限问题，那么直接抛出异常
    private function checksubject($subject, $action_userid)
    {
        $obj_userpdline = new \app\Common\Model\Platform\AdminUserPdline();
        $where['user_id'] = $action_userid;
        $where['pdline_code'] = $subject;
        $user_result = $obj_userpdline->getSinglebyStr($where);
        unset($obj_userpdline);
        if ($user_result == null || $user_result == false) {
            throw new \Exception('Y9913', 9913);
        }
    }


    //返回签署参数信息
    private function getsignparainfo($obj)
    {
        //坐标模式，返回页码
        if ($obj->location_type == 2) {
            return $obj->page;
        } //关键字模式，返回关键字
        elseif ($obj->location_type == 3) {
            return $obj->keyword;
        }

    }

    private function handle_business($arr_bus, $tmpl_data, $obj_seal, $arr_qr = null)
    {
        $final_data = $tmpl_data;
        if (count($arr_bus) == 0) {
            return $final_data;
        }
        $final_data = $obj_seal->BusinessPdf($arr_bus, $tmpl_data);
        if ($final_data == false) {
            throw new \Exception('Y9953', 9953);
        } else {
            return $final_data;
        }
    }

    public function check_target($arr_target)
    {
        $num = count($arr_target);
        try {
            for ($i = 0; $i < $num; $i++) {
                if (!isset($arr_target[$i]['target_info']['target_type'])
                    || empty($arr_target[$i]['target_info']['target_type'])
                    || ($arr_target[$i]['target_info']['target_type'] != "app" && $arr_target[$i]['target_info']['target_type'] != "user")
                ) {
                    throw new \Exception('Y9949', 9949);
                }
                if (!isset($arr_target[$i]['target_info']['target_id']) || empty($arr_target[$i]['target_info']['target_id'])) {
                    throw new \Exception('Y9948', 9948);
                } else {
                    //检查app_key是否合法
                    if ($arr_target[$i]['target_info']['target_type'] == "app") {
                        $obj_app = new \app\Common\Model\Platform\App();
                        $result_app_check = $obj_app->getAppInfoByAppKey($arr_target[$i]['target_info']['target_id']);
                        if ($result_app_check == null || $result_app_check == false) {
                            throw new \Exception('Y9948', 9948);
                        }
                    } //检查用户是否存在
                    else {
                        $obj_user = new \app\Common\Model\Platform\User();
                        $where_user['mobile'] = $arr_target[$i]['target_info']['target_id'];
                        $result_user_check = $obj_user->getUserBaseInfobyWhere($where_user);
                        if ($result_user_check == null || $result_user_check == false) {
                            throw new \Exception('Y9948', 9948);
                        }
                    }
                }
                if (!isset($arr_target[$i]['target_info']['target_time']) || empty($arr_target[$i]['target_info']['target_time'])) {
                    throw new \Exception('Y9947', 9947);
                } else {
                    if (strtotime($arr_target[$i]['target_info']['target_time']) < time()) {
                        throw new \Exception('Y9947', 9947);
                    }
                }
            }
            unset($obj_app);
            return true;
        } catch (Exception $e) {
            throw new \Exception('Y9946', 9946);
        }
    }

    /**
     * 普通签署合同的后续处理
     * @param $pdf_data //签署完成的pdf文件文件流
     * @param $arr_contact_user 合同签署人列表
     * @param $query_code //合同查询码
     * @param $tmpl_code //合同模板编码
     * @param int $contract_type //合同类型
     * @param $stomp //storm对象
     * @param string $app_key //开发者app_key
     * @param null $arr_target //收件人列表
     * @param string $tmpl_type //合同模板类型
     * @return mixed
     * @throws \Exception
     *
     */
    private function after_sign($pdf_data, $arr_contact_user, $query_code, $tmpl_code, $contract_type = 0, $stomp, $app_key = "", $client_ip = "", $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend)
    {

        $status = 2; //签署完成-成功
        $c_app_type = "boot";//普通合同，签署的就是发起人
        $result['contract_status'] = $status;

        //存储文件到oss,
        $contract_code = \tools\db\MakeKey::getSealCode();
        $object = $arr_extend['storage_folder'] . date("Y/m/d", time()) . "/" . $contract_code . ".pdf";
        $url = config('UPLOAD_CONFIG.outerhost') . "/" . $object;

        $subject = $arr_extend['subject'];
        $action_userid = $arr_extend['action_userid'];
        $contract_name = $arr_extend['contract_name'];
        $theme = $arr_extend['theme'];

        //存储合同到数据库
        $data_contract = array(
            'contract_code' => $contract_code,
            'security_url' => $url,
            'security_time' => time(),
            'status' => $status,
            'query_code' => $query_code,
            'tmpl_code' => $tmpl_code,
            'contract_type' => $contract_type,
            'create_time' => time(),
            'complete_time' => time(),
            'subject' => $subject,
            'contract_name' => $contract_name,
            'theme' => $theme,
        );
        $obj_contract_model = new \app\Common\Model\Platform\Contract();
        $contract_id = $obj_contract_model->add($data_contract);

        if ($contract_id != null && $contract_id != false) {
            $result['contract_id'] = $contract_id;
        } else {
            throw new \Exception('Y9961', 9961);
        }

        //记录合同与签署人关系
        $num = count($arr_contact_user);
        $k = 0;
        $obj_user_contract = new \app\Common\Model\Platform\UserContract();
        for ($i = 0; $i < $num; $i++) {
            $user_id = $arr_contact_user[$i];
            $temp_seal_code = $arr_sign_seal_code[$i];
            @$sign_para = $arr_contact_user_signpara[$temp_seal_code];
            $data_where = array('contract_id' => $contract_id, "user_id" => $user_id, 'seal_code' => $arr_sign_seal_code[$i]);//先检查有没有，没有了再加到列表里边，有的话，就不加了
            $data_content = array('contract_id' => $contract_id, "user_id" => $user_id, "create_time" => time(), "sign_para" => $sign_para, 'seal_code' => $arr_sign_seal_code[$i], 'seal_password' => $arr_sign_seal_password[$i]);//数据
            $findresult = $obj_user_contract->getsiglebywhere($data_where);
            if ($findresult == null || $findresult == false) {
                $list[$k] = $data_content;
                $k++;
            }
        }

        $batch_result = $obj_user_contract->addbatch($list);
        if ($batch_result == null || $batch_result == false) {
            //回滚合同主表：
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9959', 9959);
        }

        //记录合同与开发者的关系
        //存储合同到数据库
        $app_contract = array(
            'contract_id' => $contract_id,
            'app_key' => $app_key,
            'type' => $c_app_type,
            'client_ip' => $client_ip,
            'create_time' => time(),
            'action_userid' => $action_userid
        );
        $obj_app_contract_model = new \app\Common\Model\Platform\ContractApp();
        $result_app_contcract = $obj_app_contract_model->add($app_contract);
        unset($obj_app_contract_model);
        if ($result_app_contcract != null && $result_app_contcract != false) {
        } else {
            //回滚合同主表：
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9951', 9951);
        }

        //最后一步，将文件流上传到oss中
        $arr_body = array(
            "object_id" => $object,
            "contract_id" => $contract_id,
            "upload_type" => "c",//上传类型：c表示合同正文，a表示合同附件
            "pdf_data" => base64_encode($pdf_data),
            "subject" =>$subject //产品线
        );
        $body = json_encode($arr_body);
        $destination = config("conf-activemq.des_oss_upload");
        $result_mq = $stomp->send($destination, $body, array('persistent' => 'true'));
        if ($result_mq) {
        } else {
            //回滚合同主表：
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9960', 9960);
        }

        unset($obj_contract_model);
        //todo
        $result['query_code'] = $query_code;
        $result['file_info'] = config("self_host") . "/home/fileinfo/get?code=" . $contract_code;
        return $result;
    }

    /**
     * 流转签署合同-合同发起签署的签约后续处理
     * @param $pdf_data //签署完成的pdf文件文件流
     * @param $arr_contact_user 合同签署人列表
     * @param $query_code //合同查询码
     * @param $tmpl_code //合同模板编码
     * @param int $contract_type //合同类型
     * @param $stomp //storm对象
     * @param string $app_key //开发者app_key
     * @param null $arr_target //收件人列表
     * @param string $tmpl_type //合同模板类型
     * @return mixed
     * @throws \Exception
     *
     */
    private function after_sign_boot($pdf_data, $arr_contact_user, $query_code, $tmpl_code, $contract_type = 1, $stomp, $app_key = "", $client_ip = "", $arr_target = null, $msg_id = "", $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend)
    {
        //todo
        $status = 1; //发起签署，状态为签署中
        $c_app_type = "boot";//这里是签署的发起人
        $result['contract_status'] = $status;

        //存储文件到oss,
        $contract_code = \tools\db\MakeKey::getSealCode();
        $object = $arr_extend['storage_folder'] . date("Y/m/d", time()) . "/" . $contract_code . ".pdf";
        $url = config('UPLOAD_CONFIG.outerhost') . "/" . $object;

        $subject = $arr_extend['subject'];
        $action_userid = $arr_extend['action_userid'];
        $contract_name = $arr_extend['contract_name'];
        $theme = $arr_extend['theme'];

        //存储合同到数据库
        $data_contract = array(
            'contract_code' => $contract_code,
            'security_url' => $url,
            'security_time' => time(),
            'status' => $status,
            'query_code' => $query_code,
            'tmpl_code' => $tmpl_code,
            'contract_type' => $contract_type,
            'create_time' => time(),
            'msg_id' => $msg_id,
            'subject' => $subject,
            'contract_name' => $contract_name,
            'theme' => $theme,
        );
        $obj_contract_model = new \app\Common\Model\Platform\Contract();
        $contract_id = $obj_contract_model->add($data_contract);

        if ($contract_id != null && $contract_id != false) {
            $result['contract_id'] = $contract_id;
        } else {
            throw new \Exception('Y9961', 9961);
        }

        //记录合同与签署人关系
        $num = count($arr_contact_user);

        $k = 0;
        $obj_user_contract = new \app\Common\Model\Platform\UserContract();
        for ($i = 0; $i < $num; $i++) {
            $user_id = $arr_contact_user[$i];
            $temp_seal_code = $arr_sign_seal_code[$i];
            @$sign_para = $arr_contact_user_signpara[$temp_seal_code];
            $data_where = array('contract_id' => $contract_id, "user_id" => $user_id, 'seal_code' => $arr_sign_seal_code[$i]);
            $data_content = array('contract_id' => $contract_id, "user_id" => $user_id, "create_time" => time(), "sign_para" => $sign_para, 'seal_code' => $arr_sign_seal_code[$i], 'seal_password' => $arr_sign_seal_password[$i]);//数据
            $findresult = $obj_user_contract->getsiglebywhere($data_where);
            if ($findresult == null || $findresult == false) {
                $list[$k] = $data_content;
                $k++;
            }
        }

        $batch_result = $obj_user_contract->addbatch($list);
        if ($batch_result == null || $batch_result == false) {
            //回滚合同主表：
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9959', 9959);
        }

        //记录合同与开发者的关系
        //存储合同到数据库
        $app_contract = array(
            'contract_id' => $contract_id,
            'app_key' => $app_key,
            'type' => $c_app_type,
            'client_ip' => $client_ip,
            'create_time' => time(),
            'action_userid' => $action_userid
        );
        $obj_app_contract_model = new \app\Common\Model\Platform\ContractApp();
        $result_app_contcract = $obj_app_contract_model->add($app_contract);
        unset($obj_app_contract_model);
        if ($result_app_contcract != null && $result_app_contcract != false) {
        } else {
            //回滚合同主表：
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9951', 9951);
        }

        //存储发起人的流转列表信息
        $num = count($arr_target);

        $obj_transfer = new \app\Common\Model\Platform\ContractTransfer();
        $obj_tmpl = new \app\Common\Model\Platform\Tmpl();

        for ($i = 0; $i < $num; $i++) {
            //新增一条记录到流转表，同时生成了模板id
            $new_tmpl_code = \tools\db\Uuid::getUUID();
            $arr_tranfer = null;
            $arr_tranfer = array(
                'contract_id' => $contract_id,
                "target_type" => $arr_target[$i]['target_info']['target_type'],
                "target_id" => $arr_target[$i]['target_info']['target_id'],
                "target_content" => (isset($arr_target[$i]['target_info']['target_content']) && !empty($arr_target[$i]['target_info']['target_content'])) ? $arr_target[$i]['target_info']['target_content'] : "",
                "target_time" => strtotime($arr_target[$i]['target_info']['target_time']),
                "create_time" => time(),
                'tmpl_code' => $new_tmpl_code,
                'query_code' => $query_code,
            );

            $list_transfer[$i] = $arr_tranfer;

            $tmpl_data = array('tmpl_code' => $new_tmpl_code, "tmpl_url" => $url, "create_time" => time(), "tmpl_type" => "transfer");
            $list_tmpl[$i] = $tmpl_data;
        }

        $batch_result = $obj_transfer->addbatch($list_transfer);
        if ($batch_result == null || $batch_result == false) {
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9944', 9944);
        }

        //保存第一个流转对象id
        $tranfer_id = $batch_result[0]['transfer_id'];
        //将增加完的合同，作为合同模板，存储到合同模板表

        $result_tmpl = $obj_tmpl->addbatch($list_tmpl);
        if ($result_tmpl == null || $result_tmpl == false) {
            //回滚合同主表：
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9945', 9945);
        }

        unset($obj_transfer);
        unset($obj_tmpl);

        //unset($obj_transfer);

        $arr_body = array(
            "object_id" => $object,
            "contract_id" => $contract_id,
            "upload_type" => "c",//上传类型：c表示合同正文，a表示合同附件
            "transfer_id" => $tranfer_id,//将第一个流转对象id传入，等待上传完毕之后，通知第一个流转对象进行签约
            "pdf_data" => base64_encode($pdf_data),
            "subject"=>$subject //产品线
        );
        $body = json_encode($arr_body);
        $destination = config("conf-activemq.des_oss_upload");
        $result_mq = $stomp->send($destination, $body, array('persistent' => 'true'));
        if ($result_mq) {

        } else {
            $this->rollbackcontract($contract_id);
            throw new \Exception('Y9960', 9960);
        }

        unset($obj_contract_model);
        //todo
        $result['query_code'] = $query_code;
        $result['file_info'] = config("self_host") . "/home/fileinfo/get?code=" . $contract_code;
        return $result;
    }


    /**
     * 流转签署合同-中间流转人的签约后续处理
     * @param $pdf_data //签署完成的pdf文件文件流
     * @param $arr_contact_user 合同签署人列表
     * @param $query_code //合同查询码
     * @param $tmpl_code //合同模板编码
     * @param int $contract_type //合同类型
     * @param $stomp //storm对象
     * @param string $app_key //开发者app_key
     * @param bool $last_singer //是否最后签署方
     * @param int $transfer_contract_id //流转签约已经形成的合同id
     * @param int $transfer_id //该次签约的流转id
     * @return mixed
     * @throws \Exception
     *
     */
    private function after_sign_transfer($pdf_data, $arr_contact_user, $stomp, $app_key = "", $client_ip = "", $last_singer = false, $transfer_contract_id = 0, $transfer_id = 0, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend)
    {
        //todo
        if ($last_singer == true) {
            $status = 2; //签署完成-成功

        } else {
            $status = 1; //继续流转签署
        }
        $c_app_type = "sign";//流转签约方签署动作
        $result['contract_status'] = $status;

        $contract_id = $transfer_contract_id;

        $action_userid = $arr_extend['action_userid'];

        //获取合同的存储object,再次使用，进行覆盖存储
        $obj_contract_model = new \app\Common\Model\Platform\Contract();
        $contract_result = $obj_contract_model->getSingle($contract_id);
        if ($contract_result == null || $contract_result == false) {
            throw new \Exception('Y9941', 9941);
        }
        $subject=$contract_result['subject'];
        $url = $contract_result['security_url'];
        $object = str_replace(config('UPLOAD_CONFIG.outerhost') . "/", "", $url);

        $obj_user_contract = new \app\Common\Model\Platform\UserContract();
        //记录合同与签署人关系
        $num = count($arr_contact_user);
        $k = 0;
        for ($i = 0; $i < $num; $i++) {
            $user_id = $arr_contact_user[$i];
            $temp_seal_code = $arr_sign_seal_code[$i];
            @$sign_para = $arr_contact_user_signpara[$temp_seal_code];
            $data_where = array('contract_id' => $contract_id, "user_id" => $user_id, 'seal_code' => $arr_sign_seal_code[$i]);
            $data_content = array('contract_id' => $contract_id, "user_id" => $user_id, 'transfer_id' => $transfer_id, "create_time" => time(), "sign_para" => $sign_para, 'seal_code' => $arr_sign_seal_code[$i], 'seal_password' => $arr_sign_seal_password[$i]);//数据
            $findresult = $obj_user_contract->getsiglebywhere($data_where);
            if ($findresult == null || $findresult == false) {
                $list[$k] = $data_content;
                $k++;
            }
        }
        $batch_result = $obj_user_contract->addbatch($list);

        if ($batch_result == null || $batch_result == false) {
            throw new \Exception('Y9959', 9959);
        }

        //记录合同与开发者的关系
        $app_contract = array(
            'contract_id' => $contract_id,
            'app_key' => $app_key,
            'type' => $c_app_type,
            'client_ip' => $client_ip,
            'transfer_id' => $transfer_id,
            'create_time' => time(),
            'action_userid' => $action_userid
        );
        $obj_app_contract_model = new \app\Common\Model\Platform\ContractApp();
        $result_app_contcract = $obj_app_contract_model->add($app_contract);

        if ($result_app_contcract == null || $result_app_contcract == false) {
            //回滚已经存入的数据:
            $delete_where['transfer_id'] = $transfer_id;
            $obj_user_contract->deleteRecord($delete_where);
            throw new \Exception('Y9951', 9951);
        }

        //更新当前流转的流转信息表
        $update_transfer = array(
            'sign_status' => 2,
            'sign_time' => time(),
            'last_time' => time()
        );
        $obj_transfer = new \app\Common\Model\Platform\ContractTransfer();
        $update_tran_result = $obj_transfer->updateTransfer($update_transfer, $transfer_id);
        if ($update_tran_result == null || $update_tran_result == false) {
            //回滚已经存入的数据:
            $delete_where['transfer_id'] = $transfer_id;
            $obj_user_contract->deleteRecord($delete_where);
            $obj_app_contract_model->deleteRecord($delete_where);
            throw new \Exception('Y9939', 9939);
        }

        //存储合同到数据库
        //如果已经完成了，那么需要更新合同状态
        if ($last_singer == true) {
            $update_contract = array(
                'status' => $status,
                'last_time' => time(),
                'complete_time' => time()
            );
            $update_result = $obj_contract_model->updateinfo($update_contract, $contract_id);
            if ($update_result == null || $update_result == false) {
                //回滚已经存入的数据:
                $delete_where['transfer_id'] = $transfer_id;
                $obj_user_contract->deleteRecord($delete_where);
                $obj_app_contract_model->deleteRecord($delete_where);
                $roback_transfer = array(
                    'sign_status' => 0
                );
                $obj_transfer->updateTransfer($roback_transfer, $transfer_id);
                throw new \Exception('Y9940', 9940);
            }
        }

        //状态为1要继续流转
        if ($status == 1) {
            $arr_body = array(
                "object_id" => $object,
                "contract_id" => $contract_id,
                "upload_type" => "c",//上传类型：c表示合同正文，a表示合同附件
                "transfer_id" => -1,//设置为-1
                "pdf_data" => base64_encode($pdf_data),
                "subject"=>$subject //产品线
            );
        } //状态为2，则表示该合同完成了，这时需要在上传完成之后，进行通知发起方的队列
        elseif ($status == 2) {
            $arr_body = array(
                "object_id" => $object,
                "contract_id" => $contract_id,
                "upload_type" => "c",//上传类型：c表示合同正文，a表示合同附件
                "complete_contract_id" => $contract_id,//进行合同完成的通知
                "pdf_data" => base64_encode($pdf_data),
                "subject"=>$subject //产品线
            );
        }

        $body = json_encode($arr_body);
        $destination = config("conf-activemq.des_oss_upload");
        $result_mq = $stomp->send($destination, $body, array('persistent' => 'true'));
        if ($result_mq) {
            $result['file_info'] = config("self_host") . "/home/fileinfo/get?code=" . $contract_result['contract_code'];
        } else {
            //回滚已经存入的数据:
            $delete_where['transfer_id'] = $transfer_id;
            $obj_user_contract->deleteRecord($delete_where);
            $obj_app_contract_model->deleteRecord($delete_where);
            $roback_transfer = array(
                'sign_status' => 0
            );
            $obj_transfer->updateTransfer($roback_transfer, $transfer_id);
            //如果是最后完成人，还需要回滚主合同的状态：
            if ($last_singer == true) {
                $rollback_contract = array(
                    'status' => 1
                );
                $obj_contract_model->updateinfo($rollback_contract, $contract_id);
            } else {
            }

            throw new \Exception('Y9937', 9937);
        }

        unset($obj_user_contract);
        unset($obj_app_contract_model);
        unset($obj_contract_model);
        //todo
        $result['contract_id'] = $contract_id;
        return $result;
    }


    private function rollbackcontract($contract_id)
    {
        $obj_contract_model = new \app\Common\Model\Platform\Contract();
        $update_data['use_yn'] = 'N';
        $update_result = $obj_contract_model->updateinfo($update_data, $contract_id);
        unset($obj_contract_model);
    }

    /**
     * 合同签约处理 -对批量请求时的单个处理
     * @param $request 请求参数
     * @param string $tmpl_data 模板数据
     * @return mixed
     */
    public function sign_batch_proc($request, $tmpl_data, $arr_users, $stomp, $arr_bus, $arr_target = array(), $msg_id = '', $arr_extend)
    {
        //签署类型
        if (!isset($request->subject) || empty($request->subject)) {
            $subject = '合同'; //类型
        } else {
            $subject = $request->subject;
        }

        //循环读取签约信息
        $arr_contact_user_signpara = array();
        foreach ($request->sign_list as $key => $val) {
            //需要检查的为每份合同的不同签署人
            if (isset($val->sign_user->need_check)) {
                if ($val->sign_user->need_check) {
                    $user_check = $this->checksignuser($val->sign_user, true, $arr_users, $request->app_key);
                    //企业类型检查成功
                    if ($user_check['result'] == "e") {
                        //$arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                        $arr_contact_user[$key] = $user_check['user_id']; //签约人加入列表
                        $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                        $arr_sign_seal_password[$key] = $val->sign_user->seal_password; //企业签约，采用企业自己设置的密码
                        //如果是默认印章 ，那么这里设置一下
                        if ($val->sign_user->seal_code == "-1") {
                            $arr_sign_seal_code[$key] = $user_check['seal_code'];
                            $arr_sign_seal_password[$key] = $user_check['seal_password']; //企业签约，采用企业自己设置的密码
                        }
                    } else if ($user_check['result'] == "p1") {
                        $arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                        $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                        $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码
                    } //个人类型需要动态创建
                    else if ($user_check['result'] == "p2") {
                        //todo
                        //创建用户，返回user_id
                        $data_user['mobile'] = $val->sign_user->mobileemail;
                        //$data_user['user_name'] = $val->sign_user->user_name;
                        //$data_user['identity_type'] = $val->sign_user->identity_type;
                        //$data_user['identity_no'] = $val->sign_user->identity_no;
                        $result_user_json = \tools\api\Inner::callAPI('platform.user.addp', $data_user);
                        $result_user = json_decode($result_user_json);
                        if ($result_user->code === 0) {
                            $arr_contact_user[$key] = (int)$result_user->data->user_id; //得到user_id
                        } else {
                            throw new \Exception("Y9969", 9969);
                        }

                        $data_seal['user_id'] = $arr_contact_user[$key];
                        $data_seal['mobile'] = $val->sign_user->mobileemail;

                        $data_seal['app_key'] = $request->app_key;
                        $data_seal['user_name'] = $val->sign_user->user_name;
                        $data_seal['identity_type'] = $val->sign_user->identity_type;
                        $data_seal['identity_no'] = $val->sign_user->identity_no;

                        //设置了图片
                        if (isset($val->sign_user->seal_pic) && !empty($val->sign_user->seal_pic)) {
                            $data_seal['seal_pic'] = $val->sign_user->seal_pic;
                        }

                        $result_seal_json = \tools\api\Inner::callAPI('platform.seal.addp', $data_seal);
                        $result_seal = json_decode($result_seal_json);
                        if ($result_seal->code === 0) {
                            $arr_sign_seal_code[$key] = $result_seal->data->seal_code; //得到seal_code
                        } else {
                            throw new \Exception("Y9968", 9968);
                        }
                        $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码
                    } //检查失败，获得失败码 ,直接返回
                    else {
                        throw new \Exception($user_check['result'], (int)$user_check['result']);
                    }

                    //动态替换pdf内容
                    if (isset($val->sign_user->business) && !empty($val->sign_user->business)) {
                        $arr_bus = array_merge($arr_bus, explode('@#@', $val->sign_user->business)); //合并数组
                    }

                    /* 暂时先不支持
                    //如果有指定了流转签约人信息
                    if (isset($val->sign_user->target_list) && !empty($val->sign_user->target_list)) {
                        $arr_target = json_decode(json_encode($val->sign_user->target_list), true);//替换数组
                    }
                    */
                }
            } else {
                //企业类型检查成功
                if ($val->sign_user->user_type == "e") {
                    $arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                    $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                    $arr_sign_seal_password[$key] = $val->sign_user->seal_password; //企业签约，采用企业自己设置的密码
                } else if ($val->sign_user->user_type == "p") {
                    $arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                    $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                    $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码
                }
            }

            //组织签约参数
            $tmp_sign_para = "";
            foreach ($val->sign_para_list as $k_para => $val_para) {
                //用逗号拼起来
                /*
                if ($tmp_sign_para == "") {
                    $tmp_sign_para .= $val_para->sign_para->page;
                } else {
                    $tmp_sign_para .= "," . $val_para->sign_para->page;
                }
                */

                $temp_seal_code = $arr_sign_seal_code[$key];
                if (@$arr_contact_user_signpara[$temp_seal_code] == "") {
                    //@$arr_contact_user_signpara[$temp_seal_code] = $val_para->sign_para->page;
                    @$arr_contact_user_signpara[$temp_seal_code] = $this->getsignparainfo($val_para->sign_para);
                } else {
                    //@$arr_contact_user_signpara[$temp_seal_code] .= "," . $val_para->sign_para->page;
                    @$arr_contact_user_signpara[$temp_seal_code] .= "," . $this->getsignparainfo($val_para->sign_para);
                }
            }
            //设置其签约信息，后面要记录存储到数据库
            //$arr_contact_user_signpara[$key] = $tmp_sign_para;
        }

        //超过5个不同的印章，返回错误
        $seal_count = @count($arr_contact_user_signpara);
        if ($seal_count > 5) {
            throw new \Exception("Y9919", 9919);
        }


        $obj_seal = new \app\Common\Cafactory\Seal();
        $tmpl_data = $this->handle_business($arr_bus, $tmpl_data, $obj_seal); //动态替换业务内容，返回新的pdf文件流

        //再次：检验流转签约的设置是否正确
        $target_count = count($arr_target);
        /* 暂时先不支持
        //验证每个收件人是否合法
        if ($target_count > 0) {
            $this->check_target($arr_target);
        }
        */

        $final_pdf = $obj_seal->signpdf_multi($tmpl_data, $request, $arr_sign_seal_code, $arr_sign_seal_password);
        unset($obj_seal);

        if ($final_pdf) {
            //存储合同的服务器/oss上
            //$after_result = $this->after_sign($final_pdf, $arr_contact_user, $request->query_code, $request->tmpl_code, 0, $stomp, $request->app_key);

            if ($target_count == 0) {
                $contract_type = 0; //合同类型，0：普通合同，1：流转签约合同
                $after_result = $this->after_sign($final_pdf, $arr_contact_user, $request->query_code, $request->tmpl_code, $contract_type, $stomp, $request->app_key, $request->client_ip, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend, $subject);
            } //表示是流转签约的发起签约动作
            elseif ($target_count > 0) {
                $contract_type = 1;
                $after_result = $this->after_sign_boot($final_pdf, $arr_contact_user, $request->query_code, $request->tmpl_code, $contract_type, $stomp, $request->app_key, $request->client_ip, $arr_target, $msg_id, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend, $subject);
            } else {
                throw new \Exception('Y9950', 9950);
            }

            unset($final_pdf);
            return $after_result;
        } else {
            //失败
            //todo  抛出异常到上层处理
            throw new \Exception('Y9984', 9984);
        }
    }

    /**
     * 验签
     * @param file_data ，文件内容
     */
    public function sign_verify($file_data)
    {
        $obj_seal = new \app\Common\Cafactory\Seal();
        $result = $obj_seal->sign_verify($file_data);
        if ($result == false) {
            $ret["result"] = 0;
            $ret["verify"] = "fail";
        } else {
            $ret["result"] = 1;
            $ret["verify"] = $result;
        }
        unset($obj_seal);
        return $ret;
    }

    /**
     * 合同签约处理-对单个大文件的每页签约处理
     * @param $request
     * @param $stomp
     * @return mixed
     * @throws \Exception
     */
    public function sign_bfep_proc($request, $stomp, $msg_id = "")
    {
        //获取该开发者对应的授权用户组
        $obj_dataauth = new \app\Common\Platform\Dataauth();
        $arr_users = $obj_dataauth->getalluser($request->app_key);

        //如果设置了file_data，并且不为空，则表示是用户自己传入了签署的文件流
        $tmpl_data = $request->file_data; //数据流
        $tmpl_type = "common"; //模板类型，可以是普通的上传模板(common)，可以是签署的中间状态模板（transfer）
        $tmpl_code = "";//设置为空

        unset($obj_dataauth);
        $storage_folder = "";
        if (isset($request->storage_folder) && !empty($request->storage_folder)) {
            //判断是否正确，如果不正确，报错
            $list_storage = config('conf-storage.storage_folder');
            if (!array_key_exists($request->storage_folder, $list_storage)) {
                throw new \Exception('Y0221', 221);
            } else {
                $storage_folder = config('conf-storage.storage_folder')[$request->storage_folder];
            }

        } else {
            //没设置，采用默认值
            $storage_folder = config('conf-storage.storage_folder')['000'];
        }
        $arr_extend['storage_folder'] = $storage_folder; //加入数组中，用于传递给其他的函数使用

        //判断是否设置了合同名称
        if (isset($request->contract_name) && !empty($request->contract_name)) {
            $contract_name = $request->contract_name;
        } else {
            $contract_name = "";
        }
        $arr_extend['contract_name'] = $contract_name; //加入数组中，用于传递给其他的函数使用

        //判断是否设置了合同主题
        if (isset($request->theme) && !empty($request->theme)) {
            $theme = $request->theme;
        } else {
            $theme = "";
        }
        $arr_extend['theme'] = $theme; //加入数组中，用于传递给其他的函数使用



        //判断是否设置了合同实际签署方(或叫发起方)，最后该字段会记录在附件中，作为签署发起事件
        if (isset($request->action_user) && !empty($request->action_user)) {
            $action_user = $request->action_user;
        } else {
            $action_user = "";
        }
        $action_userid = $this->getActionuserId($request->app_key, $action_user, $arr_users);
        $arr_extend['action_userid'] = $action_userid; //加入数组中，用于传递给其他的函数使用

        //签署类型(产品业务线),判断该发起者是否开通了该业务线
        $subject = $request->subject;
        $subject_check = $this->checksubject($subject, $action_userid);
        $arr_extend['subject'] = $subject; //加入数组中，用于传递给其他的函数使用

        //循环读取签约信息-真实章
        $arr_contact_user_signpara = array();
        foreach ($request->sign_list as $key => $val) {
            //检查该签约人信息
            $user_check = $this->checksignuser($val->sign_user, true, $arr_users, $request->app_key);
            //企业类型检查成功
            if ($user_check['result'] == "e") {
                //$arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_contact_user[$key] = $user_check['user_id']; //签约人加入列表
                $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password[$key] = $val->sign_user->seal_password; //企业签约，采用企业自己设置的密码
                //如果是默认印章 ，那么这里设置一下
                if ($val->sign_user->seal_code == "-1") {
                    $arr_sign_seal_code[$key] = $user_check['seal_code'];
                    $arr_sign_seal_password[$key] = $user_check['seal_password']; //企业签约，采用企业自己设置的密码
                }
            } else if ($user_check['result'] == "p1") {
                $arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码
            } //检查失败，获得失败码 ,直接返回
            else {
                throw new \Exception($user_check['result'], (int)$user_check['result']);
            }
            //检查签约参数
            $tmp_sign_para = "";
            foreach ($val->sign_para_list as $k_para => $val_para) {
                $check_sign_para = $this->checksignpara_bfep($val_para->sign_para);
                if ($check_sign_para) {
                    //失败编码，直接返回
                    throw new \Exception($check_sign_para, (int)$check_sign_para);
                }

                $temp_seal_code = $arr_sign_seal_code[$key];
                if (@$arr_contact_user_signpara[$temp_seal_code] == "") {
                    //@$arr_contact_user_signpara[$temp_seal_code] = $val_para->sign_para->page;
                    @$arr_contact_user_signpara[$temp_seal_code] = $this->getsignparainfo($val_para->sign_para);
                } else {
                    @$arr_contact_user_signpara[$temp_seal_code] .= "," . $this->getsignparainfo($val_para->sign_para);
                }
            }
            //设置其签约信息，后面要记录存储到数据库
            //$arr_contact_user_signpara[$key] = $tmp_sign_para;
        }

        $seal_count = @count($arr_contact_user_signpara);
        if ($seal_count > 5) {
            throw new \Exception("Y9919", 9919);
        }


        //循环读取签约信息-只是图片的虚拟章
        foreach ($request->pic_sign_list as $key => $val) {
            //检查该签约人信息
            $user_check = $this->checksignuser($val->sign_user, true, $arr_users, $request->app_key);
            //企业类型检查成功
            if ($user_check['result'] == "e") {
                //$arr_contact_user_pic[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_contact_user[$key] = $user_check['user_id']; //签约人加入列表
                $arr_sign_seal_code_pic[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password_pic[$key] = $val->sign_user->seal_password; //企业签约，采用企业自己设置的密码
                //如果是默认印章 ，那么这里设置一下
                if ($val->sign_user->seal_code == "-1") {
                    $arr_sign_seal_code[$key] = $user_check['seal_code'];
                    $arr_sign_seal_password[$key] = $user_check['seal_password']; //企业签约，采用企业自己设置的密码
                }
            } else if ($user_check['result'] == "p1") {
                $arr_contact_user_pic[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_sign_seal_code_pic[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password_pic[$key] = ""; //个人签约采用默认密码
            } //检查失败，获得失败码 ,直接返回
            else {
                throw new \Exception($user_check['result'], (int)$user_check['result']);
            }
            //检查签约参数
            foreach ($val->sign_para_list as $k_para => $val_para) {
                $check_sign_para = $this->checksignpara_pic($val_para->sign_para);
                if ($check_sign_para) {
                    //失败编码，直接返回
                    throw new \Exception($check_sign_para, (int)$check_sign_para);
                }
            }
        }

        //只有发起方，或者普通签约模式，才能修改合同替换，流转方是不可以修改合同内容的
        $obj_seal = new \app\Common\Cafactory\Seal();
        $final_pdf = $obj_seal->signpdf_multi_bfep($tmpl_data, $request, $arr_sign_seal_code, $arr_sign_seal_password, $arr_sign_seal_code_pic, $arr_sign_seal_password_pic);
        unset($obj_seal);
        unset($tmpl_data);

        //合同不为空，并且判断是否要加上平台的数字签名
        if ($final_pdf && config('platform_sign')) {
            $final_pdf = $this->sign_platform($final_pdf);
            if (!$final_pdf) {
                //todo  抛出异常到上层处理
                throw new \Exception('Y9918', 9918);
            }
        }

        //只有模板是普通类型，并且target参数为空时，才是最普通的签约模式
        if ($final_pdf) {
            //存储合同的服务器/oss上
            $contract_type = 0; //合同类型，0：普通合同，1：流转签约合同
            $after_result = $this->after_sign($final_pdf, $arr_contact_user, $request->query_code, $tmpl_code, $contract_type, $stomp, $request->app_key, $request->client_ip, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend);
            unset($final_pdf);
            return $after_result;
        } else {
            //失败
            //todo  抛出异常到上层处理
            throw new \Exception('Y9984', 9984);
        }
    }

    /**
     * 验签
     * @param file_data ，文件内容
     */
    public function formatpdf($file_data, $content)
    {
        $pdf = base64_decode($file_data);
        $arr_bus = explode('@#@', $content);

        $obj_seal = new \app\Common\Cafactory\Seal();
        $result = $obj_seal->BusinessPdf($arr_bus, $pdf);
        unset($obj_seal);
        if ($result == false) {
            return false;
        } else {
            return base64_encode($result);
        }
    }

    //嵌入平台数字证书
    public function sign_platform($pdf)
    {
        $where = array(
            'user_id' => -2,//固定用户
            'use_yn' => "Y",
            'seal_type' => "e",
            'default' => 'Y',
            'confirm_status' => 2,
        );

        $obj_userseal_model = new \app\Common\Model\Platform\UserSeal();
        $ressult_info = $obj_userseal_model->getUserSeal($where);

        if ($ressult_info == false || $ressult_info == null) {
            \Think\Log::write("平台默认印章找不到");
            return false;
        }
        //表示已经过期了
        if ($ressult_info['end_time'] < \tools\util\TimeF::timeform1(date('Y-m-d H:i:s'))) {
            $obj_seal = new \app\Common\Platform\Seal();
            $resut_reseal = $obj_seal->remakeSeal($ressult_info['id']);
            unset($obj_seal);
        }

        //重新获取该印章对应的的证书信息:
        $result_pfxinfo = $obj_userseal_model->getSealPfxInfo($ressult_info['seal_code']);
        unset($obj_userseal_model);
        if ($result_pfxinfo == false || $result_pfxinfo == null) {
            \Think\Log::write("平台证书信息找不到");
            return false;
        }

        $obj_seal_sign = new \app\Common\Cafactory\Seal();
        $arr_para['pdfFile'] = $pdf;
        $arr_para['SerialNo'] = $result_pfxinfo['SerialNo'];
        $final_pdf = $obj_seal_sign->sign_only_ca($arr_para);
        unset($obj_seal_sign);
        return $final_pdf;
    }

    /**
     * 合同签约处理-对单个请求时的单个处理-流转方签署
     * @param $request
     * @param $stomp
     * @param string $msg_id
     * @return mixed
     * @throws \Exception
     */
    public function sign_transfer_proc($request, $stomp, $msg_id = "")
    {
        //获取该开发者对应的授权用户组
        $obj_dataauth = new \app\Common\Platform\Dataauth();
        $arr_users = $obj_dataauth->getalluser($request->app_key);

        $tmpl_code = $request->tmpl_code;
        //读取模板数据流
        $obj_tmpl_data = new \app\Common\Platform\Tmpl();
        $tmpl_result = $obj_tmpl_data->getTmplDataByCode($tmpl_code);
        unset($obj_tmpl_data);
        if ($tmpl_result == false) {
            throw new \Exception('Y9956', 9956);
        }

        $tmpl_data = $tmpl_result['tmpl_data']; //数据流
        $tmpl_type = $tmpl_result['tmpl_type']; //模板类型，可以是普通的上传模板(common)，可以是签署的中间状态模板（transfer）
        if ($tmpl_type != "transfer") {
            throw new \Exception('Y9910', 9910);
        }

        unset($obj_dataauth);

        //判断是否设置了合同实际签署方，最后该字段会记录在附件中，作为签署发起事件
        if (isset($request->action_user) && !empty($request->action_user)) {
            $action_user = $request->action_user;
        } else {
            $action_user = "";
        }
        $action_userid = $this->getActionuserId($request->app_key, $action_user, $arr_users);
        $arr_extend['action_userid'] = $action_userid; //加入数组中，用于传递给其他的函数使用

        //$last_singer = false; //是否是最后流转签约人
        //$transfer_contract_id = 0;//流转签约已经形成的合同id
        //$transfer_id = 0; //该流转id
        //如果是流转签约合同，判断其签约时间和权限，返回是否是最后一个签约人

        $check_t_result = $this->check_transfer($tmpl_code, $request->app_key);
        $last_singer = $check_t_result['last_singer'];
        $transfer_contract_id = $check_t_result['transfer_contract_id'];
        $transfer_id = $check_t_result['transfer_id'];

        //锁定一下这份合同，这样其他流转方不可同时签署该合同
        $update_contract['islocking']=1;
        $update_contract['lock_id']=$request->lock_id;
        $obj_contract = new \app\Common\Model\Platform\Contract();
        $obj_contract->updateinfo($update_contract,$transfer_contract_id);
        if($obj_contract ==null ||$obj_contract==false){
            throw new \Exception("Y9908", 9908);
        }

        $arr_contact_user_signpara = array();
        //循环读取签约信息
        foreach ($request->sign_list as $key => $val) {
            //检查该签约人信息
            $user_check = $this->checksignuser($val->sign_user, true, $arr_users, $request->app_key);
            //企业类型检查成功
            if ($user_check['result'] == "e") {
                $arr_contact_user[$key] = $user_check['user_id']; //签约人加入列表
                $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password[$key] = $val->sign_user->seal_password; //企业签约，采用企业自己设置的密码
                //如果是默认印章 ，那么这里设置一下
                if ($val->sign_user->seal_code == "-1") {
                    $arr_sign_seal_code[$key] = $user_check['seal_code'];
                    $arr_sign_seal_password[$key] = $user_check['seal_password']; //企业签约，采用企业自己设置的密码
                }

            } else if ($user_check['result'] == "p1") {
                $arr_contact_user[$key] = $val->sign_user->user_id; //签约人加入列表
                $arr_sign_seal_code[$key] = $val->sign_user->seal_code;
                $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码
            } //个人类型需要动态创建
            else if ($user_check['result'] == "p2") {
                //todo
                //创建用户，返回user_id
                $data_user['mobile'] = $val->sign_user->mobileemail;
                $result_user_json = \tools\api\Inner::callAPI('platform.user.addp', $data_user);
                $result_user = json_decode($result_user_json);
                if ($result_user->code === 0) {
                    $arr_contact_user[$key] = (int)$result_user->data->user_id; //得到user_id
                } else {
                    throw new \Exception("Y9969", 9969);
                }

                $data_seal['user_id'] = $arr_contact_user[$key];
                $data_seal['mobile'] = $val->sign_user->mobileemail;
                $data_seal['akey'] = $request->app_key;
                $data_seal['user_name'] = $val->sign_user->user_name;
                $data_seal['identity_type'] = $val->sign_user->identity_type;
                $data_seal['identity_no'] = $val->sign_user->identity_no;
                //设置了图片
                if (isset($val->sign_user->seal_pic) && !empty($val->sign_user->seal_pic)) {
                    $data_seal['seal_pic'] = $val->sign_user->seal_pic;
                }
                $result_seal_json = \tools\api\Inner::callAPI('platform.seal.addp', $data_seal);
                $result_seal = json_decode($result_seal_json);
                if ($result_seal->code === 0) {
                    $arr_sign_seal_code[$key] = $result_seal->data->seal_code; //得到seal_code
                } else {
                    throw new \Exception("Y9968", 9968);
                }
                $arr_sign_seal_password[$key] = ""; //个人签约采用默认密码

            } //检查失败，获得失败码 ,直接返回
            else {
                throw new \Exception($user_check['result'], (int)$user_check['result']);
            }
            //检查签约参数
            foreach ($val->sign_para_list as $k_para => $val_para) {
                $check_sign_para = $this->checksignpara($val_para->sign_para);
                if ($check_sign_para) {
                    //失败编码，直接返回
                    throw new \Exception($check_sign_para, (int)$check_sign_para);
                }
                $temp_seal_code = $arr_sign_seal_code[$key];
                if (@$arr_contact_user_signpara[$temp_seal_code] == "") {
                    @$arr_contact_user_signpara[$temp_seal_code] = $this->getsignparainfo($val_para->sign_para);
                } else {
                    @$arr_contact_user_signpara[$temp_seal_code] .= "," . $this->getsignparainfo($val_para->sign_para);
                }
            }
        }

        $seal_count = @count($arr_contact_user_signpara);
        if ($seal_count > 5) {
            throw new \Exception("Y9919", 9919);
        }

        //只有发起方，或者普通签约模式，才能修改合同替换，流转方是不可以修改合同内容的
        $obj_seal = new \app\Common\Cafactory\Seal();
        $final_pdf = $obj_seal->signpdf_multi($tmpl_data, $request, $arr_sign_seal_code, $arr_sign_seal_password);
        unset($obj_seal);
        unset($tmpl_data);

        //只有模板是普通类型，并且target参数为空时，才是最普通的签约模式
        if ($final_pdf) {
            //存储合同的服务器/oss上
            //同步时，直接在这里new,异步的时候是传入的
            //是最后流转签署人 并且需要嵌入平台
            if (config('platform_sign') && $last_singer) {
                $final_pdf = $this->sign_platform($final_pdf);
                if (!$final_pdf) {
                    //todo  抛出异常到上层处理
                    throw new \Exception('Y9918', 9918);
                }
            }
            $after_result = $this->after_sign_transfer($final_pdf, $arr_contact_user,  $stomp, $request->app_key, $request->client_ip, $last_singer, $transfer_contract_id, $transfer_id, $arr_contact_user_signpara, $arr_sign_seal_code, $arr_sign_seal_password, $arr_extend);

            unset($final_pdf);
            return $after_result;
        } else {
            //失败
            //todo  抛出异常到上层处理
            throw new \Exception('Y9984', 9984);
        }
    }

    /**
     * 发起者发起合同通知接受者
     * @Author : lianghao
     * @param    telsendSmsCode
     */

    public function telsendSmsCode($tel,$tmpel,$end_time){
        if(send_message($tel,$tmpel,$content=array("end_time" => "{$end_time}"))!== false){
            $youjian = 100;//发送成功;
        }else{
            $youjian = '';
        }
        return $youjian;
    }


    /**
     * 发起者发起合同通知接受者
     * @Author : lianghao
     * @param    telsendSmsCode
     */
    public function telsendSmsInitiator($tel,$tmpel,$username){
        if(send_message($tel,$tmpel,$content=array("user_name" => "{$username}"))!== false){
            $youjian = 100;//发送成功;
        }else{
            $youjian = '';
        }
        return $youjian;
    }
}