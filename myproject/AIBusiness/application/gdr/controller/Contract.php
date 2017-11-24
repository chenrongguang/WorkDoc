<?php
namespace app\home\controller;
use Think\Controller;
use think\Db;
class Contract extends Base
{
    /*public function contractlist()
    {
        $AdminPdline = new \app\Common\Model\Platform\AdminUserPdline();
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $pdline_ist = $AdminPdline->getuserbylist($user_data);
        $this->assign('pdline_ist',$pdline_ist);
        $request = \think\Request::instance();
        $req = $request->param();

        //获取应用列表

        $start_time = date("Y-m-d H:i:s", time() - 3600 * 24 + 1); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());
        $user_name = "";
        $mobile = "";
        $identity_no = "";
        $query_code = "";
        $hd_contract_status = -1;
        $hd_handletype=1;
        $subject= -1;
        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "user_name" => $user_name,
            "mobile" => $mobile,
            "identity_no" => $identity_no,
            "query_code" => $query_code,
            "hd_contract_status" => $hd_contract_status,
            "hd_handletype" => $hd_handletype,
            "subject" => $subject,
        );

        //直接进入页面时，不查询，否则速度慢
        if (!isset($req['query'])) {
            return $this->fetch("", array_merge($show_para, array('page' => "", 'list' => "")));
        }

        $where['user_id'] = \think\Session::get('user.user_id');
        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }

        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }

        if (isset($req['user_name'])) {
            $where['user_name'] = $req['user_name'];
            $user_name = $req['user_name'];
        }

        if (isset($req['identity_no'])) {
            $where['identity_no'] = $req['identity_no'];
            $identity_no = $req['identity_no'];
        }
        if (isset($req['mobile'])) {
            $where['mobile'] = $req['mobile'];
            $mobile = $req['mobile'];
        }

        if (isset($req['query_code'])) {
            $where['query_code'] = $req['query_code'];
            $query_code = $req['query_code'];
        }

        if (isset($req['status'])) {
            $where['status'] = (int)$req['status'];
            $hd_contract_status = $req['status'];
        }

        if (isset($req['handletype'])) {
            $where['handletype'] = (int)$req['handletype'];
            $hd_handletype = $req['handletype'];
        }
        //接受产品信息
        if (isset($req['subject'])) {
            $where['subject'] = $req['subject'];
            $subject = $req['subject'];
        }
        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "user_name" => $user_name,
            "mobile" => $mobile,
            "identity_no" => $identity_no,
            "query_code" => $query_code,
            "hd_contract_status" => $hd_contract_status,
            "hd_handletype" => $hd_handletype,
            "subject" => $subject,
        );

        $result_json = \tools\api\Inner::callAPI('platform.contract.getcontracttotal', $where);
        $result_total = json_decode($result_json);

        if ($result_total->code === 0) {
            $total = $result_total->data->total;
        } else {
            $total = 0;
        }
        //如果为0，则直接返回了
        if ($total == 0) {
            return $this->fetch("", array_merge($show_para, array('page' => "", 'list' => "")));
        }

        if (empty($req['page_size'])) {
            $page_size = \think\Config::get('default_page_size');
        } else {
            $page_size = $req['page_size'];
        }

        $Page = new \tools\page\Pagebar($total, $page_size);
        $now_page = isset($req['page']) ? $req['page'] : 1; //当前页

        $where['page_size'] = (int)$page_size;
        $where['page_now'] = (int)($now_page);

        $result_json = \tools\api\Inner::callAPI('platform.contract.contractlist', $where);
        $result_list = json_decode($result_json);

        if ($result_list->code === 0) {
            $list = $result_list->data->list;
        } else {
            $list = "";
        }
        $show = $Page->show();
        return $this->fetch("", array_merge($show_para, array('page' => $show, 'list' => json_decode(json_encode($list), true))));

    }*/

