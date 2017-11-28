<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomImageModel.class.php');
include_once ('cn/alibaba/open/param/AlibabaPanamaUnicomImageModel.class.php');

class AlibabaPanamaUnicomGoodModel extends SDKDomain {

       	
    private $sku;
    
        /**
    * @return 商品编码
    */
        public function getSku() {
        return $this->sku;
    }
    
    /**
     * 设置商品编码     
     * @param String $sku     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSku( $sku) {
        $this->sku = $sku;
    }
    
        	
    private $weight;
    
        /**
    * @return 重量
    */
        public function getWeight() {
        return $this->weight;
    }
    
    /**
     * 设置重量     
     * @param String $weight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWeight( $weight) {
        $this->weight = $weight;
    }
    
        	
    private $mainImages;
    
        /**
    * @return 主图
    */
        public function getMainImages() {
        return $this->mainImages;
    }
    
    /**
     * 设置主图     
     * @param array include @see AlibabaPanamaUnicomImageModel[] $mainImages     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainImages(AlibabaPanamaUnicomImageModel $mainImages) {
        $this->mainImages = $mainImages;
    }
    
        	
    private $allImages;
    
        /**
    * @return 所有图
    */
        public function getAllImages() {
        return $this->allImages;
    }
    
    /**
     * 设置所有图     
     * @param array include @see AlibabaPanamaUnicomImageModel[] $allImages     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAllImages(AlibabaPanamaUnicomImageModel $allImages) {
        $this->allImages = $allImages;
    }
    
        	
    private $state;
    
        /**
    * @return 上下架状态
    */
        public function getState() {
        return $this->state;
    }
    
    /**
     * 设置上下架状态     
     * @param String $state     
     * 参数示例：<pre>0上架 -1下架</pre>     
     * 此参数必填     */
    public function setState( $state) {
        $this->state = $state;
    }
    
        	
    private $brandName;
    
        /**
    * @return 品牌
    */
        public function getBrandName() {
        return $this->brandName;
    }
    
    /**
     * 设置品牌     
     * @param String $brandName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandName( $brandName) {
        $this->brandName = $brandName;
    }
    
        	
    private $name;
    
        /**
    * @return 商品名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置商品名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $productArea;
    
        /**
    * @return 产地
    */
        public function getProductArea() {
        return $this->productArea;
    }
    
    /**
     * 设置产地     
     * @param String $productArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductArea( $productArea) {
        $this->productArea = $productArea;
    }
    
        	
    private $barCode;
    
        /**
    * @return 条形码
    */
        public function getBarCode() {
        return $this->barCode;
    }
    
    /**
     * 设置条形码     
     * @param String $barCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBarCode( $barCode) {
        $this->barCode = $barCode;
    }
    
        	
    private $saleUnit;
    
        /**
    * @return 销售单位
    */
        public function getSaleUnit() {
        return $this->saleUnit;
    }
    
    /**
     * 设置销售单位     
     * @param String $saleUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSaleUnit( $saleUnit) {
        $this->saleUnit = $saleUnit;
    }
    
        	
    private $categoryId;
    
        /**
    * @return 类目号
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置类目号     
     * @param Long $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $introduction;
    
        /**
    * @return 详细描述
    */
        public function getIntroduction() {
        return $this->introduction;
    }
    
    /**
     * 设置详细描述     
     * @param String $introduction     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIntroduction( $introduction) {
        $this->introduction = $introduction;
    }
    
        	
    private $attrParam;
    
        /**
    * @return 规格参数
    */
        public function getAttrParam() {
        return $this->attrParam;
    }
    
    /**
     * 设置规格参数     
     * @param String $attrParam     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrParam( $attrParam) {
        $this->attrParam = $attrParam;
    }
    
        	
    private $wareQD;
    
        /**
    * @return 包装清单
    */
        public function getWareQD() {
        return $this->wareQD;
    }
    
    /**
     * 设置包装清单     
     * @param String $wareQD     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWareQD( $wareQD) {
        $this->wareQD = $wareQD;
    }
    
        	
    private $bizPrice;
    
        /**
    * @return 协议总价
    */
        public function getBizPrice() {
        return $this->bizPrice;
    }
    
