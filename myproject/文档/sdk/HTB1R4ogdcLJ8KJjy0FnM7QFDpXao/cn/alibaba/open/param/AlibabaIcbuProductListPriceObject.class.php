<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductListPriceObject extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $quantityMin;
    
        /**
    * @return 
    */
        public function getQuantityMin() {
        return $this->quantityMin;
    }
    
    /**
     * 设置     
     * @param Integer $quantityMin     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantityMin( $quantityMin) {
        $this->quantityMin = $quantityMin;
    }
    
        	
    private $price;
    
        /**
    * @return 
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置     
     * @param Double $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $quantityMax;
    
        /**
    * @return 
    */
        public function getQuantityMax() {
        return $this->quantityMax;
    }
    
    /**
     * 设置     
     * @param Integer $quantityMax     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantityMax( $quantityMax) {
        $this->quantityMax = $quantityMax;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantityMin", $this->stdResult )) {
    				$this->quantityMin = $this->stdResult->{"quantityMin"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantityMax", $this->stdResult )) {
    				$this->quantityMax = $this->stdResult->{"quantityMax"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantityMin", $this->arrayResult )) {
    			$this->quantityMin = $arrayResult['quantityMin'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantityMax", $this->arrayResult )) {
    			$this->quantityMax = $arrayResult['quantityMax'];
    			}
    		    	    		}
 
   
}
?>