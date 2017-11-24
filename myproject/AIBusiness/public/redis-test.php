<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/2/7
 * Time: 11:17
 */

$redis = new Redis();
$redis->connect('192.168.1.222', 6379);
$redis->auth('123456');
$redis->set("hello","me");
$redis->delete("hello");
$a=$redis->get("hello");
echo $a;