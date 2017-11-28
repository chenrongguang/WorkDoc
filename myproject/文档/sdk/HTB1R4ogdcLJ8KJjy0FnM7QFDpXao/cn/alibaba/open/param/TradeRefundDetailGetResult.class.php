<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OrderRefundModel.class.php');

class TradeRefundDetailGetResult {

        	
    private $orderRefundModel;
    
        /**
    * @return 退款单详情
    */
        public function getOrderRefundModel() {
        return $this->orderRefundModel;
    }
    
    /**
     * 设置退款单详情     
     * @param OrderRefundModel $orderRefundModel     
          
     * 此参数必填     */
    public function setOrderRefundModel(OrderRefundModel $orderRefundModel) {
        $this->orderRefundModel = $orderRefundModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderRefundModel", $this->stdResult )) {
    				$orderRefundModelResult=$this->stdResult->{"orderRefundModel"};
    				$this->orderRefundModel = new OrderRefundModel();
    				$this->orderRefundModel->setStdResult ( $orderRefundModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "orderRefundModel", $this->arrayResult )) {
    		$orderRefundModelResult=$arrayResult['orderRefundModel'];
    			    			$this->orderRefundModel = new OrderRefundModel();
    			    			$this->orderRefundModel->setStdResult ( $orderRefundModelResult);
    		}
    		    	    		}

}
?>