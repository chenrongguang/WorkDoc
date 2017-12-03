<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsCommonError.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsExpressExpressWTDOrder.class.php');

class AlibabaLogisticsInternationalexpressWtdOrderGetListResult {

        	
    private $error;
    
        /**
    * @return 错误信息
    */
        public function getError() {
        return $this->error;
    }
    
    /**
     * 设置错误信息     
     * @param AlibabaLogisticsCommonError $error     
          
     * 此参数必填     */
    public function setError(AlibabaLogisticsCommonError $error) {
        $this->error = $error;
    }
    
        	
    private $orders;
    
        /**
    * @return 订单信息
    */
        public function getOrders() {
        return $this->orders;
    }
    
    /**
     * 设置订单信息     
     * @param array include @see AlibabaLogisticsExpressExpressWTDOrder[] $orders     
          
     * 此参数必填     */
    public function setOrders(AlibabaLogisticsExpressExpressWTDOrder $orders) {
        $this->orders = $orders;
    }
    
        	
    private $success;
    
        /**
    * @return 是否处理成功：true为成功，false为失败，失败原因见error
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否处理成功：true为成功，false为失败，失败原因见error     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $count;
    
        /**
    * @return 总记录数
    */
        public function getCount() {
        return $this->count;
    }
    
    /**
     * 设置总记录数     
     * @param Integer $count     
          
     * 此参数必填     */
    public function setCount( $count) {
        $this->count = $count;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 当前页号
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页号     
     * @param Integer $currentPage     
          
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页记录数
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页记录数     
     * @param Integer $pageSize     
          
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "error", $this->stdResult )) {
    				$errorResult=$this->stdResult->{"error"};
    				$this->error = new AlibabaLogisticsCommonError();
    				$this->error->setStdResult ( $errorResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orders", $this->stdResult )) {
    			$ordersResult=$this->stdResult->{"orders"};
    				$object = json_decode ( json_encode ( $ordersResult ), true );
					$this->orders = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsExpressExpressWTDOrderResult=new AlibabaLogisticsExpressExpressWTDOrder();
						$AlibabaLogisticsExpressExpressWTDOrderResult->setArrayResult($arrayobject );
						$this->orders [$i] = $AlibabaLogisticsExpressExpressWTDOrderResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "count", $this->stdResult )) {
    				$this->count = $this->stdResult->{"count"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "error", $this->arrayResult )) {
    		$errorResult=$arrayResult['error'];
    			    			$this->error = new AlibabaLogisticsCommonError();
    			    			$this->error->setStdResult ( $errorResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orders", $this->arrayResult )) {
    		$ordersResult=$arrayResult['orders'];
    			$this->orders = new AlibabaLogisticsExpressExpressWTDOrder();
    			$this->orders->setStdResult ( $ordersResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "count", $this->arrayResult )) {
    			$this->count = $arrayResult['count'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['pageSize'];
    			}
    		    	    		}

}
?>