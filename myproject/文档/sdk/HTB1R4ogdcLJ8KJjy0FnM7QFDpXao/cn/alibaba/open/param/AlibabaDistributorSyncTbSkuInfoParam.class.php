<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorSyncTbSkuInfoParam {

        
        /**
    * @return 需要同步sku信息的产品Id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置需要同步sku信息的产品Id     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 淘宝宝贝Id
    */
        public function getItemId() {
        $tempResult = $this->sdkStdResult["itemId"];
        return $tempResult;
    }
    
    /**
     * 设置淘宝宝贝Id     
     * @param Long $itemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->sdkStdResult["itemId"] = $itemId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>