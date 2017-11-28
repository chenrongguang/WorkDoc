<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpWarehouseBatchDeleteParam {

        
        /**
    * @return 仓库编号列表
    */
        public function getWarehouseCodeList() {
        $tempResult = $this->sdkStdResult["warehouseCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置仓库编号列表     
     * @param array include @see String[] $warehouseCodeList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWarehouseCodeList( $warehouseCodeList) {
        $this->sdkStdResult["warehouseCodeList"] = $warehouseCodeList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>