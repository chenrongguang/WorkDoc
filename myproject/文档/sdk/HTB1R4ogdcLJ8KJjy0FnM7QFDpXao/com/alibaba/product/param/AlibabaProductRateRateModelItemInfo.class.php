<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductRateRateModelItemInfo extends SDKDomain {

       	
    private $skuInfo;
    
        /**
    * @return 
    */
        public function getSkuInfo() {
        return $this->skuInfo;
    }
    
    /**
     * 设置     
     * @param String $skuInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuInfo( $skuInfo) {
        $this->skuInfo = $skuInfo;
    }
    
        	
    private $minOfferPrice;
    
        /**
    * @return 
    */
        public function getMinOfferPrice() {
        return $this->minOfferPrice;
    }
    
    /**
     * 设置     
     * @param Long $minOfferPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOfferPrice( $minOfferPrice) {
        $this->minOfferPrice = $minOfferPrice;
    }
    
        	
    private $maxOfferPrice;
    
        /**
    * @return 
    */
        public function getMaxOfferPrice() {
        return $this->maxOfferPrice;
    }
    
    /**
     * 设置     
     * @param Long $maxOfferPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMaxOfferPrice( $maxOfferPrice) {
        $this->maxOfferPrice = $maxOfferPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuInfo", $this->stdResult )) {
    				$this->skuInfo = $this->stdResult->{"skuInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOfferPrice", $this->stdResult )) {
    				$this->minOfferPrice = $this->stdResult->{"minOfferPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxOfferPrice", $this->stdResult )) {
    				$this->maxOfferPrice = $this->stdResult->{"maxOfferPrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuInfo", $this->arrayResult )) {
    			$this->skuInfo = $arrayResult['skuInfo'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOfferPrice", $this->arrayResult )) {
    			$this->minOfferPrice = $arrayResult['minOfferPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxOfferPrice", $this->arrayResult )) {
    			$this->maxOfferPrice = $arrayResult['maxOfferPrice'];
    			}
    		    	    		}
 
   
}
?>