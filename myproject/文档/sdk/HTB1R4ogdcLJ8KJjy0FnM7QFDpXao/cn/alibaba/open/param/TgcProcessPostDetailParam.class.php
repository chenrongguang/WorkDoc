<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TgcProcessPostDetailParam {

        
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
    * @return 订单生产流程数据，允许的HTML标签包括：p/br，如果包含其他的HTML标签，则提交失败
    */
        public function getData() {
        $tempResult = $this->sdkStdResult["data"];
        return $tempResult;
    }
    
    /**
     * 设置订单生产流程数据，允许的HTML标签包括：p/br，如果包含其他的HTML标签，则提交失败     
     * @param String $data     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setData( $data) {
        $this->sdkStdResult["data"] = $data;
    }
    
        
        /**
    * @return 提交时间.必须是“yyyyMMddHHmmssSSSZ”这种格式化之后的时间，如：“20141031125417279+0800”
    */
        public function getSubmitTime() {
        $tempResult = $this->sdkStdResult["submitTime"];
        return $tempResult;
    }
    
    /**
     * 设置提交时间.必须是“yyyyMMddHHmmssSSSZ”这种格式化之后的时间，如：“20141031125417279+0800”     
     * @param Date $submitTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubmitTime( $submitTime) {
        $this->sdkStdResult["submitTime"] = $submitTime;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>