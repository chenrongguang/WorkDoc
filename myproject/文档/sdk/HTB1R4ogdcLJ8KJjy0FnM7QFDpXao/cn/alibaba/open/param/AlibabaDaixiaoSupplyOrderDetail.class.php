<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaDaixiaoSubSupplyOrderInfo.class.php');

class AlibabaDaixiaoSupplyOrderDetail extends SDKDomain {

       	
    private $outMainOrderNo;
    
        /**
    * @return 淘宝主订单号
    */
        public function getOutMainOrderNo() {
        return $this->outMainOrderNo;
    }
    
    /**
     * 设置淘宝主订单号     
     * @param String $outMainOrderNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutMainOrderNo( $outMainOrderNo) {
        $this->outMainOrderNo = $outMainOrderNo;
    }
    
        	
    private $innerMainOrderId;
    
        /**
    * @return 内部主订单ID
    */
        public function getInnerMainOrderId() {
        return $this->innerMainOrderId;
    }
    
    /**
     * 设置内部主订单ID     
     * @param String $innerMainOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInnerMainOrderId( $innerMainOrderId) {
        $this->innerMainOrderId = $innerMainOrderId;
    }
    
        	
    private $outOrderGmtCreate;
    
        /**
    * @return 成交时间
    */
        public function getOutOrderGmtCreate() {
        return $this->outOrderGmtCreate;
    }
    
    /**
     * 设置成交时间     
     * @param Date $outOrderGmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutOrderGmtCreate( $outOrderGmtCreate) {
        $this->outOrderGmtCreate = $outOrderGmtCreate;
    }
    
        	
    private $orderStatus;
    
        /**
    * @return 当前中间表订单状态,0(未下单)、1(等待买家付款)、2(等待卖家发货)、3(等待买家收货)、4(已收货->交易成功)、5(交易关闭)
    */
        public function getOrderStatus() {
        return $this->orderStatus;
    }
    
    /**
     * 设置当前中间表订单状态,0(未下单)、1(等待买家付款)、2(等待卖家发货)、3(等待买家收货)、4(已收货->交易成功)、5(交易关闭)     
     * @param Integer $orderStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->orderStatus = $orderStatus;
    }
    
        	
    private $tbMainOrderStatus;
    
        /**
    * @return 淘宝主订单状态
    */
        public function getTbMainOrderStatus() {
        return $this->tbMainOrderStatus;
    }
    
    /**
     * 设置淘宝主订单状态     
     * @param String $tbMainOrderStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTbMainOrderStatus( $tbMainOrderStatus) {
        $this->tbMainOrderStatus = $tbMainOrderStatus;
    }
    
        	
    private $supplierId;
    
        /**
    * @return 供应商Id
    */
        public function getSupplierId() {
        return $this->supplierId;
    }
    
    /**
     * 设置供应商Id     
     * @param Long $supplierId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierId( $supplierId) {
        $this->supplierId = $supplierId;
    }
    
        	
    private $supplierNickName;
    
        /**
    * @return 供应商昵称
    */
        public function getSupplierNickName() {
        return $this->supplierNickName;
    }
    
    /**
     * 设置供应商昵称     
     * @param String $supplierNickName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierNickName( $supplierNickName) {
        $this->supplierNickName = $supplierNickName;
    }
    
        	
    private $outBuyerSummary;
    
        /**
    * @return 卖家备注
    */
        public function getOutBuyerSummary() {
        return $this->outBuyerSummary;
    }
    
    /**
     * 设置卖家备注     
     * @param String $outBuyerSummary     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutBuyerSummary( $outBuyerSummary) {
        $this->outBuyerSummary = $outBuyerSummary;
    }
    
        	
    private $subOrderList;
    
        /**
    * @return 父订单包含的子订单列表
    */
        public function getSubOrderList() {
        return $this->subOrderList;
    }
    
