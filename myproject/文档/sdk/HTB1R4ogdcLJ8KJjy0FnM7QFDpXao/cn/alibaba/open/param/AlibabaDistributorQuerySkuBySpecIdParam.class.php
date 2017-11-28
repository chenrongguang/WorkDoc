<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorQuerySkuBySpecIdParam {

        
        /**
    * @return 产品Id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置产品Id     
     * @param Long $productId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return sku的SpecId
    */
        public function getSpecId() {
        $tempResult = $this->sdkStdResult["specId"];
        return $tempResult;
    }
    
    /**
     * 设置sku的SpecId     
     * @param String $specId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->sdkStdResult["specId"] = $specId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>