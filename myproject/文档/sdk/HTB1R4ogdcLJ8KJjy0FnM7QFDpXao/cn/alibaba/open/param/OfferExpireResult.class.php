<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferExpireResult {

        	
    private $total;
    
        /**
    * @return 转过期产品数量
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置转过期产品数量     
     * @param Integer $total     
          
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['total'];
    			}
    		    	    		}

}
?>