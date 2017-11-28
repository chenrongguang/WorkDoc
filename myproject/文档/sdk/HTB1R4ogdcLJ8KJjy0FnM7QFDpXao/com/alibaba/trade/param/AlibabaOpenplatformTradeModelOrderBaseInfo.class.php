<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeTradeContact.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeTradeContact.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeOrderReceiverInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeStepOrderModel.class.php');

class AlibabaOpenplatformTradeModelOrderBaseInfo extends SDKDomain {

       	
    private $allDeliveredTime;
    
        /**
    * @return 完全发货时间
    */
        public function getAllDeliveredTime() {
        return $this->allDeliveredTime;
    }
    
    /**
     * 设置完全发货时间     
     * @param Date $allDeliveredTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAllDeliveredTime( $allDeliveredTime) {
        $this->allDeliveredTime = $allDeliveredTime;
    }
    
        	
    private $businessType;
    
        /**
    * @return 业务类型。国际站：ta(信保),wholesale(在线批发)。
中文站：普通订单类型 = "cn";
大额批发订单类型 = "ws";
普通拿样订单类型 = "yp";
一分钱拿样订单类型 = "yf";
倒批(限时折扣)订单类型 = "fs";
加工定制订单类型 = "cz";
协议采购订单类型 = "ag";
伙拼订单类型 = "hp";
供销订单类型 = "supply";
淘工厂订单 = "factory";
快订下单  = "quick";
享拼订单  = "xiangpin";
当面付 = "f2f";
存样服务 = "cyfw";
代销订单 = "sp";
微供订单 = "wg";零售通 = "lst";
    */
        public function getBusinessType() {
        return $this->businessType;
    }
    
    /**
     * 设置业务类型。国际站：ta(信保),wholesale(在线批发)。
中文站：普通订单类型 = "cn";
大额批发订单类型 = "ws";
普通拿样订单类型 = "yp";
一分钱拿样订单类型 = "yf";
倒批(限时折扣)订单类型 = "fs";
加工定制订单类型 = "cz";
协议采购订单类型 = "ag";
伙拼订单类型 = "hp";
供销订单类型 = "supply";
淘工厂订单 = "factory";
快订下单  = "quick";
享拼订单  = "xiangpin";
当面付 = "f2f";
存样服务 = "cyfw";
代销订单 = "sp";
微供订单 = "wg";零售通 = "lst";     
     * @param String $businessType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBusinessType( $businessType) {
        $this->businessType = $businessType;
    }
    
        	
    private $buyerID;
    
        /**
    * @return 买家主账号id
    */
        public function getBuyerID() {
        return $this->buyerID;
    }
    
    /**
     * 设置买家主账号id     
     * @param String $buyerID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerID( $buyerID) {
        $this->buyerID = $buyerID;
    }
    
        	
    private $buyerMemo;
    
        /**
    * @return 买家备忘信息
    */
        public function getBuyerMemo() {
        return $this->buyerMemo;
    }
    
    /**
     * 设置买家备忘信息     
     * @param String $buyerMemo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemo( $buyerMemo) {
        $this->buyerMemo = $buyerMemo;
    }
    
        	
    private $buyerSubID;
    
        /**
    * @return 买家子账号id，1688无此内容
    */
        public function getBuyerSubID() {
        return $this->buyerSubID;
    }
    
    /**
     * 设置买家子账号id，1688无此内容     
     * @param Long $buyerSubID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerSubID( $buyerSubID) {
        $this->buyerSubID = $buyerSubID;
    }
    
        	
    private $completeTime;
    
        /**
    * @return 完成时间
    */
        public function getCompleteTime() {
        return $this->completeTime;
    }
    
    /**
     * 设置完成时间     
     * @param Date $completeTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompleteTime( $completeTime) {
        $this->completeTime = $completeTime;
    }
    
        	
    private $createTime;
    
        /**
    * @return 创建时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置创建时间     
     * @param Date $createTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
        	
    private $currency;
    
        /**
    * @return 币种，币种，整个交易单使用同一个币种。值范围：USD,RMB,HKD,GBP,CAD,AUD,JPY,KRW,EUR
    */
        public function getCurrency() {
        return $this->currency;
    }
    
