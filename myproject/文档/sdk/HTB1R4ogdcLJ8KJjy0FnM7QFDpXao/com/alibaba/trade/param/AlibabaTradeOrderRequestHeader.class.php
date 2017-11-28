<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeDeliveryPeriod.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeBillTo.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonComments.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonContact.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeSoldTo.class.php');
include_once ('com/alibaba/trade/param/AlibabaShippingShipTo.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonMoney.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonMoney.class.php');

class AlibabaTradeOrderRequestHeader extends SDKDomain {

       	
    private $prNumber;
    
        /**
    * @return 买家端订单标志，比如采购单ID
    */
        public function getPrNumber() {
        return $this->prNumber;
    }
    
    /**
     * 设置买家端订单标志，比如采购单ID     
     * @param String $prNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrNumber( $prNumber) {
        $this->prNumber = $prNumber;
    }
    
        	
    private $deliveryPeriod;
    
        /**
    * @return 订单交易周期
    */
        public function getDeliveryPeriod() {
        return $this->deliveryPeriod;
    }
    
    /**
     * 设置订单交易周期     
     * @param AlibabaTradeDeliveryPeriod $deliveryPeriod     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDeliveryPeriod(AlibabaTradeDeliveryPeriod $deliveryPeriod) {
        $this->deliveryPeriod = $deliveryPeriod;
    }
    
        	
    private $billTo;
    
        /**
    * @return 发票目的地
    */
        public function getBillTo() {
        return $this->billTo;
    }
    
    /**
     * 设置发票目的地     
     * @param AlibabaTradeBillTo $billTo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillTo(AlibabaTradeBillTo $billTo) {
        $this->billTo = $billTo;
    }
    
        	
    private $comments;
    
        /**
    * @return 订单备注
    */
        public function getComments() {
        return $this->comments;
    }
    
    /**
     * 设置订单备注     
     * @param AlibabaCommonComments $comments     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setComments(AlibabaCommonComments $comments) {
        $this->comments = $comments;
    }
    
        	
    private $contact;
    
        /**
    * @return 订单联系人
    */
        public function getContact() {
        return $this->contact;
    }
    
    /**
     * 设置订单联系人     
     * @param AlibabaCommonContact $contact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContact(AlibabaCommonContact $contact) {
        $this->contact = $contact;
    }
    
        	
    private $soldTo;
    
        /**
    * @return 订单的订购主体
    */
        public function getSoldTo() {
        return $this->soldTo;
    }
    
    /**
     * 设置订单的订购主体     
     * @param AlibabaTradeSoldTo $soldTo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSoldTo(AlibabaTradeSoldTo $soldTo) {
        $this->soldTo = $soldTo;
    }
    
        	
    private $shipTo;
    
        /**
    * @return 
    */
        public function getShipTo() {
        return $this->shipTo;
    }
    
    /**
     * 设置     
     * @param AlibabaShippingShipTo $shipTo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShipTo(AlibabaShippingShipTo $shipTo) {
        $this->shipTo = $shipTo;
    }
    
        	
    private $orderTotalFee;
    
        /**
    * @return 订单总价，包括物流费用等
    */
        public function getOrderTotalFee() {
        return $this->orderTotalFee;
    }
    
    /**
     * 设置订单总价，包括物流费用等     
     * @param AlibabaCommonMoney $orderTotalFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderTotalFee(AlibabaCommonMoney $orderTotalFee) {
        $this->orderTotalFee = $orderTotalFee;
    }
    
        	
    private $itemTotalFee;
    
        /**
    * @return 商品总价
    */
        public function getItemTotalFee() {
        return $this->itemTotalFee;
    }
    
    /**
     * 设置商品总价     
     * @param AlibabaCommonMoney $itemTotalFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemTotalFee(AlibabaCommonMoney $itemTotalFee) {
        $this->itemTotalFee = $itemTotalFee;
    }
    
        	
    private $payType;
    
        /**
    * @return 支付类型：alipay 支付宝；period 账期
    */
        public function getPayType() {
        return $this->payType;
    }
    
