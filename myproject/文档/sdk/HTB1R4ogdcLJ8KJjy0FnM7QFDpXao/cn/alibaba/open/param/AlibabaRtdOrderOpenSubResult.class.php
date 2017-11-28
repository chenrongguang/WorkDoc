<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRtdOrderOpenSubResult extends SDKDomain {

       	
    private $subBillNo;
    
        /**
    * @return 三江购物子订单编号
    */
        public function getSubBillNo() {
        return $this->subBillNo;
    }
    
    /**
     * 设置三江购物子订单编号     
     * @param String $subBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubBillNo( $subBillNo) {
        $this->subBillNo = $subBillNo;
    }
    
        	
    private $subAliBillNo;
    
        /**
    * @return 对应内部订单编号
    */
        public function getSubAliBillNo() {
        return $this->subAliBillNo;
    }
    
    /**
     * 设置对应内部订单编号     
     * @param String $subAliBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubAliBillNo( $subAliBillNo) {
        $this->subAliBillNo = $subAliBillNo;
    }
    
        	
    private $barCode;
    
        /**
    * @return 商品条码
    */
        public function getBarCode() {
        return $this->barCode;
    }
    
    /**
     * 设置商品条码     
     * @param String $barCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBarCode( $barCode) {
        $this->barCode = $barCode;
    }
    
        	
    private $skuId;
    
        /**
    * @return 规格ID
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置规格ID     
     * @param String $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $amount;
    
        /**
    * @return 商品实际购买数量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置商品实际购买数量     
     * @param Integer $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $price;
    
        /**
    * @return 三江的采购价格(单位:分)
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置三江的采购价格(单位:分)     
     * @param Long $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $aliPrice;
    
        /**
    * @return 内部设置的采购价格(单位:分)
    */
        public function getAliPrice() {
        return $this->aliPrice;
    }
    
    /**
     * 设置内部设置的采购价格(单位:分)     
     * @param Long $aliPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliPrice( $aliPrice) {
        $this->aliPrice = $aliPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subBillNo", $this->stdResult )) {
    				$this->subBillNo = $this->stdResult->{"subBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "subAliBillNo", $this->stdResult )) {
    				$this->subAliBillNo = $this->stdResult->{"subAliBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "barCode", $this->stdResult )) {
    				$this->barCode = $this->stdResult->{"barCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliPrice", $this->stdResult )) {
    				$this->aliPrice = $this->stdResult->{"aliPrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subBillNo", $this->arrayResult )) {
    			$this->subBillNo = $arrayResult['subBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "subAliBillNo", $this->arrayResult )) {
    			$this->subAliBillNo = $arrayResult['subAliBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "barCode", $this->arrayResult )) {
    			$this->barCode = $arrayResult['barCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['skuId'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliPrice", $this->arrayResult )) {
    			$this->aliPrice = $arrayResult['aliPrice'];
    			}
    		    	    		}
 
   
}
?>