<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListAttributeObject.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListAttributeObject.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListPriceObject.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListPriceObject.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListAttributeObject.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListDispatchObject.class.php');

class AlibabaIcbuProductListProductSearchDTO extends SDKDomain {

       	
    private $summary;
    
        /**
    * @return 
    */
        public function getSummary() {
        return $this->summary;
    }
    
    /**
     * 设置     
     * @param String $summary     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummary( $summary) {
        $this->summary = $summary;
    }
    
        	
    private $commentCnt;
    
        /**
    * @return 
    */
        public function getCommentCnt() {
        return $this->commentCnt;
    }
    
    /**
     * 设置     
     * @param String $commentCnt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCommentCnt( $commentCnt) {
        $this->commentCnt = $commentCnt;
    }
    
        	
    private $postCategoryId;
    
        /**
    * @return 
    */
        public function getPostCategoryId() {
        return $this->postCategoryId;
    }
    
    /**
     * 设置     
     * @param String $postCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostCategoryId( $postCategoryId) {
        $this->postCategoryId = $postCategoryId;
    }
    
        	
    private $grossProfit;
    
        /**
    * @return 
    */
        public function getGrossProfit() {
        return $this->grossProfit;
    }
    
    /**
     * 设置     
     * @param String $grossProfit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGrossProfit( $grossProfit) {
        $this->grossProfit = $grossProfit;
    }
    
        	
    private $imageUrl;
    
        /**
    * @return 
    */
        public function getImageUrl() {
        return $this->imageUrl;
    }
    
    /**
     * 设置     
     * @param String $imageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageUrl( $imageUrl) {
        $this->imageUrl = $imageUrl;
    }
    
        	
    private $grossMargin;
    
        /**
    * @return 
    */
        public function getGrossMargin() {
        return $this->grossMargin;
    }
    
    /**
     * 设置     
     * @param String $grossMargin     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGrossMargin( $grossMargin) {
        $this->grossMargin = $grossMargin;
    }
    
        	
    private $fobPriceTo;
    
        /**
    * @return 
    */
        public function getFobPriceTo() {
        return $this->fobPriceTo;
    }
    
    /**
     * 设置     
     * @param String $fobPriceTo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFobPriceTo( $fobPriceTo) {
        $this->fobPriceTo = $fobPriceTo;
    }
    
        	
    private $fobPriceFrom;
    
        /**
    * @return 
    */
        public function getFobPriceFrom() {
        return $this->fobPriceFrom;
    }
    
    /**
     * 设置     
     * @param String $fobPriceFrom     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFobPriceFrom( $fobPriceFrom) {
        $this->fobPriceFrom = $fobPriceFrom;
    }
    
        	
    private $minOrderUnit;
    
        /**
    * @return 
    */
        public function getMinOrderUnit() {
        return $this->minOrderUnit;
    }
    
    /**
     * 设置     
     * @param String $minOrderUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOrderUnit( $minOrderUnit) {
        $this->minOrderUnit = $minOrderUnit;
    }
    
        	
    private $tppPrice;
    
        /**
    * @return 
    */
        public function getTppPrice() {
        return $this->tppPrice;
    }
    
    /**
     * 设置     
     * @param String $tppPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTppPrice( $tppPrice) {
        $this->tppPrice = $tppPrice;
    }
    
        	
    private $eurl;
    
        /**
    * @return 
    */
        public function getEurl() {
        return $this->eurl;
    }
    
    /**
     * 设置     
     * @param String $eurl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEurl( $eurl) {
        $this->eurl = $eurl;
    }
    
        	
    private $freeSample;
    
        /**
    * @return 
    */
        public function getFreeSample() {
        return $this->freeSample;
    }
    
    /**
     * 设置     
     * @param String $freeSample     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFreeSample( $freeSample) {
        $this->freeSample = $freeSample;
    }
    
        	
    private $brandId;
    
        /**
    * @return 
    */
        public function getBrandId() {
        return $this->brandId;
    }
    
    /**
     * 设置     
     * @param String $brandId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandId( $brandId) {
        $this->brandId = $brandId;
    }
    
        	
    private $recentTransactionCount;
    
        /**
    * @return 
    */
        public function getRecentTransactionCount() {
        return $this->recentTransactionCount;
    }
    
    /**
     * 设置     
     * @param String $recentTransactionCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRecentTransactionCount( $recentTransactionCount) {
        $this->recentTransactionCount = $recentTransactionCount;
    }
    
        	
    private $newAD;
    
        /**
    * @return 
    */
        public function getNewAD() {
        return $this->newAD;
    }
    
    /**
     * 设置     
     * @param Boolean $newAD     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNewAD( $newAD) {
        $this->newAD = $newAD;
    }
    
        	
    private $rankScoreInfo;
    
        /**
    * @return 
    */
        public function getRankScoreInfo() {
        return $this->rankScoreInfo;
    }
    
    /**
     * 设置     
     * @param String $rankScoreInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRankScoreInfo( $rankScoreInfo) {
        $this->rankScoreInfo = $rankScoreInfo;
    }
    
        	
    private $stock;
    
        /**
    * @return 
    */
        public function getStock() {
        return $this->stock;
    }
    
    /**
     * 设置     
     * @param String $stock     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStock( $stock) {
        $this->stock = $stock;
    }
    
        	
    private $newArrival;
    
        /**
    * @return 
    */
        public function getNewArrival() {
        return $this->newArrival;
    }
    
    /**
     * 设置     
     * @param Boolean $newArrival     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNewArrival( $newArrival) {
        $this->newArrival = $newArrival;
    }
    
        	
    private $description;
    
        /**
    * @return 
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $brandNameCn;
    
        /**
    * @return 
    */
        public function getBrandNameCn() {
        return $this->brandNameCn;
    }
    
    /**
     * 设置     
     * @param String $brandNameCn     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandNameCn( $brandNameCn) {
        $this->brandNameCn = $brandNameCn;
    }
    
        	
    private $rerankType;
    
        /**
    * @return 
    */
        public function getRerankType() {
        return $this->rerankType;
    }
    
    /**
     * 设置     
     * @param String $rerankType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRerankType( $rerankType) {
        $this->rerankType = $rerankType;
    }
    
        	
    private $deliveryDetails;
    
        /**
    * @return 
    */
        public function getDeliveryDetails() {
        return $this->deliveryDetails;
    }
    
