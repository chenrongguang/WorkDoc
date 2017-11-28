<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SendOrderResult extends SDKDomain {

       	
    private $success;
    
        /**
    * @return 操作结果
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置操作结果     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 操作返回码
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置操作返回码     
     * @param String $resultCode     
     * 参数示例：<pre>success</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 操作返回信息
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置操作返回信息     
     * @param String $resultMsg     
     * 参数示例：<pre>成功</pre>     
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
        	
    private $logisticsId;
    
        /**
    * @return 物流编号
    */
        public function getLogisticsId() {
        return $this->logisticsId;
    }
    
    /**
     * 设置物流编号     
     * @param String $logisticsId     
     * 参数示例：<pre>AL8123432</pre>     
     * 此参数必填     */
    public function setLogisticsId( $logisticsId) {
        $this->logisticsId = $logisticsId;
    }
    
        	
    private $orderId;
    
        /**
    * @return 订单号
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置订单号     
     * @param String $orderId     
     * 参数示例：<pre>112342</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $orderEntryIds;
    
        /**
    * @return 订单明细，以英文逗号分隔
    */
        public function getOrderEntryIds() {
        return $this->orderEntryIds;
    }
    
    /**
     * 设置订单明细，以英文逗号分隔     
     * @param String $orderEntryIds     
     * 参数示例：<pre>2342,1234</pre>     
     * 此参数必填     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->orderEntryIds = $orderEntryIds;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultMsg", $this->stdResult )) {
    				$this->resultMsg = $this->stdResult->{"resultMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsId", $this->stdResult )) {
    				$this->logisticsId = $this->stdResult->{"logisticsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderEntryIds", $this->stdResult )) {
    				$this->orderEntryIds = $this->stdResult->{"orderEntryIds"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultMsg", $this->arrayResult )) {
    			$this->resultMsg = $arrayResult['resultMsg'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsId", $this->arrayResult )) {
    			$this->logisticsId = $arrayResult['logisticsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderEntryIds", $this->arrayResult )) {
    			$this->orderEntryIds = $arrayResult['orderEntryIds'];
    			}
    		    	    		}
 
   
}
?>