<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateModelUserInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateMoney.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateMoney.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateModelUserInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateModelItemInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateModelTradeInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateMoney.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateImprModel.class.php');

class AlibabaProductRateRateModel extends SDKDomain {

       	
    private $remarkTime;
    
        /**
    * @return 
    */
        public function getRemarkTime() {
        return $this->remarkTime;
    }
    
    /**
     * 设置     
     * @param String $remarkTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemarkTime( $remarkTime) {
        $this->remarkTime = $remarkTime;
    }
    
        	
    private $receiveMemberId;
    
        /**
    * @return 
    */
        public function getReceiveMemberId() {
        return $this->receiveMemberId;
    }
    
    /**
     * 设置     
     * @param String $receiveMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveMemberId( $receiveMemberId) {
        $this->receiveMemberId = $receiveMemberId;
    }
    
        	
    private $raterUid;
    
        /**
    * @return 
    */
        public function getRaterUid() {
        return $this->raterUid;
    }
    
    /**
     * 设置     
     * @param Long $raterUid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRaterUid( $raterUid) {
        $this->raterUid = $raterUid;
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
    
        	
    private $identityAttr;
    
        /**
    * @return 
    */
        public function getIdentityAttr() {
        return $this->identityAttr;
    }
    
    /**
     * 设置     
     * @param String $identityAttr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdentityAttr( $identityAttr) {
        $this->identityAttr = $identityAttr;
    }
    
        	
    private $ratedUserNick;
    
        /**
    * @return 
    */
        public function getRatedUserNick() {
        return $this->ratedUserNick;
    }
    
    /**
     * 设置     
     * @param String $ratedUserNick     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRatedUserNick( $ratedUserNick) {
        $this->ratedUserNick = $ratedUserNick;
    }
    
        	
    private $quantity;
    
        /**
    * @return 
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置     
     * @param Double $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $isScore;
    
        /**
    * @return 
    */
        public function getIsScore() {
        return $this->isScore;
    }
    
    /**
     * 设置     
     * @param Boolean $isScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsScore( $isScore) {
        $this->isScore = $isScore;
    }
    
        	
    private $offerId;
    
        /**
    * @return 
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $isOld;
    
        /**
    * @return 
    */
        public function getIsOld() {
        return $this->isOld;
    }
    
    /**
     * 设置     
     * @param Boolean $isOld     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsOld( $isOld) {
        $this->isOld = $isOld;
    }
    
        	
    private $isMerge;
    
        /**
    * @return 
    */
        public function getIsMerge() {
        return $this->isMerge;
    }
    
    /**
     * 设置     
     * @param Boolean $isMerge     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsMerge( $isMerge) {
        $this->isMerge = $isMerge;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $gmtRemarkModified;
    
        /**
    * @return 
    */
        public function getGmtRemarkModified() {
        return $this->gmtRemarkModified;
    }
    
    /**
     * 设置     
     * @param Date $gmtRemarkModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtRemarkModified( $gmtRemarkModified) {
        $this->gmtRemarkModified = $gmtRemarkModified;
    }
    
        	
    private $explanation;
    
        /**
    * @return 
    */
        public function getExplanation() {
        return $this->explanation;
    }
    
    /**
     * 设置     
     * @param String $explanation     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExplanation( $explanation) {
        $this->explanation = $explanation;
    }
    
        	
    private $categoryId;
    
        /**
    * @return 
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置     
     * @param String $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $dispalyGoodRemark;
    
        /**
    * @return 
    */
        public function getDispalyGoodRemark() {
        return $this->dispalyGoodRemark;
    }
    
    /**
     * 设置     
     * @param Boolean $dispalyGoodRemark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDispalyGoodRemark( $dispalyGoodRemark) {
        $this->dispalyGoodRemark = $dispalyGoodRemark;
    }
    
        	
    private $identitySign;
    
        /**
    * @return 
    */
        public function getIdentitySign() {
        return $this->identitySign;
    }
    
    /**
     * 设置     
     * @param Long $identitySign     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdentitySign( $identitySign) {
        $this->identitySign = $identitySign;
    }
    
        	
    private $explanated;
    
        /**
    * @return 
    */
        public function getExplanated() {
        return $this->explanated;
    }
    
    /**
     * 设置     
     * @param Boolean $explanated     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExplanated( $explanated) {
        $this->explanated = $explanated;
    }
    
        	
    private $companyName;
    
        /**
    * @return 
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $riskType;
    
        /**
    * @return 
    */
        public function getRiskType() {
        return $this->riskType;
    }
    
