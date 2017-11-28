<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductlineDeleteProductLineParam {

        
        /**
    * @return 分组 id
    */
        public function getProductLineId() {
        $tempResult = $this->sdkStdResult["productLineId"];
        return $tempResult;
    }
    
    /**
     * 设置分组 id     
     * @param Long $productLineId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductLineId( $productLineId) {
        $this->sdkStdResult["productLineId"] = $productLineId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>