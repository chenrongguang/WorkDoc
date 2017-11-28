<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTraceOutOrderCreateLglResult {

        	
    private $sucess;
    
        /**
    * @return isv创建订单结果，true为成功，false反之
    */
        public function getSucess() {
        return $this->sucess;
    }
    
    /**
     * 设置isv创建订单结果，true为成功，false反之     
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