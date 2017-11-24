<?php
/**
 * Created by PhpStorm.
 * Author: crg
 * Date: 2016/9/13
 * Time: 15:48
 */

namespace app\Common\Utils\Config;

use app\Common\Utils\ConfigInterface;

//use Symfony\Component\Yaml\Parser;

/**
 * 配置接口的实现
 * Class DefaultImpl
 * Author: crg
 * @package Common\Utils\Config
 */
class DefaultImpl implements ConfigInterface
{
    private $_parser_obj;

    public function __construct(\tools\yaml\Yaml $_parser_obj = null)
    {
        $this->_parser_obj = $_parser_obj ?: new \tools\yaml\Yaml ();
        // $this->_parser_obj = $_parser_obj ?: new \Symfony\Component\Yaml\Parser();
        // $this->_parser_obj = $_parser_obj ?: new Parser();
    }

    /**
     * 获取对应码配置
     * Author: crg
     * @return array|mixed|null
     */
    public function getCodeMsgConfig()
    {
        $className = 'Common/App/code_msg';
        $fileConfigPath = config('YAML_PATH') . $className . '.yaml';
        return $this->_parser_obj->parse(file_get_contents($fileConfigPath));
    }

    /**
     * 根据文件路径解析yaml配置
     * Author: crg
     * @param $filePath
     * @return array|mixed|null
     */
    public function getConfigWithFilePath($filePath)
    {
        if (file_exists($filePath)) {
            $data = $this->_parser_obj->parse(file_get_contents($filePath), false, false, true);
            return $data;
        } else {
            return null;
        }
    }

    /**
     * 获取配置-参数部分
     * Author: crg
     * @param $className
     * @return null
     */
    public function getParamsConfig($className)
    {
        $data = $this->getParamsAllConfig($className);
        $params = isset($data->params) ? $data->params : null;
        return $params;
    }

    /**
     * 获取配置-全部
     * Author: crg
     * @param $className
     * @return mixed
     * @throws \Exception
     */
    public function getParamsAllConfig($className)
    {
        $className = $this->_makeFilePath($className);
        //$fileConfigPath = config('YAML_PATH') . $className . '.yaml';
        $fileConfigPath = config('YAML_PATH') . $className . '.yaml';
        $fileConfigPath= str_replace('/app/','/',$fileConfigPath);
        if (file_exists($fileConfigPath)) {
            $data = $this->_parser_obj->parse(file_get_contents($fileConfigPath), false, false, true);
            return $data;
        } else {
            throw new \Exception("S0021", 0021);
        }
    }

    /**
     * 获取配置-并检验是否有apiName属性
     * Author: crg
     * @param $className
     * @return mixed
     * @throws \Exception
     */
    public function getParamsAllConfigWithCheck($className)
    {
        $data = $this->getParamsAllConfig($className);
        if (!empty($data) && !isset($data->apiName)) {
            throw new \Exception("S0022", 22);
        }
        if (!is_null($data->return) && !is_object($data->return)) {
            throw new \Exception("S0023", 23);
        }
        return $data;
    }

    /**
     * 处理字符
     * Author: crg
     * @param $className
     * @return mixed
     */
    private function _makeFilePath($className)
    {
        return str_replace('//', '/', str_replace('\\', '/', $className));
    }

}