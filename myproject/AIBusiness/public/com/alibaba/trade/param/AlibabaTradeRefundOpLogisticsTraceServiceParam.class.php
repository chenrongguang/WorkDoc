<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeRefundOpLogisticsTraceServiceParam {

        
        /**
    * @return 退款单Id
    */
        public function getRefundId() {
        $tempResult = $this->sdkStdResult["refundId"];
        return $tempResult;
    }
    
    /**
     * 设置退款单Id     
     * @param String $refundId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundId( $refundId) {
        $this->sdkStdResult["refundId"] = $refundId;
    }
    
        
        /**
    * @return 交易类型
    */
        public function getTradeSourceType() {
        $tempResult = $this->sdkStdResult["tradeSourceType"];
        return $tempResult;
    }
    
    /**
     * 设置交易类型     
     * @param String $tradeSourceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeSourceType( $tradeSourceType) {
        $this->sdkStdResult["tradeSourceType"] = $tradeSourceType;
    }
    
        
        /**
    * @return 交易订单Id
    */
        public function getTradeId() {
        $tempResult = $this->sdkStdResult["tradeId"];
        return $tempResult;
    }
    
    /**
     * 设置交易订单Id     
     * @param Long $tradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeId( $tradeId) {
        $this->sdkStdResult["tradeId"] = $tradeId;
    }
    
        
        /**
    * @return 物流编号（如果不传，在查询不到跟踪信息时将不做补充查询，主要解决零售通问题）
    */
        public function getLogisticsId() {
        $tempResult = $this->sdkStdResult["logisticsId"];
        return $tempResult;
    }
    
    /**
     * 设置物流编号（如果不传，在查询不到跟踪信息时将不做补充查询，主要解决零售通问题）     
     * @param String $logisticsId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsId( $logisticsId) {
        $this->sdkStdResult["logisticsId"] = $logisticsId;
    }
    
        
        /**
    * @return 物流公司Code
    */
        public function getCpCode() {
        $tempResult = $this->sdkStdResult["cpCode"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司Code     
     * @param String $cpCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCpCode( $cpCode) {
        $this->sdkStdResult["cpCode"] = $cpCode;
    }
    
        
        /**
    * @return 运单号
    */
        public function getMailNo() {
        $tempResult = $this->sdkStdResult["mailNo"];
        return $tempResult;
    }
    
    /**
     * 设置运单号     
     * @param String $mailNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMailNo( $mailNo) {
        $this->sdkStdResult["mailNo"] = $mailNo;
    }
    
        
        /**
    * @return 物流公司名称，用来辅助获取cpCode
    */
        public function getCpName() {
        $tempResult = $this->sdkStdResult["cpName"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司名称，用来辅助获取cpCode     
     * @param String $cpName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCpName( $cpName) {
        $this->sdkStdResult["cpName"] = $cpName;
    }
    
        
        /**
    * @return 查询者用户id
    */
        public function getUserId() {
        $tempResult = $this->sdkStdResult["userId"];
        return $tempResult;
    }
    
    /**
     * 设置查询者用户id     
     * @param Long $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->sdkStdResult["userId"] = $userId;
    }
    
        
        /**
    * @return 跟踪调用来源类型
    */
        public function getTraceSource() {
        $tempResult = $this->sdkStdResult["traceSource"];
        return $tempResult;
    }
    
    /**
     * 设置跟踪调用来源类型     
     * @param String $traceSource     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTraceSource( $traceSource) {
        $this->sdkStdResult["traceSource"] = $traceSource;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>