<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferModifyParam {

        
        /**
    * @return 描述offer的json串，需要进行URLEncode 编码，编码方式为GBK
    */
        public function getOffer() {
        $tempResult = $this->sdkStdResult["offer"];
        return $tempResult;
    }
    
    /**
     * 设置描述offer的json串，需要进行URLEncode 编码，编码方式为GBK     
     * @param String $offer     
     * 参数示例：<pre>message:offer</pre>     
     * 此参数必填     */
    public function setOffer( $offer) {
        $this->sdkStdResult["offer"] = $offer;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>