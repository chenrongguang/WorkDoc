<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/14
 * Time: 9:10
 */

namespace app\Common\Utils\Message;

use app\Common\Utils\MessageInterface;

/**
 * 信息接口的实现
 * Class DefaultImpl
 * Author: crg
 * @package Common\Utils\Message
 */
class DefaultImpl implements MessageInterface
{
    private $_config_obj;

    /**
     * 构造
     * DefaultImpl constructor.
     * @param \app\Common\Utils\ConfigInterface|null $_config_obj
     */
    public function __construct(\app\Common\Utils\ConfigInterface $_config_obj = null)
    {
        $this->_config_obj = $_config_obj ?: new \app\Common\Utils\Config\DefaultImpl();
    }

    /**
     * 获取信息
     * Author: crg
     * @param null $code
     * @param null $field
     * @return bool|mixed|string
     */
    public function getMessage($code = null, $field = null)
    {
        if (is_null($code) || '' === $code) {
            return '非法错误码';
        }
        $msg_array = $this->_config_obj->getCodeMsgConfig();

        if(!array_key_exists((string)$code,$msg_array)){
            return '未定义错误信息文件';
        }

        $msg = $msg_array[(string)$code];
        if (empty($msg_array) || empty($msg)) {
            return '未定义错误信息文件';
        }
        if (empty($msg)) {
            return false;
        }
        if (!strpos($msg, '$1')) {
            return $msg;
        } else {
            if (!is_null($field) && '' !== $field) {
                return str_replace('$1', $field, $msg);
            } else {
                return $msg;
            }
        }
    }

}