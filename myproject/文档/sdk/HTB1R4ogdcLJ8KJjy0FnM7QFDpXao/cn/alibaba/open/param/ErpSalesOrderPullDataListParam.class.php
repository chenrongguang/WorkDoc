<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpSalesOrderPullDataListParam {

        
        /**
    * @return 销售单编号列表，最大为100个
    */
        public function getSalesOrderIds() {
        $tempResult = $this->sdkStdResult["salesOrderIds"];
        return $tempResult;
    }
    
    /**
     * 设置销售单编号列表，最大为100个     
     * @param array include @see Long[] $salesOrderIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSalesOrderIds( $salesOrderIds) {
        $this->sdkStdResult["salesOrderIds"] = $salesOrderIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>