    /**
     * 设置支付类型：alipay 支付宝；period 账期     
     * @param String $payType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayType( $payType) {
        $this->payType = $payType;
    }
    
        	
    private $bizType;
    
        /**
    * @return 业务标识
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置业务标识     
     * @param String $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "prNumber", $this->stdResult )) {
    				$this->prNumber = $this->stdResult->{"prNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "deliveryPeriod", $this->stdResult )) {
    				$deliveryPeriodResult=$this->stdResult->{"deliveryPeriod"};
    				$this->deliveryPeriod = new AlibabaTradeDeliveryPeriod();
    				$this->deliveryPeriod->setStdResult ( $deliveryPeriodResult);
    			}
    			    		    				    			    			if (array_key_exists ( "billTo", $this->stdResult )) {
    				$billToResult=$this->stdResult->{"billTo"};
    				$this->billTo = new AlibabaTradeBillTo();
    				$this->billTo->setStdResult ( $billToResult);
    			}
    			    		    				    			    			if (array_key_exists ( "comments", $this->stdResult )) {
    				$commentsResult=$this->stdResult->{"comments"};
    				$this->comments = new AlibabaCommonComments();
    				$this->comments->setStdResult ( $commentsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "contact", $this->stdResult )) {
    				$contactResult=$this->stdResult->{"contact"};
    				$this->contact = new AlibabaCommonContact();
    				$this->contact->setStdResult ( $contactResult);
    			}
    			    		    				    			    			if (array_key_exists ( "soldTo", $this->stdResult )) {
    				$soldToResult=$this->stdResult->{"soldTo"};
    				$this->soldTo = new AlibabaTradeSoldTo();
    				$this->soldTo->setStdResult ( $soldToResult);
    			}
    			    		    				    			    			if (array_key_exists ( "shipTo", $this->stdResult )) {
    				$shipToResult=$this->stdResult->{"shipTo"};
    				$this->shipTo = new AlibabaShippingShipTo();
    				$this->shipTo->setStdResult ( $shipToResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderTotalFee", $this->stdResult )) {
    				$orderTotalFeeResult=$this->stdResult->{"orderTotalFee"};
    				$this->orderTotalFee = new AlibabaCommonMoney();
    				$this->orderTotalFee->setStdResult ( $orderTotalFeeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "itemTotalFee", $this->stdResult )) {
    				$itemTotalFeeResult=$this->stdResult->{"itemTotalFee"};
    				$this->itemTotalFee = new AlibabaCommonMoney();
    				$this->itemTotalFee->setStdResult ( $itemTotalFeeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "payType", $this->stdResult )) {
    				$this->payType = $this->stdResult->{"payType"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "prNumber", $this->arrayResult )) {
    			$this->prNumber = $arrayResult['prNumber'];
    			}
    		    	    			    		    		if (array_key_exists ( "deliveryPeriod", $this->arrayResult )) {
    		$deliveryPeriodResult=$arrayResult['deliveryPeriod'];
    			    			$this->deliveryPeriod = new AlibabaTradeDeliveryPeriod();
    			    			$this->deliveryPeriod->setStdResult ( $deliveryPeriodResult);
    		}
    		    	    			    		    		if (array_key_exists ( "billTo", $this->arrayResult )) {
    		$billToResult=$arrayResult['billTo'];
    			    			$this->billTo = new AlibabaTradeBillTo();
    			    			$this->billTo->setStdResult ( $billToResult);
    		}
    		    	    			    		    		if (array_key_exists ( "comments", $this->arrayResult )) {
    		$commentsResult=$arrayResult['comments'];
    			    			$this->comments = new AlibabaCommonComments();
    			    			$this->comments->setStdResult ( $commentsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "contact", $this->arrayResult )) {
    		$contactResult=$arrayResult['contact'];
    			    			$this->contact = new AlibabaCommonContact();
    			    			$this->contact->setStdResult ( $contactResult);
    		}
    		    	    			    		    		if (array_key_exists ( "soldTo", $this->arrayResult )) {
    		$soldToResult=$arrayResult['soldTo'];
    			    			$this->soldTo = new AlibabaTradeSoldTo();
    			    			$this->soldTo->setStdResult ( $soldToResult);
    		}
    		    	    			    		    		if (array_key_exists ( "shipTo", $this->arrayResult )) {
    		$shipToResult=$arrayResult['shipTo'];
    			    			$this->shipTo = new AlibabaShippingShipTo();
    			    			$this->shipTo->setStdResult ( $shipToResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderTotalFee", $this->arrayResult )) {
    		$orderTotalFeeResult=$arrayResult['orderTotalFee'];
    			    			$this->orderTotalFee = new AlibabaCommonMoney();
    			    			$this->orderTotalFee->setStdResult ( $orderTotalFeeResult);
    		}
    		    	    			    		    		if (array_key_exists ( "itemTotalFee", $this->arrayResult )) {
    		$itemTotalFeeResult=$arrayResult['itemTotalFee'];
    			    			$this->itemTotalFee = new AlibabaCommonMoney();
    			    			$this->itemTotalFee->setStdResult ( $itemTotalFeeResult);
    		}
    		    	    			    		    			if (array_key_exists ( "payType", $this->arrayResult )) {
    			$this->payType = $arrayResult['payType'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    		}
 
   
}
?>