    /**
     * 设置     
     * @param String $deliveryDetails     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDeliveryDetails( $deliveryDetails) {
        $this->deliveryDetails = $deliveryDetails;
    }
    
        	
    private $keywords;
    
        /**
    * @return 
    */
        public function getKeywords() {
        return $this->keywords;
    }
    
    /**
     * 设置     
     * @param List $keywords     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKeywords(array $keywords) {
        $this->keywords = $keywords;
    }
    
        	
    private $groupValue;
    
        /**
    * @return 
    */
        public function getGroupValue() {
        return $this->groupValue;
    }
    
    /**
     * 设置     
     * @param String $groupValue     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupValue( $groupValue) {
        $this->groupValue = $groupValue;
    }
    
        	
    private $personalizeType;
    
        /**
    * @return 
    */
        public function getPersonalizeType() {
        return $this->personalizeType;
    }
    
    /**
     * 设置     
     * @param String $personalizeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPersonalizeType( $personalizeType) {
        $this->personalizeType = $personalizeType;
    }
    
        	
    private $inq;
    
        /**
    * @return 
    */
        public function getInq() {
        return $this->inq;
    }
    
    /**
     * 设置     
     * @param Boolean $inq     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInq( $inq) {
        $this->inq = $inq;
    }
    
        	
    private $tagDesc;
    
        /**
    * @return 
    */
        public function getTagDesc() {
        return $this->tagDesc;
    }
    
    /**
     * 设置     
     * @param String $tagDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTagDesc( $tagDesc) {
        $this->tagDesc = $tagDesc;
    }
    
        	
    private $atmStatus;
    
        /**
    * @return 
    */
        public function getAtmStatus() {
        return $this->atmStatus;
    }
    
    /**
     * 设置     
     * @param String $atmStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAtmStatus( $atmStatus) {
        $this->atmStatus = $atmStatus;
    }
    
        	
    private $tppTotalSales;
    
        /**
    * @return 
    */
        public function getTppTotalSales() {
        return $this->tppTotalSales;
    }
    
    /**
     * 设置     
     * @param String $tppTotalSales     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTppTotalSales( $tppTotalSales) {
        $this->tppTotalSales = $tppTotalSales;
    }
    
        	
    private $ownerMemberId;
    
        /**
    * @return 
    */
        public function getOwnerMemberId() {
        return $this->ownerMemberId;
    }
    
    /**
     * 设置     
     * @param String $ownerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOwnerMemberId( $ownerMemberId) {
        $this->ownerMemberId = $ownerMemberId;
    }
    
        	
    private $scaleImageUrl;
    
        /**
    * @return 
    */
        public function getScaleImageUrl() {
        return $this->scaleImageUrl;
    }
    
    /**
     * 设置     
     * @param String $scaleImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setScaleImageUrl( $scaleImageUrl) {
        $this->scaleImageUrl = $scaleImageUrl;
    }
    
        	
    private $bizOpportunities;
    
        /**
    * @return 
    */
        public function getBizOpportunities() {
        return $this->bizOpportunities;
    }
    
    /**
     * 设置     
     * @param String $bizOpportunities     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizOpportunities( $bizOpportunities) {
        $this->bizOpportunities = $bizOpportunities;
    }
    
        	
    private $pureTitle;
    
        /**
    * @return 
    */
        public function getPureTitle() {
        return $this->pureTitle;
    }
    
    /**
     * 设置     
     * @param String $pureTitle     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPureTitle( $pureTitle) {
        $this->pureTitle = $pureTitle;
    }
    
        	
    private $promotionPrice;
    
        /**
    * @return 
    */
        public function getPromotionPrice() {
        return $this->promotionPrice;
    }
    
    /**
     * 设置     
     * @param String $promotionPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPromotionPrice( $promotionPrice) {
        $this->promotionPrice = $promotionPrice;
    }
    
        	
    private $bbProductTag;
    
        /**
    * @return 
    */
        public function getBbProductTag() {
        return $this->bbProductTag;
    }
    
    /**
     * 设置     
     * @param List $bbProductTag     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBbProductTag(array $bbProductTag) {
        $this->bbProductTag = $bbProductTag;
    }
    
        	
    private $shopWindow;
    
        /**
    * @return 
    */
        public function getShopWindow() {
        return $this->shopWindow;
    }
    
    /**
     * 设置     
     * @param Boolean $shopWindow     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShopWindow( $shopWindow) {
        $this->shopWindow = $shopWindow;
    }
    
        	
    private $placeOrderUrl;
    
        /**
    * @return 
    */
        public function getPlaceOrderUrl() {
        return $this->placeOrderUrl;
    }
    
    /**
     * 设置     
     * @param String $placeOrderUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPlaceOrderUrl( $placeOrderUrl) {
        $this->placeOrderUrl = $placeOrderUrl;
    }
    
        	
    private $fobPriceUnit;
    
        /**
    * @return 
    */
        public function getFobPriceUnit() {
        return $this->fobPriceUnit;
    }
    
    /**
     * 设置     
     * @param String $fobPriceUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFobPriceUnit( $fobPriceUnit) {
        $this->fobPriceUnit = $fobPriceUnit;
    }
    
        	
    private $market;
    
        /**
    * @return 
    */
        public function getMarket() {
        return $this->market;
    }
    
    /**
     * 设置     
     * @param Boolean $market     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarket( $market) {
        $this->market = $market;
    }
    
        	
    private $orders;
    
        /**
    * @return 
    */
        public function getOrders() {
        return $this->orders;
    }
    
    /**
     * 设置     
     * @param String $orders     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrders( $orders) {
        $this->orders = $orders;
    }
    
        	
    private $dispatchPlace;
    
        /**
    * @return 
    */
        public function getDispatchPlace() {
        return $this->dispatchPlace;
    }
    
    /**
     * 设置     
     * @param String $dispatchPlace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDispatchPlace( $dispatchPlace) {
        $this->dispatchPlace = $dispatchPlace;
    }
    
        	
    private $language;
    
        /**
    * @return 
    */
        public function getLanguage() {
        return $this->language;
    }
    
    /**
     * 设置     
     * @param String $language     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLanguage( $language) {
        $this->language = $language;
    }
    
        	
    private $multiImageUrl;
    
        /**
    * @return 
    */
        public function getMultiImageUrl() {
        return $this->multiImageUrl;
    }
    
    /**
     * 设置     
     * @param List $multiImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMultiImageUrl(array $multiImageUrl) {
        $this->multiImageUrl = $multiImageUrl;
    }
    
        	
    private $taRec;
    
        /**
    * @return 
    */
        public function getTaRec() {
        return $this->taRec;
    }
    
