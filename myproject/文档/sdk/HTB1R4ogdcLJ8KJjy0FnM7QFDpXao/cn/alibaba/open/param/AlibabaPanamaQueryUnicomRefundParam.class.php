<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomOrderOptParam.class.php');

class AlibabaPanamaQueryUnicomRefundParam {

        
        /**
    * @return 
    */
        public function getUnicomOrderOptParam() {
        $tempResult = $this->sdkStdResult["unicomOrderOptParam"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomOrderOptParam $unicomOrderOptParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnicomOrderOptParam(AlibabaPanamaUnicomOrderOptParam $unicomOrderOptParam) {
        $this->sdkStdResult["unicomOrderOptParam"] = $unicomOrderOptParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>