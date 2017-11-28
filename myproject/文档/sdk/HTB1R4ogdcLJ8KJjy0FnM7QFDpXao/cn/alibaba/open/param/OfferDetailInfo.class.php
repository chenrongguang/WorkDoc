<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OfferImageInfo.class.php');
include_once ('cn/alibaba/open/param/ProductFeatureInfo.class.php');
include_once ('cn/alibaba/open/param/PriceRangeInfo.class.php');

class OfferDetailInfo extends SDKDomain {

       	
    private $skuPics;
    
        /**
    * @return 
    */
        public function getSkuPics() {
        return $this->skuPics;
    }
    
    /**
     * 设置     
     * @param List $skuPics     
     * 参数示例：<pre>{"skuPics":{"3216":[{"深卡其布色":"img/ibank/2013/303/893/863398303_1519036234.jpg"},{"黑色":"img/ibank/2013/203/893/863398302_1519036234.jpg"}]}}</pre>     
     * 此参数必填     */
    public function setSkuPics(array $skuPics) {
        $this->skuPics = $skuPics;
    }
    
        	
    private $isPrivateOffer;
    
        /**
    * @return 是否有私密信息
    */
        public function getIsPrivateOffer() {
        return $this->isPrivateOffer;
    }
    
    /**
     * 设置是否有私密信息     
     * @param Boolean $isPrivateOffer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsPrivateOffer( $isPrivateOffer) {
        $this->isPrivateOffer = $isPrivateOffer;
    }
    
        	
    private $isPriceAuthOffer;
    
        /**
    * @return 是否价格私密
    */
        public function getIsPriceAuthOffer() {
        return $this->isPriceAuthOffer;
    }
    
    /**
     * 设置是否价格私密     
     * @param Boolean $isPriceAuthOffer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsPriceAuthOffer( $isPriceAuthOffer) {
        $this->isPriceAuthOffer = $isPriceAuthOffer;
    }
    
        	
    private $isPicAuthOffer;
    
        /**
    * @return 是否图片私密
    */
        public function getIsPicAuthOffer() {
        return $this->isPicAuthOffer;
    }
    
    /**
     * 设置是否图片私密     
     * @param Boolean $isPicAuthOffer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsPicAuthOffer( $isPicAuthOffer) {
        $this->isPicAuthOffer = $isPicAuthOffer;
    }
    
        	
    private $offerId;
    
        /**
    * @return 商品ID
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置商品ID     
     * @param Long $offerId     
     * 参数示例：<pre>708192222</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $isPrivate;
    
        /**
    * @return 是否为私密offer的标志位。true：私密产品 false：普通产品
    */
        public function getIsPrivate() {
        return $this->isPrivate;
    }
    
    /**
     * 设置是否为私密offer的标志位。true：私密产品 false：普通产品     
     * @param Boolean $isPrivate     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsPrivate( $isPrivate) {
        $this->isPrivate = $isPrivate;
    }
    
        	
    private $detailsUrl;
    
        /**
    * @return 商品详情地址
    */
        public function getDetailsUrl() {
        return $this->detailsUrl;
    }
    
    /**
     * 设置商品详情地址     
     * @param String $detailsUrl     
     * 参数示例：<pre>http://detail.china.alibaba.com/buyer/offerdetail/708192222.html</pre>     
     * 此参数必填     */
    public function setDetailsUrl( $detailsUrl) {
        $this->detailsUrl = $detailsUrl;
    }
    
        	
    private $type;
    
        /**
    * @return 商品类型。Sale：供应信息，Buy：求购信息
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置商品类型。Sale：供应信息，Buy：求购信息     
     * @param String $type     
     * 参数示例：<pre>Sale</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 贸易类型。1：产品，2：加工，3：代理，4：合作，5：商务服务
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置贸易类型。1：产品，2：加工，3：代理，4：合作，5：商务服务     
     * @param Integer $tradeType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $postCategryId;
    
        /**
    * @return 所属叶子类目ID
    */
        public function getPostCategryId() {
        return $this->postCategryId;
    }
    
