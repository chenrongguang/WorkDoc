<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeRefundOpLogisticsTraceStep extends SDKDomain {

       	
    private $acceptAddress;
    
        /**
    * @return 
    */
        public function getAcceptAddress() {
        return $this->acceptAddress;
    }
    
    /**
     * 设置     
     * @param String $acceptAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAcceptAddress( $acceptAddress) {
        $this->acceptAddress = $acceptAddress;
    }
    
        	
    private $action;
    
        /**
    * @return 
    */
        public function getAction() {
        return $this->action;
    }
    
    /**
     * 设置     
     * @param String $action     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAction( $action) {
        $this->action = $action;
    }
    
        	
    private $actionTime;
    
        /**
    * @return 
    */
        public function getActionTime() {
        return $this->actionTime;
    }
    
    /**
     * 设置     
     * @param Date $actionTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setActionTime( $actionTime) {
        $this->actionTime = $actionTime;
    }
    
        	
    private $areaCode;
    
        /**
    * @return 
    */
        public function getAreaCode() {
        return $this->areaCode;
    }
    
    /**
     * 设置     
     * @param String $areaCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAreaCode( $areaCode) {
        $this->areaCode = $areaCode;
    }
    
        	
    private $areaName;
    
        /**
    * @return 
    */
        public function getAreaName() {
        return $this->areaName;
    }
    
    /**
     * 设置     
     * @param String $areaName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAreaName( $areaName) {
        $this->areaName = $areaName;
    }
    
        	
    private $facility;
    
        /**
    * @return 
    */
        public function getFacility() {
        return $this->facility;
    }
    
    /**
     * 设置     
     * @param String $facility     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFacility( $facility) {
        $this->facility = $facility;
    }
    
        	
    private $remark;
    
        /**
    * @return 
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "acceptAddress", $this->stdResult )) {
    				$this->acceptAddress = $this->stdResult->{"acceptAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "action", $this->stdResult )) {
    				$this->action = $this->stdResult->{"action"};
    			}
    			    		    				    			    			if (array_key_exists ( "actionTime", $this->stdResult )) {
    				$this->actionTime = $this->stdResult->{"actionTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "areaCode", $this->stdResult )) {
    				$this->areaCode = $this->stdResult->{"areaCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "areaName", $this->stdResult )) {
    				$this->areaName = $this->stdResult->{"areaName"};
    			}
    			    		    				    			    			if (array_key_exists ( "facility", $this->stdResult )) {
    				$this->facility = $this->stdResult->{"facility"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "acceptAddress", $this->arrayResult )) {
    			$this->acceptAddress = $arrayResult['acceptAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "action", $this->arrayResult )) {
    			$this->action = $arrayResult['action'];
    			}
    		    	    			    		    			if (array_key_exists ( "actionTime", $this->arrayResult )) {
    			$this->actionTime = $arrayResult['actionTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "areaCode", $this->arrayResult )) {
    			$this->areaCode = $arrayResult['areaCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "areaName", $this->arrayResult )) {
    			$this->areaName = $arrayResult['areaName'];
    			}
    		    	    			    		    			if (array_key_exists ( "facility", $this->arrayResult )) {
    			$this->facility = $arrayResult['facility'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    		}
 
   
}
?>