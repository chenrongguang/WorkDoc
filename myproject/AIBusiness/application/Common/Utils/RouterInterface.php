<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 15:07
 */

namespace app\Common\Utils;

/**
 * 路由接口的定义
 * Author: crg
 * Interface RouterInterface
 * @package Common\Utils
 */
interface RouterInterface
{
    /**
     * 获取接口对应的类名
     * Author: crg
     * @param $method
     * @return mixed
     */
    public function getApiClassName($method);
}