<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam.class.php');

class ErpWarehouseStockBatchInitParam {

        
        /**
    * @return 库存变动流水参数
    */
        public function getStockInitList() {
        $tempResult = $this->sdkStdResult["stockInitList"];
        return $tempResult;
    }
    
    /**
     * 设置库存变动流水参数     
     * @param array include @see ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam[] $stockInitList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStockInitList(ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam $stockInitList) {
        $this->sdkStdResult["stockInitList"] = $stockInitList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>