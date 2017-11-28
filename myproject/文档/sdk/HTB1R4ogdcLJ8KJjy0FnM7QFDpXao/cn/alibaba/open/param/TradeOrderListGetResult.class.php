<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OrderListResult.class.php');

class TradeOrderListGetResult {

        	
    private $orderListResult;
    
        /**
    * @return 订单列表返回结果集
    */
        public function getOrderListResult() {
        return $this->orderListResult;
    }
    
    /**
     * 设置订单列表返回结果集     
     * @param OrderListResult $orderListResult     
          
     * 此参数必填     */
    public function setOrderListResult(OrderListResult $orderListResult) {
        $this->orderListResult = $orderListResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderListResult", $this->stdResult )) {
    				$orderListResultResult=$this->stdResult->{"orderListResult"};
    				$this->orderListResult = new OrderListResult();
    				$this->orderListResult->setStdResult ( $orderListResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "orderListResult", $this->arrayResult )) {
    		$orderListResultResult=$arrayResult['orderListResult'];
    			    			$this->orderListResult = new OrderListResult();
    			    			$this->orderListResult->setStdResult ( $orderListResultResult);
    		}
    		    	    		}

}
?>