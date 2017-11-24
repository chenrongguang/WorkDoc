<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/14
 * Time: 8:56
 */

namespace app\Common\Utils;

/**
 * 响应接口的定义
 * Author: crg
 * Interface ResponseInterface
 * @package Common\Utils
 */
interface ResponseInterface
{
    /**
     * 获取code
     * Author: crg
     * @return mixed
     */
    public function getCode();

    /**
     * 设置code
     * Author: crg
     * @param $code
     * @return mixed
     */
    public function setCode($code);

    /**
     * 获取字段
     * Author: crg
     * @return mixed
     */
    public function getField();

    /**
     * 设置字段
     * Author: crg
     * @param $field
     * @return mixed
     */
    public function setField($field);

    /**
     * 获取数据
     * Author: crg
     * @return mixed
     */
    public function getData();

    /**
     * 设置数据
     * Author: crg
     * @param $data
     * @return mixed
     */
    public function setData($data);
}