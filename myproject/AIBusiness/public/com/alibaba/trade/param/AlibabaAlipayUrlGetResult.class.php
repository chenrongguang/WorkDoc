<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAlipayUrlGetResult {

        	
    private $erroMsg;
    
        /**
    * @return 
    */
        public function getErroMsg() {
        return $this->erroMsg;
    }
    
    /**
     * 设置     
     * @param String $erroMsg     
          
     * 此参数必填     */
    public function setErroMsg( $erroMsg) {
        $this->erroMsg = $erroMsg;
    }
    
        	
    private $payUrl;
    
        /**
    * @return 支付链接
    */
        public function getPayUrl() {
        return $this->payUrl;
    }
    
    /**
     * 设置支付链接     
     * @param String $payUrl     
          
     * 此参数必填     */
    public function setPayUrl( $payUrl) {
        $this->payUrl = $payUrl;
    }
    
        	
    private $success;
    
        /**
    * @return 
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "erroMsg", $this->stdResult )) {
    				$this->erroMsg = $this->stdResult->{"erroMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "payUrl", $this->stdResult )) {
    				$this->payUrl = $this->stdResult->{"payUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "erroMsg", $this->arrayResult )) {
    			$this->erroMsg = $arrayResult['erroMsg'];
    			}
    		    	    			    		    			if (array_key_exists ( "payUrl", $this->arrayResult )) {
    			$this->payUrl = $arrayResult['payUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>