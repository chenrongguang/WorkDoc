<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMarketingCouponActivityModel extends SDKDomain {

       	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $couponSpreadType;
    
        /**
    * @return 优惠券的推广方式：1为买家领取，2为定向发放
    */
        public function getCouponSpreadType() {
        return $this->couponSpreadType;
    }
    
    /**
     * 设置优惠券的推广方式：1为买家领取，2为定向发放     
     * @param Integer $couponSpreadType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponSpreadType( $couponSpreadType) {
        $this->couponSpreadType = $couponSpreadType;
    }
    
        	
    private $transfer;
    
        /**
    * @return 是否允许转赠：true为允许，false为不允许
    */
        public function getTransfer() {
        return $this->transfer;
    }
    
    /**
     * 设置是否允许转赠：true为允许，false为不允许     
     * @param Boolean $transfer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTransfer( $transfer) {
        $this->transfer = $transfer;
    }
    
        	
    private $discountFee;
    
        /**
    * @return 优惠券面额，单位为分
    */
        public function getDiscountFee() {
        return $this->discountFee;
    }
    
    /**
     * 设置优惠券面额，单位为分     
     * @param Integer $discountFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
    }
    
        	
    private $onlySupportMobile;
    
        /**
    * @return 是否是手机专用：true表示领取到的优惠券只能在手机下单
    */
        public function getOnlySupportMobile() {
        return $this->onlySupportMobile;
    }
    
    /**
     * 设置是否是手机专用：true表示领取到的优惠券只能在手机下单     
     * @param Boolean $onlySupportMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOnlySupportMobile( $onlySupportMobile) {
        $this->onlySupportMobile = $onlySupportMobile;
    }
    
        	
    private $couponName;
    
        /**
    * @return 优惠券名称
    */
        public function getCouponName() {
        return $this->couponName;
    }
    
    /**
     * 设置优惠券名称     
     * @param String $couponName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponName( $couponName) {
        $this->couponName = $couponName;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $couponType;
    
        /**
    * @return 优惠券类型：0为店铺券、1为商品券、8为包邮券
    */
        public function getCouponType() {
        return $this->couponType;
    }
    
    /**
     * 设置优惠券类型：0为店铺券、1为商品券、8为包邮券     
     * @param Integer $couponType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponType( $couponType) {
        $this->couponType = $couponType;
    }
    
        	
    private $status;
    
        /**
    * @return 优惠券状态：1为正常，0为已结束，-1为已删除，2为已领完
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置优惠券状态：1为正常，0为已结束，-1为已删除，2为已领完     
     * @param Integer $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $isFreePostage;
    
        /**
    * @return 是否包邮
    */
        public function getIsFreePostage() {
        return $this->isFreePostage;
    }
    
    /**
     * 设置是否包邮     
     * @param Boolean $isFreePostage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsFreePostage( $isFreePostage) {
        $this->isFreePostage = $isFreePostage;
    }
    
        	
    private $applyPlace;
    
        /**
    * @return 优惠券展示位置：0为展示在旺铺，8为只展示在优惠券设置后台
    */
        public function getApplyPlace() {
        return $this->applyPlace;
    }
    
    /**
     * 设置优惠券展示位置：0为展示在旺铺，8为只展示在优惠券设置后台     
     * @param Integer $applyPlace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyPlace( $applyPlace) {
        $this->applyPlace = $applyPlace;
    }
    
        	
    private $couponId;
    
        /**
    * @return 券实例id
    */
        public function getCouponId() {
        return $this->couponId;
    }
    
    /**
     * 设置券实例id     
     * @param Long $couponId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponId( $couponId) {
        $this->couponId = $couponId;
    }
    
        	
    private $personLimitCount;
    
        /**
    * @return 每人限领量
    */
        public function getPersonLimitCount() {
        return $this->personLimitCount;
    }
    
    /**
     * 设置每人限领量     
     * @param Integer $personLimitCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPersonLimitCount( $personLimitCount) {
        $this->personLimitCount = $personLimitCount;
    }
    
        	
    private $endTime;
    
        /**
    * @return 优惠券结束时间
    */
        public function getEndTime() {
        return $this->endTime;
    }
    
    /**
     * 设置优惠券结束时间     
     * @param Date $endTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }
    
        	
    private $appliedCount;
    
        /**
    * @return 已领取量
    */
        public function getAppliedCount() {
        return $this->appliedCount;
    }
    
    /**
     * 设置已领取量     
     * @param Integer $appliedCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppliedCount( $appliedCount) {
        $this->appliedCount = $appliedCount;
    }
    
        	
    private $isLocked;
    
        /**
    * @return 是否被锁定，如果锁定，则不能执行编辑、结束、删除操作
    */
        public function getIsLocked() {
        return $this->isLocked;
    }
    
    /**
     * 设置是否被锁定，如果锁定，则不能执行编辑、结束、删除操作     
     * @param Boolean $isLocked     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsLocked( $isLocked) {
        $this->isLocked = $isLocked;
    }
    
        	
    private $offerIdList;
    
        /**
    * @return 商品优惠券，指定参与的商品列表
    */
        public function getOfferIdList() {
        return $this->offerIdList;
    }
    
    /**
     * 设置商品优惠券，指定参与的商品列表     
     * @param List $offerIdList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferIdList(array $offerIdList) {
        $this->offerIdList = $offerIdList;
    }
    
        	
    private $activityId;
    
        /**
    * @return 优惠券活动id
    */
        public function getActivityId() {
        return $this->activityId;
    }
    
    /**
     * 设置优惠券活动id     
     * @param Integer $activityId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setActivityId( $activityId) {
        $this->activityId = $activityId;
    }
    
        	
    private $startTime;
    
        /**
    * @return 优惠券活动的开始时间
    */
        public function getStartTime() {
        return $this->startTime;
    }
    
    /**
     * 设置优惠券活动的开始时间     
     * @param Date $startTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartTime( $startTime) {
        $this->startTime = $startTime;
    }
    
        	
    private $skinPictureIndex;
    
        /**
    * @return 优惠券预览的样式，样式的编码
    */
        public function getSkinPictureIndex() {
        return $this->skinPictureIndex;
    }
    
    /**
     * 设置优惠券预览的样式，样式的编码     
     * @param String $skinPictureIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkinPictureIndex( $skinPictureIndex) {
        $this->skinPictureIndex = $skinPictureIndex;
    }
    
        	
    private $totalCount;
    
        /**
    * @return 优惠券的发行总量
    */
        public function getTotalCount() {
        return $this->totalCount;
    }
    
    /**
     * 设置优惠券的发行总量     
     * @param Integer $totalCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }
    
        	
    private $sellerId;
    
        /**
    * @return 卖家id
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家id     
     * @param Long $sellerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $startFee;
    
        /**
    * @return 优惠券使用条件，满多少钱，单位分
    */
        public function getStartFee() {
        return $this->startFee;
    }
    
    /**
     * 设置优惠券使用条件，满多少钱，单位分     
     * @param Integer $startFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartFee( $startFee) {
        $this->startFee = $startFee;
    }
    
        	
    private $participateRange;
    
        /**
    * @return 是否全部货品参与：0为全部货品参与，1为部分货品参与
    */
        public function getParticipateRange() {
        return $this->participateRange;
    }
    
    /**
     * 设置是否全部货品参与：0为全部货品参与，1为部分货品参与     
     * @param Integer $participateRange     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParticipateRange( $participateRange) {
        $this->participateRange = $participateRange;
    }
    
        	
    private $couponSpreadId;
    
        /**
    * @return 优惠券如果是支持“买家领取”的推广方式，那么需要用该字段来构造优惠券的领取连接
    */
        public function getCouponSpreadId() {
        return $this->couponSpreadId;
    }
    
    /**
     * 设置优惠券如果是支持“买家领取”的推广方式，那么需要用该字段来构造优惠券的领取连接     
     * @param Long $couponSpreadId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponSpreadId( $couponSpreadId) {
        $this->couponSpreadId = $couponSpreadId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponSpreadType", $this->stdResult )) {
    				$this->couponSpreadType = $this->stdResult->{"couponSpreadType"};
    			}
    			    		    				    			    			if (array_key_exists ( "transfer", $this->stdResult )) {
    				$this->transfer = $this->stdResult->{"transfer"};
    			}
    			    		    				    			    			if (array_key_exists ( "discountFee", $this->stdResult )) {
    				$this->discountFee = $this->stdResult->{"discountFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "onlySupportMobile", $this->stdResult )) {
    				$this->onlySupportMobile = $this->stdResult->{"onlySupportMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponName", $this->stdResult )) {
    				$this->couponName = $this->stdResult->{"couponName"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponType", $this->stdResult )) {
    				$this->couponType = $this->stdResult->{"couponType"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "isFreePostage", $this->stdResult )) {
    				$this->isFreePostage = $this->stdResult->{"isFreePostage"};
    			}
    			    		    				    			    			if (array_key_exists ( "applyPlace", $this->stdResult )) {
    				$this->applyPlace = $this->stdResult->{"applyPlace"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponId", $this->stdResult )) {
    				$this->couponId = $this->stdResult->{"couponId"};
    			}
    			    		    				    			    			if (array_key_exists ( "personLimitCount", $this->stdResult )) {
    				$this->personLimitCount = $this->stdResult->{"personLimitCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "endTime", $this->stdResult )) {
    				$this->endTime = $this->stdResult->{"endTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "appliedCount", $this->stdResult )) {
    				$this->appliedCount = $this->stdResult->{"appliedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "isLocked", $this->stdResult )) {
    				$this->isLocked = $this->stdResult->{"isLocked"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerIdList", $this->stdResult )) {
    				$this->offerIdList = $this->stdResult->{"offerIdList"};
    			}
    			    		    				    			    			if (array_key_exists ( "activityId", $this->stdResult )) {
    				$this->activityId = $this->stdResult->{"activityId"};
    			}
    			    		    				    			    			if (array_key_exists ( "startTime", $this->stdResult )) {
    				$this->startTime = $this->stdResult->{"startTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "skinPictureIndex", $this->stdResult )) {
    				$this->skinPictureIndex = $this->stdResult->{"skinPictureIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "startFee", $this->stdResult )) {
    				$this->startFee = $this->stdResult->{"startFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "participateRange", $this->stdResult )) {
    				$this->participateRange = $this->stdResult->{"participateRange"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponSpreadId", $this->stdResult )) {
    				$this->couponSpreadId = $this->stdResult->{"couponSpreadId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponSpreadType", $this->arrayResult )) {
    			$this->couponSpreadType = $arrayResult['couponSpreadType'];
    			}
    		    	    			    		    			if (array_key_exists ( "transfer", $this->arrayResult )) {
    			$this->transfer = $arrayResult['transfer'];
    			}
    		    	    			    		    			if (array_key_exists ( "discountFee", $this->arrayResult )) {
    			$this->discountFee = $arrayResult['discountFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "onlySupportMobile", $this->arrayResult )) {
    			$this->onlySupportMobile = $arrayResult['onlySupportMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponName", $this->arrayResult )) {
    			$this->couponName = $arrayResult['couponName'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponType", $this->arrayResult )) {
    			$this->couponType = $arrayResult['couponType'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "isFreePostage", $this->arrayResult )) {
    			$this->isFreePostage = $arrayResult['isFreePostage'];
    			}
    		    	    			    		    			if (array_key_exists ( "applyPlace", $this->arrayResult )) {
    			$this->applyPlace = $arrayResult['applyPlace'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponId", $this->arrayResult )) {
    			$this->couponId = $arrayResult['couponId'];
    			}
    		    	    			    		    			if (array_key_exists ( "personLimitCount", $this->arrayResult )) {
    			$this->personLimitCount = $arrayResult['personLimitCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "endTime", $this->arrayResult )) {
    			$this->endTime = $arrayResult['endTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "appliedCount", $this->arrayResult )) {
    			$this->appliedCount = $arrayResult['appliedCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "isLocked", $this->arrayResult )) {
    			$this->isLocked = $arrayResult['isLocked'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerIdList", $this->arrayResult )) {
    			$this->offerIdList = $arrayResult['offerIdList'];
    			}
    		    	    			    		    			if (array_key_exists ( "activityId", $this->arrayResult )) {
    			$this->activityId = $arrayResult['activityId'];
    			}
    		    	    			    		    			if (array_key_exists ( "startTime", $this->arrayResult )) {
    			$this->startTime = $arrayResult['startTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "skinPictureIndex", $this->arrayResult )) {
    			$this->skinPictureIndex = $arrayResult['skinPictureIndex'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['totalCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['sellerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "startFee", $this->arrayResult )) {
    			$this->startFee = $arrayResult['startFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "participateRange", $this->arrayResult )) {
    			$this->participateRange = $arrayResult['participateRange'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponSpreadId", $this->arrayResult )) {
    			$this->couponSpreadId = $arrayResult['couponSpreadId'];
    			}
    		    	    		}
 
   
}
?>