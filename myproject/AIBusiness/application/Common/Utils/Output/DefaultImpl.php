<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/14
 * Time: 13:11
 */

namespace app\Common\Utils\Output;

use app\Common\Utils\OutputInterface;

/**
 * 输出接口的实现
 * Class DefaultImpl
 * Author: crg
 * @package Common\Utils\Output
 */
class DefaultImpl implements OutputInterface
{
    private $_message_obj;

    /**
     * 构造
     * DefaultImpl constructor.
     * @param \app\Common\Utils\Message\DefaultImpl|null $_message_obj
     */
    public function __construct(\app\Common\Utils\Message\DefaultImpl $_message_obj = null)
    {
        $this->_message_obj = $_message_obj ?: new \app\Common\Utils\Message\DefaultImpl();
    }

    /**
     * 输出
     * Author: crg
     * @param \app\Common\Utils\ResponseInterface $response_obj
     * @return array|null
     */
    public function out(\app\Common\Utils\ResponseInterface $response_obj)
    {
        $result = null;
        $code = $response_obj->getCode();
        $field = $response_obj->getField();
        $data = $response_obj->getData();
        if (null === $code) {
            $result = $this->_createReturnData('S9999');
        } else {
            $result = $this->_createReturnData($code, $field, $data);
        }
        return $result;
    }

    /**
     * 创建返回数据
     * Author: crg
     * @param $code
     * @param null $field
     * @param null $data
     * @return array
     */
    private function _createReturnData($code, $field = null, $data = null)
    {
        $return = [];
        $message = $this->_message_obj->getMessage($code, $field);
        if (false === $message) {
            $return['code'] = 'S9998';
            $return['message'] = $this->_message_obj->getMessage($return['code'], $field);
        } else {
            $return['code'] = $code;
            $return['message'] = $message;
        }
        if ((0 === $code || '0' === $code)&&!is_null($data)) {
            $return['data'] = $data;
        }
        return $return;
    }

}