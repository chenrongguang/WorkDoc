<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpManufacturePullBulkDataListParam {

        
        /**
    * @return 大货单编号列表，最大10个
    */
        public function getBulkGoodsCodes() {
        $tempResult = $this->sdkStdResult["bulkGoodsCodes"];
        return $tempResult;
    }
    
    /**
     * 设置大货单编号列表，最大10个     
     * @param array include @see String[] $bulkGoodsCodes     
     * 参数示例：<pre>[“THZ0001ABG101GD0002A”,” THZ0002ABG202GD0002B”]</pre>     
     * 此参数必填     */
    public function setBulkGoodsCodes( $bulkGoodsCodes) {
        $this->sdkStdResult["bulkGoodsCodes"] = $bulkGoodsCodes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>