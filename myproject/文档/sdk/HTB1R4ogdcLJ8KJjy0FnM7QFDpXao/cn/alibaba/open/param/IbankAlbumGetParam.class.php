<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankAlbumGetParam {

        
        /**
    * @return 相册ID
    */
        public function getAlbumId() {
        $tempResult = $this->sdkStdResult["albumId"];
        return $tempResult;
    }
    
    /**
     * 设置相册ID     
     * @param Long $albumId     
     * 参数示例：<pre>66200059</pre>     
     * 此参数必填     */
    public function setAlbumId( $albumId) {
        $this->sdkStdResult["albumId"] = $albumId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>