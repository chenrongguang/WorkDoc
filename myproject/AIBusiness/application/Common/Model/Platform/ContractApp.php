<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/10/19
 * Time: 14:11
 */
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-9-27
 * Time: 14:26
 * 用户-模型类
 */

namespace app\Common\Model\Platform;

use think\Config;
use think\Model;

class ContractApp extends Base
{

    /**
     * @param $data
     * 新增
     */
    public function add($data)
    {
        $this->data($data);
        return $this->save();
    }

    public function getlist($where, $page_size, $page_now)
    {

        $sql="select distinct a.contract_id,b.subject,f.name as fname,b.contract_code,b.create_time,b.status,b.security_url as contract_url,b.query_code,b.attatchment_url,b.judge_status from esc_contract_app a ";
        $sql.=" inner join esc_contract b on a.contract_id=b.contract_id ";
        $sql.=" join esc_admin_pdline f on f.code = b.subject ";
        $sql.=" where b.use_yn='Y'";
        $sql.=" and b.create_time>=".strtotime($where['start_time'])." and b.create_time<=".strtotime($where['end_time']);
        $sql.=" and a.app_key='" . $where['app_key']."'";
        if(isset($where['status']) && !empty($where['status'])){
            $sql.=" and b.status=" . $where['status']."";
        }
        if(isset($where['subject']) && !empty($where['subject'])){
            $sql.=" and b.subject='" . $where['subject']."'";
        }
        if(isset($where['query_code']) && !empty($where['query_code'])){
            $sql.=" and b.query_code='" . $where['query_code']."'";
        }

        //以下条件主要输入一个，那么要子查询
        if((isset($where['user_name']) && !empty($where['user_name']))
            ||(isset($where['identity_no']) && !empty($where['identity_no']))
        ){
            $sql.=" and a.contract_id in(";
            $sql.=" select distinct d.contract_id  from esc_user_contract d ";
            $sql.=" inner join esc_user_seal e on d.seal_code=e.seal_code ";
            $sql.=" inner join esc_user_pfx f on e.pfx_id=f.pfx_id ";
            $sql.=" where 1=1 ";
            if(isset($where['user_name']) && !empty($where['user_name'])){
                $sql.=" and f.user_name='" . $where['user_name']."'";
            }
            if(isset($where['identity_no']) && !empty($where['identity_no'])){
                $sql.=" and f.identity_no='" . $where['identity_no']."'";
            }
            $sql.=" ) ";
        }
        if((isset($where['mobile']) && !empty($where['mobile']))
        ){
            $sql.=" and a.contract_id in(";
            $sql.=" select distinct g.contract_id  from esc_user_contract g ";
            $sql.=" inner join esc_user h on g.user_id=h.user_id ";
            $sql.=" where 1=1 ";
            $sql.=" and h.mobile='" . $where['mobile']."'";
            $sql.=" ) ";
        }
        $sql.=" order by a.contract_id desc ";
        $sql.=" limit ". $page_size * ($page_now - 1).",". $page_size ;

        $result = \think\Db::query($sql);
        return $result;

      /*
        $sql="select distinct a.contract_id b.contract_code,b.create_time,b.status,b.security_url as contract_url,b.query_code,b.attatchment_url,b.judge_status from esc_contract_app a ";
        $sql.=" inner join esc_contract b on a.contract_id=b.contract_id ";
        $sql.=" where b.use_yn='Y'";
        $sql.=" and b.create_time>=".strtotime($where['start_time'])." and b.create_time<=".strtotime($where['end_time']);
        $sql.=" and a.app_key='" . $where['app_key']."'";
        if(isset($where['status']) && !empty($where['status'])){
            $sql.=" and b.status=" . $where['status']."";
        }
        if(isset($where['query_code']) && !empty($where['query_code'])){
            $sql.=" and b.query_code='" . $where['query_code']."'";
        }

        //以下条件主要输入一个，那么要子查询
        if((isset($where['user_name']) && !empty($where['user_name']))
            ||(isset($where['identity_no']) && !empty($where['identity_no']))
        ){
            $sql.=" and a.contract_id in(";
            $sql.=" select distinct d.contract_id  from esc_user_contract d ";
            $sql.=" inner join esc_user_seal e on d.seal_code=e.seal_code ";
            $sql.=" inner join esc_user_pfx f on e.pfx_id=f.pfx_id ";
            $sql.=" where 1=1 ";
            if(isset($where['user_name']) && !empty($where['user_name'])){
                $sql.=" and f.user_name='" . $where['user_name']."'";
            }
            if(isset($where['identity_no']) && !empty($where['identity_no'])){
                $sql.=" and f.identity_no='" . $where['identity_no']."'";
            }
            $sql.=" ) ";
        }
        if((isset($where['mobile']) && !empty($where['mobile']))
        ){
            $sql.=" and a.contract_id in(";
            $sql.=" select distinct g.contract_id  from esc_user_contract g ";
            $sql.=" inner join esc_user h on g.user_id=h.user_id ";
            $sql.=" where 1=1 ";
            $sql.=" and h.mobile='" . $where['mobile']."'";
            $sql.=" ) ";
        }

        $sql .= " order by  a.contract_id desc";
        $sql .= " limit "  .$page_size*($page_now-1).",".$page_size;

        $result = \think\Db::query($sql);
        return $result;
*/
    }