    /**
     * 设置父订单包含的子订单列表     
     * @param array include @see AlibabaDaixiaoSubSupplyOrderInfo[] $subOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubOrderList(AlibabaDaixiaoSubSupplyOrderInfo $subOrderList) {
        $this->subOrderList = $subOrderList;
    }
    
        	
    private $isAutoMakeOrder;
    
        /**
    * @return 是否自动生成订单
    */
        public function getIsAutoMakeOrder() {
        return $this->isAutoMakeOrder;
    }
    
    /**
     * 设置是否自动生成订单     
     * @param Boolean $isAutoMakeOrder     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsAutoMakeOrder( $isAutoMakeOrder) {
        $this->isAutoMakeOrder = $isAutoMakeOrder;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "outMainOrderNo", $this->stdResult )) {
    				$this->outMainOrderNo = $this->stdResult->{"outMainOrderNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "innerMainOrderId", $this->stdResult )) {
    				$this->innerMainOrderId = $this->stdResult->{"innerMainOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "outOrderGmtCreate", $this->stdResult )) {
    				$this->outOrderGmtCreate = $this->stdResult->{"outOrderGmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderStatus", $this->stdResult )) {
    				$this->orderStatus = $this->stdResult->{"orderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "tbMainOrderStatus", $this->stdResult )) {
    				$this->tbMainOrderStatus = $this->stdResult->{"tbMainOrderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierId", $this->stdResult )) {
    				$this->supplierId = $this->stdResult->{"supplierId"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierNickName", $this->stdResult )) {
    				$this->supplierNickName = $this->stdResult->{"supplierNickName"};
    			}
    			    		    				    			    			if (array_key_exists ( "outBuyerSummary", $this->stdResult )) {
    				$this->outBuyerSummary = $this->stdResult->{"outBuyerSummary"};
    			}
    			    		    				    			    			if (array_key_exists ( "subOrderList", $this->stdResult )) {
    			$subOrderListResult=$this->stdResult->{"subOrderList"};
    				$object = json_decode ( json_encode ( $subOrderListResult ), true );
					$this->subOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaDaixiaoSubSupplyOrderInfoResult=new AlibabaDaixiaoSubSupplyOrderInfo();
						$AlibabaDaixiaoSubSupplyOrderInfoResult->setArrayResult($arrayobject );
						$this->subOrderList [$i] = $AlibabaDaixiaoSubSupplyOrderInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "isAutoMakeOrder", $this->stdResult )) {
    				$this->isAutoMakeOrder = $this->stdResult->{"isAutoMakeOrder"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "outMainOrderNo", $this->arrayResult )) {
    			$this->outMainOrderNo = $arrayResult['outMainOrderNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "innerMainOrderId", $this->arrayResult )) {
    			$this->innerMainOrderId = $arrayResult['innerMainOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "outOrderGmtCreate", $this->arrayResult )) {
    			$this->outOrderGmtCreate = $arrayResult['outOrderGmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderStatus", $this->arrayResult )) {
    			$this->orderStatus = $arrayResult['orderStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "tbMainOrderStatus", $this->arrayResult )) {
    			$this->tbMainOrderStatus = $arrayResult['tbMainOrderStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierId", $this->arrayResult )) {
    			$this->supplierId = $arrayResult['supplierId'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierNickName", $this->arrayResult )) {
    			$this->supplierNickName = $arrayResult['supplierNickName'];
    			}
    		    	    			    		    			if (array_key_exists ( "outBuyerSummary", $this->arrayResult )) {
    			$this->outBuyerSummary = $arrayResult['outBuyerSummary'];
    			}
    		    	    			    		    		if (array_key_exists ( "subOrderList", $this->arrayResult )) {
    		$subOrderListResult=$arrayResult['subOrderList'];
    			$this->subOrderList = new AlibabaDaixiaoSubSupplyOrderInfo();
    			$this->subOrderList->setStdResult ( $subOrderListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "isAutoMakeOrder", $this->arrayResult )) {
    			$this->isAutoMakeOrder = $arrayResult['isAutoMakeOrder'];
    			}
    		    	    		}
 
   
}
?>