<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeOrderRequest.class.php');

class AlibabaErpOrderGeneralCreateOrderParam {

        
        /**
    * @return 订单请求
    */
        public function getOrderRequest() {
        $tempResult = $this->sdkStdResult["orderRequest"];
        return $tempResult;
    }
    
    /**
     * 设置订单请求     
     * @param AlibabaTradeOrderRequest $orderRequest     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderRequest(AlibabaTradeOrderRequest $orderRequest) {
        $this->sdkStdResult["orderRequest"] = $orderRequest;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>