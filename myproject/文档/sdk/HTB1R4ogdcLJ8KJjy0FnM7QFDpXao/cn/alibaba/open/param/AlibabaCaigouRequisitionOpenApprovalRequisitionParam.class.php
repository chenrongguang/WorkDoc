<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouRequisitionOpenApprovalRequisitionParam extends SDKDomain {

       	
    private $itemId;
    
        /**
    * @return 请购单单项ID
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置请购单单项ID     
     * @param Long $itemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $status;
    
        /**
    * @return 审核状态【pass、reject】
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置审核状态【pass、reject】     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $rejectMessage;
    
        /**
    * @return 拒绝信息
    */
        public function getRejectMessage() {
        return $this->rejectMessage;
    }
    
    /**
     * 设置拒绝信息     
     * @param String $rejectMessage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRejectMessage( $rejectMessage) {
        $this->rejectMessage = $rejectMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "rejectMessage", $this->stdResult )) {
    				$this->rejectMessage = $this->stdResult->{"rejectMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['itemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "rejectMessage", $this->arrayResult )) {
    			$this->rejectMessage = $arrayResult['rejectMessage'];
    			}
    		    	    		}
 
   
}
?>