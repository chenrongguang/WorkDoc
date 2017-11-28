<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankImageModifyParam {

        
        /**
    * @return 图片ID
    */
        public function getImageId() {
        $tempResult = $this->sdkStdResult["imageId"];
        return $tempResult;
    }
    
    /**
     * 设置图片ID     
     * @param Long $imageId     
     * 参数示例：<pre>150962248</pre>     
     * 此参数必填     */
    public function setImageId( $imageId) {
        $this->sdkStdResult["imageId"] = $imageId;
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
     * 参数示例：<pre>image2</pre>     
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