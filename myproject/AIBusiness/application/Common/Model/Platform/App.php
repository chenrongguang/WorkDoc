<?php
namespace app\Common\Model\Platform;

use think\Model;
use think\Config;

class App extends  Base
{
    public function getAppInfoByAppKey($app_key)
    {
        try {
            $redis = new \Redis();
            $redis->connect(config('redis_config.host'), config('redis_config.port'));
            $redis->auth(config('redis_config.password'));
            $object = 'app_key_'.$app_key;
            $auth_app_key = $redis->get($object);
            $info = json_decode($auth_app_key,true);
            if (!empty($info['data'])) {
                $r = $info['data'];
            } else {
                $where=array('app_key'=>$app_key,'use_yn'=>'Y','confirm_status'=>2); //梁浩添加 APP_key 必须经过审核
                $r = $this->where($where)->find();
                $model = new \app\Common\Model\Platform\AppAuth();//根据app_key 去获取用户的id
                $where=array('app_key'=>$app_key,'confirm_status'=>2);
                $list= $model->getAuths($where);
                $new_array = array();
                foreach($list as $k=>$v){
                    $new_array[] = $v['user_id'];
                }
                $arr['user_id']=$new_array;
                $arr['data'] = $r;
                if($r){
                    $redis->set($object, json_encode($arr));
                }else{
                    //写日志
                    \think\Log::write("获取APP_KEY对应应用数据失败可能是审核不通过造成的--获取应用信息");
                }

            }
            $redis->close();
            unset($redis);
        } catch (\Exception $e) {
            //写日志
            \think\Log::write("获取APP_KEY对应数据到redis:".$e->getMessage());
            return  null;
        }
        return $r;
    }



    public function getUsersByAppKey($app_key)
    {
        try {
            $redis = new \Redis();
            $redis->connect(config('redis_config.host'), config('redis_config.port'));
            $redis->auth(config('redis_config.password'));
            $object = 'app_key_'.$app_key;
            $auth_app_key = $redis->get($object);
            $info = json_decode($auth_app_key,true);
            if (!empty($info['data'])) {
                $result = $info['user_id'];
            } else {
                $where=array('app_key'=>$app_key,'use_yn'=>'Y','confirm_status'=>2); //梁浩添加 APP_key 必须经过审核
                $r = $this->where($where)->find();
                $model = new \app\Common\Model\Platform\AppAuth();//根据app_key 去获取用户的id
                $where=array('app_key'=>$app_key,'confirm_status'=>2);
                $list= $model->getAuths($where);
                $new_array = array();
                foreach($list as $k=>$v){
                    $new_array[] = $v['user_id'];
                }
                $arr['user_id']=$new_array;
                $arr['data'] = $r;
                $result = $new_array;
                if($r){
                    $redis->set($object, json_encode($arr));
                }else{
                    //写日志
                    \think\Log::write("获取APP_KEY对应应用数据失败可能是审核不通过造成的--授权用户组");
                }

            }
            $redis->close();
            unset($redis);
        } catch (\Exception $e) {
            //写日志
            \think\Log::write("获取APP_KEY对应数据到redis:".$e->getMessage());
            return  null;
        }
        return $result;
    }


    //WEB端页面这个查询所有的appkey 不存在审核的问题
    public function getAppInfoByAppKeys($app_key)
    {
        $where=array('app_key'=>$app_key,'use_yn'=>'Y');
        $r = $this->where($where)->find();
        return $r;
    }

    public function getList($where){
        $info = $this->field('confirm_status,create_time,app_name,app_key,app_secrect,app_type,app_notify_url')
            ->where($where)
            ->order('create_time desc')
            ->select();
        return $info;
    }

    public function getmarketList($where){

    $query_where['a.use_yn']= "Y";
    $query_where['a.app_type']= $where['app_type'];
    $query_where['a.app_key']= $where['app_key'];
    $prefix = Config::get('database.prefix');
    $result = $this->alias('a')
        ->field("a.app_name,a.app_key,a.create_time,a.pic_url,a.desc,a.confirm_status,aa.user_name,b.auth_id")
        ->distinct(true)
        ->join($prefix . 'user aa', 'a.user_id = aa.user_id', 'inner')
        ->join($prefix . 'app_auth b', "a.app_key = b.app_key and b.use_yn='Y'"." and b.user_id=".$where['user_id']."", 'left')
        ->where($query_where)
        ->order("a.create_time asc")
        ->select();

    return $result;

    }
    /*web授权搜索页面梁浩添加*/
    public function getmarketLists($where){

        $query_where['a.use_yn']= "Y";
        $query_where['a.app_type']= $where['app_type'];
        $query_where['a.app_key']= $where['app_key'];
        $query_where['a.confirm_status']= $where['confirm_status'];
        $prefix = Config::get('database.prefix');
        $result = $this->alias('a')
            ->field("a.app_name,a.app_key,a.create_time,a.pic_url,a.desc,a.confirm_status,aa.user_name,b.auth_id")
            ->distinct(true)
            ->join($prefix . 'user aa', 'a.user_id = aa.user_id', 'inner')
            ->join($prefix . 'app_auth b', "a.app_key = b.app_key and b.use_yn='Y'"." and b.user_id=".$where['user_id']."", 'left')
            ->where($query_where)
            ->order("a.create_time asc")
            ->select();
        return $result;

    }


    public  function addapp($data){
        $this->data($data);
        return $this->save();
    }

    public  function edit($where,$data){
        $r = $this->where($where)->update($data);
        return $r;
    }

    /*
     * 删除app_key对应的redis缓存
     * */
    public  function deleteReids($app_key,$desc){
        //删除应用同时删除redis
        try {
            //删除redis里面存储的用户appkey信息
            $object = 'app_key_'.$app_key;
            $redis = new \Redis();
            $redis->connect(config('redis_config.host'), config('redis_config.port'));
            $redis->auth(config('redis_config.password'));
            $redis->delete($object);
            $redis->close();
            unset($redis);
        } catch (\Exception $e) {
            //写日志
            \think\Log::write($desc);
        }
    }


}