    /**
     * 设置币种，币种，整个交易单使用同一个币种。值范围：USD,RMB,HKD,GBP,CAD,AUD,JPY,KRW,EUR     
     * @param String $currency     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrency( $currency) {
        $this->currency = $currency;
    }
    
        	
    private $id;
    
        /**
    * @return 交易id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置交易id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $modifyTime;
    
        /**
    * @return 修改时间
    */
        public function getModifyTime() {
        return $this->modifyTime;
    }
    
    /**
     * 设置修改时间     
     * @param Date $modifyTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifyTime( $modifyTime) {
        $this->modifyTime = $modifyTime;
    }
    
        	
    private $payTime;
    
        /**
    * @return 付款时间，如果有多次付款，这里返回的是首次付款时间
    */
        public function getPayTime() {
        return $this->payTime;
    }
    
    /**
     * 设置付款时间，如果有多次付款，这里返回的是首次付款时间     
     * @param Date $payTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayTime( $payTime) {
        $this->payTime = $payTime;
    }
    
        	
    private $receivingTime;
    
        /**
    * @return 收货时间，这里返回的是完全收货时间
    */
        public function getReceivingTime() {
        return $this->receivingTime;
    }
    
    /**
     * 设置收货时间，这里返回的是完全收货时间     
     * @param Date $receivingTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceivingTime( $receivingTime) {
        $this->receivingTime = $receivingTime;
    }
    
        	
    private $refund;
    
        /**
    * @return 退款金额，单位为元
    */
        public function getRefund() {
        return $this->refund;
    }
    
    /**
     * 设置退款金额，单位为元     
     * @param BigDecimal $refund     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefund( $refund) {
        $this->refund = $refund;
    }
    
        	
    private $remark;
    
        /**
    * @return 备注，1688指下单时的备注
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注，1688指下单时的备注     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $sellerID;
    
        /**
    * @return 卖家主账号id
    */
        public function getSellerID() {
        return $this->sellerID;
    }
    
    /**
     * 设置卖家主账号id     
     * @param String $sellerID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerID( $sellerID) {
        $this->sellerID = $sellerID;
    }
    
        	
    private $sellerMemo;
    
        /**
    * @return 卖家备忘信息
    */
        public function getSellerMemo() {
        return $this->sellerMemo;
    }
    
    /**
     * 设置卖家备忘信息     
     * @param String $sellerMemo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerMemo( $sellerMemo) {
        $this->sellerMemo = $sellerMemo;
    }
    
        	
    private $sellerSubID;
    
        /**
    * @return 卖家子账号id，1688无此内容
    */
        public function getSellerSubID() {
        return $this->sellerSubID;
    }
    
    /**
     * 设置卖家子账号id，1688无此内容     
     * @param Long $sellerSubID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerSubID( $sellerSubID) {
        $this->sellerSubID = $sellerSubID;
    }
    
        	
    private $shippingFee;
    
        /**
    * @return 运费，单位为元
    */
        public function getShippingFee() {
        return $this->shippingFee;
    }
    
    /**
     * 设置运费，单位为元     
     * @param BigDecimal $shippingFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShippingFee( $shippingFee) {
        $this->shippingFee = $shippingFee;
    }
    
        	
    private $status;
    
        /**
    * @return 交易状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置交易状态     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $totalAmount;
    
        /**
    * @return 应付款总金额，totalAmount = ∑itemAmount + shippingFee，单位为元
    */
        public function getTotalAmount() {
        return $this->totalAmount;
    }
    
    /**
     * 设置应付款总金额，totalAmount = ∑itemAmount + shippingFee，单位为元     
     * @param BigDecimal $totalAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalAmount( $totalAmount) {
        $this->totalAmount = $totalAmount;
    }
    
        	
    private $buyerRemarkIcon;
    
        /**
    * @return 买家备忘标志
    */
        public function getBuyerRemarkIcon() {
        return $this->buyerRemarkIcon;
    }
    
    /**
     * 设置买家备忘标志     
     * @param String $buyerRemarkIcon     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerRemarkIcon( $buyerRemarkIcon) {
        $this->buyerRemarkIcon = $buyerRemarkIcon;
    }
    
        	
    private $sellerRemarkIcon;
    
        /**
    * @return 卖家备忘标志
    */
        public function getSellerRemarkIcon() {
        return $this->sellerRemarkIcon;
    }
    
