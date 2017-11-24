<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/14
 * Time: 9:11
 */

namespace app\Common\Utils\Response;

use app\Common\Utils\ResponseInterface;

class DefaultImpl implements ResponseInterface
{
    private $_code;
    private $_field;
    private $_data;

    /**
     * 获取code
     * Author: crg
     * @return mixed
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * 设置code
     * Author: crg
     * @param $code
     * @return mixed
     */
    public function setCode($code)
    {
        $this->_code = $code;
        return $this->_code;
    }

    /**
     * 获取字段
     * Author: crg
     * @return mixed
     */
    public function getField()
    {
        return $this->_field;
    }

    /**
     * 设置字段
     * Author: crg
     * @param $field
     * @return mixed
     */
    public function setField($field)
    {
        $this->_field = $field;
        return $this->_field;
    }

    /**
     * 获取数据
     * Author: crg
     * @return mixed
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * 设置数据
     * Author: crg
     * @param $data
     * @return mixed
     */
    public function setData($data)
    {
        $this->_data = $data;
        return $this->_data;
    }

}