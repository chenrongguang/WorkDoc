<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRtdOrderOpenSubOrderParam extends SDKDomain {

       	
    private $subBillNo;
    
        /**
    * @return 子订单编号
    */
        public function getSubBillNo() {
        return $this->subBillNo;
    }
    
    /**
     * 设置子订单编号     
     * @param String $subBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubBillNo( $subBillNo) {
        $this->subBillNo = $subBillNo;
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
    * @return 采购数量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置采购数量     
     * @param Integer $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $price;
    
        /**
    * @return 采购价格(单位:分)
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置采购价格(单位:分)     
     * @param Long $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $unit;
    
        /**
    * @return 采购单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置采购单位     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $title;
    
        /**
    * @return 商品标题或描述
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置商品标题或描述     
     * @param String $title     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $specification;
    
        /**
    * @return 规格描述(200字以内）
    */
        public function getSpecification() {
        return $this->specification;
    }
    
    /**
     * 设置规格描述(200字以内）     
     * @param String $specification     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecification( $specification) {
        $this->specification = $specification;
    }
    
        	
    private $extendSub;
    
        /**
    * @return 预留扩展
    */
        public function getExtendSub() {
        return $this->extendSub;
    }
    
    /**
     * 设置预留扩展     
     * @param Map $extendSub     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtendSub(array $extendSub) {
        $this->extendSub = $extendSub;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subBillNo", $this->stdResult )) {
    				$this->subBillNo = $this->stdResult->{"subBillNo"};
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
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "specification", $this->stdResult )) {
    				$this->specification = $this->stdResult->{"specification"};
    			}
    			    		    				    			    			if (array_key_exists ( "extendSub", $this->stdResult )) {
    				$this->extendSub = $this->stdResult->{"extendSub"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subBillNo", $this->arrayResult )) {
    			$this->subBillNo = $arrayResult['subBillNo'];
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
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "specification", $this->arrayResult )) {
    			$this->specification = $arrayResult['specification'];
    			}
    		    	    			    		    			if (array_key_exists ( "extendSub", $this->arrayResult )) {
    			$this->extendSub = $arrayResult['extendSub'];
    			}
    		    	    		}
 
   
}
?>