    /**
     * 设置卖家备忘标志     
     * @param String $sellerRemarkIcon     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerRemarkIcon( $sellerRemarkIcon) {
        $this->sellerRemarkIcon = $sellerRemarkIcon;
    }
    
        	
    private $discount;
    
        /**
    * @return 折扣信息
    */
        public function getDiscount() {
        return $this->discount;
    }
    
    /**
     * 设置折扣信息     
     * @param Long $discount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscount( $discount) {
        $this->discount = $discount;
    }
    
        	
    private $buyerContact;
    
        /**
    * @return 买家联系人
    */
        public function getBuyerContact() {
        return $this->buyerContact;
    }
    
    /**
     * 设置买家联系人     
     * @param AlibabaTradeTradeContact $buyerContact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerContact(AlibabaTradeTradeContact $buyerContact) {
        $this->buyerContact = $buyerContact;
    }
    
        	
    private $sellerContact;
    
        /**
    * @return 卖家联系人
    */
        public function getSellerContact() {
        return $this->sellerContact;
    }
    
    /**
     * 设置卖家联系人     
     * @param AlibabaTradeTradeContact $sellerContact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerContact(AlibabaTradeTradeContact $sellerContact) {
        $this->sellerContact = $sellerContact;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 1:担保交易
2:预存款交易
3:ETC境外收单交易
4:即时到帐交易
5:保障金安全交易
6:统一交易流程
7:分阶段付款
8.货到付款交易
9.信用凭证支付交易
10.账期支付交易
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置1:担保交易
2:预存款交易
3:ETC境外收单交易
4:即时到帐交易
5:保障金安全交易
6:统一交易流程
7:分阶段付款
8.货到付款交易
9.信用凭证支付交易
10.账期支付交易     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $refundStatus;
    
        /**
    * @return 订单的售中退款状态
    */
        public function getRefundStatus() {
        return $this->refundStatus;
    }
    
    /**
     * 设置订单的售中退款状态     
     * @param String $refundStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundStatus( $refundStatus) {
        $this->refundStatus = $refundStatus;
    }
    
        	
    private $refundStatusForAs;
    
        /**
    * @return 订单的售后退款状态
    */
        public function getRefundStatusForAs() {
        return $this->refundStatusForAs;
    }
    
    /**
     * 设置订单的售后退款状态     
     * @param String $refundStatusForAs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundStatusForAs( $refundStatusForAs) {
        $this->refundStatusForAs = $refundStatusForAs;
    }
    
        	
    private $refundPayment;
    
        /**
    * @return 退款金额
    */
        public function getRefundPayment() {
        return $this->refundPayment;
    }
    
    /**
     * 设置退款金额     
     * @param Long $refundPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundPayment( $refundPayment) {
        $this->refundPayment = $refundPayment;
    }
    
        	
    private $idOfStr;
    
        /**
    * @return 交易id(字符串格式)
    */
        public function getIdOfStr() {
        return $this->idOfStr;
    }
    
    /**
     * 设置交易id(字符串格式)     
     * @param String $idOfStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdOfStr( $idOfStr) {
        $this->idOfStr = $idOfStr;
    }
    
        	
    private $alipayTradeId;
    
        /**
    * @return 外部支付交易Id
    */
        public function getAlipayTradeId() {
        return $this->alipayTradeId;
    }
    
    /**
     * 设置外部支付交易Id     
     * @param String $alipayTradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayTradeId( $alipayTradeId) {
        $this->alipayTradeId = $alipayTradeId;
    }
    
        	
    private $receiverInfo;
    
        /**
    * @return 收件人信息
    */
        public function getReceiverInfo() {
        return $this->receiverInfo;
    }
    
    /**
     * 设置收件人信息     
     * @param AlibabaTradeOrderReceiverInfo $receiverInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiverInfo(AlibabaTradeOrderReceiverInfo $receiverInfo) {
        $this->receiverInfo = $receiverInfo;
    }
    
        	
    private $buyerLoginId;
    
        /**
    * @return 买家loginId，旺旺Id
    */
        public function getBuyerLoginId() {
        return $this->buyerLoginId;
    }
    
    /**
     * 设置买家loginId，旺旺Id     
     * @param String $buyerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->buyerLoginId = $buyerLoginId;
    }
    
        	
    private $sellerLoginId;
    
        /**
    * @return 卖家oginId，旺旺Id
    */
        public function getSellerLoginId() {
        return $this->sellerLoginId;
    }
    
