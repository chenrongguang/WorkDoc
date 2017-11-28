<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/LogisticsOrderModel.class.php');
include_once ('cn/alibaba/open/param/OrderMemoModel.class.php');
include_once ('cn/alibaba/open/param/OrderInvoiceModel.class.php');
include_once ('cn/alibaba/open/param/OrderMemoModel.class.php');
include_once ('cn/alibaba/open/param/OrderMemoModel.class.php');

class OrderModel extends SDKDomain {

       	
    private $status;
    
        /**
    * @return 订单状态。CANCEL交易关闭，SUCCESS交易成功，WAIT_BUYER_PAY等待买家付款，WAIT_SELLER_SEND等待卖家发货，WAIT_BUYER_RECEIVE等待买家确认收货，WAIT_SELLER_ACT分阶段等待卖家操作，WAIT_BUYER_CONFIRM_ACTION分阶段等待买家确认卖家操作，WAIT_SELLER_PUSH分阶段等待卖家推进，WAIT_LOGISTICS_TAKE_IN等待物流公司揽件COD，WAIT_BUYER_SIGN等待买家签收COD，SIGN_IN_SUCCESS买家已签收COD，SIGN_IN_FAILED签收失败COD
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置订单状态。CANCEL交易关闭，SUCCESS交易成功，WAIT_BUYER_PAY等待买家付款，WAIT_SELLER_SEND等待卖家发货，WAIT_BUYER_RECEIVE等待买家确认收货，WAIT_SELLER_ACT分阶段等待卖家操作，WAIT_BUYER_CONFIRM_ACTION分阶段等待买家确认卖家操作，WAIT_SELLER_PUSH分阶段等待卖家推进，WAIT_LOGISTICS_TAKE_IN等待物流公司揽件COD，WAIT_BUYER_SIGN等待买家签收COD，SIGN_IN_SUCCESS买家已签收COD，SIGN_IN_FAILED签收失败COD     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $refundStatus;
    
        /**
    * @return 退款状态。WAIT_SELLER_AGREE等待卖家同意退款协议，REFUND_SUCCESS退款成功，REFUND_CLOSED退款关闭，WAIT_BUYER_MODIFY等待买家修改，WAIT_BUYER_SEND等待买家退货，WAIT_SELLER_RECEIVE等待卖家确认收货
    */
        public function getRefundStatus() {
        return $this->refundStatus;
    }
    
    /**
     * 设置退款状态。WAIT_SELLER_AGREE等待卖家同意退款协议，REFUND_SUCCESS退款成功，REFUND_CLOSED退款关闭，WAIT_BUYER_MODIFY等待买家修改，WAIT_BUYER_SEND等待买家退货，WAIT_SELLER_RECEIVE等待卖家确认收货     
     * @param String $refundStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundStatus( $refundStatus) {
        $this->refundStatus = $refundStatus;
    }
    
        	
    private $buyerRateStatus;
    
        /**
    * @return 买家评价状态。5未评价，4已评价
    */
        public function getBuyerRateStatus() {
        return $this->buyerRateStatus;
    }
    
    /**
     * 设置买家评价状态。5未评价，4已评价     
     * @param Integer $buyerRateStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerRateStatus( $buyerRateStatus) {
        $this->buyerRateStatus = $buyerRateStatus;
    }
    
        	
    private $sellerRateStatus;
    
        /**
    * @return 卖家评价状态。5未评价，4已评价
    */
        public function getSellerRateStatus() {
        return $this->sellerRateStatus;
    }
    
    /**
     * 设置卖家评价状态。5未评价，4已评价     
     * @param Integer $sellerRateStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerRateStatus( $sellerRateStatus) {
        $this->sellerRateStatus = $sellerRateStatus;
    }
    
        	
    private $gmtPayment;
    
        /**
    * @return 支付时间
    */
        public function getGmtPayment() {
        return $this->gmtPayment;
    }
    
    /**
     * 设置支付时间     
     * @param Date $gmtPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPayment( $gmtPayment) {
        $this->gmtPayment = $gmtPayment;
    }
    
        	
    private $gmtGoodsSend;
    
        /**
    * @return 发货时间
    */
        public function getGmtGoodsSend() {
        return $this->gmtGoodsSend;
    }
    
    /**
     * 设置发货时间     
     * @param Date $gmtGoodsSend     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtGoodsSend( $gmtGoodsSend) {
        $this->gmtGoodsSend = $gmtGoodsSend;
    }
    
        	
    private $gmtConfirmed;
    
        /**
    * @return 确认时间
    */
        public function getGmtConfirmed() {
        return $this->gmtConfirmed;
    }
    
