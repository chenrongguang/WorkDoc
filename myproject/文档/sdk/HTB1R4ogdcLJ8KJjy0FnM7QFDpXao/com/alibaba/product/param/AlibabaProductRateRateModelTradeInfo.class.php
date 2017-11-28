<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductRateRateModelTradeInfo extends SDKDomain {

       	
    private $countBuyerTrade;
    
        /**
    * @return 
    */
        public function getCountBuyerTrade() {
        return $this->countBuyerTrade;
    }
    
    /**
     * 设置     
     * @param Long $countBuyerTrade     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCountBuyerTrade( $countBuyerTrade) {
        $this->countBuyerTrade = $countBuyerTrade;
    }
    
        	
    private $quantity;
    
        /**
    * @return 
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置     
     * @param Double $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $countBuyerQuantity;
    
        /**
    * @return 
    */
        public function getCountBuyerQuantity() {
        return $this->countBuyerQuantity;
    }
    
    /**
     * 设置     
     * @param Double $countBuyerQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCountBuyerQuantity( $countBuyerQuantity) {
        $this->countBuyerQuantity = $countBuyerQuantity;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "countBuyerTrade", $this->stdResult )) {
    				$this->countBuyerTrade = $this->stdResult->{"countBuyerTrade"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "countBuyerQuantity", $this->stdResult )) {
    				$this->countBuyerQuantity = $this->stdResult->{"countBuyerQuantity"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "countBuyerTrade", $this->arrayResult )) {
    			$this->countBuyerTrade = $arrayResult['countBuyerTrade'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['quantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "countBuyerQuantity", $this->arrayResult )) {
    			$this->countBuyerQuantity = $arrayResult['countBuyerQuantity'];
    			}
    		    	    		}
 
   
}
?>