    /**
     * 设置     
     * @param String $riskType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRiskType( $riskType) {
        $this->riskType = $riskType;
    }
    
        	
    private $maxOfferPrice;
    
        /**
    * @return 
    */
        public function getMaxOfferPrice() {
        return $this->maxOfferPrice;
    }
    
    /**
     * 设置     
     * @param Long $maxOfferPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMaxOfferPrice( $maxOfferPrice) {
        $this->maxOfferPrice = $maxOfferPrice;
    }
    
        	
    private $modified;
    
        /**
    * @return 
    */
        public function getModified() {
        return $this->modified;
    }
    
    /**
     * 设置     
     * @param Boolean $modified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModified( $modified) {
        $this->modified = $modified;
    }
    
        	
    private $content;
    
        /**
    * @return 
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置     
     * @param String $content     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
        	
    private $modifiedTimes;
    
        /**
    * @return 
    */
        public function getModifiedTimes() {
        return $this->modifiedTimes;
    }
    
    /**
     * 设置     
     * @param Integer $modifiedTimes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifiedTimes( $modifiedTimes) {
        $this->modifiedTimes = $modifiedTimes;
    }
    
        	
    private $certifyUrl;
    
        /**
    * @return 
    */
        public function getCertifyUrl() {
        return $this->certifyUrl;
    }
    
    /**
     * 设置     
     * @param String $certifyUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCertifyUrl( $certifyUrl) {
        $this->certifyUrl = $certifyUrl;
    }
    
        	
    private $tpLogoURL;
    
        /**
    * @return 
    */
        public function getTpLogoURL() {
        return $this->tpLogoURL;
    }
    
    /**
     * 设置     
     * @param String $tpLogoURL     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTpLogoURL( $tpLogoURL) {
        $this->tpLogoURL = $tpLogoURL;
    }
    
        	
    private $modifiedAble;
    
        /**
    * @return 
    */
        public function getModifiedAble() {
        return $this->modifiedAble;
    }
    
    /**
     * 设置     
     * @param Boolean $modifiedAble     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifiedAble( $modifiedAble) {
        $this->modifiedAble = $modifiedAble;
    }
    
        	
    private $bizType;
    
        /**
    * @return 
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置     
     * @param String $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
        	
    private $memberId;
    
        /**
    * @return 
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $raterUserNick;
    
        /**
    * @return 
    */
        public function getRaterUserNick() {
        return $this->raterUserNick;
    }
    
    /**
     * 设置     
     * @param String $raterUserNick     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRaterUserNick( $raterUserNick) {
        $this->raterUserNick = $raterUserNick;
    }
    
        	
    private $postMemberId;
    
        /**
    * @return 
    */
        public function getPostMemberId() {
        return $this->postMemberId;
    }
    
    /**
     * 设置     
     * @param String $postMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostMemberId( $postMemberId) {
        $this->postMemberId = $postMemberId;
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
    
        	
    private $tradeType;
    
        /**
    * @return 
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $explainTime;
    
        /**
    * @return 
    */
        public function getExplainTime() {
        return $this->explainTime;
    }
    
    /**
     * 设置     
     * @param String $explainTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExplainTime( $explainTime) {
        $this->explainTime = $explainTime;
    }
    
        	
    private $remarkContent;
    
        /**
    * @return 
    */
        public function getRemarkContent() {
        return $this->remarkContent;
    }
    
    /**
     * 设置     
     * @param String $remarkContent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemarkContent( $remarkContent) {
        $this->remarkContent = $remarkContent;
    }
    
        	
    private $tradeId;
    
        /**
    * @return 
    */
        public function getTradeId() {
        return $this->tradeId;
    }
    
    /**
     * 设置     
     * @param String $tradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeId( $tradeId) {
        $this->tradeId = $tradeId;
    }
    
        	
    private $ratedUid;
    
        /**
    * @return 
    */
        public function getRatedUid() {
        return $this->ratedUid;
    }
    
    /**
     * 设置     
     * @param Long $ratedUid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRatedUid( $ratedUid) {
        $this->ratedUid = $ratedUid;
    }
    
        	
    private $attribute;
    
        /**
    * @return 
    */
        public function getAttribute() {
        return $this->attribute;
    }
    
    /**
     * 设置     
     * @param String $attribute     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttribute( $attribute) {
        $this->attribute = $attribute;
    }
    
        	
    private $rootCatagoryId;
    
        /**
    * @return 
    */
        public function getRootCatagoryId() {
        return $this->rootCatagoryId;
    }
    