    public function gettotal($where)
    {
        $sql="select distinct a.contract_id from esc_contract_app a ";
        $sql.=" inner join esc_contract b on a.contract_id=b.contract_id ";
        $sql.=" where b.use_yn='Y'";
        $sql.=" and b.create_time>=".strtotime($where['start_time'])." and b.create_time<=".strtotime($where['end_time']);
        $sql.=" and a.app_key='" . $where['app_key']."'";
        if(isset($where['status']) && !empty($where['status'])){
            $sql.=" and b.status=" . $where['status']."";
        }
        if(isset($where['subject']) && !empty($where['subject'])){
            $sql.=" and b.subject='" . $where['subject']."'";
        }
        if(isset($where['query_code']) && !empty($where['query_code'])){
            $sql.=" and b.query_code='" . $where['query_code']."'";
        }

        //以下条件主要输入一个，那么要子查询
        if((isset($where['user_name']) && !empty($where['user_name']))
            ||(isset($where['identity_no']) && !empty($where['identity_no']))
        ){
            $sql.=" and a.contract_id in(";
            $sql.=" select distinct d.contract_id  from esc_user_contract d ";
            $sql.=" inner join esc_user_seal e on d.seal_code=e.seal_code ";
            $sql.=" inner join esc_user_pfx f on e.pfx_id=f.pfx_id ";
            $sql.=" where 1=1 ";
            if(isset($where['user_name']) && !empty($where['user_name'])){
                $sql.=" and f.user_name='" . $where['user_name']."'";
            }
            if(isset($where['identity_no']) && !empty($where['identity_no'])){
                $sql.=" and f.identity_no='" . $where['identity_no']."'";
            }
            $sql.=" ) ";
        }
        if((isset($where['mobile']) && !empty($where['mobile']))
        ){
            $sql.=" and a.contract_id in(";
            $sql.=" select distinct g.contract_id  from esc_user_contract g ";
            $sql.=" inner join esc_user h on g.user_id=h.user_id ";
            $sql.=" where 1=1 ";
            $sql.=" and h.mobile='" . $where['mobile']."'";
            $sql.=" ) ";
        }
        $result = \think\Db::query($sql);
        return $result;
    }

    public function getSingleByCondition($where)
    {
        $result =
            $this->where($where)
                ->find();
        return $result;
    }

    public function getlistbycondition($where,$orderby="create_time desc",$limit=1000000)
    {
        $result =
            $this->where($where)->limit(0,$limit)
                ->order($orderby)->select();
        return $result;
    }