    /**
     * 设置所属叶子类目ID     
     * @param Integer $postCategryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostCategryId( $postCategryId) {
        $this->postCategryId = $postCategryId;
    }
    
        	
    private $offerStatus;
    
        /**
    * @return 状态。auditing：审核中；online：已上网；FailAudited：审核未通过；outdated：已过期；member delete(d)：用户删除；delete：审核删除
    */
        public function getOfferStatus() {
        return $this->offerStatus;
    }
    
    /**
     * 设置状态。auditing：审核中；online：已上网；FailAudited：审核未通过；outdated：已过期；member delete(d)：用户删除；delete：审核删除     
     * @param String $offerStatus     
     * 参数示例：<pre>auditing</pre>     
     * 此参数必填     */
    public function setOfferStatus( $offerStatus) {
        $this->offerStatus = $offerStatus;
    }
    
        	
    private $memberId;
    
        /**
    * @return 卖家会员ID
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置卖家会员ID     
     * @param String $memberId     
     * 参数示例：<pre>tigerchencn</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $subject;
    
        /**
    * @return 商品标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置商品标题     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $details;
    
        /**
    * @return 详情说明
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置详情说明     
     * @param String $details     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetails( $details) {
        $this->details = $details;
    }
    
        	
    private $qualityLevel;
    
        /**
    * @return 商品信息质量星级( 取值为1到5)。1：一星；2：二星；3：三星；4：四星；5：五星
    */
        public function getQualityLevel() {
        return $this->qualityLevel;
    }
    
    /**
     * 设置商品信息质量星级( 取值为1到5)。1：一星；2：二星；3：三星；4：四星；5：五星     
     * @param String $qualityLevel     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQualityLevel( $qualityLevel) {
        $this->qualityLevel = $qualityLevel;
    }
    
        	
    private $imageList;
    
        /**
    * @return 商品图片列表
    */
        public function getImageList() {
        return $this->imageList;
    }
    
    /**
     * 设置商品图片列表     
     * @param array include @see OfferImageInfo[] $imageList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageList(OfferImageInfo $imageList) {
        $this->imageList = $imageList;
    }
    
        	
    private $productFeatureList;
    
        /**
    * @return 商品属性信息
    */
        public function getProductFeatureList() {
        return $this->productFeatureList;
    }
    
    /**
     * 设置商品属性信息     
     * @param array include @see ProductFeatureInfo[] $productFeatureList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductFeatureList(ProductFeatureInfo $productFeatureList) {
        $this->productFeatureList = $productFeatureList;
    }
    
        	
    private $isOfferSupportOnlineTrade;
    
        /**
    * @return 是否支持网上交易。首先需要类目支持，如果类目支持，需要有价格，供货总量，最小起订量。true：支持网上订购；false：不支持网上订购
    */
        public function getIsOfferSupportOnlineTrade() {
        return $this->isOfferSupportOnlineTrade;
    }
    
    /**
     * 设置是否支持网上交易。首先需要类目支持，如果类目支持，需要有价格，供货总量，最小起订量。true：支持网上订购；false：不支持网上订购     
     * @param Boolean $isOfferSupportOnlineTrade     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsOfferSupportOnlineTrade( $isOfferSupportOnlineTrade) {
        $this->isOfferSupportOnlineTrade = $isOfferSupportOnlineTrade;
    }
    
        	
    private $tradingType;
    
        /**
    * @return 支持的交易方式。当isOfferSupportOnlineTrade为true的时候本字段有效：Escrow:支付宝担保交易； PreCharge：支付宝预存款交易；ForexPay：支付宝境外支付交易；多种交易方式间通过;分隔。
    */
        public function getTradingType() {
        return $this->tradingType;
    }
    
    /**
     * 设置支持的交易方式。当isOfferSupportOnlineTrade为true的时候本字段有效：Escrow:支付宝担保交易； PreCharge：支付宝预存款交易；ForexPay：支付宝境外支付交易；多种交易方式间通过;分隔。     
     * @param String $tradingType     
     * 参数示例：<pre>Escrow</pre>     
     * 此参数必填     */
    public function setTradingType( $tradingType) {
        $this->tradingType = $tradingType;
    }
    
        	
    private $isSupportMix;
    
