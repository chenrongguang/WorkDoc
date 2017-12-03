<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusParam {

        
        /**
    * @return 订单id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单id     
     * @param String $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 1：活动；3:退款成功
    */
        public function getQueryType() {
        $tempResult = $this->sdkStdResult["queryType"];
        return $tempResult;
    }
    
    /**
     * 设置1：活动；3:退款成功     
     * @param String $queryType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQueryType( $queryType) {
        $this->sdkStdResult["queryType"] = $queryType;
    }
    
        
        /**
    * @return 1:售中退款
2:售后退款
    */
        public function getDipsuteType() {
        $tempResult = $this->sdkStdResult["dipsuteType"];
        return $tempResult;
    }
    
    /**
     * 设置1:售中退款
2:售后退款     
     * @param Integer $dipsuteType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDipsuteType( $dipsuteType) {
        $this->sdkStdResult["dipsuteType"] = $dipsuteType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>