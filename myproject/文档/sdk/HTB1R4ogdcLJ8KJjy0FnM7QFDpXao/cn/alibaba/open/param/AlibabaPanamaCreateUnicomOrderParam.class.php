<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomCreateOrderParam.class.php');

class AlibabaPanamaCreateUnicomOrderParam {

        
        /**
    * @return 
    */
        public function getUnicomCreateOrderParam() {
        $tempResult = $this->sdkStdResult["unicomCreateOrderParam"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomCreateOrderParam $unicomCreateOrderParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnicomCreateOrderParam(AlibabaPanamaUnicomCreateOrderParam $unicomCreateOrderParam) {
        $this->sdkStdResult["unicomCreateOrderParam"] = $unicomCreateOrderParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>