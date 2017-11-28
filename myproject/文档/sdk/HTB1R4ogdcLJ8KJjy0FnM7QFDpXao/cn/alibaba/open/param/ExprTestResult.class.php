<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ExprTestResult {

        	
    private $any;
    
        /**
    * @return 随便什么
    */
        public function getAny() {
        return $this->any;
    }
    
    /**
     * 设置随便什么     
     * @param String $any     
          
     * 此参数必填     */
    public function setAny( $any) {
        $this->any = $any;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "any", $this->stdResult )) {
    				$this->any = $this->stdResult->{"any"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "any", $this->arrayResult )) {
    			$this->any = $arrayResult['any'];
    			}
    		    	    		}

}
?>