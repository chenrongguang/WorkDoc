<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiImageUploadParam {

        
        /**
    * @return 图片名称，最长30个字符,如果超长则截取前30个字符.
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置图片名称，最长30个字符,如果超长则截取前30个字符.     
     * @param String $name     
     * 参数示例：<pre>alibaba.png</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 图片的二进制数据，向服务端提交文件即可 (fileBytes这个参数不能签名)。使用 enctype="multipart/form-data" 的POST文件上传方式提交数据，最大只支持5M的文件图片
    */
        public function getFileBytes() {
        $tempResult = $this->sdkStdResult["fileBytes"];
        return $tempResult;
    }
    
    /**
     * 设置图片的二进制数据，向服务端提交文件即可 (fileBytes这个参数不能签名)。使用 enctype="multipart/form-data" 的POST文件上传方式提交数据，最大只支持5M的文件图片     
     * @param array include @see Byte[] $fileBytes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFileBytes( $fileBytes) {
        $this->sdkStdResult["fileBytes"] = $fileBytes;
    }
    
        
        /**
    * @return 图片描述，最长2000个字符,如果超长则截取前2000个字符
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置图片描述，最长2000个字符,如果超长则截取前2000个字符     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>