    /**
     * 设置     
     * @param Boolean $taRec     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaRec( $taRec) {
        $this->taRec = $taRec;
    }
    
        	
    private $port;
    
        /**
    * @return 
    */
        public function getPort() {
        return $this->port;
    }
    
    /**
     * 设置     
     * @param String $port     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPort( $port) {
        $this->port = $port;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $packagingDetails;
    
        /**
    * @return 
    */
        public function getPackagingDetails() {
        return $this->packagingDetails;
    }
    
    /**
     * 设置     
     * @param String $packagingDetails     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPackagingDetails( $packagingDetails) {
        $this->packagingDetails = $packagingDetails;
    }
    
        	
    private $mainProduct;
    
        /**
    * @return 
    */
        public function getMainProduct() {
        return $this->mainProduct;
    }
    
    /**
     * 设置     
     * @param Boolean $mainProduct     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainProduct( $mainProduct) {
        $this->mainProduct = $mainProduct;
    }
    
        	
    private $supplyAbility;
    
        /**
    * @return 
    */
        public function getSupplyAbility() {
        return $this->supplyAbility;
    }
    
    /**
     * 设置     
     * @param String $supplyAbility     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyAbility( $supplyAbility) {
        $this->supplyAbility = $supplyAbility;
    }
    
        	
    private $brandLocation;
    
        /**
    * @return 
    */
        public function getBrandLocation() {
        return $this->brandLocation;
    }
    
    /**
     * 设置     
     * @param String $brandLocation     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandLocation( $brandLocation) {
        $this->brandLocation = $brandLocation;
    }
    
        	
    private $extendImageUrlList;
    
        /**
    * @return 
    */
        public function getExtendImageUrlList() {
        return $this->extendImageUrlList;
    }
    
    /**
     * 设置     
     * @param List $extendImageUrlList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtendImageUrlList(array $extendImageUrlList) {
        $this->extendImageUrlList = $extendImageUrlList;
    }
    
        	
    private $aggregationTag;
    
        /**
    * @return 
    */
        public function getAggregationTag() {
        return $this->aggregationTag;
    }
    
    /**
     * 设置     
     * @param String $aggregationTag     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAggregationTag( $aggregationTag) {
        $this->aggregationTag = $aggregationTag;
    }
    
        	
    private $id;
    
        /**
    * @return 
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置     
     * @param String $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $tppName;
    
        /**
    * @return 
    */
        public function getTppName() {
        return $this->tppName;
    }
    
    /**
     * 设置     
     * @param String $tppName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTppName( $tppName) {
        $this->tppName = $tppName;
    }
    
        	
    private $title;
    
        /**
    * @return 
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置     
     * @param String $title     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $yearTransactionCount;
    
        /**
    * @return 
    */
        public function getYearTransactionCount() {
        return $this->yearTransactionCount;
    }
    
    /**
     * 设置     
     * @param String $yearTransactionCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setYearTransactionCount( $yearTransactionCount) {
        $this->yearTransactionCount = $yearTransactionCount;
    }
    
        	
    private $titleShort;
    
        /**
    * @return 
    */
        public function getTitleShort() {
        return $this->titleShort;
    }
    
    /**
     * 设置     
     * @param String $titleShort     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitleShort( $titleShort) {
        $this->titleShort = $titleShort;
    }
    
        	
    private $bbActivityIds;
    
        /**
    * @return 
    */
        public function getBbActivityIds() {
        return $this->bbActivityIds;
    }
    
    /**
     * 设置     
     * @param String $bbActivityIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBbActivityIds( $bbActivityIds) {
        $this->bbActivityIds = $bbActivityIds;
    }
    
        	
    private $brandNameEn;
    
        /**
    * @return 
    */
        public function getBrandNameEn() {
        return $this->brandNameEn;
    }
    
    /**
     * 设置     
     * @param String $brandNameEn     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandNameEn( $brandNameEn) {
        $this->brandNameEn = $brandNameEn;
    }
    
        	
    private $aD;
    
        /**
    * @return 
    */
        public function getAD() {
        return $this->aD;
    }
    
    /**
     * 设置     
     * @param Boolean $aD     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAD( $aD) {
        $this->aD = $aD;
    }
    
        	
    private $minOrderQuantity;
    
        /**
    * @return 
    */
        public function getMinOrderQuantity() {
        return $this->minOrderQuantity;
    }
    
    /**
     * 设置     
     * @param String $minOrderQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOrderQuantity( $minOrderQuantity) {
        $this->minOrderQuantity = $minOrderQuantity;
    }
    
        	
    private $fobPriceCurrencyType;
    
        /**
    * @return 
    */
        public function getFobPriceCurrencyType() {
        return $this->fobPriceCurrencyType;
    }
    
    /**
     * 设置     
     * @param String $fobPriceCurrencyType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFobPriceCurrencyType( $fobPriceCurrencyType) {
        $this->fobPriceCurrencyType = $fobPriceCurrencyType;
    }
    
        	
    private $mainImageUrlOptimize;
    
        /**
    * @return 
    */
        public function getMainImageUrlOptimize() {
        return $this->mainImageUrlOptimize;
    }
    
    /**
     * 设置     
     * @param String $mainImageUrlOptimize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainImageUrlOptimize( $mainImageUrlOptimize) {
        $this->mainImageUrlOptimize = $mainImageUrlOptimize;
    }
    
        	
    private $tppWeekSales;
    
        /**
    * @return 
    */
        public function getTppWeekSales() {
        return $this->tppWeekSales;
    }
    
    /**
     * 设置     
     * @param String $tppWeekSales     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTppWeekSales( $tppWeekSales) {
        $this->tppWeekSales = $tppWeekSales;
    }
    
        	
    private $extendImageUrl;
    
        /**
    * @return 
    */
        public function getExtendImageUrl() {
        return $this->extendImageUrl;
    }
    
    /**
     * 设置     
     * @param String $extendImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtendImageUrl( $extendImageUrl) {
        $this->extendImageUrl = $extendImageUrl;
    }
    
        	
    private $mainImageUrl;
    
        /**
    * @return 
    */
        public function getMainImageUrl() {
        return $this->mainImageUrl;
    }
    
    /**
     * 设置     
     * @param String $mainImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainImageUrl( $mainImageUrl) {
        $this->mainImageUrl = $mainImageUrl;
    }
    
        	
    private $displayCategoryIds;
    
        /**
    * @return 
    */
        public function getDisplayCategoryIds() {
        return $this->displayCategoryIds;
    }
    
