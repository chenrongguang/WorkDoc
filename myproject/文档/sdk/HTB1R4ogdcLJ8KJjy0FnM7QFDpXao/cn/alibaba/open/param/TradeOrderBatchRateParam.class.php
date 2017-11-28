<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderBatchRateParam {

        
        /**
    * @return 订单评价：Map(String,TradeRateParam[]),前者为订单号，后者为评价内容与星级,结构请看数据结构订单评价参数。
评价星级(starLevel)必须是1-5, 当starLevel < 4 时必须同时指定评价内容
    */
        public function getOrders() {
        $tempResult = $this->sdkStdResult["orders"];
        return $tempResult;
    }
    
    /**
     * 设置订单评价：Map(String,TradeRateParam[]),前者为订单号，后者为评价内容与星级,结构请看数据结构订单评价参数。
评价星级(starLevel)必须是1-5, 当starLevel < 4 时必须同时指定评价内容     
     * @param Map $orders     
     * 参数示例：<pre>参考下面api示例</pre>     
     * 此参数必填     */
    public function setOrders(array $orders) {
        $this->sdkStdResult["orders"] = $orders;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>