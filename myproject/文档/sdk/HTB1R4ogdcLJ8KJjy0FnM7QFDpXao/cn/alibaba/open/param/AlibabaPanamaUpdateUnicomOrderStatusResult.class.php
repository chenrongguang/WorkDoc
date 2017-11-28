<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomCommonResult.class.php');

class AlibabaPanamaUpdateUnicomOrderStatusResult {

        	
    private $unicomCommonResult;
    
        /**
    * @return 
    */
        public function getUnicomCommonResult() {
        return $this->unicomCommonResult;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomCommonResult $unicomCommonResult     
          
     * 此参数必填     */
    public function setUnicomCommonResult(AlibabaPanamaUnicomCommonResult $unicomCommonResult) {
        $this->unicomCommonResult = $unicomCommonResult;
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
    
        	
    private $resultCode;
    
        /**
    * @return 
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置     
     * @param String $resultCode     
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置     
     * @param String $resultMsg     
          
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "unicomCommonResult", $this->stdResult )) {
    				$unicomCommonResultResult=$this->stdResult->{"unicomCommonResult"};
    				$this->unicomCommonResult = new AlibabaPanamaUnicomCommonResult();
    				$this->unicomCommonResult->setStdResult ( $unicomCommonResultResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultMsg", $this->stdResult )) {
    				$this->resultMsg = $this->stdResult->{"resultMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "unicomCommonResult", $this->arrayResult )) {
    		$unicomCommonResultResult=$arrayResult['unicomCommonResult'];
    			    			$this->unicomCommonResult = new AlibabaPanamaUnicomCommonResult();
    			    			$this->unicomCommonResult->setStdResult ( $unicomCommonResultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultMsg", $this->arrayResult )) {
    			$this->resultMsg = $arrayResult['resultMsg'];
    			}
    		    	    		}

}
?>