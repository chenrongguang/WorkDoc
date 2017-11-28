<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiProductModelSku.class.php');

class ComAlibabaCaigouApiQuoteModelProductQuote extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 产品报价Id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置产品报价Id     
     * @param Long $id     
     * 参数示例：<pre>234234</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 产品报价创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置产品报价创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>1461655397000</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $supplierMemberId;
    
        /**
    * @return 供应商memberId
    */
        public function getSupplierMemberId() {
        return $this->supplierMemberId;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $supplierMemberId     
     * 参数示例：<pre>b2b-39857844mdfd</pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->supplierMemberId = $supplierMemberId;
    }
    
        	
    private $subject;
    
        /**
    * @return 报价标题，offer名称
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置报价标题，offer名称     
     * @param String $subject     
     * 参数示例：<pre>铅笔盒报价</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $offerId;
    
        /**
    * @return 产品报价关联的offerId
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置产品报价关联的offerId     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $productId;
    
        /**
    * @return 产品报价对于的产品id
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置产品报价对于的产品id     
     * @param Long $productId     
     * 参数示例：<pre>34545</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $images;
    
        /**
    * @return 产品报价图片列表
    */
        public function getImages() {
        return $this->images;
    }
    
    /**
     * 设置产品报价图片列表     
     * @param List $images     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImages(array $images) {
        $this->images = $images;
    }
    
        	
    private $provinceCode;
    
        /**
    * @return 发货地省份编码
    */
        public function getProvinceCode() {
        return $this->provinceCode;
    }
    
    /**
     * 设置发货地省份编码     
     * @param String $provinceCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvinceCode( $provinceCode) {
        $this->provinceCode = $provinceCode;
    }
    
        	
    private $cityCode;
    
        /**
    * @return 发货地城市编码
    */
        public function getCityCode() {
        return $this->cityCode;
    }
    
    /**
     * 设置发货地城市编码     
     * @param String $cityCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCityCode( $cityCode) {
        $this->cityCode = $cityCode;
    }
    
        	
    private $deliveryTime;
    
        /**
    * @return 发货时限，对应值如下：_1_days,_3_days,_7_days,_14_days,_30_days,_90_days
    */
        public function getDeliveryTime() {
        return $this->deliveryTime;
    }
    
    /**
     * 设置发货时限，对应值如下：_1_days,_3_days,_7_days,_14_days,_30_days,_90_days     
     * @param String $deliveryTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDeliveryTime( $deliveryTime) {
        $this->deliveryTime = $deliveryTime;
    }
    
        	
    private $unitAmount;
    
        /**
    * @return 计量单位数量
    */
        public function getUnitAmount() {
        return $this->unitAmount;
    }
    
    /**
     * 设置计量单位数量     
     * @param Long $unitAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnitAmount( $unitAmount) {
        $this->unitAmount = $unitAmount;
    }
    
        	
    private $weight;
    
        /**
    * @return 单位净重，单位为'克'，每一个unit重量
    */
        public function getWeight() {
        return $this->weight;
    }
    
    /**
     * 设置单位净重，单位为'克'，每一个unit重量     
     * @param Long $weight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWeight( $weight) {
        $this->weight = $weight;
    }
    
        	
    private $volume;
    
        /**
    * @return 单位体积，单位为'立方厘米'，每一个unit体积单位体积，单位为'立方厘米'，每一个unit体积
    */
        public function getVolume() {
        return $this->volume;
    }
    
    /**
     * 设置单位体积，单位为'立方厘米'，每一个unit体积单位体积，单位为'立方厘米'，每一个unit体积     
     * @param Long $volume     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVolume( $volume) {
        $this->volume = $volume;
    }
    
        	
    private $supportRefundServe;
    
        /**
    * @return 支持退货服务：support_7_days_refund（支持7天退货），not_support_7_days_refund（不支持7天退货）
    */
        public function getSupportRefundServe() {
        return $this->supportRefundServe;
    }
    
    /**
     * 设置支持退货服务：support_7_days_refund（支持7天退货），not_support_7_days_refund（不支持7天退货）     
     * @param String $supportRefundServe     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupportRefundServe( $supportRefundServe) {
        $this->supportRefundServe = $supportRefundServe;
    }
    
        	
    private $address;
    
        /**
    * @return 发货详细地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置发货详细地址     
     * @param String $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $areaCode;
    
        /**
    * @return 发货地城市区编码
    */
        public function getAreaCode() {
        return $this->areaCode;
    }
    
    /**
     * 设置发货地城市区编码     
     * @param String $areaCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAreaCode( $areaCode) {
        $this->areaCode = $areaCode;
    }
    
        	
    private $skus;
    
        /**
    * @return 可能为空，如无SKU则从上级取价格等信息
    */
        public function getSkus() {
        return $this->skus;
    }
    
    /**
     * 设置可能为空，如无SKU则从上级取价格等信息     
     * @param array include @see ComAlibabaCaigouApiProductModelSku[] $skus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkus(ComAlibabaCaigouApiProductModelSku $skus) {
        $this->skus = $skus;
    }
    
        	
    private $price;
    
        /**
    * @return 价格
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置价格     
     * @param Long $price     
     * 参数示例：<pre>10000</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $taxRate;
    
        /**
    * @return 税率，如值为17则代表税率为17%
    */
        public function getTaxRate() {
        return $this->taxRate;
    }
    
    /**
     * 设置税率，如值为17则代表税率为17%     
     * @param Integer $taxRate     
     * 参数示例：<pre>17</pre>     
     * 此参数必填     */
    public function setTaxRate( $taxRate) {
        $this->taxRate = $taxRate;
    }
    
        	
    private $amount;
    
        /**
    * @return 商品可售数量，库存
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置商品可售数量，库存     
     * @param Long $amount     
     * 参数示例：<pre>10000</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $gmtStartDate;
    
        /**
    * @return 产品报价有效期开始时间
    */
        public function getGmtStartDate() {
        return $this->gmtStartDate;
    }
    
    /**
     * 设置产品报价有效期开始时间     
     * @param Date $gmtStartDate     
     * 参数示例：<pre>1461655397000</pre>     
     * 此参数必填     */
    public function setGmtStartDate( $gmtStartDate) {
        $this->gmtStartDate = $gmtStartDate;
    }
    
        	
    private $gmtExpireDate;
    
        /**
    * @return 产品报价有效期结束时间
    */
        public function getGmtExpireDate() {
        return $this->gmtExpireDate;
    }
    
    /**
     * 设置产品报价有效期结束时间     
     * @param Date $gmtExpireDate     
     * 参数示例：<pre>1464710399000</pre>     
     * 此参数必填     */
    public function setGmtExpireDate( $gmtExpireDate) {
        $this->gmtExpireDate = $gmtExpireDate;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMemberId", $this->stdResult )) {
    				$this->supplierMemberId = $this->stdResult->{"supplierMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "images", $this->stdResult )) {
    				$this->images = $this->stdResult->{"images"};
    			}
    			    		    				    			    			if (array_key_exists ( "provinceCode", $this->stdResult )) {
    				$this->provinceCode = $this->stdResult->{"provinceCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "cityCode", $this->stdResult )) {
    				$this->cityCode = $this->stdResult->{"cityCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "deliveryTime", $this->stdResult )) {
    				$this->deliveryTime = $this->stdResult->{"deliveryTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "unitAmount", $this->stdResult )) {
    				$this->unitAmount = $this->stdResult->{"unitAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "weight", $this->stdResult )) {
    				$this->weight = $this->stdResult->{"weight"};
    			}
    			    		    				    			    			if (array_key_exists ( "volume", $this->stdResult )) {
    				$this->volume = $this->stdResult->{"volume"};
    			}
    			    		    				    			    			if (array_key_exists ( "supportRefundServe", $this->stdResult )) {
    				$this->supportRefundServe = $this->stdResult->{"supportRefundServe"};
    			}
    			    		    				    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "areaCode", $this->stdResult )) {
    				$this->areaCode = $this->stdResult->{"areaCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "skus", $this->stdResult )) {
    			$skusResult=$this->stdResult->{"skus"};
    				$object = json_decode ( json_encode ( $skusResult ), true );
					$this->skus = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiProductModelSkuResult=new ComAlibabaCaigouApiProductModelSku();
						$ComAlibabaCaigouApiProductModelSkuResult->setArrayResult($arrayobject );
						$this->skus [$i] = $ComAlibabaCaigouApiProductModelSkuResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxRate", $this->stdResult )) {
    				$this->taxRate = $this->stdResult->{"taxRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtStartDate", $this->stdResult )) {
    				$this->gmtStartDate = $this->stdResult->{"gmtStartDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtExpireDate", $this->stdResult )) {
    				$this->gmtExpireDate = $this->stdResult->{"gmtExpireDate"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierMemberId", $this->arrayResult )) {
    			$this->supplierMemberId = $arrayResult['supplierMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "images", $this->arrayResult )) {
    			$this->images = $arrayResult['images'];
    			}
    		    	    			    		    			if (array_key_exists ( "provinceCode", $this->arrayResult )) {
    			$this->provinceCode = $arrayResult['provinceCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "cityCode", $this->arrayResult )) {
    			$this->cityCode = $arrayResult['cityCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "deliveryTime", $this->arrayResult )) {
    			$this->deliveryTime = $arrayResult['deliveryTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "unitAmount", $this->arrayResult )) {
    			$this->unitAmount = $arrayResult['unitAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "weight", $this->arrayResult )) {
    			$this->weight = $arrayResult['weight'];
    			}
    		    	    			    		    			if (array_key_exists ( "volume", $this->arrayResult )) {
    			$this->volume = $arrayResult['volume'];
    			}
    		    	    			    		    			if (array_key_exists ( "supportRefundServe", $this->arrayResult )) {
    			$this->supportRefundServe = $arrayResult['supportRefundServe'];
    			}
    		    	    			    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['address'];
    			}
    		    	    			    		    			if (array_key_exists ( "areaCode", $this->arrayResult )) {
    			$this->areaCode = $arrayResult['areaCode'];
    			}
    		    	    			    		    		if (array_key_exists ( "skus", $this->arrayResult )) {
    		$skusResult=$arrayResult['skus'];
    			$this->skus = new ComAlibabaCaigouApiProductModelSku();
    			$this->skus->setStdResult ( $skusResult);
    		}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxRate", $this->arrayResult )) {
    			$this->taxRate = $arrayResult['taxRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtStartDate", $this->arrayResult )) {
    			$this->gmtStartDate = $arrayResult['gmtStartDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtExpireDate", $this->arrayResult )) {
    			$this->gmtExpireDate = $arrayResult['gmtExpireDate'];
    			}
    		    	    		}
 
   
}
?>