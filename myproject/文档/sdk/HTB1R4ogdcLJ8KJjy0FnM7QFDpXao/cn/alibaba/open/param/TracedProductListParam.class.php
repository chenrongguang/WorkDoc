<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedProductListParam {

        
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
    * @return 页码
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页码     
     * @param Integer $page     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
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