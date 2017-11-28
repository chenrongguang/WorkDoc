<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouPurchaseOrderUpdateStatusByOrderParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 审核未通过的子订单ID
    */
        public function getNoPassEntryIds() {
        $tempResult = $this->sdkStdResult["noPassEntryIds"];
        return $tempResult;
    }
    
    /**
     * 设置审核未通过的子订单ID     
     * @param List $noPassEntryIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNoPassEntryIds(array $noPassEntryIds) {
        $this->sdkStdResult["noPassEntryIds"] = $noPassEntryIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>