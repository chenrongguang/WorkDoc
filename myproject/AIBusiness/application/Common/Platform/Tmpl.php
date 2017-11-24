<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 * 数据权限校验类
 */

namespace app\Common\Platform;

class Tmpl
{
    //根据模板id,读取模板的二进制流数据
    public function getTmplDataByCode($tmpl_code)
    {
        //todo
        $obj_tmpl_model = new \app\Common\Model\Platform\Tmpl();
        $get_result = $obj_tmpl_model->getSingle($tmpl_code);
        unset($obj_tmpl_model);
        if ($get_result == false || $get_result == null) {
            return false;
        }
        $tmpl_url = $get_result['tmpl_url'];
        $tmpl_type = $get_result['tmpl_type'];
        $object = str_replace(config('UPLOAD_CONFIG.outerhost') . "/", "", $tmpl_url); //网址的域名部分替换掉

        /*
        $obj_upload = new \tools\upload\Oss();
        $download_result = $obj_upload->download($object);
        unset($obj_upload);
        if(!$download_result) {
            return false;
        }
        else{
            //return $download_result;
            $ret_arr= array('tmpl_type'=>$tmpl_type,'tmpl_data'=>$download_result);
            return $ret_arr;
        }
        */
        //如果读取的是普通的模板，则可以尝试去缓存中读取，如果缓存读取不到，则到oss中读取，
        //并且在oss中读取到之后，设置入缓存中
        if ($tmpl_type == "common") {
            try {
                $redis = new \Redis();
                $redis->connect(config('redis_config.host'), config('redis_config.port'));
                $redis->auth(config('redis_config.password'));
                $tmp_data = $redis->get($object);
                if (!empty($tmp_data)) {
                    $download_result = base64_decode($tmp_data);//解码
                } else {
                    $download_result = $this->getdatafromoss($object);
                    //并且存入redis中
                    if ($download_result != false) {
                        $redis->set($object, base64_encode($download_result));
                    }
                }
                $redis->close();
                unset($redis);
            } catch (\Exception $e) {
                //$download_result=false;
                $download_result = $this->getdatafromoss($object); //redis错，再获取一遍
                unset($redis);
            }
        } else {
            $download_result = $this->getdatafromoss($object);
        }

        if (!$download_result) {
            return false;
        } else {
            //return $download_result;
            $ret_arr = array('tmpl_type' => $tmpl_type, 'tmpl_data' => $download_result);
            return $ret_arr;
        }
    }


    //根据url,读取模板的二进制流数据
    public function getTmplDataByUrl($tmpl_url)
    {
        $object = str_replace(config('UPLOAD_CONFIG.outerhost') . "/", "", $tmpl_url); //网址的域名部分替换掉
        $download_result = $this->getdatafromoss($object);
        if (!$download_result) {
            return false;
        } else {
            $ret_arr = array('tmpl_data' => $download_result);
            return $ret_arr;
        }
    }


    public function getdatafromoss($object)
    {
        $obj_upload = new \tools\upload\Oss();
        $download_result = $obj_upload->download($object);
        unset($obj_upload);
        return $download_result;
    }
}