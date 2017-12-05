<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * ajax返回类
 */

namespace tools\route;

class MakeUrl
{

    /**
     * @param $rep_data
     */
    public static function makeurl($request_info, $business)
    {

        $now =time();
        $buiness_para = self::getbusiness($business);
        $aop_signature = self::signature($business, $request_info, $now);//生成签名
        $url = config('server_host');
        $url .= "/";
        $url .= $request_info['format'];
        $url .= "/";
        $url .= $request_info['method'];
        $url .= "/";
        $url .= $request_info['app_key'];
        $url .= "?";
        $url .= "_aop_signature=" . $aop_signature;
        if($request_info['needtime']){
            $url .= "&_aop_timestamp=" . $now;
        }
        if($request_info['needtoken']){
            $url .= "&access_token=" . $request_info['access_token'];
        }
        $url .= $buiness_para;
        return $url;
    }


    //生成签名
    public static function signature(array $parameters, $request_info, $now)
    {
        //生成签名路径
        $path = self::generateAPIPath($request_info, $now);

        //追加签名参数
        //$parameters ["access_token"] = $request_info['access_token'];
        //$parameters ["_aop_timestamp"] =$now;

        $paramsToSign = array();
        foreach ($parameters as $k => $v) {
            $paramToSign = $k . $v;
            Array_push($paramsToSign, $paramToSign);
        }
        sort($paramsToSign);
        $implodeParams = implode($paramsToSign);
        $pathAndParams = $path . $implodeParams;
        $sign = hash_hmac("sha1", $pathAndParams, $request_info['app_secrect'], true);
        $signHexWithLowcase = bin2hex($sign);
        $signHexUppercase = strtoupper($signHexWithLowcase);
        return $signHexUppercase;
    }

    //组织业务字段
    public static function getbusiness($parameters)
    {
        $tempPath = "";
        foreach ($parameters as $k => $v) {
            $tempPath .= "&" . $k . "=" . $v;
        }
        return $tempPath;
    }

    //生成路径
    public static function generateAPIPath($para, $now)
    {
        $method = $para['method'];
        $urlResult = "";
        if($para['needtime']){
            $defs = array(
                $urlResult,
                $para['format'],
                "/",
                $method,
                "/",
                $now,
                "/",
                $para['app_key']
            );
        }
        else{
            $defs = array(
                $urlResult,
                $para['format'],
                "/",
                $method,
                "/",
                $para['app_key']
            );
        }

        $urlResult = implode($defs);

        return $urlResult;
    }


}