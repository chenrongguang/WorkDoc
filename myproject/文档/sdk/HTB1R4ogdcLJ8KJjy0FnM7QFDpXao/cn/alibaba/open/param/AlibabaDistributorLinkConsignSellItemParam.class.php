<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorLinkConsignSellItemParam {

        
        /**
    * @return 需要关联代销关系的产品Id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置需要关联代销关系的产品Id     
     * @param Long $productId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 淘宝宝贝链接
    */
        public function getItemUrl() {
        $tempResult = $this->sdkStdResult["itemUrl"];
        return $tempResult;
    }
    
    /**
     * 设置淘宝宝贝链接     
     * @param String $itemUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemUrl( $itemUrl) {
        $this->sdkStdResult["itemUrl"] = $itemUrl;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>