<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OrderRefundModel extends SDKDomain {

       	
    private $sellerMemberId;
    
        /**
    * @return 卖家会员ID
    */
        public function getSellerMemberId() {
        return $this->sellerMemberId;
    }
    
    /**
     * 设置卖家会员ID     
     * @param String $sellerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sellerMemberId = $sellerMemberId;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 买家会员ID
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置买家会员ID     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $disputeType;
    
        /**
    * @return 纠纷类型：1-售中退款, 2-售后退款，默认为售中退款
    */
        public function getDisputeType() {
        return $this->disputeType;
    }
    
    /**
     * 设置纠纷类型：1-售中退款, 2-售后退款，默认为售中退款     
     * @param Integer $disputeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDisputeType( $disputeType) {
        $this->disputeType = $disputeType;
    }
    
        	
    private $disputeRequest;
    
        /**
    * @return 售后退款要求
    */
        public function getDisputeRequest() {
        return $this->disputeRequest;
    }
    
    /**
     * 设置售后退款要求     
     * @param Integer $disputeRequest     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDisputeRequest( $disputeRequest) {
        $this->disputeRequest = $disputeRequest;
    }
    
        	
    private $buyerSendGoods;
    
        /**
    * @return 买家是否已经发货（如果有退货的流程）
    */
        public function getBuyerSendGoods() {
        return $this->buyerSendGoods;
    }
    
    /**
     * 设置买家是否已经发货（如果有退货的流程）     
     * @param Boolean $buyerSendGoods     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerSendGoods( $buyerSendGoods) {
        $this->buyerSendGoods = $buyerSendGoods;
    }
    
        	
    private $gmtApply;
    
        /**
    * @return 申请退款时间
    */
        public function getGmtApply() {
        return $this->gmtApply;
    }
    
    /**
     * 设置申请退款时间     
     * @param Date $gmtApply     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtApply( $gmtApply) {
        $this->gmtApply = $gmtApply;
    }
    
        	
    private $gmtCompleted;
    
        /**
    * @return 完成时间
    */
        public function getGmtCompleted() {
        return $this->gmtCompleted;
    }
    
    /**
     * 设置完成时间     
     * @param Date $gmtCompleted     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCompleted( $gmtCompleted) {
        $this->gmtCompleted = $gmtCompleted;
    }
    
        	
    private $canRefundPayment;
    
        /**
    * @return 最大能够退款金额，单位：分
    */
        public function getCanRefundPayment() {
        return $this->canRefundPayment;
    }
    
    /**
     * 设置最大能够退款金额，单位：分     
     * @param Long $canRefundPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCanRefundPayment( $canRefundPayment) {
        $this->canRefundPayment = $canRefundPayment;
    }
    
        	
    private $applyPayment;
    
        /**
    * @return 买家申请退款金额，单位：分
    */
        public function getApplyPayment() {
        return $this->applyPayment;
    }
    
    /**
     * 设置买家申请退款金额，单位：分     
     * @param Long $applyPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyPayment( $applyPayment) {
        $this->applyPayment = $applyPayment;
    }
    
        	
    private $refundPayment;
    
        /**
    * @return 实际退款金额，单位：分
    */
        public function getRefundPayment() {
        return $this->refundPayment;
    }
    
    /**
     * 设置实际退款金额，单位：分     
     * @param Long $refundPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundPayment( $refundPayment) {
        $this->refundPayment = $refundPayment;
    }
    
        	
    private $taskStatus;
    
        /**
    * @return 工单子状态，没有流到CRM创建工单时为空
    */
        public function getTaskStatus() {
        return $this->taskStatus;
    }
    
    /**
     * 设置工单子状态，没有流到CRM创建工单时为空     
     * @param String $taskStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaskStatus( $taskStatus) {
        $this->taskStatus = $taskStatus;
    }
    
        	
    private $refundGoods;
    
        /**
    * @return 是否要求退货
    */
        public function getRefundGoods() {
        return $this->refundGoods;
    }
    
    /**
     * 设置是否要求退货     
     * @param Boolean $refundGoods     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundGoods( $refundGoods) {
        $this->refundGoods = $refundGoods;
    }
    
        	
    private $goodsReceived;
    
        /**
    * @return 买家是否已收到货
    */
        public function getGoodsReceived() {
        return $this->goodsReceived;
    }
    
    /**
     * 设置买家是否已收到货     
     * @param Boolean $goodsReceived     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGoodsReceived( $goodsReceived) {
        $this->goodsReceived = $goodsReceived;
    }
    
        	
    private $productName;
    
        /**
    * @return 产品名称(退款单关联订单明细的货品名称)
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置产品名称(退款单关联订单明细的货品名称)     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $applyCarriage;
    
        /**
    * @return 运费的申请退款金额，单位：分
    */
        public function getApplyCarriage() {
        return $this->applyCarriage;
    }
    
    /**
     * 设置运费的申请退款金额，单位：分     
     * @param Long $applyCarriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyCarriage( $applyCarriage) {
        $this->applyCarriage = $applyCarriage;
    }
    
        	
    private $refundCarriage;
    
        /**
    * @return 运费的实际退款金额，单位：分
    */
        public function getRefundCarriage() {
        return $this->refundCarriage;
    }
    
    /**
     * 设置运费的实际退款金额，单位：分     
     * @param Long $refundCarriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundCarriage( $refundCarriage) {
        $this->refundCarriage = $refundCarriage;
    }
    
        	
    private $orderEntryIdList;
    
        /**
    * @return 退款包含子订单id列表
    */
        public function getOrderEntryIdList() {
        return $this->orderEntryIdList;
    }
    
    /**
     * 设置退款包含子订单id列表     
     * @param List $orderEntryIdList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderEntryIdList(array $orderEntryIdList) {
        $this->orderEntryIdList = $orderEntryIdList;
    }
    
        	
    private $applyReasonId;
    
        /**
    * @return 申请原因ID
    */
        public function getApplyReasonId() {
        return $this->applyReasonId;
    }
    
    /**
     * 设置申请原因ID     
     * @param Integer $applyReasonId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyReasonId( $applyReasonId) {
        $this->applyReasonId = $applyReasonId;
    }
    
        	
    private $applySubReasonId;
    
        /**
    * @return 二级退款原因ID
    */
        public function getApplySubReasonId() {
        return $this->applySubReasonId;
    }
    
    /**
     * 设置二级退款原因ID     
     * @param Integer $applySubReasonId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplySubReasonId( $applySubReasonId) {
        $this->applySubReasonId = $applySubReasonId;
    }
    
        	
    private $applySubReason;
    
        /**
    * @return 二级退款原因
    */
        public function getApplySubReason() {
        return $this->applySubReason;
    }
    
    /**
     * 设置二级退款原因     
     * @param String $applySubReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplySubReason( $applySubReason) {
        $this->applySubReason = $applySubReason;
    }
    
        	
    private $orderId;
    
        /**
    * @return 退款单对应的订单编号
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置退款单对应的订单编号     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $buyerUserId;
    
        /**
    * @return 买家数字帐号Id
    */
        public function getBuyerUserId() {
        return $this->buyerUserId;
    }
    
    /**
     * 设置买家数字帐号Id     
     * @param Long $buyerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }
    
        	
    private $sellerUserId;
    
        /**
    * @return 卖家数字帐号Id
    */
        public function getSellerUserId() {
        return $this->sellerUserId;
    }
    
    /**
     * 设置卖家数字帐号Id     
     * @param Long $sellerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerUserId( $sellerUserId) {
        $this->sellerUserId = $sellerUserId;
    }
    
        	
    private $refundId;
    
        /**
    * @return 退款单逻辑主键，也就是"TQ" + id
    */
        public function getRefundId() {
        return $this->refundId;
    }
    
    /**
     * 设置退款单逻辑主键，也就是"TQ" + id     
     * @param String $refundId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundId( $refundId) {
        $this->refundId = $refundId;
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
    
        	
    private $id;
    
        /**
    * @return 退款单编号
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置退款单编号     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $status;
    
        /**
    * @return 退款状态，waitselleragree-等待卖家同意, refundsuccess-退款成功, refundclose-退款关闭, waitbuyermodify-待买家修改, waitbuyersend-等待买家退货, waitsellerreceive-等待卖家确认收货
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置退款状态，waitselleragree-等待卖家同意, refundsuccess-退款成功, refundclose-退款关闭, waitbuyermodify-待买家修改, waitbuyersend-等待买家退货, waitsellerreceive-等待卖家确认收货     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
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
    
        	
    private $applyReason;
    
        /**
    * @return 申请原因
    */
        public function getApplyReason() {
        return $this->applyReason;
    }
    
    /**
     * 设置申请原因     
     * @param String $applyReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyReason( $applyReason) {
        $this->applyReason = $applyReason;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sellerMemberId", $this->stdResult )) {
    				$this->sellerMemberId = $this->stdResult->{"sellerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "disputeType", $this->stdResult )) {
    				$this->disputeType = $this->stdResult->{"disputeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "disputeRequest", $this->stdResult )) {
    				$this->disputeRequest = $this->stdResult->{"disputeRequest"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerSendGoods", $this->stdResult )) {
    				$this->buyerSendGoods = $this->stdResult->{"buyerSendGoods"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtApply", $this->stdResult )) {
    				$this->gmtApply = $this->stdResult->{"gmtApply"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCompleted", $this->stdResult )) {
    				$this->gmtCompleted = $this->stdResult->{"gmtCompleted"};
    			}
    			    		    				    			    			if (array_key_exists ( "canRefundPayment", $this->stdResult )) {
    				$this->canRefundPayment = $this->stdResult->{"canRefundPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "applyPayment", $this->stdResult )) {
    				$this->applyPayment = $this->stdResult->{"applyPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundPayment", $this->stdResult )) {
    				$this->refundPayment = $this->stdResult->{"refundPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskStatus", $this->stdResult )) {
    				$this->taskStatus = $this->stdResult->{"taskStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundGoods", $this->stdResult )) {
    				$this->refundGoods = $this->stdResult->{"refundGoods"};
    			}
    			    		    				    			    			if (array_key_exists ( "goodsReceived", $this->stdResult )) {
    				$this->goodsReceived = $this->stdResult->{"goodsReceived"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "applyCarriage", $this->stdResult )) {
    				$this->applyCarriage = $this->stdResult->{"applyCarriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundCarriage", $this->stdResult )) {
    				$this->refundCarriage = $this->stdResult->{"refundCarriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderEntryIdList", $this->stdResult )) {
    				$this->orderEntryIdList = $this->stdResult->{"orderEntryIdList"};
    			}
    			    		    				    			    			if (array_key_exists ( "applyReasonId", $this->stdResult )) {
    				$this->applyReasonId = $this->stdResult->{"applyReasonId"};
    			}
    			    		    				    			    			if (array_key_exists ( "applySubReasonId", $this->stdResult )) {
    				$this->applySubReasonId = $this->stdResult->{"applySubReasonId"};
    			}
    			    		    				    			    			if (array_key_exists ( "applySubReason", $this->stdResult )) {
    				$this->applySubReason = $this->stdResult->{"applySubReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerUserId", $this->stdResult )) {
    				$this->sellerUserId = $this->stdResult->{"sellerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundId", $this->stdResult )) {
    				$this->refundId = $this->stdResult->{"refundId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "applyReason", $this->stdResult )) {
    				$this->applyReason = $this->stdResult->{"applyReason"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sellerMemberId", $this->arrayResult )) {
    			$this->sellerMemberId = $arrayResult['sellerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['buyerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "disputeType", $this->arrayResult )) {
    			$this->disputeType = $arrayResult['disputeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "disputeRequest", $this->arrayResult )) {
    			$this->disputeRequest = $arrayResult['disputeRequest'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerSendGoods", $this->arrayResult )) {
    			$this->buyerSendGoods = $arrayResult['buyerSendGoods'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtApply", $this->arrayResult )) {
    			$this->gmtApply = $arrayResult['gmtApply'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCompleted", $this->arrayResult )) {
    			$this->gmtCompleted = $arrayResult['gmtCompleted'];
    			}
    		    	    			    		    			if (array_key_exists ( "canRefundPayment", $this->arrayResult )) {
    			$this->canRefundPayment = $arrayResult['canRefundPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "applyPayment", $this->arrayResult )) {
    			$this->applyPayment = $arrayResult['applyPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundPayment", $this->arrayResult )) {
    			$this->refundPayment = $arrayResult['refundPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskStatus", $this->arrayResult )) {
    			$this->taskStatus = $arrayResult['taskStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundGoods", $this->arrayResult )) {
    			$this->refundGoods = $arrayResult['refundGoods'];
    			}
    		    	    			    		    			if (array_key_exists ( "goodsReceived", $this->arrayResult )) {
    			$this->goodsReceived = $arrayResult['goodsReceived'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "applyCarriage", $this->arrayResult )) {
    			$this->applyCarriage = $arrayResult['applyCarriage'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundCarriage", $this->arrayResult )) {
    			$this->refundCarriage = $arrayResult['refundCarriage'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderEntryIdList", $this->arrayResult )) {
    			$this->orderEntryIdList = $arrayResult['orderEntryIdList'];
    			}
    		    	    			    		    			if (array_key_exists ( "applyReasonId", $this->arrayResult )) {
    			$this->applyReasonId = $arrayResult['applyReasonId'];
    			}
    		    	    			    		    			if (array_key_exists ( "applySubReasonId", $this->arrayResult )) {
    			$this->applySubReasonId = $arrayResult['applySubReasonId'];
    			}
    		    	    			    		    			if (array_key_exists ( "applySubReason", $this->arrayResult )) {
    			$this->applySubReason = $arrayResult['applySubReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['buyerUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerUserId", $this->arrayResult )) {
    			$this->sellerUserId = $arrayResult['sellerUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundId", $this->arrayResult )) {
    			$this->refundId = $arrayResult['refundId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "applyReason", $this->arrayResult )) {
    			$this->applyReason = $arrayResult['applyReason'];
    			}
    		    	    		}
 
   
}
?>