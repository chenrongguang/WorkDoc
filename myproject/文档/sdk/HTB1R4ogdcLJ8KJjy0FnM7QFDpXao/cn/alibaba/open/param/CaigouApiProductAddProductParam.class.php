<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductAddProductParam {

        
        /**
    * @return 产品编号，物料编码，代表产品在外部系统的主键
    */
        public function getProductCode() {
        $tempResult = $this->sdkStdResult["productCode"];
        return $tempResult;
    }
    
    /**
     * 设置产品编号，物料编码，代表产品在外部系统的主键     
     * @param String $productCode     
     * 参数示例：<pre>coop_prod_01</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->sdkStdResult["productCode"] = $productCode;
    }
    
        
        /**
    * @return 产品名
    */
        public function getTitle() {
        $tempResult = $this->sdkStdResult["title"];
        return $tempResult;
    }
    
    /**
     * 设置产品名     
     * @param String $title     
     * 参数示例：<pre>服装</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->sdkStdResult["title"] = $title;
    }
    
        
        /**
    * @return 单位
    */
        public function getUnit() {
        $tempResult = $this->sdkStdResult["unit"];
        return $tempResult;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->sdkStdResult["unit"] = $unit;
    }
    
        
        /**
    * @return 补充说明，可以为富文本。最多4000个字符
    */
        public function getRemark() {
        $tempResult = $this->sdkStdResult["remark"];
        return $tempResult;
    }
    
    /**
     * 设置补充说明，可以为富文本。最多4000个字符     
     * @param String $remark     
     * 参数示例：<pre>超级厚的大衣啊</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->sdkStdResult["remark"] = $remark;
    }
    
        
        /**
    * @return 产品说明，副标题，最多200个字符
    */
        public function getInstruction() {
        $tempResult = $this->sdkStdResult["instruction"];
        return $tempResult;
    }
    
    /**
     * 设置产品说明，副标题，最多200个字符     
     * @param String $instruction     
     * 参数示例：<pre>黑色大衣，尺寸是标准欧码，今冬最新款，现在下单优惠10%。</pre>     
     * 此参数必填     */
    public function setInstruction( $instruction) {
        $this->sdkStdResult["instruction"] = $instruction;
    }
    
        
        /**
    * @return 产品属性列表
    */
        public function getProductAttributes() {
        $tempResult = $this->sdkStdResult["productAttributes"];
        return $tempResult;
    }
    
    /**
     * 设置产品属性列表     
     * @param List $productAttributes     
     * 参数示例：<pre>[{"keyAttr":"false","name":"外置配件","unit":"件","values":["红色","黑色","绿色","蓝色"]},{"keyAttr":"false","name":"附属装备","unit":"个","values":["红色","黑色","绿色","蓝色"]}]</pre>     
     * 此参数必填     */
    public function setProductAttributes(array $productAttributes) {
        $this->sdkStdResult["productAttributes"] = $productAttributes;
    }
    
        
        /**
    * @return 产品图片，最多10张，先调用上传图片接口，获取到图片相对url
    */
        public function getPicUrlList() {
        $tempResult = $this->sdkStdResult["picUrlList"];
        return $tempResult;
    }
    
    /**
     * 设置产品图片，最多10张，先调用上传图片接口，获取到图片相对url     
     * @param List $picUrlList     
     * 参数示例：<pre>['img/product/15/02/60/15026073.jpg','img/product/15/02/60/15026073.jpg','img/product/15/02/60/15026073.jpg']</pre>     
     * 此参数必填     */
    public function setPicUrlList(array $picUrlList) {
        $this->sdkStdResult["picUrlList"] = $picUrlList;
    }
    
        
        /**
    * @return 产品附件，最多3个附件，先调用上传附件接口获取到附件id
    */
        public function getAttachmentList() {
        $tempResult = $this->sdkStdResult["attachmentList"];
        return $tempResult;
    }
    
    /**
     * 设置产品附件，最多3个附件，先调用上传附件接口获取到附件id     
     * @param List $attachmentList     
     * 参数示例：<pre>[1262298693,1262298693,1262298707]</pre>     
     * 此参数必填     */
    public function setAttachmentList(array $attachmentList) {
        $this->sdkStdResult["attachmentList"] = $attachmentList;
    }
    
        
        /**
    * @return 产品参考价(单位是分)
    */
        public function getReferencePrice() {
        $tempResult = $this->sdkStdResult["referencePrice"];
        return $tempResult;
    }
    
    /**
     * 设置产品参考价(单位是分)     
     * @param Long $referencePrice     
     * 参数示例：<pre>152300</pre>     
     * 此参数必填     */
    public function setReferencePrice( $referencePrice) {
        $this->sdkStdResult["referencePrice"] = $referencePrice;
    }
    
        
        /**
    * @return 用户在1688的自定义类目id
    */
        public function getUserCategoryId() {
        $tempResult = $this->sdkStdResult["userCategoryId"];
        return $tempResult;
    }
    
    /**
     * 设置用户在1688的自定义类目id     
     * @param Long $userCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserCategoryId( $userCategoryId) {
        $this->sdkStdResult["userCategoryId"] = $userCategoryId;
    }
    
        
        /**
    * @return 操作员在1688上的子帐号ID，如果接入商有子账号，则可以通过子账号来发布产品；不传则系统会自动取主账号的userId作为默认值
    */
        public function getUserId() {
        $tempResult = $this->sdkStdResult["userId"];
        return $tempResult;
    }
    
    /**
     * 设置操作员在1688上的子帐号ID，如果接入商有子账号，则可以通过子账号来发布产品；不传则系统会自动取主账号的userId作为默认值     
     * @param Long $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->sdkStdResult["userId"] = $userId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>