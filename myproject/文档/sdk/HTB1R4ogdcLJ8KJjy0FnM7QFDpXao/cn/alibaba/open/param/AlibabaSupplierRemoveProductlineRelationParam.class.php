<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSupplierRemoveProductlineRelationParam {

        
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
        public function getProductlineId() {
        $tempResult = $this->sdkStdResult["productlineId"];
        return $tempResult;
    }
    
    /**
     * 设置需要解除关系的产品线Id     
     * @param Long $productlineId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setProductlineId( $productlineId) {
        $this->sdkStdResult["productlineId"] = $productlineId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>