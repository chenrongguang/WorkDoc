<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaOfferPv.class.php');
include_once ('cn/alibaba/open/param/AlibabaOfferPriceranges.class.php');

class AlibabaOfferFastPublishsku extends SDKDomain {

       	
    private $amount;
    
        /**
    * @return 可售 数量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置可售 数量     
     * @param Integer $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $price;
    
        /**
    * @return 商品一口价 价格目前有些精确到小数点后面四位的，所以我们要考虑到精度的问题
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置商品一口价 价格目前有些精确到小数点后面四位的，所以我们要考虑到精度的问题     
     * @param String $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $outId;
    
        /**
    * @return 外部规格id
    */
        public function getOutId() {
        return $this->outId;
    }
    
    /**
     * 设置外部规格id     
     * @param String $outId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutId( $outId) {
        $this->outId = $outId;
    }
    
        	
    private $pictrueUrl;
    
        /**
    * @return 图片httpurl
    */
        public function getPictrueUrl() {
        return $this->pictrueUrl;
    }
    
    /**
     * 设置图片httpurl     
     * @param String $pictrueUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPictrueUrl( $pictrueUrl) {
        $this->pictrueUrl = $pictrueUrl;
    }
    
        	
    private $propertyValuePairs;
    
        /**
    * @return 属性pv
    */
        public function getPropertyValuePairs() {
        return $this->propertyValuePairs;
    }
    
    /**
     * 设置属性pv     
     * @param array include @see AlibabaOfferPv[] $propertyValuePairs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPropertyValuePairs(AlibabaOfferPv $propertyValuePairs) {
        $this->propertyValuePairs = $propertyValuePairs;
    }
    
        	
    private $priceRanges;
    
        /**
    * @return 阶梯价格设置
    */
        public function getPriceRanges() {
        return $this->priceRanges;
    }
    
    /**
     * 设置阶梯价格设置     
     * @param array include @see AlibabaOfferPriceranges[] $priceRanges     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPriceRanges(AlibabaOfferPriceranges $priceRanges) {
        $this->priceRanges = $priceRanges;
    }
    
        	
    private $cargo;
    
        /**
    * @return 单品货号
    */
        public function getCargo() {
        return $this->cargo;
    }
    
    /**
     * 设置单品货号     
     * @param String $cargo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCargo( $cargo) {
        $this->cargo = $cargo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "outId", $this->stdResult )) {
    				$this->outId = $this->stdResult->{"outId"};
    			}
    			    		    				    			    			if (array_key_exists ( "pictrueUrl", $this->stdResult )) {
    				$this->pictrueUrl = $this->stdResult->{"pictrueUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "propertyValuePairs", $this->stdResult )) {
    			$propertyValuePairsResult=$this->stdResult->{"propertyValuePairs"};
    				$object = json_decode ( json_encode ( $propertyValuePairsResult ), true );
					$this->propertyValuePairs = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOfferPvResult=new AlibabaOfferPv();
						$AlibabaOfferPvResult->setArrayResult($arrayobject );
						$this->propertyValuePairs [$i] = $AlibabaOfferPvResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "priceRanges", $this->stdResult )) {
    			$priceRangesResult=$this->stdResult->{"priceRanges"};
    				$object = json_decode ( json_encode ( $priceRangesResult ), true );
					$this->priceRanges = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOfferPricerangesResult=new AlibabaOfferPriceranges();
						$AlibabaOfferPricerangesResult->setArrayResult($arrayobject );
						$this->priceRanges [$i] = $AlibabaOfferPricerangesResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "cargo", $this->stdResult )) {
    				$this->cargo = $this->stdResult->{"cargo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "outId", $this->arrayResult )) {
    			$this->outId = $arrayResult['outId'];
    			}
    		    	    			    		    			if (array_key_exists ( "pictrueUrl", $this->arrayResult )) {
    			$this->pictrueUrl = $arrayResult['pictrueUrl'];
    			}
    		    	    			    		    		if (array_key_exists ( "propertyValuePairs", $this->arrayResult )) {
    		$propertyValuePairsResult=$arrayResult['propertyValuePairs'];
    			$this->propertyValuePairs = new AlibabaOfferPv();
    			$this->propertyValuePairs->setStdResult ( $propertyValuePairsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "priceRanges", $this->arrayResult )) {
    		$priceRangesResult=$arrayResult['priceRanges'];
    			$this->priceRanges = new AlibabaOfferPriceranges();
    			$this->priceRanges->setStdResult ( $priceRangesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "cargo", $this->arrayResult )) {
    			$this->cargo = $arrayResult['cargo'];
    			}
    		    	    		}
 
   
}
?>