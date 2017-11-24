<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016-2-24
 * Time: 10:30
 */

namespace app\home\controller;
use Think\Controller;

class Doc extends \think\Controller
{
    private $_apiYamlPath;//对外接口配置的路径
    private $_docPath;//生成文档的保存路径

    private $_docObj;//doc对象
    private $_configObj;//configuration对象

    private $_docData = array();//文档数据

    public function __construct($apiYamlPath = null, $docPath = null, $docObj = null, $configObj = null)
    {
       /*
        $this->_apiYamlPath = $apiYamlPath ?: config('YAML_PATH');
        $this->_docPath = $docPath ?: config('DOC_PATH');
        $this->_docObj = $docObj ?: new \app\Common\Utils\Document\DefaultImpl($this->_docPath);
        $this->_configObj = $configObj ?: new \app\Common\Utils\Config\DefaultImpl();
        */
       }

    //生成普通业务API文档：
    public function index()
    {
        header("Content-type: text/html; charset=utf-8");

        $this->_apiYamlPath =  config('YAML_PATH');
        $this->_docPath =  config('DOC_PATH');
        $this->_docObj =  new \app\Common\Utils\Document\DefaultImpl($this->_docPath,$scope=1);
        $this->_configObj =  new \app\Common\Utils\Config\DefaultImpl();

        $docData = $this->_getDocData();
        if (!empty($docData)) {
            $systemErrorMessage = $this->_getSystemErrorMessage(false);
            $this->_docObj->createDocument($docData, $systemErrorMessage, '易签云API说明文档');
        }
        echo '文档生成成功';
    }

    //生成银企对账项目API文档：
    public function yqdz()
    {
        header("Content-type: text/html; charset=utf-8");

        $this->_apiYamlPath =  config('YAML_PATH');
        $this->_docPath =  config('YQDZ_PATH');
        $this->_docObj =  new \app\Common\Utils\Document\DefaultImpl($this->_docPath,$scope=2);
        $this->_configObj =  new \app\Common\Utils\Config\DefaultImpl();

        $docData = $this->_getDocData();
        if (!empty($docData)) {
            $systemErrorMessage = $this->_getSystemErrorMessage(false);
            $this->_docObj->createDocument($docData, $systemErrorMessage, '易签云-银企对账项目API说明文档');
        }
        echo '文档生成成功';
    }


    /**
     * 获取系统级错误信息
     * @author ww
     * @return array|mixed|null code与message对应的数组
     */
    private function _getSystemErrorMessage()
    {
        $data = $this->_configObj->getCodeMsgConfig();
        ksort($data, SORT_STRING);
        return $data;
    }

    /**
     * 获取保存php配置文件解析数据的数组
     * @author ww
     * @return array
     */
    private function _getDocData()
    {
        $this->_apiYamlPath = $this->_apiYamlPath . 'Common/Logic/';//php文档存放的路径
        $this->_getDirList($this->_apiYamlPath, false);
        return $this->_docData;
    }

    /**
     * 递归目录，设置php或java配置对象的数组
     * @author ww
     * @param $dir  目录
     * @throws \Exception
     */
    private function _getDirList($dir)
    {
        if (is_dir($dir)) {
            if ($dir_handle = opendir($dir)) {
                while ($file = readdir($dir_handle)) {
                    if (is_dir($dir . $file) && $file != "." && $file != "..") {
                        $this->_getDirList($dir . $file . "/");
                    } else {
                        if ($file != "." && $file != "..") {
                            if (false !== strpos($file, '.yaml')) {
                                $this->_setDocData($dir, $file);
                            } else if (false !== strpos($file, '.params.yml')) {
                                $this->_setDocData($dir, $file);
                            }
                        }
                    }
                }
                closedir($dir_handle);
            }
        }
    }

    /**
     * 设置【保存php配置解析对象的数组】
     * @author ww
     * @param $dir
     * @param $file
     * @throws \Exception
     */
    private function _setDocData($dir, $file)
    {
        $className = $this->_getFileNamespace($dir, $file, false);
        $methodName = $this->_getFileApiMethodName($dir, $file, false);
        // 'errorReturn' => $data->errorReturn,
        // 'codeMessage' => $data->codeMessage,
        try {
            $data = $this->_configObj->getParamsAllConfigWithCheck($className);
            if (!is_null($data)) {
                $this->_docData[] = array(
                    'scope' => $data->scope,
                    'methodName' => $methodName,
                    'filePath' => $dir . $file,
                    'apiName' => $data->apiName,
                    'author' => $data->author,
                    'description' => $data->description,
                    'category' => $data->category,
                    'categoryPath' => $data->categoryPath,
                    'return' => $data->return,
                    'params' => $data->params
                );
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
            $file_path = $dir . $file;
            echo '解析配置文件出错！<br>';
            echo "错误信息：{$message}<br>";
            echo "文件位置：{$file_path}<br>";
            exit();
        }

    }

    /**
     * 获取类文件名称包含命名空间
     * @author ww
     * @param $dir  目录
     * @param $file 文件名
     * @return string
     */
    private function _getFileNamespace($dir, $file)
    {
        $filePath = mb_substr($dir . $file, mb_strlen($this->_apiYamlPath));
        $name = str_replace('/', '\\', $filePath);
        $nameArray = explode('.', $name);
        $namespace = ucfirst($nameArray[0]);
        return 'Common\\Logic\\' . $namespace;
    }

    /**
     * 获取配置文件对应的接口methodName
     * @author ww
     * @param $dir  配置文件目录
     * @param $file 配置文件名称
     * @return mixed|string
     */
    private function _getFileApiMethodName($dir, $file)
    {
        $pathPrefixLength = mb_strlen($this->_apiYamlPath . '');
        $filePath = mb_strtolower(mb_substr($dir . $file, $pathPrefixLength));
        $nameArray = explode('.', $filePath);
        $name = str_replace('/', '.', $nameArray[0]);
        $methodName = config('API_PREFIX');
        $methodName .= mb_substr($name, 0, -5);
        return $methodName;
    }
}