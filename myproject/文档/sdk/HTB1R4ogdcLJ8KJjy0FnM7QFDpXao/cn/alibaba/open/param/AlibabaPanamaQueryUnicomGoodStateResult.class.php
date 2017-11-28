<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomGoodModel.class.php');

class AlibabaPanamaQueryUnicomGoodStateResult {

        	
    private $unicomModel;
    
        /**
    * @return 
    */
        public function getUnicomModel() {
        return $this->unicomModel;
    }
    
    /**
     * 设置     
     * @param AlibabaPanamaUnicomGoodModel $unicomModel     
          
     * 此参数必填     */
    public function setUnicomModel(AlibabaPanamaUnicomGoodModel $unicomModel) {
        $this->unicomModel = $unicomModel;
    }
    
        	
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
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 错误信息
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置错误信息     
     * @param String $resultMsg     
          
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "unicomModel", $this->stdResult )) {
    				$unicomModelResult=$this->stdResult->{"unicomModel"};
    				$this->unicomModel = new AlibabaPanamaUnicomGoodModel();
    				$this->unicomModel->setStdResult ( $unicomModelResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultMsg", $this->stdResult )) {
    				$this->resultMsg = $this->stdResult->{"resultMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "unicomModel", $this->arrayResult )) {
    		$unicomModelResult=$arrayResult['unicomModel'];
    			    			$this->unicomModel = new AlibabaPanamaUnicomGoodModel();
    			    			$this->unicomModel->setStdResult ( $unicomModelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultMsg", $this->arrayResult )) {
    			$this->resultMsg = $arrayResult['resultMsg'];
    			}
    		    	    		}

}
?>