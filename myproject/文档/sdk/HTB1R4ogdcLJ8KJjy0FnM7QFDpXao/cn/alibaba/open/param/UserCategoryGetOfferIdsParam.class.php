<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UserCategoryGetOfferIdsParam {

        
        /**
    * @return 查询的产品序列。多个产品id半角分号分隔
    */
        public function getOfferIds() {
        $tempResult = $this->sdkStdResult["offerIds"];
        return $tempResult;
    }
    
    /**
     * 设置查询的产品序列。多个产品id半角分号分隔     
     * @param String $offerIds     
     * 参数示例：<pre>30909867;1277824766;1277824767;1</pre>     
     * 此参数必填     */
    public function setOfferIds( $offerIds) {
        $this->sdkStdResult["offerIds"] = $offerIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>