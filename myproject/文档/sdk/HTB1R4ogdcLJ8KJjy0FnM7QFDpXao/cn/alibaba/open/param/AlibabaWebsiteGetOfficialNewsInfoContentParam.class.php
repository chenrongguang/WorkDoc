<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaWebsiteGetOfficialNewsInfoContentParam {

        
        /**
    * @return 某个新闻的实例key
    */
        public function getKey() {
        $tempResult = $this->sdkStdResult["key"];
        return $tempResult;
    }
    
    /**
     * 设置某个新闻的实例key     
     * @param String $key     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKey( $key) {
        $this->sdkStdResult["key"] = $key;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>