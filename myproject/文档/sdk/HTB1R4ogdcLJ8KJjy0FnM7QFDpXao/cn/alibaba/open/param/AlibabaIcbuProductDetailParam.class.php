<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductDetailParam {

        
        /**
    * @return 
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 
    */
        public function getAliMemberId() {
        $tempResult = $this->sdkStdResult["aliMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Long $aliMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliMemberId( $aliMemberId) {
        $this->sdkStdResult["aliMemberId"] = $aliMemberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>