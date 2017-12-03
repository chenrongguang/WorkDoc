<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberGetUserInfoParam {

        
        /**
    * @return 
    */
        public function getDomin() {
        $tempResult = $this->sdkStdResult["domin"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $domin     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDomin( $domin) {
        $this->sdkStdResult["domin"] = $domin;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>