    /**
     * 设置     
     * @param String $rootCatagoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRootCatagoryId( $rootCatagoryId) {
        $this->rootCatagoryId = $rootCatagoryId;
    }
    
        	
    private $version;
    
        /**
    * @return 
    */
        public function getVersion() {
        return $this->version;
    }
    
    /**
     * 设置     
     * @param Integer $version     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVersion( $version) {
        $this->version = $version;
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
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $rateAble;
    
        /**
    * @return 
    */
        public function getRateAble() {
        return $this->rateAble;
    }
    
    /**
     * 设置     
     * @param Boolean $rateAble     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRateAble( $rateAble) {
        $this->rateAble = $rateAble;
    }
    
        	
    private $posterRole;
    
        /**
    * @return 
    */
        public function getPosterRole() {
        return $this->posterRole;
    }
    
    /**
     * 设置     
     * @param String $posterRole     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPosterRole( $posterRole) {
        $this->posterRole = $posterRole;
    }
    
        	
    private $gmtCompleted;
    
        /**
    * @return 
    */
        public function getGmtCompleted() {
        return $this->gmtCompleted;
    }
    
    /**
     * 设置     
     * @param Date $gmtCompleted     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCompleted( $gmtCompleted) {
        $this->gmtCompleted = $gmtCompleted;
    }
    
        	
    private $published;
    
        /**
    * @return 
    */
        public function getPublished() {
        return $this->published;
    }
    
    /**
     * 设置     
     * @param Boolean $published     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPublished( $published) {
        $this->published = $published;
    }
    
        	
    private $offerName;
    
        /**
    * @return 
    */
        public function getOfferName() {
        return $this->offerName;
    }
    
    /**
     * 设置     
     * @param String $offerName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferName( $offerName) {
        $this->offerName = $offerName;
    }
    
        	
    private $displayGoodRate;
    
        /**
    * @return 
    */
        public function getDisplayGoodRate() {
        return $this->displayGoodRate;
    }
    
    /**
     * 设置     
     * @param Boolean $displayGoodRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDisplayGoodRate( $displayGoodRate) {
        $this->displayGoodRate = $displayGoodRate;
    }
    
        	
    private $gmtPublished;
    
        /**
    * @return 
    */
        public function getGmtPublished() {
        return $this->gmtPublished;
    }
    
    /**
     * 设置     
     * @param Date $gmtPublished     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPublished( $gmtPublished) {
        $this->gmtPublished = $gmtPublished;
    }
    
        	
    private $explanatedAble;
    
        /**
    * @return 
    */
        public function getExplanatedAble() {
        return $this->explanatedAble;
    }
    
    /**
     * 设置     
     * @param Boolean $explanatedAble     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExplanatedAble( $explanatedAble) {
        $this->explanatedAble = $explanatedAble;
    }
    
        	
    private $picUrl;
    
        /**
    * @return 
    */
        public function getPicUrl() {
        return $this->picUrl;
    }
    
    /**
     * 设置     
     * @param String $picUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPicUrl( $picUrl) {
        $this->picUrl = $picUrl;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $subTradeId;
    
        /**
    * @return 
    */
        public function getSubTradeId() {
        return $this->subTradeId;
    }
    
    /**
     * 设置     
     * @param String $subTradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubTradeId( $subTradeId) {
        $this->subTradeId = $subTradeId;
    }
    
        	
    private $isSystemRemark;
    
        /**
    * @return 
    */
        public function getIsSystemRemark() {
        return $this->isSystemRemark;
    }
    
    /**
     * 设置     
     * @param Boolean $isSystemRemark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSystemRemark( $isSystemRemark) {
        $this->isSystemRemark = $isSystemRemark;
    }
    
        	
    private $explainContent;
    
        /**
    * @return 
    */
        public function getExplainContent() {
        return $this->explainContent;
    }
    
    /**
     * 设置     
     * @param String $explainContent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExplainContent( $explainContent) {
        $this->explainContent = $explainContent;
    }
    
        	
    private $sortWeight;
    
        /**
    * @return 
    */
        public function getSortWeight() {
        return $this->sortWeight;
    }
    
    /**
     * 设置     
     * @param Long $sortWeight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSortWeight( $sortWeight) {
        $this->sortWeight = $sortWeight;
    }
    
        	
    private $offer;
    
        /**
    * @return 
    */
        public function getOffer() {
        return $this->offer;
    }
    
    /**
     * 设置     
     * @param Boolean $offer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOffer( $offer) {
        $this->offer = $offer;
    }
    
        	
    private $hasRiskTag;
    
        /**
    * @return 
    */
        public function getHasRiskTag() {
        return $this->hasRiskTag;
    }
    
