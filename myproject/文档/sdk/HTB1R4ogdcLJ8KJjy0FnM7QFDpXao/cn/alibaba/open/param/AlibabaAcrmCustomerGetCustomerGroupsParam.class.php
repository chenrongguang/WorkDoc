<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAcrmCustomerGetCustomerGroupsParam {

        
        /**
    * @return 买家的memberId
    */
        public function getBuyerMemberId() {
        $tempResult = $this->sdkStdResult["buyerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置买家的memberId     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->sdkStdResult["buyerMemberId"] = $buyerMemberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>