<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ProductAttributesGetParam {

        
        /**
    * @return 叶子类目ID
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置叶子类目ID     
     * @param Long $categoryID     
     * 参数示例：<pre>1033199</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        public function getTimeStamp() {
        $tempResult = $this->sdkStdResult["timeStamp"];
        return $tempResult;
    }
    
    /**
          
     * @param String $timeStamp     
          
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->sdkStdResult["timeStamp"] = $timeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>