        /**
    * @return 是否支持混批。true：支持混批；false：不支持混批
    */
        public function getIsSupportMix() {
        return $this->isSupportMix;
    }
    
    /**
     * 设置是否支持混批。true：支持混批；false：不支持混批     
     * @param Boolean $isSupportMix     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSupportMix( $isSupportMix) {
        $this->isSupportMix = $isSupportMix;
    }
    
        	
    private $unit;
    
        /**
    * @return 计量单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置计量单位     
     * @param String $unit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $priceUnit;
    
        /**
    * @return 交易币种
    */
        public function getPriceUnit() {
        return $this->priceUnit;
    }
    
    /**
     * 设置交易币种     
     * @param String $priceUnit     
     * 参数示例：<pre>元</pre>     
     * 此参数必填     */
    public function setPriceUnit( $priceUnit) {
        $this->priceUnit = $priceUnit;
    }
    
        	
    private $amount;
    
        /**
    * @return 供货量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置供货量     
     * @param Integer $amount     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $amountOnSale;
    
        /**
    * @return 可售数量
    */
        public function getAmountOnSale() {
        return $this->amountOnSale;
    }
    
    /**
     * 设置可售数量     
     * @param Integer $amountOnSale     
     * 参数示例：<pre>188</pre>     
     * 此参数必填     */
    public function setAmountOnSale( $amountOnSale) {
        $this->amountOnSale = $amountOnSale;
    }
    
        	
    private $saledCount;
    
        /**
    * @return 已销售量
    */
        public function getSaledCount() {
        return $this->saledCount;
    }
    
    /**
     * 设置已销售量     
     * @param Integer $saledCount     
     * 参数示例：<pre>188</pre>     
     * 此参数必填     */
    public function setSaledCount( $saledCount) {
        $this->saledCount = $saledCount;
    }
    
        	
    private $retailPrice;
    
        /**
    * @return 建议零售价
    */
        public function getRetailPrice() {
        return $this->retailPrice;
    }
    
    /**
     * 设置建议零售价     
     * @param Double $retailPrice     
     * 参数示例：<pre>150.00</pre>     
     * 此参数必填     */
    public function setRetailPrice( $retailPrice) {
        $this->retailPrice = $retailPrice;
    }
    
        	
    private $unitPrice;
    
        /**
    * @return 单价
    */
        public function getUnitPrice() {
        return $this->unitPrice;
    }
    
    /**
     * 设置单价     
     * @param Double $unitPrice     
     * 参数示例：<pre>90.00</pre>     
     * 此参数必填     */
    public function setUnitPrice( $unitPrice) {
        $this->unitPrice = $unitPrice;
    }
    
        	
    private $priceRanges;
    
        /**
    * @return 价格区间
    */
        public function getPriceRanges() {
        return $this->priceRanges;
    }
    
    /**
     * 设置价格区间     
     * @param array include @see PriceRangeInfo[] $priceRanges     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPriceRanges(PriceRangeInfo $priceRanges) {
        $this->priceRanges = $priceRanges;
    }
    
        	
    private $termOfferProcess;
    
        /**
    * @return 有效期(单位：天)
    */
        public function getTermOfferProcess() {
        return $this->termOfferProcess;
    }
    
    /**
     * 设置有效期(单位：天)     
     * @param Integer $termOfferProcess     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setTermOfferProcess( $termOfferProcess) {
        $this->termOfferProcess = $termOfferProcess;
    }
    
        	
    private $freightTemplateId;
    
        /**
    * @return 物流模板id
    */
        public function getFreightTemplateId() {
        return $this->freightTemplateId;
    }
    
    /**
     * 设置物流模板id     
     * @param Integer $freightTemplateId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFreightTemplateId( $freightTemplateId) {
        $this->freightTemplateId = $freightTemplateId;
    }
    
        	
    private $sendGoodsId;
    
        /**
    * @return 发货地址id
    */
        public function getSendGoodsId() {
        return $this->sendGoodsId;
    }
    
    /**
     * 设置发货地址id     
     * @param Integer $sendGoodsId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSendGoodsId( $sendGoodsId) {
        $this->sendGoodsId = $sendGoodsId;
    }
    
        	
    private $productUnitWeight;
    
        /**
    * @return 单位重量
    */
        public function getProductUnitWeight() {
        return $this->productUnitWeight;
    }
    
