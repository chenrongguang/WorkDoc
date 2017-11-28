<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUnicomSyncSettlementParam {

        
        /**
    * @return 电商发票请求子订单号，批量以，分割
    */
        public function getSupplierOrder() {
        $tempResult = $this->sdkStdResult["supplierOrder"];
        return $tempResult;
    }
    
    /**
     * 设置电商发票请求子订单号，批量以，分割     
     * @param String $supplierOrder     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierOrder( $supplierOrder) {
        $this->sdkStdResult["supplierOrder"] = $supplierOrder;
    }
    
        
        /**
    * @return 第三方申请发票的唯一id标识 (该标记下可以对应多张发票信息)
    */
        public function getMarkId() {
        $tempResult = $this->sdkStdResult["markId"];
        return $tempResult;
    }
    
    /**
     * 设置第三方申请发票的唯一id标识 (该标记下可以对应多张发票信息)     
     * @param String $markId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarkId( $markId) {
        $this->sdkStdResult["markId"] = $markId;
    }
    
        
        /**
    * @return 结算单号-客户自己填写
    */
        public function getSettlementId() {
        $tempResult = $this->sdkStdResult["settlementId"];
        return $tempResult;
    }
    
    /**
     * 设置结算单号-客户自己填写     
     * @param String $settlementId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettlementId( $settlementId) {
        $this->sdkStdResult["settlementId"] = $settlementId;
    }
    
        
        /**
    * @return 结算单子订单总数
    */
        public function getSettlementNum() {
        $tempResult = $this->sdkStdResult["settlementNum"];
        return $tempResult;
    }
    
    /**
     * 设置结算单子订单总数     
     * @param Integer $settlementNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettlementNum( $settlementNum) {
        $this->sdkStdResult["settlementNum"] = $settlementNum;
    }
    
        
        /**
    * @return 结算单不含税总金额
    */
        public function getSettlementNakedPrice() {
        $tempResult = $this->sdkStdResult["settlementNakedPrice"];
        return $tempResult;
    }
    
    /**
     * 设置结算单不含税总金额     
     * @param Double $settlementNakedPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettlementNakedPrice( $settlementNakedPrice) {
        $this->sdkStdResult["settlementNakedPrice"] = $settlementNakedPrice;
    }
    
        
        /**
    * @return 结算单总税额
    */
        public function getSettlementTaxPrice() {
        $tempResult = $this->sdkStdResult["settlementTaxPrice"];
        return $tempResult;
    }
    
    /**
     * 设置结算单总税额     
     * @param Double $settlementTaxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettlementTaxPrice( $settlementTaxPrice) {
        $this->sdkStdResult["settlementTaxPrice"] = $settlementTaxPrice;
    }
    
        
        /**
    * @return 发票类型   1普通 2增值税 4营业税
    */
        public function getInvoiceType() {
        $tempResult = $this->sdkStdResult["invoiceType"];
        return $tempResult;
    }
    
    /**
     * 设置发票类型   1普通 2增值税 4营业税     
     * @param String $invoiceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceType( $invoiceType) {
        $this->sdkStdResult["invoiceType"] = $invoiceType;
    }
    
        
        /**
    * @return 开票机构544(供应商信息)
    */
        public function getInvoiceOrg() {
        $tempResult = $this->sdkStdResult["invoiceOrg"];
        return $tempResult;
    }
    
    /**
     * 设置开票机构544(供应商信息)     
     * @param String $invoiceOrg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceOrg( $invoiceOrg) {
        $this->sdkStdResult["invoiceOrg"] = $invoiceOrg;
    }
    
        
        /**
    * @return 开票内容：    明细  办公用品  电脑配件  耗材（需要业务部门确认）
    */
        public function getBizInvoiceContent() {
        $tempResult = $this->sdkStdResult["bizInvoiceContent"];
        return $tempResult;
    }
    
    /**
     * 设置开票内容：    明细  办公用品  电脑配件  耗材（需要业务部门确认）     
     * @param String $bizInvoiceContent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizInvoiceContent( $bizInvoiceContent) {
        $this->sdkStdResult["bizInvoiceContent"] = $bizInvoiceContent;
    }
    
        
        /**
    * @return 期望开票时间  2013-11-8
    */
        public function getInvoiceDate() {
        $tempResult = $this->sdkStdResult["invoiceDate"];
        return $tempResult;
    }
    
    /**
     * 设置期望开票时间  2013-11-8     
     * @param String $invoiceDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceDate( $invoiceDate) {
        $this->sdkStdResult["invoiceDate"] = $invoiceDate;
    }
    
        
        /**
    * @return 发票抬头（参考使用）
    */
        public function getTitle() {
        $tempResult = $this->sdkStdResult["title"];
        return $tempResult;
    }
    
    /**
     * 设置发票抬头（参考使用）     
     * @param String $title     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->sdkStdResult["title"] = $title;
    }
    
        
        /**
    * @return 收票单位 （填开票省分）
    */
        public function getBillToParty() {
        $tempResult = $this->sdkStdResult["billToParty"];
        return $tempResult;
    }
    
    /**
     * 设置收票单位 （填开票省分）     
     * @param String $billToParty     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToParty( $billToParty) {
        $this->sdkStdResult["billToParty"] = $billToParty;
    }
    
        
        /**
    * @return 收票人 （无）
    */
        public function getBillToer() {
        $tempResult = $this->sdkStdResult["billToer"];
        return $tempResult;
    }
    
    /**
     * 设置收票人 （无）     
     * @param String $billToer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToer( $billToer) {
        $this->sdkStdResult["billToer"] = $billToer;
    }
    
        
        /**
    * @return 收票人联系方式 （无）
    */
        public function getBillToContact() {
        $tempResult = $this->sdkStdResult["billToContact"];
        return $tempResult;
    }
    
    /**
     * 设置收票人联系方式 （无）     
     * @param String $billToContact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToContact( $billToContact) {
        $this->sdkStdResult["billToContact"] = $billToContact;
    }
    
        
        /**
    * @return 收票人地址（省）  （无）
    */
        public function getBillToProvince() {
        $tempResult = $this->sdkStdResult["billToProvince"];
        return $tempResult;
    }
    
    /**
     * 设置收票人地址（省）  （无）     
     * @param String $billToProvince     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToProvince( $billToProvince) {
        $this->sdkStdResult["billToProvince"] = $billToProvince;
    }
    
        
        /**
    * @return 收票人地址（市）  （无）
    */
        public function getBillToCity() {
        $tempResult = $this->sdkStdResult["billToCity"];
        return $tempResult;
    }
    
    /**
     * 设置收票人地址（市）  （无）     
     * @param String $billToCity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToCity( $billToCity) {
        $this->sdkStdResult["billToCity"] = $billToCity;
    }
    
        
        /**
    * @return 收票人地址（区）  （无）
    */
        public function getBillToCounty() {
        $tempResult = $this->sdkStdResult["billToCounty"];
        return $tempResult;
    }
    
    /**
     * 设置收票人地址（区）  （无）     
     * @param String $billToCounty     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToCounty( $billToCounty) {
        $this->sdkStdResult["billToCounty"] = $billToCounty;
    }
    
        
        /**
    * @return 收票人地址（街道）（无）
    */
        public function getBillToTown() {
        $tempResult = $this->sdkStdResult["billToTown"];
        return $tempResult;
    }
    
    /**
     * 设置收票人地址（街道）（无）     
     * @param String $billToTown     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToTown( $billToTown) {
        $this->sdkStdResult["billToTown"] = $billToTown;
    }
    
        
        /**
    * @return 收票人地址（详细地址）（无）
    */
        public function getBillToAddress() {
        $tempResult = $this->sdkStdResult["billToAddress"];
        return $tempResult;
    }
    
    /**
     * 设置收票人地址（详细地址）（无）     
     * @param String $billToAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillToAddress( $billToAddress) {
        $this->sdkStdResult["billToAddress"] = $billToAddress;
    }
    
        
        /**
    * @return 预计还款时间2013-11-8
    */
        public function getRepaymentDate() {
        $tempResult = $this->sdkStdResult["repaymentDate"];
        return $tempResult;
    }
    
    /**
     * 设置预计还款时间2013-11-8     
     * @param String $repaymentDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRepaymentDate( $repaymentDate) {
        $this->sdkStdResult["repaymentDate"] = $repaymentDate;
    }
    
        
        /**
    * @return 当前批次子订单总数
    */
        public function getInvoiceNum() {
        $tempResult = $this->sdkStdResult["invoiceNum"];
        return $tempResult;
    }
    
    /**
     * 设置当前批次子订单总数     
     * @param Integer $invoiceNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceNum( $invoiceNum) {
        $this->sdkStdResult["invoiceNum"] = $invoiceNum;
    }
    
        
        /**
    * @return 当前批次不含税总金额
    */
        public function getInvoiceNakedPrice() {
        $tempResult = $this->sdkStdResult["invoiceNakedPrice"];
        return $tempResult;
    }
    
    /**
     * 设置当前批次不含税总金额     
     * @param Double $invoiceNakedPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceNakedPrice( $invoiceNakedPrice) {
        $this->sdkStdResult["invoiceNakedPrice"] = $invoiceNakedPrice;
    }
    
        
        /**
    * @return 当前批次总税额(参考用)
    */
        public function getInvoiceTaxPrice() {
        $tempResult = $this->sdkStdResult["invoiceTaxPrice"];
        return $tempResult;
    }
    
    /**
     * 设置当前批次总税额(参考用)     
     * @param Double $invoiceTaxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceTaxPrice( $invoiceTaxPrice) {
        $this->sdkStdResult["invoiceTaxPrice"] = $invoiceTaxPrice;
    }
    
        
        /**
    * @return 当前批次含税总金额
    */
        public function getInvoicePrice() {
        $tempResult = $this->sdkStdResult["invoicePrice"];
        return $tempResult;
    }
    
    /**
     * 设置当前批次含税总金额     
     * @param Double $invoicePrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoicePrice( $invoicePrice) {
        $this->sdkStdResult["invoicePrice"] = $invoicePrice;
    }
    
        
        /**
    * @return 当前批次
    */
        public function getCurrentBatch() {
        $tempResult = $this->sdkStdResult["currentBatch"];
        return $tempResult;
    }
    
    /**
     * 设置当前批次     
     * @param Integer $currentBatch     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentBatch( $currentBatch) {
        $this->sdkStdResult["currentBatch"] = $currentBatch;
    }
    
        
        /**
    * @return 总批次
    */
        public function getTotalBatch() {
        $tempResult = $this->sdkStdResult["totalBatch"];
        return $tempResult;
    }
    
    /**
     * 设置总批次     
     * @param Integer $totalBatch     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalBatch( $totalBatch) {
        $this->sdkStdResult["totalBatch"] = $totalBatch;
    }
    
        
        /**
    * @return 省份应开发票金额（不含税）
    */
        public function getProvinceInvoiceNakedAmount() {
        $tempResult = $this->sdkStdResult["provinceInvoiceNakedAmount"];
        return $tempResult;
    }
    
    /**
     * 设置省份应开发票金额（不含税）     
     * @param Double $provinceInvoiceNakedAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvinceInvoiceNakedAmount( $provinceInvoiceNakedAmount) {
        $this->sdkStdResult["provinceInvoiceNakedAmount"] = $provinceInvoiceNakedAmount;
    }
    
        
        /**
    * @return 省份应开发票税额
    */
        public function getProvinceInvoiceTaxAmount() {
        $tempResult = $this->sdkStdResult["provinceInvoiceTaxAmount"];
        return $tempResult;
    }
    
    /**
     * 设置省份应开发票税额     
     * @param Double $provinceInvoiceTaxAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvinceInvoiceTaxAmount( $provinceInvoiceTaxAmount) {
        $this->sdkStdResult["provinceInvoiceTaxAmount"] = $provinceInvoiceTaxAmount;
    }
    
        
        /**
    * @return 省份应开发票价税合计
    */
        public function getProvinceInvoiceAmount() {
        $tempResult = $this->sdkStdResult["provinceInvoiceAmount"];
        return $tempResult;
    }
    
    /**
     * 设置省份应开发票价税合计     
     * @param Double $provinceInvoiceAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvinceInvoiceAmount( $provinceInvoiceAmount) {
        $this->sdkStdResult["provinceInvoiceAmount"] = $provinceInvoiceAmount;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>