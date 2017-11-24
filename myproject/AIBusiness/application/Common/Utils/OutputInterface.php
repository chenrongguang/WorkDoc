<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/14
 * Time: 9:04
 */

namespace app\Common\Utils;

/**
 * 输出接口的定义
 * Author: crg
 * Interface OutputInterface
 * @package Common\Utils
 */
interface OutputInterface
{
    /**
     * 输出的实现
     * Author: crg
     * @param ResponseInterface $response_obj
     * @param $method
     * @return mixed
     */
    public function out(\app\Common\Utils\ResponseInterface $response_obj);
}