<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeAddresscodeGetParam {

        
        /**
    * @return 地址code码
    */
        public function getAreaCode() {
        $tempResult = $this->sdkStdResult["areaCode"];
        return $tempResult;
    }
    
    /**
     * 设置地址code码     
     * @param String $areaCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAreaCode( $areaCode) {
        $this->sdkStdResult["areaCode"] = $areaCode;
    }
    
        
        /**
    * @return 
    */
        public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $webSite     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWebSite( $webSite) {
        $this->sdkStdResult["webSite"] = $webSite;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>