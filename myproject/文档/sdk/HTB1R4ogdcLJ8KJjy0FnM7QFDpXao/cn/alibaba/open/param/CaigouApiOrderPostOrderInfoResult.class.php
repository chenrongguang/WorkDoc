<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiOrderPostOrderInfoResult {

        	
    private $orderId;
    
        /**
    * @return 在1688采购平台保存成功的po订单id。如果发布失败则为空，具体的看错误码。
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置在1688采购平台保存成功的po订单id。如果发布失败则为空，具体的看错误码。     
     * @param Long $orderId     
          
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    		}

}
?>