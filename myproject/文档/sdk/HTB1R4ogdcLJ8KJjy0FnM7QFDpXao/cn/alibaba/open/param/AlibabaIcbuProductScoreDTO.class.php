<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductScoreDTO extends SDKDomain {

       	
    private $totalScore;
    
        /**
    * @return 
    */
        public function getTotalScore() {
        return $this->totalScore;
    }
    
    /**
     * 设置     
     * @param Double $totalScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalScore( $totalScore) {
        $this->totalScore = $totalScore;
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
    
        	
    private $attrScore;
    
        /**
    * @return 
    */
        public function getAttrScore() {
        return $this->attrScore;
    }
    
    /**
     * 设置     
     * @param Double $attrScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrScore( $attrScore) {
        $this->attrScore = $attrScore;
    }
    
        	
    private $descScore;
    
        /**
    * @return 
    */
        public function getDescScore() {
        return $this->descScore;
    }
    
    /**
     * 设置     
     * @param Double $descScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescScore( $descScore) {
        $this->descScore = $descScore;
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
					    			    			if (array_key_exists ( "totalScore", $this->stdResult )) {
    				$this->totalScore = $this->stdResult->{"totalScore"};
    			}
    			    		    				    			    			if (array_key_exists ( "productLongId", $this->stdResult )) {
    				$this->productLongId = $this->stdResult->{"productLongId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrScore", $this->stdResult )) {
    				$this->attrScore = $this->stdResult->{"attrScore"};
    			}
    			    		    				    			    			if (array_key_exists ( "descScore", $this->stdResult )) {
    				$this->descScore = $this->stdResult->{"descScore"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalScore", $this->arrayResult )) {
    			$this->totalScore = $arrayResult['totalScore'];
    			}
    		    	    			    		    			if (array_key_exists ( "productLongId", $this->arrayResult )) {
    			$this->productLongId = $arrayResult['productLongId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrScore", $this->arrayResult )) {
    			$this->attrScore = $arrayResult['attrScore'];
    			}
    		    	    			    		    			if (array_key_exists ( "descScore", $this->arrayResult )) {
    			$this->descScore = $arrayResult['descScore'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    		}
 
   
}
?>