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
    public function auth_proc($code,$para)
    {
        $result_token = $this->get_accesstoken_by_code($code,$para);
    }

    /**
     * @param $code
     * 根据code,换取access_token
     */
    public function get_accesstoken_by_code()
    {


    }

}