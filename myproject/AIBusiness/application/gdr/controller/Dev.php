<?php
namespace app\home\controller;
use think\Db;
class Dev extends Basedev
{
    public function applist()
    {
        // $request = \think\Request::instance();

        //直接进入页面时，不查询，否则速度慢
        $data['user_id'] = \think\Session::get('user.user_id');
        $result_json = \tools\api\Inner::callAPI('platform.dev.applist', $data);
        $result = json_decode($result_json);

        if ($result->code === 0) {
            $list = $result->data->list;
        } else {
            $list = "";
        }
        $business_status = \think\Session::get('user.confirm_status');//企业审核状态
        $this->assign('business_status',$business_status);
        return $this->fetch("", array('list' => json_decode(json_encode($list), true)));
    }

    //新增和查看页
    public function appadd()
    {
        $request = \think\Request::instance();
        $req = $request->param();

        $app_key = isset($req["app_key"]) ? $req["app_key"] : "";
        //新增:
        if (empty($app_key)) {
            $arr_detail = array(
                'app_name' => '',
                'app_key' => \tools\db\MakeKey::getSealCode(),
                'app_secrect' => \tools\db\MakeKey::getSealCode(),
                'hd_app_type' => 0,
                'hd_app_key'=>"",
                'app_notify_url' => '',
                'app_notify_port' => '',
                'desc' => '',
                'pic_url' => '',
                'confirm_status'=>'',
                'id'=> '',
            );
        } else {
            //读取数据：
            $where = array(
                'app_key' => $req['app_key']
            );
                $result_json = \tools\api\Inner::callAPI('platform.dev.appgetsingle', $where);

            $result = json_decode($result_json);
            if ($result->code === 0) {
                $arr_detail = json_decode( json_encode($result->data),true);
                $arr_detail["hd_app_key"]=$arr_detail["app_key"];
                $arr_detail["hd_app_type"]=$arr_detail["app_type"];
                $arr_detail["id"]=$arr_detail["id"];
                $arr_detail["confirm_status"]=$arr_detail["confirm_status"];

            }
            else{
                \tools\route\Redirect::redirect(\think\Url::build('login/index'));
            }
        }
        return $this->fetch('', $arr_detail);

    }

    public function appaddDo()
    {
        $request = \think\Request::instance();
        $req = $request->param();

        $hd_app_key = $req["hd_app_key"];
        //新增
        if (empty($hd_app_key)) {
            $arr_detail = array(
                'user_id' => \think\Session::get('user.user_id'),
                'app_name' => $req['app_name'],
                'app_key' => $req['app_key'],
                'app_secrect' => $req['app_secrect'],
                'app_type' => (int)$req['hd_app_type'],
                'app_notify_url' => $req['app_notify_url'],
                'app_notify_port' => (int)$req['app_notify_port'],
                'desc' => $req['desc'],
                'pic_url' => $req['pic_url'],
            );
            $result_json = \tools\api\Inner::callAPI('platform.dev.appadd', $arr_detail);
        }else{
            //编辑
            $arr_detail = array(
                'id' => (int)$req['id'],
                'user_id' => \think\Session::get('user.user_id'),
                'app_name' => $req['app_name'],
                'app_key' => $req['app_key'],
                'app_secrect' => $req['app_secrect'],
                'app_type' => (int)$req['hd_app_type'],
                'app_notify_url' => $req['app_notify_url'],
                'app_notify_port' => (int)$req['app_notify_port'],
                'desc' => $req['desc'],
                'pic_url' => $req['pic_url'],
                'confirm_status' => $req['confirm_status'],
            );
            $result_json = \tools\api\Inner::callAPI('platform.dev.appupdate', $arr_detail);
        }
        $result = json_decode($result_json);
        if ($result->code === 0) {
            $return_data['url'] = \think\Url::build('dev/applist');
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '应用保存成功', $return_data);
        } else {
            $rep_data = \tools\route\Resp::get_response('FAIL', $result->code, '保存失败，请重试!');
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }


