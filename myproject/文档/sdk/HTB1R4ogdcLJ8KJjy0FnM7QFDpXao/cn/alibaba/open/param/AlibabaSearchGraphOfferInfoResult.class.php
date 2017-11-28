<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaCbuSearchwebOpenHsfResultIsvGraphCommonResult.class.php');

class AlibabaSearchGraphOfferInfoResult {

        	
    private $result;
    
        /**
    * @return 同款及相似款商品的统计信息
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置同款及相似款商品的统计信息     
     * @param AlibabaCbuSearchwebOpenHsfResultIsvGraphCommonResult $result     
          
     * 此参数必填     */
    public function setResult(AlibabaCbuSearchwebOpenHsfResultIsvGraphCommonResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaCbuSearchwebOpenHsfResultIsvGraphCommonResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new AlibabaCbuSearchwebOpenHsfResultIsvGraphCommonResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>