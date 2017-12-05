<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 内部api调用
 */

namespace tools\db;

 class  Uuid {

     public  static  function getUUID(){
         if (function_exists('com_create_guid')){
             return com_create_guid();
         }else{
             mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
             $charid = strtoupper(md5(uniqid(rand(), true)));
             $hyphen = chr(45);// "-"
             $uuid =substr($charid, 0, 8).$hyphen
                 .substr($charid, 8, 4).$hyphen
                 .substr($charid,12, 4).$hyphen
                 .substr($charid,16, 4).$hyphen
                 .substr($charid,20,12);

             return $uuid;
         }
    }
}