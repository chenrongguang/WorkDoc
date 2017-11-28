<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaUnicomSkuModel extends SDKDomain {

       	
    private $skuId;
    
        /**
    * @return 商品编号
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置商品编号     
     * @param String $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $num;
    
        /**
    * @return 商品数量
    */
        public function getNum() {
        return $this->num;
    }
    
    /**
     * 设置商品数量     
     * @param Long $num     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNum( $num) {
        $this->num = $num;
    }
    
        	
    private $nakedprice;
    
        /**
    * @return 商品裸价
    */
        public function getNakedprice() {
        return $this->nakedprice;
    }
    
    /**
     * 设置商品裸价     
     * @param Long $nakedprice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNakedprice( $nakedprice) {
        $this->nakedprice = $nakedprice;
    }
    
        	
    private $taxprice;
    
        /**
    * @return 商品税价
    */
        public function getTaxprice() {
        return $this->taxprice;
    }
    
    /**
     * 设置商品税价     
     * @param Long $taxprice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaxprice( $taxprice) {
        $this->taxprice = $taxprice;
    }
    
        	
    private $taxRate;
    
        /**
    * @return 商品税率
    */
        public function getTaxRate() {
        return $this->taxRate;
    }
    
    /**
     * 设置商品税率     
     * @param Long $taxRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaxRate( $taxRate) {
        $this->taxRate = $taxRate;
    }
    
        	
    private $bizPrice;
    
        /**
    * @return 商品企业价
    */
        public function getBizPrice() {
        return $this->bizPrice;
    }
    
    /**
     * 设置商品企业价     
     * @param Long $bizPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizPrice( $bizPrice) {
        $this->bizPrice = $bizPrice;
    }
    
        	
    private $nakedPriceTotal;
    
        /**
    * @return 商品裸价合计
    */
        public function getNakedPriceTotal() {
        return $this->nakedPriceTotal;
    }
    
    /**
     * 设置商品裸价合计     
     * @param Long $nakedPriceTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNakedPriceTotal( $nakedPriceTotal) {
        $this->nakedPriceTotal = $nakedPriceTotal;
    }
    
        	
    private $taxPriceTotal;
    
        /**
    * @return 商品税额合计
    */
        public function getTaxPriceTotal() {
        return $this->taxPriceTotal;
    }
    
    /**
     * 设置商品税额合计     
     * @param Long $taxPriceTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaxPriceTotal( $taxPriceTotal) {
        $this->taxPriceTotal = $taxPriceTotal;
    }
    
        	
    private $bizPriceTotal;
    
        /**
    * @return 商品企业价合
    */
        public function getBizPriceTotal() {
        return $this->bizPriceTotal;
    }
    
    /**
     * 设置商品企业价合     
     * @param Long $bizPriceTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizPriceTotal( $bizPriceTotal) {
        $this->bizPriceTotal = $bizPriceTotal;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "num", $this->stdResult )) {
    				$this->num = $this->stdResult->{"num"};
    			}
    			    		    				    			    			if (array_key_exists ( "nakedprice", $this->stdResult )) {
    				$this->nakedprice = $this->stdResult->{"nakedprice"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxprice", $this->stdResult )) {
    				$this->taxprice = $this->stdResult->{"taxprice"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxRate", $this->stdResult )) {
    				$this->taxRate = $this->stdResult->{"taxRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizPrice", $this->stdResult )) {
    				$this->bizPrice = $this->stdResult->{"bizPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "nakedPriceTotal", $this->stdResult )) {
    				$this->nakedPriceTotal = $this->stdResult->{"nakedPriceTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxPriceTotal", $this->stdResult )) {
    				$this->taxPriceTotal = $this->stdResult->{"taxPriceTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizPriceTotal", $this->stdResult )) {
    				$this->bizPriceTotal = $this->stdResult->{"bizPriceTotal"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['skuId'];
    			}
    		    	    			    		    			if (array_key_exists ( "num", $this->arrayResult )) {
    			$this->num = $arrayResult['num'];
    			}
    		    	    			    		    			if (array_key_exists ( "nakedprice", $this->arrayResult )) {
    			$this->nakedprice = $arrayResult['nakedprice'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxprice", $this->arrayResult )) {
    			$this->taxprice = $arrayResult['taxprice'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxRate", $this->arrayResult )) {
    			$this->taxRate = $arrayResult['taxRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizPrice", $this->arrayResult )) {
    			$this->bizPrice = $arrayResult['bizPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "nakedPriceTotal", $this->arrayResult )) {
    			$this->nakedPriceTotal = $arrayResult['nakedPriceTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxPriceTotal", $this->arrayResult )) {
    			$this->taxPriceTotal = $arrayResult['taxPriceTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizPriceTotal", $this->arrayResult )) {
    			$this->bizPriceTotal = $arrayResult['bizPriceTotal'];
    			}
    		    	    		}
 
   
}
?>