    /**
     * 设置协议总价     
     * @param String $bizPrice     
     * 参数示例：<pre>元为单位</pre>     
     * 此参数必填     */
    public function setBizPrice( $bizPrice) {
        $this->bizPrice = $bizPrice;
    }
    
        	
    private $bizNakedPrice;
    
        /**
    * @return 协议裸价
    */
        public function getBizNakedPrice() {
        return $this->bizNakedPrice;
    }
    
    /**
     * 设置协议裸价     
     * @param String $bizNakedPrice     
     * 参数示例：<pre>元为单位</pre>     
     * 此参数必填     */
    public function setBizNakedPrice( $bizNakedPrice) {
        $this->bizNakedPrice = $bizNakedPrice;
    }
    
        	
    private $bizTaxPrice;
    
        /**
    * @return 协议税价
    */
        public function getBizTaxPrice() {
        return $this->bizTaxPrice;
    }
    
    /**
     * 设置协议税价     
     * @param String $bizTaxPrice     
     * 参数示例：<pre>元为单位</pre>     
     * 此参数必填     */
    public function setBizTaxPrice( $bizTaxPrice) {
        $this->bizTaxPrice = $bizTaxPrice;
    }
    
        	
    private $taxRate;
    
        /**
    * @return 税率
    */
        public function getTaxRate() {
        return $this->taxRate;
    }
    
    /**
     * 设置税率     
     * @param String $taxRate     
     * 参数示例：<pre>17%为0.17</pre>     
     * 此参数必填     */
    public function setTaxRate( $taxRate) {
        $this->taxRate = $taxRate;
    }
    
        	
    private $stock;
    
        /**
    * @return 库存
    */
        public function getStock() {
        return $this->stock;
    }
    
    /**
     * 设置库存     
     * @param String $stock     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStock( $stock) {
        $this->stock = $stock;
    }
    
        	
    private $category;
    
        /**
    * @return 类目名称
    */
        public function getCategory() {
        return $this->category;
    }
    
    /**
     * 设置类目名称     
     * @param String $category     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategory( $category) {
        $this->category = $category;
    }
    
        	
    private $originPrice;
    
        /**
    * @return 市场价
    */
        public function getOriginPrice() {
        return $this->originPrice;
    }
    
    /**
     * 设置市场价     
     * @param String $originPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOriginPrice( $originPrice) {
        $this->originPrice = $originPrice;
    }
    
        	
    private $supplyName;
    
        /**
    * @return 供应商名称
    */
        public function getSupplyName() {
        return $this->supplyName;
    }
    
