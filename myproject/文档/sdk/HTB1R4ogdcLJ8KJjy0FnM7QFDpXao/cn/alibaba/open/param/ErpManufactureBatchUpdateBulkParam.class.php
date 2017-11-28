<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureMutableBulkOrder.class.php');

class ErpManufactureBatchUpdateBulkParam {

        
        /**
    * @return 需要更新的大货订单
    */
        public function getBulkOrderList() {
        $tempResult = $this->sdkStdResult["bulkOrderList"];
        return $tempResult;
    }
    
    /**
     * 设置需要更新的大货订单     
     * @param array include @see AlibabaManufactureMutableBulkOrder[] $bulkOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBulkOrderList(AlibabaManufactureMutableBulkOrder $bulkOrderList) {
        $this->sdkStdResult["bulkOrderList"] = $bulkOrderList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>