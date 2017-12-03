<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeRefundQueryOrderRefundListParam {

        
        /**
    * @return 订单Id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单Id     
     * @param String $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 退款申请时间（起始）
    */
        public function getApplyStartTime() {
        $tempResult = $this->sdkStdResult["applyStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置退款申请时间（起始）     
     * @param Date $applyStartTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyStartTime( $applyStartTime) {
        $this->sdkStdResult["applyStartTime"] = $applyStartTime;
    }
    
        
        /**
    * @return 退款申请时间(截止)
    */
        public function getApplyEndTime() {
        $tempResult = $this->sdkStdResult["applyEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置退款申请时间(截止)     
     * @param Date $applyEndTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyEndTime( $applyEndTime) {
        $this->sdkStdResult["applyEndTime"] = $applyEndTime;
    }
    
        
        /**
    * @return 退款状态列表
    */
        public function getRefundStatusSet() {
        $tempResult = $this->sdkStdResult["refundStatusSet"];
        return $tempResult;
    }
    
    /**
     * 设置退款状态列表     
     * @param Set $refundStatusSet     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundStatusSet(array $refundStatusSet) {
        $this->sdkStdResult["refundStatusSet"] = $refundStatusSet;
    }
    
        
        /**
    * @return 买家memberId
    */
        public function getBuyerMemberId() {
        $tempResult = $this->sdkStdResult["buyerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置买家memberId     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->sdkStdResult["buyerMemberId"] = $buyerMemberId;
    }
    
        
        /**
    * @return 查询页码
    */
        public function getCurrentPageNum() {
        $tempResult = $this->sdkStdResult["currentPageNum"];
        return $tempResult;
    }
    
    /**
     * 设置查询页码     
     * @param Integer $currentPageNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPageNum( $currentPageNum) {
        $this->sdkStdResult["currentPageNum"] = $currentPageNum;
    }
    
        
        /**
    * @return 页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 退货运单号
    */
        public function getLogisticsNo() {
        $tempResult = $this->sdkStdResult["logisticsNo"];
        return $tempResult;
    }
    
    /**
     * 设置退货运单号     
     * @param String $logisticsNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsNo( $logisticsNo) {
        $this->sdkStdResult["logisticsNo"] = $logisticsNo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>