    //授权
    public function authDo()
    {
        $request = \think\Request::instance();
        $req = $request->param();

        $app_key = $req["app_key"];
        //授权
        if (empty($app_key)) {
            $rep_data = \tools\route\Resp::get_response('FAIL', -1, '未获取到授权信息');
        }
        else {
            $arr_detail = array(
                'user_id' => \think\Session::get('user.user_id'),
                'app_key' => $app_key
            );
            $result_json = \tools\api\Inner::callAPI('platform.dev.authadd', $arr_detail);
            $result = json_decode($result_json);
            if ($result->code === 0) {
                $return_data['url'] = \think\Url::build('dev/myauthlist');
                $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '授权成功', $return_data);
                $App_model = new \app\Common\Model\Platform\App();
                $App_model->deleteReids($app_key,'删除redis里面key值失败!'); //删除应用同时删除redis
            } else {
                $rep_data = \tools\route\Resp::get_response('FAIL', $result->code, '授权失败，请重试!');
            }
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }



    public function auth()
    {
        $request = \think\Request::instance();
        $req = $request->param();
        $app_key = isset($req["app_key"]) ? $req["app_key"] : "";
        $setting = $this->setting_cache();
        C($setting);
        return $this->fetch("", array('app_key' => $app_key));
    }

    //公开的，第三方应用列表
    public function authlist()
    {
        $request = \think\Request::instance();
        $req = $request->param();
        if(isset($req['app_key'])){
            $data['user_id'] = \think\Session::get('user.user_id');
            $data['app_type'] = 1;
            $data['app_key'] = $req['app_key'];
            $data['confirm_status'] = 2;
            $result_json = \tools\api\Inner::callAPI('platform.dev.appmarketlist', $data);
            $result = json_decode($result_json);
            if ($result->code === 0) {
                $list = $result->data->list;
            } else {
                $list = "";
            }
            $this->assign('app_key',$req['app_key']);
            return $this->fetch("", array('list' => json_decode(json_encode($list), true),'query'=>2));
        }else{
            $this->assign('app_key','');
            return $this->fetch("", array('list' => '','query'=>1));
        }



    }

    public function myauthlist()
    {
        //直接进入页面时，不查询，否则速度慢
        $data['user_id'] = \think\Session::get('user.user_id');
        $result_json = \tools\api\Inner::callAPI('platform.dev.myauthlist', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            $list = $result->data->list;
        } else {
            $list = "";
        }
        $business_status = \think\Session::get('user.confirm_status');//企业审核状态
        $this->assign('business_status',$business_status);
        return $this->fetch("", array('list' => json_decode(json_encode($list), true)));
    }

    public function onlinestep1()
    {
        //获取应用列表
        $data['user_id'] = \think\Session::get('user.user_id');
        $result_json = \tools\api\Inner::callAPI('platform.dev.applist', $data);
        $result_app = json_decode($result_json);
        if ($result_app->code === 0) {
            $app_list = json_decode(json_encode($result_app->data->list), true);
        }
        //获取所有合同
        $where['use_yn'] = 'Y';
        $where['user_id'] = \think\Session::get('user.user_id');
        $where['tmpl_type'] = 'common';
        $list = Db::name('tmpl')->field('tmpl_id,user_id,tmpl_code,tmpl_name')->where($where)->order('create_time desc')->select();
        $this->assign('tmpl_list',$list);
        return $this->fetch("", array("app_list" => $app_list));
    }

    public function onlinestep2()
    {
        $where['use_yn'] = 'Y';
        $where['confirm_status'] = 2;
        $where['user_id'] = \think\Session::get('user.user_id');;
        $where['seal_type'] = 'e';
        $list = Db::name('UserSeal')->field('id,user_id,seal_code,name')->where($where)->order('create_time desc')->select();
        $this->assign('seal_list',json_encode($list));
        return $this->fetch();
    }

    public function onlinestep3()
    {
        return $this->fetch();
    }

    public function onlinestep4()
    {
        return $this->fetch("");
    }


    //获取合同模板信息
    public function loadtmplinfo()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $tmpl_code = $post['tmpl_code'];

        $data['tmpl_code'] = $tmpl_code;

