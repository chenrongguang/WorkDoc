<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigoumallPurchaseitemAddParam {

        
        /**
    * @return 操作员在1688上的子帐号ID，如果接入商有子账号，通过子账号来下单的，则这个参数必传；不传则系统会自动取主账号的userId作为默认值
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置操作员在1688上的子帐号ID，如果接入商有子账号，通过子账号来下单的，则这个参数必传；不传则系统会自动取主账号的userId作为默认值     
     * @param Long $subUserId     
     * 参数示例：<pre>12324343</pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
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
     * 参数示例：<pre>123432</pre>     
     * 此参数必填     */
    public function setQuoteId( $quoteId) {
        $this->sdkStdResult["quoteId"] = $quoteId;
    }
    
        
        /**
    * @return 报价数量
    */
        public function getAmount() {
        $tempResult = $this->sdkStdResult["amount"];
        return $tempResult;
    }
    
    /**
     * 设置报价数量     
     * @param Integer $amount     
     * 参数示例：<pre>12</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->sdkStdResult["amount"] = $amount;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>