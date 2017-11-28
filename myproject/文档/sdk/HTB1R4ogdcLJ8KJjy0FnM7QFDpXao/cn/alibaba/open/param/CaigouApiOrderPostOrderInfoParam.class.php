<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiOrderPostOrderInfoParam {

        
        /**
    * @return 订单在接入商系统内的id，不可重复插入。
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单在接入商系统内的id，不可重复插入。     
     * @param String $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 操作员在1688上的子帐号ID，如果接入商有子账号，通过子账号来下单的，则这个参数必传；不传则系统会自动取主账号的userId作为默认值
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置操作员在1688上的子帐号ID，如果接入商有子账号，通过子账号来下单的，则这个参数必传；不传则系统会自动取主账号的userId作为默认值     
     * @param Long $subUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 供应商在1688网站注册的memberId，supplierMemberId和supplierCode两者必须有一个不为空
    */
        public function getSupplierMemberId() {
        $tempResult = $this->sdkStdResult["supplierMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商在1688网站注册的memberId，supplierMemberId和supplierCode两者必须有一个不为空     
     * @param String $supplierMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->sdkStdResult["supplierMemberId"] = $supplierMemberId;
    }
    
        
        /**
    * @return 供应商在采购商系统中的编号
    */
        public function getSupplierCode() {
        $tempResult = $this->sdkStdResult["supplierCode"];
        return $tempResult;
    }
    
    /**
     * 设置供应商在采购商系统中的编号     
     * @param String $supplierCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierCode( $supplierCode) {
        $this->sdkStdResult["supplierCode"] = $supplierCode;
    }
    
        
        /**
    * @return 供应商公司名
    */
        public function getSupplierCompanyName() {
        $tempResult = $this->sdkStdResult["supplierCompanyName"];
        return $tempResult;
    }
    
    /**
     * 设置供应商公司名     
     * @param String $supplierCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierCompanyName( $supplierCompanyName) {
        $this->sdkStdResult["supplierCompanyName"] = $supplierCompanyName;
    }
    
        
        /**
    * @return 供应商手机
    */
        public function getSupplierMobile() {
        $tempResult = $this->sdkStdResult["supplierMobile"];
        return $tempResult;
    }
    
    /**
     * 设置供应商手机     
     * @param String $supplierMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierMobile( $supplierMobile) {
        $this->sdkStdResult["supplierMobile"] = $supplierMobile;
    }
    
        
        /**
    * @return 供应商电子邮箱
    */
        public function getSupplierEmail() {
        $tempResult = $this->sdkStdResult["supplierEmail"];
        return $tempResult;
    }
    
    /**
     * 设置供应商电子邮箱     
     * @param String $supplierEmail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierEmail( $supplierEmail) {
        $this->sdkStdResult["supplierEmail"] = $supplierEmail;
    }
    
        
        /**
    * @return 订单的总金额：以分为单位的整数
    */
        public function getTotalAmount() {
        $tempResult = $this->sdkStdResult["totalAmount"];
        return $tempResult;
    }
    
    /**
     * 设置订单的总金额：以分为单位的整数     
     * @param Long $totalAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalAmount( $totalAmount) {
        $this->sdkStdResult["totalAmount"] = $totalAmount;
    }
    
        
        /**
    * @return 运费总金额：以分为单位的整数
    */
        public function getFreightAmount() {
        $tempResult = $this->sdkStdResult["freightAmount"];
        return $tempResult;
    }
    
    /**
     * 设置运费总金额：以分为单位的整数     
     * @param Long $freightAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFreightAmount( $freightAmount) {
        $this->sdkStdResult["freightAmount"] = $freightAmount;
    }
    
        
        /**
    * @return 货品总金额：以分为单位的整数
    */
        public function getOrderAmount() {
        $tempResult = $this->sdkStdResult["orderAmount"];
        return $tempResult;
    }
    
    /**
     * 设置货品总金额：以分为单位的整数     
     * @param Long $orderAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderAmount( $orderAmount) {
        $this->sdkStdResult["orderAmount"] = $orderAmount;
    }
    
        
        /**
    * @return 来源类型：BUYOFFER：询价单；PRODUCT：采购目录
    */
        public function getSourceType() {
        $tempResult = $this->sdkStdResult["sourceType"];
        return $tempResult;
    }
    
    /**
     * 设置来源类型：BUYOFFER：询价单；PRODUCT：采购目录     
     * @param String $sourceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceType( $sourceType) {
        $this->sdkStdResult["sourceType"] = $sourceType;
    }
    
        
        /**
    * @return 订单状态默认为enabled，可设置类型为：disabled（无效）、enabled（有效）
    */
        public function getOrderStatus() {
        $tempResult = $this->sdkStdResult["orderStatus"];
        return $tempResult;
    }
    
    /**
     * 设置订单状态默认为enabled，可设置类型为：disabled（无效）、enabled（有效）     
     * @param String $orderStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->sdkStdResult["orderStatus"] = $orderStatus;
    }
    
        
        /**
    * @return 支付状态，默认为unpaid，可设置状态为：unpaid（未支付），paid（已支付）
    */
        public function getPayStatus() {
        $tempResult = $this->sdkStdResult["payStatus"];
        return $tempResult;
    }
    
    /**
     * 设置支付状态，默认为unpaid，可设置状态为：unpaid（未支付），paid（已支付）     
     * @param String $payStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayStatus( $payStatus) {
        $this->sdkStdResult["payStatus"] = $payStatus;
    }
    
        
        /**
    * @return 物流状态，默认为unshipped，可设置状态为：unshipped（未发货），shipped（已发货），received（已收货）
    */
        public function getLogisticsStatus() {
        $tempResult = $this->sdkStdResult["logisticsStatus"];
        return $tempResult;
    }
    
    /**
     * 设置物流状态，默认为unshipped，可设置状态为：unshipped（未发货），shipped（已发货），received（已收货）     
     * @param String $logisticsStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->sdkStdResult["logisticsStatus"] = $logisticsStatus;
    }
    
        
        /**
    * @return 若订单失败，则可以加上失败原因，长度小于等于300。
    */
        public function getFailReason() {
        $tempResult = $this->sdkStdResult["failReason"];
        return $tempResult;
    }
    
    /**
     * 设置若订单失败，则可以加上失败原因，长度小于等于300。     
     * @param String $failReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFailReason( $failReason) {
        $this->sdkStdResult["failReason"] = $failReason;
    }
    
        
        /**
    * @return 买家公司名
    */
        public function getBuyerCompanyName() {
        $tempResult = $this->sdkStdResult["buyerCompanyName"];
        return $tempResult;
    }
    
    /**
     * 设置买家公司名     
     * @param String $buyerCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerCompanyName( $buyerCompanyName) {
        $this->sdkStdResult["buyerCompanyName"] = $buyerCompanyName;
    }
    
        
        /**
    * @return 买家电话
    */
        public function getBuyerMobile() {
        $tempResult = $this->sdkStdResult["buyerMobile"];
        return $tempResult;
    }
    
    /**
     * 设置买家电话     
     * @param String $buyerMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMobile( $buyerMobile) {
        $this->sdkStdResult["buyerMobile"] = $buyerMobile;
    }
    
        
        /**
    * @return 买家email
    */
        public function getBuyerEmail() {
        $tempResult = $this->sdkStdResult["buyerEmail"];
        return $tempResult;
    }
    
    /**
     * 设置买家email     
     * @param String $buyerEmail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerEmail( $buyerEmail) {
        $this->sdkStdResult["buyerEmail"] = $buyerEmail;
    }
    
        
        /**
    * @return 订单明细，为一个模型的json串的list，至少有一个。每个字段含义如下：orderItemId：String类型，订单item业务意义上主键，根据sourceType而定，若sourceType为BUYOFFER，则该值表示报价单item在1688平台上的id；若sourceType表示PRODUCT，则该值表示产品在1688平台上对应的价格编号productQuotationId，必填项；productName：产品的名称，必填项；price：产品单价，以分为单位的整数，必填项；count：产品数量，正整数，必填项；singleFreightAmount：运费，以分为单位的整数，非必填项；receiverPhone：收货人电话，非必填项；receiverMobile：收货人手机，非必填项；receiverPostCode：收货人邮编，非必填项；receiverAddress：收货人地址，非必填项；receiverName：收货人名称，非必填项；otherInfo：买家留言，补充信息，非必填项，字符长度小于500，将在供应商的采购单详情和发送给供应商的订单通知邮件中展示。
    */
        public function getOrderItemList() {
        $tempResult = $this->sdkStdResult["orderItemList"];
        return $tempResult;
    }
    
    /**
     * 设置订单明细，为一个模型的json串的list，至少有一个。每个字段含义如下：orderItemId：String类型，订单item业务意义上主键，根据sourceType而定，若sourceType为BUYOFFER，则该值表示报价单item在1688平台上的id；若sourceType表示PRODUCT，则该值表示产品在1688平台上对应的价格编号productQuotationId，必填项；productName：产品的名称，必填项；price：产品单价，以分为单位的整数，必填项；count：产品数量，正整数，必填项；singleFreightAmount：运费，以分为单位的整数，非必填项；receiverPhone：收货人电话，非必填项；receiverMobile：收货人手机，非必填项；receiverPostCode：收货人邮编，非必填项；receiverAddress：收货人地址，非必填项；receiverName：收货人名称，非必填项；otherInfo：买家留言，补充信息，非必填项，字符长度小于500，将在供应商的采购单详情和发送给供应商的订单通知邮件中展示。     
     * @param List $orderItemList     
     * 参数示例：<pre>[{"orderItemId":"111","productName":"电脑","price":"100","count":"10","singleFreightAmount":"100","receiverPhone":"13888888888","receiverMobile":"0516-666666","receiverPostCode":"222124","receiverAddress":"北京市","receiverName":"王小白","otherInfo":"合同下载链接：http://1688.com"},{"orderItemId":"222","productName":"电脑","price":"100","count":"10","singleFreightAmount":"100"}]</pre>     
     * 此参数必填     */
    public function setOrderItemList(array $orderItemList) {
        $this->sdkStdResult["orderItemList"] = $orderItemList;
    }
    
        
        /**
    * @return 订单支付类型， online--线上支付，即用支付宝支付，目前暂不支持线上支付类型；offline--线下支付
    */
        public function getPayType() {
        $tempResult = $this->sdkStdResult["payType"];
        return $tempResult;
    }
    
    /**
     * 设置订单支付类型， online--线上支付，即用支付宝支付，目前暂不支持线上支付类型；offline--线下支付     
     * @param String $payType     
     * 参数示例：<pre>offline</pre>     
     * 此参数必填     */
    public function setPayType( $payType) {
        $this->sdkStdResult["payType"] = $payType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>