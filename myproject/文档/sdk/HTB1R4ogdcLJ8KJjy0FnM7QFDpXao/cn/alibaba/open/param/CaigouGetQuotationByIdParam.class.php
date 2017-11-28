<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouGetQuotationByIdParam {

        
        /**
    * @return 
    */
        public function getNeedAttachments() {
        $tempResult = $this->sdkStdResult["needAttachments"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needAttachments     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedAttachments( $needAttachments) {
        $this->sdkStdResult["needAttachments"] = $needAttachments;
    }
    
        
        /**
    * @return 
    */
        public function getNeedAudit() {
        $tempResult = $this->sdkStdResult["needAudit"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needAudit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedAudit( $needAudit) {
        $this->sdkStdResult["needAudit"] = $needAudit;
    }
    
        
        /**
    * @return 
    */
        public function getNeedSupplyNoteItems() {
        $tempResult = $this->sdkStdResult["needSupplyNoteItems"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needSupplyNoteItems     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedSupplyNoteItems( $needSupplyNoteItems) {
        $this->sdkStdResult["needSupplyNoteItems"] = $needSupplyNoteItems;
    }
    
        
        /**
    * @return 
    */
        public function getQuotationId() {
        $tempResult = $this->sdkStdResult["quotationId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $quotationId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuotationId( $quotationId) {
        $this->sdkStdResult["quotationId"] = $quotationId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>