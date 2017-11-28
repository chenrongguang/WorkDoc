<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiSupplierQuerySupplierMappingParam {

        
        /**
    * @return 外部供应商的id List
    */
        public function getSupplierCodeList() {
        $tempResult = $this->sdkStdResult["supplierCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置外部供应商的id List     
     * @param List $supplierCodeList     
     * 参数示例：<pre>[798,588,544]</pre>     
     * 此参数必填     */
    public function setSupplierCodeList(array $supplierCodeList) {
        $this->sdkStdResult["supplierCodeList"] = $supplierCodeList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>