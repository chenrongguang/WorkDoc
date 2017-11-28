<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedCodePushParam {

        
        /**
    * @return 批次ID
    */
        public function getBatchId() {
        $tempResult = $this->sdkStdResult["batchId"];
        return $tempResult;
    }
    
    /**
     * 设置批次ID     
     * @param String $batchId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBatchId( $batchId) {
        $this->sdkStdResult["batchId"] = $batchId;
    }
    
        
        /**
    * @return 批次密码
    */
        public function getBatchPassword() {
        $tempResult = $this->sdkStdResult["batchPassword"];
        return $tempResult;
    }
    
    /**
     * 设置批次密码     
     * @param String $batchPassword     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBatchPassword( $batchPassword) {
        $this->sdkStdResult["batchPassword"] = $batchPassword;
    }
    
        
        /**
    * @return 批量关联码模型
    */
        public function getModels() {
        $tempResult = $this->sdkStdResult["models"];
        return $tempResult;
    }
    
    /**
     * 设置批量关联码模型     
     * @param List $models     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModels(array $models) {
        $this->sdkStdResult["models"] = $models;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>