    /**
     * 设置确认时间     
     * @param Date $gmtConfirmed     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtConfirmed( $gmtConfirmed) {
        $this->gmtConfirmed = $gmtConfirmed;
    }
    
        	
    private $discount;
    
        /**
    * @return 折扣，单位分
    */
        public function getDiscount() {
        return $this->discount;
    }
    
    /**
     * 设置折扣，单位分     
     * @param Long $discount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscount( $discount) {
        $this->discount = $discount;
    }
    
        	
    private $carriage;
    
        /**
    * @return 运费，单位分
    */
        public function getCarriage() {
        return $this->carriage;
    }
    
    /**
     * 设置运费，单位分     
     * @param Long $carriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCarriage( $carriage) {
        $this->carriage = $carriage;
    }
    
        	
    private $refundPayment;
    
        /**
    * @return 退款金额，单位分
    */
        public function getRefundPayment() {
        return $this->refundPayment;
    }
    
    /**
     * 设置退款金额，单位分     
     * @param Long $refundPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundPayment( $refundPayment) {
        $this->refundPayment = $refundPayment;
    }
    
        	
    private $sumPayment;
    
        /**
    * @return 付款总金额，单位（分）订单需要支付的总金额=产品总金额+运费-折扣金额-抵价券（如果有的话），如果是COD订单，不包括COD服务费
    */
        public function getSumPayment() {
        return $this->sumPayment;
    }
    
    /**
     * 设置付款总金额，单位（分）订单需要支付的总金额=产品总金额+运费-折扣金额-抵价券（如果有的话），如果是COD订单，不包括COD服务费     
     * @param Long $sumPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumPayment( $sumPayment) {
        $this->sumPayment = $sumPayment;
    }
    
        	
    private $closeReason;
    
        /**
    * @return 关闭原因
    */
        public function getCloseReason() {
        return $this->closeReason;
    }
    
    /**
     * 设置关闭原因     
     * @param String $closeReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCloseReason( $closeReason) {
        $this->closeReason = $closeReason;
    }
    
        	
    private $buyerFeedback;
    
        /**
    * @return 买家留言
    */
        public function getBuyerFeedback() {
        return $this->buyerFeedback;
    }
    
    /**
     * 设置买家留言     
     * @param String $buyerFeedback     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerFeedback( $buyerFeedback) {
        $this->buyerFeedback = $buyerFeedback;
    }
    
        	
    private $toPost;
    
        /**
    * @return 收货人邮编
    */
        public function getToPost() {
        return $this->toPost;
    }
    
    /**
     * 设置收货人邮编     
     * @param String $toPost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToPost( $toPost) {
        $this->toPost = $toPost;
    }
    
        	
    private $toArea;
    
        /**
    * @return 收货人地址
    */
        public function getToArea() {
        return $this->toArea;
    }
    
    /**
     * 设置收货人地址     
     * @param String $toArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToArea( $toArea) {
        $this->toArea = $toArea;
    }
    
        	
    private $alipayTradeId;
    
        /**
    * @return 支付宝交易号
    */
        public function getAlipayTradeId() {
        return $this->alipayTradeId;
    }
    
    /**
     * 设置支付宝交易号     
     * @param String $alipayTradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayTradeId( $alipayTradeId) {
        $this->alipayTradeId = $alipayTradeId;
    }
    
        	
    private $sellerCompanyName;
    
        /**
    * @return 卖家公司名称
    */
        public function getSellerCompanyName() {
        return $this->sellerCompanyName;
    }
    
    /**
     * 设置卖家公司名称     
     * @param String $sellerCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerCompanyName( $sellerCompanyName) {
        $this->sellerCompanyName = $sellerCompanyName;
    }
    
        	
    private $sellerEmail;
    
        /**
    * @return 卖家email
    */
        public function getSellerEmail() {
        return $this->sellerEmail;
    }
    
    /**
     * 设置卖家email     
     * @param String $sellerEmail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerEmail( $sellerEmail) {
        $this->sellerEmail = $sellerEmail;
    }
    
        	
    private $buyerCompanyName;
    
        /**
    * @return 买家公司名称
    */
        public function getBuyerCompanyName() {
        return $this->buyerCompanyName;
    }
    
    /**
     * 设置买家公司名称     
     * @param String $buyerCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerCompanyName( $buyerCompanyName) {
        $this->buyerCompanyName = $buyerCompanyName;
    }
    
        	
    private $buyerEmail;
    
        /**
    * @return 买家email
    */
        public function getBuyerEmail() {
        return $this->buyerEmail;
    }
    
    /**
     * 设置买家email     
     * @param String $buyerEmail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerEmail( $buyerEmail) {
        $this->buyerEmail = $buyerEmail;
    }
    
        	
    private $sumProductPayment;
    
        /**
    * @return 总货品金额
    */
        public function getSumProductPayment() {
        return $this->sumProductPayment;
    }
    
