<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsCommonSubError.class.php');

class AlibabaLogisticsCommonError extends SDKDomain {

       	
    private $message;
    
        /**
    * @return 主错误信息
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置主错误信息     
     * @param String $message     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $code;
    
        /**
    * @return 主错误代码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置主错误代码     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $subErrors;
    
        /**
    * @return 子错误信息
    */
        public function getSubErrors() {
        return $this->subErrors;
    }
    
    /**
     * 设置子错误信息     
     * @param array include @see AlibabaLogisticsCommonSubError[] $subErrors     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubErrors(AlibabaLogisticsCommonSubError $subErrors) {
        $this->subErrors = $subErrors;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "subErrors", $this->stdResult )) {
    			$subErrorsResult=$this->stdResult->{"subErrors"};
    				$object = json_decode ( json_encode ( $subErrorsResult ), true );
					$this->subErrors = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsCommonSubErrorResult=new AlibabaLogisticsCommonSubError();
						$AlibabaLogisticsCommonSubErrorResult->setArrayResult($arrayobject );
						$this->subErrors [$i] = $AlibabaLogisticsCommonSubErrorResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['message'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    		if (array_key_exists ( "subErrors", $this->arrayResult )) {
    		$subErrorsResult=$arrayResult['subErrors'];
    			$this->subErrors = new AlibabaLogisticsCommonSubError();
    			$this->subErrors->setStdResult ( $subErrorsResult);
    		}
    		    	    		}
 
   
}
?>