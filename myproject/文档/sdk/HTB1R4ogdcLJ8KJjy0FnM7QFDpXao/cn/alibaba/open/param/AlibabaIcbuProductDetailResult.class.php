<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductDTO.class.php');

class AlibabaIcbuProductDetailResult {

        	
    private $ret;
    
        /**
    * @return 
    */
        public function getRet() {
        return $this->ret;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductDTO $ret     
          
     * 此参数必填     */
    public function setRet(AlibabaIcbuProductDTO $ret) {
        $this->ret = $ret;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "ret", $this->stdResult )) {
    				$retResult=$this->stdResult->{"ret"};
    				$this->ret = new AlibabaIcbuProductDTO();
    				$this->ret->setStdResult ( $retResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "ret", $this->arrayResult )) {
    		$retResult=$arrayResult['ret'];
    			    			$this->ret = new AlibabaIcbuProductDTO();
    			    			$this->ret->setStdResult ( $retResult);
    		}
    		    	    		}

}
?>