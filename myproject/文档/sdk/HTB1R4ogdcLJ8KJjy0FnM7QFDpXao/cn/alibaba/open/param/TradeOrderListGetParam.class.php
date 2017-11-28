<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderListGetParam {

        
        /**
    * @return 每页订单数
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页订单数     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 当前页数
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数     
     * @param Integer $page     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 订单更新开始时间
    */
        public function getModifyStartTime() {
        $tempResult = $this->sdkStdResult["modifyStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置订单更新开始时间     
     * @param Date $modifyStartTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifyStartTime( $modifyStartTime) {
        $this->sdkStdResult["modifyStartTime"] = $modifyStartTime;
    }
    
        
        /**
    * @return 订单更新结束时间
    */
        public function getModifyEndTime() {
        $tempResult = $this->sdkStdResult["modifyEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置订单更新结束时间     
     * @param Date $modifyEndTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifyEndTime( $modifyEndTime) {
        $this->sdkStdResult["modifyEndTime"] = $modifyEndTime;
    }
    
        
        /**
    * @return 是否需要发票信息
    */
        public function getNeedInvoiceInfo() {
        $tempResult = $this->sdkStdResult["needInvoiceInfo"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要发票信息     
     * @param Boolean $needInvoiceInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedInvoiceInfo( $needInvoiceInfo) {
        $this->sdkStdResult["needInvoiceInfo"] = $needInvoiceInfo;
    }
    
        
        /**
    * @return 是否需要备注信息
    */
        public function getNeedMemoInfo() {
        $tempResult = $this->sdkStdResult["needMemoInfo"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要备注信息     
     * @param Boolean $needMemoInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedMemoInfo( $needMemoInfo) {
        $this->sdkStdResult["needMemoInfo"] = $needMemoInfo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>