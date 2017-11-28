<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeSourceOrder extends SDKDomain {

       	
    private $sourceNumber;
    
        /**
    * @return 来源平台的订单ID
    */
        public function getSourceNumber() {
        return $this->sourceNumber;
    }
    
    /**
     * 设置来源平台的订单ID     
     * @param String $sourceNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceNumber( $sourceNumber) {
        $this->sourceNumber = $sourceNumber;
    }
    
        	
    private $domain;
    
        /**
    * @return 订单的来源的域，比如TAOBAO,eBay
    */
        public function getDomain() {
        return $this->domain;
    }
    
    /**
     * 设置订单的来源的域，比如TAOBAO,eBay     
     * @param String $domain     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDomain( $domain) {
        $this->domain = $domain;
    }
    
        	
    private $value;
    
        /**
    * @return 订单来源的某一个商家，比如淘宝上店家ID
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置订单来源的某一个商家，比如淘宝上店家ID     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sourceNumber", $this->stdResult )) {
    				$this->sourceNumber = $this->stdResult->{"sourceNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "domain", $this->stdResult )) {
    				$this->domain = $this->stdResult->{"domain"};
    			}
    			    		    				    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sourceNumber", $this->arrayResult )) {
    			$this->sourceNumber = $arrayResult['sourceNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "domain", $this->arrayResult )) {
    			$this->domain = $arrayResult['domain'];
    			}
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['value'];
    			}
    		    	    		}
 
   
}
?>