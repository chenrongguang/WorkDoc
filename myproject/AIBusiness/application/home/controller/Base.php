<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-29
 * Time: 14:26
 * 基类
 */

namespace app\home\controller;
use Think\Controller;

class Base extends \think\Controller {

    public function _initialize()
    {
        $this->login_check();
        $user_type = \think\Session::get('user.user_type');
        $user_id = \think\Session::get('user.user_id');
        $this->assign('user_type',$user_type);//用户的类型传入页面 个人没有演示中心和高级应用
        $this->menu_node($user_id,$user_type);
        //获取当前模块控制器方法

        $request=  \think\Request::instance();
        $rule_url =  '/'.$request->module().'/'.$request->controller().'/'.$request->action();
        $this->left_menu($user_id,$user_type,$rule_url);

    }


    /**
     * @param $val
     * @return 菜单权限
     *
     */
    public function menu_node($user_id,$user_type){
        //菜单权限
        $auth_menu_list = \think\Session::get($user_id.'_'.$user_type);
        $groups = $auth_menu_list['groups'];
        $this->assign('groups', $groups);

    }



    /**
     * @param $val
     * @return 菜单权限
     *
     */
    public function left_menu($user_id,$user_type,$url){
        $url = strtolower($url);
        $auth_menu_list = \think\Session::get($user_id.'_'.$user_type);
        $info = array();
        if(is_array($auth_menu_list)){
            foreach($auth_menu_list['url'] as $k =>$v){
                if($url == $v['url']){
                    $info['id'] = $v['id'];
                    $info['pid'] = $v['pid'];
                    $info['group_id'] = $v['group_id'];
                    $info['level'] = $v['level'];
                }
            }
        }
        if($info){
            if($info['level'] != 2){
                $info['id'] = $info['pid'];
            }
        }else{
            $info = '';
        }
        if(isset($info['group_id'])){
            //$this->assign('info_left', $info);
            $group_id =  $info['group_id'];
            $user_type = \think\Session::get('user.user_type');
            $user_id = \think\Session::get('user.user_id');
            //菜单权限
            $auth_menu_list = \think\Session::get($user_id.'_'.$user_type);
            $nodes = $auth_menu_list['user_type_group'][$user_id.'_'.$user_type.'_'.$group_id];
          	$arr = array('wd_1.png','wd_2.png','wd_3.png','wd_4.png','wd_5.png','wd_6.png','wd_7.png');
            foreach($nodes as $kk => $vv){
            	$nodes[$kk]['log_img'] = $arr[$kk];
            }
            
            $html1 ="<div class=\"mation_left\">";
         	$htm2  = '';
            $html3 = "</div>";
            /*$folder = '/assets/img/aimg';
			$arr = array('wd_1.png','wd_2.png','wd_3.png','wd_4.png','wd_5.png','wd_6.png','wd_7.png','wd_8.png');
			$note = array();
			foreach($arr as $k=>$v){
				
				if(!file_exists($folder.$v)){
				        $note[] = $v;
				   }
				   $htm21 .= "<div class=\"wd\"><img  src=\"$folder/$v\" /></div>";
			}*/
			
			foreach($nodes as $k =>$v){
                $htm2 .= "<a class=\"wd\" id='wd".$v['id']."' href='".$v['url']."'><img class\"wd_img\" src=\"/assets/img/aimg/".$v['log_img']."\" /><p id='solo_p".$v['id']."'>".$v['title']."</p></a>";				     
            }
           
            $new_heml = $html1.$htm2.$html3;
        }else{
            $new_heml='';
        }
        $scrpt = '';
        if(isset($info['group_id'])){
            $scrpt .= "$('.menutop_".$info['group_id']."').css(\"color\", \"red\");";
        }
        if(isset($info['id'])){
            $scrpt .= "$('#wd".$info['id']."').css(\"background\", \"url(/assets/img/aimg/hb.png) center top  no-repeat\");";
        }
        //$this->assign('menu',$nodes);
        $this->assign('html',$new_heml);
        $this->assign('scrpt',$scrpt);


    }

    //登录判断
    private function login_check(){
        $last_access = \think\Session::get('user.last_access');
        if($last_access && time()-$last_access > 200*60){
        }else{
            \think\Session::set('user.last_access',time()); //如果点击更新session时间
        }
        $last_access = \think\Session::get('user.last_access');
        $this->assign('last_access',$last_access);
        $this->assign('_time',time());

        if (empty( \think\Session::get('user.user_name'))) {
            \tools\route\Redirect::redirect(\think\Url::build('login/index'));
        }
    }

