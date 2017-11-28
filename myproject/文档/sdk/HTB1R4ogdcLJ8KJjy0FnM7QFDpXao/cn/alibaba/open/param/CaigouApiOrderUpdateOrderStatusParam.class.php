<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiOrderUpdateOrderStatusParam {

        
        /**
    * @return 订单在1688采购系统中的id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单在1688采购系统中的id     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 操作员在1688上的子帐号ID，如果接入商有子账号，通过子账号来下单的，则这个参数必传；不传则系统会自动取主账号的userId作为默认值
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置操作员在1688上的子帐号ID，如果接入商有子账号，通过子账号来下单的，则这个参数必传；不传则系统会自动取主账号的userId作为默认值     
     * @param Long $subUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 订单状态默认为enabled，可设置类型为：disabled（无效）、enabled（有效）
    */
        public function getOrderStatus() {
        $tempResult = $this->sdkStdResult["orderStatus"];
        return $tempResult;
    }
    
    /**
     * 设置订单状态默认为enabled，可设置类型为：disabled（无效）、enabled（有效）     
     * @param String $orderStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->sdkStdResult["orderStatus"] = $orderStatus;
    }
    
        
        /**
    * @return 支付状态，默认为unpaid，可设置状态为：unpaid（未支付），paid（已支付）
    */
        public function getPayStatus() {
        $tempResult = $this->sdkStdResult["payStatus"];
        return $tempResult;
    }
    
    /**
     * 设置支付状态，默认为unpaid，可设置状态为：unpaid（未支付），paid（已支付）     
     * @param String $payStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayStatus( $payStatus) {
        $this->sdkStdResult["payStatus"] = $payStatus;
    }
    
        
        /**
    * @return 物流状态，默认为unshipped，可设置状态为：unshipped（未发货），shipped（已发货），received（已收货）
    */
        public function getLogisticsStatus() {
        $tempResult = $this->sdkStdResult["logisticsStatus"];
        return $tempResult;
    }
    
    /**
     * 设置物流状态，默认为unshipped，可设置状态为：unshipped（未发货），shipped（已发货），received（已收货）     
     * @param String $logisticsStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->sdkStdResult["logisticsStatus"] = $logisticsStatus;
    }
    
        
        /**
    * @return 若订单状态为invalid，则可按照情况给出invalid原因，长度小于等于300，可以为空。
    */
        public function getFailReason() {
        $tempResult = $this->sdkStdResult["failReason"];
        return $tempResult;
    }
    
    /**
     * 设置若订单状态为invalid，则可按照情况给出invalid原因，长度小于等于300，可以为空。     
     * @param String $failReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFailReason( $failReason) {
        $this->sdkStdResult["failReason"] = $failReason;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>