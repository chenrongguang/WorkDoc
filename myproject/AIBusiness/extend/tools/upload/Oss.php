<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 * 上传类
 * 这一部分业务，以后在有可能的情况下，扔到oss里边去执行
 */

namespace tools\upload;
require_once 'aliyun-oss-php-sdk/autoload.php';
use OSS\OssClient;
use OSS\Core\OssException;

class Oss
{
    private $ossClient;
    private $bucket;
    public function __construct()
    {
        $accessKeyId =  config('UPLOAD_CONFIG.accesskeyid');
        $accessKeySecret = config('UPLOAD_CONFIG.accesskeysecret');
        $endpoint = config('UPLOAD_CONFIG.endpoint');
        $this->bucket=config('UPLOAD_CONFIG.bucket');
        $this->ossClient= new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        return $this->ossClient;
    }

    //失败返回false
    public  function upload($content,$object,$i=0){
        try {
            //测试
            //$object="8888.txt";
            //$content="hello,你们好,大家好，才是真的好啊,大哥啊";
            //$content= file_get_contents("aliyun-oss-php-sdk/test.pdf");
            $k=$i;
            $this->ossClient->putObject($this->bucket, $object, $content);
            unset($content);
            return true;
        } catch (OssException $e) {
            //失败5次之后，不再尝试了
            if($k<5){
                $k++;
               return $this->upload($content,$object,$k);
            }
            else{
                try{
                    \think\Log::write("上传oss失败:5次-".$e->getMessage());
                } catch(\think\Exception $e){

                }

                return false;
            }
        }
    }

    //失败返回false
    public  function download($object,$i=0){
        try {
            $k=$i;
            $content=$this->ossClient->getObject($this->bucket, $object);
            return $content;
        } catch (OssException $e) {
            //失败5次之后，不再尝试了
            if($k<5){
                $k++;
                return $this->download($object,$k);
            }
            else{
                try{
                    \think\Log::write("下载oss失败:5次-".$e->getMessage());
                } catch(\think\Exception $e){

                }
                return false;
            }
        }
    }
}