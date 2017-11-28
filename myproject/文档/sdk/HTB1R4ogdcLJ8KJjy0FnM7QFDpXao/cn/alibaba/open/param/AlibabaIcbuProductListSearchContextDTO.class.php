<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductListSearchContextDTO extends SDKDomain {

       	
    private $similarProduct;
    
        /**
    * @return 
    */
        public function getSimilarProduct() {
        return $this->similarProduct;
    }
    
    /**
     * 设置     
     * @param Boolean $similarProduct     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSimilarProduct( $similarProduct) {
        $this->similarProduct = $similarProduct;
    }
    
        	
    private $stemQuery;
    
        /**
    * @return 
    */
        public function getStemQuery() {
        return $this->stemQuery;
    }
    
    /**
     * 设置     
     * @param String $stemQuery     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStemQuery( $stemQuery) {
        $this->stemQuery = $stemQuery;
    }
    
        	
    private $queryLevel;
    
        /**
    * @return 
    */
        public function getQueryLevel() {
        return $this->queryLevel;
    }
    
    /**
     * 设置     
     * @param String $queryLevel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQueryLevel( $queryLevel) {
        $this->queryLevel = $queryLevel;
    }
    
        	
    private $spUrl;
    
        /**
    * @return 
    */
        public function getSpUrl() {
        return $this->spUrl;
    }
    
    /**
     * 设置     
     * @param String $spUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpUrl( $spUrl) {
        $this->spUrl = $spUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "similarProduct", $this->stdResult )) {
    				$this->similarProduct = $this->stdResult->{"similarProduct"};
    			}
    			    		    				    			    			if (array_key_exists ( "stemQuery", $this->stdResult )) {
    				$this->stemQuery = $this->stdResult->{"stemQuery"};
    			}
    			    		    				    			    			if (array_key_exists ( "queryLevel", $this->stdResult )) {
    				$this->queryLevel = $this->stdResult->{"queryLevel"};
    			}
    			    		    				    			    			if (array_key_exists ( "spUrl", $this->stdResult )) {
    				$this->spUrl = $this->stdResult->{"spUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "similarProduct", $this->arrayResult )) {
    			$this->similarProduct = $arrayResult['similarProduct'];
    			}
    		    	    			    		    			if (array_key_exists ( "stemQuery", $this->arrayResult )) {
    			$this->stemQuery = $arrayResult['stemQuery'];
    			}
    		    	    			    		    			if (array_key_exists ( "queryLevel", $this->arrayResult )) {
    			$this->queryLevel = $arrayResult['queryLevel'];
    			}
    		    	    			    		    			if (array_key_exists ( "spUrl", $this->arrayResult )) {
    			$this->spUrl = $arrayResult['spUrl'];
    			}
    		    	    		}
 
   
}
?>