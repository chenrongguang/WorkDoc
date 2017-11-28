<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiPurchaseDeletePurchaseItemsParam {

        
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 要删除的购物车货品的id列表
    */
        public function getPurchaseItemIds() {
        $tempResult = $this->sdkStdResult["purchaseItemIds"];
        return $tempResult;
    }
    
    /**
     * 设置要删除的购物车货品的id列表     
     * @param List $purchaseItemIds     
     * 参数示例：<pre>[144,234,555]</pre>     
     * 此参数必填     */
    public function setPurchaseItemIds(array $purchaseItemIds) {
        $this->sdkStdResult["purchaseItemIds"] = $purchaseItemIds;
    }
    
        
        /**
    * @return 接入商系统的采购需求单id
    */
        public function getPrId() {
        $tempResult = $this->sdkStdResult["prId"];
        return $tempResult;
    }
    
    /**
     * 设置接入商系统的采购需求单id     
     * @param String $prId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrId( $prId) {
        $this->sdkStdResult["prId"] = $prId;
    }
    
        
        /**
    * @return 订单来源
    */
        public function getOrderSource() {
        $tempResult = $this->sdkStdResult["orderSource"];
        return $tempResult;
    }
    
    /**
     * 设置订单来源     
     * @param String $orderSource     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderSource( $orderSource) {
        $this->sdkStdResult["orderSource"] = $orderSource;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>