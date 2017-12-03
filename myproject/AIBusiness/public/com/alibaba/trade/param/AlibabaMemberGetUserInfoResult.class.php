<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberGetUserInfoResult {

        	
    private $userId;
    
        /**
    * @return 
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置     
     * @param String $userId     
          
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $companyName;
    
        /**
    * @return 
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置     
     * @param String $companyName     
          
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['companyName'];
    			}
    		    	    		}

}
?>