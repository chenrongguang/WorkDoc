<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeLogisticsOrderSendGoodsNoOnlineParam {

        
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
     * 参数示例：<pre>10758</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 会员ID
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置会员ID     
     * @param String $memberId     
     * 参数示例：<pre>aliseller</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
        /**
    * @return 发送方会员ID
    */
        public function getFromMemberId() {
        $tempResult = $this->sdkStdResult["fromMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置发送方会员ID     
     * @param String $fromMemberId     
     * 参数示例：<pre>aliseller</pre>     
     * 此参数必填     */
    public function setFromMemberId( $fromMemberId) {
        $this->sdkStdResult["fromMemberId"] = $fromMemberId;
    }
    
        
        /**
    * @return 接受方会员ID
    */
        public function getToMemberId() {
        $tempResult = $this->sdkStdResult["toMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置接受方会员ID     
     * @param String $toMemberId     
     * 参数示例：<pre>alibuyer</pre>     
     * 此参数必填     */
    public function setToMemberId( $toMemberId) {
        $this->sdkStdResult["toMemberId"] = $toMemberId;
    }
    
        
        /**
    * @return 用户发货时的IP地址
    */
        public function getOperatorIp() {
        $tempResult = $this->sdkStdResult["operatorIp"];
        return $tempResult;
    }
    
    /**
     * 设置用户发货时的IP地址     
     * @param String $operatorIp     
     * 参数示例：<pre>158.52.2.56</pre>     
     * 此参数必填     */
    public function setOperatorIp( $operatorIp) {
        $this->sdkStdResult["operatorIp"] = $operatorIp;
    }
    
        
        /**
    * @return 注意事项、备注
    */
        public function getRemarks() {
        $tempResult = $this->sdkStdResult["remarks"];
        return $tempResult;
    }
    
    /**
     * 设置注意事项、备注     
     * @param String $remarks     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemarks( $remarks) {
        $this->sdkStdResult["remarks"] = $remarks;
    }
    
        
        /**
    * @return 发货类型，0:自行发货；1：在线发货；2不需要物流（目前只对外开放0和2）
    */
        public function getSendGoodsType() {
        $tempResult = $this->sdkStdResult["sendGoodsType"];
        return $tempResult;
    }
    
    /**
     * 设置发货类型，0:自行发货；1：在线发货；2不需要物流（目前只对外开放0和2）     
     * @param String $sendGoodsType     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setSendGoodsType( $sendGoodsType) {
        $this->sdkStdResult["sendGoodsType"] = $sendGoodsType;
    }
    
        
        /**
    * @return 物流公司ID，sendGoodsType=2（不需要物流）时，logisticsCompanyId传参为8
    */
        public function getLogisticsCompanyId() {
        $tempResult = $this->sdkStdResult["logisticsCompanyId"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司ID，sendGoodsType=2（不需要物流）时，logisticsCompanyId传参为8     
     * @param Long $logisticsCompanyId     
     * 参数示例：<pre>8</pre>     
     * 此参数必填     */
    public function setLogisticsCompanyId( $logisticsCompanyId) {
        $this->sdkStdResult["logisticsCompanyId"] = $logisticsCompanyId;
    }
    
        
        /**
    * @return 订单明细，以半角分号分割
    */
        public function getOrderEntryIds() {
        $tempResult = $this->sdkStdResult["orderEntryIds"];
        return $tempResult;
    }
    
    /**
     * 设置订单明细，以半角分号分割     
     * @param String $orderEntryIds     
     * 参数示例：<pre>23456;56789;43216</pre>     
     * 此参数必填     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }
    
        
        /**
    * @return 物流公司运单号，sendGoodsType=2（不需要物流）时，logisticsBillNo传参为”不需要物流”
    */
        public function getLogisticsBillNo() {
        $tempResult = $this->sdkStdResult["logisticsBillNo"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司运单号，sendGoodsType=2（不需要物流）时，logisticsBillNo传参为”不需要物流”     
     * @param String $logisticsBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsBillNo( $logisticsBillNo) {
        $this->sdkStdResult["logisticsBillNo"] = $logisticsBillNo;
    }
    
        
        /**
    * @return 系统处理时间，格式 yyyy-MM-dd HH:mm:ss
    */
        public function getGmtSystemSend() {
        $tempResult = $this->sdkStdResult["gmtSystemSend"];
        return $tempResult;
    }
    
    /**
     * 设置系统处理时间，格式 yyyy-MM-dd HH:mm:ss     
     * @param String $gmtSystemSend     
     * 参数示例：<pre>2012-04-13 09:38:00</pre>     
     * 此参数必填     */
    public function setGmtSystemSend( $gmtSystemSend) {
        $this->sdkStdResult["gmtSystemSend"] = $gmtSystemSend;
    }
    
        
        /**
    * @return 物流公司发货时间，格式 yyyy-MM-dd HH:mm:ss
    */
        public function getGmtLogisticsCompanySend() {
        $tempResult = $this->sdkStdResult["gmtLogisticsCompanySend"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司发货时间，格式 yyyy-MM-dd HH:mm:ss     
     * @param String $gmtLogisticsCompanySend     
     * 参数示例：<pre>2012-04-13 09:38:07</pre>     
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