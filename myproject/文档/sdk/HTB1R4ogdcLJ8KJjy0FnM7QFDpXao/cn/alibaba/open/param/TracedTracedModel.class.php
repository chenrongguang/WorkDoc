<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedTracedModel extends SDKDomain {

       	
    private $type;
    
        /**
    * @return 
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置     
     * @param String $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $tracedCode;
    
        /**
    * @return 
    */
        public function getTracedCode() {
        return $this->tracedCode;
    }
    
    /**
     * 设置     
     * @param String $tracedCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTracedCode( $tracedCode) {
        $this->tracedCode = $tracedCode;
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
    
        	
    private $batchId;
    
        /**
    * @return 
    */
        public function getBatchId() {
        return $this->batchId;
    }
    
    /**
     * 设置     
     * @param String $batchId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBatchId( $batchId) {
        $this->batchId = $batchId;
    }
    
        	
    private $shortUrl;
    
        /**
    * @return 
    */
        public function getShortUrl() {
        return $this->shortUrl;
    }
    
    /**
     * 设置     
     * @param String $shortUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShortUrl( $shortUrl) {
        $this->shortUrl = $shortUrl;
    }
    
        	
    private $longUrl;
    
        /**
    * @return 
    */
        public function getLongUrl() {
        return $this->longUrl;
    }
    
    /**
     * 设置     
     * @param String $longUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLongUrl( $longUrl) {
        $this->longUrl = $longUrl;
    }
    
        	
    private $qrImg;
    
        /**
    * @return 
    */
        public function getQrImg() {
        return $this->qrImg;
    }
    
    /**
     * 设置     
     * @param String $qrImg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQrImg( $qrImg) {
        $this->qrImg = $qrImg;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $num;
    
        /**
    * @return 
    */
        public function getNum() {
        return $this->num;
    }
    
    /**
     * 设置     
     * @param Long $num     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNum( $num) {
        $this->num = $num;
    }
    
        	
    private $scanTimes;
    
        /**
    * @return 
    */
        public function getScanTimes() {
        return $this->scanTimes;
    }
    
    /**
     * 设置     
     * @param Long $scanTimes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setScanTimes( $scanTimes) {
        $this->scanTimes = $scanTimes;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "tracedCode", $this->stdResult )) {
    				$this->tracedCode = $this->stdResult->{"tracedCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "batchId", $this->stdResult )) {
    				$this->batchId = $this->stdResult->{"batchId"};
    			}
    			    		    				    			    			if (array_key_exists ( "shortUrl", $this->stdResult )) {
    				$this->shortUrl = $this->stdResult->{"shortUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "longUrl", $this->stdResult )) {
    				$this->longUrl = $this->stdResult->{"longUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "qrImg", $this->stdResult )) {
    				$this->qrImg = $this->stdResult->{"qrImg"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "num", $this->stdResult )) {
    				$this->num = $this->stdResult->{"num"};
    			}
    			    		    				    			    			if (array_key_exists ( "scanTimes", $this->stdResult )) {
    				$this->scanTimes = $this->stdResult->{"scanTimes"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "tracedCode", $this->arrayResult )) {
    			$this->tracedCode = $arrayResult['tracedCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "batchId", $this->arrayResult )) {
    			$this->batchId = $arrayResult['batchId'];
    			}
    		    	    			    		    			if (array_key_exists ( "shortUrl", $this->arrayResult )) {
    			$this->shortUrl = $arrayResult['shortUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "longUrl", $this->arrayResult )) {
    			$this->longUrl = $arrayResult['longUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "qrImg", $this->arrayResult )) {
    			$this->qrImg = $arrayResult['qrImg'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "num", $this->arrayResult )) {
    			$this->num = $arrayResult['num'];
    			}
    		    	    			    		    			if (array_key_exists ( "scanTimes", $this->arrayResult )) {
    			$this->scanTimes = $arrayResult['scanTimes'];
    			}
    		    	    		}
 
   
}
?>