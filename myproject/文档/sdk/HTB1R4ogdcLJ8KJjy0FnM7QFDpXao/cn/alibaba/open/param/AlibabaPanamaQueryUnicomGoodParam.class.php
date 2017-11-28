<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaQueryUnicomGoodParam {

        
        /**
    * @return 商品名称
    */
        public function getGoodId() {
        $tempResult = $this->sdkStdResult["goodId"];
        return $tempResult;
    }
    
    /**
     * 设置商品名称     
     * @param String $goodId     
     * 参数示例：<pre>123_123</pre>     
     * 此参数必填     */
    public function setGoodId( $goodId) {
        $this->sdkStdResult["goodId"] = $goodId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>