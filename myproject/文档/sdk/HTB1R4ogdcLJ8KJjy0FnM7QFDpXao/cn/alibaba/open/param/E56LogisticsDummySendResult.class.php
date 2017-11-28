<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/SendOrderResult.class.php');

class E56LogisticsDummySendResult {

        	
    private $sendOrderResult;
    
        /**
    * @return 发货返回结果
    */
        public function getSendOrderResult() {
        return $this->sendOrderResult;
    }
    
    /**
     * 设置发货返回结果     
     * @param SendOrderResult $sendOrderResult     
          
     * 此参数必填     */
    public function setSendOrderResult(SendOrderResult $sendOrderResult) {
        $this->sendOrderResult = $sendOrderResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sendOrderResult", $this->stdResult )) {
    				$sendOrderResultResult=$this->stdResult->{"sendOrderResult"};
    				$this->sendOrderResult = new SendOrderResult();
    				$this->sendOrderResult->setStdResult ( $sendOrderResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "sendOrderResult", $this->arrayResult )) {
    		$sendOrderResultResult=$arrayResult['sendOrderResult'];
    			    			$this->sendOrderResult = new SendOrderResult();
    			    			$this->sendOrderResult->setStdResult ( $sendOrderResultResult);
    		}
    		    	    		}

}
?>