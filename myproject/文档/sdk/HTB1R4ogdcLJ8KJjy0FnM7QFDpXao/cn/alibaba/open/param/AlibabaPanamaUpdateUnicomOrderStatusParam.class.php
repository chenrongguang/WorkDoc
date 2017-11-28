<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomOrderOptParam.class.php');

class AlibabaPanamaUpdateUnicomOrderStatusParam {

        
        /**
    * @return 
    */
        public function getOrderOptParam() {
        $tempResult = $this->sdkStdResult["orderOptParam"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomOrderOptParam $orderOptParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderOptParam(AlibabaPanamaUnicomOrderOptParam $orderOptParam) {
        $this->sdkStdResult["orderOptParam"] = $orderOptParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>