<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankImageUploadParam {

        
        /**
    * @return 相册ID
    */
        public function getAlbumId() {
        $tempResult = $this->sdkStdResult["albumId"];
        return $tempResult;
    }
    
    /**
     * 设置相册ID     
     * @param Long $albumId     
     * 参数示例：<pre>150962248</pre>     
     * 此参数必填     */
    public function setAlbumId( $albumId) {
        $this->sdkStdResult["albumId"] = $albumId;
    }
    
        
        /**
    * @return 图片名称。最长30个中文字符。不传默认为不修改。
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置图片名称。最长30个中文字符。不传默认为不修改。     
     * @param String $name     
     * 参数示例：<pre>image1</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 图片描述。最长2000个中文字符。不传默认为不修改。
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置图片描述。最长2000个中文字符。不传默认为不修改。     
     * @param String $description     
     * 参数示例：<pre>This is a nice picture.</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 是否打上默认水印
    */
        public function getDrawTxt() {
        $tempResult = $this->sdkStdResult["drawTxt"];
        return $tempResult;
    }
    
    /**
     * 设置是否打上默认水印     
     * @param Boolean $drawTxt     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setDrawTxt( $drawTxt) {
        $this->sdkStdResult["drawTxt"] = $drawTxt;
    }
    
        
        /**
    * @return 图片的二进制数据，向服务端提交文件即可 (二进制文件数组
PHP 的话，用 base64_encode 转换 
，JAVA 是 通过 IOUtils.toByteArray 转换)
    */
        public function getImageBytes() {
        $tempResult = $this->sdkStdResult["imageBytes"];
        return $tempResult;
    }
    
    /**
     * 设置图片的二进制数据，向服务端提交文件即可 (二进制文件数组
PHP 的话，用 base64_encode 转换 
，JAVA 是 通过 IOUtils.toByteArray 转换)     
     * @param array include @see Byte[] $imageBytes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageBytes( $imageBytes) {
        $this->sdkStdResult["imageBytes"] = $imageBytes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>