<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItem extends SDKDomain {

       	
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
    
        	
    private $amount;
    
        /**
    * @return 商品数量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置商品数量     
     * @param Long $amount     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $warehouseCode;
    
        /**
    * @return 对接系统中的仓库编号
    */
        public function getWarehouseCode() {
        return $this->warehouseCode;
    }
    
    /**
     * 设置对接系统中的仓库编号     
     * @param String $warehouseCode     
     * 参数示例：<pre>wh001</pre>     
     * 此参数必填     */
    public function setWarehouseCode( $warehouseCode) {
        $this->warehouseCode = $warehouseCode;
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
    
        	
    private $remark;
    
        /**
    * @return 备注
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $productCode;
    
        /**
    * @return 外部系统中的商品编号
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置外部系统中的商品编号     
     * @param String $productCode     
     * 参数示例：<pre>prod001</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $salesOrderItemId;
    
        /**
    * @return 1688系统中的销售单itemId
    */
        public function getSalesOrderItemId() {
        return $this->salesOrderItemId;
    }
    
    /**
     * 设置1688系统中的销售单itemId     
     * @param Long $salesOrderItemId     
     * 参数示例：<pre>10001</pre>     
     * 此参数必填     */
    public function setSalesOrderItemId( $salesOrderItemId) {
        $this->salesOrderItemId = $salesOrderItemId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "warehouseCode", $this->stdResult )) {
    				$this->warehouseCode = $this->stdResult->{"warehouseCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "salesOrderItemId", $this->stdResult )) {
    				$this->salesOrderItemId = $this->stdResult->{"salesOrderItemId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "warehouseCode", $this->arrayResult )) {
    			$this->warehouseCode = $arrayResult['warehouseCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "salesOrderItemId", $this->arrayResult )) {
    			$this->salesOrderItemId = $arrayResult['salesOrderItemId'];
    			}
    		    	    		}
 
   
}
?>