    /**
     * 设置卖家oginId，旺旺Id     
     * @param String $sellerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerLoginId( $sellerLoginId) {
        $this->sellerLoginId = $sellerLoginId;
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
    
        	
    private $confirmedTime;
    
        /**
    * @return 确认时间
    */
        public function getConfirmedTime() {
        return $this->confirmedTime;
    }
    
    /**
     * 设置确认时间     
     * @param Date $confirmedTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConfirmedTime( $confirmedTime) {
        $this->confirmedTime = $confirmedTime;
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
    
        	
    private $sumProductPayment;
    
        /**
    * @return 产品总金额(该订单产品明细表中的产品金额的和)，单位元
    */
        public function getSumProductPayment() {
        return $this->sumProductPayment;
    }
    
    /**
     * 设置产品总金额(该订单产品明细表中的产品金额的和)，单位元     
     * @param BigDecimal $sumProductPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumProductPayment( $sumProductPayment) {
        $this->sumProductPayment = $sumProductPayment;
    }
    
        	
    private $stepOrderList;
    
        /**
    * @return [交易3.0]分阶段交易，分阶段订单list
    */
        public function getStepOrderList() {
        return $this->stepOrderList;
    }
    
    /**
     * 设置[交易3.0]分阶段交易，分阶段订单list     
     * @param array include @see AlibabaTradeStepOrderModel[] $stepOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepOrderList(AlibabaTradeStepOrderModel $stepOrderList) {
        $this->stepOrderList = $stepOrderList;
    }
    
        	
    private $stepAgreementPath;
    
        /**
    * @return 分阶段法务协议地址
    */
        public function getStepAgreementPath() {
        return $this->stepAgreementPath;
    }
    
