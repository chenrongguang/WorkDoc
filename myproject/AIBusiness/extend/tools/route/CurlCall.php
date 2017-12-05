<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 跳转类
 */

namespace tools\route;

class CurlCall
{

    public static function call($url,$data,$time_out = 5,$port=80,$type='unkonwn')
    {
       try {
           $curl = curl_init();
           curl_setopt($curl, CURLOPT_URL, $url);
           curl_setopt($curl, CURLOPT_PORT, $port);
           curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); //设置是否返回信息
           curl_setopt($curl, CURLOPT_POST, TRUE); //设置为POST方式
           curl_setopt($curl, CURLOPT_TIMEOUT, $time_out); //设置为POST方式
           curl_setopt($curl, CURLOPT_POSTFIELDS, $data);   //POST数据
           curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=utf-8", 'Content-Length:' . strlen($data)));

           if(substr($url,0,8)=="https://"){
               curl_setopt($curl, CURLOPT_SSLVERSION, "all");
               curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
               curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
           }

           $response = curl_exec($curl); //接收返回信息
           if (curl_errno($curl)) {//出错则显示错误信息
               $mess=curl_error($curl);
               \think\Log::write($type."调用失败:".$mess);
               return false;
           } else {
               return $response ;
           }
       }
       catch(\Exception $e){
           \think\Log::write($type."调用失败-错误:".$e->getMessage());
           return false;
       }
    }

}