<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductInfoListResult.class.php');

class AlibabaProductProductResultModel extends SDKDomain {

       	
    private $message;
    
        /**
    * @return 
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置     
     * @param String $message     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $result;
    
        /**
    * @return 
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置     
     * @param AlibabaProductProductInfoListResult $result     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResult(AlibabaProductProductInfoListResult $result) {
        $this->result = $result;
    }
    
        	
    private $subCode;
    
        /**
    * @return 
    */
        public function getSubCode() {
        return $this->subCode;
    }
    
    /**
     * 设置     
     * @param String $subCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubCode( $subCode) {
        $this->subCode = $subCode;
    }
    
        	
    private $subMessage;
    
        /**
    * @return 
    */
        public function getSubMessage() {
        return $this->subMessage;
    }
    
    /**
     * 设置     
     * @param String $subMessage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubMessage( $subMessage) {
        $this->subMessage = $subMessage;
    }
    
        	
    private $code;
    
        /**
    * @return 
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaProductProductInfoListResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    				    			    			if (array_key_exists ( "subCode", $this->stdResult )) {
    				$this->subCode = $this->stdResult->{"subCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "subMessage", $this->stdResult )) {
    				$this->subMessage = $this->stdResult->{"subMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['message'];
    			}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new AlibabaProductProductInfoListResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "subCode", $this->arrayResult )) {
    			$this->subCode = $arrayResult['subCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "subMessage", $this->arrayResult )) {
    			$this->subMessage = $arrayResult['subMessage'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}
 
   
}
?>