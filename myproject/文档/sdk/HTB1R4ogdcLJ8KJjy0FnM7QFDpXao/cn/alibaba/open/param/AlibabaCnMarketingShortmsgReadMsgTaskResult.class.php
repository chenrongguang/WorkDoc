<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaMarketingShortmsgMsgTaskInfo.class.php');

class AlibabaCnMarketingShortmsgReadMsgTaskResult {

        	
    private $msgTaskInfo;
    
        /**
    * @return 短信任务信息模型
    */
        public function getMsgTaskInfo() {
        return $this->msgTaskInfo;
    }
    
    /**
     * 设置短信任务信息模型     
     * @param AlibabaMarketingShortmsgMsgTaskInfo $msgTaskInfo     
          
     * 此参数必填     */
    public function setMsgTaskInfo(AlibabaMarketingShortmsgMsgTaskInfo $msgTaskInfo) {
        $this->msgTaskInfo = $msgTaskInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "msgTaskInfo", $this->stdResult )) {
    				$msgTaskInfoResult=$this->stdResult->{"msgTaskInfo"};
    				$this->msgTaskInfo = new AlibabaMarketingShortmsgMsgTaskInfo();
    				$this->msgTaskInfo->setStdResult ( $msgTaskInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "msgTaskInfo", $this->arrayResult )) {
    		$msgTaskInfoResult=$arrayResult['msgTaskInfo'];
    			    			$this->msgTaskInfo = new AlibabaMarketingShortmsgMsgTaskInfo();
    			    			$this->msgTaskInfo->setStdResult ( $msgTaskInfoResult);
    		}
    		    	    		}

}
?>