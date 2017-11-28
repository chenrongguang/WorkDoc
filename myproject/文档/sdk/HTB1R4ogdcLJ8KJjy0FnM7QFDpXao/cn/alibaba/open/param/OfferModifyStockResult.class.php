<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferModifyStockResult {

        	
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
    
        	
    private $errors;
    
        /**
    * @return 修改错误的报价产品
    */
        public function getErrors() {
        return $this->errors;
    }
    
    /**
     * 设置修改错误的报价产品     
     * @param Map $errors     
          
     * 此参数必填     */
    public function setErrors(array $errors) {
        $this->errors = $errors;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errors", $this->stdResult )) {
    				$this->errors = $this->stdResult->{"errors"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "errors", $this->arrayResult )) {
    			$this->errors = $arrayResult['errors'];
    			}
    		    	    		}

}
?>