    /**
     * 设置     
     * @param List $displayCategoryIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDisplayCategoryIds(array $displayCategoryIds) {
        $this->displayCategoryIds = $displayCategoryIds;
    }
    
        	
    private $bargainPrice;
    
        /**
    * @return 
    */
        public function getBargainPrice() {
        return $this->bargainPrice;
    }
    
    /**
     * 设置     
     * @param String $bargainPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBargainPrice( $bargainPrice) {
        $this->bargainPrice = $bargainPrice;
    }
    
        	
    private $bwPid;
    
        /**
    * @return 
    */
        public function getBwPid() {
        return $this->bwPid;
    }
    
    /**
     * 设置     
     * @param String $bwPid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBwPid( $bwPid) {
        $this->bwPid = $bwPid;
    }
    
        	
    private $isOnetouch;
    
        /**
    * @return 
    */
        public function getIsOnetouch() {
        return $this->isOnetouch;
    }
    
    /**
     * 设置     
     * @param String $isOnetouch     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsOnetouch( $isOnetouch) {
        $this->isOnetouch = $isOnetouch;
    }
    
        	
    private $mainImageUrlList;
    
        /**
    * @return 
    */
        public function getMainImageUrlList() {
        return $this->mainImageUrlList;
    }
    
    /**
     * 设置     
     * @param List $mainImageUrlList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainImageUrlList(array $mainImageUrlList) {
        $this->mainImageUrlList = $mainImageUrlList;
    }
    
        	
    private $primaryRankScore;
    
        /**
    * @return 
    */
        public function getPrimaryRankScore() {
        return $this->primaryRankScore;
    }
    
    /**
     * 设置     
     * @param String $primaryRankScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrimaryRankScore( $primaryRankScore) {
        $this->primaryRankScore = $primaryRankScore;
    }
    
        	
    private $extendImageUrlOptimize;
    
        /**
    * @return 
    */
        public function getExtendImageUrlOptimize() {
        return $this->extendImageUrlOptimize;
    }
    
    /**
     * 设置     
     * @param String $extendImageUrlOptimize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtendImageUrlOptimize( $extendImageUrlOptimize) {
        $this->extendImageUrlOptimize = $extendImageUrlOptimize;
    }
    
        	
    private $p4P;
    
        /**
    * @return 
    */
        public function getP4P() {
        return $this->p4P;
    }
    
    /**
     * 设置     
     * @param Boolean $p4P     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setP4P( $p4P) {
        $this->p4P = $p4P;
    }
    
        	
    private $galleryTitle;
    
        /**
    * @return 
    */
        public function getGalleryTitle() {
        return $this->galleryTitle;
    }
    
    /**
     * 设置     
     * @param String $galleryTitle     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGalleryTitle( $galleryTitle) {
        $this->galleryTitle = $galleryTitle;
    }
    
        	
    private $minOrderDesc;
    
        /**
    * @return 
    */
        public function getMinOrderDesc() {
        return $this->minOrderDesc;
    }
    
    /**
     * 设置     
     * @param String $minOrderDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOrderDesc( $minOrderDesc) {
        $this->minOrderDesc = $minOrderDesc;
    }
    
        	
    private $expCountryIds;
    
        /**
    * @return 
    */
        public function getExpCountryIds() {
        return $this->expCountryIds;
    }
    
    /**
     * 设置     
     * @param String $expCountryIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExpCountryIds( $expCountryIds) {
        $this->expCountryIds = $expCountryIds;
    }
    
        	
    private $yearTransactionGmv;
    
        /**
    * @return 
    */
        public function getYearTransactionGmv() {
        return $this->yearTransactionGmv;
    }
    
    /**
     * 设置     
     * @param String $yearTransactionGmv     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setYearTransactionGmv( $yearTransactionGmv) {
        $this->yearTransactionGmv = $yearTransactionGmv;
    }
    
        	
    private $commentStar;
    
        /**
    * @return 
    */
        public function getCommentStar() {
        return $this->commentStar;
    }
    
    /**
     * 设置     
     * @param String $commentStar     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCommentStar( $commentStar) {
        $this->commentStar = $commentStar;
    }
    
        	
    private $aliMemberId;
    
        /**
    * @return 
    */
        public function getAliMemberId() {
        return $this->aliMemberId;
    }
    
