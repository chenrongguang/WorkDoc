<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortmsgReadCircleByPageNumParam {

        
        /**
    * @return 任务id
    */
        public function getTaskId() {
        $tempResult = $this->sdkStdResult["taskId"];
        return $tempResult;
    }
    
    /**
     * 设置任务id     
     * @param String $taskId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->sdkStdResult["taskId"] = $taskId;
    }
    
        
        /**
    * @return 当前页
    */
        public function getNowPage() {
        $tempResult = $this->sdkStdResult["nowPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页     
     * @param Integer $nowPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setNowPage( $nowPage) {
        $this->sdkStdResult["nowPage"] = $nowPage;
    }
    
        
        /**
    * @return 分页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>