<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 内部api调用
 */

namespace tools\api;

 class  Inner {
     public  static  function callAPI($method,$data){
            $api=new \app\api\service\InnerAPI(config('API_PREFIX').$method);
            $result= $api->execute(json_encode($data));
            unset($api);
            return $result;
    }
}