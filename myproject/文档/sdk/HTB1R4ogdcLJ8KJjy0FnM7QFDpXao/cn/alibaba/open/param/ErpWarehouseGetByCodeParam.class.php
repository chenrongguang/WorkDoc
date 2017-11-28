<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpWarehouseGetByCodeParam {

        
        /**
    * @return 外部系统中的仓库编号
    */
        public function getWarehouseCode() {
        $tempResult = $this->sdkStdResult["warehouseCode"];
        return $tempResult;
    }
    
    /**
     * 设置外部系统中的仓库编号     
     * @param String $warehouseCode     
     * 参数示例：<pre>wh0001</pre>     
     * 此参数必填     */
    public function setWarehouseCode( $warehouseCode) {
        $this->sdkStdResult["warehouseCode"] = $warehouseCode;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>