<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomCreateRefundParam.class.php');

class AlibabaPanamaCreateUnicomRefundParam {

        
        /**
    * @return 
    */
        public function getUnicomCreateRefundParam() {
        $tempResult = $this->sdkStdResult["unicomCreateRefundParam"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomCreateRefundParam $unicomCreateRefundParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnicomCreateRefundParam(AlibabaPanamaUnicomCreateRefundParam $unicomCreateRefundParam) {
        $this->sdkStdResult["unicomCreateRefundParam"] = $unicomCreateRefundParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>