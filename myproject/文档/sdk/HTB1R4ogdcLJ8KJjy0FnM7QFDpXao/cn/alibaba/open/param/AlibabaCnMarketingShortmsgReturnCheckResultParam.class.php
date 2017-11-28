<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortmsgReturnCheckResultParam {

        
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
    
        
        /**
    * @return 检查是否通过
    */
        public function getSuccess() {
        $tempResult = $this->sdkStdResult["success"];
        return $tempResult;
    }
    
    /**
     * 设置检查是否通过     
     * @param Boolean $success     
     * 参数示例：<pre>true/false</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->sdkStdResult["success"] = $success;
    }
    
        
        /**
    * @return 结果返回码
    */
        public function getResultCode() {
        $tempResult = $this->sdkStdResult["resultCode"];
        return $tempResult;
    }
    
    /**
     * 设置结果返回码     
     * @param Integer $resultCode     
     * 参数示例：<pre>0: 表示检查通过</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->sdkStdResult["resultCode"] = $resultCode;
    }
    
        
        /**
    * @return 错误信息
    */
        public function getErrorMsg() {
        $tempResult = $this->sdkStdResult["errorMsg"];
        return $tempResult;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->sdkStdResult["errorMsg"] = $errorMsg;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>