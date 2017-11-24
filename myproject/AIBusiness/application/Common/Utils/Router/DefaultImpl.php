<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 15:09
 */

namespace app\Common\Utils\Router;

use app\Common\Utils\RouterInterface;

/**
 * 路由接口的实现
 * Class DefaultImpl
 * Author: crg
 * @package Common\Utils\Router
 */
class DefaultImpl implements RouterInterface
{
    /**
     * 获取接口对应的类名
     * Author: crg
     * @param $method
     * @return string
     * @throws \Exception
     */
    public function getApiClassName($method)
    {
        $className = $this->_getApiClassNameByMethod($method);
        if (class_exists($className)) {
            return $className;
        } else {
            throw new \Exception('S0012',0012);
        }
    }

    /**
     * 获取接口类名的实现
     * @author crg
     * @param $method 接口名 如：user.get
     * @return string 对应的业务类名 如：\app\Common\Logic\Source\GetLogic
     * @throws \Exception 接口名称错误，抛异常
     */
    private function _getApiClassNameByMethod($method)
    {
        if (!empty($method) && false !== mb_strpos($method, '.')) {
            $methods_array = explode('.', $method);
           // $className = '\\app\Common\\Logic';
            $className = '\\app\Common\\Logic';
            foreach ($methods_array as $name) {
                $className .= '\\' . ucfirst(mb_strtolower($name));
            }
            $className .= 'Logic';
            return $className;
        } else {
            throw new \Exception('S0011',0011);
        }
    }

}