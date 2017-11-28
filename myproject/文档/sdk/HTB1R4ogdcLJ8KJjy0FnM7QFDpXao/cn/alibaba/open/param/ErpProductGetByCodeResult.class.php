<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductModelUserProduct.class.php');

class ErpProductGetByCodeResult {

        	
    private $resultData;
    
        /**
    * @return 
    */
        public function getResultData() {
        return $this->resultData;
    }
    
    /**
     * 设置     
     * @param ComAlibabaCaigouCoopapiProductModelUserProduct $resultData     
          
     * 此参数必填     */
    public function setResultData(ComAlibabaCaigouCoopapiProductModelUserProduct $resultData) {
        $this->resultData = $resultData;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultData", $this->stdResult )) {
    				$resultDataResult=$this->stdResult->{"resultData"};
    				$this->resultData = new ComAlibabaCaigouCoopapiProductModelUserProduct();
    				$this->resultData->setStdResult ( $resultDataResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "resultData", $this->arrayResult )) {
    		$resultDataResult=$arrayResult['resultData'];
    			    			$this->resultData = new ComAlibabaCaigouCoopapiProductModelUserProduct();
    			    			$this->resultData->setStdResult ( $resultDataResult);
    		}
    		    	    		}

}
?>