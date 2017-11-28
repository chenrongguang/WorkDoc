<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiBuyOfferGetBuyOfferByIdParam {

        
        /**
    * @return 询价单ID
    */
        public function getBuyOfferId() {
        $tempResult = $this->sdkStdResult["buyOfferId"];
        return $tempResult;
    }
    
    /**
     * 设置询价单ID     
     * @param Long $buyOfferId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyOfferId( $buyOfferId) {
        $this->sdkStdResult["buyOfferId"] = $buyOfferId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>