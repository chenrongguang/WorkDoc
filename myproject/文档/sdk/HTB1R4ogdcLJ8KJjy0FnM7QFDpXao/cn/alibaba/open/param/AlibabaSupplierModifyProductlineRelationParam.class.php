<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSupplierModifyProductlineRelationParam {

        
        /**
    * @return 供应商产品Id列表
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置供应商产品Id列表     
     * @param array include @see Long[] $productIds     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setProductIds( $productIds) {
        $this->sdkStdResult["productIds"] = $productIds;
    }
    
        
        /**
    * @return 需要解除关系的产品线Id
    */
        public function getFromProductlineId() {
        $tempResult = $this->sdkStdResult["fromProductlineId"];
        return $tempResult;
    }
    
    /**
     * 设置需要解除关系的产品线Id     
     * @param Long $fromProductlineId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setFromProductlineId( $fromProductlineId) {
        $this->sdkStdResult["fromProductlineId"] = $fromProductlineId;
    }
    
        
        /**
    * @return 需要建立关系的产品线Id
    */
        public function getToProductlineId() {
        $tempResult = $this->sdkStdResult["toProductlineId"];
        return $tempResult;
    }
    
    /**
     * 设置需要建立关系的产品线Id     
     * @param Long $toProductlineId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setToProductlineId( $toProductlineId) {
        $this->sdkStdResult["toProductlineId"] = $toProductlineId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>