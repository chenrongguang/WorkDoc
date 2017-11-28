<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorIgnoreSupplyOrderParam {

        
        /**
    * @return 采购单列表
    */
        public function getSupplyOrders() {
        $tempResult = $this->sdkStdResult["supplyOrders"];
        return $tempResult;
    }
    
    /**
     * 设置采购单列表     
     * @param array include @see Long[] $supplyOrders     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyOrders( $supplyOrders) {
        $this->sdkStdResult["supplyOrders"] = $supplyOrders;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>