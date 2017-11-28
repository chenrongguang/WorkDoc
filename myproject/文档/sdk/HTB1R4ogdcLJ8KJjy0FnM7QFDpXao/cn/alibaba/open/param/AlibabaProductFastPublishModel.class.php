<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaOfferPriceranges.class.php');
include_once ('cn/alibaba/open/param/AlibabaOfferFastPublishsku.class.php');
include_once ('cn/alibaba/open/param/AlibabaOfferPv.class.php');

class AlibabaProductFastPublishModel extends SDKDomain {

       	
    private $subject;
    
        /**
    * @return 不允许超过60个字符，中文按2个字符计算
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置不允许超过60个字符，中文按2个字符计算     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $productUUID;
    
        /**
    * @return 全行业唯一标准的实别码，目前在化工行业有用
    */
        public function getProductUUID() {
        return $this->productUUID;
    }
    
    /**
     * 设置全行业唯一标准的实别码，目前在化工行业有用     
     * @param String $productUUID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductUUID( $productUUID) {
        $this->productUUID = $productUUID;
    }
    
        	
    private $packageList;
    
        /**
    * @return 包装清单
    */
        public function getPackageList() {
        return $this->packageList;
    }
    
    /**
     * 设置包装清单     
     * @param String $packageList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPackageList( $packageList) {
        $this->packageList = $packageList;
    }
    
        	
    private $cargo;
    
        /**
    * @return // 必填 货号 物料号 pMaterialNumber 目前来看pCargoNumber可能和groupid是对等的，
     * 因为有些第三方电商底层就是用pCargoNumber是分组的
    */
        public function getCargo() {
        return $this->cargo;
    }
    
    /**
     * 设置// 必填 货号 物料号 pMaterialNumber 目前来看pCargoNumber可能和groupid是对等的，
     * 因为有些第三方电商底层就是用pCargoNumber是分组的     
     * @param String $cargo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCargo( $cargo) {
        $this->cargo = $cargo;
    }
    
        	
    private $cbuCategoryId;
    
        /**
    * @return cbu市场的叶子类目ID
    */
        public function getCbuCategoryId() {
        return $this->cbuCategoryId;
    }
    
    /**
     * 设置cbu市场的叶子类目ID     
     * @param String $cbuCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCbuCategoryId( $cbuCategoryId) {
        $this->cbuCategoryId = $cbuCategoryId;
    }
    
        	
    private $productId;
    
        /**
    * @return 产品 或者 商品 id
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置产品 或者 商品 id     
     * @param String $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $mainImages;
    
        /**
    * @return 商品主图
    */
        public function getMainImages() {
        return $this->mainImages;
    }
    
    /**
     * 设置商品主图     
     * @param List $mainImages     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainImages(array $mainImages) {
        $this->mainImages = $mainImages;
    }
    
        	
    private $amount;
    
        /**
    * @return 可售 数量 为实际的可售数量 以这个数量为准 虚仓场景
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置可售 数量 为实际的可售数量 以这个数量为准 虚仓场景     
     * @param Integer $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $price_type;
    
        /**
    * @return 价格类型 1 一口价 2 阶梯价
    */
        public function getPrice_type() {
        return $this->price_type;
    }
    
    /**
     * 设置价格类型 1 一口价 2 阶梯价     
     * @param Integer $price_type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice_type( $price_type) {
        $this->price_type = $price_type;
    }
    
        	
    private $groupId;
    
        /**
    * @return 由于商品要进行聚合在detail中，方便 买家进行快速下单 ，所以需要第三方市场导入商品的时候 能将他们的 聚合规则提供出来，分批导入的几个商品是不是同一类型 的商品，或者是根据制造商来聚合或者是根据groupid来聚合
     * zkh是按 四级类目id + 标题 + 品牌名
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置由于商品要进行聚合在detail中，方便 买家进行快速下单 ，所以需要第三方市场导入商品的时候 能将他们的 聚合规则提供出来，分批导入的几个商品是不是同一类型 的商品，或者是根据制造商来聚合或者是根据groupid来聚合
     * zkh是按 四级类目id + 标题 + 品牌名     
     * @param String $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $startAmount;
    
        /**
    * @return 定量
    */
        public function getStartAmount() {
        return $this->startAmount;
    }
    
    /**
     * 设置定量     
     * @param Integer $startAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartAmount( $startAmount) {
        $this->startAmount = $startAmount;
    }
    
        	
    private $outerCategoryId;
    
        /**
    * @return 外部市场的叶子类目ID 四级类目
    */
        public function getOuterCategoryId() {
        return $this->outerCategoryId;
    }
    
