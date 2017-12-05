<?php

namespace tools\util;

class TimeF
{
    /*
     * 根式化成 20010101182020的形式
     */
    public static function timeform1($str_time)
    {
        $str_time =str_replace('-','',$str_time);
        $str_time =str_replace(' ','',$str_time);
        $str_time =str_replace(':','',$str_time);
        return $str_time;
    }

    //获取毫秒时间戳
    public static function msectime()
    {
        list($msec, $sec) = explode(' ', microtime());
        $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        return $msectime;
    }

}