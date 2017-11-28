<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PrivateGetAuthInfoParam {

        
        /**
    * @return 卖家会员ID
    */
        public function getSellerMemberId() {
        $tempResult = $this->sdkStdResult["sellerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家会员ID     
     * @param String $sellerMemberId     
     * 参数示例：<pre>testSeller</pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sdkStdResult["sellerMemberId"] = $sellerMemberId;
    }
    
        
        /**
    * @return 买家会员ID
    */
        public function getBuyerMemberId() {
        $tempResult = $this->sdkStdResult["buyerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置买家会员ID     
     * @param String $buyerMemberId     
     * 参数示例：<pre>testBuyer</pre>     
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