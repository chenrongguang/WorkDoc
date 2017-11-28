<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortmsgReadTodoMsgTaskIdListResult {

        	
    private $msgTaskIdList;
    
        /**
    * @return 未完成短信任务Id列表
    */
        public function getMsgTaskIdList() {
        return $this->msgTaskIdList;
    }
    
    /**
     * 设置未完成短信任务Id列表     
     * @param List $msgTaskIdList     
          
     * 此参数必填     */
    public function setMsgTaskIdList(array $msgTaskIdList) {
        $this->msgTaskIdList = $msgTaskIdList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "msgTaskIdList", $this->stdResult )) {
    				$this->msgTaskIdList = $this->stdResult->{"msgTaskIdList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "msgTaskIdList", $this->arrayResult )) {
    			$this->msgTaskIdList = $arrayResult['msgTaskIdList'];
    			}
    		    	    		}

}
?>