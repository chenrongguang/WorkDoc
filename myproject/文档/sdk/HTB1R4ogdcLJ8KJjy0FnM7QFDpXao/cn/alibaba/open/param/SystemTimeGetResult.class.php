<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SystemTimeGetResult {

        	
    private $currentTime;
    
        /**
    * @return 当前系统时间，格式为yyyyMMddHHmmssSSSZ，即年月日时分秒毫秒时区
    */
        public function getCurrentTime() {
        return $this->currentTime;
    }
    
    /**
     * 设置当前系统时间，格式为yyyyMMddHHmmssSSSZ，即年月日时分秒毫秒时区     
     * @param Date $currentTime     
          
     * 此参数必填     */
    public function setCurrentTime( $currentTime) {
        $this->currentTime = $currentTime;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "currentTime", $this->stdResult )) {
    				$this->currentTime = $this->stdResult->{"currentTime"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "currentTime", $this->arrayResult )) {
    			$this->currentTime = $arrayResult['currentTime'];
    			}
    		    	    		}

}
?>