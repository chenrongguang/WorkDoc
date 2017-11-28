<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaCaigouMallOpenTradeOrderParam.class.php');

class AlibabaCaigouMallCreateTradeOrderParam {

        
        /**
    * @return 内部商城下单参数
    */
        public function getOpenTradeOrderParam() {
        $tempResult = $this->sdkStdResult["openTradeOrderParam"];
        return $tempResult;
    }
    
    /**
     * 设置内部商城下单参数     
     * @param AlibabaCaigouMallOpenTradeOrderParam $openTradeOrderParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOpenTradeOrderParam(AlibabaCaigouMallOpenTradeOrderParam $openTradeOrderParam) {
        $this->sdkStdResult["openTradeOrderParam"] = $openTradeOrderParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>