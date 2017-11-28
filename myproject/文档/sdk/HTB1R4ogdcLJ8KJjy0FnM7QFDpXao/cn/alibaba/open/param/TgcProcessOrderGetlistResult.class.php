<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TgcProcessOrderGetlistResult {

        	
    private $orderList;
    
        /**
    * @return 返回订单ID列表
    */
        public function getOrderList() {
        return $this->orderList;
    }
    
    /**
     * 设置返回订单ID列表     
     * @param List $orderList     
          
     * 此参数必填     */
    public function setOrderList(array $orderList) {
        $this->orderList = $orderList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderList", $this->stdResult )) {
    				$this->orderList = $this->stdResult->{"orderList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderList", $this->arrayResult )) {
    			$this->orderList = $arrayResult['orderList'];
    			}
    		    	    		}

}
?>