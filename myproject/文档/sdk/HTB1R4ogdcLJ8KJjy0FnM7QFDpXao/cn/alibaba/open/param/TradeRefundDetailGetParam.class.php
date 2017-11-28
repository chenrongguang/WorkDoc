<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeRefundDetailGetParam {

        
        /**
    * @return 退款单ID
    */
        public function getRefundId() {
        $tempResult = $this->sdkStdResult["refundId"];
        return $tempResult;
    }
    
    /**
     * 设置退款单ID     
     * @param String $refundId     
     * 参数示例：<pre>TQ123</pre>     
     * 此参数必填     */
    public function setRefundId( $refundId) {
        $this->sdkStdResult["refundId"] = $refundId;
    }
    
        
        /**
    * @return 授权信息中的用户id
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置授权信息中的用户id     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>