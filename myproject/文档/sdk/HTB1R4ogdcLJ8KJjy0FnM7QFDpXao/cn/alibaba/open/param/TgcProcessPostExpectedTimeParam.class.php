<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TgcProcessPostExpectedTimeParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 预计发货时间，必须是“yyyyMMddHHmmssSSSZ”这种格式化之后的时间，如：“20141031125417279+0800”
    */
        public function getTime() {
        $tempResult = $this->sdkStdResult["time"];
        return $tempResult;
    }
    
    /**
     * 设置预计发货时间，必须是“yyyyMMddHHmmssSSSZ”这种格式化之后的时间，如：“20141031125417279+0800”     
     * @param Date $time     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTime( $time) {
        $this->sdkStdResult["time"] = $time;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>