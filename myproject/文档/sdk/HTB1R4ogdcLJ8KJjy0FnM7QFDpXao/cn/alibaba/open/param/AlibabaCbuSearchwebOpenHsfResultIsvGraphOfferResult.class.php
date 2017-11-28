<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResult extends SDKDomain {

       	
    private $taobaoOfferId;
    
        /**
    * @return 淘宝的offer的id
    */
        public function getTaobaoOfferId() {
        return $this->taobaoOfferId;
    }
    
    /**
     * 设置淘宝的offer的id     
     * @param Long $taobaoOfferId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaobaoOfferId( $taobaoOfferId) {
        $this->taobaoOfferId = $taobaoOfferId;
    }
    
        	
    private $sameOfferNumber;
    
        /**
    * @return 同款offer的数量
    */
        public function getSameOfferNumber() {
        return $this->sameOfferNumber;
    }
    
    /**
     * 设置同款offer的数量     
     * @param Integer $sameOfferNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSameOfferNumber( $sameOfferNumber) {
        $this->sameOfferNumber = $sameOfferNumber;
    }
    
        	
    private $similarOfferNumber;
    
        /**
    * @return 相似款offer的数量
    */
        public function getSimilarOfferNumber() {
        return $this->similarOfferNumber;
    }
    
    /**
     * 设置相似款offer的数量     
     * @param Integer $similarOfferNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSimilarOfferNumber( $similarOfferNumber) {
        $this->similarOfferNumber = $similarOfferNumber;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "taobaoOfferId", $this->stdResult )) {
    				$this->taobaoOfferId = $this->stdResult->{"taobaoOfferId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sameOfferNumber", $this->stdResult )) {
    				$this->sameOfferNumber = $this->stdResult->{"sameOfferNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "similarOfferNumber", $this->stdResult )) {
    				$this->similarOfferNumber = $this->stdResult->{"similarOfferNumber"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "taobaoOfferId", $this->arrayResult )) {
    			$this->taobaoOfferId = $arrayResult['taobaoOfferId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sameOfferNumber", $this->arrayResult )) {
    			$this->sameOfferNumber = $arrayResult['sameOfferNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "similarOfferNumber", $this->arrayResult )) {
    			$this->similarOfferNumber = $arrayResult['similarOfferNumber'];
    			}
    		    	    		}
 
   
}
?>