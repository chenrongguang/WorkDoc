<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUnicomOrderVO extends SDKDomain {

       	
    private $supplierOrderId;
    
        /**
    * @return 订单编号
    */
        public function getSupplierOrderId() {
        return $this->supplierOrderId;
    }
    
    /**
     * 设置订单编号     
     * @param String $supplierOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierOrderId( $supplierOrderId) {
        $this->supplierOrderId = $supplierOrderId;
    }
    
        	
    private $state;
    
        /**
    * @return 订单状态
    */
        public function getState() {
        return $this->state;
    }
    
    /**
     * 设置订单状态     
     * @param Integer $state     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setState( $state) {
        $this->state = $state;
    }
    
        	
    private $hangUpState;
    
        /**
    * @return 订单是否挂起
    */
        public function getHangUpState() {
        return $this->hangUpState;
    }
    
    /**
     * 设置订单是否挂起     
     * @param Integer $hangUpState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHangUpState( $hangUpState) {
        $this->hangUpState = $hangUpState;
    }
    
        	
    private $invoiceState;
    
        /**
    * @return 发票状态
    */
        public function getInvoiceState() {
        return $this->invoiceState;
    }
    
    /**
     * 设置发票状态     
     * @param Integer $invoiceState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceState( $invoiceState) {
        $this->invoiceState = $invoiceState;
    }
    
        	
    private $orderNakedPrice;
    
        /**
    * @return 订单裸价金额
    */
        public function getOrderNakedPrice() {
        return $this->orderNakedPrice;
    }
    
    /**
     * 设置订单裸价金额     
     * @param Double $orderNakedPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderNakedPrice( $orderNakedPrice) {
        $this->orderNakedPrice = $orderNakedPrice;
    }
    
        	
    private $orderTaxPrice;
    
        /**
    * @return 订单税额
    */
        public function getOrderTaxPrice() {
        return $this->orderTaxPrice;
    }
    
    /**
     * 设置订单税额     
     * @param Double $orderTaxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderTaxPrice( $orderTaxPrice) {
        $this->orderTaxPrice = $orderTaxPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "supplierOrderId", $this->stdResult )) {
    				$this->supplierOrderId = $this->stdResult->{"supplierOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "state", $this->stdResult )) {
    				$this->state = $this->stdResult->{"state"};
    			}
    			    		    				    			    			if (array_key_exists ( "hangUpState", $this->stdResult )) {
    				$this->hangUpState = $this->stdResult->{"hangUpState"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceState", $this->stdResult )) {
    				$this->invoiceState = $this->stdResult->{"invoiceState"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderNakedPrice", $this->stdResult )) {
    				$this->orderNakedPrice = $this->stdResult->{"orderNakedPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderTaxPrice", $this->stdResult )) {
    				$this->orderTaxPrice = $this->stdResult->{"orderTaxPrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "supplierOrderId", $this->arrayResult )) {
    			$this->supplierOrderId = $arrayResult['supplierOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "state", $this->arrayResult )) {
    			$this->state = $arrayResult['state'];
    			}
    		    	    			    		    			if (array_key_exists ( "hangUpState", $this->arrayResult )) {
    			$this->hangUpState = $arrayResult['hangUpState'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceState", $this->arrayResult )) {
    			$this->invoiceState = $arrayResult['invoiceState'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderNakedPrice", $this->arrayResult )) {
    			$this->orderNakedPrice = $arrayResult['orderNakedPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderTaxPrice", $this->arrayResult )) {
    			$this->orderTaxPrice = $arrayResult['orderTaxPrice'];
    			}
    		    	    		}
 
   
}
?>