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
 * 接口调用
 */
class intf
{
    private $code;
    private $para;

    public function __construct($code, $para)
    {
        $this->code = $code;
        $this->para = $para;
    }

    //授权流程
    //返回登录的memberId
    public function auth_proc()
    {
        $result_token = $this->get_accesstoken_by_code();
    }

    /**
     * @param $code
     * 根据code,换取access_token
     */
    public function get_accesstoken_by_code()
    {


    }

}