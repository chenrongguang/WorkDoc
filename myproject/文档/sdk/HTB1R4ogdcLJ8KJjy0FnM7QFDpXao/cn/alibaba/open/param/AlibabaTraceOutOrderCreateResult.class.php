<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTraceOutOrderCreateResult {

        	
    private $sucess;
    
        /**
    * @return 
    */
        public function getSucess() {
        return $this->sucess;
    }
    
    /**
     * 设置     
     * @param Boolean $sucess     
          
     * 此参数必填     */
    public function setSucess( $sucess) {
        $this->sucess = $sucess;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sucess", $this->stdResult )) {
    				$this->sucess = $this->stdResult->{"sucess"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sucess", $this->arrayResult )) {
    			$this->sucess = $arrayResult['sucess'];
    			}
    		    	    		}

}
?>