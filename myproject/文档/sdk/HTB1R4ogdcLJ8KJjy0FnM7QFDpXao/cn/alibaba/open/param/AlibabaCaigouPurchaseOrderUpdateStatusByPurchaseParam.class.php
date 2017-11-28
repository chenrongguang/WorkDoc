<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouPurchaseOrderUpdateStatusByPurchaseParam {

        
        /**
    * @return 采购单ID
    */
        public function getPurchaseOrderId() {
        $tempResult = $this->sdkStdResult["purchaseOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置采购单ID     
     * @param Long $purchaseOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchaseOrderId( $purchaseOrderId) {
        $this->sdkStdResult["purchaseOrderId"] = $purchaseOrderId;
    }
    
        
        /**
    * @return 是否通过
    */
        public function getIsApproved() {
        $tempResult = $this->sdkStdResult["isApproved"];
        return $tempResult;
    }
    
    /**
     * 设置是否通过     
     * @param Boolean $isApproved     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsApproved( $isApproved) {
        $this->sdkStdResult["isApproved"] = $isApproved;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>