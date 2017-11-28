<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductlineUpdateProductLineParam {

        
        /**
    * @return 分组ID
    */
        public function getProductLineId() {
        $tempResult = $this->sdkStdResult["productLineId"];
        return $tempResult;
    }
    
    /**
     * 设置分组ID     
     * @param Integer $productLineId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductLineId( $productLineId) {
        $this->sdkStdResult["productLineId"] = $productLineId;
    }
    
        
        /**
    * @return 分组名称
    */
        public function getProductLineName() {
        $tempResult = $this->sdkStdResult["productLineName"];
        return $tempResult;
    }
    
    /**
     * 设置分组名称     
     * @param String $productLineName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductLineName( $productLineName) {
        $this->sdkStdResult["productLineName"] = $productLineName;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>