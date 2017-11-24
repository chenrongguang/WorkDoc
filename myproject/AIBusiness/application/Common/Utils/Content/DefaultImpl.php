<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 14:10
 */

namespace app\Common\Utils\Content;

use app\Common\Utils\ContentInterface;

/**
 * 内容容器的实现
 * Class DefaultImpl
 * Author: crg
 * @package Common\Utils\Content
 */
class DefaultImpl implements ContentInterface
{
    private $_content_array = [];

    public function __construct()
    {
        $this->_setAll();
    }

    /**
     * 设置所有get请求存入内容容器
     * Author: crg
     */
    private function _setAll()
    {
        $request = \think\Request::instance();
        $req= $request->get();
        $this->_content_array = $req;
        //$this->_content_array = I('get.');

    }

    /**
     * 设置
     * Author: crg
     * @param $key
     * @param $value
     * @return mixed
     */
    public function set($key, $value)
    {
        $this->_content_array[$key] = $value;
    }

    /**
     * 获取所有内容
     * Author: crg
     * @return array
     */
    public function getAll()
    {
        return $this->_content_array;
    }

    /**
     * 获取指定key的内容
     * Author: crg
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        if (array_key_exists($key, $this->_content_array)) {
            return $this->_content_array[$key];
        } else {
            return null;
        }
    }
}