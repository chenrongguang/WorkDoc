<?php

namespace tools\util;

class Encrypt
{

    const AES_ALGORITHMS = MCRYPT_RIJNDAEL_256;
    const AES_MODE = MCRYPT_MODE_CBC;

    public static function AESEncode($key, $ciphertext)
    {
        $td = mcrypt_module_open(self::AES_ALGORITHMS,'',self::AES_MODE,'');
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td),MCRYPT_RAND);
        mcrypt_generic_init($td, $key, $iv);
        $encrypted = mcrypt_generic($td, $ciphertext);
        mcrypt_generic_deinit($td);
        return $iv . $encrypted;
    }

    public static function AESDncode($key, $ciphertext)
    {
        $td = mcrypt_module_open(self::AES_ALGORITHMS,'',self::AES_MODE,'');
        $iv = mb_substr($ciphertext,0,32,'latin1');
        mcrypt_generic_init($td, $key, $iv);
        $data = mb_substr($ciphertext,32,mb_strlen($ciphertext,'latin1'),'latin1');
        $data = mdecrypt_generic($td, $data);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return trim($data);
    }

    //获取签名
    public static function GetSign($app_key,$app_secrect,$timestamp){
        $sign = null;
        $sign_param['app_key'] = $app_key;
        $sign_param['app_secrect'] = $app_secrect;
        $sign_param['timestamp'] = $timestamp;
        $sign_param = array_change_key_case($sign_param, CASE_LOWER);
        ksort($sign_param);
        foreach($sign_param as $key => $value)
        {
            $sign .= $key . html_entity_decode($value);
        }
        $sign = strtoupper(md5(sha1($sign)));
        return $sign;
    }
}