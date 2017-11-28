<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomOrderModel.class.php');

class AlibabaPanamaUnicomOrderResult extends SDKDomain {

       	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 错误码
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置错误码     
     * @param String $resultCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 错误描述
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置错误描述     
     * @param String $resultMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
        	
    private $unicomOrderModel;
    
        /**
    * @return 联通订单模型
    */
        public function getUnicomOrderModel() {
        return $this->unicomOrderModel;
    }
    
    /**
     * 设置联通订单模型     
     * @param AlibabaPanamaUnicomOrderModel $unicomOrderModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnicomOrderModel(AlibabaPanamaUnicomOrderModel $unicomOrderModel) {
        $this->unicomOrderModel = $unicomOrderModel;
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
    			    		    				    			    			if (array_key_exists ( "unicomOrderModel", $this->stdResult )) {
    				$unicomOrderModelResult=$this->stdResult->{"unicomOrderModel"};
    				$this->unicomOrderModel = new AlibabaPanamaUnicomOrderModel();
    				$this->unicomOrderModel->setStdResult ( $unicomOrderModelResult);
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
    		    	    			    		    		if (array_key_exists ( "unicomOrderModel", $this->arrayResult )) {
    		$unicomOrderModelResult=$arrayResult['unicomOrderModel'];
    			    			$this->unicomOrderModel = new AlibabaPanamaUnicomOrderModel();
    			    			$this->unicomOrderModel->setStdResult ( $unicomOrderModelResult);
    		}
    		    	    		}
 
   
}
?>