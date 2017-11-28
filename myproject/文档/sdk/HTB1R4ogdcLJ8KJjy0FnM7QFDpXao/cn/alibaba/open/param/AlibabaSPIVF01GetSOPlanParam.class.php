<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSPIVF01GetSOPlanParam {

        
        /**
    * @return 
    */
        public function getSalesOrder() {
        $tempResult = $this->sdkStdResult["salesOrder"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $salesOrder     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSalesOrder( $salesOrder) {
        $this->sdkStdResult["salesOrder"] = $salesOrder;
    }
    
        
        /**
    * @return 
    */
        public function getCustomerID() {
        $tempResult = $this->sdkStdResult["customerID"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $customerID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCustomerID( $customerID) {
        $this->sdkStdResult["customerID"] = $customerID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>