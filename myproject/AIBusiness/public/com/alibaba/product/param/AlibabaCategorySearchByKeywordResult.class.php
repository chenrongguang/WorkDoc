<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaCategoryCategoryInfo.class.php');

class AlibabaCategorySearchByKeywordResult {

        	
    private $products;
    
        /**
    * @return 
    */
        public function getProducts() {
        return $this->products;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaCategoryCategoryInfo[] $products     
          
     * 此参数必填     */
    public function setProducts(AlibabaCategoryCategoryInfo $products) {
        $this->products = $products;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "products", $this->stdResult )) {
    			$productsResult=$this->stdResult->{"products"};
    				$object = json_decode ( json_encode ( $productsResult ), true );
					$this->products = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCategoryCategoryInfoResult=new AlibabaCategoryCategoryInfo();
						$AlibabaCategoryCategoryInfoResult->setArrayResult($arrayobject );
						$this->products [$i] = $AlibabaCategoryCategoryInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "products", $this->arrayResult )) {
    		$productsResult=$arrayResult['products'];
    			$this->products = new AlibabaCategoryCategoryInfo();
    			$this->products->setStdResult ( $productsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['errorMsg'];
    			}
    		    	    		}

}
?>