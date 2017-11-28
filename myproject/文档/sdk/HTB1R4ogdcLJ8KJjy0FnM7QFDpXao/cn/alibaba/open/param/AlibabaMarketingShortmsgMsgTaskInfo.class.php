<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMarketingShortmsgMsgTaskInfo extends SDKDomain {

       	
    private $sellerMemberId;
    
        /**
    * @return 发起短信任务的卖家memberId
    */
        public function getSellerMemberId() {
        return $this->sellerMemberId;
    }
    
    /**
     * 设置发起短信任务的卖家memberId     
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
     * 参数示例：<pre>a40b1c7902f4498cb31931822d1a6eb7</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->taskId = $taskId;
    }
    
        	
    private $msgContent;
    
        /**
    * @return 短信内容
    */
        public function getMsgContent() {
        return $this->msgContent;
    }
    
    /**
     * 设置短信内容     
     * @param String $msgContent     
     * 参数示例：<pre>这是一段短信内容</pre>     
     * 此参数必填     */
    public function setMsgContent( $msgContent) {
        $this->msgContent = $msgContent;
    }
    
        	
    private $totalNum;
    
        /**
    * @return 发送圈子总人数
    */
        public function getTotalNum() {
        return $this->totalNum;
    }
    
    /**
     * 设置发送圈子总人数     
     * @param Integer $totalNum     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setTotalNum( $totalNum) {
        $this->totalNum = $totalNum;
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
    			    		    				    			    			if (array_key_exists ( "msgContent", $this->stdResult )) {
    				$this->msgContent = $this->stdResult->{"msgContent"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalNum", $this->stdResult )) {
    				$this->totalNum = $this->stdResult->{"totalNum"};
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
    		    	    			    		    			if (array_key_exists ( "msgContent", $this->arrayResult )) {
    			$this->msgContent = $arrayResult['msgContent'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalNum", $this->arrayResult )) {
    			$this->totalNum = $arrayResult['totalNum'];
    			}
    		    	    		}
 
   
}
?>