    /**
     * 设置总货品金额     
     * @param Long $sumProductPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumProductPayment( $sumProductPayment) {
        $this->sumProductPayment = $sumProductPayment;
    }
    
        	
    private $orderEntries;
    
        /**
    * @return 订单明细
    */
        public function getOrderEntries() {
        return $this->orderEntries;
    }
    
    /**
     * 设置订单明细     
     * @param List $orderEntries     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderEntries(array $orderEntries) {
        $this->orderEntries = $orderEntries;
    }
    
        	
    private $logisticsOrderList;
    
        /**
    * @return 物流单列表
    */
        public function getLogisticsOrderList() {
        return $this->logisticsOrderList;
    }
    
    /**
     * 设置物流单列表     
     * @param array include @see LogisticsOrderModel[] $logisticsOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsOrderList(LogisticsOrderModel $logisticsOrderList) {
        $this->logisticsOrderList = $logisticsOrderList;
    }
    
        	
    private $orderMemoList;
    
        /**
    * @return 备注列表
    */
        public function getOrderMemoList() {
        return $this->orderMemoList;
    }
    
    /**
     * 设置备注列表     
     * @param array include @see OrderMemoModel[] $orderMemoList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderMemoList(OrderMemoModel $orderMemoList) {
        $this->orderMemoList = $orderMemoList;
    }
    
        	
    private $orderInvoiceModel;
    
        /**
    * @return 发票信息
    */
        public function getOrderInvoiceModel() {
        return $this->orderInvoiceModel;
    }
    
    /**
     * 设置发票信息     
     * @param OrderInvoiceModel $orderInvoiceModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderInvoiceModel(OrderInvoiceModel $orderInvoiceModel) {
        $this->orderInvoiceModel = $orderInvoiceModel;
    }
    
        	
    private $stepOrderList;
    
        /**
    * @return 子支付单
    */
        public function getStepOrderList() {
        return $this->stepOrderList;
    }
    
    /**
     * 设置子支付单     
     * @param List $stepOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepOrderList(array $stepOrderList) {
        $this->stepOrderList = $stepOrderList;
    }
    
        	
    private $stepPayAll;
    
        /**
    * @return 是否一次性付款
    */
        public function getStepPayAll() {
        return $this->stepPayAll;
    }
    
    /**
     * 设置是否一次性付款     
     * @param Boolean $stepPayAll     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepPayAll( $stepPayAll) {
        $this->stepPayAll = $stepPayAll;
    }
    
        	
    private $payStatus;
    
        /**
    * @return 支付状态。1:等待买家付款，2:已付款，4:交易关闭，6:交易成功，8:交易被系统关闭
    */
        public function getPayStatus() {
        return $this->payStatus;
    }
    
    /**
     * 设置支付状态。1:等待买家付款，2:已付款，4:交易关闭，6:交易成功，8:交易被系统关闭     
     * @param Integer $payStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayStatus( $payStatus) {
        $this->payStatus = $payStatus;
    }
    
        	
    private $logisticsStatus;
    
        /**
    * @return 物流状态。8:还未创建物流订单；1:未发货；2:已发货；3:已收货，交易成功；4:已经退货，交易失败；5:部分发货，交易成功
    */
        public function getLogisticsStatus() {
        return $this->logisticsStatus;
    }
    
    /**
     * 设置物流状态。8:还未创建物流订单；1:未发货；2:已发货；3:已收货，交易成功；4:已经退货，交易失败；5:部分发货，交易成功     
     * @param Integer $logisticsStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->logisticsStatus = $logisticsStatus;
    }
    
        	
    private $stepAgreementPath;
    
        /**
    * @return 分阶段协议地址
    */
        public function getStepAgreementPath() {
        return $this->stepAgreementPath;
    }
    
    /**
     * 设置分阶段协议地址     
     * @param String $stepAgreementPath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepAgreementPath( $stepAgreementPath) {
        $this->stepAgreementPath = $stepAgreementPath;
    }
    
        	
    private $codStatus;
    
        /**
    * @return cod状态。0:初始值，20:接单，-20:不接单，2:接单超时，30:揽收成功，-30:揽收失败，3:揽收超时，100:签收成功，-100:签收失败，10:订单等候发送给物流公司，-1:用户取消物流订单
    */
        public function getCodStatus() {
        return $this->codStatus;
    }
    
