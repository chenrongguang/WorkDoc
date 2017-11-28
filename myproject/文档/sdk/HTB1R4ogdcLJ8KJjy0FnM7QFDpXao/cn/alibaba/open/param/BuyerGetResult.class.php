<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BuyerGetResult {

        	
    private $totalResults;
    
        /**
    * @return 买家数量
    */
        public function getTotalResults() {
        return $this->totalResults;
    }
    
    /**
     * 设置买家数量     
     * @param Long $totalResults     
          
     * 此参数必填     */
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "totalResults", $this->stdResult )) {
    				$this->totalResults = $this->stdResult->{"totalResults"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalResults", $this->arrayResult )) {
    			$this->totalResults = $arrayResult['totalResults'];
    			}
    		    	    		}

}
?>