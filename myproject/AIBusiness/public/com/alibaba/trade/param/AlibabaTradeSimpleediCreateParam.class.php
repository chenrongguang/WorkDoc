<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeSimpleediCreateParam {

        
        /**
    * @return 文件内容
    */
        public function getEdiContent() {
        $tempResult = $this->sdkStdResult["ediContent"];
        return $tempResult;
    }
    
    /**
     * 设置文件内容     
     * @param array include @see Byte[] $ediContent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEdiContent( $ediContent) {
        $this->sdkStdResult["ediContent"] = $ediContent;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>