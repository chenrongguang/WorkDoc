<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureMutableFentOrder.class.php');

class ErpManufactureBatchUpdateFentParam {

        
        /**
    * @return 需要更新的打样订单列表
    */
        public function getFentOrderList() {
        $tempResult = $this->sdkStdResult["fentOrderList"];
        return $tempResult;
    }
    
    /**
     * 设置需要更新的打样订单列表     
     * @param array include @see AlibabaManufactureMutableFentOrder[] $fentOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFentOrderList(AlibabaManufactureMutableFentOrder $fentOrderList) {
        $this->sdkStdResult["fentOrderList"] = $fentOrderList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>