<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouGetBuyOfferByIdParam {

        
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
        public function getNeedCategory() {
        $tempResult = $this->sdkStdResult["needCategory"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needCategory     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedCategory( $needCategory) {
        $this->sdkStdResult["needCategory"] = $needCategory;
    }
    
        
        /**
    * @return 
    */
        public function getNeedContractInfo() {
        $tempResult = $this->sdkStdResult["needContractInfo"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needContractInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedContractInfo( $needContractInfo) {
        $this->sdkStdResult["needContractInfo"] = $needContractInfo;
    }
    
        
        /**
    * @return 
    */
        public function getNeedProductAttributes() {
        $tempResult = $this->sdkStdResult["needProductAttributes"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needProductAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedProductAttributes( $needProductAttributes) {
        $this->sdkStdResult["needProductAttributes"] = $needProductAttributes;
    }
    
        
        /**
    * @return 
    */
        public function getNeedPurchaseNoteItems() {
        $tempResult = $this->sdkStdResult["needPurchaseNoteItems"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needPurchaseNoteItems     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedPurchaseNoteItems( $needPurchaseNoteItems) {
        $this->sdkStdResult["needPurchaseNoteItems"] = $needPurchaseNoteItems;
    }
    
        
        /**
    * @return 
    */
        public function getNeedReceiptAddress() {
        $tempResult = $this->sdkStdResult["needReceiptAddress"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needReceiptAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedReceiptAddress( $needReceiptAddress) {
        $this->sdkStdResult["needReceiptAddress"] = $needReceiptAddress;
    }
    
        
        /**
    * @return 
    */
        public function getNeedSupplierRequirement() {
        $tempResult = $this->sdkStdResult["needSupplierRequirement"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needSupplierRequirement     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedSupplierRequirement( $needSupplierRequirement) {
        $this->sdkStdResult["needSupplierRequirement"] = $needSupplierRequirement;
    }
    
        
        /**
    * @return 
    */
        public function getNeedDescription() {
        $tempResult = $this->sdkStdResult["needDescription"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Boolean $needDescription     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedDescription( $needDescription) {
        $this->sdkStdResult["needDescription"] = $needDescription;
    }
    
        
        /**
    * @return 
    */
        public function getBuyOfferId() {
        $tempResult = $this->sdkStdResult["buyOfferId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $buyOfferId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyOfferId( $buyOfferId) {
        $this->sdkStdResult["buyOfferId"] = $buyOfferId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>