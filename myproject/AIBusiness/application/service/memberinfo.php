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
 * Class
 * @package app\service
 * 更新获取会员信息
 */
class memberinfo
{
    private $auth_info;
    public function __construct($memberId, $para)
    {
        //获取授权信息：
        $obj_auth = new \app\service\auth1688();
        $result_auth = $obj_auth->getAuth($memberId, $para);
        if ($result_auth == false || $result_auth == null) {
            return false;
        }
        $this->auth_info=$result_auth;
    }

    /**
     */
    public function get_memberinfo()
    {


        //$get_auth = \tools\route\CurlCall::call($auth_url, $data, 30, config('code_to_token_port'));
        //return $get_auth;
    }

    //保存会员信息
    public function save_memberinfo($result_meminfo)
    {
        //{"aliId":"8888888888","resource_owner":"xxx","memberId":"xxxxxxx","expires_in":"36000","refresh_token":"479f9564-1049-456e-ab62-29d3e82277d9","access_token":"f14da3b8-b0b1-4f73-a5de-9bed637e0188","refresh_token_timeout":"20121222222222+0800"}
        $memberId = $result_token->memberId;
        $obj_auth = new  \app\model\Auth();
        $where['memberId'] = $memberId;
        $where['app_key'] = $app_key;
        $result_auth = $obj_auth->getSingle($where);
        $data['aliId'] = $result_token->aliId;
        $data['resource_owner'] = $result_token->resource_owner;
        $data['expires'] = date("Y-m-d H:i:s", time() + $result_token->expires_in - 10); //减掉10秒安全一点,accesstoken过期时间为10个小时-36000秒
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