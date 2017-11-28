<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeQueryAddressListResult {

        	
    private $resultMap;
    
        /**
    * @return 
    */
        public function getResultMap() {
        return $this->resultMap;
    }
    
    /**
     * 设置     
     * @param Map $resultMap     
          
     * 此参数必填     */
    public function setResultMap(array $resultMap) {
        $this->resultMap = $resultMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultMap", $this->stdResult )) {
    				$this->resultMap = $this->stdResult->{"resultMap"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "resultMap", $this->arrayResult )) {
    			$this->resultMap = $arrayResult['resultMap'];
    			}
    		    	    		}

}
?>