<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainProductProductCoop.class.php');

class CaigouApiProductQueryProductByIdResult {

        	
    private $product;
    
        /**
    * @return 
    */
        public function getProduct() {
        return $this->product;
    }
    
    /**
     * 设置     
     * @param CaigouDomainProductProductCoop $product     
          
     * 此参数必填     */
    public function setProduct(CaigouDomainProductProductCoop $product) {
        $this->product = $product;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "product", $this->stdResult )) {
    				$productResult=$this->stdResult->{"product"};
    				$this->product = new CaigouDomainProductProductCoop();
    				$this->product->setStdResult ( $productResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "product", $this->arrayResult )) {
    		$productResult=$arrayResult['product'];
    			    			$this->product = new CaigouDomainProductProductCoop();
    			    			$this->product->setStdResult ( $productResult);
    		}
    		    	    		}

}
?>