    /**
     * 设置cod状态。0:初始值，20:接单，-20:不接单，2:接单超时，30:揽收成功，-30:揽收失败，3:揽收超时，100:签收成功，-100:签收失败，10:订单等候发送给物流公司，-1:用户取消物流订单     
     * @param Integer $codStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodStatus( $codStatus) {
        $this->codStatus = $codStatus;
    }
    
        	
    private $codAudit;
    
        /**
    * @return 是否COD订单并且清算成功
    */
        public function getCodAudit() {
        return $this->codAudit;
    }
    
    /**
     * 设置是否COD订单并且清算成功     
     * @param Boolean $codAudit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodAudit( $codAudit) {
        $this->codAudit = $codAudit;
    }
    
        	
    private $codFee;
    
        /**
    * @return cod服务费
    */
        public function getCodFee() {
        return $this->codFee;
    }
    
    /**
     * 设置cod服务费     
     * @param Long $codFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodFee( $codFee) {
        $this->codFee = $codFee;
    }
    
        	
    private $codBuyerFee;
    
        /**
    * @return 买家承担的服务费
    */
        public function getCodBuyerFee() {
        return $this->codBuyerFee;
    }
    
    /**
     * 设置买家承担的服务费     
     * @param Long $codBuyerFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodBuyerFee( $codBuyerFee) {
        $this->codBuyerFee = $codBuyerFee;
    }
    
        	
    private $codSellerFee;
    
        /**
    * @return 卖家承担的服务费
    */
        public function getCodSellerFee() {
        return $this->codSellerFee;
    }
    
    /**
     * 设置卖家承担的服务费     
     * @param Long $codSellerFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodSellerFee( $codSellerFee) {
        $this->codSellerFee = $codSellerFee;
    }
    
        	
    private $codActualFee;
    
        /**
    * @return cod交易的实付款（买家实际支付给物流的费用）
    */
        public function getCodActualFee() {
        return $this->codActualFee;
    }
    
    /**
     * 设置cod交易的实付款（买家实际支付给物流的费用）     
     * @param Long $codActualFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodActualFee( $codActualFee) {
        $this->codActualFee = $codActualFee;
    }
    
        	
    private $gmtSign;
    
        /**
    * @return 买家签收时间(COD)
    */
        public function getGmtSign() {
        return $this->gmtSign;
    }
    
    /**
     * 设置买家签收时间(COD)     
     * @param Date $gmtSign     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtSign( $gmtSign) {
        $this->gmtSign = $gmtSign;
    }
    
        	
    private $codFeeDividend;
    
        /**
    * @return cod三家分润
    */
        public function getCodFeeDividend() {
        return $this->codFeeDividend;
    }
    
    /**
     * 设置cod三家分润     
     * @param String $codFeeDividend     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodFeeDividend( $codFeeDividend) {
        $this->codFeeDividend = $codFeeDividend;
    }
    
        	
    private $codInitFee;
    
        /**
    * @return cod服务费初始值
    */
        public function getCodInitFee() {
        return $this->codInitFee;
    }
    
    /**
     * 设置cod服务费初始值     
     * @param Long $codInitFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodInitFee( $codInitFee) {
        $this->codInitFee = $codInitFee;
    }
    
        	
    private $codBuyerInitFee;
    
        /**
    * @return 买家承担的服务费初始值
    */
        public function getCodBuyerInitFee() {
        return $this->codBuyerInitFee;
    }
    
    /**
     * 设置买家承担的服务费初始值     
     * @param Long $codBuyerInitFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodBuyerInitFee( $codBuyerInitFee) {
        $this->codBuyerInitFee = $codBuyerInitFee;
    }
    
        	
    private $buyerOrderMemo;
    
        /**
    * @return 买家备注
    */
        public function getBuyerOrderMemo() {
        return $this->buyerOrderMemo;
    }
    
    /**
     * 设置买家备注     
     * @param OrderMemoModel $buyerOrderMemo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerOrderMemo(OrderMemoModel $buyerOrderMemo) {
        $this->buyerOrderMemo = $buyerOrderMemo;
    }
    
        	
    private $sellerOrderMemo;
    
        /**
    * @return 卖家备注
    */
        public function getSellerOrderMemo() {
        return $this->sellerOrderMemo;
    }
    
    /**
     * 设置卖家备注     
     * @param OrderMemoModel $sellerOrderMemo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerOrderMemo(OrderMemoModel $sellerOrderMemo) {
        $this->sellerOrderMemo = $sellerOrderMemo;
    }
    
        	
    private $id;
    
        /**
    * @return 订单号
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置订单号     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 买家id
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置买家id     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $sellerMemberId;
    
        /**
    * @return 卖家id
    */
        public function getSellerMemberId() {
        return $this->sellerMemberId;
    }
    
    /**
     * 设置卖家id     
     * @param String $sellerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sellerMemberId = $sellerMemberId;
    }
    
        	
    private $sellerUserId;
    
        /**
    * @return 卖家数字id
    */
        public function getSellerUserId() {
        return $this->sellerUserId;
    }
    
