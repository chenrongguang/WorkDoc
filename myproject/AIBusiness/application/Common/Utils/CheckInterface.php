<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 14:57
 */

namespace app\Common\Utils;

/**
 * 校验接口的定义
 * Author: crg
 * Interface CheckInterface
 * @package Common\Utils
 */
interface CheckInterface
{
    /**
     * 参数校验
     * Author: crg
     * @param $className
     * @param $request
     * @return mixed
     */
    public function checkParams($className, $request);
}