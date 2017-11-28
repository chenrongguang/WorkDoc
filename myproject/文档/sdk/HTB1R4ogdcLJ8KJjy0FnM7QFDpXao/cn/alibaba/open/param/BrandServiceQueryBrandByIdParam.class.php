<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandServiceQueryBrandByIdParam {

        
        /**
    * @return 品牌id
    */
        public function getBrandId() {
        $tempResult = $this->sdkStdResult["brandId"];
        return $tempResult;
    }
    
    /**
     * 设置品牌id     
     * @param Long $brandId     
     * 参数示例：<pre>124</pre>     
     * 此参数必填     */
    public function setBrandId( $brandId) {
        $this->sdkStdResult["brandId"] = $brandId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>