<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpProductGetByCodeParam {

        
        /**
    * @return 外部系统中的商品编号
    */
        public function getProductCode() {
        $tempResult = $this->sdkStdResult["productCode"];
        return $tempResult;
    }
    
    /**
     * 设置外部系统中的商品编号     
     * @param String $productCode     
     * 参数示例：<pre>Pt0001#Sku0001</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->sdkStdResult["productCode"] = $productCode;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>