<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaTradeBizResultModel.class.php');

class TradeOrderOrderListGetResult {

        	
    private $result;
    
        /**
    * @return 订单结果模型
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置订单结果模型     
     * @param AlibabaTradeBizResultModel $result     
          
     * 此参数必填     */
    public function setResult(AlibabaTradeBizResultModel $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaTradeBizResultModel();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new AlibabaTradeBizResultModel();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>