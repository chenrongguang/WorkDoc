<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-29
 * Time: 14:26
 * 基类
 */

namespace app\gdr\controller;

use Think\Controller;

class Base extends \think\Controller
{

    public function _initialize()
    {
        //如果session在，那么什么都不处理
        $login_result = $this->login_check();
        if ($login_result == true) {
            return;
        }
        $request = \think\Request::instance();
        $req = $request->param();

        if(!isset($req['code']) || empty($req['code'])){
            //\tools\route\Redirect::redirect(config('gdr_app.buy_url'));//如果没有收到code的话，跳转到购买的url
            //测试：

        }

        $code=$req['code'];
        $para=config('gdr_app');

        //获取授权登录
        $obj_auth1688= new \app\service\auth1688();
        $member_id=$obj_auth1688->auth_proc($code,$para);
        if($member_id==false){
            \tools\route\Redirect::redirect(config('gdr_app.buy_url'));//如果没有收到code的话，跳转到购买的url
        }

        //获取会员信息：
        $obj_meminfo=new \app\service\memberinfo($member_id,$para);
        $result_member=$obj_meminfo->get_memberinfo();
        if($result_member==null || $result_member==false){
           // \tools\route\Redirect::redirect(config('gdr_app.buy_url'));//如果没有收到code的话，跳转到购买的url
        }

        //获取会员订购app的信息：
        $obj_apporder=new \app\service\apporder();
        $result_apporder=$obj_apporder->get_apporderInfo($member_id,$para);
        if($result_apporder==null || $result_apporder==false){
            // \tools\route\Redirect::redirect(config('gdr_app.buy_url'));//如果没有收到code的话，跳转到购买的url
        }

    }

    //登录判断
    private function login_check()
    {
        if (empty(\think\Session::get('user.memberId'))) {
            return false;
        }
        return true;
    }

}