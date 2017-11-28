<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeOrderResult extends SDKDomain {

       	
    private $orderIdOfPlatform;
    
        /**
    * @return 
    */
        public function getOrderIdOfPlatform() {
        return $this->orderIdOfPlatform;
    }
    
    /**
     * 设置     
     * @param String $orderIdOfPlatform     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderIdOfPlatform( $orderIdOfPlatform) {
        $this->orderIdOfPlatform = $orderIdOfPlatform;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置     
     * @param String $errorCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置     
     * @param String $errorMessage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderIdOfPlatform", $this->stdResult )) {
    				$this->orderIdOfPlatform = $this->stdResult->{"orderIdOfPlatform"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderIdOfPlatform", $this->arrayResult )) {
    			$this->orderIdOfPlatform = $arrayResult['orderIdOfPlatform'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['errorMessage'];
    			}
    		    	    		}
 
   
}
?>