    /**
     * 设置     
     * @param String $hasRiskTag     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHasRiskTag( $hasRiskTag) {
        $this->hasRiskTag = $hasRiskTag;
    }
    
        	
    private $orderEntryId;
    
        /**
    * @return 
    */
        public function getOrderEntryId() {
        return $this->orderEntryId;
    }
    
    /**
     * 设置     
     * @param Long $orderEntryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderEntryId( $orderEntryId) {
        $this->orderEntryId = $orderEntryId;
    }
    
        	
    private $starLevel;
    
        /**
    * @return 
    */
        public function getStarLevel() {
        return $this->starLevel;
    }
    
    /**
     * 设置     
     * @param Integer $starLevel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStarLevel( $starLevel) {
        $this->starLevel = $starLevel;
    }
    
        	
    private $unit;
    
        /**
    * @return 
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $offerURL;
    
        /**
    * @return 
    */
        public function getOfferURL() {
        return $this->offerURL;
    }
    
    /**
     * 设置     
     * @param String $offerURL     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferURL( $offerURL) {
        $this->offerURL = $offerURL;
    }
    
        	
    private $gmtExplanation;
    
        /**
    * @return 
    */
        public function getGmtExplanation() {
        return $this->gmtExplanation;
    }
    
    /**
     * 设置     
     * @param Date $gmtExplanation     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtExplanation( $gmtExplanation) {
        $this->gmtExplanation = $gmtExplanation;
    }
    
        	
    private $indexUrl;
    
        /**
    * @return 
    */
        public function getIndexUrl() {
        return $this->indexUrl;
    }
    
    /**
     * 设置     
     * @param String $indexUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIndexUrl( $indexUrl) {
        $this->indexUrl = $indexUrl;
    }
    
        	
    private $isRead;
    
        /**
    * @return 
    */
        public function getIsRead() {
        return $this->isRead;
    }
    
