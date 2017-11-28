<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiBuyofferQueryListParam {

        
        /**
    * @return 采购商的userId：若无，则当主账号查询；否则，按照子账号查询
    */
        public function getBuyerUserId() {
        $tempResult = $this->sdkStdResult["buyerUserId"];
        return $tempResult;
    }
    
    /**
     * 设置采购商的userId：若无，则当主账号查询；否则，按照子账号查询     
     * @param Long $buyerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->sdkStdResult["buyerUserId"] = $buyerUserId;
    }
    
        
        /**
    * @return 采购单的标题，支持模糊查询
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置采购单的标题，支持模糊查询     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 采购单状态，可以一次查询多个，值为：等待审核：pending，审核不通过：tbd，接受报名中：sent，报价截止：end，撤销：cancel
    */
        public function getStatuses() {
        $tempResult = $this->sdkStdResult["statuses"];
        return $tempResult;
    }
    
    /**
     * 设置采购单状态，可以一次查询多个，值为：等待审核：pending，审核不通过：tbd，接受报名中：sent，报价截止：end，撤销：cancel     
     * @param List $statuses     
     * 参数示例：<pre>['cancel','sent']</pre>     
     * 此参数必填     */
    public function setStatuses(array $statuses) {
        $this->sdkStdResult["statuses"] = $statuses;
    }
    
        
        /**
    * @return 业务类型；招投标：bidding，询报价：buyoffer，竞价：auction，招应募：recruitment
    */
        public function getBizTypes() {
        $tempResult = $this->sdkStdResult["bizTypes"];
        return $tempResult;
    }
    
    /**
     * 设置业务类型；招投标：bidding，询报价：buyoffer，竞价：auction，招应募：recruitment     
     * @param List $bizTypes     
     * 参数示例：<pre>['buyoffer']</pre>     
     * 此参数必填     */
    public function setBizTypes(array $bizTypes) {
        $this->sdkStdResult["bizTypes"] = $bizTypes;
    }
    
        
        /**
    * @return 查询采购单的创建时间大于等于该时间
    */
        public function getStartGmtCreate() {
        $tempResult = $this->sdkStdResult["startGmtCreate"];
        return $tempResult;
    }
    
    /**
     * 设置查询采购单的创建时间大于等于该时间     
     * @param Date $startGmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartGmtCreate( $startGmtCreate) {
        $this->sdkStdResult["startGmtCreate"] = $startGmtCreate;
    }
    
        
        /**
    * @return 查询采购单的创建时间小于等于该时间
    */
        public function getEndGmtCreate() {
        $tempResult = $this->sdkStdResult["endGmtCreate"];
        return $tempResult;
    }
    
    /**
     * 设置查询采购单的创建时间小于等于该时间     
     * @param Date $endGmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndGmtCreate( $endGmtCreate) {
        $this->sdkStdResult["endGmtCreate"] = $endGmtCreate;
    }
    
        
        /**
    * @return 是否需要采购单item信息，默认为false
    */
        public function getNeedPurchaseItem() {
        $tempResult = $this->sdkStdResult["needPurchaseItem"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要采购单item信息，默认为false     
     * @param Boolean $needPurchaseItem     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedPurchaseItem( $needPurchaseItem) {
        $this->sdkStdResult["needPurchaseItem"] = $needPurchaseItem;
    }
    
        
        /**
    * @return 是否需要供应商要求信息，默认为false
    */
        public function getNeedSuplierRequirment() {
        $tempResult = $this->sdkStdResult["needSuplierRequirment"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要供应商要求信息，默认为false     
     * @param Boolean $needSuplierRequirment     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedSuplierRequirment( $needSuplierRequirment) {
        $this->sdkStdResult["needSuplierRequirment"] = $needSuplierRequirment;
    }
    
        
        /**
    * @return 是否需要detail信息，默认为false
    */
        public function getNeedDetail() {
        $tempResult = $this->sdkStdResult["needDetail"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要detail信息，默认为false     
     * @param Boolean $needDetail     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedDetail( $needDetail) {
        $this->sdkStdResult["needDetail"] = $needDetail;
    }
    
        
        /**
    * @return 是否需要附件，默认为false
    */
        public function getNeedAttachment() {
        $tempResult = $this->sdkStdResult["needAttachment"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要附件，默认为false     
     * @param Boolean $needAttachment     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedAttachment( $needAttachment) {
        $this->sdkStdResult["needAttachment"] = $needAttachment;
    }
    
        
        /**
    * @return 是否需要买家联系方式，默认为false
    */
        public function getNeedBuyerContact() {
        $tempResult = $this->sdkStdResult["needBuyerContact"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要买家联系方式，默认为false     
     * @param Boolean $needBuyerContact     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedBuyerContact( $needBuyerContact) {
        $this->sdkStdResult["needBuyerContact"] = $needBuyerContact;
    }
    
        
        /**
    * @return 是否需要交易条件，默认为false
    */
        public function getNeedTradeRequirement() {
        $tempResult = $this->sdkStdResult["needTradeRequirement"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要交易条件，默认为false     
     * @param Boolean $needTradeRequirement     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedTradeRequirement( $needTradeRequirement) {
        $this->sdkStdResult["needTradeRequirement"] = $needTradeRequirement;
    }
    
        
        /**
    * @return 是否需要备注信息，默认为false
    */
        public function getNeedRemarkInfo() {
        $tempResult = $this->sdkStdResult["needRemarkInfo"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要备注信息，默认为false     
     * @param Boolean $needRemarkInfo     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedRemarkInfo( $needRemarkInfo) {
        $this->sdkStdResult["needRemarkInfo"] = $needRemarkInfo;
    }
    
        
        /**
    * @return 当前页数，不传则默认为第一页，每次限定查询10行。
    */
        public function getPageStart() {
        $tempResult = $this->sdkStdResult["pageStart"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数，不传则默认为第一页，每次限定查询10行。     
     * @param Integer $pageStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageStart( $pageStart) {
        $this->sdkStdResult["pageStart"] = $pageStart;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>