<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/Profile.class.php');

class IbankProfileGetResult {

        	
    private $profile;
    
        /**
    * @return 用户信息
    */
        public function getProfile() {
        return $this->profile;
    }
    
    /**
     * 设置用户信息     
     * @param Profile $profile     
          
     * 此参数必填     */
    public function setProfile(Profile $profile) {
        $this->profile = $profile;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "profile", $this->stdResult )) {
    				$profileResult=$this->stdResult->{"profile"};
    				$this->profile = new Profile();
    				$this->profile->setStdResult ( $profileResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "profile", $this->arrayResult )) {
    		$profileResult=$arrayResult['profile'];
    			    			$this->profile = new Profile();
    			    			$this->profile->setStdResult ( $profileResult);
    		}
    		    	    		}

}
?>