<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderOrderListGetParam {

        
        /**
    * @return 买家会员名，该订单中的买家会员名。sellerMemberId与buyerMemberId至少填写一个。
    */
        public function getBuyerMemberId() {
        $tempResult = $this->sdkStdResult["buyerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置买家会员名，该订单中的买家会员名。sellerMemberId与buyerMemberId至少填写一个。     
     * @param String $buyerMemberId     
     * 参数示例：<pre>alibuyer</pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->sdkStdResult["buyerMemberId"] = $buyerMemberId;
    }
    
        
        /**
    * @return 卖家会员ID，该订单中的卖家会员名。sellerMemberId与buyerMemberId至少填写一个。
    */
        public function getSellerMemberId() {
        $tempResult = $this->sdkStdResult["sellerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家会员ID，该订单中的卖家会员名。sellerMemberId与buyerMemberId至少填写一个。     
     * @param String $sellerMemberId     
     * 参数示例：<pre>aliseller</pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sdkStdResult["sellerMemberId"] = $sellerMemberId;
    }
    
        
        /**
    * @return 已废弃，请使用createStartTime
    */
        public function getGmtCreateStart() {
        $tempResult = $this->sdkStdResult["gmtCreateStart"];
        return $tempResult;
    }
    
    /**
     * 设置已废弃，请使用createStartTime     
     * @param String $gmtCreateStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreateStart( $gmtCreateStart) {
        $this->sdkStdResult["gmtCreateStart"] = $gmtCreateStart;
    }
    
        
        /**
    * @return 已废弃，请使用createEndTime
    */
        public function getGmtCreateEnd() {
        $tempResult = $this->sdkStdResult["gmtCreateEnd"];
        return $tempResult;
    }
    
    /**
     * 设置已废弃，请使用createEndTime     
     * @param String $gmtCreateEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreateEnd( $gmtCreateEnd) {
        $this->sdkStdResult["gmtCreateEnd"] = $gmtCreateEnd;
    }
    
        
        /**
    * @return 已废弃
    */
        public function getGmtPayStart() {
        $tempResult = $this->sdkStdResult["gmtPayStart"];
        return $tempResult;
    }
    
    /**
     * 设置已废弃     
     * @param String $gmtPayStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPayStart( $gmtPayStart) {
        $this->sdkStdResult["gmtPayStart"] = $gmtPayStart;
    }
    
        
        /**
    * @return 已废弃
    */
        public function getGmtPayEnd() {
        $tempResult = $this->sdkStdResult["gmtPayEnd"];
        return $tempResult;
    }
    
    /**
     * 设置已废弃     
     * @param String $gmtPayEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPayEnd( $gmtPayEnd) {
        $this->sdkStdResult["gmtPayEnd"] = $gmtPayEnd;
    }
    
        
        /**
    * @return 交易类型，取值范围：担保交易-1,预存款交易-2,ETC境外收单交易-3,即时到帐交易-4,保障金安全交易-5,统一交易流程-6,分阶段交易-7,货到付款交易-8
    */
        public function getTradeType() {
        $tempResult = $this->sdkStdResult["tradeType"];
        return $tempResult;
    }
    
    /**
     * 设置交易类型，取值范围：担保交易-1,预存款交易-2,ETC境外收单交易-3,即时到帐交易-4,保障金安全交易-5,统一交易流程-6,分阶段交易-7,货到付款交易-8     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->sdkStdResult["tradeType"] = $tradeType;
    }
    
        
        /**
    * @return 订单交易状态，默认为全部交易状态。若值不为空，合法取值列举如下:
担保交易共有5个状态： waitbuyerpay(等待买家付款), waitsellersend(等待卖家发货), waitbuyerreceive(等待买家收货), success(交易成功), cancel(交易取消，违约金等交割完毕); 
即时到账交易共有4个状态： waitbuyerpay(等待买家付款), waitsellersend(等待卖家发货),(交易成功), cancel(交易取消，违约金等交割完毕)
分阶段交易包括：waitbuyerpay(等待买家付款), waitsellersend(等待卖家发货), waitbuyerreceive(等待买家收货), success(交易成功), cancel(交易取消，违约金等交割完毕),waitselleract(等待卖家操作),waitbuyerconfirmaction(等待买家确认操作),waitsellerpush(等待卖家推进)
    */
        public function getOrderStatus() {
        $tempResult = $this->sdkStdResult["orderStatus"];
        return $tempResult;
    }
    
    /**
     * 设置订单交易状态，默认为全部交易状态。若值不为空，合法取值列举如下:
担保交易共有5个状态： waitbuyerpay(等待买家付款), waitsellersend(等待卖家发货), waitbuyerreceive(等待买家收货), success(交易成功), cancel(交易取消，违约金等交割完毕); 
即时到账交易共有4个状态： waitbuyerpay(等待买家付款), waitsellersend(等待卖家发货),(交易成功), cancel(交易取消，违约金等交割完毕)
分阶段交易包括：waitbuyerpay(等待买家付款), waitsellersend(等待卖家发货), waitbuyerreceive(等待买家收货), success(交易成功), cancel(交易取消，违约金等交割完毕),waitselleract(等待卖家操作),waitbuyerconfirmaction(等待买家确认操作),waitsellerpush(等待卖家推进)     
     * @param String $orderStatus     
     * 参数示例：<pre>waitbuyerpay</pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->sdkStdResult["orderStatus"] = $orderStatus;
    }
    
        
        /**
    * @return 页码，取值范围:大于零的整数;默认值为1，即返回第一页数据。
    */
        public function getPageNO() {
        $tempResult = $this->sdkStdResult["pageNO"];
        return $tempResult;
    }
    
    /**
     * 设置页码，取值范围:大于零的整数;默认值为1，即返回第一页数据。     
     * @param Integer $pageNO     
     * 参数示例：<pre>19</pre>     
     * 此参数必填     */
    public function setPageNO( $pageNO) {
        $this->sdkStdResult["pageNO"] = $pageNO;
    }
    
        
        /**
    * @return 分页条数，返回订单列表结果集分页条数。取值范围:大于零的整数；最大值：20；默认值：10。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页条数，返回订单列表结果集分页条数。取值范围:大于零的整数；最大值：20；默认值：10。     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 是否查询历史订单，即3个月以前的订单，默认为false，即不查询历史订单
    */
        public function getIsHis() {
        $tempResult = $this->sdkStdResult["isHis"];
        return $tempResult;
    }
    
    /**
     * 设置是否查询历史订单，即3个月以前的订单，默认为false，即不查询历史订单     
     * @param Boolean $isHis     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsHis( $isHis) {
        $this->sdkStdResult["isHis"] = $isHis;
    }
    
        
        /**
    * @return 订单中的商品名称
    */
        public function getProductName() {
        $tempResult = $this->sdkStdResult["productName"];
        return $tempResult;
    }
    
    /**
     * 设置订单中的商品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->sdkStdResult["productName"] = $productName;
    }
    
        
        /**
    * @return 订单编号，指定该参数相当于查询订单明细
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单编号，指定该参数相当于查询订单明细     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 下单开始时间(进入订单确认页面)，格式 yyyy-MM-dd HH:mm:ss
    */
        public function getCreateStartTime() {
        $tempResult = $this->sdkStdResult["createStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置下单开始时间(进入订单确认页面)，格式 yyyy-MM-dd HH:mm:ss     
     * @param String $createStartTime     
     * 参数示例：<pre>2012-04-12 17:38:30</pre>     
     * 此参数必填     */
    public function setCreateStartTime( $createStartTime) {
        $this->sdkStdResult["createStartTime"] = $createStartTime;
    }
    
        
        /**
    * @return 下单结束时间（确认订购），格式 yyyy-MM-dd HH:mm:ss
    */
        public function getCreateEndTime() {
        $tempResult = $this->sdkStdResult["createEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置下单结束时间（确认订购），格式 yyyy-MM-dd HH:mm:ss     
     * @param String $createEndTime     
     * 参数示例：<pre>2012-04-13 09:38:00</pre>     
     * 此参数必填     */
    public function setCreateEndTime( $createEndTime) {
        $this->sdkStdResult["createEndTime"] = $createEndTime;
    }
    
        
        /**
    * @return 已废弃
    */
        public function getPayStartTime() {
        $tempResult = $this->sdkStdResult["payStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置已废弃     
     * @param String $payStartTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayStartTime( $payStartTime) {
        $this->sdkStdResult["payStartTime"] = $payStartTime;
    }
    
        
        /**
    * @return 已废弃
    */
        public function getPayEndTime() {
        $tempResult = $this->sdkStdResult["payEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置已废弃     
     * @param String $payEndTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayEndTime( $payEndTime) {
        $this->sdkStdResult["payEndTime"] = $payEndTime;
    }
    
        
        /**
    * @return 订单更新开始时间，格式 yyyy-MM-dd HH:mm:ss
    */
        public function getModifyStartTime() {
        $tempResult = $this->sdkStdResult["modifyStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置订单更新开始时间，格式 yyyy-MM-dd HH:mm:ss     
     * @param String $modifyStartTime     
     * 参数示例：<pre>2012-04-12 16:38:00</pre>     
     * 此参数必填     */
    public function setModifyStartTime( $modifyStartTime) {
        $this->sdkStdResult["modifyStartTime"] = $modifyStartTime;
    }
    
        
        /**
    * @return 订单更新结束时间，格式 yyyy-MM-dd HH:mm:ss
    */
        public function getModifyEndTime() {
        $tempResult = $this->sdkStdResult["modifyEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置订单更新结束时间，格式 yyyy-MM-dd HH:mm:ss     
     * @param String $modifyEndTime     
     * 参数示例：<pre>2012-04-13 16:38:00</pre>     
     * 此参数必填     */
    public function setModifyEndTime( $modifyEndTime) {
        $this->sdkStdResult["modifyEndTime"] = $modifyEndTime;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>