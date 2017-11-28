<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankProfileGetParam {

        
        /**
    * @return 
    */
        public function getUnused() {
        $tempResult = $this->sdkStdResult["unused"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $unused     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnused( $unused) {
        $this->sdkStdResult["unused"] = $unused;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>