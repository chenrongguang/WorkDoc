<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/11/23
 * Time: 8:45
 */

namespace app\service;

use think\Config;

/**
 * Class auth1688
 * @package app\service
 * 授权登录1688
 */
class auth1688
{

    //授权流程
    //返回登录的memberId
    public function auth_proc($code, $para)
    {
        $result_token = $this->get_accesstoken_by_code($code, $para);
        if ($result_token == false) {
            return false;
        }
        $obj_result_token=json_decode($result_token);//转换为对象
        $memberId = $obj_result_token->memberId;
        if (empty($memberId)) {
            return false;
        }
        //保存授权信息
        $this->saveAuth($obj_result_token, $para['app_key']);
        return $memberId;

    }

    /**
     * @param $code
     * 根据code,换取access_token
     */
    public function get_accesstoken_by_code($code, $para)
    {
        //准备url
        $YOUR_APPKEY = $para['app_key'];
        $YOUR_APPSECRET = $para['app_secrect'];
        $YOUR_REDIRECT_URI = $para['entrance_url'];
        $auth_url = str_replace('YOUR_APPKEY',$YOUR_APPKEY,  config('code_to_token_url'));
        $auth_url = str_replace('YOUR_APPSECRET',$YOUR_APPSECRET,  $auth_url);
        $auth_url = str_replace('YOUR_REDIRECT_URI',$YOUR_REDIRECT_URI, $auth_url);
        $auth_url = str_replace('YOUR_CODE',$code,  $auth_url);
        $data = "";

        $get_auth = \tools\route\CurlCall::call($auth_url, $data, 30, config('code_to_token_port'));
        return $get_auth;

    }

    //保存授权信息
    public function saveAuth($result_token, $app_key)
    {
        //{"aliId":"8888888888","resource_owner":"xxx","memberId":"xxxxxxx","expires_in":"36000","refresh_token":"479f9564-1049-456e-ab62-29d3e82277d9","access_token":"f14da3b8-b0b1-4f73-a5de-9bed637e0188","refresh_token_timeout":"20121222222222+0800"}
        $memberId = $result_token->memberId;
        $obj_auth = new  \app\model\Auth();
        $where['memberId'] = $memberId;
        $where['app_key'] = $app_key;
        $result_auth = $obj_auth->getSingle($where);
        $data['aliId'] = $result_token->aliId;
        $data['resource_owner'] = $result_token->resource_owner;
        $data['expires'] = date("Y-m-d H:i:s",time() + $result_token->expires_in - 10); //减掉10秒安全一点,accesstoken过期时间为10个小时-36000秒
        $data['refresh_token'] = $result_token->refresh_token;
        $data['access_token'] = $result_token->access_token;
        $data['refresh_token_timeout'] = substr($result_token->refresh_token_timeout, 0, 14);

        //新增：
        if ($result_auth == null || $result_auth == false) {
            $data['memberId'] = $result_token->memberId;
            $data['app_key'] = $app_key;
            $obj_auth->addData($data);
        }//更新
        else {
            $obj_auth->updateData($where, $data);
        }
    }


}