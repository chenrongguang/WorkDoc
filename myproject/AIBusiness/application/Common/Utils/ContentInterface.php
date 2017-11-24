<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 14:07
 */

namespace app\Common\Utils;

/**
 * 内容容器接口定义
 * Author: crg
 * Interface ContentInterface
 * @package Common\Utils
 */
interface ContentInterface
{
    /**
     * 设置内容容器key为value
     * Author: crg
     * @param $key
     * @param $value
     * @return mixed
     */
    public function set($key, $value);

    /**
     * 获取内容容器所有值
     * Author: crg
     * @return mixed
     */
    public function getAll();

    /**
     * 获取某个key的值
     * Author: crg
     * @param $key
     * @return mixed
     */
    public function get($key);
}