    /**
     * 设置     
     * @param Boolean $isRead     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsRead( $isRead) {
        $this->isRead = $isRead;
    }
    
        	
    private $receiveUserInfo;
    
        /**
    * @return 
    */
        public function getReceiveUserInfo() {
        return $this->receiveUserInfo;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateRateModelUserInfo $receiveUserInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveUserInfo(AlibabaProductRateRateModelUserInfo $receiveUserInfo) {
        $this->receiveUserInfo = $receiveUserInfo;
    }
    
        	
    private $offerPrice;
    
        /**
    * @return 
    */
        public function getOfferPrice() {
        return $this->offerPrice;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateMoney $offerPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferPrice(AlibabaProductRateMoney $offerPrice) {
        $this->offerPrice = $offerPrice;
    }
    
        	
    private $transactionAmount;
    
        /**
    * @return 
    */
        public function getTransactionAmount() {
        return $this->transactionAmount;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateMoney $transactionAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTransactionAmount(AlibabaProductRateMoney $transactionAmount) {
        $this->transactionAmount = $transactionAmount;
    }
    
        	
    private $posterUserInfo;
    
        /**
    * @return 
    */
        public function getPosterUserInfo() {
        return $this->posterUserInfo;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateRateModelUserInfo $posterUserInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPosterUserInfo(AlibabaProductRateRateModelUserInfo $posterUserInfo) {
        $this->posterUserInfo = $posterUserInfo;
    }
    
        	
    private $itemInfo;
    
        /**
    * @return 
    */
        public function getItemInfo() {
        return $this->itemInfo;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateRateModelItemInfo $itemInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemInfo(AlibabaProductRateRateModelItemInfo $itemInfo) {
        $this->itemInfo = $itemInfo;
    }
    
        	
    private $rateModelTradeInfo;
    
        /**
    * @return 
    */
        public function getRateModelTradeInfo() {
        return $this->rateModelTradeInfo;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateRateModelTradeInfo $rateModelTradeInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRateModelTradeInfo(AlibabaProductRateRateModelTradeInfo $rateModelTradeInfo) {
        $this->rateModelTradeInfo = $rateModelTradeInfo;
    }
    
        	
    private $scoreMoney;
    
        /**
    * @return 
    */
        public function getScoreMoney() {
        return $this->scoreMoney;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateMoney $scoreMoney     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setScoreMoney(AlibabaProductRateMoney $scoreMoney) {
        $this->scoreMoney = $scoreMoney;
    }
    
        	
    private $rateImpr;
    
        /**
    * @return 
    */
        public function getRateImpr() {
        return $this->rateImpr;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateRateImprModel $rateImpr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRateImpr(AlibabaProductRateRateImprModel $rateImpr) {
        $this->rateImpr = $rateImpr;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "remarkTime", $this->stdResult )) {
    				$this->remarkTime = $this->stdResult->{"remarkTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveMemberId", $this->stdResult )) {
    				$this->receiveMemberId = $this->stdResult->{"receiveMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "raterUid", $this->stdResult )) {
    				$this->raterUid = $this->stdResult->{"raterUid"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "identityAttr", $this->stdResult )) {
    				$this->identityAttr = $this->stdResult->{"identityAttr"};
    			}
    			    		    				    			    			if (array_key_exists ( "ratedUserNick", $this->stdResult )) {
    				$this->ratedUserNick = $this->stdResult->{"ratedUserNick"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "isScore", $this->stdResult )) {
    				$this->isScore = $this->stdResult->{"isScore"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "isOld", $this->stdResult )) {
    				$this->isOld = $this->stdResult->{"isOld"};
    			}
    			    		    				    			    			if (array_key_exists ( "isMerge", $this->stdResult )) {
    				$this->isMerge = $this->stdResult->{"isMerge"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtRemarkModified", $this->stdResult )) {
    				$this->gmtRemarkModified = $this->stdResult->{"gmtRemarkModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "explanation", $this->stdResult )) {
    				$this->explanation = $this->stdResult->{"explanation"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "dispalyGoodRemark", $this->stdResult )) {
    				$this->dispalyGoodRemark = $this->stdResult->{"dispalyGoodRemark"};
    			}
    			    		    				    			    			if (array_key_exists ( "identitySign", $this->stdResult )) {
    				$this->identitySign = $this->stdResult->{"identitySign"};
    			}
    			    		    				    			    			if (array_key_exists ( "explanated", $this->stdResult )) {
    				$this->explanated = $this->stdResult->{"explanated"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "riskType", $this->stdResult )) {
    				$this->riskType = $this->stdResult->{"riskType"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxOfferPrice", $this->stdResult )) {
    				$this->maxOfferPrice = $this->stdResult->{"maxOfferPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "modified", $this->stdResult )) {
    				$this->modified = $this->stdResult->{"modified"};
    			}
    			    		    				    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifiedTimes", $this->stdResult )) {
    				$this->modifiedTimes = $this->stdResult->{"modifiedTimes"};
    			}
    			    		    				    			    			if (array_key_exists ( "certifyUrl", $this->stdResult )) {
    				$this->certifyUrl = $this->stdResult->{"certifyUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "tpLogoURL", $this->stdResult )) {
    				$this->tpLogoURL = $this->stdResult->{"tpLogoURL"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifiedAble", $this->stdResult )) {
    				$this->modifiedAble = $this->stdResult->{"modifiedAble"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "raterUserNick", $this->stdResult )) {
    				$this->raterUserNick = $this->stdResult->{"raterUserNick"};
    			}
    			    		    				    			    			if (array_key_exists ( "postMemberId", $this->stdResult )) {
    				$this->postMemberId = $this->stdResult->{"postMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "explainTime", $this->stdResult )) {
    				$this->explainTime = $this->stdResult->{"explainTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "remarkContent", $this->stdResult )) {
    				$this->remarkContent = $this->stdResult->{"remarkContent"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeId", $this->stdResult )) {
    				$this->tradeId = $this->stdResult->{"tradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "ratedUid", $this->stdResult )) {
    				$this->ratedUid = $this->stdResult->{"ratedUid"};
    			}
    			    		    				    			    			if (array_key_exists ( "attribute", $this->stdResult )) {
    				$this->attribute = $this->stdResult->{"attribute"};
    			}
    			    		    				    			    			if (array_key_exists ( "rootCatagoryId", $this->stdResult )) {
    				$this->rootCatagoryId = $this->stdResult->{"rootCatagoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "version", $this->stdResult )) {
    				$this->version = $this->stdResult->{"version"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "rateAble", $this->stdResult )) {
    				$this->rateAble = $this->stdResult->{"rateAble"};
    			}
    			    		    				    			    			if (array_key_exists ( "posterRole", $this->stdResult )) {
    				$this->posterRole = $this->stdResult->{"posterRole"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCompleted", $this->stdResult )) {
    				$this->gmtCompleted = $this->stdResult->{"gmtCompleted"};
    			}
    			    		    				    			    			if (array_key_exists ( "published", $this->stdResult )) {
    				$this->published = $this->stdResult->{"published"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerName", $this->stdResult )) {
    				$this->offerName = $this->stdResult->{"offerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayGoodRate", $this->stdResult )) {
    				$this->displayGoodRate = $this->stdResult->{"displayGoodRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtPublished", $this->stdResult )) {
    				$this->gmtPublished = $this->stdResult->{"gmtPublished"};
    			}
    			    		    				    			    			if (array_key_exists ( "explanatedAble", $this->stdResult )) {
    				$this->explanatedAble = $this->stdResult->{"explanatedAble"};
    			}
    			    		    				    			    			if (array_key_exists ( "picUrl", $this->stdResult )) {
    				$this->picUrl = $this->stdResult->{"picUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "subTradeId", $this->stdResult )) {
    				$this->subTradeId = $this->stdResult->{"subTradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSystemRemark", $this->stdResult )) {
    				$this->isSystemRemark = $this->stdResult->{"isSystemRemark"};
    			}
    			    		    				    			    			if (array_key_exists ( "explainContent", $this->stdResult )) {
    				$this->explainContent = $this->stdResult->{"explainContent"};
    			}
    			    		    				    			    			if (array_key_exists ( "sortWeight", $this->stdResult )) {
    				$this->sortWeight = $this->stdResult->{"sortWeight"};
    			}
    			    		    				    			    			if (array_key_exists ( "offer", $this->stdResult )) {
    				$this->offer = $this->stdResult->{"offer"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasRiskTag", $this->stdResult )) {
    				$this->hasRiskTag = $this->stdResult->{"hasRiskTag"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderEntryId", $this->stdResult )) {
    				$this->orderEntryId = $this->stdResult->{"orderEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "starLevel", $this->stdResult )) {
    				$this->starLevel = $this->stdResult->{"starLevel"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerURL", $this->stdResult )) {
    				$this->offerURL = $this->stdResult->{"offerURL"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtExplanation", $this->stdResult )) {
    				$this->gmtExplanation = $this->stdResult->{"gmtExplanation"};
    			}
    			    		    				    			    			if (array_key_exists ( "indexUrl", $this->stdResult )) {
    				$this->indexUrl = $this->stdResult->{"indexUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "isRead", $this->stdResult )) {
    				$this->isRead = $this->stdResult->{"isRead"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveUserInfo", $this->stdResult )) {
    				$receiveUserInfoResult=$this->stdResult->{"receiveUserInfo"};
    				$this->receiveUserInfo = new AlibabaProductRateRateModelUserInfo();
    				$this->receiveUserInfo->setStdResult ( $receiveUserInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "offerPrice", $this->stdResult )) {
    				$offerPriceResult=$this->stdResult->{"offerPrice"};
    				$this->offerPrice = new AlibabaProductRateMoney();
    				$this->offerPrice->setStdResult ( $offerPriceResult);
    			}
    			    		    				    			    			if (array_key_exists ( "transactionAmount", $this->stdResult )) {
    				$transactionAmountResult=$this->stdResult->{"transactionAmount"};
    				$this->transactionAmount = new AlibabaProductRateMoney();
    				$this->transactionAmount->setStdResult ( $transactionAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "posterUserInfo", $this->stdResult )) {
    				$posterUserInfoResult=$this->stdResult->{"posterUserInfo"};
    				$this->posterUserInfo = new AlibabaProductRateRateModelUserInfo();
    				$this->posterUserInfo->setStdResult ( $posterUserInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "itemInfo", $this->stdResult )) {
    				$itemInfoResult=$this->stdResult->{"itemInfo"};
    				$this->itemInfo = new AlibabaProductRateRateModelItemInfo();
    				$this->itemInfo->setStdResult ( $itemInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "rateModelTradeInfo", $this->stdResult )) {
    				$rateModelTradeInfoResult=$this->stdResult->{"rateModelTradeInfo"};
    				$this->rateModelTradeInfo = new AlibabaProductRateRateModelTradeInfo();
    				$this->rateModelTradeInfo->setStdResult ( $rateModelTradeInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "scoreMoney", $this->stdResult )) {
    				$scoreMoneyResult=$this->stdResult->{"scoreMoney"};
    				$this->scoreMoney = new AlibabaProductRateMoney();
    				$this->scoreMoney->setStdResult ( $scoreMoneyResult);
    			}
    			    		    				    			    			if (array_key_exists ( "rateImpr", $this->stdResult )) {
    				$rateImprResult=$this->stdResult->{"rateImpr"};
    				$this->rateImpr = new AlibabaProductRateRateImprModel();
    				$this->rateImpr->setStdResult ( $rateImprResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "remarkTime", $this->arrayResult )) {
    			$this->remarkTime = $arrayResult['remarkTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveMemberId", $this->arrayResult )) {
    			$this->receiveMemberId = $arrayResult['receiveMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "raterUid", $this->arrayResult )) {
    			$this->raterUid = $arrayResult['raterUid'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['imageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "identityAttr", $this->arrayResult )) {
    			$this->identityAttr = $arrayResult['identityAttr'];
    			}
    		    	    			    		    			if (array_key_exists ( "ratedUserNick", $this->arrayResult )) {
    			$this->ratedUserNick = $arrayResult['ratedUserNick'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['quantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "isScore", $this->arrayResult )) {
    			$this->isScore = $arrayResult['isScore'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "isOld", $this->arrayResult )) {
    			$this->isOld = $arrayResult['isOld'];
    			}
    		    	    			    		    			if (array_key_exists ( "isMerge", $this->arrayResult )) {
    			$this->isMerge = $arrayResult['isMerge'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtRemarkModified", $this->arrayResult )) {
    			$this->gmtRemarkModified = $arrayResult['gmtRemarkModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "explanation", $this->arrayResult )) {
    			$this->explanation = $arrayResult['explanation'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['categoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "dispalyGoodRemark", $this->arrayResult )) {
    			$this->dispalyGoodRemark = $arrayResult['dispalyGoodRemark'];
    			}
    		    	    			    		    			if (array_key_exists ( "identitySign", $this->arrayResult )) {
    			$this->identitySign = $arrayResult['identitySign'];
    			}
    		    	    			    		    			if (array_key_exists ( "explanated", $this->arrayResult )) {
    			$this->explanated = $arrayResult['explanated'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['companyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "riskType", $this->arrayResult )) {
    			$this->riskType = $arrayResult['riskType'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxOfferPrice", $this->arrayResult )) {
    			$this->maxOfferPrice = $arrayResult['maxOfferPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "modified", $this->arrayResult )) {
    			$this->modified = $arrayResult['modified'];
    			}
    		    	    			    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['content'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifiedTimes", $this->arrayResult )) {
    			$this->modifiedTimes = $arrayResult['modifiedTimes'];
    			}
    		    	    			    		    			if (array_key_exists ( "certifyUrl", $this->arrayResult )) {
    			$this->certifyUrl = $arrayResult['certifyUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "tpLogoURL", $this->arrayResult )) {
    			$this->tpLogoURL = $arrayResult['tpLogoURL'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifiedAble", $this->arrayResult )) {
    			$this->modifiedAble = $arrayResult['modifiedAble'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "raterUserNick", $this->arrayResult )) {
    			$this->raterUserNick = $arrayResult['raterUserNick'];
    			}
    		    	    			    		    			if (array_key_exists ( "postMemberId", $this->arrayResult )) {
    			$this->postMemberId = $arrayResult['postMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['tradeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "explainTime", $this->arrayResult )) {
    			$this->explainTime = $arrayResult['explainTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "remarkContent", $this->arrayResult )) {
    			$this->remarkContent = $arrayResult['remarkContent'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeId", $this->arrayResult )) {
    			$this->tradeId = $arrayResult['tradeId'];
    			}
    		    	    			    		    			if (array_key_exists ( "ratedUid", $this->arrayResult )) {
    			$this->ratedUid = $arrayResult['ratedUid'];
    			}
    		    	    			    		    			if (array_key_exists ( "attribute", $this->arrayResult )) {
    			$this->attribute = $arrayResult['attribute'];
    			}
    		    	    			    		    			if (array_key_exists ( "rootCatagoryId", $this->arrayResult )) {
    			$this->rootCatagoryId = $arrayResult['rootCatagoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "version", $this->arrayResult )) {
    			$this->version = $arrayResult['version'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "rateAble", $this->arrayResult )) {
    			$this->rateAble = $arrayResult['rateAble'];
    			}
    		    	    			    		    			if (array_key_exists ( "posterRole", $this->arrayResult )) {
    			$this->posterRole = $arrayResult['posterRole'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCompleted", $this->arrayResult )) {
    			$this->gmtCompleted = $arrayResult['gmtCompleted'];
    			}
    		    	    			    		    			if (array_key_exists ( "published", $this->arrayResult )) {
    			$this->published = $arrayResult['published'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerName", $this->arrayResult )) {
    			$this->offerName = $arrayResult['offerName'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayGoodRate", $this->arrayResult )) {
    			$this->displayGoodRate = $arrayResult['displayGoodRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtPublished", $this->arrayResult )) {
    			$this->gmtPublished = $arrayResult['gmtPublished'];
    			}
    		    	    			    		    			if (array_key_exists ( "explanatedAble", $this->arrayResult )) {
    			$this->explanatedAble = $arrayResult['explanatedAble'];
    			}
    		    	    			    		    			if (array_key_exists ( "picUrl", $this->arrayResult )) {
    			$this->picUrl = $arrayResult['picUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "subTradeId", $this->arrayResult )) {
    			$this->subTradeId = $arrayResult['subTradeId'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSystemRemark", $this->arrayResult )) {
    			$this->isSystemRemark = $arrayResult['isSystemRemark'];
    			}
    		    	    			    		    			if (array_key_exists ( "explainContent", $this->arrayResult )) {
    			$this->explainContent = $arrayResult['explainContent'];
    			}
    		    	    			    		    			if (array_key_exists ( "sortWeight", $this->arrayResult )) {
    			$this->sortWeight = $arrayResult['sortWeight'];
    			}
    		    	    			    		    			if (array_key_exists ( "offer", $this->arrayResult )) {
    			$this->offer = $arrayResult['offer'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasRiskTag", $this->arrayResult )) {
    			$this->hasRiskTag = $arrayResult['hasRiskTag'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderEntryId", $this->arrayResult )) {
    			$this->orderEntryId = $arrayResult['orderEntryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "starLevel", $this->arrayResult )) {
    			$this->starLevel = $arrayResult['starLevel'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerURL", $this->arrayResult )) {
    			$this->offerURL = $arrayResult['offerURL'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtExplanation", $this->arrayResult )) {
    			$this->gmtExplanation = $arrayResult['gmtExplanation'];
    			}
    		    	    			    		    			if (array_key_exists ( "indexUrl", $this->arrayResult )) {
    			$this->indexUrl = $arrayResult['indexUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "isRead", $this->arrayResult )) {
    			$this->isRead = $arrayResult['isRead'];
    			}
    		    	    			    		    		if (array_key_exists ( "receiveUserInfo", $this->arrayResult )) {
    		$receiveUserInfoResult=$arrayResult['receiveUserInfo'];
    			    			$this->receiveUserInfo = new AlibabaProductRateRateModelUserInfo();
    			    			$this->receiveUserInfo->setStdResult ( $receiveUserInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "offerPrice", $this->arrayResult )) {
    		$offerPriceResult=$arrayResult['offerPrice'];
    			    			$this->offerPrice = new AlibabaProductRateMoney();
    			    			$this->offerPrice->setStdResult ( $offerPriceResult);
    		}
    		    	    			    		    		if (array_key_exists ( "transactionAmount", $this->arrayResult )) {
    		$transactionAmountResult=$arrayResult['transactionAmount'];
    			    			$this->transactionAmount = new AlibabaProductRateMoney();
    			    			$this->transactionAmount->setStdResult ( $transactionAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "posterUserInfo", $this->arrayResult )) {
    		$posterUserInfoResult=$arrayResult['posterUserInfo'];
    			    			$this->posterUserInfo = new AlibabaProductRateRateModelUserInfo();
    			    			$this->posterUserInfo->setStdResult ( $posterUserInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "itemInfo", $this->arrayResult )) {
    		$itemInfoResult=$arrayResult['itemInfo'];
    			    			$this->itemInfo = new AlibabaProductRateRateModelItemInfo();
    			    			$this->itemInfo->setStdResult ( $itemInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "rateModelTradeInfo", $this->arrayResult )) {
    		$rateModelTradeInfoResult=$arrayResult['rateModelTradeInfo'];
    			    			$this->rateModelTradeInfo = new AlibabaProductRateRateModelTradeInfo();
    			    			$this->rateModelTradeInfo->setStdResult ( $rateModelTradeInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "scoreMoney", $this->arrayResult )) {
    		$scoreMoneyResult=$arrayResult['scoreMoney'];
    			    			$this->scoreMoney = new AlibabaProductRateMoney();
    			    			$this->scoreMoney->setStdResult ( $scoreMoneyResult);
    		}
    		    	    			    		    		if (array_key_exists ( "rateImpr", $this->arrayResult )) {
    		$rateImprResult=$arrayResult['rateImpr'];
    			    			$this->rateImpr = new AlibabaProductRateRateImprModel();
    			    			$this->rateImpr->setStdResult ( $rateImprResult);
    		}
    		    	    		}
 
   
}
?>