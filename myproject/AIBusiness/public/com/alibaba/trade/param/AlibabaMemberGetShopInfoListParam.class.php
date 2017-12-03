<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberGetShopInfoListParam {

        
        /**
    * @return 域名数组
    */
        public function getDomains() {
        $tempResult = $this->sdkStdResult["domains"];
        return $tempResult;
    }
    
    /**
     * 设置域名数组     
     * @param array include @see String[] $domains     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDomains( $domains) {
        $this->sdkStdResult["domains"] = $domains;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>