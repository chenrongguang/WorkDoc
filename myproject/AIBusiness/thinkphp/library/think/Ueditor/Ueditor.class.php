<?php
/**
 * Created by PhpStorm.
 * User: 宝龙
 * Date: 2015/9/17
 * Time: 22:11
 */
namespace Think\Ueditor;
use Think\Ueditor\lib\ActionUpload;
use Think\Ueditor\lib\ActionList;
use Think\Ueditor\lib\ActionCrawler;

class Ueditor {
    public $config;
    public $action;
    public function __construct($uid){
        date_default_timezone_set("Asia/chongqing");
        error_reporting(E_ERROR);
        header("Content-Type: text/html; charset=utf-8");

        $path = "/".C('ATTR_ALLOW_PATH')."editer/$uid";
        $this->config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents( CORE_PATH . 'Ueditor/lib/config.json' )), true);
        $this->config['imageManagerListPath'] = $path."/image/";/* 指定要列出图片的目录 */
        $this->config['fileManagerListPath'] = $path."/file/"; /* 指定要列出文件的目录 */
        $this->config['imagePathFormat'] = $path."/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $this->config['scrawlPathFormat'] = $path."/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $this->config['snapscreenPathFormat'] = $path."/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $this->config['catcherPathFormat'] = $path."/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $this->config['videoPathFormat'] = $path."/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $this->config['filePathFormat'] = $path."/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */


        $this->action = I('get.action');
    }
    public function init(){
        $action = '__'.$this->action;
        if (method_exists($this, $action)) {
            $this->$action();
        }else{
            $this->__default();
        }
    }
    public function __config(){
        $result =  json_encode($this->config);
        self::_return($result);
    }
    /* 上传图片 */
    public function __uploadimage(){
        $result = new ActionUpload($this->config);
        self::_return($result->upload());
    }
    /* 上传涂鸦 */
    public function __uploadscrawl(){
        $result = new ActionUpload($this->config);
        self::_return($result->upload());
    }

    /* 上传视频 */
    public function __uploadvideo(){
        $result = new ActionUpload($this->config);
        self::_return($result->upload());
    }

    /* 上传文件 */
    public function __uploadfile(){
        $result = new ActionUpload($this->config);
        self::_return($result->upload());
    }
    /* 列出图片 */
    public function __listimage(){
        $list = new ActionList($this->config);
        $result = $list->getList();
        self::_return($result);
    }
    /* 列出文件 */
    public function __listfile(){
        $list = new ActionList($this->config);
        $result = $list->getList();
        self::_return($result);
    }
    /* 抓取远程文件 */
    public function __catchimage(){
        $Crawler = new ActionCrawler($this->config);
        $result = $Crawler->getCrawler();
        self::_return($result);
    }
    /* 默认输出 */
    public function __default(){
        $result = json_encode(array(
            'state'=> '请求地址出错'
        ));
        self::_return($result);
    }


    public static function _return($result){
        /* 输出结果 */
        $callback = I('get.callback');
        if (!empty($callback)) {
            if (preg_match("/^[\w_]+$/", $callback)) {
                echo htmlspecialchars($callback) . '(' . $result . ')';
            } else {
                echo json_encode(array(
                    'state'=> 'callback参数不合法'
                ));
            }
        } else {
            echo $result;
        }
    }
}