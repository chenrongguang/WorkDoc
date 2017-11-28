<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaRtdOrderOpenSubOrderParam.class.php');

class AlibabaRtdOrderCreateParam {

        
        /**
    * @return 订单编号
    */
        public function getBillNo() {
        $tempResult = $this->sdkStdResult["billNo"];
        return $tempResult;
    }
    
    /**
     * 设置订单编号     
     * @param String $billNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillNo( $billNo) {
        $this->sdkStdResult["billNo"] = $billNo;
    }
    
        
        /**
    * @return 订单创建时间
    */
        public function getBillCreateTime() {
        $tempResult = $this->sdkStdResult["billCreateTime"];
        return $tempResult;
    }
    
    /**
     * 设置订单创建时间     
     * @param String $billCreateTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillCreateTime( $billCreateTime) {
        $this->sdkStdResult["billCreateTime"] = $billCreateTime;
    }
    
        
        /**
    * @return 收货人手机号
    */
        public function getMobile() {
        $tempResult = $this->sdkStdResult["mobile"];
        return $tempResult;
    }
    
    /**
     * 设置收货人手机号     
     * @param String $mobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->sdkStdResult["mobile"] = $mobile;
    }
    
        
        /**
    * @return 收货人姓名
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置收货人姓名     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 收货人固定电话
    */
        public function getTelephone() {
        $tempResult = $this->sdkStdResult["telephone"];
        return $tempResult;
    }
    
    /**
     * 设置收货人固定电话     
     * @param String $telephone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTelephone( $telephone) {
        $this->sdkStdResult["telephone"] = $telephone;
    }
    
        
        /**
    * @return 仓库地址邮编
    */
        public function getBuyerPostCode() {
        $tempResult = $this->sdkStdResult["buyerPostCode"];
        return $tempResult;
    }
    
    /**
     * 设置仓库地址邮编     
     * @param String $buyerPostCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerPostCode( $buyerPostCode) {
        $this->sdkStdResult["buyerPostCode"] = $buyerPostCode;
    }
    
        
        /**
    * @return 收货地址(收货仓库地址)
    */
        public function getAddress() {
        $tempResult = $this->sdkStdResult["address"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址(收货仓库地址)     
     * @param String $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->sdkStdResult["address"] = $address;
    }
    
        
        /**
    * @return 子订单列表
    */
        public function getItems() {
        $tempResult = $this->sdkStdResult["items"];
        return $tempResult;
    }
    
    /**
     * 设置子订单列表     
     * @param array include @see AlibabaRtdOrderOpenSubOrderParam[] $items     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItems(AlibabaRtdOrderOpenSubOrderParam $items) {
        $this->sdkStdResult["items"] = $items;
    }
    
        
        /**
    * @return 订单支付时间
    */
        public function getBillPayTime() {
        $tempResult = $this->sdkStdResult["billPayTime"];
        return $tempResult;
    }
    
    /**
     * 设置订单支付时间     
     * @param String $billPayTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillPayTime( $billPayTime) {
        $this->sdkStdResult["billPayTime"] = $billPayTime;
    }
    
        
        /**
    * @return 业务域编码
    */
        public function getAppCode() {
        $tempResult = $this->sdkStdResult["appCode"];
        return $tempResult;
    }
    
    /**
     * 设置业务域编码     
     * @param String $appCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppCode( $appCode) {
        $this->sdkStdResult["appCode"] = $appCode;
    }
    
        
        /**
    * @return 渠道类型
    */
        public function getChannelType() {
        $tempResult = $this->sdkStdResult["channelType"];
        return $tempResult;
    }
    
    /**
     * 设置渠道类型     
     * @param String $channelType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChannelType( $channelType) {
        $this->sdkStdResult["channelType"] = $channelType;
    }
    
        
        /**
    * @return 外部卖家淘宝userId
    */
        public function getSellerUserId() {
        $tempResult = $this->sdkStdResult["sellerUserId"];
        return $tempResult;
    }
    
    /**
     * 设置外部卖家淘宝userId     
     * @param Long $sellerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerUserId( $sellerUserId) {
        $this->sdkStdResult["sellerUserId"] = $sellerUserId;
    }
    
        
        /**
    * @return 渠道买家淘宝userId
    */
        public function getBuyerUserId() {
        $tempResult = $this->sdkStdResult["buyerUserId"];
        return $tempResult;
    }
    
    /**
     * 设置渠道买家淘宝userId     
     * @param Long $buyerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->sdkStdResult["buyerUserId"] = $buyerUserId;
    }
    
        
        /**
    * @return 外部买家备注(200字以内)
    */
        public function getComment() {
        $tempResult = $this->sdkStdResult["comment"];
        return $tempResult;
    }
    
    /**
     * 设置外部买家备注(200字以内)     
     * @param String $comment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setComment( $comment) {
        $this->sdkStdResult["comment"] = $comment;
    }
    
        
        /**
    * @return 打印的发货单条码内容(目前支持CODE39)
    */
        public function getBarCode() {
        $tempResult = $this->sdkStdResult["barCode"];
        return $tempResult;
    }
    
    /**
     * 设置打印的发货单条码内容(目前支持CODE39)     
     * @param String $barCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBarCode( $barCode) {
        $this->sdkStdResult["barCode"] = $barCode;
    }
    
        
        /**
    * @return 预留扩展
    */
        public function getExtend() {
        $tempResult = $this->sdkStdResult["extend"];
        return $tempResult;
    }
    
    /**
     * 设置预留扩展     
     * @param Map $extend     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtend(array $extend) {
        $this->sdkStdResult["extend"] = $extend;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>