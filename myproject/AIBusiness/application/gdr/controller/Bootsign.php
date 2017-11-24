<?php
namespace app\home\controller;

use think\Db;

class Bootsign extends Basedev
{

    public function onlinestep1()
    {
        //获取所有合同
        $where['use_yn'] = 'Y';
        $where['user_id'] = \think\Session::get('user.user_id');
        $where['tmpl_type'] = 'common';
        $list = Db::name('tmpl')->field('tmpl_id,user_id,tmpl_code,tmpl_name')->where($where)->order('create_time desc')->select();
        $this->assign('tmpl_list',$list);
        return $this->fetch();
    }

    public function onlinestep2()
    {
        $where['use_yn'] = 'Y';
        $where['confirm_status'] = 2;
        $where['user_id'] = \think\Session::get('user.user_id');
        $where['seal_type'] = 'e';
        $list = Db::name('UserSeal')->field('id,user_id,seal_code,name')->where($where)->order('create_time desc')->select();
        $this->assign('seal_list', json_encode($list));
        return $this->fetch();
    }

    public function onlinestep3()
    {
        return $this->fetch();
    }

    public function onlinestep4()
    {
        return $this->fetch("", array("file_name" => "aaa.pdf"));
    }


    public function ajaxsignboot()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);

        $arr_finally = array();

        $tmpl_code = isset($post['tmpl_code']) ? $post['tmpl_code'] : "";
        $online_tmpl_url = isset($post['tmpl_url']) ? $post['tmpl_url'] : "";
        $seal_seal_code = $post['online_seal_code'];
        $content_keyword = $post['content_keyword'];
        $content_cursor = $post['content_cursor'];
        $online_reciver = $post['online_reciver'];
        if (empty($tmpl_code) && empty($online_tmpl_url)) {
            $rep_data = \tools\route\Resp::get_response('Fail', '009', "必须上传文件或者选择模板");
            \tools\route\AjaxReturn::ajx_return($rep_data);

        }
        if (empty($tmpl_code)) {
            //读取文件流
            $obj_tmpl = new \app\Common\Platform\Tmpl();
            $tmpl_result = $obj_tmpl->getTmplDataByUrl(str_replace("https://","http://",$online_tmpl_url));
            if ($tmpl_result == false) {
                $rep_data = \tools\route\Resp::get_response('FAIL', "008", '读取文件失败');
                \tools\route\AjaxReturn::ajx_return($rep_data);
            } else {
                $data = $tmpl_result['tmpl_data'];//这是解码后的
                $arr_finally['file_data'] = base64_encode($data);
                unset($tmpl_result);
            }
        } else {
            $arr_finally['tmpl_code'] = $tmpl_code;
        }

        $arr_finally['subject'] = "1001";
        $arr_finally['query_code'] = "signboot";
        $arr_finally['action_user'] = \think\Session::get('user.mobile');//当前用户作为发起签署方
        $arr_finally['theme'] = "流转签约测试";//合同主题

        $arr_content_keyword = explode('|||', $content_keyword);//所有采用关键词的参数设置
        $arr_content_cursor = explode('|||', $content_cursor);//所有采用的坐标参数设置

        $arr_reciver = explode('@|@', $online_reciver);//接收者
        //企业签约信息
        foreach ($arr_reciver as $k_receiver => $val_receiver) {
            $ok_receiver[$k_receiver]["target_info"] = array(
                'target_type'=>'user',
                'target_id'=>$val_receiver,
                'target_time'=> date('Y-m-d H:i:s',strtotime('+5 day')),
                'target_content'=> '',
                );
        }
        unset($user_model);
        unset($user_info_model);
        $arr_finally['pub_target_list']=$ok_receiver;

        $seal_temp = $this->getsignuser($seal_seal_code);
        if ($seal_temp == false) {
            $rep_data = \tools\route\Resp::get_response('Fail', "007", "获取印章失败");
            \tools\route\AjaxReturn::ajx_return($rep_data);
        }
        $arr_temp=array_merge($seal_temp,array("user_type" => \think\Session::get('user.user_type'), "mobileemail" => \think\Session::get('user.mobile'), "user_id" =>(int)\think\Session::get('user.user_id')));

        $sign_list[0]["sign_user"] = $arr_temp;
        $sign_list[0]["sign_para_list"] = $this->getsignparalist($seal_seal_code, $arr_content_keyword, $arr_content_cursor);

        $arr_finally['sign_list'] = $sign_list; //汇总签约信息

        $result_json = \tools\api\Inner::callAPI('platform.sign.single', $arr_finally);
        $result = json_decode($result_json);

        if ($result->code === 0) {
            sleep(2);//延时2秒，留给0ss上传的时间
            $return_data['url'] = $result->data->file_info;
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "签约成功", $return_data);
        } else {
            $rep_data = \tools\route\Resp::get_response('Fail', '001', $result->message);
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }



    public function getsignparalist($val_seal_code, $arr_ent_content_keyword, $arr_ent_content_cursor)
    {
        //循环分析
        $para_index = 0;
        foreach ($arr_ent_content_keyword as $k => $val) {
            if (empty($val)) {
                continue;
            }
            $temp_seal = $val;
            $check_seal_code = strpos($temp_seal, $val_seal_code . "@#@"); //查看是否是该印章，不是的话跳过该组
            if ($check_seal_code === false) {
                continue;
            }

            $arr_keyword = explode('@#@', $temp_seal);
            $keyword = $arr_keyword[1]; //根据规则第二个就是设置的关键词
            $arr_sign_para[$para_index]["sign_para"] = array('page' => "0", "location_type" => 3, "keyword" => $keyword);
            $para_index++;
        }

        foreach ($arr_ent_content_cursor as $i => $val_cursor) {
            if (empty($val_cursor)) {
                continue;
            }
            $temp_seal = $val_cursor;
            $check_seal_code = strpos($temp_seal, $val_seal_code . "@#@"); //查看是否是该印章，不是的话跳过该组
            if ($check_seal_code === false) {
                continue;
            }

            $arr_cursor = explode('@#@', $temp_seal);
            $pageNo = $arr_cursor[1]; //根据规则第二个就是页码
            $lx = $arr_cursor[2]; //根据规则第二个就是x坐标
            $ly = $arr_cursor[3]; //根据规则第二个就是y坐标
            $arr_sign_para[$para_index]["sign_para"] = array('page' => $pageNo, "location_type" => 2, "lx" => (int)$lx, "ly" => (int)$ly);
            $para_index++;
        }

        return $arr_sign_para;

    }


}
