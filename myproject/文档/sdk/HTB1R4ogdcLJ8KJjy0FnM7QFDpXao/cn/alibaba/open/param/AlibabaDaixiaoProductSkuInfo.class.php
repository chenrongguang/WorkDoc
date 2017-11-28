<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaDaixiaoSkuAttributeInfo.class.php');

class AlibabaDaixiaoProductSkuInfo extends SDKDomain {

       	
    private $skuId;
    
        /**
    * @return skuId
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置skuId     
     * @param Long $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
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
    
        	
    private $picUrl;
    
        /**
    * @return 图片地址
    */
        public function getPicUrl() {
        return $this->picUrl;
    }
    
    /**
     * 设置图片地址     
     * @param String $picUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPicUrl( $picUrl) {
        $this->picUrl = $picUrl;
    }
    
        	
    private $price;
    
        /**
    * @return 采购价
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置采购价     
     * @param String $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $retailPrice;
    
        /**
    * @return 建议零售价
    */
        public function getRetailPrice() {
        return $this->retailPrice;
    }
    
    /**
     * 设置建议零售价     
     * @param String $retailPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRetailPrice( $retailPrice) {
        $this->retailPrice = $retailPrice;
    }
    
        	
    private $minRetailPrice;
    
        /**
    * @return 最低建议零售价
    */
        public function getMinRetailPrice() {
        return $this->minRetailPrice;
    }
    
    /**
     * 设置最低建议零售价     
     * @param String $minRetailPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinRetailPrice( $minRetailPrice) {
        $this->minRetailPrice = $minRetailPrice;
    }
    
        	
    private $amountOnSale;
    
        /**
    * @return 库存
    */
        public function getAmountOnSale() {
        return $this->amountOnSale;
    }
    
    /**
     * 设置库存     
     * @param Integer $amountOnSale     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmountOnSale( $amountOnSale) {
        $this->amountOnSale = $amountOnSale;
    }
    
        	
    private $attributes;
    
        /**
    * @return 其他属性
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置其他属性     
     * @param array include @see AlibabaDaixiaoSkuAttributeInfo[] $attributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaDaixiaoSkuAttributeInfo $attributes) {
        $this->attributes = $attributes;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    				    			    			if (array_key_exists ( "picUrl", $this->stdResult )) {
    				$this->picUrl = $this->stdResult->{"picUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "retailPrice", $this->stdResult )) {
    				$this->retailPrice = $this->stdResult->{"retailPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "minRetailPrice", $this->stdResult )) {
    				$this->minRetailPrice = $this->stdResult->{"minRetailPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "amountOnSale", $this->stdResult )) {
    				$this->amountOnSale = $this->stdResult->{"amountOnSale"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    			$attributesResult=$this->stdResult->{"attributes"};
    				$object = json_decode ( json_encode ( $attributesResult ), true );
					$this->attributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaDaixiaoSkuAttributeInfoResult=new AlibabaDaixiaoSkuAttributeInfo();
						$AlibabaDaixiaoSkuAttributeInfoResult->setArrayResult($arrayobject );
						$this->attributes [$i] = $AlibabaDaixiaoSkuAttributeInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['skuId'];
    			}
    		    	    			    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['specId'];
    			}
    		    	    			    		    			if (array_key_exists ( "picUrl", $this->arrayResult )) {
    			$this->picUrl = $arrayResult['picUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "retailPrice", $this->arrayResult )) {
    			$this->retailPrice = $arrayResult['retailPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "minRetailPrice", $this->arrayResult )) {
    			$this->minRetailPrice = $arrayResult['minRetailPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "amountOnSale", $this->arrayResult )) {
    			$this->amountOnSale = $arrayResult['amountOnSale'];
    			}
    		    	    			    		    		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['attributes'];
    			$this->attributes = new AlibabaDaixiaoSkuAttributeInfo();
    			$this->attributes->setStdResult ( $attributesResult);
    		}
    		    	    		}
 
   
}
?>