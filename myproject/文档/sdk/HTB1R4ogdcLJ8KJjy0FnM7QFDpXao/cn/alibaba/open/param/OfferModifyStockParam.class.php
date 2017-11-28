<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferModifyStockParam {

        
        /**
    * @return 产品编号
    */
        public function getOfferId() {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置产品编号     
     * @param Long $offerId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
        /**
    * @return 总库存改变量。如果offer是非sku的则填写这个参数，如果offer是sku的，则填写skuAmountChange
    */
        public function getOfferAmountChange() {
        $tempResult = $this->sdkStdResult["offerAmountChange"];
        return $tempResult;
    }
    
    /**
     * 设置总库存改变量。如果offer是非sku的则填写这个参数，如果offer是sku的，则填写skuAmountChange     
     * @param Integer $offerAmountChange     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setOfferAmountChange( $offerAmountChange) {
        $this->sdkStdResult["offerAmountChange"] = $offerAmountChange;
    }
    
        
        /**
    * @return Sku报价产品，指定规格的库存变量，注是所有规格改变量之和要等于offerAmountChange
如果产品没有sku，可以不用填。数据格式{"specId":"number"},key是sku信息中的specId，后者为库存变更量
    */
        public function getSkuAmountChange() {
        $tempResult = $this->sdkStdResult["skuAmountChange"];
        return $tempResult;
    }
    
    /**
     * 设置Sku报价产品，指定规格的库存变量，注是所有规格改变量之和要等于offerAmountChange
如果产品没有sku，可以不用填。数据格式{"specId":"number"},key是sku信息中的specId，后者为库存变更量     
     * @param Map $skuAmountChange     
     * 参数示例：<pre>{“cef93beef156f1799e736c649f36efae”:”10”,“82114cbd2c10b5e97b01af1510807e2d”:”-10”}</pre>     
     * 此参数必填     */
    public function setSkuAmountChange(array $skuAmountChange) {
        $this->sdkStdResult["skuAmountChange"] = $skuAmountChange;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>