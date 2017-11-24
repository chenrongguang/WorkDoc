<?php
/**
 * Created by PhpStorm.
 * User: crg
 * Date: 2016/9/22
 * Time: 10:50
 */

namespace app\Common\Utils\Demo;

use app\Common\Utils\DemoInterface;

/**
 * 示例接口的实现
 * Class DefaultImpl
 * User: crg
 * @package Common\Utils\Demo
 */
class DefaultImpl implements DemoInterface
{
    /**
     * 根据yaml解析的对象获取示例值
     * User: crg
     * @param $obj
     * @return \stdClass
     */
    public function getDataByYamlObj($obj)
    {
        $data = $this->_getObjectData($obj);
        return $data;
    }

    /**
     * 获取对象示例数据
     * User: crg
     * @param $obj
     * @return \stdClass
     */
    private function _getObjectData($obj)
    {
        $new_obj = new \stdClass();
        foreach ($obj as $fileName => $attr) {
            $demoValue = is_array($attr->demo) ? $attr->demo[0] : $attr->demo;
            switch ($attr->type) {
                case null:
                    $new_obj->$fileName = null;
                    break;
                case 'float':
                    $new_obj->$fileName = number_format($demoValue, 2, '.', '');
                    break;
                case 'int':
                    $new_obj->$fileName = (int)$demoValue;
                    break;
                case 'bool':
                    $new_obj->$fileName = $demoValue;
                    break;
                case 'string':
                    $new_obj->$fileName = (string)$demoValue;
                    break;
                case 'object':
                    $new_obj->$fileName = $this->_getObjectData($attr->subs);
                    break;
                case 'array':
                    $new_obj->$fileName = $this->_getArrayData($attr->subs);
                    break;
            }
        }
        return $new_obj;
    }

    /**
     * 获取数组示例数据
     * User: crg
     * @param array $array
     * @return array
     */
    private function _getArrayData($array = [])
    {
        $new_array = [];
        if (!empty($array)) {
            foreach ($array[0] as $key => $object) {
                $this->_demoArray[] = count($object->demo);
            }
            $max = max($this->_demoArray);
            $max = $max >= 2 ? $max : 2;
            $this->_demoArray = array();//本级结束直接清空
            for ($i = 0; $i < $max; $i++) {
                $new_array[] = $this->_getArrayForDemo($array[0], $i);
            }
        }
        return $new_array;
    }

    /**
     * 只获取数组的示例
     * User: crg
     * @param $obj
     * @param $i
     * @return array
     */
    private function _getArrayForDemo($obj, $i)
    {
        $new_array = [];
        foreach ($obj as $fileName => $attr) {
            $demoValue = is_array($attr->demo) ? $attr->demo[$i] : $attr->demo;
            switch ($attr->type) {
                case null:
                    $new_array[$fileName] = null;
                    break;
                case 'float':
                    $new_array[$fileName] = number_format($demoValue, 2, '.', '');
                    break;
                case 'int':
                    $new_array[$fileName] = (int)$demoValue;
                    break;
                case 'bool':
                    $new_array[$fileName] = $demoValue ? true : false;
                    break;
                case 'string':
                    $new_array[$fileName] = (string)$demoValue;
                    break;
                case 'object':
                    $new_array[$fileName] = $this->_getObjectData($attr->subs);
                    break;
                case 'array':
                    $new_array[$fileName] = $this->_getArrayData($attr->subs);
                    break;
            }
        }
        return $new_array;
    }
}