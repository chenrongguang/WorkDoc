<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomOrderOptParam.class.php');

class AlibabaPanamaQueryUnicomOrderParam {

        
        /**
    * @return subOrderId为子订单 id. parentOrderId 为主订单 id. 二者必须存在至少一个. 如果都存在则查询子订单 id
    */
        public function getUnicomOrderOptParam() {
        $tempResult = $this->sdkStdResult["unicomOrderOptParam"];
        return $tempResult;
    }
    
    /**
     * 设置subOrderId为子订单 id. parentOrderId 为主订单 id. 二者必须存在至少一个. 如果都存在则查询子订单 id     
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