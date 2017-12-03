<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeQueryTradeTypesOfOfferParam {

        
        /**
    * @return 卖家memberId
    */
        public function getSellerMemberId() {
        $tempResult = $this->sdkStdResult["sellerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家memberId     
     * @param String $sellerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sdkStdResult["sellerMemberId"] = $sellerMemberId;
    }
    
        
        /**
    * @return 商品Id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品Id     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 类目id
    */
        public function getCatId() {
        $tempResult = $this->sdkStdResult["catId"];
        return $tempResult;
    }
    
    /**
     * 设置类目id     
     * @param Long $catId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCatId( $catId) {
        $this->sdkStdResult["catId"] = $catId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>