    /**
     * 设置卖家数字id     
     * @param Long $sellerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerUserId( $sellerUserId) {
        $this->sellerUserId = $sellerUserId;
    }
    
        	
    private $buyerUserId;
    
        /**
    * @return 买家数字id
    */
        public function getBuyerUserId() {
        return $this->buyerUserId;
    }
    
    /**
     * 设置买家数字id     
     * @param Long $buyerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }
    
        	
    private $buyerAlipayId;
    
        /**
    * @return 买家支付宝id
    */
        public function getBuyerAlipayId() {
        return $this->buyerAlipayId;
    }
    
    /**
     * 设置买家支付宝id     
     * @param String $buyerAlipayId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerAlipayId( $buyerAlipayId) {
        $this->buyerAlipayId = $buyerAlipayId;
    }
    
        	
    private $sellerAlipayId;
    
        /**
    * @return 卖家支付宝id
    */
        public function getSellerAlipayId() {
        return $this->sellerAlipayId;
    }
    
    /**
     * 设置卖家支付宝id     
     * @param String $sellerAlipayId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerAlipayId( $sellerAlipayId) {
        $this->sellerAlipayId = $sellerAlipayId;
    }
    
        	
    private $sellerLoginId;
    
        /**
    * @return 卖家登录id
    */
        public function getSellerLoginId() {
        return $this->sellerLoginId;
    }
    
    /**
     * 设置卖家登录id     
     * @param String $sellerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerLoginId( $sellerLoginId) {
        $this->sellerLoginId = $sellerLoginId;
    }
    
        	
    private $buyerLoginId;
    
        /**
    * @return 买家登录id
    */
        public function getBuyerLoginId() {
        return $this->buyerLoginId;
    }
    
    /**
     * 设置买家登录id     
     * @param String $buyerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->buyerLoginId = $buyerLoginId;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 交易类型。UNIFY统一交易流程，STEPPAY分阶段交易，COD货到付款交易，CERTIFICATE信用凭证支付交易（注：该字段已不再维护，替换为tradeTypeStr，请新业务使用新字段）
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置交易类型。UNIFY统一交易流程，STEPPAY分阶段交易，COD货到付款交易，CERTIFICATE信用凭证支付交易（注：该字段已不再维护，替换为tradeTypeStr，请新业务使用新字段）     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $tradeTypeStr;
    
        /**
    * @return 交易类型string。6统一交易流程，7分阶段交易，8货到付款交易，9信用凭证支付交易，10帐期支付交易
    */
        public function getTradeTypeStr() {
        return $this->tradeTypeStr;
    }
    
    /**
     * 设置交易类型string。6统一交易流程，7分阶段交易，8货到付款交易，9信用凭证支付交易，10帐期支付交易     
     * @param String $tradeTypeStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeTypeStr( $tradeTypeStr) {
        $this->tradeTypeStr = $tradeTypeStr;
    }
    
        	
    private $bizType;
    
        /**
    * @return 订单的常量集合: BIZ_TYPE_WEIGONG(微供)
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置订单的常量集合: BIZ_TYPE_WEIGONG(微供)     
     * @param String $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
        	
    private $relatedCode;
    
        /**
    * @return 订单关联码(如属于哪个活动等)
    */
        public function getRelatedCode() {
        return $this->relatedCode;
    }
    
    /**
     * 设置订单关联码(如属于哪个活动等)     
     * @param String $relatedCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelatedCode( $relatedCode) {
        $this->relatedCode = $relatedCode;
    }
    
        	
    private $sellerPhone;
    
        /**
    * @return 卖家电话
    */
        public function getSellerPhone() {
        return $this->sellerPhone;
    }
    
    /**
     * 设置卖家电话     
     * @param String $sellerPhone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerPhone( $sellerPhone) {
        $this->sellerPhone = $sellerPhone;
    }
    
        	
    private $buyerPhone;
    
        /**
    * @return 买家电话
    */
        public function getBuyerPhone() {
        return $this->buyerPhone;
    }
    
