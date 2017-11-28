<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaShowwindowDoRecommendOffersParam {

        
        /**
    * @return 产品ID列表
    */
        public function getOfferIds() {
        $tempResult = $this->sdkStdResult["offerIds"];
        return $tempResult;
    }
    
    /**
     * 设置产品ID列表     
     * @param List $offerIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferIds(array $offerIds) {
        $this->sdkStdResult["offerIds"] = $offerIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>