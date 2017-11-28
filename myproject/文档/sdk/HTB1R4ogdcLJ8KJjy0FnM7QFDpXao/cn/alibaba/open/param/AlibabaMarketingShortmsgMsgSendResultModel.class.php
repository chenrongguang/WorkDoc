<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMarketingShortmsgMsgSendResultModel extends SDKDomain {

       	
    private $sellerMemberId;
    
        /**
    * @return 卖家memberId
    */
        public function getSellerMemberId() {
        return $this->sellerMemberId;
    }
    
    /**
     * 设置卖家memberId     
     * @param String $sellerMemberId     
     * 参数示例：<pre>b2b-1234567</pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sellerMemberId = $sellerMemberId;
    }
    
        	
    private $taskId;
    
        /**
    * @return 任务Id
    */
        public function getTaskId() {
        return $this->taskId;
    }
    
    /**
     * 设置任务Id     
     * @param String $taskId     
     * 参数示例：<pre>4f5da712f296489d86ae9b1790587db1</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->taskId = $taskId;
    }
    
        	
    private $memberId;
    
        /**
    * @return 买家memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置买家memberId     
     * @param String $memberId     
     * 参数示例：<pre>b2b-1234567</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $status;
    
        /**
    * @return 发送是否成功
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置发送是否成功     
     * @param String $status     
     * 参数示例：<pre>success/failed</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $failReason;
    
        /**
    * @return 失败原因
    */
        public function getFailReason() {
        return $this->failReason;
    }
    
    /**
     * 设置失败原因     
     * @param String $failReason     
     * 参数示例：<pre>这是一段失败原因信息</pre>     
     * 此参数必填     */
    public function setFailReason( $failReason) {
        $this->failReason = $failReason;
    }
    
        	
    private $appKey;
    
        /**
    * @return appKey
    */
        public function getAppKey() {
        return $this->appKey;
    }
    
    /**
     * 设置appKey     
     * @param String $appKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppKey( $appKey) {
        $this->appKey = $appKey;
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
     * @param Integer $resultCode     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sellerMemberId", $this->stdResult )) {
    				$this->sellerMemberId = $this->stdResult->{"sellerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskId", $this->stdResult )) {
    				$this->taskId = $this->stdResult->{"taskId"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "failReason", $this->stdResult )) {
    				$this->failReason = $this->stdResult->{"failReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "appKey", $this->stdResult )) {
    				$this->appKey = $this->stdResult->{"appKey"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sellerMemberId", $this->arrayResult )) {
    			$this->sellerMemberId = $arrayResult['sellerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskId", $this->arrayResult )) {
    			$this->taskId = $arrayResult['taskId'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "failReason", $this->arrayResult )) {
    			$this->failReason = $arrayResult['failReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "appKey", $this->arrayResult )) {
    			$this->appKey = $arrayResult['appKey'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    		}
 
   
}
?>