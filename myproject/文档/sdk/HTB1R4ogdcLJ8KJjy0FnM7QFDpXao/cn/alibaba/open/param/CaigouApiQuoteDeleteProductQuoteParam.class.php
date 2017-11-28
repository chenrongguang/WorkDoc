<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiQuoteDeleteProductQuoteParam {

        
        /**
    * @return 产品报价id
    */
        public function getQuoteId() {
        $tempResult = $this->sdkStdResult["quoteId"];
        return $tempResult;
    }
    
    /**
     * 设置产品报价id     
     * @param Long $quoteId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuoteId( $quoteId) {
        $this->sdkStdResult["quoteId"] = $quoteId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>