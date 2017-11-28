<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomSubOrderModel.class.php');

class AlibabaPanamaUnicomOrderModel extends SDKDomain {

       	
    private $orderNakedPriceTotal;
    
        /**
    * @return 订单裸价合计
    */
        public function getOrderNakedPriceTotal() {
        return $this->orderNakedPriceTotal;
    }
    
    /**
     * 设置订单裸价合计     
     * @param Long $orderNakedPriceTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderNakedPriceTotal( $orderNakedPriceTotal) {
        $this->orderNakedPriceTotal = $orderNakedPriceTotal;
    }
    
        	
    private $subOrderList;
    
        /**
    * @return 子订单列表
    */
        public function getSubOrderList() {
        return $this->subOrderList;
    }
    
    /**
     * 设置子订单列表     
     * @param array include @see AlibabaPanamaUnicomSubOrderModel[] $subOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubOrderList(AlibabaPanamaUnicomSubOrderModel $subOrderList) {
        $this->subOrderList = $subOrderList;
    }
    
        	
    private $orderTaxPriceTotal;
    
        /**
    * @return 订单税额合计
    */
        public function getOrderTaxPriceTotal() {
        return $this->orderTaxPriceTotal;
    }
    
    /**
     * 设置订单税额合计     
     * @param Long $orderTaxPriceTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderTaxPriceTotal( $orderTaxPriceTotal) {
        $this->orderTaxPriceTotal = $orderTaxPriceTotal;
    }
    
        	
    private $orderPriceTotal;
    
        /**
    * @return 订单企业价合计
    */
        public function getOrderPriceTotal() {
        return $this->orderPriceTotal;
    }
    
    /**
     * 设置订单企业价合计     
     * @param Long $orderPriceTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderPriceTotal( $orderPriceTotal) {
        $this->orderPriceTotal = $orderPriceTotal;
    }
    
        	
    private $orderState;
    
        /**
    * @return 订单状态（ 0：取消订单  1：有效）
    */
        public function getOrderState() {
        return $this->orderState;
    }
    
    /**
     * 设置订单状态（ 0：取消订单  1：有效）     
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
    
        	
    private $parentOrderId;
    
        /**
    * @return 主订单 id
    */
        public function getParentOrderId() {
        return $this->parentOrderId;
    }
    
    /**
     * 设置主订单 id     
     * @param String $parentOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentOrderId( $parentOrderId) {
        $this->parentOrderId = $parentOrderId;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderNakedPriceTotal", $this->stdResult )) {
    				$this->orderNakedPriceTotal = $this->stdResult->{"orderNakedPriceTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "subOrderList", $this->stdResult )) {
    			$subOrderListResult=$this->stdResult->{"subOrderList"};
    				$object = json_decode ( json_encode ( $subOrderListResult ), true );
					$this->subOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaPanamaUnicomSubOrderModelResult=new AlibabaPanamaUnicomSubOrderModel();
						$AlibabaPanamaUnicomSubOrderModelResult->setArrayResult($arrayobject );
						$this->subOrderList [$i] = $AlibabaPanamaUnicomSubOrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderTaxPriceTotal", $this->stdResult )) {
    				$this->orderTaxPriceTotal = $this->stdResult->{"orderTaxPriceTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderPriceTotal", $this->stdResult )) {
    				$this->orderPriceTotal = $this->stdResult->{"orderPriceTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderState", $this->stdResult )) {
    				$this->orderState = $this->stdResult->{"orderState"};
    			}
    			    		    				    			    			if (array_key_exists ( "submitState", $this->stdResult )) {
    				$this->submitState = $this->stdResult->{"submitState"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentOrderId", $this->stdResult )) {
    				$this->parentOrderId = $this->stdResult->{"parentOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderNakedPriceTotal", $this->arrayResult )) {
    			$this->orderNakedPriceTotal = $arrayResult['orderNakedPriceTotal'];
    			}
    		    	    			    		    		if (array_key_exists ( "subOrderList", $this->arrayResult )) {
    		$subOrderListResult=$arrayResult['subOrderList'];
    			$this->subOrderList = new AlibabaPanamaUnicomSubOrderModel();
    			$this->subOrderList->setStdResult ( $subOrderListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "orderTaxPriceTotal", $this->arrayResult )) {
    			$this->orderTaxPriceTotal = $arrayResult['orderTaxPriceTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderPriceTotal", $this->arrayResult )) {
    			$this->orderPriceTotal = $arrayResult['orderPriceTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderState", $this->arrayResult )) {
    			$this->orderState = $arrayResult['orderState'];
    			}
    		    	    			    		    			if (array_key_exists ( "submitState", $this->arrayResult )) {
    			$this->submitState = $arrayResult['submitState'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentOrderId", $this->arrayResult )) {
    			$this->parentOrderId = $arrayResult['parentOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    		}
 
   
}
?>