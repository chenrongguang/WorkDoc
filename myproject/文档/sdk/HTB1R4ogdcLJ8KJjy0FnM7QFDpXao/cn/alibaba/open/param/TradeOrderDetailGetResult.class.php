<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OrderModel.class.php');

class TradeOrderDetailGetResult {

        	
    private $orderModel;
    
        /**
    * @return 
    */
        public function getOrderModel() {
        return $this->orderModel;
    }
    
    /**
     * 设置     
     * @param OrderModel $orderModel     
          
     * 此参数必填     */
    public function setOrderModel(OrderModel $orderModel) {
        $this->orderModel = $orderModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderModel", $this->stdResult )) {
    				$orderModelResult=$this->stdResult->{"orderModel"};
    				$this->orderModel = new OrderModel();
    				$this->orderModel->setStdResult ( $orderModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "orderModel", $this->arrayResult )) {
    		$orderModelResult=$arrayResult['orderModel'];
    			    			$this->orderModel = new OrderModel();
    			    			$this->orderModel->setStdResult ( $orderModelResult);
    		}
    		    	    		}

}
?>