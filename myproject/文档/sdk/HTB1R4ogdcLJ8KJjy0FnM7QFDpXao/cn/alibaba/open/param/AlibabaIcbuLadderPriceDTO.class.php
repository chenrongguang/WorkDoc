<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuLadderPriceDTO extends SDKDomain {

       	
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
    
        	
    private $price;
    
        /**
    * @return 
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置     
     * @param BigDecimal $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $maxQuantity;
    
        /**
    * @return 
    */
        public function getMaxQuantity() {
        return $this->maxQuantity;
    }
    
    /**
     * 设置     
     * @param Integer $maxQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMaxQuantity( $maxQuantity) {
        $this->maxQuantity = $maxQuantity;
    }
    
        	
    private $minQuantity;
    
        /**
    * @return 
    */
        public function getMinQuantity() {
        return $this->minQuantity;
    }
    
    /**
     * 设置     
     * @param Integer $minQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinQuantity( $minQuantity) {
        $this->minQuantity = $minQuantity;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxQuantity", $this->stdResult )) {
    				$this->maxQuantity = $this->stdResult->{"maxQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "minQuantity", $this->stdResult )) {
    				$this->minQuantity = $this->stdResult->{"minQuantity"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxQuantity", $this->arrayResult )) {
    			$this->maxQuantity = $arrayResult['maxQuantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "minQuantity", $this->arrayResult )) {
    			$this->minQuantity = $arrayResult['minQuantity'];
    			}
    		    	    		}
 
   
}
?>