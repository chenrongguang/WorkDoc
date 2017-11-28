<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaProductSearchOpDateParam.class.php');

class OfferSearchParam {

        
        /**
    * @return 当分页查询时指定请求的数据页
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置当分页查询时指定请求的数据页     
     * @param Integer $pageNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 
    */
        public function getReturnFields() {
        $tempResult = $this->sdkStdResult["returnFields"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param array include @see String[] $returnFields     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReturnFields( $returnFields) {
        $this->sdkStdResult["returnFields"] = $returnFields;
    }
    
        
        /**
    * @return 单页条数
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置单页条数     
     * @param Integer $pageSize     
     * 参数示例：<pre>默认20条,每页返回条数20~200</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 未授权搜索支持排序字段,只支持gmtmotified:asc。不填就是gmtexpire:asc处理。
授权后搜索排序字段支持如下：
    gmt_create：创建时间；
    gmt_post：发布时间；
    gmt_modified：修改时间；
    gmt_approved：审核通过时间；
    gmt_expire：过期时间；
    status：状态；
格式如 排序字段:升降序, 多个用“;” 分割
    */
        public function getOrderBy() {
        $tempResult = $this->sdkStdResult["orderBy"];
        return $tempResult;
    }
    
    /**
     * 设置未授权搜索支持排序字段,只支持gmtmotified:asc。不填就是gmtexpire:asc处理。
授权后搜索排序字段支持如下：
    gmt_create：创建时间；
    gmt_post：发布时间；
    gmt_modified：修改时间；
    gmt_approved：审核通过时间；
    gmt_expire：过期时间；
    status：状态；
格式如 排序字段:升降序, 多个用“;” 分割     
     * @param String $orderBy     
     * 参数示例：<pre>gmt_create:asc;gmt_post:desc</pre>     
     * 此参数必填     */
    public function setOrderBy( $orderBy) {
        $this->sdkStdResult["orderBy"] = $orderBy;
    }
    
        
        /**
    * @return 无用
    */
        public function getOfferId() {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
        /**
    * @return 搜索关键字，现在主要支持按标题搜索
    */
        public function getQ() {
        $tempResult = $this->sdkStdResult["q"];
        return $tempResult;
    }
    
    /**
     * 设置搜索关键字，现在主要支持按标题搜索     
     * @param String $q     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQ( $q) {
        $this->sdkStdResult["q"] = $q;
    }
    
        
        /**
    * @return 无用
    */
        public function getIsTradeOffer() {
        $tempResult = $this->sdkStdResult["isTradeOffer"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param Boolean $isTradeOffer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsTradeOffer( $isTradeOffer) {
        $this->sdkStdResult["isTradeOffer"] = $isTradeOffer;
    }
    
        
        /**
    * @return 发布类目编号
    */
        public function getCategory() {
        $tempResult = $this->sdkStdResult["category"];
        return $tempResult;
    }
    
    /**
     * 设置发布类目编号     
     * @param Long $category     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategory( $category) {
        $this->sdkStdResult["category"] = $category;
    }
    
        
        /**
    * @return 查询修改时间结束时刻.要求 gmtModifedBegin 早于 gmtModifiedEnd
    */
        public function getGmtModifiedBegin() {
        $tempResult = $this->sdkStdResult["gmtModifiedBegin"];
        return $tempResult;
    }
    
    /**
     * 设置查询修改时间结束时刻.要求 gmtModifedBegin 早于 gmtModifiedEnd     
     * @param Date $gmtModifiedBegin     
     * 参数示例：<pre>日期编码格式：yyyyMMddHHmmssSSSZ， 如：20120626175014384+0800 ， 不要忘了对值进行urlEncode</pre>     
     * 此参数必填     */
    public function setGmtModifiedBegin( $gmtModifiedBegin) {
        $this->sdkStdResult["gmtModifiedBegin"] = $gmtModifiedBegin;
    }
    
        
        /**
    * @return 查询修改时间结束时刻.要求 gmtModifedEnd 晚于 gmtModifiedBegin
    */
        public function getGmtModifiedEnd() {
        $tempResult = $this->sdkStdResult["gmtModifiedEnd"];
        return $tempResult;
    }
    
    /**
     * 设置查询修改时间结束时刻.要求 gmtModifedEnd 晚于 gmtModifiedBegin     
     * @param Date $gmtModifiedEnd     
     * 参数示例：<pre>日期编码格式：yyyyMMddHHmmssSSSZ， 如：20120626175014384+0800 ， 不要忘了对值进行urlEncode</pre>     
     * 此参数必填     */
    public function setGmtModifiedEnd( $gmtModifiedEnd) {
        $this->sdkStdResult["gmtModifiedEnd"] = $gmtModifiedEnd;
    }
    
        
        /**
    * @return 供货地址
    */
        public function getAddress() {
        $tempResult = $this->sdkStdResult["address"];
        return $tempResult;
    }
    
    /**
     * 设置供货地址     
     * @param String $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->sdkStdResult["address"] = $address;
    }
    
        
        /**
    * @return 产品会员ID
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置产品会员ID     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
        /**
    * @return 无用
    */
        public function getTpType() {
        $tempResult = $this->sdkStdResult["tpType"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param String $tpType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTpType( $tpType) {
        $this->sdkStdResult["tpType"] = $tpType;
    }
    
        
        /**
    * @return 诚信通开能年限
    */
        public function getTpYear() {
        $tempResult = $this->sdkStdResult["tpYear"];
        return $tempResult;
    }
    
    /**
     * 设置诚信通开能年限     
     * @param String $tpYear     
     * 参数示例：<pre>1~5</pre>     
     * 此参数必填     */
    public function setTpYear( $tpYear) {
        $this->sdkStdResult["tpYear"] = $tpYear;
    }
    
        
        /**
    * @return 诚信保障金额
    */
        public function getCreditMoney() {
        $tempResult = $this->sdkStdResult["creditMoney"];
        return $tempResult;
    }
    
    /**
     * 设置诚信保障金额     
     * @param String $creditMoney     
     * 参数示例：<pre>1000~30000</pre>     
     * 此参数必填     */
    public function setCreditMoney( $creditMoney) {
        $this->sdkStdResult["creditMoney"] = $creditMoney;
    }
    
        
        /**
    * @return 无用
    */
        public function getTradeType() {
        $tempResult = $this->sdkStdResult["tradeType"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param Integer $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->sdkStdResult["tradeType"] = $tradeType;
    }
    
        
        /**
    * @return 最低销售额
    */
        public function getSoldQuantity() {
        $tempResult = $this->sdkStdResult["soldQuantity"];
        return $tempResult;
    }
    
    /**
     * 设置最低销售额     
     * @param Integer $soldQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSoldQuantity( $soldQuantity) {
        $this->sdkStdResult["soldQuantity"] = $soldQuantity;
    }
    
        
        /**
    * @return 无用
    */
        public function getShowType() {
        $tempResult = $this->sdkStdResult["showType"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param String $showType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShowType( $showType) {
        $this->sdkStdResult["showType"] = $showType;
    }
    
        
        /**
    * @return 无用
    */
        public function getBizType() {
        $tempResult = $this->sdkStdResult["bizType"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param Integer $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->sdkStdResult["bizType"] = $bizType;
    }
    
        
        /**
    * @return 省份中文名
    */
        public function getProvince() {
        $tempResult = $this->sdkStdResult["province"];
        return $tempResult;
    }
    
    /**
     * 设置省份中文名     
     * @param String $province     
     * 参数示例：<pre>浙江</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->sdkStdResult["province"] = $province;
    }
    
        
        /**
    * @return 城市中文名
    */
        public function getCity() {
        $tempResult = $this->sdkStdResult["city"];
        return $tempResult;
    }
    
    /**
     * 设置城市中文名     
     * @param String $city     
     * 参数示例：<pre>杭州</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->sdkStdResult["city"] = $city;
    }
    
        
        /**
    * @return 价格区间
    */
        public function getPrice() {
        $tempResult = $this->sdkStdResult["price"];
        return $tempResult;
    }
    
    /**
     * 设置价格区间     
     * @param String $price     
     * 参数示例：<pre>10~300</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->sdkStdResult["price"] = $price;
    }
    
        
        /**
    * @return 供应产品星级
    */
        public function getQualityLevel() {
        $tempResult = $this->sdkStdResult["qualityLevel"];
        return $tempResult;
    }
    
    /**
     * 设置供应产品星级     
     * @param String $qualityLevel     
     * 参数示例：<pre>1~5</pre>     
     * 此参数必填     */
    public function setQualityLevel( $qualityLevel) {
        $this->sdkStdResult["qualityLevel"] = $qualityLevel;
    }
    
        
        /**
    * @return 最小起批量
    */
        public function getQuantityBegin() {
        $tempResult = $this->sdkStdResult["quantityBegin"];
        return $tempResult;
    }
    
    /**
     * 设置最小起批量     
     * @param String $quantityBegin     
     * 参数示例：<pre>100~5000</pre>     
     * 此参数必填     */
    public function setQuantityBegin( $quantityBegin) {
        $this->sdkStdResult["quantityBegin"] = $quantityBegin;
    }
    
        
        /**
    * @return 无用
    */
        public function getOnline() {
        $tempResult = $this->sdkStdResult["online"];
        return $tempResult;
    }
    
    /**
     * 设置无用     
     * @param String $online     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOnline( $online) {
        $this->sdkStdResult["online"] = $online;
    }
    
        
        /**
    * @return 会员自定义类别ID
    */
        public function getGroupIds() {
        $tempResult = $this->sdkStdResult["groupIds"];
        return $tempResult;
    }
    
    /**
     * 设置会员自定义类别ID     
     * @param String $groupIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupIds( $groupIds) {
        $this->sdkStdResult["groupIds"] = $groupIds;
    }
    
        
        /**
    * @return Offer状态
    */
        public function getStatus() {
        $tempResult = $this->sdkStdResult["status"];
        return $tempResult;
    }
    
    /**
     * 设置Offer状态     
     * @param String $status     
     * 参数示例：<pre>published,(上线)TDB,deleted(删除),new(待审)</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->sdkStdResult["status"] = $status;
    }
    
        
        /**
    * @return 授权后搜索，时间查询参数，非授权情况下无效。其中 1：创建时间； 2：修改时间； 3：重发时间； 4：过期时间； 5：审核通过时间； 会与gmtModifiedBegin,gmtModifiedEnd叠加。日期格式：yyyyMMddHHmmssSSSZ
    */
        public function getOpDateParams() {
        $tempResult = $this->sdkStdResult["opDateParams"];
        return $tempResult;
    }
    
    /**
     * 设置授权后搜索，时间查询参数，非授权情况下无效。其中 1：创建时间； 2：修改时间； 3：重发时间； 4：过期时间； 5：审核通过时间； 会与gmtModifiedBegin,gmtModifiedEnd叠加。日期格式：yyyyMMddHHmmssSSSZ     
     * @param array include @see AlibabaProductSearchOpDateParam[] $opDateParams     
     * 参数示例：<pre>[{"startDate":"20120801154220368+0800","endDate":"20130801154220368+0800","offerDateType":"2"}]</pre>     
     * 此参数必填     */
    public function setOpDateParams(AlibabaProductSearchOpDateParam $opDateParams) {
        $this->sdkStdResult["opDateParams"] = $opDateParams;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>