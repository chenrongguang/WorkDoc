<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-8-24
 * Time: 14:26
 * 内部api调用
 */

namespace tools\db;

 class  ResultHandle {

     public static function process($result)
     {
         if (false === $result) {
             throw new \Exception('Y9999', 9999);
         } else if (null === $result) {
             throw new \Exception('Y9998', 9998);
         } else if (is_array($result)) {
             return $result;
         } else if (is_string($result)) {
             return $result;
         } else if (is_object($result)) {
             return $result;
         } else if (is_int($result)) {
             if($result>0){
                 return $result;
             }
             else{
                 throw new \Exception('Y9999', 9999);
             }
         } else {
             throw new \Exception('Y9999', 9999);
         }
     }
}