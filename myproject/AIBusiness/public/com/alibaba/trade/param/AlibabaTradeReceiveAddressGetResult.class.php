<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeReceiveAddressResultModel.class.php');

class AlibabaTradeReceiveAddressGetResult {

        	
    private $output;
    
        /**
    * @return 
    */
        public function getOutput() {
        return $this->output;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeReceiveAddressResultModel $output     
          
     * 此参数必填     */
    public function setOutput(AlibabaTradeReceiveAddressResultModel $output) {
        $this->output = $output;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "output", $this->stdResult )) {
    				$outputResult=$this->stdResult->{"output"};
    				$this->output = new AlibabaTradeReceiveAddressResultModel();
    				$this->output->setStdResult ( $outputResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "output", $this->arrayResult )) {
    		$outputResult=$arrayResult['output'];
    			    			$this->output = new AlibabaTradeReceiveAddressResultModel();
    			    			$this->output->setStdResult ( $outputResult);
    		}
    		    	    		}

}
?>