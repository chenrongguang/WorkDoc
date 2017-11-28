<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiProductModelSkuSpecAttribute.class.php');

class AlibabaTradeBizOrderEntry extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 订单明细的id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置订单明细的id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $price;
    
        /**
    * @return 产品单价
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置产品单价     
     * @param Long $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $quantity;
    
        /**
    * @return 购买的商品数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置购买的商品数量     
     * @param BigDecimal $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $quantityFactor;
    
        /**
    * @return 数量的精度系数，用来表示数量的最小精度为1/quantityFactor个unit
    */
        public function getQuantityFactor() {
        return $this->quantityFactor;
    }
    
    /**
     * 设置数量的精度系数，用来表示数量的最小精度为1/quantityFactor个unit     
     * @param BigDecimal $quantityFactor     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantityFactor( $quantityFactor) {
        $this->quantityFactor = $quantityFactor;
    }
    
        	
    private $productName;
    
        /**
    * @return 产品名称
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $productPic;
    
        /**
    * @return 产品图片
    */
        public function getProductPic() {
        return $this->productPic;
    }
    
    /**
     * 设置产品图片     
     * @param array include @see String[] $productPic     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductPic( $productPic) {
        $this->productPic = $productPic;
    }
    
        	
    private $entryDiscount;
    
        /**
    * @return 订单明细涨价或降价的金额（也就是卖家修改的价格），如果是降价，为负数，如果是涨价，为正数
    */
        public function getEntryDiscount() {
        return $this->entryDiscount;
    }
    
    /**
     * 设置订单明细涨价或降价的金额（也就是卖家修改的价格），如果是降价，为负数，如果是涨价，为正数     
     * @param Long $entryDiscount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEntryDiscount( $entryDiscount) {
        $this->entryDiscount = $entryDiscount;
    }
    
        	
    private $specId;
    
        /**
    * @return specId
    */
        public function getSpecId() {
        return $this->specId;
    }
    
    /**
     * 设置specId     
     * @param String $specId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }
    
        	
    private $entryStatus;
    
        /**
    * @return 状态
    */
        public function getEntryStatus() {
        return $this->entryStatus;
    }
    
    /**
     * 设置状态     
     * @param String $entryStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEntryStatus( $entryStatus) {
        $this->entryStatus = $entryStatus;
    }
    
        	
    private $entryCodStatus;
    
        /**
    * @return COD物流状态，与淘宝一致
    */
        public function getEntryCodStatus() {
        return $this->entryCodStatus;
    }
    
    /**
     * 设置COD物流状态，与淘宝一致     
     * @param String $entryCodStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEntryCodStatus( $entryCodStatus) {
        $this->entryCodStatus = $entryCodStatus;
    }
    
        	
    private $specInfo;
    
        /**
    * @return 规格属性信息
    */
        public function getSpecInfo() {
        return $this->specInfo;
    }
    
    /**
     * 设置规格属性信息     
     * @param array include @see ComAlibabaCaigouApiProductModelSkuSpecAttribute[] $specInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecInfo(ComAlibabaCaigouApiProductModelSkuSpecAttribute $specInfo) {
        $this->specInfo = $specInfo;
    }
    
        	
    private $sourceId;
    
        /**
    * @return 产品的offerId
    */
        public function getSourceId() {
        return $this->sourceId;
    }
    
    /**
     * 设置产品的offerId     
     * @param Long $sourceId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceId( $sourceId) {
        $this->sourceId = $sourceId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantityFactor", $this->stdResult )) {
    				$this->quantityFactor = $this->stdResult->{"quantityFactor"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "productPic", $this->stdResult )) {
    				$this->productPic = $this->stdResult->{"productPic"};
    			}
    			    		    				    			    			if (array_key_exists ( "entryDiscount", $this->stdResult )) {
    				$this->entryDiscount = $this->stdResult->{"entryDiscount"};
    			}
    			    		    				    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    				    			    			if (array_key_exists ( "entryStatus", $this->stdResult )) {
    				$this->entryStatus = $this->stdResult->{"entryStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "entryCodStatus", $this->stdResult )) {
    				$this->entryCodStatus = $this->stdResult->{"entryCodStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "specInfo", $this->stdResult )) {
    			$specInfoResult=$this->stdResult->{"specInfo"};
    				$object = json_decode ( json_encode ( $specInfoResult ), true );
					$this->specInfo = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiProductModelSkuSpecAttributeResult=new ComAlibabaCaigouApiProductModelSkuSpecAttribute();
						$ComAlibabaCaigouApiProductModelSkuSpecAttributeResult->setArrayResult($arrayobject );
						$this->specInfo [$i] = $ComAlibabaCaigouApiProductModelSkuSpecAttributeResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "sourceId", $this->stdResult )) {
    				$this->sourceId = $this->stdResult->{"sourceId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['quantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantityFactor", $this->arrayResult )) {
    			$this->quantityFactor = $arrayResult['quantityFactor'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "productPic", $this->arrayResult )) {
    			$this->productPic = $arrayResult['productPic'];
    			}
    		    	    			    		    			if (array_key_exists ( "entryDiscount", $this->arrayResult )) {
    			$this->entryDiscount = $arrayResult['entryDiscount'];
    			}
    		    	    			    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['specId'];
    			}
    		    	    			    		    			if (array_key_exists ( "entryStatus", $this->arrayResult )) {
    			$this->entryStatus = $arrayResult['entryStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "entryCodStatus", $this->arrayResult )) {
    			$this->entryCodStatus = $arrayResult['entryCodStatus'];
    			}
    		    	    			    		    		if (array_key_exists ( "specInfo", $this->arrayResult )) {
    		$specInfoResult=$arrayResult['specInfo'];
    			$this->specInfo = new ComAlibabaCaigouApiProductModelSkuSpecAttribute();
    			$this->specInfo->setStdResult ( $specInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "sourceId", $this->arrayResult )) {
    			$this->sourceId = $arrayResult['sourceId'];
    			}
    		    	    		}
 
   
}
?>