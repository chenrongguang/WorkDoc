<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDaixiaoSimpleSkuInfo extends SDKDomain {

       	
    private $amountOnSale;
    
        /**
    * @return 可售数量
    */
        public function getAmountOnSale() {
        return $this->amountOnSale;
    }
    
    /**
     * 设置可售数量     
     * @param Integer $amountOnSale     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmountOnSale( $amountOnSale) {
        $this->amountOnSale = $amountOnSale;
    }
    
        	
    private $proxyPrice;
    
        /**
    * @return 代销原价
    */
        public function getProxyPrice() {
        return $this->proxyPrice;
    }
    
    /**
     * 设置代销原价     
     * @param Double $proxyPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProxyPrice( $proxyPrice) {
        $this->proxyPrice = $proxyPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "amountOnSale", $this->stdResult )) {
    				$this->amountOnSale = $this->stdResult->{"amountOnSale"};
    			}
    			    		    				    			    			if (array_key_exists ( "proxyPrice", $this->stdResult )) {
    				$this->proxyPrice = $this->stdResult->{"proxyPrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "amountOnSale", $this->arrayResult )) {
    			$this->amountOnSale = $arrayResult['amountOnSale'];
    			}
    		    	    			    		    			if (array_key_exists ( "proxyPrice", $this->arrayResult )) {
    			$this->proxyPrice = $arrayResult['proxyPrice'];
    			}
    		    	    		}
 
   
}
?>