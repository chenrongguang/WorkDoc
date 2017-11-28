<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferGetEditUriParam {

        
        /**
    * @return 必须包含String类型的offerId属性，表示商品ID
    */
        public function getParam() {
        $tempResult = $this->sdkStdResult["param"];
        return $tempResult;
    }
    
    /**
     * 设置必须包含String类型的offerId属性，表示商品ID     
     * @param Map $param     
     * 参数示例：<pre>{"offerId":42374873}</pre>     
     * 此参数必填     */
    public function setParam(array $param) {
        $this->sdkStdResult["param"] = $param;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>