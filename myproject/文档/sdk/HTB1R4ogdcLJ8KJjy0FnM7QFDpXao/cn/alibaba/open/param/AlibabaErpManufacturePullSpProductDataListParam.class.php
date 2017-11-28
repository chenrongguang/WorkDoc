<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaErpManufacturePullSpProductDataListParam {

        
        /**
    * @return 需求单号列表
    */
        public function getProductCodes() {
        $tempResult = $this->sdkStdResult["productCodes"];
        return $tempResult;
    }
    
    /**
     * 设置需求单号列表     
     * @param array include @see String[] $productCodes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCodes( $productCodes) {
        $this->sdkStdResult["productCodes"] = $productCodes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>