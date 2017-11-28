<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOfferFastPublishResult {

        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 返回错误码
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置返回错误码     
     * @param String $resultCode     
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 返回信息
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置返回信息     
     * @param String $resultMsg     
          
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
        	
    private $requestId;
    
        /**
    * @return 请求生命周期unique ID
    */
        public function getRequestId() {
        return $this->requestId;
    }
    
    /**
     * 设置请求生命周期unique ID     
     * @param Long $requestId     
          
     * 此参数必填     */
    public function setRequestId( $requestId) {
        $this->requestId = $requestId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultMsg", $this->stdResult )) {
    				$this->resultMsg = $this->stdResult->{"resultMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "requestId", $this->stdResult )) {
    				$this->requestId = $this->stdResult->{"requestId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultMsg", $this->arrayResult )) {
    			$this->resultMsg = $arrayResult['resultMsg'];
    			}
    		    	    			    		    			if (array_key_exists ( "requestId", $this->arrayResult )) {
    			$this->requestId = $arrayResult['requestId'];
    			}
    		    	    		}

}
?>