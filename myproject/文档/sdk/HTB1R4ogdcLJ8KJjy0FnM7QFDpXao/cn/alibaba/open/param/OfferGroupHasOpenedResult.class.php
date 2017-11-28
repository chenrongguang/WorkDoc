<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferGroupHasOpenedResult {

        	
    private $isOpened;
    
        /**
    * @return true：已开启；false：未开启
    */
        public function getIsOpened() {
        return $this->isOpened;
    }
    
    /**
     * 设置true：已开启；false：未开启     
     * @param Boolean $isOpened     
          
     * 此参数必填     */
    public function setIsOpened( $isOpened) {
        $this->isOpened = $isOpened;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isOpened", $this->stdResult )) {
    				$this->isOpened = $this->stdResult->{"isOpened"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isOpened", $this->arrayResult )) {
    			$this->isOpened = $arrayResult['isOpened'];
    			}
    		    	    		}

}
?>