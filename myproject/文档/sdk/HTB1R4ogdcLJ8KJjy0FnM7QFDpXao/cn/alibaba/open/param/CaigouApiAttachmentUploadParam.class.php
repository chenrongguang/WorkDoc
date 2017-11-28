<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAttachmentUploadParam {

        
        /**
    * @return 文件名。最大字符为64个英文和汉子字符或者21个汉字。超过部分会被强制截断.
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置文件名。最大字符为64个英文和汉子字符或者21个汉字。超过部分会被强制截断.     
     * @param String $name     
     * 参数示例：<pre>刚才详细说明.pdf</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 附件的二进制数据，向服务端提交文件即可 (fileBytes这个参数不能签名)。使用 enctype="multipart/form-data" 的POST文件上传方式提交数据
    */
        public function getFileBytes() {
        $tempResult = $this->sdkStdResult["fileBytes"];
        return $tempResult;
    }
    
    /**
     * 设置附件的二进制数据，向服务端提交文件即可 (fileBytes这个参数不能签名)。使用 enctype="multipart/form-data" 的POST文件上传方式提交数据     
     * @param array include @see Byte[] $fileBytes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFileBytes( $fileBytes) {
        $this->sdkStdResult["fileBytes"] = $fileBytes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>