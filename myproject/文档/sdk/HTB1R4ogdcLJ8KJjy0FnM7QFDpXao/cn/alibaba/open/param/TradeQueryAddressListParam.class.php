<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeQueryAddressListParam {

        
        /**
    * @return 
    */
        public function getQueryParam() {
        $tempResult = $this->sdkStdResult["queryParam"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param List $queryParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQueryParam(array $queryParam) {
        $this->sdkStdResult["queryParam"] = $queryParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>