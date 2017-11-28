<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAddressCountry extends SDKDomain {

       	
    private $value;
    
        /**
    * @return 国家的名称
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置国家的名称     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
        	
    private $isoCountryCode;
    
        /**
    * @return 国家的code
    */
        public function getIsoCountryCode() {
        return $this->isoCountryCode;
    }
    
    /**
     * 设置国家的code     
     * @param String $isoCountryCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsoCountryCode( $isoCountryCode) {
        $this->isoCountryCode = $isoCountryCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    				    			    			if (array_key_exists ( "isoCountryCode", $this->stdResult )) {
    				$this->isoCountryCode = $this->stdResult->{"isoCountryCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['value'];
    			}
    		    	    			    		    			if (array_key_exists ( "isoCountryCode", $this->arrayResult )) {
    			$this->isoCountryCode = $arrayResult['isoCountryCode'];
    			}
    		    	    		}
 
   
}
?>