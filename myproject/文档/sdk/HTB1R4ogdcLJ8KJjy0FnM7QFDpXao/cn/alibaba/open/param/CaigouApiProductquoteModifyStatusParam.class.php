<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductquoteModifyStatusParam {

        
        /**
    * @return 报价在1688平台的Id
    */
        public function getQuoteId() {
        $tempResult = $this->sdkStdResult["quoteId"];
        return $tempResult;
    }
    
    /**
     * 设置报价在1688平台的Id     
     * @param Long $quoteId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuoteId( $quoteId) {
        $this->sdkStdResult["quoteId"] = $quoteId;
    }
    
        
        /**
    * @return 报价状态，上架状态：published、下架状态：unpublished
    */
        public function getQuoteStatus() {
        $tempResult = $this->sdkStdResult["quoteStatus"];
        return $tempResult;
    }
    
    /**
     * 设置报价状态，上架状态：published、下架状态：unpublished     
     * @param String $quoteStatus     
     * 参数示例：<pre>published</pre>     
     * 此参数必填     */
    public function setQuoteStatus( $quoteStatus) {
        $this->sdkStdResult["quoteStatus"] = $quoteStatus;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>