    /**
     * 设置买家电话     
     * @param String $buyerPhone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerPhone( $buyerPhone) {
        $this->buyerPhone = $buyerPhone;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundStatus", $this->stdResult )) {
    				$this->refundStatus = $this->stdResult->{"refundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerRateStatus", $this->stdResult )) {
    				$this->buyerRateStatus = $this->stdResult->{"buyerRateStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerRateStatus", $this->stdResult )) {
    				$this->sellerRateStatus = $this->stdResult->{"sellerRateStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtPayment", $this->stdResult )) {
    				$this->gmtPayment = $this->stdResult->{"gmtPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtGoodsSend", $this->stdResult )) {
    				$this->gmtGoodsSend = $this->stdResult->{"gmtGoodsSend"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtConfirmed", $this->stdResult )) {
    				$this->gmtConfirmed = $this->stdResult->{"gmtConfirmed"};
    			}
    			    		    				    			    			if (array_key_exists ( "discount", $this->stdResult )) {
    				$this->discount = $this->stdResult->{"discount"};
    			}
    			    		    				    			    			if (array_key_exists ( "carriage", $this->stdResult )) {
    				$this->carriage = $this->stdResult->{"carriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundPayment", $this->stdResult )) {
    				$this->refundPayment = $this->stdResult->{"refundPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumPayment", $this->stdResult )) {
    				$this->sumPayment = $this->stdResult->{"sumPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "closeReason", $this->stdResult )) {
    				$this->closeReason = $this->stdResult->{"closeReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerFeedback", $this->stdResult )) {
    				$this->buyerFeedback = $this->stdResult->{"buyerFeedback"};
    			}
    			    		    				    			    			if (array_key_exists ( "toPost", $this->stdResult )) {
    				$this->toPost = $this->stdResult->{"toPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "toArea", $this->stdResult )) {
    				$this->toArea = $this->stdResult->{"toArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayTradeId", $this->stdResult )) {
    				$this->alipayTradeId = $this->stdResult->{"alipayTradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerCompanyName", $this->stdResult )) {
    				$this->sellerCompanyName = $this->stdResult->{"sellerCompanyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerEmail", $this->stdResult )) {
    				$this->sellerEmail = $this->stdResult->{"sellerEmail"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerCompanyName", $this->stdResult )) {
    				$this->buyerCompanyName = $this->stdResult->{"buyerCompanyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerEmail", $this->stdResult )) {
    				$this->buyerEmail = $this->stdResult->{"buyerEmail"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumProductPayment", $this->stdResult )) {
    				$this->sumProductPayment = $this->stdResult->{"sumProductPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderEntries", $this->stdResult )) {
    				$this->orderEntries = $this->stdResult->{"orderEntries"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsOrderList", $this->stdResult )) {
    			$logisticsOrderListResult=$this->stdResult->{"logisticsOrderList"};
    				$object = json_decode ( json_encode ( $logisticsOrderListResult ), true );
					$this->logisticsOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$LogisticsOrderModelResult=new LogisticsOrderModel();
						$LogisticsOrderModelResult->setArrayResult($arrayobject );
						$this->logisticsOrderList [$i] = $LogisticsOrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderMemoList", $this->stdResult )) {
    			$orderMemoListResult=$this->stdResult->{"orderMemoList"};
    				$object = json_decode ( json_encode ( $orderMemoListResult ), true );
					$this->orderMemoList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OrderMemoModelResult=new OrderMemoModel();
						$OrderMemoModelResult->setArrayResult($arrayobject );
						$this->orderMemoList [$i] = $OrderMemoModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderInvoiceModel", $this->stdResult )) {
    				$orderInvoiceModelResult=$this->stdResult->{"orderInvoiceModel"};
    				$this->orderInvoiceModel = new OrderInvoiceModel();
    				$this->orderInvoiceModel->setStdResult ( $orderInvoiceModelResult);
    			}
    			    		    				    			    			if (array_key_exists ( "stepOrderList", $this->stdResult )) {
    				$this->stepOrderList = $this->stdResult->{"stepOrderList"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepPayAll", $this->stdResult )) {
    				$this->stepPayAll = $this->stdResult->{"stepPayAll"};
    			}
    			    		    				    			    			if (array_key_exists ( "payStatus", $this->stdResult )) {
    				$this->payStatus = $this->stdResult->{"payStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
    				$this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepAgreementPath", $this->stdResult )) {
    				$this->stepAgreementPath = $this->stdResult->{"stepAgreementPath"};
    			}
    			    		    				    			    			if (array_key_exists ( "codStatus", $this->stdResult )) {
    				$this->codStatus = $this->stdResult->{"codStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "codAudit", $this->stdResult )) {
    				$this->codAudit = $this->stdResult->{"codAudit"};
    			}
    			    		    				    			    			if (array_key_exists ( "codFee", $this->stdResult )) {
    				$this->codFee = $this->stdResult->{"codFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codBuyerFee", $this->stdResult )) {
    				$this->codBuyerFee = $this->stdResult->{"codBuyerFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codSellerFee", $this->stdResult )) {
    				$this->codSellerFee = $this->stdResult->{"codSellerFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codActualFee", $this->stdResult )) {
    				$this->codActualFee = $this->stdResult->{"codActualFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtSign", $this->stdResult )) {
    				$this->gmtSign = $this->stdResult->{"gmtSign"};
    			}
    			    		    				    			    			if (array_key_exists ( "codFeeDividend", $this->stdResult )) {
    				$this->codFeeDividend = $this->stdResult->{"codFeeDividend"};
    			}
    			    		    				    			    			if (array_key_exists ( "codInitFee", $this->stdResult )) {
    				$this->codInitFee = $this->stdResult->{"codInitFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codBuyerInitFee", $this->stdResult )) {
    				$this->codBuyerInitFee = $this->stdResult->{"codBuyerInitFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerOrderMemo", $this->stdResult )) {
    				$buyerOrderMemoResult=$this->stdResult->{"buyerOrderMemo"};
    				$this->buyerOrderMemo = new OrderMemoModel();
    				$this->buyerOrderMemo->setStdResult ( $buyerOrderMemoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "sellerOrderMemo", $this->stdResult )) {
    				$sellerOrderMemoResult=$this->stdResult->{"sellerOrderMemo"};
    				$this->sellerOrderMemo = new OrderMemoModel();
    				$this->sellerOrderMemo->setStdResult ( $sellerOrderMemoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerMemberId", $this->stdResult )) {
    				$this->sellerMemberId = $this->stdResult->{"sellerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerUserId", $this->stdResult )) {
    				$this->sellerUserId = $this->stdResult->{"sellerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerAlipayId", $this->stdResult )) {
    				$this->buyerAlipayId = $this->stdResult->{"buyerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerAlipayId", $this->stdResult )) {
    				$this->sellerAlipayId = $this->stdResult->{"sellerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerLoginId", $this->stdResult )) {
    				$this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerLoginId", $this->stdResult )) {
    				$this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeTypeStr", $this->stdResult )) {
    				$this->tradeTypeStr = $this->stdResult->{"tradeTypeStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "relatedCode", $this->stdResult )) {
    				$this->relatedCode = $this->stdResult->{"relatedCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerPhone", $this->stdResult )) {
    				$this->sellerPhone = $this->stdResult->{"sellerPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerPhone", $this->stdResult )) {
    				$this->buyerPhone = $this->stdResult->{"buyerPhone"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundStatus", $this->arrayResult )) {
    			$this->refundStatus = $arrayResult['refundStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerRateStatus", $this->arrayResult )) {
    			$this->buyerRateStatus = $arrayResult['buyerRateStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerRateStatus", $this->arrayResult )) {
    			$this->sellerRateStatus = $arrayResult['sellerRateStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtPayment", $this->arrayResult )) {
    			$this->gmtPayment = $arrayResult['gmtPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtGoodsSend", $this->arrayResult )) {
    			$this->gmtGoodsSend = $arrayResult['gmtGoodsSend'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtConfirmed", $this->arrayResult )) {
    			$this->gmtConfirmed = $arrayResult['gmtConfirmed'];
    			}
    		    	    			    		    			if (array_key_exists ( "discount", $this->arrayResult )) {
    			$this->discount = $arrayResult['discount'];
    			}
    		    	    			    		    			if (array_key_exists ( "carriage", $this->arrayResult )) {
    			$this->carriage = $arrayResult['carriage'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundPayment", $this->arrayResult )) {
    			$this->refundPayment = $arrayResult['refundPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumPayment", $this->arrayResult )) {
    			$this->sumPayment = $arrayResult['sumPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "closeReason", $this->arrayResult )) {
    			$this->closeReason = $arrayResult['closeReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerFeedback", $this->arrayResult )) {
    			$this->buyerFeedback = $arrayResult['buyerFeedback'];
    			}
    		    	    			    		    			if (array_key_exists ( "toPost", $this->arrayResult )) {
    			$this->toPost = $arrayResult['toPost'];
    			}
    		    	    			    		    			if (array_key_exists ( "toArea", $this->arrayResult )) {
    			$this->toArea = $arrayResult['toArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayTradeId", $this->arrayResult )) {
    			$this->alipayTradeId = $arrayResult['alipayTradeId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerCompanyName", $this->arrayResult )) {
    			$this->sellerCompanyName = $arrayResult['sellerCompanyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerEmail", $this->arrayResult )) {
    			$this->sellerEmail = $arrayResult['sellerEmail'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerCompanyName", $this->arrayResult )) {
    			$this->buyerCompanyName = $arrayResult['buyerCompanyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerEmail", $this->arrayResult )) {
    			$this->buyerEmail = $arrayResult['buyerEmail'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumProductPayment", $this->arrayResult )) {
    			$this->sumProductPayment = $arrayResult['sumProductPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderEntries", $this->arrayResult )) {
    			$this->orderEntries = $arrayResult['orderEntries'];
    			}
    		    	    			    		    		if (array_key_exists ( "logisticsOrderList", $this->arrayResult )) {
    		$logisticsOrderListResult=$arrayResult['logisticsOrderList'];
    			$this->logisticsOrderList = new LogisticsOrderModel();
    			$this->logisticsOrderList->setStdResult ( $logisticsOrderListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderMemoList", $this->arrayResult )) {
    		$orderMemoListResult=$arrayResult['orderMemoList'];
    			$this->orderMemoList = new OrderMemoModel();
    			$this->orderMemoList->setStdResult ( $orderMemoListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderInvoiceModel", $this->arrayResult )) {
    		$orderInvoiceModelResult=$arrayResult['orderInvoiceModel'];
    			    			$this->orderInvoiceModel = new OrderInvoiceModel();
    			    			$this->orderInvoiceModel->setStdResult ( $orderInvoiceModelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "stepOrderList", $this->arrayResult )) {
    			$this->stepOrderList = $arrayResult['stepOrderList'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepPayAll", $this->arrayResult )) {
    			$this->stepPayAll = $arrayResult['stepPayAll'];
    			}
    		    	    			    		    			if (array_key_exists ( "payStatus", $this->arrayResult )) {
    			$this->payStatus = $arrayResult['payStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
    			$this->logisticsStatus = $arrayResult['logisticsStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepAgreementPath", $this->arrayResult )) {
    			$this->stepAgreementPath = $arrayResult['stepAgreementPath'];
    			}
    		    	    			    		    			if (array_key_exists ( "codStatus", $this->arrayResult )) {
    			$this->codStatus = $arrayResult['codStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "codAudit", $this->arrayResult )) {
    			$this->codAudit = $arrayResult['codAudit'];
    			}
    		    	    			    		    			if (array_key_exists ( "codFee", $this->arrayResult )) {
    			$this->codFee = $arrayResult['codFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codBuyerFee", $this->arrayResult )) {
    			$this->codBuyerFee = $arrayResult['codBuyerFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codSellerFee", $this->arrayResult )) {
    			$this->codSellerFee = $arrayResult['codSellerFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codActualFee", $this->arrayResult )) {
    			$this->codActualFee = $arrayResult['codActualFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtSign", $this->arrayResult )) {
    			$this->gmtSign = $arrayResult['gmtSign'];
    			}
    		    	    			    		    			if (array_key_exists ( "codFeeDividend", $this->arrayResult )) {
    			$this->codFeeDividend = $arrayResult['codFeeDividend'];
    			}
    		    	    			    		    			if (array_key_exists ( "codInitFee", $this->arrayResult )) {
    			$this->codInitFee = $arrayResult['codInitFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codBuyerInitFee", $this->arrayResult )) {
    			$this->codBuyerInitFee = $arrayResult['codBuyerInitFee'];
    			}
    		    	    			    		    		if (array_key_exists ( "buyerOrderMemo", $this->arrayResult )) {
    		$buyerOrderMemoResult=$arrayResult['buyerOrderMemo'];
    			    			$this->buyerOrderMemo = new OrderMemoModel();
    			    			$this->buyerOrderMemo->setStdResult ( $buyerOrderMemoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "sellerOrderMemo", $this->arrayResult )) {
    		$sellerOrderMemoResult=$arrayResult['sellerOrderMemo'];
    			    			$this->sellerOrderMemo = new OrderMemoModel();
    			    			$this->sellerOrderMemo->setStdResult ( $sellerOrderMemoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['buyerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerMemberId", $this->arrayResult )) {
    			$this->sellerMemberId = $arrayResult['sellerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerUserId", $this->arrayResult )) {
    			$this->sellerUserId = $arrayResult['sellerUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['buyerUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerAlipayId", $this->arrayResult )) {
    			$this->buyerAlipayId = $arrayResult['buyerAlipayId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerAlipayId", $this->arrayResult )) {
    			$this->sellerAlipayId = $arrayResult['sellerAlipayId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerLoginId", $this->arrayResult )) {
    			$this->sellerLoginId = $arrayResult['sellerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerLoginId", $this->arrayResult )) {
    			$this->buyerLoginId = $arrayResult['buyerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['tradeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeTypeStr", $this->arrayResult )) {
    			$this->tradeTypeStr = $arrayResult['tradeTypeStr'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    			    		    			if (array_key_exists ( "relatedCode", $this->arrayResult )) {
    			$this->relatedCode = $arrayResult['relatedCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerPhone", $this->arrayResult )) {
    			$this->sellerPhone = $arrayResult['sellerPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerPhone", $this->arrayResult )) {
    			$this->buyerPhone = $arrayResult['buyerPhone'];
    			}
    		    	    		}
 
   
}
?>