    /**
     * 设置     
     * @param Long $aliMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliMemberId( $aliMemberId) {
        $this->aliMemberId = $aliMemberId;
    }
    
        	
    private $attributes;
    
        /**
    * @return 
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListAttributeObject[] $attributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaIcbuProductListAttributeObject $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $mabAttributes;
    
        /**
    * @return 
    */
        public function getMabAttributes() {
        return $this->mabAttributes;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListAttributeObject[] $mabAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMabAttributes(AlibabaIcbuProductListAttributeObject $mabAttributes) {
        $this->mabAttributes = $mabAttributes;
    }
    
        	
    private $skuPrices;
    
        /**
    * @return 
    */
        public function getSkuPrices() {
        return $this->skuPrices;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListPriceObject[] $skuPrices     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuPrices(AlibabaIcbuProductListPriceObject $skuPrices) {
        $this->skuPrices = $skuPrices;
    }
    
        	
    private $ladderPrices;
    
        /**
    * @return 
    */
        public function getLadderPrices() {
        return $this->ladderPrices;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListPriceObject[] $ladderPrices     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLadderPrices(AlibabaIcbuProductListPriceObject $ladderPrices) {
        $this->ladderPrices = $ladderPrices;
    }
    
        	
    private $mlrAttributes;
    
        /**
    * @return 
    */
        public function getMlrAttributes() {
        return $this->mlrAttributes;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListAttributeObject[] $mlrAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMlrAttributes(AlibabaIcbuProductListAttributeObject $mlrAttributes) {
        $this->mlrAttributes = $mlrAttributes;
    }
    
        	
    private $dispatchPlaceInventory;
    
        /**
    * @return 
    */
        public function getDispatchPlaceInventory() {
        return $this->dispatchPlaceInventory;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListDispatchObject[] $dispatchPlaceInventory     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDispatchPlaceInventory(AlibabaIcbuProductListDispatchObject $dispatchPlaceInventory) {
        $this->dispatchPlaceInventory = $dispatchPlaceInventory;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "summary", $this->stdResult )) {
    				$this->summary = $this->stdResult->{"summary"};
    			}
    			    		    				    			    			if (array_key_exists ( "commentCnt", $this->stdResult )) {
    				$this->commentCnt = $this->stdResult->{"commentCnt"};
    			}
    			    		    				    			    			if (array_key_exists ( "postCategoryId", $this->stdResult )) {
    				$this->postCategoryId = $this->stdResult->{"postCategoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "grossProfit", $this->stdResult )) {
    				$this->grossProfit = $this->stdResult->{"grossProfit"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "grossMargin", $this->stdResult )) {
    				$this->grossMargin = $this->stdResult->{"grossMargin"};
    			}
    			    		    				    			    			if (array_key_exists ( "fobPriceTo", $this->stdResult )) {
    				$this->fobPriceTo = $this->stdResult->{"fobPriceTo"};
    			}
    			    		    				    			    			if (array_key_exists ( "fobPriceFrom", $this->stdResult )) {
    				$this->fobPriceFrom = $this->stdResult->{"fobPriceFrom"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOrderUnit", $this->stdResult )) {
    				$this->minOrderUnit = $this->stdResult->{"minOrderUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "tppPrice", $this->stdResult )) {
    				$this->tppPrice = $this->stdResult->{"tppPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "eurl", $this->stdResult )) {
    				$this->eurl = $this->stdResult->{"eurl"};
    			}
    			    		    				    			    			if (array_key_exists ( "freeSample", $this->stdResult )) {
    				$this->freeSample = $this->stdResult->{"freeSample"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandId", $this->stdResult )) {
    				$this->brandId = $this->stdResult->{"brandId"};
    			}
    			    		    				    			    			if (array_key_exists ( "recentTransactionCount", $this->stdResult )) {
    				$this->recentTransactionCount = $this->stdResult->{"recentTransactionCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "newAD", $this->stdResult )) {
    				$this->newAD = $this->stdResult->{"newAD"};
    			}
    			    		    				    			    			if (array_key_exists ( "rankScoreInfo", $this->stdResult )) {
    				$this->rankScoreInfo = $this->stdResult->{"rankScoreInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "stock", $this->stdResult )) {
    				$this->stock = $this->stdResult->{"stock"};
    			}
    			    		    				    			    			if (array_key_exists ( "newArrival", $this->stdResult )) {
    				$this->newArrival = $this->stdResult->{"newArrival"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandNameCn", $this->stdResult )) {
    				$this->brandNameCn = $this->stdResult->{"brandNameCn"};
    			}
    			    		    				    			    			if (array_key_exists ( "rerankType", $this->stdResult )) {
    				$this->rerankType = $this->stdResult->{"rerankType"};
    			}
    			    		    				    			    			if (array_key_exists ( "deliveryDetails", $this->stdResult )) {
    				$this->deliveryDetails = $this->stdResult->{"deliveryDetails"};
    			}
    			    		    				    			    			if (array_key_exists ( "keywords", $this->stdResult )) {
    				$this->keywords = $this->stdResult->{"keywords"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupValue", $this->stdResult )) {
    				$this->groupValue = $this->stdResult->{"groupValue"};
    			}
    			    		    				    			    			if (array_key_exists ( "personalizeType", $this->stdResult )) {
    				$this->personalizeType = $this->stdResult->{"personalizeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "inq", $this->stdResult )) {
    				$this->inq = $this->stdResult->{"inq"};
    			}
    			    		    				    			    			if (array_key_exists ( "tagDesc", $this->stdResult )) {
    				$this->tagDesc = $this->stdResult->{"tagDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "atmStatus", $this->stdResult )) {
    				$this->atmStatus = $this->stdResult->{"atmStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "tppTotalSales", $this->stdResult )) {
    				$this->tppTotalSales = $this->stdResult->{"tppTotalSales"};
    			}
    			    		    				    			    			if (array_key_exists ( "ownerMemberId", $this->stdResult )) {
    				$this->ownerMemberId = $this->stdResult->{"ownerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "scaleImageUrl", $this->stdResult )) {
    				$this->scaleImageUrl = $this->stdResult->{"scaleImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizOpportunities", $this->stdResult )) {
    				$this->bizOpportunities = $this->stdResult->{"bizOpportunities"};
    			}
    			    		    				    			    			if (array_key_exists ( "pureTitle", $this->stdResult )) {
    				$this->pureTitle = $this->stdResult->{"pureTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "promotionPrice", $this->stdResult )) {
    				$this->promotionPrice = $this->stdResult->{"promotionPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bbProductTag", $this->stdResult )) {
    				$this->bbProductTag = $this->stdResult->{"bbProductTag"};
    			}
    			    		    				    			    			if (array_key_exists ( "shopWindow", $this->stdResult )) {
    				$this->shopWindow = $this->stdResult->{"shopWindow"};
    			}
    			    		    				    			    			if (array_key_exists ( "placeOrderUrl", $this->stdResult )) {
    				$this->placeOrderUrl = $this->stdResult->{"placeOrderUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "fobPriceUnit", $this->stdResult )) {
    				$this->fobPriceUnit = $this->stdResult->{"fobPriceUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "market", $this->stdResult )) {
    				$this->market = $this->stdResult->{"market"};
    			}
    			    		    				    			    			if (array_key_exists ( "orders", $this->stdResult )) {
    				$this->orders = $this->stdResult->{"orders"};
    			}
    			    		    				    			    			if (array_key_exists ( "dispatchPlace", $this->stdResult )) {
    				$this->dispatchPlace = $this->stdResult->{"dispatchPlace"};
    			}
    			    		    				    			    			if (array_key_exists ( "language", $this->stdResult )) {
    				$this->language = $this->stdResult->{"language"};
    			}
    			    		    				    			    			if (array_key_exists ( "multiImageUrl", $this->stdResult )) {
    				$this->multiImageUrl = $this->stdResult->{"multiImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "taRec", $this->stdResult )) {
    				$this->taRec = $this->stdResult->{"taRec"};
    			}
    			    		    				    			    			if (array_key_exists ( "port", $this->stdResult )) {
    				$this->port = $this->stdResult->{"port"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "packagingDetails", $this->stdResult )) {
    				$this->packagingDetails = $this->stdResult->{"packagingDetails"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainProduct", $this->stdResult )) {
    				$this->mainProduct = $this->stdResult->{"mainProduct"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyAbility", $this->stdResult )) {
    				$this->supplyAbility = $this->stdResult->{"supplyAbility"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandLocation", $this->stdResult )) {
    				$this->brandLocation = $this->stdResult->{"brandLocation"};
    			}
    			    		    				    			    			if (array_key_exists ( "extendImageUrlList", $this->stdResult )) {
    				$this->extendImageUrlList = $this->stdResult->{"extendImageUrlList"};
    			}
    			    		    				    			    			if (array_key_exists ( "aggregationTag", $this->stdResult )) {
    				$this->aggregationTag = $this->stdResult->{"aggregationTag"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "tppName", $this->stdResult )) {
    				$this->tppName = $this->stdResult->{"tppName"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "yearTransactionCount", $this->stdResult )) {
    				$this->yearTransactionCount = $this->stdResult->{"yearTransactionCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "titleShort", $this->stdResult )) {
    				$this->titleShort = $this->stdResult->{"titleShort"};
    			}
    			    		    				    			    			if (array_key_exists ( "bbActivityIds", $this->stdResult )) {
    				$this->bbActivityIds = $this->stdResult->{"bbActivityIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandNameEn", $this->stdResult )) {
    				$this->brandNameEn = $this->stdResult->{"brandNameEn"};
    			}
    			    		    				    			    			if (array_key_exists ( "aD", $this->stdResult )) {
    				$this->aD = $this->stdResult->{"aD"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOrderQuantity", $this->stdResult )) {
    				$this->minOrderQuantity = $this->stdResult->{"minOrderQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "fobPriceCurrencyType", $this->stdResult )) {
    				$this->fobPriceCurrencyType = $this->stdResult->{"fobPriceCurrencyType"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainImageUrlOptimize", $this->stdResult )) {
    				$this->mainImageUrlOptimize = $this->stdResult->{"mainImageUrlOptimize"};
    			}
    			    		    				    			    			if (array_key_exists ( "tppWeekSales", $this->stdResult )) {
    				$this->tppWeekSales = $this->stdResult->{"tppWeekSales"};
    			}
    			    		    				    			    			if (array_key_exists ( "extendImageUrl", $this->stdResult )) {
    				$this->extendImageUrl = $this->stdResult->{"extendImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainImageUrl", $this->stdResult )) {
    				$this->mainImageUrl = $this->stdResult->{"mainImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayCategoryIds", $this->stdResult )) {
    				$this->displayCategoryIds = $this->stdResult->{"displayCategoryIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "bargainPrice", $this->stdResult )) {
    				$this->bargainPrice = $this->stdResult->{"bargainPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bwPid", $this->stdResult )) {
    				$this->bwPid = $this->stdResult->{"bwPid"};
    			}
    			    		    				    			    			if (array_key_exists ( "isOnetouch", $this->stdResult )) {
    				$this->isOnetouch = $this->stdResult->{"isOnetouch"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainImageUrlList", $this->stdResult )) {
    				$this->mainImageUrlList = $this->stdResult->{"mainImageUrlList"};
    			}
    			    		    				    			    			if (array_key_exists ( "primaryRankScore", $this->stdResult )) {
    				$this->primaryRankScore = $this->stdResult->{"primaryRankScore"};
    			}
    			    		    				    			    			if (array_key_exists ( "extendImageUrlOptimize", $this->stdResult )) {
    				$this->extendImageUrlOptimize = $this->stdResult->{"extendImageUrlOptimize"};
    			}
    			    		    				    			    			if (array_key_exists ( "p4P", $this->stdResult )) {
    				$this->p4P = $this->stdResult->{"p4P"};
    			}
    			    		    				    			    			if (array_key_exists ( "galleryTitle", $this->stdResult )) {
    				$this->galleryTitle = $this->stdResult->{"galleryTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOrderDesc", $this->stdResult )) {
    				$this->minOrderDesc = $this->stdResult->{"minOrderDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "expCountryIds", $this->stdResult )) {
    				$this->expCountryIds = $this->stdResult->{"expCountryIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "yearTransactionGmv", $this->stdResult )) {
    				$this->yearTransactionGmv = $this->stdResult->{"yearTransactionGmv"};
    			}
    			    		    				    			    			if (array_key_exists ( "commentStar", $this->stdResult )) {
    				$this->commentStar = $this->stdResult->{"commentStar"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliMemberId", $this->stdResult )) {
    				$this->aliMemberId = $this->stdResult->{"aliMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    			$attributesResult=$this->stdResult->{"attributes"};
    				$object = json_decode ( json_encode ( $attributesResult ), true );
					$this->attributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListAttributeObjectResult=new AlibabaIcbuProductListAttributeObject();
						$AlibabaIcbuProductListAttributeObjectResult->setArrayResult($arrayobject );
						$this->attributes [$i] = $AlibabaIcbuProductListAttributeObjectResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "mabAttributes", $this->stdResult )) {
    			$mabAttributesResult=$this->stdResult->{"mabAttributes"};
    				$object = json_decode ( json_encode ( $mabAttributesResult ), true );
					$this->mabAttributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListAttributeObjectResult=new AlibabaIcbuProductListAttributeObject();
						$AlibabaIcbuProductListAttributeObjectResult->setArrayResult($arrayobject );
						$this->mabAttributes [$i] = $AlibabaIcbuProductListAttributeObjectResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "skuPrices", $this->stdResult )) {
    			$skuPricesResult=$this->stdResult->{"skuPrices"};
    				$object = json_decode ( json_encode ( $skuPricesResult ), true );
					$this->skuPrices = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListPriceObjectResult=new AlibabaIcbuProductListPriceObject();
						$AlibabaIcbuProductListPriceObjectResult->setArrayResult($arrayobject );
						$this->skuPrices [$i] = $AlibabaIcbuProductListPriceObjectResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "ladderPrices", $this->stdResult )) {
    			$ladderPricesResult=$this->stdResult->{"ladderPrices"};
    				$object = json_decode ( json_encode ( $ladderPricesResult ), true );
					$this->ladderPrices = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListPriceObjectResult=new AlibabaIcbuProductListPriceObject();
						$AlibabaIcbuProductListPriceObjectResult->setArrayResult($arrayobject );
						$this->ladderPrices [$i] = $AlibabaIcbuProductListPriceObjectResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "mlrAttributes", $this->stdResult )) {
    			$mlrAttributesResult=$this->stdResult->{"mlrAttributes"};
    				$object = json_decode ( json_encode ( $mlrAttributesResult ), true );
					$this->mlrAttributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListAttributeObjectResult=new AlibabaIcbuProductListAttributeObject();
						$AlibabaIcbuProductListAttributeObjectResult->setArrayResult($arrayobject );
						$this->mlrAttributes [$i] = $AlibabaIcbuProductListAttributeObjectResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "dispatchPlaceInventory", $this->stdResult )) {
    			$dispatchPlaceInventoryResult=$this->stdResult->{"dispatchPlaceInventory"};
    				$object = json_decode ( json_encode ( $dispatchPlaceInventoryResult ), true );
					$this->dispatchPlaceInventory = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListDispatchObjectResult=new AlibabaIcbuProductListDispatchObject();
						$AlibabaIcbuProductListDispatchObjectResult->setArrayResult($arrayobject );
						$this->dispatchPlaceInventory [$i] = $AlibabaIcbuProductListDispatchObjectResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "summary", $this->arrayResult )) {
    			$this->summary = $arrayResult['summary'];
    			}
    		    	    			    		    			if (array_key_exists ( "commentCnt", $this->arrayResult )) {
    			$this->commentCnt = $arrayResult['commentCnt'];
    			}
    		    	    			    		    			if (array_key_exists ( "postCategoryId", $this->arrayResult )) {
    			$this->postCategoryId = $arrayResult['postCategoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "grossProfit", $this->arrayResult )) {
    			$this->grossProfit = $arrayResult['grossProfit'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['imageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "grossMargin", $this->arrayResult )) {
    			$this->grossMargin = $arrayResult['grossMargin'];
    			}
    		    	    			    		    			if (array_key_exists ( "fobPriceTo", $this->arrayResult )) {
    			$this->fobPriceTo = $arrayResult['fobPriceTo'];
    			}
    		    	    			    		    			if (array_key_exists ( "fobPriceFrom", $this->arrayResult )) {
    			$this->fobPriceFrom = $arrayResult['fobPriceFrom'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOrderUnit", $this->arrayResult )) {
    			$this->minOrderUnit = $arrayResult['minOrderUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "tppPrice", $this->arrayResult )) {
    			$this->tppPrice = $arrayResult['tppPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "eurl", $this->arrayResult )) {
    			$this->eurl = $arrayResult['eurl'];
    			}
    		    	    			    		    			if (array_key_exists ( "freeSample", $this->arrayResult )) {
    			$this->freeSample = $arrayResult['freeSample'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandId", $this->arrayResult )) {
    			$this->brandId = $arrayResult['brandId'];
    			}
    		    	    			    		    			if (array_key_exists ( "recentTransactionCount", $this->arrayResult )) {
    			$this->recentTransactionCount = $arrayResult['recentTransactionCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "newAD", $this->arrayResult )) {
    			$this->newAD = $arrayResult['newAD'];
    			}
    		    	    			    		    			if (array_key_exists ( "rankScoreInfo", $this->arrayResult )) {
    			$this->rankScoreInfo = $arrayResult['rankScoreInfo'];
    			}
    		    	    			    		    			if (array_key_exists ( "stock", $this->arrayResult )) {
    			$this->stock = $arrayResult['stock'];
    			}
    		    	    			    		    			if (array_key_exists ( "newArrival", $this->arrayResult )) {
    			$this->newArrival = $arrayResult['newArrival'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandNameCn", $this->arrayResult )) {
    			$this->brandNameCn = $arrayResult['brandNameCn'];
    			}
    		    	    			    		    			if (array_key_exists ( "rerankType", $this->arrayResult )) {
    			$this->rerankType = $arrayResult['rerankType'];
    			}
    		    	    			    		    			if (array_key_exists ( "deliveryDetails", $this->arrayResult )) {
    			$this->deliveryDetails = $arrayResult['deliveryDetails'];
    			}
    		    	    			    		    			if (array_key_exists ( "keywords", $this->arrayResult )) {
    			$this->keywords = $arrayResult['keywords'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupValue", $this->arrayResult )) {
    			$this->groupValue = $arrayResult['groupValue'];
    			}
    		    	    			    		    			if (array_key_exists ( "personalizeType", $this->arrayResult )) {
    			$this->personalizeType = $arrayResult['personalizeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "inq", $this->arrayResult )) {
    			$this->inq = $arrayResult['inq'];
    			}
    		    	    			    		    			if (array_key_exists ( "tagDesc", $this->arrayResult )) {
    			$this->tagDesc = $arrayResult['tagDesc'];
    			}
    		    	    			    		    			if (array_key_exists ( "atmStatus", $this->arrayResult )) {
    			$this->atmStatus = $arrayResult['atmStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "tppTotalSales", $this->arrayResult )) {
    			$this->tppTotalSales = $arrayResult['tppTotalSales'];
    			}
    		    	    			    		    			if (array_key_exists ( "ownerMemberId", $this->arrayResult )) {
    			$this->ownerMemberId = $arrayResult['ownerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "scaleImageUrl", $this->arrayResult )) {
    			$this->scaleImageUrl = $arrayResult['scaleImageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizOpportunities", $this->arrayResult )) {
    			$this->bizOpportunities = $arrayResult['bizOpportunities'];
    			}
    		    	    			    		    			if (array_key_exists ( "pureTitle", $this->arrayResult )) {
    			$this->pureTitle = $arrayResult['pureTitle'];
    			}
    		    	    			    		    			if (array_key_exists ( "promotionPrice", $this->arrayResult )) {
    			$this->promotionPrice = $arrayResult['promotionPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bbProductTag", $this->arrayResult )) {
    			$this->bbProductTag = $arrayResult['bbProductTag'];
    			}
    		    	    			    		    			if (array_key_exists ( "shopWindow", $this->arrayResult )) {
    			$this->shopWindow = $arrayResult['shopWindow'];
    			}
    		    	    			    		    			if (array_key_exists ( "placeOrderUrl", $this->arrayResult )) {
    			$this->placeOrderUrl = $arrayResult['placeOrderUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "fobPriceUnit", $this->arrayResult )) {
    			$this->fobPriceUnit = $arrayResult['fobPriceUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "market", $this->arrayResult )) {
    			$this->market = $arrayResult['market'];
    			}
    		    	    			    		    			if (array_key_exists ( "orders", $this->arrayResult )) {
    			$this->orders = $arrayResult['orders'];
    			}
    		    	    			    		    			if (array_key_exists ( "dispatchPlace", $this->arrayResult )) {
    			$this->dispatchPlace = $arrayResult['dispatchPlace'];
    			}
    		    	    			    		    			if (array_key_exists ( "language", $this->arrayResult )) {
    			$this->language = $arrayResult['language'];
    			}
    		    	    			    		    			if (array_key_exists ( "multiImageUrl", $this->arrayResult )) {
    			$this->multiImageUrl = $arrayResult['multiImageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "taRec", $this->arrayResult )) {
    			$this->taRec = $arrayResult['taRec'];
    			}
    		    	    			    		    			if (array_key_exists ( "port", $this->arrayResult )) {
    			$this->port = $arrayResult['port'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "packagingDetails", $this->arrayResult )) {
    			$this->packagingDetails = $arrayResult['packagingDetails'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainProduct", $this->arrayResult )) {
    			$this->mainProduct = $arrayResult['mainProduct'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyAbility", $this->arrayResult )) {
    			$this->supplyAbility = $arrayResult['supplyAbility'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandLocation", $this->arrayResult )) {
    			$this->brandLocation = $arrayResult['brandLocation'];
    			}
    		    	    			    		    			if (array_key_exists ( "extendImageUrlList", $this->arrayResult )) {
    			$this->extendImageUrlList = $arrayResult['extendImageUrlList'];
    			}
    		    	    			    		    			if (array_key_exists ( "aggregationTag", $this->arrayResult )) {
    			$this->aggregationTag = $arrayResult['aggregationTag'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "tppName", $this->arrayResult )) {
    			$this->tppName = $arrayResult['tppName'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "yearTransactionCount", $this->arrayResult )) {
    			$this->yearTransactionCount = $arrayResult['yearTransactionCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "titleShort", $this->arrayResult )) {
    			$this->titleShort = $arrayResult['titleShort'];
    			}
    		    	    			    		    			if (array_key_exists ( "bbActivityIds", $this->arrayResult )) {
    			$this->bbActivityIds = $arrayResult['bbActivityIds'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandNameEn", $this->arrayResult )) {
    			$this->brandNameEn = $arrayResult['brandNameEn'];
    			}
    		    	    			    		    			if (array_key_exists ( "aD", $this->arrayResult )) {
    			$this->aD = $arrayResult['aD'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOrderQuantity", $this->arrayResult )) {
    			$this->minOrderQuantity = $arrayResult['minOrderQuantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "fobPriceCurrencyType", $this->arrayResult )) {
    			$this->fobPriceCurrencyType = $arrayResult['fobPriceCurrencyType'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainImageUrlOptimize", $this->arrayResult )) {
    			$this->mainImageUrlOptimize = $arrayResult['mainImageUrlOptimize'];
    			}
    		    	    			    		    			if (array_key_exists ( "tppWeekSales", $this->arrayResult )) {
    			$this->tppWeekSales = $arrayResult['tppWeekSales'];
    			}
    		    	    			    		    			if (array_key_exists ( "extendImageUrl", $this->arrayResult )) {
    			$this->extendImageUrl = $arrayResult['extendImageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainImageUrl", $this->arrayResult )) {
    			$this->mainImageUrl = $arrayResult['mainImageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayCategoryIds", $this->arrayResult )) {
    			$this->displayCategoryIds = $arrayResult['displayCategoryIds'];
    			}
    		    	    			    		    			if (array_key_exists ( "bargainPrice", $this->arrayResult )) {
    			$this->bargainPrice = $arrayResult['bargainPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bwPid", $this->arrayResult )) {
    			$this->bwPid = $arrayResult['bwPid'];
    			}
    		    	    			    		    			if (array_key_exists ( "isOnetouch", $this->arrayResult )) {
    			$this->isOnetouch = $arrayResult['isOnetouch'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainImageUrlList", $this->arrayResult )) {
    			$this->mainImageUrlList = $arrayResult['mainImageUrlList'];
    			}
    		    	    			    		    			if (array_key_exists ( "primaryRankScore", $this->arrayResult )) {
    			$this->primaryRankScore = $arrayResult['primaryRankScore'];
    			}
    		    	    			    		    			if (array_key_exists ( "extendImageUrlOptimize", $this->arrayResult )) {
    			$this->extendImageUrlOptimize = $arrayResult['extendImageUrlOptimize'];
    			}
    		    	    			    		    			if (array_key_exists ( "p4P", $this->arrayResult )) {
    			$this->p4P = $arrayResult['p4P'];
    			}
    		    	    			    		    			if (array_key_exists ( "galleryTitle", $this->arrayResult )) {
    			$this->galleryTitle = $arrayResult['galleryTitle'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOrderDesc", $this->arrayResult )) {
    			$this->minOrderDesc = $arrayResult['minOrderDesc'];
    			}
    		    	    			    		    			if (array_key_exists ( "expCountryIds", $this->arrayResult )) {
    			$this->expCountryIds = $arrayResult['expCountryIds'];
    			}
    		    	    			    		    			if (array_key_exists ( "yearTransactionGmv", $this->arrayResult )) {
    			$this->yearTransactionGmv = $arrayResult['yearTransactionGmv'];
    			}
    		    	    			    		    			if (array_key_exists ( "commentStar", $this->arrayResult )) {
    			$this->commentStar = $arrayResult['commentStar'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliMemberId", $this->arrayResult )) {
    			$this->aliMemberId = $arrayResult['aliMemberId'];
    			}
    		    	    			    		    		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['attributes'];
    			$this->attributes = new AlibabaIcbuProductListAttributeObject();
    			$this->attributes->setStdResult ( $attributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "mabAttributes", $this->arrayResult )) {
    		$mabAttributesResult=$arrayResult['mabAttributes'];
    			$this->mabAttributes = new AlibabaIcbuProductListAttributeObject();
    			$this->mabAttributes->setStdResult ( $mabAttributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "skuPrices", $this->arrayResult )) {
    		$skuPricesResult=$arrayResult['skuPrices'];
    			$this->skuPrices = new AlibabaIcbuProductListPriceObject();
    			$this->skuPrices->setStdResult ( $skuPricesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "ladderPrices", $this->arrayResult )) {
    		$ladderPricesResult=$arrayResult['ladderPrices'];
    			$this->ladderPrices = new AlibabaIcbuProductListPriceObject();
    			$this->ladderPrices->setStdResult ( $ladderPricesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "mlrAttributes", $this->arrayResult )) {
    		$mlrAttributesResult=$arrayResult['mlrAttributes'];
    			$this->mlrAttributes = new AlibabaIcbuProductListAttributeObject();
    			$this->mlrAttributes->setStdResult ( $mlrAttributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "dispatchPlaceInventory", $this->arrayResult )) {
    		$dispatchPlaceInventoryResult=$arrayResult['dispatchPlaceInventory'];
    			$this->dispatchPlaceInventory = new AlibabaIcbuProductListDispatchObject();
    			$this->dispatchPlaceInventory->setStdResult ( $dispatchPlaceInventoryResult);
    		}
    		    	    		}
 
   
}
?>