    /**
     * 设置外部市场的叶子类目ID 四级类目     
     * @param String $outerCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOuterCategoryId( $outerCategoryId) {
        $this->outerCategoryId = $outerCategoryId;
    }
    
        	
    private $price;
    
        /**
    * @return 商品一口价 目前需要满足不同的外部电商对价格精确要求 可能是2位精确可能是4位精确
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置商品一口价 目前需要满足不同的外部电商对价格精确要求 可能是2位精确可能是4位精确     
     * @param String $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $detailMain;
    
        /**
    * @return 商品详情主体 只转储前50张图片，剩余全部抛弃
    */
        public function getDetailMain() {
        return $this->detailMain;
    }
    
    /**
     * 设置商品详情主体 只转储前50张图片，剩余全部抛弃     
     * @param String $detailMain     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetailMain( $detailMain) {
        $this->detailMain = $detailMain;
    }
    
        	
    private $action;
    
        /**
    * @return 操作动作 删除：delete 修改 : update 新增：add
    */
        public function getAction() {
        return $this->action;
    }
    
    /**
     * 设置操作动作 删除：delete 修改 : update 新增：add     
     * @param String $action     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAction( $action) {
        $this->action = $action;
    }
    
        	
    private $features;
    
        /**
    * @return 支持商品的特征
    */
        public function getFeatures() {
        return $this->features;
    }
    
    /**
     * 设置支持商品的特征     
     * @param List $features     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFeatures(array $features) {
        $this->features = $features;
    }
    
        	
    private $outerCategoryName;
    
        /**
    * @return 外部市场的叶子类目名称 四级类目
    */
        public function getOuterCategoryName() {
        return $this->outerCategoryName;
    }
    
