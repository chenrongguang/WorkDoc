<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpManufacturePullFentDataListParam {

        
        /**
    * @return 打样单编号列表，最大10个
    */
        public function getFentGoodsCodes() {
        $tempResult = $this->sdkStdResult["fentGoodsCodes"];
        return $tempResult;
    }
    
    /**
     * 设置打样单编号列表，最大10个     
     * @param array include @see String[] $fentGoodsCodes     
     * 参数示例：<pre>[“THZ0001ABG101GD00020”,” THZ0002ABG202GD00020”]</pre>     
     * 此参数必填     */
    public function setFentGoodsCodes( $fentGoodsCodes) {
        $this->sdkStdResult["fentGoodsCodes"] = $fentGoodsCodes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>