<?php




namespace Think\Ueditor\lib;

class ActionCrawler{
    public $config;
    public $action;
    public $fieldName;
    public function __construct($config)
    {
        set_time_limit(0);
        $this->action = I('get.action');
        $this->config = array(
            "pathFormat" => $config['catcherPathFormat'],
            "maxSize" => $config['catcherMaxSize'],
            "allowFiles" => $config['catcherAllowFiles'],
            "oriName" => "remote.png"
        );
        $this->fieldName = $config['catcherFieldName'];
    }

    public function getCrawler(){

        /* 抓取远程图片 */
        $list = array();
        if (isset($_POST[$this->fieldName])) {
            $source = $_POST[$this->fieldName];
        } else {
            $source = $_GET[$this->fieldName];
        }
        foreach ($source as $imgUrl) {
            $item = new Uploader($imgUrl, $this->config, "remote");
            $info = $item->getFileInfo();
            array_push($list, array(
                "state" => $info["state"],
                "url" => $info["url"],
                "size" => $info["size"],
                "title" => htmlspecialchars($info["title"]),
                "original" => htmlspecialchars($info["original"]),
                "source" => htmlspecialchars($imgUrl)
            ));
        }
        return json_encode(array(
            'state'=> count($list) ? 'SUCCESS':'ERROR',
            'list'=> $list
        ));
    }
}




