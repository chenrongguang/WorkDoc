<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/14
 * Time: 9:01
 */

namespace app\Common\Utils;

/**
 * 信息接口的定义
 * Author: crg
 * Interface MessageInterface
 * @package Common\Utils
 */
interface MessageInterface
{
    /**
     * 获取信息
     * Author: crg
     * @param null $code
     * @param null $field
     * @return mixed
     */
    public function getMessage($code = null, $field = null);
}