    /**
     * 设置分阶段法务协议地址     
     * @param String $stepAgreementPath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepAgreementPath( $stepAgreementPath) {
        $this->stepAgreementPath = $stepAgreementPath;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "allDeliveredTime", $this->stdResult )) {
    				$this->allDeliveredTime = $this->stdResult->{"allDeliveredTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessType", $this->stdResult )) {
    				$this->businessType = $this->stdResult->{"businessType"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerID", $this->stdResult )) {
    				$this->buyerID = $this->stdResult->{"buyerID"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemo", $this->stdResult )) {
    				$this->buyerMemo = $this->stdResult->{"buyerMemo"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerSubID", $this->stdResult )) {
    				$this->buyerSubID = $this->stdResult->{"buyerSubID"};
    			}
    			    		    				    			    			if (array_key_exists ( "completeTime", $this->stdResult )) {
    				$this->completeTime = $this->stdResult->{"completeTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "currency", $this->stdResult )) {
    				$this->currency = $this->stdResult->{"currency"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifyTime", $this->stdResult )) {
    				$this->modifyTime = $this->stdResult->{"modifyTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "payTime", $this->stdResult )) {
    				$this->payTime = $this->stdResult->{"payTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "receivingTime", $this->stdResult )) {
    				$this->receivingTime = $this->stdResult->{"receivingTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "refund", $this->stdResult )) {
    				$this->refund = $this->stdResult->{"refund"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerID", $this->stdResult )) {
    				$this->sellerID = $this->stdResult->{"sellerID"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerMemo", $this->stdResult )) {
    				$this->sellerMemo = $this->stdResult->{"sellerMemo"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerSubID", $this->stdResult )) {
    				$this->sellerSubID = $this->stdResult->{"sellerSubID"};
    			}
    			    		    				    			    			if (array_key_exists ( "shippingFee", $this->stdResult )) {
    				$this->shippingFee = $this->stdResult->{"shippingFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalAmount", $this->stdResult )) {
    				$this->totalAmount = $this->stdResult->{"totalAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerRemarkIcon", $this->stdResult )) {
    				$this->buyerRemarkIcon = $this->stdResult->{"buyerRemarkIcon"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerRemarkIcon", $this->stdResult )) {
    				$this->sellerRemarkIcon = $this->stdResult->{"sellerRemarkIcon"};
    			}
    			    		    				    			    			if (array_key_exists ( "discount", $this->stdResult )) {
    				$this->discount = $this->stdResult->{"discount"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerContact", $this->stdResult )) {
    				$buyerContactResult=$this->stdResult->{"buyerContact"};
    				$this->buyerContact = new AlibabaTradeTradeContact();
    				$this->buyerContact->setStdResult ( $buyerContactResult);
    			}
    			    		    				    			    			if (array_key_exists ( "sellerContact", $this->stdResult )) {
    				$sellerContactResult=$this->stdResult->{"sellerContact"};
    				$this->sellerContact = new AlibabaTradeTradeContact();
    				$this->sellerContact->setStdResult ( $sellerContactResult);
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundStatus", $this->stdResult )) {
    				$this->refundStatus = $this->stdResult->{"refundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundStatusForAs", $this->stdResult )) {
    				$this->refundStatusForAs = $this->stdResult->{"refundStatusForAs"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundPayment", $this->stdResult )) {
    				$this->refundPayment = $this->stdResult->{"refundPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "idOfStr", $this->stdResult )) {
    				$this->idOfStr = $this->stdResult->{"idOfStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayTradeId", $this->stdResult )) {
    				$this->alipayTradeId = $this->stdResult->{"alipayTradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverInfo", $this->stdResult )) {
    				$receiverInfoResult=$this->stdResult->{"receiverInfo"};
    				$this->receiverInfo = new AlibabaTradeOrderReceiverInfo();
    				$this->receiverInfo->setStdResult ( $receiverInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "buyerLoginId", $this->stdResult )) {
    				$this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerLoginId", $this->stdResult )) {
    				$this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerUserId", $this->stdResult )) {
    				$this->sellerUserId = $this->stdResult->{"sellerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerAlipayId", $this->stdResult )) {
    				$this->buyerAlipayId = $this->stdResult->{"buyerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerAlipayId", $this->stdResult )) {
    				$this->sellerAlipayId = $this->stdResult->{"sellerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "confirmedTime", $this->stdResult )) {
    				$this->confirmedTime = $this->stdResult->{"confirmedTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "closeReason", $this->stdResult )) {
    				$this->closeReason = $this->stdResult->{"closeReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumProductPayment", $this->stdResult )) {
    				$this->sumProductPayment = $this->stdResult->{"sumProductPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepOrderList", $this->stdResult )) {
    			$stepOrderListResult=$this->stdResult->{"stepOrderList"};
    				$object = json_decode ( json_encode ( $stepOrderListResult ), true );
					$this->stepOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeStepOrderModelResult=new AlibabaTradeStepOrderModel();
						$AlibabaTradeStepOrderModelResult->setArrayResult($arrayobject );
						$this->stepOrderList [$i] = $AlibabaTradeStepOrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "stepAgreementPath", $this->stdResult )) {
    				$this->stepAgreementPath = $this->stdResult->{"stepAgreementPath"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepPayAll", $this->stdResult )) {
    				$this->stepPayAll = $this->stdResult->{"stepPayAll"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerFeedback", $this->stdResult )) {
    				$this->buyerFeedback = $this->stdResult->{"buyerFeedback"};
    			}
    			    		    				    			    			if (array_key_exists ( "relatedCode", $this->stdResult )) {
    				$this->relatedCode = $this->stdResult->{"relatedCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "allDeliveredTime", $this->arrayResult )) {
    			$this->allDeliveredTime = $arrayResult['allDeliveredTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessType", $this->arrayResult )) {
    			$this->businessType = $arrayResult['businessType'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerID", $this->arrayResult )) {
    			$this->buyerID = $arrayResult['buyerID'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemo", $this->arrayResult )) {
    			$this->buyerMemo = $arrayResult['buyerMemo'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerSubID", $this->arrayResult )) {
    			$this->buyerSubID = $arrayResult['buyerSubID'];
    			}
    		    	    			    		    			if (array_key_exists ( "completeTime", $this->arrayResult )) {
    			$this->completeTime = $arrayResult['completeTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['createTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "currency", $this->arrayResult )) {
    			$this->currency = $arrayResult['currency'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifyTime", $this->arrayResult )) {
    			$this->modifyTime = $arrayResult['modifyTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "payTime", $this->arrayResult )) {
    			$this->payTime = $arrayResult['payTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "receivingTime", $this->arrayResult )) {
    			$this->receivingTime = $arrayResult['receivingTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "refund", $this->arrayResult )) {
    			$this->refund = $arrayResult['refund'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerID", $this->arrayResult )) {
    			$this->sellerID = $arrayResult['sellerID'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerMemo", $this->arrayResult )) {
    			$this->sellerMemo = $arrayResult['sellerMemo'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerSubID", $this->arrayResult )) {
    			$this->sellerSubID = $arrayResult['sellerSubID'];
    			}
    		    	    			    		    			if (array_key_exists ( "shippingFee", $this->arrayResult )) {
    			$this->shippingFee = $arrayResult['shippingFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalAmount", $this->arrayResult )) {
    			$this->totalAmount = $arrayResult['totalAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerRemarkIcon", $this->arrayResult )) {
    			$this->buyerRemarkIcon = $arrayResult['buyerRemarkIcon'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerRemarkIcon", $this->arrayResult )) {
    			$this->sellerRemarkIcon = $arrayResult['sellerRemarkIcon'];
    			}
    		    	    			    		    			if (array_key_exists ( "discount", $this->arrayResult )) {
    			$this->discount = $arrayResult['discount'];
    			}
    		    	    			    		    		if (array_key_exists ( "buyerContact", $this->arrayResult )) {
    		$buyerContactResult=$arrayResult['buyerContact'];
    			    			$this->buyerContact = new AlibabaTradeTradeContact();
    			    			$this->buyerContact->setStdResult ( $buyerContactResult);
    		}
    		    	    			    		    		if (array_key_exists ( "sellerContact", $this->arrayResult )) {
    		$sellerContactResult=$arrayResult['sellerContact'];
    			    			$this->sellerContact = new AlibabaTradeTradeContact();
    			    			$this->sellerContact->setStdResult ( $sellerContactResult);
    		}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['tradeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundStatus", $this->arrayResult )) {
    			$this->refundStatus = $arrayResult['refundStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundStatusForAs", $this->arrayResult )) {
    			$this->refundStatusForAs = $arrayResult['refundStatusForAs'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundPayment", $this->arrayResult )) {
    			$this->refundPayment = $arrayResult['refundPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "idOfStr", $this->arrayResult )) {
    			$this->idOfStr = $arrayResult['idOfStr'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayTradeId", $this->arrayResult )) {
    			$this->alipayTradeId = $arrayResult['alipayTradeId'];
    			}
    		    	    			    		    		if (array_key_exists ( "receiverInfo", $this->arrayResult )) {
    		$receiverInfoResult=$arrayResult['receiverInfo'];
    			    			$this->receiverInfo = new AlibabaTradeOrderReceiverInfo();
    			    			$this->receiverInfo->setStdResult ( $receiverInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "buyerLoginId", $this->arrayResult )) {
    			$this->buyerLoginId = $arrayResult['buyerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerLoginId", $this->arrayResult )) {
    			$this->sellerLoginId = $arrayResult['sellerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['buyerUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerUserId", $this->arrayResult )) {
    			$this->sellerUserId = $arrayResult['sellerUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerAlipayId", $this->arrayResult )) {
    			$this->buyerAlipayId = $arrayResult['buyerAlipayId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerAlipayId", $this->arrayResult )) {
    			$this->sellerAlipayId = $arrayResult['sellerAlipayId'];
    			}
    		    	    			    		    			if (array_key_exists ( "confirmedTime", $this->arrayResult )) {
    			$this->confirmedTime = $arrayResult['confirmedTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "closeReason", $this->arrayResult )) {
    			$this->closeReason = $arrayResult['closeReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumProductPayment", $this->arrayResult )) {
    			$this->sumProductPayment = $arrayResult['sumProductPayment'];
    			}
    		    	    			    		    		if (array_key_exists ( "stepOrderList", $this->arrayResult )) {
    		$stepOrderListResult=$arrayResult['stepOrderList'];
    			$this->stepOrderList = new AlibabaTradeStepOrderModel();
    			$this->stepOrderList->setStdResult ( $stepOrderListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "stepAgreementPath", $this->arrayResult )) {
    			$this->stepAgreementPath = $arrayResult['stepAgreementPath'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepPayAll", $this->arrayResult )) {
    			$this->stepPayAll = $arrayResult['stepPayAll'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerFeedback", $this->arrayResult )) {
    			$this->buyerFeedback = $arrayResult['buyerFeedback'];
    			}
    		    	    			    		    			if (array_key_exists ( "relatedCode", $this->arrayResult )) {
    			$this->relatedCode = $arrayResult['relatedCode'];
    			}
    		    	    		}
 
   
}
?>