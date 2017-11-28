<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/TracedTracedModelPageList.class.php');

class TracedCodeListResult {

        	
    private $pageList;
    
        /**
    * @return 
    */
        public function getPageList() {
        return $this->pageList;
    }
    
    /**
     * 设置     
     * @param TracedTracedModelPageList $pageList     
          
     * 此参数必填     */
    public function setPageList(TracedTracedModelPageList $pageList) {
        $this->pageList = $pageList;
    }
    
        	
    private $success;
    
        /**
    * @return 执行结果
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置执行结果     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $msgCode;
    
        /**
    * @return 返回的错误码
    */
        public function getMsgCode() {
        return $this->msgCode;
    }
    
    /**
     * 设置返回的错误码     
     * @param String $msgCode     
          
     * 此参数必填     */
    public function setMsgCode( $msgCode) {
        $this->msgCode = $msgCode;
    }
    
        	
    private $msgInfo;
    
        /**
    * @return 错误信息
    */
        public function getMsgInfo() {
        return $this->msgInfo;
    }
    
    /**
     * 设置错误信息     
     * @param String $msgInfo     
          
     * 此参数必填     */
    public function setMsgInfo( $msgInfo) {
        $this->msgInfo = $msgInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "pageList", $this->stdResult )) {
    				$pageListResult=$this->stdResult->{"pageList"};
    				$this->pageList = new TracedTracedModelPageList();
    				$this->pageList->setStdResult ( $pageListResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "msgCode", $this->stdResult )) {
    				$this->msgCode = $this->stdResult->{"msgCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "msgInfo", $this->stdResult )) {
    				$this->msgInfo = $this->stdResult->{"msgInfo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "pageList", $this->arrayResult )) {
    		$pageListResult=$arrayResult['pageList'];
    			    			$this->pageList = new TracedTracedModelPageList();
    			    			$this->pageList->setStdResult ( $pageListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "msgCode", $this->arrayResult )) {
    			$this->msgCode = $arrayResult['msgCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "msgInfo", $this->arrayResult )) {
    			$this->msgInfo = $arrayResult['msgInfo'];
    			}
    		    	    		}

}
?>