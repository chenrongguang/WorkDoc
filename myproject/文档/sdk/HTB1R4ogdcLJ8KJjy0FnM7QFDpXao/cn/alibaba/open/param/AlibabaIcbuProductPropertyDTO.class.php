<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductPropertyDTO extends SDKDomain {

       	
    private $attrValueId;
    
        /**
    * @return 
    */
        public function getAttrValueId() {
        return $this->attrValueId;
    }
    
    /**
     * 设置     
     * @param Integer $attrValueId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrValueId( $attrValueId) {
        $this->attrValueId = $attrValueId;
    }
    
        	
    private $attrNameId;
    
        /**
    * @return 
    */
        public function getAttrNameId() {
        return $this->attrNameId;
    }
    
    /**
     * 设置     
     * @param Integer $attrNameId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrNameId( $attrNameId) {
        $this->attrNameId = $attrNameId;
    }
    
        	
    private $productLongId;
    
        /**
    * @return 
    */
        public function getProductLongId() {
        return $this->productLongId;
    }
    
    /**
     * 设置     
     * @param Long $productLongId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductLongId( $productLongId) {
        $this->productLongId = $productLongId;
    }
    
        	
    private $attrName;
    
        /**
    * @return 
    */
        public function getAttrName() {
        return $this->attrName;
    }
    
    /**
     * 设置     
     * @param String $attrName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrName( $attrName) {
        $this->attrName = $attrName;
    }
    
        	
    private $attrValue;
    
        /**
    * @return 
    */
        public function getAttrValue() {
        return $this->attrValue;
    }
    
    /**
     * 设置     
     * @param String $attrValue     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrValue( $attrValue) {
        $this->attrValue = $attrValue;
    }
    
        	
    private $productId;
    
        /**
    * @return 
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置     
     * @param Integer $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attrValueId", $this->stdResult )) {
    				$this->attrValueId = $this->stdResult->{"attrValueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrNameId", $this->stdResult )) {
    				$this->attrNameId = $this->stdResult->{"attrNameId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productLongId", $this->stdResult )) {
    				$this->productLongId = $this->stdResult->{"productLongId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrName", $this->stdResult )) {
    				$this->attrName = $this->stdResult->{"attrName"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrValue", $this->stdResult )) {
    				$this->attrValue = $this->stdResult->{"attrValue"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "attrValueId", $this->arrayResult )) {
    			$this->attrValueId = $arrayResult['attrValueId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrNameId", $this->arrayResult )) {
    			$this->attrNameId = $arrayResult['attrNameId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productLongId", $this->arrayResult )) {
    			$this->productLongId = $arrayResult['productLongId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrName", $this->arrayResult )) {
    			$this->attrName = $arrayResult['attrName'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrValue", $this->arrayResult )) {
    			$this->attrValue = $arrayResult['attrValue'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    		}
 
   
}
?>