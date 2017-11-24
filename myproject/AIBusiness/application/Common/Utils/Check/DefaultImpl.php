<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 15:04
 */

namespace app\Common\Utils\Check;

use app\Common\Utils\CheckInterface;

/**
 * 校验接口的实现
 * Class DefaultImpl
 * Author: crg
 * @package Common\Utils\Check
 */
class DefaultImpl implements CheckInterface
{
    private $_config_obj;

    public function __construct(\app\Common\Utils\ConfigInterface $_config_obj = null)
    {
        $this->_config_obj = $_config_obj ?: new \app\Common\Utils\Config\DefaultImpl();
    }

    /**
     * 校验参数
     * Author: crg
     * @param $className
     * @param $request
     * @return array
     * @throws \Exception
     */
    public function checkParams($className, $request)
    {
        try {
            $params = $this->_config_obj->getParamsConfig($className);
            if (empty($params)) {
                return $this->_success();
            }
            $res = $this->_checkParams($params, $request);
            return $res;
        } catch (\Exception $e) {
            throw new \Exception("Y0112", 112);
        }
    }

    /**
     * 校验参数开始判断入口方法
     * @param $params 配置的规则
     * @param $request 需要校验的参数
     * @return array 返回的数组 包括code和field
     */
    private function _checkParams($params, $request)
    {
        if (is_array($params)) {
            $res = $this->_ParamsIsArr($params, $request);
            if ($res['code'] !== 0) {
                return $res;
            }
        } else if (is_object($params)) {
            $res = $this->_ParamsIsObj($params, $request);
            if ($res['code'] !== 0) {
                return $res;
            }
        } else {
            return $this->_fail("Y0114");//114为param写入错误
        }
        return $this->_success();
    }

    /**
     * 校验参数如果是数组的情况
     * @param $params 配置的规则
     * @param $request 需要校验的参数
     * @return array 返回的数组 包括code和field
     */
    private function _ParamsIsArr($params, $request)
    {
        //如果是空数组 返回code115
        if (empty($request)) {
            //return $this->_fail("Y0115");
        }
        foreach ($request as $key => $val) {
            //如果不是对象 返回code113
            if (!is_object($val)) {
                //   return $this->_fail("Y0113");
            }
            $res = $this->_ParamsIsObj($params[0], $val);
            if ($res['code'] !== 0) {
                return $res;
            }
        }
        return $this->_success();
    }

    /**
     * 校验参数如果是对象的情况
     * @param $params 配置的规则
     * @param $request 需要校验的参数
     * @return array 返回的数组 包括code和field
     */
    private function _ParamsIsObj($params, $request)
    {
        //如果是空数对象 返回code116
        if (empty(get_object_vars($request))) {
            //return $this->_fail("Y0116");
        }
        foreach ($params as $key => $val) {
            //判断如果属性是数组或者对象 则进行校验
            if ($val->type == "array" || $val->type == "object") {

                //如果不要求必填，并且用户没有填的时候，不校验，直接返回成功-2017-01-04 by crg
                if (!(property_exists($val, 'require') && $val->require)) {
                    if (!isset($request->$key) || empty($request->$key)) {
                        continue; //测试不校验
                    }
                }

                if ($val->type == "array") {
                    //如果不是数组
                    if (!is_array($request->$key)) {
                        //return $this->_fail("Y0111", $key);
                    }
                    //如果是空数组 返回code115
                    if (empty($request->$key)) {
                        //return $this->_fail("Y0115", $key);
                    }

                }

                if ($val->type == "object") {
                    //如果不是对象
                    if (!is_object($request->$key)) {
                        //return $this->_fail("Y0118", $key);
                    }
                    //如果是空对象 返回code117
                    if (empty(get_object_vars($request->$key))) {
                        //return $this->_fail("Y0117", $key);
                    }

                }
                $res = $this->_checkParams($val->subs, $request->$key);
                if ($res['code'] !== 0) {
                    return $res;
                }
            }
            //判断如果是必填项 但是内容为空 报错100
            if (property_exists($val, 'require') && $val->require) {
                if (property_exists($request, $key) == false || $request->$key === '' || is_null($request->$key)) {
                    return $this->_fail("Y0100", $key);
                    break;
                }
            }

            //判断如果属性是int 校验值不是int型报错101 小于最小值报错102 大于最大值报错103
            if ($val->type == "int") {
                if ((isset($request->$key) && $request->$key !== '')) {
                    if (!is_int($request->$key)) {
                        return $this->_fail("Y0101", $key);
                    }
                    if (isset($val->min)) {
                        if ($request->$key < $val->min) {
                            return $this->_fail("Y0102", $key);
                        }
                    }
                    if (isset($val->max)) {
                        if ($request->$key > $val->max) {
                            return $this->_fail("Y0103", $key);
                        }
                    }
                }
            } //判断如果属性是float 校验值不是float型报错104 小于最小值报错105 大于最大值报错106
            else if ($val->type == "float") {
                if ((isset($request->$key) && $request->$key !== '')) {
                    if (!is_float($request->$key) && !is_int($request->$key)) {
                        return $this->_fail("Y0104", $key);
                    }
                    if (isset($val->min)) {
                        if ($request->$key < $val->min) {
                            return $this->_fail("Y0105", $key);
                        }
                    }
                    if (isset($val->max)) {
                        if ($request->$key > $val->max) {
                            return $this->_fail("Y0106", $key);
                        }
                    }
                }
            } //判断如果属性是string 校验值不是string型报错107 小于最小值报错108 大于最大值报错109
            else if ($val->type == "string") {
                if ((isset($request->$key) && $request->$key !== '')) {
                    if (!is_string($request->$key)) {
                        return $this->_fail("Y0107", $key);
                    }
                    if (isset($val->min)) {
                        if (mb_strlen($request->$key, "utf-8") < $val->min) {
                            return $this->_fail("Y0108", $key);
                        }
                    }
                    if (isset($val->max)) {
                        if (mb_strlen($request->$key, "utf-8") > $val->max) {
                            return $this->_fail("Y0109", $key);
                        }
                    }
                }
            }

        }
        return $this->_success();
    }

    /**
     * 校验参数一个阶段成功的情况
     * @return array 返回的数组 包括code和field
     */
    private function _success()
    {
        $returnArr['code'] = 0;
        $returnArr['field'] = null;
        return $returnArr;
    }

    /**
     * 校验参数一个阶段失败的情况
     * @param $code 错误编码
     * @param $field 错误参数
     * @return array 返回的数组 包括code和field
     */
    private function _fail($code, $field = null)
    {
        $returnArr['code'] = $code;
        $returnArr['field'] = $field;
        return $returnArr;
    }

}