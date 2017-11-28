<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomRefundModel.class.php');

class AlibabaPanamaUnicomRefundResult extends SDKDomain {

       	
    private $success;
    
        /**
    * @return 
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置     
     * @param Boolean $success     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置     
     * @param String $resultCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置     
     * @param String $resultMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
        	
    private $unicomRefundModel;
    
        /**
    * @return 
    */
        public function getUnicomRefundModel() {
        return $this->unicomRefundModel;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomRefundModel $unicomRefundModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnicomRefundModel(AlibabaPanamaUnicomRefundModel $unicomRefundModel) {
        $this->unicomRefundModel = $unicomRefundModel;
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
    			    		    				    			    			if (array_key_exists ( "unicomRefundModel", $this->stdResult )) {
    				$unicomRefundModelResult=$this->stdResult->{"unicomRefundModel"};
    				$this->unicomRefundModel = new AlibabaPanamaUnicomRefundModel();
    				$this->unicomRefundModel->setStdResult ( $unicomRefundModelResult);
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
    		    	    			    		    		if (array_key_exists ( "unicomRefundModel", $this->arrayResult )) {
    		$unicomRefundModelResult=$arrayResult['unicomRefundModel'];
    			    			$this->unicomRefundModel = new AlibabaPanamaUnicomRefundModel();
    			    			$this->unicomRefundModel->setStdResult ( $unicomRefundModelResult);
    		}
    		    	    		}
 
   
}
?>