    /**
     * 设置供应商名称     
     * @param String $supplyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyName( $supplyName) {
        $this->supplyName = $supplyName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sku", $this->stdResult )) {
    				$this->sku = $this->stdResult->{"sku"};
    			}
    			    		    				    			    			if (array_key_exists ( "weight", $this->stdResult )) {
    				$this->weight = $this->stdResult->{"weight"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainImages", $this->stdResult )) {
    			$mainImagesResult=$this->stdResult->{"mainImages"};
    				$object = json_decode ( json_encode ( $mainImagesResult ), true );
					$this->mainImages = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaPanamaUnicomImageModelResult=new AlibabaPanamaUnicomImageModel();
						$AlibabaPanamaUnicomImageModelResult->setArrayResult($arrayobject );
						$this->mainImages [$i] = $AlibabaPanamaUnicomImageModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "allImages", $this->stdResult )) {
    			$allImagesResult=$this->stdResult->{"allImages"};
    				$object = json_decode ( json_encode ( $allImagesResult ), true );
					$this->allImages = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaPanamaUnicomImageModelResult=new AlibabaPanamaUnicomImageModel();
						$AlibabaPanamaUnicomImageModelResult->setArrayResult($arrayobject );
						$this->allImages [$i] = $AlibabaPanamaUnicomImageModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "state", $this->stdResult )) {
    				$this->state = $this->stdResult->{"state"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandName", $this->stdResult )) {
    				$this->brandName = $this->stdResult->{"brandName"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "productArea", $this->stdResult )) {
    				$this->productArea = $this->stdResult->{"productArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "barCode", $this->stdResult )) {
    				$this->barCode = $this->stdResult->{"barCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleUnit", $this->stdResult )) {
    				$this->saleUnit = $this->stdResult->{"saleUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "introduction", $this->stdResult )) {
    				$this->introduction = $this->stdResult->{"introduction"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrParam", $this->stdResult )) {
    				$this->attrParam = $this->stdResult->{"attrParam"};
    			}
    			    		    				    			    			if (array_key_exists ( "wareQD", $this->stdResult )) {
    				$this->wareQD = $this->stdResult->{"wareQD"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizPrice", $this->stdResult )) {
    				$this->bizPrice = $this->stdResult->{"bizPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizNakedPrice", $this->stdResult )) {
    				$this->bizNakedPrice = $this->stdResult->{"bizNakedPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizTaxPrice", $this->stdResult )) {
    				$this->bizTaxPrice = $this->stdResult->{"bizTaxPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxRate", $this->stdResult )) {
    				$this->taxRate = $this->stdResult->{"taxRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "stock", $this->stdResult )) {
    				$this->stock = $this->stdResult->{"stock"};
    			}
    			    		    				    			    			if (array_key_exists ( "category", $this->stdResult )) {
    				$this->category = $this->stdResult->{"category"};
    			}
    			    		    				    			    			if (array_key_exists ( "originPrice", $this->stdResult )) {
    				$this->originPrice = $this->stdResult->{"originPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyName", $this->stdResult )) {
    				$this->supplyName = $this->stdResult->{"supplyName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sku", $this->arrayResult )) {
    			$this->sku = $arrayResult['sku'];
    			}
    		    	    			    		    			if (array_key_exists ( "weight", $this->arrayResult )) {
    			$this->weight = $arrayResult['weight'];
    			}
    		    	    			    		    		if (array_key_exists ( "mainImages", $this->arrayResult )) {
    		$mainImagesResult=$arrayResult['mainImages'];
    			$this->mainImages = new AlibabaPanamaUnicomImageModel();
    			$this->mainImages->setStdResult ( $mainImagesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "allImages", $this->arrayResult )) {
    		$allImagesResult=$arrayResult['allImages'];
    			$this->allImages = new AlibabaPanamaUnicomImageModel();
    			$this->allImages->setStdResult ( $allImagesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "state", $this->arrayResult )) {
    			$this->state = $arrayResult['state'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandName", $this->arrayResult )) {
    			$this->brandName = $arrayResult['brandName'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "productArea", $this->arrayResult )) {
    			$this->productArea = $arrayResult['productArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "barCode", $this->arrayResult )) {
    			$this->barCode = $arrayResult['barCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleUnit", $this->arrayResult )) {
    			$this->saleUnit = $arrayResult['saleUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['categoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "introduction", $this->arrayResult )) {
    			$this->introduction = $arrayResult['introduction'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrParam", $this->arrayResult )) {
    			$this->attrParam = $arrayResult['attrParam'];
    			}
    		    	    			    		    			if (array_key_exists ( "wareQD", $this->arrayResult )) {
    			$this->wareQD = $arrayResult['wareQD'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizPrice", $this->arrayResult )) {
    			$this->bizPrice = $arrayResult['bizPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizNakedPrice", $this->arrayResult )) {
    			$this->bizNakedPrice = $arrayResult['bizNakedPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizTaxPrice", $this->arrayResult )) {
    			$this->bizTaxPrice = $arrayResult['bizTaxPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxRate", $this->arrayResult )) {
    			$this->taxRate = $arrayResult['taxRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "stock", $this->arrayResult )) {
    			$this->stock = $arrayResult['stock'];
    			}
    		    	    			    		    			if (array_key_exists ( "category", $this->arrayResult )) {
    			$this->category = $arrayResult['category'];
    			}
    		    	    			    		    			if (array_key_exists ( "originPrice", $this->arrayResult )) {
    			$this->originPrice = $arrayResult['originPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyName", $this->arrayResult )) {
    			$this->supplyName = $arrayResult['supplyName'];
    			}
    		    	    		}
 
   
}
?>