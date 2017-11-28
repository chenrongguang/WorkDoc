<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigoumallQuoteAmountGetResult {

        	
    private $result;
    
        /**
    * @return 类型Map<Long,Long> key为参数的报价id，value值为对应报价库存
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置类型Map<Long,Long> key为参数的报价id，value值为对应报价库存     
     * @param Map $result     
          
     * 此参数必填     */
    public function setResult(array $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['result'];
    			}
    		    	    		}

}
?>