<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiArticleDeleteArticleParam {

        
        /**
    * @return 文章外部ID
    */
        public function getExternalId() {
        $tempResult = $this->sdkStdResult["externalId"];
        return $tempResult;
    }
    
    /**
     * 设置文章外部ID     
     * @param String $externalId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExternalId( $externalId) {
        $this->sdkStdResult["externalId"] = $externalId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>