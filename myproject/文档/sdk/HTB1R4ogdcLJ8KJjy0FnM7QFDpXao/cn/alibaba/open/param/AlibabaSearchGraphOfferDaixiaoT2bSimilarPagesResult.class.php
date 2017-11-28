<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaCbuSearchwebOpenHsfResultIsvOfferQueryCommonResult.class.php');

class AlibabaSearchGraphOfferDaixiaoT2bSimilarPagesResult {

        	
    private $result;
    
        /**
    * @return 相似款商品的信息
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置相似款商品的信息     
     * @param AlibabaCbuSearchwebOpenHsfResultIsvOfferQueryCommonResult $result     
          
     * 此参数必填     */
    public function setResult(AlibabaCbuSearchwebOpenHsfResultIsvOfferQueryCommonResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaCbuSearchwebOpenHsfResultIsvOfferQueryCommonResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new AlibabaCbuSearchwebOpenHsfResultIsvOfferQueryCommonResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>