    /**
     * 设置外部市场的叶子类目名称 四级类目     
     * @param String $outerCategoryName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOuterCategoryName( $outerCategoryName) {
        $this->outerCategoryName = $outerCategoryName;
    }
    
        	
    private $priceranges;
    
        /**
    * @return 
    */
        public function getPriceranges() {
        return $this->priceranges;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaOfferPriceranges[] $priceranges     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPriceranges(AlibabaOfferPriceranges $priceranges) {
        $this->priceranges = $priceranges;
    }
    
        	
    private $skus;
    
        /**
    * @return 
    */
        public function getSkus() {
        return $this->skus;
    }
    
    /**
     * 设置     
     * @param AlibabaOfferFastPublishsku $skus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkus(AlibabaOfferFastPublishsku $skus) {
        $this->skus = $skus;
    }
    
        	
    private $manufacturerProductCode;
    
        /**
    * @return 厂家编码
    */
        public function getManufacturerProductCode() {
        return $this->manufacturerProductCode;
    }
    
    /**
     * 设置厂家编码     
     * @param String $manufacturerProductCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setManufacturerProductCode( $manufacturerProductCode) {
        $this->manufacturerProductCode = $manufacturerProductCode;
    }
    
        	
    private $brand;
    
        /**
    * @return 品牌 必填
    */
        public function getBrand() {
        return $this->brand;
    }
    
    /**
     * 设置品牌 必填     
     * @param String $brand     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrand( $brand) {
        $this->brand = $brand;
    }
    
        	
    private $model;
    
        /**
    * @return 型号 必填
    */
        public function getModel() {
        return $this->model;
    }
    
    /**
     * 设置型号 必填     
     * @param String $model     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModel( $model) {
        $this->model = $model;
    }
    
        	
    private $pvs;
    
        /**
    * @return 
    */
        public function getPvs() {
        return $this->pvs;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaOfferPv[] $pvs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPvs(AlibabaOfferPv $pvs) {
        $this->pvs = $pvs;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUUID", $this->stdResult )) {
    				$this->productUUID = $this->stdResult->{"productUUID"};
    			}
    			    		    				    			    			if (array_key_exists ( "packageList", $this->stdResult )) {
    				$this->packageList = $this->stdResult->{"packageList"};
    			}
    			    		    				    			    			if (array_key_exists ( "cargo", $this->stdResult )) {
    				$this->cargo = $this->stdResult->{"cargo"};
    			}
    			    		    				    			    			if (array_key_exists ( "cbuCategoryId", $this->stdResult )) {
    				$this->cbuCategoryId = $this->stdResult->{"cbuCategoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainImages", $this->stdResult )) {
    				$this->mainImages = $this->stdResult->{"mainImages"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "price_type", $this->stdResult )) {
    				$this->price_type = $this->stdResult->{"price_type"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "startAmount", $this->stdResult )) {
    				$this->startAmount = $this->stdResult->{"startAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "outerCategoryId", $this->stdResult )) {
    				$this->outerCategoryId = $this->stdResult->{"outerCategoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailMain", $this->stdResult )) {
    				$this->detailMain = $this->stdResult->{"detailMain"};
    			}
    			    		    				    			    			if (array_key_exists ( "action", $this->stdResult )) {
    				$this->action = $this->stdResult->{"action"};
    			}
    			    		    				    			    			if (array_key_exists ( "features", $this->stdResult )) {
    				$this->features = $this->stdResult->{"features"};
    			}
    			    		    				    			    			if (array_key_exists ( "outerCategoryName", $this->stdResult )) {
    				$this->outerCategoryName = $this->stdResult->{"outerCategoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "priceranges", $this->stdResult )) {
    			$pricerangesResult=$this->stdResult->{"priceranges"};
    				$object = json_decode ( json_encode ( $pricerangesResult ), true );
					$this->priceranges = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOfferPricerangesResult=new AlibabaOfferPriceranges();
						$AlibabaOfferPricerangesResult->setArrayResult($arrayobject );
						$this->priceranges [$i] = $AlibabaOfferPricerangesResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "skus", $this->stdResult )) {
    				$skusResult=$this->stdResult->{"skus"};
    				$this->skus = new AlibabaOfferFastPublishsku();
    				$this->skus->setStdResult ( $skusResult);
    			}
    			    		    				    			    			if (array_key_exists ( "manufacturerProductCode", $this->stdResult )) {
    				$this->manufacturerProductCode = $this->stdResult->{"manufacturerProductCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "brand", $this->stdResult )) {
    				$this->brand = $this->stdResult->{"brand"};
    			}
    			    		    				    			    			if (array_key_exists ( "model", $this->stdResult )) {
    				$this->model = $this->stdResult->{"model"};
    			}
    			    		    				    			    			if (array_key_exists ( "pvs", $this->stdResult )) {
    			$pvsResult=$this->stdResult->{"pvs"};
    				$object = json_decode ( json_encode ( $pvsResult ), true );
					$this->pvs = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOfferPvResult=new AlibabaOfferPv();
						$AlibabaOfferPvResult->setArrayResult($arrayobject );
						$this->pvs [$i] = $AlibabaOfferPvResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUUID", $this->arrayResult )) {
    			$this->productUUID = $arrayResult['productUUID'];
    			}
    		    	    			    		    			if (array_key_exists ( "packageList", $this->arrayResult )) {
    			$this->packageList = $arrayResult['packageList'];
    			}
    		    	    			    		    			if (array_key_exists ( "cargo", $this->arrayResult )) {
    			$this->cargo = $arrayResult['cargo'];
    			}
    		    	    			    		    			if (array_key_exists ( "cbuCategoryId", $this->arrayResult )) {
    			$this->cbuCategoryId = $arrayResult['cbuCategoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainImages", $this->arrayResult )) {
    			$this->mainImages = $arrayResult['mainImages'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "price_type", $this->arrayResult )) {
    			$this->price_type = $arrayResult['price_type'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    			    		    			if (array_key_exists ( "startAmount", $this->arrayResult )) {
    			$this->startAmount = $arrayResult['startAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "outerCategoryId", $this->arrayResult )) {
    			$this->outerCategoryId = $arrayResult['outerCategoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailMain", $this->arrayResult )) {
    			$this->detailMain = $arrayResult['detailMain'];
    			}
    		    	    			    		    			if (array_key_exists ( "action", $this->arrayResult )) {
    			$this->action = $arrayResult['action'];
    			}
    		    	    			    		    			if (array_key_exists ( "features", $this->arrayResult )) {
    			$this->features = $arrayResult['features'];
    			}
    		    	    			    		    			if (array_key_exists ( "outerCategoryName", $this->arrayResult )) {
    			$this->outerCategoryName = $arrayResult['outerCategoryName'];
    			}
    		    	    			    		    		if (array_key_exists ( "priceranges", $this->arrayResult )) {
    		$pricerangesResult=$arrayResult['priceranges'];
    			$this->priceranges = new AlibabaOfferPriceranges();
    			$this->priceranges->setStdResult ( $pricerangesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "skus", $this->arrayResult )) {
    		$skusResult=$arrayResult['skus'];
    			    			$this->skus = new AlibabaOfferFastPublishsku();
    			    			$this->skus->setStdResult ( $skusResult);
    		}
    		    	    			    		    			if (array_key_exists ( "manufacturerProductCode", $this->arrayResult )) {
    			$this->manufacturerProductCode = $arrayResult['manufacturerProductCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "brand", $this->arrayResult )) {
    			$this->brand = $arrayResult['brand'];
    			}
    		    	    			    		    			if (array_key_exists ( "model", $this->arrayResult )) {
    			$this->model = $arrayResult['model'];
    			}
    		    	    			    		    		if (array_key_exists ( "pvs", $this->arrayResult )) {
    		$pvsResult=$arrayResult['pvs'];
    			$this->pvs = new AlibabaOfferPv();
    			$this->pvs->setStdResult ( $pvsResult);
    		}
    		    	    		}
 
   
}
?>