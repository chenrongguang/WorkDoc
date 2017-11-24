<?php
namespace app\home\controller;
use think\Db;
//演示
class Demo extends Base
{
	
	public function accountbook_gai(){
		 return $this->fetch();
	}
    //流水账签署
    public function accountbook()
    {   //对账单签署
        $where['use_yn'] = 'Y';
        $where['confirm_status'] = 2;
        $where['user_id'] = \think\Session::get('user.user_id');
        $where['seal_type'] = 'e';
        $list = Db::name('UserSeal')->field('id,user_id,seal_code,name')->where($where)->order('create_time desc')->select();
        $this->assign('seal_list', $list);
        //对账单查询（1003）
        $request = \think\Request::instance();
        $req = $request->param();
        $start_time = date("Y-m-d H:i:s",strtotime("-7 day")); //7天前
        $end_time = date("Y-m-d H:i:s", time());

        if (isset($req['start_time'])) {
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $end_time = $req['end_time'];
        }

        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
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
     * 查看全部对账单合同异步加载
     */
    public function accountbook_ajax()
    {
        $request = \think\Request::instance();
        $req = $request->param();
        $where['user_id'] = \think\Session::get('user.user_id');
        $where['subject'] = '1003';//对账单产品
        if (isset($req['start_time'])) {
            $where['start_time'] = $req['start_time'];
            $start_time = $req['start_time'];
        }
        if (isset($req['end_time'])) {
            $where['end_time'] = $req['end_time'];
            $end_time = $req['end_time'];
        }
        $show_para = array(
            "start_time" => $start_time,
            "end_time" => $end_time,
            "query" => 1,

        );
        $Contracts = new \app\Common\Model\Platform\Contract();
        //通过用户获取合同列表总数
        $list_total = $Contracts->get_waitList_total($where);
        if (count($list_total)) {
            $total = count($list_total);
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
        $list = $Contracts->get_waitList($where,$page_size,$now_page);
        if (empty($list)) {
            $list = "";
        }
        $show = $Page->show();
        $show=str_replace('/demo/accountbook_ajax','/demo/accountbook',$show);
        return $this->fetch("", array_merge($show_para, array('page' => $show,'list' =>$list)));

    }


    //流水账签署
    public function ajax_accountbookDo()
    {
        $content = file_get_contents('php://input');
        $post = json_decode($content, true);
        $val_seal_code = $post['seal_code'];
        //对账单名称
        if(isset($post['contract_name']) && !empty($post['contract_name'])){
            $contract_name = $post['contract_name'];
        }else{
            $contract_name = "对账单-".date('YmdHis',time());
        }

        if (empty($val_seal_code)) {
            $rep_data = \tools\route\Resp::get_response('FAIL', -2, '印章编码不存在!');
            \tools\route\AjaxReturn::ajx_return($rep_data);
        }
        //根据该印章，获取用户等数据：
        $arr_temp = $this->getsignuser_ent($val_seal_code);
        if ($arr_temp == false) {
            $rep_data = \tools\route\Resp::get_response('FAIL', -3, '获取用户信息错误');
            \tools\route\AjaxReturn::ajx_return($rep_data);
        }

        if ($arr_temp['confirm_status'] != 2) {
            $rep_data = \tools\route\Resp::get_response('FAIL', -4, '企业信息没有审核通过');
            \tools\route\AjaxReturn::ajx_return($rep_data);
        }

        $pdf_data = \think\Session::get("accountbook_pdf_data");
        if (empty($pdf_data)) {
            $rep_data = \tools\route\Resp::get_response('FAIL', -1, '数据不存在!');
            \tools\route\AjaxReturn::ajx_return($rep_data);
        }

        $arr_detail = array(
            'file_data' => $pdf_data,
            'query_code' => "accountbook_test",
            'contract_name' =>$contract_name,
            'action_user' => \think\Session::get('user.mobile'),//当前用户作为发起签署方
            'subject'=>'1003',
            'sign_list' =>array(array(
                'sign_user' => $arr_temp,
                'sign_para_list' =>array(array("sign_para"=>array("page" =>"1", "location_type" => 2, "lx" => 410, "ly" => 400)))
            )),
            'pic_sign_list' =>array(array(
                'sign_user' => $arr_temp,
                'sign_para_list' =>array(array("sign_para"=>array("startPage" => 2, "endPage" => -1, "lx" => 410, "ly" => 400)))
            )),
        );
        $result_json = \tools\api\Inner::callAPI('platform.sign.bfep', $arr_detail);
        $result = json_decode($result_json);

        if ($result->code === 0) {
            sleep(5);//延时10秒/留给oss上传的时间
            $return_data['url'] = $result->data->file_info;
            $rep_data = \tools\route\Resp::get_response('SUCCESS', 0, "签署成功", $return_data);
        } else {
            $rep_data = \tools\route\Resp::get_response('Fail', '001', $result->message);
        }
        \tools\route\AjaxReturn::ajx_return($rep_data);
    }

}
