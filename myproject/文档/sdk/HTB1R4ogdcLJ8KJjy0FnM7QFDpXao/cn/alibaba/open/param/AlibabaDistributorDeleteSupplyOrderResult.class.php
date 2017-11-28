<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorDeleteSupplyOrderResult {

        	
    private $isSuccess;
    
        /**
    * @return 是否成功
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $isSuccess     
          
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
        	
    private $details;
    
        /**
    * @return 每个采购单忽略是否成功，key为采购单Id，value为true/false
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置每个采购单忽略是否成功，key为采购单Id，value为true/false     
     * @param Map $details     
          
     * 此参数必填     */
    public function setDetails(array $details) {
        $this->details = $details;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    				$this->details = $this->stdResult->{"details"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['isSuccess'];
    			}
    		    	    			    		    			if (array_key_exists ( "details", $this->arrayResult )) {
    			$this->details = $arrayResult['details'];
    			}
    		    	    		}

}
?>