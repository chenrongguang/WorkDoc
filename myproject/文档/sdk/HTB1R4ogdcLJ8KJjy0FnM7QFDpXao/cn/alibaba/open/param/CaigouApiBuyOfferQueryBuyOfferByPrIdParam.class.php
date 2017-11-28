<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiBuyOfferQueryBuyOfferByPrIdParam {

        
        /**
    * @return 外部系统prId
    */
        public function getPrId() {
        $tempResult = $this->sdkStdResult["prId"];
        return $tempResult;
    }
    
    /**
     * 设置外部系统prId     
     * @param String $prId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrId( $prId) {
        $this->sdkStdResult["prId"] = $prId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>