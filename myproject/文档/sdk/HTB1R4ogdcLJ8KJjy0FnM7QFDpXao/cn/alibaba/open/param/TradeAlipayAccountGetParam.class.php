<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeAlipayAccountGetParam {

        
        /**
    * @return 
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
        /**
    * @return 
    */
        public function getAlipayId() {
        $tempResult = $this->sdkStdResult["alipayId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $alipayId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayId( $alipayId) {
        $this->sdkStdResult["alipayId"] = $alipayId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>