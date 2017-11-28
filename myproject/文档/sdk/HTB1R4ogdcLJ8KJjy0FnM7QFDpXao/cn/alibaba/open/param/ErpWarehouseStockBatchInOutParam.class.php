<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam.class.php');

class ErpWarehouseStockBatchInOutParam {

        
        /**
    * @return 库存流水变动参数列表
    */
        public function getWarehouseInOutList() {
        $tempResult = $this->sdkStdResult["warehouseInOutList"];
        return $tempResult;
    }
    
    /**
     * 设置库存流水变动参数列表     
     * @param array include @see ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam[] $warehouseInOutList     
     * 参数示例：<pre>[{
"productCode":"prod001",
"warehouseCode":"wh001",
"billCode":"bl001",
"billType":"add_Bill",
"billName":"盘盈单",
"amount":100
}]</pre>     
     * 此参数必填     */
    public function setWarehouseInOutList(ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam $warehouseInOutList) {
        $this->sdkStdResult["warehouseInOutList"] = $warehouseInOutList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>