    /**
     * 设置单位重量     
     * @param Integer $productUnitWeight     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setProductUnitWeight( $productUnitWeight) {
        $this->productUnitWeight = $productUnitWeight;
    }
    
        	
    private $freightType;
    
        /**
    * @return T:运费模板
D：运费说明
F：卖家承担运费
    */
        public function getFreightType() {
        return $this->freightType;
    }
    
    /**
     * 设置T:运费模板
D：运费说明
F：卖家承担运费     
     * @param Integer $freightType     
     * 参数示例：<pre>T</pre>     
     * 此参数必填     */
    public function setFreightType( $freightType) {
        $this->freightType = $freightType;
    }
    
        	
    private $isSkuOffer;
    
        /**
    * @return 是否为SKU商品
    */
        public function getIsSkuOffer() {
        return $this->isSkuOffer;
    }
    
    /**
     * 设置是否为SKU商品     
     * @param Boolean $isSkuOffer     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsSkuOffer( $isSkuOffer) {
        $this->isSkuOffer = $isSkuOffer;
    }
    
        	
    private $isSkuTradeSupported;
    
        /**
    * @return 是否支持按照规格报价
    */
        public function getIsSkuTradeSupported() {
        return $this->isSkuTradeSupported;
    }
    
    /**
     * 设置是否支持按照规格报价     
     * @param Boolean $isSkuTradeSupported     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsSkuTradeSupported( $isSkuTradeSupported) {
        $this->isSkuTradeSupported = $isSkuTradeSupported;
    }
    
        	
    private $skuArray;
    
        /**
    * @return SKU规格属性信息{fid:value}当有多个值时用"#"联接
    */
        public function getSkuArray() {
        return $this->skuArray;
    }
    
    /**
     * 设置SKU规格属性信息{fid:value}当有多个值时用"#"联接     
     * @param Map $skuArray     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuArray(array $skuArray) {
        $this->skuArray = $skuArray;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建日期
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建日期     
     * @param String $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 最近修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置最近修改时间     
     * @param String $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $gmtLastRepost;
    
        /**
    * @return 最近重发时间
    */
        public function getGmtLastRepost() {
        return $this->gmtLastRepost;
    }
    
    /**
     * 设置最近重发时间     
     * @param String $gmtLastRepost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtLastRepost( $gmtLastRepost) {
        $this->gmtLastRepost = $gmtLastRepost;
    }
    
        	
    private $gmtApproved;
    
        /**
    * @return 审核通过时间
    */
        public function getGmtApproved() {
        return $this->gmtApproved;
    }
    
    /**
     * 设置审核通过时间     
     * @param String $gmtApproved     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtApproved( $gmtApproved) {
        $this->gmtApproved = $gmtApproved;
    }
    
        	
    private $gmtExpire;
    
        /**
    * @return 过期日期
    */
        public function getGmtExpire() {
        return $this->gmtExpire;
    }
    
