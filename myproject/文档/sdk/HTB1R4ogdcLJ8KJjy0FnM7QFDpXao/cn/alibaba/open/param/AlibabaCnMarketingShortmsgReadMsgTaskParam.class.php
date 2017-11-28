<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortmsgReadMsgTaskParam {

        
        /**
    * @return 任务Id
    */
        public function getTaskId() {
        $tempResult = $this->sdkStdResult["taskId"];
        return $tempResult;
    }
    
    /**
     * 设置任务Id     
     * @param String $taskId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->sdkStdResult["taskId"] = $taskId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>