    //动态获取图片数据，到前台展示
     public function getimg_data($val){
        $result_json = \tools\api\Inner::callAPI('platform.seal.createimg', $val);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            return $result->data->img_data;
        } else {
           return null;
        }
    }
    public function getauthinfo($mobile){
        $data['mobile'] = $mobile;
        $result_json = \tools\api\Inner::callAPI('platform.user.getsingle', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            if(empty($result->data->identity_no)){
                return false;
            }
            $return=array('identity_type'=>$result->data->identity_type,'identity_no'=>$result->data->identity_no);
            return $return;
        } else {
            return false;
        }
    }

    //获取个人用户信息
    public function getuserinfo($mobile){
        $data['mobile'] = $mobile;
        $result_json = \tools\api\Inner::callAPI('platform.user.getsingle', $data);
        $result = json_decode($result_json,true);
        $info = \tools\db\ResultHandle::process($result);
        if ($result['code'] === 0) {
            return $info['data'];
        } else {
            return false;
        }
    }



    //获取个人消费者信息
    public function getsignuser_per($online_person_userid, $online_person_shape, $online_person_width, $online_person_height)
    {
        //获取个人签名的编号:
        $f_result = true;
        /*
        $data['user_id'] = (int)$online_person_userid;
        $data['app_key'] = "-1";
        $data['user_name'] = "测试者";
        $data['identity_type'] = "N";
        $data['identity_no'] = "00000000000";
        */
        $data['user_id'] = (int)config('conf-dict.default_userid');
        $data['mobile'] = config('conf-dict.default_mobile'); //系统默认的参数
        $data['app_key'] = config('conf-dict.default_appkey');
        $data['user_name'] = config('conf-dict.default_username');
        $data['identity_type'] = config('conf-dict.default_identitytype');
        $data['identity_no'] = config('conf-dict.default_identityno');

        $data['image_shape'] = (int)$online_person_shape;
        $data['image_width'] = (int)$online_person_width;
        $data['image_height'] = (int)$online_person_height;
        $result_json = \tools\api\Inner::callAPI('platform.seal.addp', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            $arr_user = array("user_type" => "p", "mobileemail" => config('conf-dict.default_mobile'), "user_id" => (int)config('conf-dict.default_userid'), "seal_code" => $result->data->seal_code,);
        } else {
            $f_result = false;
        }
        if ($f_result) {
            return $arr_user;
        } else {
            return $f_result;
        }
    }



    //获取企业的用户信息
    public function getsignuser_ent($val_seal_code)
    {
        $f_result = true;
        $data['seal_code'] = $val_seal_code;
        $result_json = \tools\api\Inner::callAPI('platform.seal.getsingle', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            $user_id = $result->data->user_id;//获取用户id
            $data_user['user_id'] = $user_id;
            $data_user['user_type'] = "e";
            $result_json_user = \tools\api\Inner::callAPI('platform.user.getsinglebyid', $data_user);
            $result_user = json_decode($result_json_user);
            if ($result_user->code === 0) {
                $arr_user = array("user_type" => "e", "mobileemail" => $result_user->data->mobile, "user_id" =>(int)$user_id, "seal_code" => $val_seal_code, "seal_password" => $result->data->seal_password,"confirm_status" => $result->data->confirm_status);
            } else {
                $f_result = false;
            }
        } else {
            $f_result = false;
        }
        if ($f_result) {
            return $arr_user;
        } else {
            return $f_result;
        }
    }

    //获取用户信息,不区分企业或者个人
    public function getsignuser($val_seal_code)
    {
        $f_result = true;
        $data['seal_code'] = $val_seal_code;
        $result_json = \tools\api\Inner::callAPI('platform.seal.getsingle', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
                //$arr_user = array("user_type" => "e", "mobileemail" => $result_user->data->mobile, "user_id" =>(int)$user_id, "seal_code" => $val_seal_code, "seal_password" => $result->data->seal_password,"confirm_status" => $result->data->confirm_status);
            $arr_seal = array("seal_code" => $val_seal_code, "seal_password" => $result->data->seal_password,"confirm_status" => $result->data->confirm_status);
        } else {
            $f_result = false;
        }
        if ($f_result) {
            return $arr_seal;
        } else {
            return $f_result;
        }
    }

    public function getsignparalist_ent($val_seal_code, $arr_ent_content_keyword, $arr_ent_content_cursor)
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


    public function getsignparalist_per($arr_per_content_keyword, $arr_per_content_cursor)
    {
        //循环分析
        $para_index = 0;
        foreach ($arr_per_content_keyword as $k => $val) {
            if (empty($val)) {
                continue;
            }
            $temp_seal = $val;
            $arr_keyword = explode('@#@', $temp_seal);
            $keyword = $arr_keyword[1]; //根据规则第二个就是设置的关键词
            $arr_sign_para[$para_index]["sign_para"] = array('page' => "0", "location_type" => 3, "keyword" => $keyword);
            $para_index++;
        }

        foreach ($arr_per_content_cursor as $i => $val_cursor) {
            if (empty($val_cursor)) {
                continue;
            }
            $temp_seal = $val_cursor;
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