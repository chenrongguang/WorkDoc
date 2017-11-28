<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankImageGetParam {

        
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
     * 参数示例：<pre>150012000</pre>     
     * 此参数必填     */
    public function setImageId( $imageId) {
        $this->sdkStdResult["imageId"] = $imageId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>