<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 生成cfca库的主键，19位数字：时间戳10位+9位随机数字
 */

namespace tools\db;

 class  MakeKey {

     public  static  function getKey(){
            return time().rand(100000000,999999999);
    }

     //生成印章编码
     public static  function  getSealCode(){
         $sealCode= str_replace('-','',\tools\db\Uuid::getUUID());
         return $sealCode;
     }

     //生成合同编码
     public static  function  getContractCode(){
         $raddata= rand(100000,999999);
         $uuid= \tools\db\Uuid::getUUID();
         $str_time=(string)time();
         $contractCode = (string)substr($raddata,0,1);
         $contractCode .=(string)substr($str_time,0,2);
         $contractCode .= (string)substr($raddata,1,1);
         $contractCode .=(string)substr($str_time,2,2);
         $contractCode .= (string)substr($raddata,2,1);
         $contractCode .=(string)substr($str_time,4,2);
         $contractCode .= (string)substr($raddata,3,1);
         $contractCode .=(string)substr($str_time,6,2);
         $contractCode .= (string)substr($raddata,4,1);
         $contractCode .=(string)substr($str_time,8,2);
         $contractCode .=(string)rand(1,9);
         $contractCode .=(string)substr($uuid,0,2);
         return $contractCode;
     }
}