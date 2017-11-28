<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeOrderRequestHeader.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeOrderRequestBody.class.php');

class AlibabaTradeOrderRequest extends SDKDomain {

       	
    private $orderRequestHeader;
    
        /**
    * @return 
    */
        public function getOrderRequestHeader() {
        return $this->orderRequestHeader;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeOrderRequestHeader $orderRequestHeader     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderRequestHeader(AlibabaTradeOrderRequestHeader $orderRequestHeader) {
        $this->orderRequestHeader = $orderRequestHeader;
    }
    
        	
    private $orderRequestBody;
    
        /**
    * @return 
    */
        public function getOrderRequestBody() {
        return $this->orderRequestBody;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeOrderRequestBody $orderRequestBody     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderRequestBody(AlibabaTradeOrderRequestBody $orderRequestBody) {
        $this->orderRequestBody = $orderRequestBody;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderRequestHeader", $this->stdResult )) {
    				$orderRequestHeaderResult=$this->stdResult->{"orderRequestHeader"};
    				$this->orderRequestHeader = new AlibabaTradeOrderRequestHeader();
    				$this->orderRequestHeader->setStdResult ( $orderRequestHeaderResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderRequestBody", $this->stdResult )) {
    				$orderRequestBodyResult=$this->stdResult->{"orderRequestBody"};
    				$this->orderRequestBody = new AlibabaTradeOrderRequestBody();
    				$this->orderRequestBody->setStdResult ( $orderRequestBodyResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "orderRequestHeader", $this->arrayResult )) {
    		$orderRequestHeaderResult=$arrayResult['orderRequestHeader'];
    			    			$this->orderRequestHeader = new AlibabaTradeOrderRequestHeader();
    			    			$this->orderRequestHeader->setStdResult ( $orderRequestHeaderResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderRequestBody", $this->arrayResult )) {
    		$orderRequestBodyResult=$arrayResult['orderRequestBody'];
    			    			$this->orderRequestBody = new AlibabaTradeOrderRequestBody();
    			    			$this->orderRequestBody->setStdResult ( $orderRequestBodyResult);
    		}
    		    	    		}
 
   
}
?>