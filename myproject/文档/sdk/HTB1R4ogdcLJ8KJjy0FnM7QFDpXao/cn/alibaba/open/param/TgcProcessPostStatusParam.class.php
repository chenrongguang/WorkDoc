<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TgcProcessPostStatusParam {

        
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
    * @return 订单生产状态，只能是：“started”（开始生产）、“producted”（生产完成）、“packaged”（包装完成）3个状态中的一个。并且严格遵循以上定义的顺序
    */
        public function getStatus() {
        $tempResult = $this->sdkStdResult["status"];
        return $tempResult;
    }
    
    /**
     * 设置订单生产状态，只能是：“started”（开始生产）、“producted”（生产完成）、“packaged”（包装完成）3个状态中的一个。并且严格遵循以上定义的顺序     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->sdkStdResult["status"] = $status;
    }
    
        
        /**
    * @return 提交时间，必须是“yyyyMMddHHmmssSSSZ”这种格式化之后的时间，如：“20141031125417279+0800”
    */
        public function getTime() {
        $tempResult = $this->sdkStdResult["time"];
        return $tempResult;
    }
    
    /**
     * 设置提交时间，必须是“yyyyMMddHHmmssSSSZ”这种格式化之后的时间，如：“20141031125417279+0800”     
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