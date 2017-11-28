<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductEffectDTO extends SDKDomain {

       	
    private $keywordEffect;
    
        /**
    * @return 
    */
        public function getKeywordEffect() {
        return $this->keywordEffect;
    }
    
    /**
     * 设置     
     * @param String $keywordEffect     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKeywordEffect( $keywordEffect) {
        $this->keywordEffect = $keywordEffect;
    }
    
        	
    private $showNum;
    
        /**
    * @return 
    */
        public function getShowNum() {
        return $this->showNum;
    }
    
    /**
     * 设置     
     * @param Long $showNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShowNum( $showNum) {
        $this->showNum = $showNum;
    }
    
        	
    private $visitorCnt;
    
        /**
    * @return 
    */
        public function getVisitorCnt() {
        return $this->visitorCnt;
    }
    
    /**
     * 设置     
     * @param Long $visitorCnt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVisitorCnt( $visitorCnt) {
        $this->visitorCnt = $visitorCnt;
    }
    
        	
    private $clickNum;
    
        /**
    * @return 
    */
        public function getClickNum() {
        return $this->clickNum;
    }
    
    /**
     * 设置     
     * @param Long $clickNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setClickNum( $clickNum) {
        $this->clickNum = $clickNum;
    }
    
        	
    private $fbNum;
    
        /**
    * @return 
    */
        public function getFbNum() {
        return $this->fbNum;
    }
    
    /**
     * 设置     
     * @param Long $fbNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFbNum( $fbNum) {
        $this->fbNum = $fbNum;
    }
    
        	
    private $fbRate;
    
        /**
    * @return 
    */
        public function getFbRate() {
        return $this->fbRate;
    }
    
    /**
     * 设置     
     * @param Double $fbRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFbRate( $fbRate) {
        $this->fbRate = $fbRate;
    }
    
        	
    private $clickRate;
    
        /**
    * @return 
    */
        public function getClickRate() {
        return $this->clickRate;
    }
    
    /**
     * 设置     
     * @param Double $clickRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setClickRate( $clickRate) {
        $this->clickRate = $clickRate;
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
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "keywordEffect", $this->stdResult )) {
    				$this->keywordEffect = $this->stdResult->{"keywordEffect"};
    			}
    			    		    				    			    			if (array_key_exists ( "showNum", $this->stdResult )) {
    				$this->showNum = $this->stdResult->{"showNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "visitorCnt", $this->stdResult )) {
    				$this->visitorCnt = $this->stdResult->{"visitorCnt"};
    			}
    			    		    				    			    			if (array_key_exists ( "clickNum", $this->stdResult )) {
    				$this->clickNum = $this->stdResult->{"clickNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "fbNum", $this->stdResult )) {
    				$this->fbNum = $this->stdResult->{"fbNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "fbRate", $this->stdResult )) {
    				$this->fbRate = $this->stdResult->{"fbRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "clickRate", $this->stdResult )) {
    				$this->clickRate = $this->stdResult->{"clickRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "keywordEffect", $this->arrayResult )) {
    			$this->keywordEffect = $arrayResult['keywordEffect'];
    			}
    		    	    			    		    			if (array_key_exists ( "showNum", $this->arrayResult )) {
    			$this->showNum = $arrayResult['showNum'];
    			}
    		    	    			    		    			if (array_key_exists ( "visitorCnt", $this->arrayResult )) {
    			$this->visitorCnt = $arrayResult['visitorCnt'];
    			}
    		    	    			    		    			if (array_key_exists ( "clickNum", $this->arrayResult )) {
    			$this->clickNum = $arrayResult['clickNum'];
    			}
    		    	    			    		    			if (array_key_exists ( "fbNum", $this->arrayResult )) {
    			$this->fbNum = $arrayResult['fbNum'];
    			}
    		    	    			    		    			if (array_key_exists ( "fbRate", $this->arrayResult )) {
    			$this->fbRate = $arrayResult['fbRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "clickRate", $this->arrayResult )) {
    			$this->clickRate = $arrayResult['clickRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    		}
 
   
}
?>