<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankImageDeleteByIdsParam {

        
        /**
    * @return 图片ID序列，以半角分号”;”分隔。每次最多支持删除20张图片。
    */
        public function getImageIds() {
        $tempResult = $this->sdkStdResult["imageIds"];
        return $tempResult;
    }
    
    /**
     * 设置图片ID序列，以半角分号”;”分隔。每次最多支持删除20张图片。     
     * @param String $imageIds     
     * 参数示例：<pre>151102004;151102001;151102000</pre>     
     * 此参数必填     */
    public function setImageIds( $imageIds) {
        $this->sdkStdResult["imageIds"] = $imageIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>