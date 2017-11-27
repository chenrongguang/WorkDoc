<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-29
 * Time: 14:26
 * 基类
 */

namespace app\gdr\controller;

use app\gdr\controller\Base;
use Think\Controller;

class Index extends Base
{
    /**
     * 登录页面
     */
    public function index()
    {
        return $this->fetch();
    }

    public function showVerify()
    {
        $request = \think\Request::instance();
        $req = $request->param();

        $type = $req["type"];
        $captcha = new \tools\util\Verify(150, 50, 4);
        $pic = $captcha->showImg();
        $login_verify_code = $captcha->getCaptcha();
        \think\Session::set($type, $login_verify_code);
        return $pic;
    }

    public function checkVerifyCode()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $verifycode = $post['verifycode'];
        $type = $post['type'];
        $sesion_code = \think\Session::get($type);
        if ( strtoupper($verifycode) != strtoupper($sesion_code)) {
            $rep_data = \tools\route\Resp::get_response('FAIL', '001', '验证码不正确');
        } else {
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '验证码正确');
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }

    /**
     * 登录提交
     */
    public function loginDo()
    {
        $request = \think\Request::instance();
        $req = $request->param();

        $mobile = $req["mobile"];
        $pwd = $req["password"];
        $verifycode = $req["verifycode"];

        $data['password'] = $pwd;
        $data['mobile'] = $mobile;

        //先检查验证码：
        $sesion_code = \think\Session::get('login_verify_code');
        if ( strtoupper($verifycode) != strtoupper($sesion_code)) {
            $rep_data = \tools\route\Resp::get_response('FAIL', '001', '验证码不正确');
        } else {
            $result_json = \tools\api\Inner::callAPI('platform.user.login', $data);
            $result = json_decode($result_json);

            if ($result->code === 0) {
                \think\Session::set('user.user_id', $result->data->user_id);
                \think\Session::set('user.user_name', $result->data->user_name);
                \think\Session::set('user.account_name', $result->data->account_name);
                \think\Session::set('user.user_type', $result->data->user_type);
                \think\Session::set('user.mobile', $result->data->mobile);
                \think\Session::set('user.create_time', $result->data->create_time);
                \think\Session::set('user.confirm_status', $result->data->confirm_status);
                \think\Session::set('user.confirm_desc', $result->data->confirm_desc);
                \think\Session::set('user.last_access',time()); //session登录时间
                //写入菜单权限
                $user_id = $result->data->user_id;
                $user_type = $result->data->user_type;
                $session_array['user_id'] = $user_id;
                $session_array['user_type'] = $user_type;
                $session_array['groups'] = $this->menu_node($user_id,$user_type);
                $session_array['url'] = $this->get_node_list();
                $Menu = new \app\Common\Model\Platform\UserNode();
                foreach($this->menu_node($user_id,$user_type) as $key=>$val){
                    $new_user_type_groupid[$user_id.'_'.$user_type.'_'.$val['id']] = $Menu->getnodelist($user_id,$user_type,$val['id']);
                }
                $session_array['user_type_group'] = $new_user_type_groupid;
                \think\Session::set($user_id.'_'.$user_type,$session_array);
                $return_data['url'] = \think\Url::build('pub/main');

                $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '处理成功', $return_data);
            } else {
                $rep_data = \tools\route\Resp::get_response('FAIL', $result->code, '登录失败，请输入正确的用户名密码');
            }
        }

        \tools\route\AjaxReturn::ajx_return($rep_data);
    }


    /**
     * @param $val
     * @return 菜单权限
     *
     */
    public function menu_node($user_id,$user_type){
        //菜单权限
        $Menu = new \app\Common\Model\Platform\UserNode();
        $nodes = $Menu->getMenu($user_id,$user_type);
        // 节点转为树
        $tree_node = $this->list_to_tree($nodes);
        // 显示菜单项
        $menu = [];
        $groups_id = [];
        foreach ($tree_node as $module) {
            if ($module['pid'] == 1) {
                if (empty($module['_child'])) {
                    $group_id = $module['group_id'];
                    array_push($groups_id, $group_id);
                    $menu[$group_id][] = $module;
                }else{
                    foreach ($module['_child'] as $controller) {
                        $group_id = $controller['group_id'];
                        array_push($groups_id, $group_id);
                        $menu[$group_id][] = $controller;
                    }
                }
            }
        }
        // 获取授权节点分组信息
        $groups_id = array_unique($groups_id);
        $group_model = new \app\Common\Model\Platform\UserGroup();
        $groups = $group_model->get_grouplist($groups_id);
        return $groups;
    }


    /**
     * @param $val
     * @return 节点数据
     *
     */
    public function get_node_list(){
        $Menu = new \app\Common\Model\Platform\UserNode();
        return $Menu->getlist();
    }


    /**
     * 节点遍历
     *
     * @param        $list
     * @param string $pk
     * @param string $pid
     * @param string $child
     * @param int    $root
     *
     * @return array
     */
    function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root =1)
    {

        // 创建Tree
        $tree = [];
        if (is_array($list)) {
            // 创建基于主键的数组引用
            $refer = [];
            foreach ($list as $key => $data) {
                if ($data instanceof \think\Model) {
                    $list[$key] = $data->toArray();
                }
                $refer[$data[$pk]] =& $list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                if (!isset($list[$key][$child])) {
                    $list[$key][$child] = [];
                }
                $parentId = $data[$pid];
                if ($root == $parentId) {
                    $tree[] =& $list[$key];
                } else {
                    if (isset($refer[$parentId])) {
                        $parent =& $refer[$parentId];
                        $parent[$child][] =& $list[$key];
                    }
                }
            }
        }

        return $tree;
    }


}