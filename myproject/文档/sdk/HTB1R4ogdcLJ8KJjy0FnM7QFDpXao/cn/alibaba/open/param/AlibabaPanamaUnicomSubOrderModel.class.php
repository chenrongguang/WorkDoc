<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomSkuModel.class.php');

class AlibabaPanamaUnicomSubOrderModel extends SDKDomain {

       	
    private $orderId;
    
        /**
    * @return 订单编号
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置订单编号     
     * @param String $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $type;
    
        /**
    * @return 1（订单类型1：父订单;订单类型2：子订单）
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置1（订单类型1：父订单;订单类型2：子订单）     
     * @param Integer $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $orderNakedPrice;
    
        /**
    * @return 订单裸价合计
    */
        public function getOrderNakedPrice() {
        return $this->orderNakedPrice;
    }
    
    /**
     * 设置订单裸价合计     
     * @param Integer $orderNakedPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderNakedPrice( $orderNakedPrice) {
        $this->orderNakedPrice = $orderNakedPrice;
    }
    
        	
    private $orderTaxPrice;
    
        /**
    * @return 订单税额合计
    */
        public function getOrderTaxPrice() {
        return $this->orderTaxPrice;
    }
    
    /**
     * 设置订单税额合计     
     * @param Long $orderTaxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderTaxPrice( $orderTaxPrice) {
        $this->orderTaxPrice = $orderTaxPrice;
    }
    
        	
    private $orderPrice;
    
        /**
    * @return 订单企业价格合计
    */
        public function getOrderPrice() {
        return $this->orderPrice;
    }
    
    /**
     * 设置订单企业价格合计     
     * @param Long $orderPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderPrice( $orderPrice) {
        $this->orderPrice = $orderPrice;
    }
    
        	
    private $state;
    
        /**
    * @return 物流状态（0：新建1：妥投2：拒收）
    */
        public function getState() {
        return $this->state;
    }
    
    /**
     * 设置物流状态（0：新建1：妥投2：拒收）     
     * @param Integer $state     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setState( $state) {
        $this->state = $state;
    }
    
        	
    private $parentOrderId;
    
        /**
    * @return 父订单号,
    */
        public function getParentOrderId() {
        return $this->parentOrderId;
    }
    
    /**
     * 设置父订单号,     
     * @param String $parentOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentOrderId( $parentOrderId) {
        $this->parentOrderId = $parentOrderId;
    }
    
        	
    private $orderState;
    
        /**
    * @return 订单状态（0：取消订单1：有效）
    */
        public function getOrderState() {
        return $this->orderState;
    }
    
    /**
     * 设置订单状态（0：取消订单1：有效）     
     * @param Integer $orderState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderState( $orderState) {
        $this->orderState = $orderState;
    }
    
        	
    private $submitState;
    
        /**
    * @return 0：未确认下单订单1：确认下单订单
    */
        public function getSubmitState() {
        return $this->submitState;
    }
    
    /**
     * 设置0：未确认下单订单1：确认下单订单     
     * @param Integer $submitState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubmitState( $submitState) {
        $this->submitState = $submitState;
    }
    
        	
    private $sku;
    
        /**
    * @return 
    */
        public function getSku() {
        return $this->sku;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomSkuModel $sku     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSku(AlibabaPanamaUnicomSkuModel $sku) {
        $this->sku = $sku;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderNakedPrice", $this->stdResult )) {
    				$this->orderNakedPrice = $this->stdResult->{"orderNakedPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderTaxPrice", $this->stdResult )) {
    				$this->orderTaxPrice = $this->stdResult->{"orderTaxPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderPrice", $this->stdResult )) {
    				$this->orderPrice = $this->stdResult->{"orderPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "state", $this->stdResult )) {
    				$this->state = $this->stdResult->{"state"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentOrderId", $this->stdResult )) {
    				$this->parentOrderId = $this->stdResult->{"parentOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderState", $this->stdResult )) {
    				$this->orderState = $this->stdResult->{"orderState"};
    			}
    			    		    				    			    			if (array_key_exists ( "submitState", $this->stdResult )) {
    				$this->submitState = $this->stdResult->{"submitState"};
    			}
    			    		    				    			    			if (array_key_exists ( "sku", $this->stdResult )) {
    				$skuResult=$this->stdResult->{"sku"};
    				$this->sku = new AlibabaPanamaUnicomSkuModel();
    				$this->sku->setStdResult ( $skuResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderNakedPrice", $this->arrayResult )) {
    			$this->orderNakedPrice = $arrayResult['orderNakedPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderTaxPrice", $this->arrayResult )) {
    			$this->orderTaxPrice = $arrayResult['orderTaxPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderPrice", $this->arrayResult )) {
    			$this->orderPrice = $arrayResult['orderPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "state", $this->arrayResult )) {
    			$this->state = $arrayResult['state'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentOrderId", $this->arrayResult )) {
    			$this->parentOrderId = $arrayResult['parentOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderState", $this->arrayResult )) {
    			$this->orderState = $arrayResult['orderState'];
    			}
    		    	    			    		    			if (array_key_exists ( "submitState", $this->arrayResult )) {
    			$this->submitState = $arrayResult['submitState'];
    			}
    		    	    			    		    		if (array_key_exists ( "sku", $this->arrayResult )) {
    		$skuResult=$arrayResult['sku'];
    			    			$this->sku = new AlibabaPanamaUnicomSkuModel();
    			    			$this->sku->setStdResult ( $skuResult);
    		}
    		    	    		}
 
   
}
?>