<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 */

namespace tools\activemq;

class Activemq
{
    public static function geturl()
    {
        $host = config("conf-activemq.host");
        $port = config("conf-activemq.port");
        $url = 'tcp://' . $host . ":" . $port;
        return $url;
    }

}