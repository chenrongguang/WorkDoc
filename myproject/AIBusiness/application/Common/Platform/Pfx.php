<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 * 数据权限校验类
 */

namespace app\Common\Platform;

class Pfx
{
    //创建用户ca证书
    public function GetPfxInfo($allpara)
    {

        /*
        //先查询表esc_pfx,如果查到了，判断其是否过期，没过期直接获得数据返回，过期了，走ca的延期接口重新走流程,直至获得pfx
        $obj_seal_model = new \app\Common\Model\Platform\UserPfx();
        $getpfx_result = $obj_seal_model->getUserPfx($allpara['user_id']);
        unset($obj_seal_model);

        if ($getpfx_result) {
            $end_time = $getpfx_result['EndTime'];
            //表示过期了
            if (\tools\util\TimeF::timeform1(date('Y-m-d H:i:s')) > $end_time) {
                //走重新申请ca,重新生成pfx的流程的流程
            } else {
                //todo ,读取pfx数据，
                $ret['pfx_data'] = $getpfx_result['PfxData'];
                $ret['SerialNo'] = $getpfx_result['SerialNo'];
                $ret['pfx_password'] = $getpfx_result['pfx_password'];
                $ret['StartTime'] = $getpfx_result['StartTime'];
                $ret['EndTime'] = $getpfx_result['EndTime'];
                return $ret; //返回
            }
        } else {
            $result_create = $this->createpfx($allpara);
            return $result_create;
        }
        */

        //干脆直接申请一张新证书，也不去续签老证书了
        $result_create = $this->createpfx($allpara);
        return $result_create;

    }


    private function createpfx($allpara)
    {
        try {
            $obj_kt = new \app\Common\Cafactory\Kt();
            $ktP10_result = $obj_kt->getKtP10();
            //得到：
            $P10 = $ktP10_result['Csr'];//证书下载请求(P10)
            $KeyIdentifier = $ktP10_result['KeyIdentifier'];//密钥标识（yyMMddHHmmssXXXXXX）
            //调用ra接口，获取证书
            $obj_ra = new \app\Common\Cafactory\Ra();
            $ra_result = $obj_ra->getRa($allpara, $P10);
            unset($obj_ra);
            if($ra_result ==false){
                throw new \Exception("Y9955",9955);
            }
            $SignatureCert = $ra_result['SignatureCert'];//签名证书
            //生成pfx文件
            $pfx_result = $obj_kt->getKtpfx($KeyIdentifier, $SignatureCert);
            unset($obj_kt);
            $pfx_id= $this->savepfx($allpara, $pfx_result, $KeyIdentifier, $P10, $ra_result);
            unset($P10);
            $pfx_result['StartTime'] = $ra_result['StartTime'];
            $pfx_result['EndTime'] = $ra_result['EndTime'];
            $pfx_result['SerialNo'] = $ra_result['SerialNo'];
            $pfx_result['PfxData'] = $ra_result['SignatureCert'];;
            $pfx_result['pfx_id'] = $pfx_id;

            return $pfx_result; //返回结果
        } catch (\Exception $e) {
            if (substr($e->getMessage(), 0, 1) !== 'Y') {
                throw new \Exception('Y9999', 9999);
            } else {
                throw new \Exception($e->getMessage(), $e->getCode());
            }
        }

    }

    //保存pfx文件
    private function savepfx($allpara, $kt_result, $KeyIdentifier, $P10, $ra_result)
    {
        //保存到远程oss服务器
        //todo
        $pfxPassword = $kt_result['pfxpassword']; //直接明文存储
        $pfxPath = "";//暂时先不存这个了
        //保存pfx信息到数据库
       return   $this->_doInsertPfxInfo($pfxPath, $pfxPassword, $P10, $KeyIdentifier, $ra_result, $kt_result['pfx_data'], $allpara['user_id'],$allpara['app_key'],$allpara['user_name'],$allpara['identity_type'],$allpara['identity_no']);
    }

    /**
     * 保存PFX信息
     * @Author : crg
     * @param $PfxUrl
     * @param $PfxPassword
     * @param $P10
     * @param $KeyIdentifier
     * @param $returnRa
     * @param $PfxData
     * @param $UserId
     * @throws \Exception
     */
    private function _doInsertPfxInfo($PfxUrl, $PfxPassword, $P10, $KeyIdentifier, $returnRa, $PfxData, $UserId,$app_key,$user_name,$identity_type,$identity_no)
    {
        try {
            if (!empty($PfxUrl)) {
                $pfxInfo['pfx_url'] = $PfxUrl;
            }
            $pfxInfo['pfx_password'] = $PfxPassword;
            $pfxInfo['create_time'] = time();

            $pfxInfo['SerialNo'] = $returnRa['SerialNo'];//序列号
            $pfxInfo['StartTime'] = $returnRa['StartTime'];//有效期起始时间 格式：yyyyMMddHHmmss
            $pfxInfo['EndTime'] = $returnRa['EndTime'];//有效期截止时间 格式：yyyyMMddHHmmss

            if(!empty($PfxData)){
                $pfxInfo['PfxData'] = $PfxData;//PfxData
            }

            //$pfxInfo['PfxData'] = $PfxData;//PFX证书信息

            if(!empty($app_key)){
                $pfxInfo['app_key'] = $app_key;//app_key
            }
            if(!empty($user_name)){
                $pfxInfo['user_name'] = $user_name;//user_name
            }
            if(!empty($identity_type)){
                $pfxInfo['identity_type'] = $identity_type;//identity_type
            }
            if(!empty($identity_no)){
                $pfxInfo['identity_no'] = $identity_no;//identity_no
            }

            $userPfxModel = new \app\Common\Model\Platform\UserPfx();
            $addUserPfx = $userPfxModel->addUserPfx($UserId, $pfxInfo);
            unset($userPfxModel);
            return $addUserPfx; //返回id

        } catch (\Exception $e) {
            \think\Log::write("保存证书错误：" . $e->getMessage());
            throw new \Exception('Y0204', 204);
        }
    }

    /**
     * 保存PFX文件
     * @Author : crg
     * @param $mobile
     * @param $pfxData
     * @return string
     * @throws \Exception
     */
    private function _dosavePfxFile($mobile, $pfxData)
    {
        try {
            $_docPath = config('PFX_PATH');
            $lastString = substr($_docPath, -1, 1);
            $requireSprit = $lastString == '/' ? true : false;
            $path = $requireSprit ? $_docPath : $_docPath . '/';
            $filePath = $path . $mobile . '.pfx';
            $fp = fopen($filePath, "w+");
            fwrite($fp, $pfxData);
            fclose($fp);
            return $filePath;
        } catch (\Exception $e) {
            \think\Log::write("生成个人印章错误：" . $e->getMessage());
            throw new \Exception('Y0205', 205);
        }
    }

}