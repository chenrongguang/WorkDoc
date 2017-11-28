<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductListDispatchObject extends SDKDomain {

       	
    private $stock;
    
        /**
    * @return 
    */
        public function getStock() {
        return $this->stock;
    }
    
    /**
     * 设置     
     * @param Integer $stock     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStock( $stock) {
        $this->stock = $stock;
    }
    
        	
    private $dispatchPlace;
    
        /**
    * @return 
    */
        public function getDispatchPlace() {
        return $this->dispatchPlace;
    }
    
    /**
     * 设置     
     * @param String $dispatchPlace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDispatchPlace( $dispatchPlace) {
        $this->dispatchPlace = $dispatchPlace;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "stock", $this->stdResult )) {
    				$this->stock = $this->stdResult->{"stock"};
    			}
    			    		    				    			    			if (array_key_exists ( "dispatchPlace", $this->stdResult )) {
    				$this->dispatchPlace = $this->stdResult->{"dispatchPlace"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "stock", $this->arrayResult )) {
    			$this->stock = $arrayResult['stock'];
    			}
    		    	    			    		    			if (array_key_exists ( "dispatchPlace", $this->arrayResult )) {
    			$this->dispatchPlace = $arrayResult['dispatchPlace'];
    			}
    		    	    		}
 
   
}
?>