    public function  getapplistbywhere($where,$orderby="create_time desc",$limit=1000000){
        /*
        $query_where['a.contract_id']= $where['contract_id'];
        $prefix = Config::get('database.prefix');
        $result = $this->alias('a')
            ->field("a.create_time,a.type,c.mobile,c.user_name,a.client_ip")

            //->join($prefix . 'app b', 'a.app_key = b.app_key', 'inner')
            //->join($prefix . 'user c', 'b.user_id = c.user_id', 'inner')

            ->join($prefix . 'user c', 'a.action_userid = c.user_id', 'inner')
            ->where($query_where)
            ->limit(0, $limit)
            ->order($orderby)
            ->select();
        return $result;
        */

        $pdline=$where['pdline'];
        $query_where['a.contract_id']= $where['contract_id'];
        $prefix = Config::get('database.prefix');

        //批量业务,发起者就是appkey用户，
        //其他业务，发起者就是发件人
        if($pdline=='1002'){
            $result = $this->alias('a')
                ->field("a.create_time,a.type,c.mobile,c.user_name,a.client_ip")
                ->join($prefix . 'app b', 'a.app_key = b.app_key', 'inner')
                ->join($prefix . 'user c', 'b.user_id = c.user_id', 'inner')
                ->where($query_where)
                ->limit(0, $limit)
                ->order($orderby)
                ->select();
        }
        else{
            $result = $this->alias('a')
                ->field("a.create_time,a.type,c.mobile,c.user_name,a.client_ip")
                ->join($prefix . 'user c', 'a.action_userid = c.user_id', 'inner')
                ->where($query_where)
                ->limit(0, $limit)
                ->order($orderby)
                ->select();
        }
        return $result;

    }

    //删除条件记录
    public function deleteRecord($where){
        return $this->where($where)->delete();
    }

    /**
     * 我发起等待其他人签署合同总计
     * @author lianghao
     * @return html
     */
    public function  getwaitsigncontract($where){
       /* $query_where['a.action_userid']= $where['action_userid'];
        $query_where['a.type']= $where['type'];
        $query_where['b.status']= $where['status'];
        $query_where['b.contract_type']= $where['contract_type'];
        $query_where['b.use_yn']='Y';
        $prefix = Config::get('database.prefix');
        $result = $this->alias('a')
            ->distinct(true)
            ->field("a.contract_id")
            ->join($prefix . 'contract b', 'a.contract_id = b.contract_id', 'left')
            ->where($query_where)
            ->select();
        return $result;*/
        $sql=" SELECT DISTINCT a.contract_id,b.query_code,b.status, b.judge_status,b.create_time, b.contract_code FROM esc_contract_app a ";
        $sql .=" INNER JOIN esc_contract b ON a.contract_id=b.contract_id ";
        $sql .=" where a.type='".$where['type']."'";
        $sql .=" and b.contract_type='".$where['contract_type']."'";
        $sql .=" and a.action_userid='".$where['action_userid']."'";
        $sql .=" and b.use_yn='Y' ";
        $sql .=" and b.subject <> '1003' ";
        $sql .=" and b.status= ".$where['status'];
        $sql .=" and a.contract_id in( select c.contract_id from esc_contract_transfer c where c.sign_status=0)";
        $result = \think\Db::query($sql);
        return $result;

    }

    /**
     * 我发起等待合同总数
     * @author lianghao
     * @return html
     */
    public function get_waitListtotal($where){

        $sql=" SELECT DISTINCT a.contract_id,b.query_code,b.status, b.judge_status,b.create_time, b.contract_code FROM esc_contract_app a ";
        $sql .=" INNER JOIN esc_contract b ON a.contract_id=b.contract_id ";
        //$sql .=" where a.type='".$where['type']."'";
        $sql .=" where b.contract_type='".$where['contract_type']."'";
        $sql .=" and a.action_userid='".$where['action_userid']."'";
        $sql .=" and b.use_yn='Y' ";
        $sql .=" and b.subject <> '1003' ";
        $sql .=" and b.status= ".$where['status'];
        $sql .=" and a.contract_id in( select c.contract_id from esc_contract_transfer c where c.sign_status=0)";
        /*搜素开始时间*/
        if(isset($where['start_time']) && !empty($where['start_time'])){
            $sql.="AND b.create_time >=" .strtotime($where['start_time'])." " ;
        }

        /*搜素结束时间*/
        if(isset($where['end_time']) && !empty($where['end_time'])){
            $sql.="AND b.create_time <=" .strtotime($where['end_time'])."" ;
        }

        /*搜索主题*/
        if(isset($where['theme']) && !empty($where['theme'])){
            $sql.=" and b.theme =" . $where['theme']."";
        }

        //以下条件主要输入一个，那么要子查询
        /*搜索发件人*/
        if((isset($where['user_name']) && !empty($where['user_name']))){
            $sql.=" and b.contract_id in(";
            $sql.="select contract_id from esc_contract_app where action_userid in (";
            $sql.=" select user_id from esc_user where user_name like '%".$where['user_name']."%'))";
        }

        /*搜索收件人*/
        if((isset($where['addressee']) && !empty($where['addressee']))){
            $sql.=" and b.contract_id in(";
            /*  $sql.="select distinct contract_id from esc_user_contract where user_id in (";
              $sql.=" select user_id from esc_user where user_name like '%".$where['addressee']."%' )";
              $sql.="  union ";*/
            $sql.="select distinct contract_id from esc_contract_transfer where target_id in (";
            $sql.=" select mobile from esc_user where user_name like '%".$where['addressee']."%' ))";
        }

        /*搜索发起者*/
        if((isset($where['action_key']) && !empty($where['action_key']))){
            $sql.=" AND b.contract_id in (select contract_id from esc_contract_app where  type = 'boot' and app_key in(";
            $sql.=" select app_key from esc_user A left join esc_app B ON A.user_id = B.user_id ";
            $sql.="where A.user_name like '%".$where['action_key']."%'))";
        }
        $result = \think\Db::query($sql);
        return count($result);
    }

