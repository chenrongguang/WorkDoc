<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaBirdsnestCoopapiWarehouseParamWarehouseInOutParam extends SDKDomain {

       	
    private $amount;
    
        /**
    * @return 库存变动量 整数表示库存增加 负数表述库存减少
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置库存变动量 整数表示库存增加 负数表述库存减少     
     * @param Long $amount     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $warehouseCode;
    
        /**
    * @return 外部系统的仓库编号
    */
        public function getWarehouseCode() {
        return $this->warehouseCode;
    }
    
    /**
     * 设置外部系统的仓库编号     
     * @param String $warehouseCode     
     * 参数示例：<pre>wh001</pre>     
     * 此参数必填     */
    public function setWarehouseCode( $warehouseCode) {
        $this->warehouseCode = $warehouseCode;
    }
    
        	
    private $billType;
    
        /**
    * @return 变动单名称
    */
        public function getBillType() {
        return $this->billType;
    }
    
    /**
     * 设置变动单名称     
     * @param String $billType     
     * 参数示例：<pre>add_Bill</pre>     
     * 此参数必填     */
    public function setBillType( $billType) {
        $this->billType = $billType;
    }
    
        	
    private $billName;
    
        /**
    * @return 变动单名称
    */
        public function getBillName() {
        return $this->billName;
    }
    
    /**
     * 设置变动单名称     
     * @param String $billName     
     * 参数示例：<pre>盘盈单</pre>     
     * 此参数必填     */
    public function setBillName( $billName) {
        $this->billName = $billName;
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
    * @return 外部系统的商品编号
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置外部系统的商品编号     
     * @param String $productCode     
     * 参数示例：<pre>Pt0001#Sku0001</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $billCode;
    
        /**
    * @return 变动单单号
    */
        public function getBillCode() {
        return $this->billCode;
    }
    
    /**
     * 设置变动单单号     
     * @param String $billCode     
     * 参数示例：<pre>BL0001</pre>     
     * 此参数必填     */
    public function setBillCode( $billCode) {
        $this->billCode = $billCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "warehouseCode", $this->stdResult )) {
    				$this->warehouseCode = $this->stdResult->{"warehouseCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "billType", $this->stdResult )) {
    				$this->billType = $this->stdResult->{"billType"};
    			}
    			    		    				    			    			if (array_key_exists ( "billName", $this->stdResult )) {
    				$this->billName = $this->stdResult->{"billName"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "billCode", $this->stdResult )) {
    				$this->billCode = $this->stdResult->{"billCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "warehouseCode", $this->arrayResult )) {
    			$this->warehouseCode = $arrayResult['warehouseCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "billType", $this->arrayResult )) {
    			$this->billType = $arrayResult['billType'];
    			}
    		    	    			    		    			if (array_key_exists ( "billName", $this->arrayResult )) {
    			$this->billName = $arrayResult['billName'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "billCode", $this->arrayResult )) {
    			$this->billCode = $arrayResult['billCode'];
    			}
    		    	    		}
 
   
}
?>