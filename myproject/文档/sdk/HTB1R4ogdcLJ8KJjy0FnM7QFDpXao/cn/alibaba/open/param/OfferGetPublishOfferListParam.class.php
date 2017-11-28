<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferGetPublishOfferListParam {

        
        /**
    * @return 商品所属类型（ALL：所有产品信息、SALE：供应信息、BUY：求购信息）
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置商品所属类型（ALL：所有产品信息、SALE：供应信息、BUY：求购信息）     
     * @param String $type     
     * 参数示例：<pre>SALE</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
        /**
    * @return 商品发布类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置商品发布类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre>10016</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 卖家自定义的商品分类ID,只支持单个类目id
    */
        public function getGroupIds() {
        $tempResult = $this->sdkStdResult["groupIds"];
        return $tempResult;
    }
    
    /**
     * 设置卖家自定义的商品分类ID,只支持单个类目id     
     * @param String $groupIds     
     * 参数示例：<pre>199898</pre>     
     * 此参数必填     */
    public function setGroupIds( $groupIds) {
        $this->sdkStdResult["groupIds"] = $groupIds;
    }
    
        
        /**
    * @return 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。     
     * @param Integer $page     
     * 参数示例：<pre>6</pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 返回offer列表结果集分页条数。取值范围:大于零的整数;最大值：50;
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置返回offer列表结果集分页条数。取值范围:大于零的整数;最大值：50;     
     * @param Integer $pageSize     
     * 参数示例：<pre>50</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 格式:yyyy-MM-dd HH:mm:ss；1、如果传了时间戳参数，则按增量返回，即返回按指定获取条件且对应商品信息的最近更新时间(GMTModified)晚于该时间戳的商品列表信息。2、如果没有传时间戳参数，则取所有的满足条件的商品信息；
    */
        public function getTimeStamp() {
        $tempResult = $this->sdkStdResult["timeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置格式:yyyy-MM-dd HH:mm:ss；1、如果传了时间戳参数，则按增量返回，即返回按指定获取条件且对应商品信息的最近更新时间(GMTModified)晚于该时间戳的商品列表信息。2、如果没有传时间戳参数，则取所有的满足条件的商品信息；     
     * @param String $timeStamp     
     * 参数示例：<pre>2011-03-15 10:00:00</pre>     
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->sdkStdResult["timeStamp"] = $timeStamp;
    }
    
        
        /**
    * @return 只支持gmt_modify
    */
        public function getOrderBy() {
        $tempResult = $this->sdkStdResult["orderBy"];
        return $tempResult;
    }
    
    /**
     * 设置只支持gmt_modify     
     * @param String $orderBy     
     * 参数示例：<pre>gmt_modified:asc|desc</pre>     
     * 此参数必填     */
    public function setOrderBy( $orderBy) {
        $this->sdkStdResult["orderBy"] = $orderBy;
    }
    
        
        /**
    * @return 自定义返回字段，字段为offerDetailInfo子集。多个字段以半角','分隔。其中如下参数无法通过该API获得：amountOnSale、details、detailsUrl、saledCount、skuArray、termOfferProcess、tradingType
    */
        public function getReturnFields() {
        $tempResult = $this->sdkStdResult["returnFields"];
        return $tempResult;
    }
    
    /**
     * 设置自定义返回字段，字段为offerDetailInfo子集。多个字段以半角','分隔。其中如下参数无法通过该API获得：amountOnSale、details、detailsUrl、saledCount、skuArray、termOfferProcess、tradingType     
     * @param array include @see String[] $returnFields     
     * 参数示例：<pre>offerId,isPrivate,privateProperties</pre>     
     * 此参数必填     */
    public function setReturnFields( $returnFields) {
        $this->sdkStdResult["returnFields"] = $returnFields;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>