        $result_json = \tools\api\Inner::callAPI('platform.tmpl.getsingle', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            $return_data['tmpl_url'] = $result->data->tmpl_url;
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '成功获取模板地址', $return_data);
        } else {
            $rep_data = \tools\route\Resp::get_response('FAIL', "0001", '不存在该模板编码');
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }


    //获取印章信息
    public function loadsealinfo()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $seal_code = $post['seal_code'];

        $data['seal_code'] = $seal_code;

        $result_json = \tools\api\Inner::callAPI('platform.seal.getsingle', $data);
        $result = json_decode($result_json);
        if ($result->code === 0) {
            if($result->data->confirm_status != 2){ //印章没有审核报错
                $rep_data = \tools\route\Resp::get_response('FAIL', "0003", '印章没有审核成功');
                \tools\route\AjaxReturn::ajx_return($rep_data);
            }
            $return_data['name'] = $result->data->name;

            //手动上传类型的印章
            if (isset($result->data->seal_img) && !empty($result->data->seal_img)) {
                $return_data['img_data'] = $result->data->seal_img;
                $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '成功获取印章信息', $return_data);
            } else {
                $arr_detail = array(
                    'seal_code' => $seal_code,
                    'name' => $result->data->name,
                    'image_name' => $result->data->image_name,
                    'image_name2' => isset($result->data->image_name2) ? $result->data->image_name2 : "",
                    'image_width' => $result->data->image_width,
                    'image_height' => $result->data->image_height,
                    'image_shape' => $result->data->image_shape,
                    'color' => $result->data->color,
                    'font_size' => $result->data->font_size,
                    'seal_password' => $result->data->seal_password
                );

                $img_data = $this->getimg_data($arr_detail);
                if ($img_data != null) {
                    $return_data['img_data'] = "data:image/png;base64," . $img_data;
                    $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '成功获取印章信息', $return_data);
                } else {
                    $rep_data = \tools\route\Resp::get_response('FAIL', "0002", '获取印章信息失败');
                }
            }
        } else {
            $rep_data = \tools\route\Resp::get_response('FAIL', "0001", '不存在该印章信息');
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);

    }

    /**
     * 获取配置文件存入缓存中
     * @Author : lianghao
     * @param    setting_cache
     */

    public function setting_cache() {
        $setting = array();
        $res = Db::name('AdminSetting')->field('name,data')->select();
        foreach ($res as $key=>$val) {
            $setting[$val['name']] = $val['data'];
        }
        foreach ($setting as $keys => $vals) {
            $setting[$keys] = $this->is_serialized_string($vals) ? unserialize($vals) : $vals;
        }
        F('setting', $setting);
        return $setting;
    }

    /**
     * 判断是不是序列化
     * @Author : lianghao
     * @param    is_serialized_string
     */

    function is_serialized_string( $data ) {
        $data = trim( $data );
        if ( 'N;' == $data )
            return true;
        if ( !preg_match( '/^([adObis]):/', $data, $badions ) )
            return false;
        switch ( $badions[1] ) {
            case 'a' :
            case 'O' :
            case 's' :
                if ( preg_match( "/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $data ) )
                    return true;
                break;
            case 'b' :
            case 'i' :
            case 'd' :
                if ( preg_match( "/^{$badions[1]}:[0-9.E-]+;\$/", $data ) )
                    return true;
                break;
        }
        return false;
    }

    public function xieyi()
    {
        $setting = $this->setting_cache();
        C($setting);
        return $this->fetch();
    }

    /***
     * @return mixed
     * 删除应用
     */
    public function ajaxDelApp()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $app_key = $post['app_key'];
        $where['app_key'] = $app_key;
        $data['use_yn'] = 'N';//表示已删除
        $model = new \app\Common\Model\Platform\App();
        $result = $model->edit($where,$data);
        if ($result) {
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "删除成功");
            $model->deleteReids($app_key,'删除APP_KEY对应删除redis失败'); //删除应用同时删除redis
        } else {
            $rep_data = \tools\route\Resp::get_response('Fail', '001', '删除失败，请重试');
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }


    /***
     * @return mixed
     * 取消授权该应用
     */
    public function ajaxCancelApp()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $auth_id = $post['auth_id'];
        $app_key = $post['app_key'];
        $where['auth_id'] = $auth_id;
        $data['use_yn'] = 'N';//表示已删除
        $model = new \app\Common\Model\Platform\AppAuth();
        $result = $model->edit($where,$data);
        if ($result) {
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "取消授权成功");
            $App_model = new \app\Common\Model\Platform\App();
            $App_model->deleteReids($app_key,'取消APP_KEY对应授权redis失败'); //删除应用同时删除redis
        } else {
            $rep_data = \tools\route\Resp::get_response('Fail', '001', '取消授权失败，请重试');
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }






}
