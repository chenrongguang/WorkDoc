<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankAlbumDeleteParam {

        
        /**
    * @return 相册ID序列，以半角分号”;”分隔。每次最多支持删除500个相册。
    */
        public function getAlbumIds() {
        $tempResult = $this->sdkStdResult["albumIds"];
        return $tempResult;
    }
    
    /**
     * 设置相册ID序列，以半角分号”;”分隔。每次最多支持删除500个相册。     
     * @param String $albumIds     
     * 参数示例：<pre>66221002;66200059</pre>     
     * 此参数必填     */
    public function setAlbumIds( $albumIds) {
        $this->sdkStdResult["albumIds"] = $albumIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>