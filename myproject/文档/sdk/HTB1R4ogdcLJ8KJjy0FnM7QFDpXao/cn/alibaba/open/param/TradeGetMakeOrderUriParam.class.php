<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeGetMakeOrderUriParam {

        
        /**
    * @return 
    */
        public function getParam() {
        $tempResult = $this->sdkStdResult["param"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Map $param     
     * 参数示例：<pre>{
    "offerId":"554500149513",
    "buyAmount":2,
    "specData":"[{\"specId\":\"34407a0af342f08bcb79c8012d80bd09\",\"amount\":1}]",
    "tracelog":"",
    "renderType":""
}</pre>     
     * 此参数必填     */
    public function setParam(array $param) {
        $this->sdkStdResult["param"] = $param;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>