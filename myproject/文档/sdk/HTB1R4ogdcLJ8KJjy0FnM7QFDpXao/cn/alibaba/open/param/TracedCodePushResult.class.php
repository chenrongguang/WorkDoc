<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedCodePushResult {

        	
    private $success;
    
        /**
    * @return 执行结果
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置执行结果     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $model;
    
        /**
    * @return 返回结果对象
    */
        public function getModel() {
        return $this->model;
    }
    
    /**
     * 设置返回结果对象     
     * @param Boolean $model     
          
     * 此参数必填     */
    public function setModel( $model) {
        $this->model = $model;
    }
    
        	
    private $msgCode;
    
        /**
    * @return 错误码
    */
        public function getMsgCode() {
        return $this->msgCode;
    }
    
    /**
     * 设置错误码     
     * @param String $msgCode     
          
     * 此参数必填     */
    public function setMsgCode( $msgCode) {
        $this->msgCode = $msgCode;
    }
    
        	
    private $msgInfo;
    
        /**
    * @return 错误信息
    */
        public function getMsgInfo() {
        return $this->msgInfo;
    }
    
    /**
     * 设置错误信息     
     * @param String $msgInfo     
          
     * 此参数必填     */
    public function setMsgInfo( $msgInfo) {
        $this->msgInfo = $msgInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "model", $this->stdResult )) {
    				$this->model = $this->stdResult->{"model"};
    			}
    			    		    				    			    			if (array_key_exists ( "msgCode", $this->stdResult )) {
    				$this->msgCode = $this->stdResult->{"msgCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "msgInfo", $this->stdResult )) {
    				$this->msgInfo = $this->stdResult->{"msgInfo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "model", $this->arrayResult )) {
    			$this->model = $arrayResult['model'];
    			}
    		    	    			    		    			if (array_key_exists ( "msgCode", $this->arrayResult )) {
    			$this->msgCode = $arrayResult['msgCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "msgInfo", $this->arrayResult )) {
    			$this->msgInfo = $arrayResult['msgInfo'];
    			}
    		    	    		}

}
?>