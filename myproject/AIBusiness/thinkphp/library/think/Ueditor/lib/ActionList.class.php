<?php

namespace Think\Ueditor\lib;

class ActionList{
    public $config;
    public $action;
    public $allowFiles;
    public $listSize;
    public $path;
    public function __construct($config){
        $this->config = $config;
        $this->action = I('get.action');
        switch ($this->action) {
            /* 列出文件 */
            case 'listfile':
                $this->allowFiles = $this->config['fileManagerAllowFiles'];
                $this->listSize = $this->config['fileManagerListSize'];
                $this->path = $this->config['fileManagerListPath'];
                break;
            /* 列出图片 */
            case 'listimage':

            default:
            $this->allowFiles = $this->config['imageManagerAllowFiles'];
            $this->listSize = $this->config['imageManagerListSize'];
            $this->path = $this->config['imageManagerListPath'];
        }
    }

    public function getList(){
        /* 判断类型 */
        $this->allowFiles = substr(str_replace(".", "|", join("", $this->allowFiles)), 1);
        /* 获取参数 */
        $size = isset($_GET['size']) ? htmlspecialchars($_GET['size']) : $this->listSize;
        $start = isset($_GET['start']) ? htmlspecialchars($_GET['start']) : 0;
        $end = $start + $size;
        /* 获取文件列表 */
        $this->path = $_SERVER['DOCUMENT_ROOT'] . (substr($this->path, 0, 1) == "/" ? "":"/") . $this->path;
        $files = $this->getfiles($this->path, $this->allowFiles);
        if (!count($files)) {
            return json_encode(array(
                "state" => "no match file",
                "list" => array(),
                "start" => $start,
                "total" => count($files)
            ));
        }

        /* 获取指定范围的列表 */
        $len = count($files);
        for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
            $list[] = $files[$i];
        }
        //倒序
        //for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
        //    $list[] = $files[$i];
        //}

        /* 返回数据 */
        $result = json_encode(array(
            "state" => "SUCCESS",
            "list" => $list,
            "start" => $start,
            "total" => count($files)
        ));
        return $result;
    }


    public  function getfiles($path, $allowFiles, &$files = array()){
        if (!is_dir($path)) return null;
        if(substr($path, strlen($path) - 1) != '/') $path .= '/';
        $handle = opendir($path);
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..') {
                $path2 = $path . $file;
                if (is_dir($path2)) {
                    $this->getfiles($path2, $allowFiles, $files);
                } else {
                    if (preg_match("/\.(".$allowFiles.")$/i", $file)) {
                        $files[] = array(
                            'url'=> substr($path2, strlen($_SERVER['DOCUMENT_ROOT'])),
                            'mtime'=> filemtime($path2)
                        );
                    }
                }
            }
        }
        return $files;
    }
}


