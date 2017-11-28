<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductDetailDTO extends SDKDomain {

       	
    private $summary;
    
        /**
    * @return 
    */
        public function getSummary() {
        return $this->summary;
    }
    
    /**
     * 设置     
     * @param String $summary     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummary( $summary) {
        $this->summary = $summary;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $description;
    
        /**
    * @return 
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
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
					    			    			if (array_key_exists ( "summary", $this->stdResult )) {
    				$this->summary = $this->stdResult->{"summary"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "productLongId", $this->stdResult )) {
    				$this->productLongId = $this->stdResult->{"productLongId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "summary", $this->arrayResult )) {
    			$this->summary = $arrayResult['summary'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "productLongId", $this->arrayResult )) {
    			$this->productLongId = $arrayResult['productLongId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    		}
 
   
}
?>