    /**
     * 设置过期日期     
     * @param String $gmtExpire     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtExpire( $gmtExpire) {
        $this->gmtExpire = $gmtExpire;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuPics", $this->stdResult )) {
    				$this->skuPics = $this->stdResult->{"skuPics"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPrivateOffer", $this->stdResult )) {
    				$this->isPrivateOffer = $this->stdResult->{"isPrivateOffer"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPriceAuthOffer", $this->stdResult )) {
    				$this->isPriceAuthOffer = $this->stdResult->{"isPriceAuthOffer"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPicAuthOffer", $this->stdResult )) {
    				$this->isPicAuthOffer = $this->stdResult->{"isPicAuthOffer"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPrivate", $this->stdResult )) {
    				$this->isPrivate = $this->stdResult->{"isPrivate"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailsUrl", $this->stdResult )) {
    				$this->detailsUrl = $this->stdResult->{"detailsUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "postCategryId", $this->stdResult )) {
    				$this->postCategryId = $this->stdResult->{"postCategryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerStatus", $this->stdResult )) {
    				$this->offerStatus = $this->stdResult->{"offerStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    				$this->details = $this->stdResult->{"details"};
    			}
    			    		    				    			    			if (array_key_exists ( "qualityLevel", $this->stdResult )) {
    				$this->qualityLevel = $this->stdResult->{"qualityLevel"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageList", $this->stdResult )) {
    			$imageListResult=$this->stdResult->{"imageList"};
    				$object = json_decode ( json_encode ( $imageListResult ), true );
					$this->imageList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OfferImageInfoResult=new OfferImageInfo();
						$OfferImageInfoResult->setArrayResult($arrayobject );
						$this->imageList [$i] = $OfferImageInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "productFeatureList", $this->stdResult )) {
    			$productFeatureListResult=$this->stdResult->{"productFeatureList"};
    				$object = json_decode ( json_encode ( $productFeatureListResult ), true );
					$this->productFeatureList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ProductFeatureInfoResult=new ProductFeatureInfo();
						$ProductFeatureInfoResult->setArrayResult($arrayobject );
						$this->productFeatureList [$i] = $ProductFeatureInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "isOfferSupportOnlineTrade", $this->stdResult )) {
    				$this->isOfferSupportOnlineTrade = $this->stdResult->{"isOfferSupportOnlineTrade"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradingType", $this->stdResult )) {
    				$this->tradingType = $this->stdResult->{"tradingType"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSupportMix", $this->stdResult )) {
    				$this->isSupportMix = $this->stdResult->{"isSupportMix"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "priceUnit", $this->stdResult )) {
    				$this->priceUnit = $this->stdResult->{"priceUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "amountOnSale", $this->stdResult )) {
    				$this->amountOnSale = $this->stdResult->{"amountOnSale"};
    			}
    			    		    				    			    			if (array_key_exists ( "saledCount", $this->stdResult )) {
    				$this->saledCount = $this->stdResult->{"saledCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "retailPrice", $this->stdResult )) {
    				$this->retailPrice = $this->stdResult->{"retailPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "unitPrice", $this->stdResult )) {
    				$this->unitPrice = $this->stdResult->{"unitPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "priceRanges", $this->stdResult )) {
    			$priceRangesResult=$this->stdResult->{"priceRanges"};
    				$object = json_decode ( json_encode ( $priceRangesResult ), true );
					$this->priceRanges = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$PriceRangeInfoResult=new PriceRangeInfo();
						$PriceRangeInfoResult->setArrayResult($arrayobject );
						$this->priceRanges [$i] = $PriceRangeInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "termOfferProcess", $this->stdResult )) {
    				$this->termOfferProcess = $this->stdResult->{"termOfferProcess"};
    			}
    			    		    				    			    			if (array_key_exists ( "freightTemplateId", $this->stdResult )) {
    				$this->freightTemplateId = $this->stdResult->{"freightTemplateId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sendGoodsId", $this->stdResult )) {
    				$this->sendGoodsId = $this->stdResult->{"sendGoodsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUnitWeight", $this->stdResult )) {
    				$this->productUnitWeight = $this->stdResult->{"productUnitWeight"};
    			}
    			    		    				    			    			if (array_key_exists ( "freightType", $this->stdResult )) {
    				$this->freightType = $this->stdResult->{"freightType"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSkuOffer", $this->stdResult )) {
    				$this->isSkuOffer = $this->stdResult->{"isSkuOffer"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSkuTradeSupported", $this->stdResult )) {
    				$this->isSkuTradeSupported = $this->stdResult->{"isSkuTradeSupported"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuArray", $this->stdResult )) {
    				$this->skuArray = $this->stdResult->{"skuArray"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtLastRepost", $this->stdResult )) {
    				$this->gmtLastRepost = $this->stdResult->{"gmtLastRepost"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtApproved", $this->stdResult )) {
    				$this->gmtApproved = $this->stdResult->{"gmtApproved"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtExpire", $this->stdResult )) {
    				$this->gmtExpire = $this->stdResult->{"gmtExpire"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuPics", $this->arrayResult )) {
    			$this->skuPics = $arrayResult['skuPics'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPrivateOffer", $this->arrayResult )) {
    			$this->isPrivateOffer = $arrayResult['isPrivateOffer'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPriceAuthOffer", $this->arrayResult )) {
    			$this->isPriceAuthOffer = $arrayResult['isPriceAuthOffer'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPicAuthOffer", $this->arrayResult )) {
    			$this->isPicAuthOffer = $arrayResult['isPicAuthOffer'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPrivate", $this->arrayResult )) {
    			$this->isPrivate = $arrayResult['isPrivate'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailsUrl", $this->arrayResult )) {
    			$this->detailsUrl = $arrayResult['detailsUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['tradeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "postCategryId", $this->arrayResult )) {
    			$this->postCategryId = $arrayResult['postCategryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerStatus", $this->arrayResult )) {
    			$this->offerStatus = $arrayResult['offerStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "details", $this->arrayResult )) {
    			$this->details = $arrayResult['details'];
    			}
    		    	    			    		    			if (array_key_exists ( "qualityLevel", $this->arrayResult )) {
    			$this->qualityLevel = $arrayResult['qualityLevel'];
    			}
    		    	    			    		    		if (array_key_exists ( "imageList", $this->arrayResult )) {
    		$imageListResult=$arrayResult['imageList'];
    			$this->imageList = new OfferImageInfo();
    			$this->imageList->setStdResult ( $imageListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productFeatureList", $this->arrayResult )) {
    		$productFeatureListResult=$arrayResult['productFeatureList'];
    			$this->productFeatureList = new ProductFeatureInfo();
    			$this->productFeatureList->setStdResult ( $productFeatureListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "isOfferSupportOnlineTrade", $this->arrayResult )) {
    			$this->isOfferSupportOnlineTrade = $arrayResult['isOfferSupportOnlineTrade'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradingType", $this->arrayResult )) {
    			$this->tradingType = $arrayResult['tradingType'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSupportMix", $this->arrayResult )) {
    			$this->isSupportMix = $arrayResult['isSupportMix'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "priceUnit", $this->arrayResult )) {
    			$this->priceUnit = $arrayResult['priceUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "amountOnSale", $this->arrayResult )) {
    			$this->amountOnSale = $arrayResult['amountOnSale'];
    			}
    		    	    			    		    			if (array_key_exists ( "saledCount", $this->arrayResult )) {
    			$this->saledCount = $arrayResult['saledCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "retailPrice", $this->arrayResult )) {
    			$this->retailPrice = $arrayResult['retailPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "unitPrice", $this->arrayResult )) {
    			$this->unitPrice = $arrayResult['unitPrice'];
    			}
    		    	    			    		    		if (array_key_exists ( "priceRanges", $this->arrayResult )) {
    		$priceRangesResult=$arrayResult['priceRanges'];
    			$this->priceRanges = new PriceRangeInfo();
    			$this->priceRanges->setStdResult ( $priceRangesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "termOfferProcess", $this->arrayResult )) {
    			$this->termOfferProcess = $arrayResult['termOfferProcess'];
    			}
    		    	    			    		    			if (array_key_exists ( "freightTemplateId", $this->arrayResult )) {
    			$this->freightTemplateId = $arrayResult['freightTemplateId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sendGoodsId", $this->arrayResult )) {
    			$this->sendGoodsId = $arrayResult['sendGoodsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUnitWeight", $this->arrayResult )) {
    			$this->productUnitWeight = $arrayResult['productUnitWeight'];
    			}
    		    	    			    		    			if (array_key_exists ( "freightType", $this->arrayResult )) {
    			$this->freightType = $arrayResult['freightType'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSkuOffer", $this->arrayResult )) {
    			$this->isSkuOffer = $arrayResult['isSkuOffer'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSkuTradeSupported", $this->arrayResult )) {
    			$this->isSkuTradeSupported = $arrayResult['isSkuTradeSupported'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuArray", $this->arrayResult )) {
    			$this->skuArray = $arrayResult['skuArray'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtLastRepost", $this->arrayResult )) {
    			$this->gmtLastRepost = $arrayResult['gmtLastRepost'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtApproved", $this->arrayResult )) {
    			$this->gmtApproved = $arrayResult['gmtApproved'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtExpire", $this->arrayResult )) {
    			$this->gmtExpire = $arrayResult['gmtExpire'];
    			}
    		    	    		}
 
   
}
?>