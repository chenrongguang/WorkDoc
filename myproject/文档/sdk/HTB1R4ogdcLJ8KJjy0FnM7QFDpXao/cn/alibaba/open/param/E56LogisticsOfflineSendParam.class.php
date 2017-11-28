<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class E56LogisticsOfflineSendParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param String $orderId     
     * 参数示例：<pre>123423</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 订单明细ID, 多个明细请用英文逗号分隔
    */
        public function getOrderEntryIds() {
        $tempResult = $this->sdkStdResult["orderEntryIds"];
        return $tempResult;
    }
    
    /**
     * 设置订单明细ID, 多个明细请用英文逗号分隔     
     * @param String $orderEntryIds     
     * 参数示例：<pre>13234,1233</pre>     
     * 此参数必填     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }
    
        
        /**
    * @return 交易订单来源,支持的来源有：cbu-trade
    */
        public function getTradeSourceType() {
        $tempResult = $this->sdkStdResult["tradeSourceType"];
        return $tempResult;
    }
    
    /**
     * 设置交易订单来源,支持的来源有：cbu-trade     
     * @param String $tradeSourceType     
     * 参数示例：<pre>cbu-trade</pre>     
     * 此参数必填     */
    public function setTradeSourceType( $tradeSourceType) {
        $this->sdkStdResult["tradeSourceType"] = $tradeSourceType;
    }
    
        
        /**
    * @return 用户备注
    */
        public function getRemarks() {
        $tempResult = $this->sdkStdResult["remarks"];
        return $tempResult;
    }
    
    /**
     * 设置用户备注     
     * @param String $remarks     
     * 参数示例：<pre>备注</pre>     
     * 此参数必填     */
    public function setRemarks( $remarks) {
        $this->sdkStdResult["remarks"] = $remarks;
    }
    
        
        /**
    * @return 物流公司ID，通过物流公司获取接口获取，其中8为其他物流公司
    */
        public function getLogisticsCompanyId() {
        $tempResult = $this->sdkStdResult["logisticsCompanyId"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司ID，通过物流公司获取接口获取，其中8为其他物流公司     
     * @param String $logisticsCompanyId     
     * 参数示例：<pre>8</pre>     
     * 此参数必填     */
    public function setLogisticsCompanyId( $logisticsCompanyId) {
        $this->sdkStdResult["logisticsCompanyId"] = $logisticsCompanyId;
    }
    
        
        /**
    * @return logisticsCompanyId=8时，这个字段必填，需要填写其他的物流公司名称
    */
        public function getSelfCompanyName() {
        $tempResult = $this->sdkStdResult["selfCompanyName"];
        return $tempResult;
    }
    
    /**
     * 设置logisticsCompanyId=8时，这个字段必填，需要填写其他的物流公司名称     
     * @param String $selfCompanyName     
     * 参数示例：<pre>德邦物流</pre>     
     * 此参数必填     */
    public function setSelfCompanyName( $selfCompanyName) {
        $this->sdkStdResult["selfCompanyName"] = $selfCompanyName;
    }
    
        
        /**
    * @return 物流公司运单号
    */
        public function getLogisticsBillNo() {
        $tempResult = $this->sdkStdResult["logisticsBillNo"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司运单号     
     * @param String $logisticsBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsBillNo( $logisticsBillNo) {
        $this->sdkStdResult["logisticsBillNo"] = $logisticsBillNo;
    }
    
        
        /**
    * @return 系统发货时间
    */
        public function getGmtSystemSend() {
        $tempResult = $this->sdkStdResult["gmtSystemSend"];
        return $tempResult;
    }
    
    /**
     * 设置系统发货时间     
     * @param String $gmtSystemSend     
     * 参数示例：<pre>2012-04-13 09:38:00</pre>     
     * 此参数必填     */
    public function setGmtSystemSend( $gmtSystemSend) {
        $this->sdkStdResult["gmtSystemSend"] = $gmtSystemSend;
    }
    
        
        /**
    * @return 卖家发货时间
    */
        public function getGmtLogisticsCompanySend() {
        $tempResult = $this->sdkStdResult["gmtLogisticsCompanySend"];
        return $tempResult;
    }
    
    /**
     * 设置卖家发货时间     
     * @param String $gmtLogisticsCompanySend     
     * 参数示例：<pre>2012-04-13 09:38:00</pre>     
     * 此参数必填     */
    public function setGmtLogisticsCompanySend( $gmtLogisticsCompanySend) {
        $this->sdkStdResult["gmtLogisticsCompanySend"] = $gmtLogisticsCompanySend;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>