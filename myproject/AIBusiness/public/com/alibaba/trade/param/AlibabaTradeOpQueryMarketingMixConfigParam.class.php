<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeOpQueryMarketingMixConfigParam {

        
        /**
    * @return 卖家memberId
    */
        public function getSellerMemberId() {
        $tempResult = $this->sdkStdResult["sellerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家memberId     
     * @param String $sellerMemberId     
     * 参数示例：<pre>可通过会员API查询</pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sdkStdResult["sellerMemberId"] = $sellerMemberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>