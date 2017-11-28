<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaShippingCarrierIdentifier extends SDKDomain {

       	
    private $domain;
    
        /**
    * @return 物流标志所在的域，比如菜鸟
    */
        public function getDomain() {
        return $this->domain;
    }
    
    /**
     * 设置物流标志所在的域，比如菜鸟     
     * @param String $domain     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDomain( $domain) {
        $this->domain = $domain;
    }
    
        	
    private $value;
    
        /**
    * @return 物流标志的ID，比如圆通的ID
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置物流标志的ID，比如圆通的ID     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
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
				    		    			if (array_key_exists ( "domain", $this->arrayResult )) {
    			$this->domain = $arrayResult['domain'];
    			}
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['value'];
    			}
    		    	    		}
 
   
}
?>