    /**
     * @return mixed
     * 梁浩全部合同
     */
    public function contract_total()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发起者
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发件人
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }


        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));
    }

    /**
     * @return mixed
     * 查看全部合同异步加载全部合同
     */
    public function contract_total_ajax()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $where['user_id'] = \think\Session::get('user.user_id');
        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }
        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        //$where['user_name'] = '陈荣光';
        //$where['addressee'] = '陈荣光';
        //$where['action_key'] = '陈荣光';
        $result_json = \tools\api\Inner::callAPI('platform.contract.getcontracttotal', $where);
        $result_total = json_decode($result_json);


        if ($result_total->code === 0) {
            $total = $result_total->data->total;
        } else {
            $total = 0;
        }
        //如果为0，则直接返回了
        if ($total == 0) {
            return $this->fetch("", array_merge($show_para, array('page' => "", 'list' => "")));
        }
        if (empty($req['page_size'])) {
            $page_size = \think\Config::get('default_page_size');
        } else {
            $page_size = $req['page_size'];
        }

        $Page = new \tools\page\Pagebar($total, $page_size);
        $now_page = isset($req['page']) ? $req['page'] : 1; //当前页

        $where['page_size'] = (int)$page_size;
        $where['page_now'] = (int)($now_page);
        $result_json = \tools\api\Inner::callAPI('platform.contract.contractlist', $where);
        $result_list = json_decode($result_json);
        if ($result_list->code === 0) {
            $list = $result_list->data->list;
        } else {
            $list = "";
        }
        $list = json_decode(json_encode($list), true);
        $model = new \app\Common\Model\Platform\UserContract();
        foreach($list as $k =>$v){
            //发起者
            if(is_array($model->getappkeyuser($v['contract_id'])) && !empty($model->getappkeyuser($v['contract_id']))){
                $list[$k]['initiator'] = $model->getappkeyuser($v['contract_id'])[0];
            }else{
                $list[$k]['initiator']['user_name'] = '';
                $list[$k]['initiator']['app_key'] = '';
            }
           $user_info  = $model->getactionuser($v['contract_id'],$sender);
            //发件人 发件时间
            if(is_array($user_info) && !empty($user_info)){
                $list[$k]['sender'] =  $user_info[0];
            }else{
                $list[$k]['sender']['user_name']   = '';
                $list[$k]['sender']['create_time'] = '';
                $list[$k]['sender']['user_id'] = '';
            }
            $colle_info = $model->getcollectuser($v['contract_id'],$addressee);
            //收件人 //到期时间
            if(is_array($colle_info) && !empty($colle_info)){
                $collectuser_list = $colle_info;
                $str = '';  //收件人
                $users ='';
                $target_times ='';
                $time_array= []; //到期时间
                foreach($collectuser_list as $vv){
                    if($vv['user_id'] != $list[$k]['sender']['user_id']){
                        $str .= $vv['user_name'].';';
                        $time_array[] = $vv['target_time'];
                        $users .= $vv['user_id'].',';
                        $target_times .= $vv['target_time'].',';
                    }
                    //用户id 合同
                }
                $list[$k]['collect'] =  $str;
                $list[$k]['collect_userid'] =  $users;
                $list[$k]['end_time'] =  $time_array?max($time_array):'';
                $list[$k]['target_times'] =  $target_times;
            }else{
                $list[$k]['collect'] = '';
                $list[$k]['end_time'] ='';
                $list[$k]['collect_userid'] =  '';
                $list[$k]['target_times'] =  '';
            }
            //文档状态  需要我完成
            $need_info = $model->getstatutneed($v['contract_id'],$user_data['user_id']);
            if($need_info){
                $list[$k]['status'] = 8; //出现签署按钮
                $list[$k]['transfer_id'] = $need_info[0]['transfer_id'];
                $list[$k]['query_codes'] = $need_info[0]['query_code'];
                $list[$k]['tmpl_code'] = $need_info[0]['tmpl_code'];
            }
            //文档状态  等待他人完成
            if($model->getstatutwaiting($v['contract_id'],$user_data['user_id'])){
                $list[$k]['status'] = 9;
            }

        }
        // 0-未签署，1-签署流转中，2,-完全签署完成,3-失败,4-已撤销,5-已拒签,6-已过期 8需要我完成 9 等待他人完成
        $show = $Page->show();
        if(isset($req['status']) == 2){ //已完成
            $show=str_replace('/contract/contract_total_ajax','/contract/contract_completed',$show);
        }elseif(isset($req['status']) == 6){ //已过期
            $show=str_replace('/contract/contract_total_ajax','/contract/contract_expired',$show);
        }elseif(isset($req['status']) == 4){//已撤销
            $show=str_replace('/contract/contract_total_ajax','/home/contract/contract_rescinded',$show);
        }elseif(isset($req['status']) == 5){ //已拒签
            $show=str_replace('/contract/contract_total_ajax','/home/contract/contract_refused',$show);
        }else{
            $show=str_replace('/contract/contract_total_ajax','/contract/contract_total',$show);
        }
        return $this->fetch("", array_merge($show_para, array('page' => $show,'list' => json_decode(json_encode($list), true))));

    }

    /**
     * @author 梁浩
     * @return list
     * 需要我签署的文件
     */
    public function need_signfile()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }

        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));

    }



    /**
     * @author 梁浩
     * @return list
     * 需要我签署的文件列表
     */
    public function need_signfile_ajax()
    {
        $request = \think\Request::instance();
        $req = $request->param();
        $user_id = \think\Session::get('user.user_id'); //用户id
        $where['target_id']=\think\Session::get('user.mobile');

        $where['target_type']='user'; //收件人类型
        //$where['current_yn']='Y'; //需要我签署
        $where['sign_status']=0; //合同是未签署

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }
        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );

        $Contracts = new \app\Common\Model\Platform\ContractTransfer();
        $total = $Contracts->getListtotal($where);//需要我签署的合同
        //如果为0，则直接返回了
        if ($total == 0) {
            return $this->fetch("", array_merge($show_para, array('page' => "", 'list' => "")));
        }
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }else{
            $page_size= $req['page_size'];
        }
        $Page = new \tools\page\Pagebar($total,$page_size);
        $now_page=isset($req['page'])?$req['page']:1; //当前页
        $page_size=(int)$page_size;
        $now_page=(int)($now_page);
        $list = $Contracts->getList($where,$page_size,$now_page);//查询需要我签署的合同
        $model = new \app\Common\Model\Platform\UserContract();
        foreach($list as $k =>$v){
            //发起者
            if(is_array($model->getappkeyuser($v['contract_id'])) && !empty($model->getappkeyuser($v['contract_id']))){
                $list[$k]['initiator'] = $model->getappkeyuser($v['contract_id'])[0];
            }else{
                $list[$k]['initiator']['user_name'] = '';
                $list[$k]['initiator']['app_key'] = '';
            }
            $user_info  = $model->getactionuser($v['contract_id'],$sender);
            //发件人 发件时间
            if(is_array($user_info) && !empty($user_info)){
                $list[$k]['sender'] =  $user_info[0];
            }else{
                $list[$k]['sender']['user_name']   = '';
                $list[$k]['sender']['create_time'] = '';
                $list[$k]['sender']['user_id'] = '';
            }
            $colle_info = $model->getcollectuser($v['contract_id'],$addressee);
            //收件人 //到期时间
            if(is_array($colle_info) && !empty($colle_info)){

                $collectuser_list = $colle_info;
                $str = '';  //收件人
                $users ='';
                $target_times ='';
                $time_array= []; //到期时间
                foreach($collectuser_list as $vv){
                    if($vv['user_id'] != $list[$k]['sender']['user_id']){
                        $str .= $vv['user_name'].';';
                        $time_array[] = $vv['target_time'];
                        $users .= $vv['user_id'].',';
                        $target_times .= $vv['target_time'].',';
                    }
                }
                $list[$k]['collect'] =  $str;
                $list[$k]['collect_userid'] =  $users;
                $list[$k]['end_time'] =  $time_array?max($time_array):'';
                $list[$k]['target_times'] =  $target_times;
            }else{
                $list[$k]['collect'] = '';
                $list[$k]['end_time'] ='';
                $list[$k]['collect_userid'] =  '';
                $list[$k]['target_times'] =  '';
            }
            //文档状态  需要我完成
            $need_info = $model->getstatutneed($v['contract_id'],$user_id);
            if($need_info){
                $list[$k]['sign_status'] = 8; //出现签署按钮
                $list[$k]['transfer_id'] = $need_info[0]['transfer_id'];
                $list[$k]['query_codes'] = $need_info[0]['query_code'];
                $list[$k]['tmpl_code'] = $need_info[0]['tmpl_code'];
            }
            //文档状态  等待他人完成
            if($model->getstatutwaiting($v['contract_id'],$user_id)){
                $list[$k]['sign_status'] = 9;
            }
            $list[$k]['status'] = $list[$k]['sign_status'];
        }
        //dump($list);die;
        unset($model);
        $show = $Page->show();
        $show=str_replace('/contract/need_signfile_ajax','/contract/need_signfile',$show);
        return $this->fetch("", array_merge($show_para, array('page' => $show,'list' => json_decode(json_encode($list), true))));

    }



    /**
     * @author 梁浩
     * @return list
     * 等待他人签署的文件
     */
    public function wait_signfile(){
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }

        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));

    }


    /**
     * @author 梁浩
     * @return list
     * 等待他人签署的文件列表
     */
    public function wait_signfile_ajax(){
        $request = \think\Request::instance();
        $req = $request->param();
        $where['action_userid']=\think\Session::get('user.user_id'); //用户id
        $user_id=\think\Session::get('user.user_id'); //用户id
        $where['type']='boot'; //发起类型
        $where['status']=1; //签署流转中
        $where['contract_type']=1; //流转签约合同

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }


        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );

        $Contracts = new \app\Common\Model\Platform\ContractApp();
        $total = $Contracts->get_waitListtotal($where);//需要我签署的合同
        //如果为0，则直接返回了
        if ($total == 0) {
            return $this->fetch("", array_merge($show_para, array('page' => "", 'list' => "")));
        }
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }else{
            $page_size= $req['page_size'];
        }
        $Page = new \tools\page\Pagebar($total,$page_size);
        $now_page=isset($req['page'])?$req['page']:1; //当前页
        $page_size=(int)$page_size;
        $now_page=(int)($now_page);
        $list = $Contracts->get_waitList($where,$page_size,$now_page);//等待他人签署的文件
        $model = new \app\Common\Model\Platform\UserContract();
        foreach($list as $k =>$v){
            //发起者
            if(is_array($model->getappkeyuser($v['contract_id'])) && !empty($model->getappkeyuser($v['contract_id']))){
                $list[$k]['initiator'] = $model->getappkeyuser($v['contract_id'])[0];
            }else{
                $list[$k]['initiator']['user_name'] = '';
                $list[$k]['initiator']['app_key'] = '';
            }
            $user_info  = $model->getactionuser($v['contract_id'],$sender);
            //发件人 发件时间
            if(is_array($user_info) && !empty($user_info)){
                $list[$k]['sender'] =  $user_info[0];
            }else{
                $list[$k]['sender']['user_name']   = '';
                $list[$k]['sender']['create_time'] = '';
                $list[$k]['sender']['user_id'] = '';
            }
            $colle_info = $model->getcollectuser($v['contract_id'],$addressee);
            //收件人 //到期时间
            if(is_array($colle_info) && !empty($colle_info)){

                $collectuser_list = $colle_info;
                $str = '';  //收件人
                $users ='';
                $target_times ='';
                $time_array= []; //到期时间
                foreach($collectuser_list as $vv){
                    if($vv['user_id'] != $list[$k]['sender']['user_id']){
                        $str .= $vv['user_name'].';';
                        $time_array[] = $vv['target_time'];
                        $users .= $vv['user_id'].',';
                        $target_times .= $vv['target_time'].',';
                    }
                }
                $list[$k]['collect'] =  $str;
                $list[$k]['collect_userid'] =  $users;
                $list[$k]['end_time'] =  $time_array?max($time_array):'';
                $list[$k]['target_times'] =  $target_times;
            }else{
                $list[$k]['collect'] = '';
                $list[$k]['end_time'] ='';
                $list[$k]['collect_userid'] =  '';
                $list[$k]['target_times'] =  '';
            }
            //文档状态  需要我完成
            $need_info = $model->getstatutneed($v['contract_id'],$user_id);
            if($need_info){
                $list[$k]['status'] = 8; //出现签署按钮
                $list[$k]['transfer_id'] = $need_info[0]['transfer_id'];
                $list[$k]['query_codes'] = $need_info[0]['query_code'];
                $list[$k]['tmpl_code'] = $need_info[0]['tmpl_code'];
            }
            //文档状态  等待他人完成
            if($model->getstatutwaiting($v['contract_id'],$user_id)){
                $list[$k]['status'] = 9;
            }
        }
        $show = $Page->show();
        $show=str_replace('/contract/wait_signfile_ajax','/contract/wait_signfile',$show);
        return $this->fetch("", array_merge($show_para, array('page' => $show,'list' => json_decode(json_encode($list), true))));
    }


    /**
     * @author 梁浩
     * @return list
     * 等待他人签署的文件
     */
    public function wait_usersign(){
        $request = \think\Request::instance();
        $req = $request->param();
        //直接进入页面时，不查询，否则速度慢
        if(!isset($req['contract_id'])){
            return $this->fetch("",array('list'=> ""));
        }
        $data['contract_id'] = $req['contract_id'];
        $Contracts = new \app\Common\Model\Platform\ContractTransfer();
        $list = $Contracts->wait_usergetsign($data);//查询需要我签署的合同
        return $this->fetch("",array('list'=>$list));
    }

    /**
     * @author 梁浩
     * @return list
     * 已完成的合同
     */
    public function contract_completed()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }

        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));

    }


    /**
     * @author 梁浩
     * @return list
     * 已过期的合同
     */
    public function contract_expired()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }

        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));

    }

    /**
     * @author 梁浩
     * @return list
     * 已撤销的合同
     */
    public function contract_rescinded()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }

        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));

    }


    /**
     * @author 梁浩
     * @return list
     * 已拒签的合同
     */
    public function contract_refused()
    {
        $user_data['user_id'] =  \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-5 day")); //30分钟前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        if (isset($req['theme'])) {//主题
            $where['theme'] = $req['theme'];
            $theme = $req['theme'];
        }else{
            $theme = '';
        }

        if (isset($req['sender'])) { //发件人
            $where['user_name'] = $req['sender'];
            $sender = $req['sender'];
        }else{
            $sender = '';
        }

        if (isset($req['initiator'])) {//发起者
            $where['action_key'] = $req['initiator'];
            $initiator = $req['initiator'];
        }else{
            $initiator = '';
        }

        if (isset($req['addressee'])) { //收件人
            $where['addressee'] = $req['addressee'];
            $addressee = $req['addressee'];
        }else{
            $addressee = '';
        }

        //合同的状态
        if (isset($req['status'])) { //收件人
            $where['status'] = $req['status'];
        }


        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "theme"=>$theme,
            "sender" => $sender,
            "initiator" => $initiator,
            "addressee" => $addressee,
            "query" => 1,

        );
        if(empty( $req['page_size'])){
            $page_size=\think\Config::get('default_page_size');
        }
        else{
            $page_size= $req['page_size'];
        }
        $page=isset($req['page'])?$req['page']:1; //当前页
        return $this->fetch("", array_merge($show_para, array('page_size' => "$page_size",'page'=>$page, 'list' => "")));

    }

    //检查文件是否存在
    private function checkfileExist($file,$file1){
        if (is_file($file)) {
            return 0;
        }
        if(is_file($file1)){
            return 1;
        }
        return 2;
    }

    //获取预览图片
     public function  ajxgetpreview(){
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $code = $post['code'];
        $status=$post['status'];
        //重置虚拟状态
        if($status==2){
            $status=2;
        }
        else{
            $status=1;
        }

        $file = "./tmpfile/" . $code . "-" . $status . "/default-0.jpg"; //多页纸合同
        $file1 = "./tmpfile/" .$code . "-" . $status . "/default.jpg";  //一页纸合同

         $result=2;
         for($x=0; $x<=19; $x++) {
            $result=$this->checkfileExist($file,$file1);
             //返回0和1表示文件已经生成了，退出循环，否则休眠1秒钟，继续检查是否有文件
             if($result==0 || $result==1){
                 break;
             }
             else{
                 sleep(1);
             }
         }

         if($result==2){
             $rep_data = \tools\route\Resp::get_response('FAIL', -1, '获取预览失败，请重试');
         }
         elseif($result==0){
             $return_data['data'] = "/tmpfile/" . $code . "-" . $status . "/default-0.jpg";
             $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '处理成功', $return_data);
         }
         elseif($result==1){
             $return_data['data'] = "/tmpfile/" . $code . "-" . $status . "/default.jpg";
             $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '处理成功', $return_data);
         }

        \tools\route\AjaxReturn::ajx_return($rep_data);
    }


    /*文档信息详情*/
    public function details_all(){
        $user_id = \think\Session::get('user.user_id'); //用户id
        $request = \think\Request::instance();
        $req = $request->param();
        if (empty($req)) {
            \tools\route\Redirect::redirect(\think\Url::build('contract/contract_total'));//出错，跳回列表页
        }else{
            if(!isset($req['contract_code'])){
                \tools\route\Redirect::redirect(\think\Url::build('contract/contract_total'));//出错，跳回列表页
            }
        }
        $contract_code = $req['contract_code'];
        //通过合同id获取合同信息
        $contract_model = new \app\Common\Model\Platform\Contract();
        $transferemid = new \app\Common\Model\Platform\TransferRemind();
        $contract= $contract_model->getSinglebyCode($contract_code);
        $contract_id = $contract['contract_id'];
        $contract_info = $contract_model->getSingle($contract_id); //合同信息
        $model = new \app\Common\Model\Platform\UserContract();
        $user_contract_info = $model->getappkeyuser($contract_id); //发起者
        $user_info  = $model->getactionuserinfo($contract_id,''); //发件人
        $colle_list = $model->getcollectuser($contract_id,''); //收件人
        //是否再次提醒
        //收件人 //到期时间
         if(is_array($colle_list) && !empty($colle_list)){
            $time_array= []; //到期时间
            foreach($colle_list as $kk=>$vv){
                if($vv['user_id'] != $user_info[0]['user_id']){
                    $time_array[] = $vv['target_time'];
                }
                $remid_info = $transferemid->getinfo($vv['user_id'],$vv['contract_id']);
                if($remid_info){
                    if(time() > (strtotime($remid_info['remind_time'])+24*60*60*1)){
                        $colle_list[$kk]['remind_status'] = 1;
                    }else{
                        $colle_list[$kk]['remind_status'] = '';
                    }
                }else{
                    $colle_list[$kk]['remind_status'] = 1;
                }
            }
             $time_array = $time_array?max($time_array):'';
        }else{
             $time_array = '';
         }

        //文档状态  需要我完成
        $need_info = $model->getstatutneed($contract_info['contract_id'],$user_id);
        if($need_info){
            $contract_info['status'] = 8; //出现签署按钮
            $contract_info['transfer_id'] = $need_info[0]['transfer_id'];
            $contract_info['query_codes'] = $need_info[0]['query_code'];
            $contract_info['tmpl_code'] = $need_info[0]['tmpl_code'];
        }
        //文档状态  等待他人完成
        if($model->getstatutwaiting($contract_info['contract_id'],$user_id)){
            $contract_info['status'] = 9;
        }
        $this->assign('contract_info',$contract_info);
        $this->assign('end_time',$time_array);
        if($contract_info['create_time'] && $time_array){
            $day = $this->diffDate(date('Y-m-d',$contract_info['create_time']),date('Y-m-d',$time_array));
        }else{
            $day = '';
        }

        //默认第一张图片
        /*start:处理预览第一张图片问题*/
        if($contract_info['status']==2){
            $temp_status=2;
        }
        else{
            $temp_status=1;
        }

        $file = "./tmpfile/" . $contract_info['contract_code'] . "-" . $temp_status . "/default-0.jpg"; //多页纸合同
        $file1 = "./tmpfile/" .$contract_info['contract_code'] . "-" . $temp_status . "/default.jpg";  //一页纸合同
        $result=$this->checkfileExist($file,$file1);
        $tempfile="";
        if($result==0){
            $tempfile="/tmpfile/" . $contract_info['contract_code'] . "-" . $temp_status . "/default-0.jpg";
        }
        elseif($result==1){
            $tempfile = "/tmpfile/" . $contract_info['contract_code'] . "-" . $temp_status . "/default.jpg";
        }
        $this->assign('file',$tempfile);
        /*end:处理预览第一张图片问题*/

        $this->assign('day',$day);
        $this->assign('user_contract_info',$user_contract_info[0]);
        $this->assign('user_info',$user_info[0]);
        $this->assign('list',$colle_list);
        unset($contract_model);
        unset($transferemid);
        unset($model);
        //$this->assign('file',$file);
        return $this->fetch();
    }


    /**
     * function：计算两个日期多少天
     * param string $date1[格式如：2011-11-5]
     * param string $date2[格式如：2012-12-01]
     * return array array('年','月','日');
     */
    function diffDate($date1,$date2)
    {
        $datetime1 = new \DateTime($date1);
        $datetime2 = new \DateTime($date2);
        $interval = $datetime1->diff($datetime2);
        $time       = $interval->format('%a');    // 两个时间相差总天数
        return $time;
    }

    //批量下载
    public function batchdown()
    {

        $user_id = \think\Session::get('user.user_id');
        $data['user_id'] = $user_id;
        $data['create_id'] = $user_id;
        $data['task_type'] = "batchdown";

        $result_json = \tools\api\Inner::callAPI('platform.contract.tasklist', $data);
        $result = json_decode($result_json);

        if ($result->code === 0) {
            $list = json_decode(json_encode($result->data->list), true);
            //改造获取每条数据
            foreach ($list as $key => $val) {
                //判断文件是否存在，如果存在则完成，如果不存在，则表示在处理中
                //规则："batchdown-"+业务日期+"-"+用户id
                $file_name = md5("batchdown-" . $val['bus_date'] . "-" . $val['user_id']) . ".zip";
                $file_path = "./downloadbatch/" . $file_name;
                $check = file_exists($file_path);
                if ($check) {
                    $list[$key]["status"] = 2; //完成，可下载
                    $list[$key]["filepath"] = "/downloadbatch/" . $file_name; //下载路径
                } else {
                    $list[$key]["status"] = 1; //处理中
                    $list[$key]["filepath"] = ""; //路径空
                }
            }
        } else {
            $list = null;
        }

        return $this->fetch("", array('list' => $list,"max_date"=> date("Y-m-d",strtotime("-1 day"))));


    }


    //批量下载-新增保存
    public function batchdownDo()
    {
        $request = \think\Request::instance();
        $req = $request->param();

        $bus_date = $req["bus_date"];
        $use_id = \think\Session::get('user.user_id');;
        $create_id = $use_id;
        $user_name = \think\Session::get('user.user_name');
        $task_name = $req["txt_task_name"];
        $expire_time = strtotime("+7 day"); //保存7天，之后任务实现

        //先生成后台任务共linux调用
        $handle_result = $this->handle_task($use_id, $bus_date);
        if ($handle_result==1) {
            $arr_detail = array(
                'user_id' => (int)$use_id,
                'bus_date' => $bus_date,
                'create_id' => (int)$create_id,
                'user_name' => $user_name,
                'task_name' => $task_name,
                'task_type' => "batchdown",
                'expire_time' => $expire_time,
            );
            $result_json = \tools\api\Inner::callAPI('platform.contract.taskadd', $arr_detail);

            $result = json_decode($result_json);
            if ($result->code === 0) {
                $return_data['url'] = \think\Url::build('contract/batchdown');
                $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, '新增任务成功', $return_data);
            } else {
                $rep_data = \tools\route\Resp::get_response('FAIL', $result->code, '保存任务失败，请重试!');
            }
        } else {
            if($handle_result==-1){
                $msg="合同查询失败";
            }
            elseif($handle_result==-2)
            {
                $msg="处理异常，请重试";
            }
            elseif($handle_result==-3){
                $msg="该日没有合同";
            }
            $rep_data = \tools\route\Resp::get_response('FAIL', $handle_result, $msg);
        }

        \tools\route\AjaxReturn::ajx_return($rep_data);
    }

    //判断是否已经有下载的文件了，如果有不建新的后台任务
    //如果没有，判断是否已经存在后台任务，如果有也不新建了
    private function handle_task($use_id, $bus_date)
    {
        //先判断是否已经有下载完的文件
        $zip_name = md5("batchdown-" . $bus_date . "-" . $use_id) . ".zip";
        $zip_path = "./downloadbatch/" . $zip_name;
        $zip_check = file_exists($zip_path);
        if ($zip_check) {
            return 1;
        }

        //判断是否已经建了这个任务了，如果建了，就不再建txt文件的任务了
        $txttask_name = md5("batchdown-" . $bus_date . "-" . $use_id) . ".txt";
        $txttask_path = "./downloadbatchtask/" . $txttask_name;
        $txttask_check = file_exists($txttask_path);
        if ($txttask_check) {
            return 1;
        }

        //新写入一个新的txt文件，里边的内容就是要执行的任务，然后有运维写的linux任务来执行
        //文件名就是最终执行完之后，需要打包的文件名，里边的内容规则如下：
        //sssss|||http://11.pdf|||http://22.pdf   解析：用|||分割 ，第二个参数和第三个参数是要下载的地址，下载完成之后
        //打包成第一个参数的名称的zip文件，然后删除下载的第二个和第三个的文件。
        //逐条执行，linux任务要考虑中间某一步出错之后的处理方案
        //全部执行完成之后，打包成大的zip文件，放到batchdown文件夹下面
        // 然后删掉batchdowntask文件夹下面的这个txt文件
        try {

            //获取该天该客户的所有文件
            $arr_detail = array(
                'user_id' => (int)$use_id,
                'status' => 2,
                'start_time' => strtotime($bus_date." 00:00:00"),
                'end_time' =>strtotime($bus_date .'+1day')
            );
            $result_json = \tools\api\Inner::callAPI('platform.contract.taskcontractlist', $arr_detail);

            $result = json_decode($result_json);
            if ($result->code === 0) {
                $list = json_decode(json_encode($result->data->list), true);
                $list_count=count($list);
                if($list_count>0){
                    $myfile = fopen($txttask_path, "w");
                }
                //处理每条数据
                foreach ($list as $key => $val) {
                    $c_url = str_replace(config('UPLOAD_CONFIG.outerhost'), config('UPLOAD_CONFIG.innerhost'), $val["contract_url"]);
                    $a_url = str_replace(config('UPLOAD_CONFIG.outerhost'), config('UPLOAD_CONFIG.innerhost'), $val["attatchment_url"]);
                    $txt =$val["contract_code"]."|||".$c_url."|||".$a_url. "\n";
                    fwrite($myfile, $txt);
                }
                if($list_count>0){
                    fclose($myfile);
                    return 1;
                }
                else{
                    return -3;
                }
            }
            else{
                return -1;
            }

        } catch (\Exception $e) {
            \think\Log::write("创建任务文件失败:".$e->getMessage());
            return -2;
        }
    }


    /**
     * @author 梁浩
     * @return list
     * 提醒用户签署合同
     */
    public function message_send()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $user_ids = trim($post['user_ids']);
        $target_times = trim($post['target_times']);
        $arr = array_filter(explode(',',$user_ids));
        $target_arr = array_filter(explode(',',$target_times));
        $contract_code = isset($post["contract_code"]) ? $post["contract_code"] : "";
        if (empty(($contract_code))) {
            $rep_data = \tools\route\Resp::get_response('Fail', -6, '缺少code参数');
            return json_encode($rep_data);
        }
        $obj_contract= new  \app\Common\Model\Platform\Contract();
        $contract= $obj_contract->getSinglebyCode($contract_code);
        $contract_id = $contract['contract_id'];

        $obj_user=new \app\Common\Model\Platform\User(); //new查询用户邮件/手机号
        $transferremind=new \app\Common\Model\Platform\TransferRemind(); //提醒记录表
        foreach( $arr as $k=>$v) {
            if ($v) {
                $user_result=$obj_user->getUserBaseInfobyWhere(array('user_id'=>$v));
                if($user_result['user_type'] == 'e'){
                    //发邮件
                    if($this->sendSmsCode($user_result['mobile'],$target_arr[$k])){
                    //if(true){
                        $where['send_object'] = $user_result['mobile'];
                        $where['user_id'] = $v;
                        $where['contract_id'] =$contract_id;
                        $where['send_type'] = 'e';//企业邮箱注册
                        //先删除在添加新的
                        $transferremind->deletes($where);
                        $regcode['send_object']=$user_result['mobile'];
                        $regcode['user_id'] = (int)$v;
                        $regcode['send_type'] = 'e';//企业邮箱注册
                        $regcode['remind_time'] = date('Y-m-d H:i:s');
                        $regcode['create_time'] = date('Y-m-d H:i:s');
                        $regcode['contract_id'] = $contract_id;
                        if(false !=  $transferremind->add($regcode)){
                            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "发送成功");
                        }else{
                            $rep_data = \tools\route\Resp::get_response('Fail', '001', '发送失败，请重试');
                        }
                    }else{
                        $rep_data = \tools\route\Resp::get_response('Fail', '001', '发送失败，请重试');
                    }
                }else{
                    //发短信(暂时没有短信模板)
                    $tmpel = 'SMS_105945155';
                    if($this->telsendSmsCode($user_result['mobile'],$tmpel,$target_arr[$k])){
                        $where['send_object'] = $user_result['mobile'];
                        $where['user_id'] = $v;
                        $where['contract_id'] =$contract_id;
                        $where['send_type'] = 'e';//企业邮箱注册
                        //先删除在添加新的
                        $transferremind->deletes($where);
                        $regcode['send_object']=$user_result['mobile'];
                        $regcode['user_id'] = (int)$v;
                        $regcode['send_type'] = 'e';//企业邮箱注册
                        $regcode['remind_time'] = date('Y-m-d H:i:s');
                        $regcode['create_time'] = date('Y-m-d H:i:s');
                        $regcode['contract_id'] = $contract_id;
                        if(false !=  $transferremind->add($regcode)){
                            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "发送成功");
                        }else{
                            $rep_data = \tools\route\Resp::get_response('Fail', '001', '发送失败，请重试');
                        }
                    }else{
                        $rep_data = \tools\route\Resp::get_response('Fail', '001', '发送失败，请重试');
                    }
                }
            }

        }
        unset($obj_user);
        unset($transferremind);
        \tools\route\AjaxReturn::ajx_return($rep_data);

    }


    /**
     * @author 梁浩
     * @return list
     * 撤回合同操作
     */
    public function withdraw_contract()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $contract_code = isset($post["contract_code"]) ? $post["contract_code"] : "";
        if (empty(($contract_code))) {
            $rep_data = \tools\route\Resp::get_response('Fail', -6, '缺少code参数');
            return json_encode($rep_data);
        }
        $obj_contract= new  \app\Common\Model\Platform\Contract();
        $contract= $obj_contract->getSinglebyCode($contract_code);
        $contract_id = $contract['contract_id'];
        $wheres['contract_id'] = $contract_id;
        $wheres['status'] = array('neq',2);
        $contract_update_data["status"]=4; //已撤销
        try {
                Db::startTrans();
            if(false !== $obj_contract->updateinfostatus($wheres,$contract_update_data)){
                    $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "撤销成功");
                    // 提交事务
                    Db::commit();
                }else{
                    $rep_data = \tools\route\Resp::get_response('Fail', '001', '撤销失败，请重试');
                    // 回滚事务
                    Db::rollback();
                }
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
         }
        unset($obj_contract);
        \tools\route\AjaxReturn::ajx_return($rep_data);

    }


    /**
     * @author 梁浩
     * @return list
     * 拒绝合同操作
     */
    public function refuse_contract()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $contract_code = isset($post["contract_code"]) ? $post["contract_code"] : "";
        if (empty(($contract_code))) {
            $rep_data = \tools\route\Resp::get_response('Fail', -6, '缺少code参数');
            return json_encode($rep_data);
        }
        //通过合同id获取合同信息
        $obj_contract = new \app\Common\Model\Platform\Contract();
        $contract= $obj_contract->getSinglebyCode($contract_code);
        $contract_id = $contract['contract_id'];
        $obj_contract_transfer= new  \app\Common\Model\Platform\ContractTransfer();
        $contract_update_data["status"]=5; //已撤销
        $wheres['contract_id'] = $contract_id;
        $wheres['status'] = array('neq',2);
        Db::startTrans();
            if(false !== $obj_contract->updateinfostatus($wheres,$contract_update_data)){
                try {
                    $where['contract_id'] = $contract_id;
                    $where['target_id'] = \think\Session::get('user.mobile');
                    $where['target_type']='user'; //收件人类型
                   // $where['current_yn']='Y'; //需要我签署
                    $where['sign_status']=0; //合同是未签署
                    $data['sign_status'] = 5; //已拒签
                    if(false !== $obj_contract_transfer->updateTransferstatus($where,$data)){
                        $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "拒绝成功");
                        // 提交事务
                        Db::commit();
                    }else{
                        $rep_data = \tools\route\Resp::get_response('Fail', '001', '拒绝失败，请重试');
                        // 回滚事务
                        Db::rollback();
                    }
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();
                }
            }else{
                // 回滚事务
                Db::rollback();
            }
        unset($obj_contract);
        unset($obj_contract_transfer);
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }






    /**
     * 企业提醒发送邮件
     * @Author : lianghao
     * @param    sendSmsCode
     */

    public function sendSmsCode($email,$end_time){
        if($end_time){
            $end_time = date('Y-m-d H:i:s',$end_time);
        }else{
            $end_time = date('Y-m-d H:i:s',time());
        }
        $setting = $this->setting_cache();
        C($setting);
        $subject = "易签云提醒用户签署";// 邮件标题
        $content = "尊敬的易签云用户，您好！<br/><br/>
                  这是<b>【易签云】</b>电子签约平台为您发出的提醒签约邮件。<br/><br/>
                  <span style='color: red'>(您有一份合同，请在".$end_time."之前完成签署)</span><br/><br/>
                  易签云团队感谢您使用易签云电子签约平台，如果您在使用过程中需要任何帮助，欢迎联系易签云客服。<br/><br/>
                  祝您使用愉快！";
        if(sendMail($email,$subject,$content)!== false){
            $youjian = 100;//发送成功;
        }else{
            $youjian = '';
        }
        return $youjian;
    }

    /**
     * 用户注册发送短信验证码
     * @Author : lianghao
     * @param    telsendSmsCode
     */

    public function telsendSmsCode($tel,$tmpel,$end_time){
        if($end_time){
            $end_time = date('Y-m-d H:i:s',$end_time);
        }else{
            $end_time = date('Y-m-d H:i:s',time());
        }
        if(send_message($tel,$tmpel,$content=array("end_time" => "{$end_time}"))!== false){
            $youjian = 100;//发送成功;
        }else{
            $youjian = '';
        }
        return $youjian;
    }


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

}
