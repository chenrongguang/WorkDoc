<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-29
 * Time: 14:26
 * 基类,开发者模块使用的基类
 */

namespace app\home\controller;
use Think\Controller;

class Basedev extends Base {

    public function _initialize()
    {
       // $this->login_check();
        parent::_initialize();
        //开发者这里再加一层判断，如果是个人类型的账号，同样是失败，跳转到登陆页面
        if (\think\Session::get('user.user_type')=="p") {
            \tools\route\Redirect::redirect(\think\Url::build('login/index'));
        }
    }
    //动态获取图片数据，到前台展示
    public function getimg_data($val){

       return  parent::getimg_data($val);
    }
    public function getauthinfo($mobile){
       return  parent::getauthinfo($mobile);
    }

}