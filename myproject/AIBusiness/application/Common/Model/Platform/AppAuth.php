<?php
namespace app\Common\Model\Platform;

use think\Config;
use think\Model;

class AppAuth extends Base
{
    public function addauth($data)
    {
        $this->data($data);
        return $this->save();
    }

    public  function updateBywhere($data,$where){
        $info = $this->where($where)->update($data);
        return $info;
    }

    public function getList($where)
    {
        $info = $this->where($where)
            ->order('create_time desc')
            ->select();
        return $info;
    }

    //判断appkey需要调用的数据是否有权限，返回其有权限列表，包括其自身
    public function getdataAuth($where){

        $sql = " select user_id from esc_app where app_key='".
            $where['app_key']."' and user_id=". $where['user_id'] ." and use_yn='Y'";
        $sql .=" union ";
        $sql .= "select user_id from esc_app_auth where app_key='".
            $where['app_key']."' and user_id=". $where['user_id'] ." and use_yn='Y'";
        $result = \think\Db::query($sql);
        return $result;
    }

    //判断appkey需要调用的数据是否有权限，返回其有权限列表，包括其自身
    public function getAuths($where){
        $sql = " select user_id from esc_app where app_key='".
            $where['app_key']."' and confirm_status=". $where['confirm_status'] ." and use_yn='Y'";
        $sql .=" union ";
        $sql .= "select user_id from esc_app_auth where app_key='".
            $where['app_key']."' and use_yn='Y'";
        $result = \think\Db::query($sql);
        return $result;
    }

    //获取完整的信息
    public function getjoinlist($where)
    {
        $query_where['a.user_id'] = $where['user_id'];
        $query_where['a.use_yn'] = $where['use_yn'];
        $query_where['b.use_yn'] = "Y";
        $prefix = Config::get('database.prefix');
        $result = $this->alias('a')
            ->field("a.auth_id,a.auth_code,a.create_time,a.app_key,b.app_name,c.user_name")
            ->join($prefix . 'app b', 'a.app_key = b.app_key', 'inner')
            ->join($prefix . 'user c', 'b.user_id = c.user_id', 'inner')
            ->where($query_where)
            ->order("a.create_time")
            ->select();
        return $result;

    }
    //修改授权表信息
    public  function edit($where,$data){
        $r = $this->where($where)->update($data);
        return $r;
    }

}