    /**
     * 我发起等待其他人签署合同列表
     * @author lianghao
     * @return html
     */
    public function get_waitList($where,$page_size,$page_now){

        $sql=" SELECT DISTINCT a.contract_id,b.query_code,b.status, b.judge_status,b.create_time, b.contract_code FROM esc_contract_app a ";
        $sql .=" INNER JOIN esc_contract b ON a.contract_id=b.contract_id ";
        //$sql .=" where a.type='".$where['type']."'";
        $sql .=" where b.contract_type='".$where['contract_type']."'";
        $sql .=" and a.action_userid='".$where['action_userid']."'";
        $sql .=" and b.use_yn='Y' ";
        $sql .=" and b.subject <> '1003' ";
        $sql .=" and b.status= ".$where['status'];
        $sql .=" and a.contract_id in( select c.contract_id from esc_contract_transfer c where c.sign_status=0)";
        /*搜素开始时间*/
        if(isset($where['start_time']) && !empty($where['start_time'])){
            $sql.="AND b.create_time >=" .strtotime($where['start_time'])." " ;
        }

        /*搜素结束时间*/
        if(isset($where['end_time']) && !empty($where['end_time'])){
            $sql.="AND b.create_time <=" .strtotime($where['end_time'])."" ;
        }

        /*搜索主题*/
        if(isset($where['theme']) && !empty($where['theme'])){
            $sql.=" and b.theme =" . $where['theme']."";
        }

        //以下条件主要输入一个，那么要子查询
        /*搜索发件人*/
        if((isset($where['user_name']) && !empty($where['user_name']))){
            $sql.=" and b.contract_id in(";
            $sql.="select contract_id from esc_contract_app where action_userid in (";
            $sql.=" select user_id from esc_user where user_name like '%".$where['user_name']."%'))";
        }
        /*搜索收件人*/
        if((isset($where['addressee']) && !empty($where['addressee']))){
            $sql.=" and b.contract_id in(";
            /*  $sql.="select distinct contract_id from esc_user_contract where user_id in (";
              $sql.=" select user_id from esc_user where user_name like '%".$where['addressee']."%' )";
              $sql.="  union ";*/
            $sql.="select distinct contract_id from esc_contract_transfer where target_id in (";
            $sql.=" select mobile from esc_user where user_name like '%".$where['addressee']."%' ))";
        }
        /*搜索发起者*/
        if((isset($where['action_key']) && !empty($where['action_key']))){
            $sql.=" AND b.contract_id in (select contract_id from esc_contract_app where  type = 'boot' and app_key in(";
            $sql.=" select app_key from esc_user A left join esc_app B ON A.user_id = B.user_id ";
            $sql.="where A.user_name like '%".$where['action_key']."%'))";
        }
        $sql .=" order by b.create_time desc";
        $sql .= " limit "  .$page_size*($page_now-1).",".$page_size;
        $result = \think\Db::query($sql);
        return $result;
    }

    /**
     * @param $contract_id
     * @return array|false|\PDOStatement|string|Model
     * 获取流转签约发起者信息
     */
    public  function getUserIdSingle($contract_id){
        $user_id = $this->where([
            'contract_id' => $contract_id,
            'type'=>'boot'
        ])->value('action_userid');
        return $user_id;
    }


}