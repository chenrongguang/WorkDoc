<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaDaixiaoProductSkuInfo.class.php');

class AlibabaDaixiaoProductInfo extends SDKDomain {

       	
    private $productId;
    
        /**
    * @return 1688商品Id
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置1688商品Id     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $productTitle;
    
        /**
    * @return 商品标题
    */
        public function getProductTitle() {
        return $this->productTitle;
    }
    
    /**
     * 设置商品标题     
     * @param String $productTitle     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductTitle( $productTitle) {
        $this->productTitle = $productTitle;
    }
    
        	
    private $picURI;
    
        /**
    * @return 商品图片
    */
        public function getPicURI() {
        return $this->picURI;
    }
    
    /**
     * 设置商品图片     
     * @param String $picURI     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPicURI( $picURI) {
        $this->picURI = $picURI;
    }
    
        	
    private $catId;
    
        /**
    * @return 类目ID
    */
        public function getCatId() {
        return $this->catId;
    }
    
    /**
     * 设置类目ID     
     * @param Long $catId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCatId( $catId) {
        $this->catId = $catId;
    }
    
        	
    private $skuModelList;
    
        /**
    * @return 商品规格属性列表
    */
        public function getSkuModelList() {
        return $this->skuModelList;
    }
    
    /**
     * 设置商品规格属性列表     
     * @param array include @see AlibabaDaixiaoProductSkuInfo[] $skuModelList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuModelList(AlibabaDaixiaoProductSkuInfo $skuModelList) {
        $this->skuModelList = $skuModelList;
    }
    
        	
    private $skuModelStr;
    
        /**
    * @return skuModel的String形式
    */
        public function getSkuModelStr() {
        return $this->skuModelStr;
    }
    
    /**
     * 设置skuModel的String形式     
     * @param String $skuModelStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuModelStr( $skuModelStr) {
        $this->skuModelStr = $skuModelStr;
    }
    
        	
    private $needSync;
    
        /**
    * @return 是否需要同步规格
    */
        public function getNeedSync() {
        return $this->needSync;
    }
    
    /**
     * 设置是否需要同步规格     
     * @param Boolean $needSync     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedSync( $needSync) {
        $this->needSync = $needSync;
    }
    
        	
    private $publishTime;
    
        /**
    * @return 发布时间
    */
        public function getPublishTime() {
        return $this->publishTime;
    }
    
    /**
     * 设置发布时间     
     * @param String $publishTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPublishTime( $publishTime) {
        $this->publishTime = $publishTime;
    }
    
        	
    private $minPurchasePrice;
    
        /**
    * @return 最低采购价
    */
        public function getMinPurchasePrice() {
        return $this->minPurchasePrice;
    }
    
    /**
     * 设置最低采购价     
     * @param String $minPurchasePrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinPurchasePrice( $minPurchasePrice) {
        $this->minPurchasePrice = $minPurchasePrice;
    }
    
        	
    private $maxPurchasePrice;
    
        /**
    * @return 最高采购价
    */
        public function getMaxPurchasePrice() {
        return $this->maxPurchasePrice;
    }
    
    /**
     * 设置最高采购价     
     * @param String $maxPurchasePrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMaxPurchasePrice( $maxPurchasePrice) {
        $this->maxPurchasePrice = $maxPurchasePrice;
    }
    
        	
    private $sellPrice;
    
        /**
    * @return 建议零售价
    */
        public function getSellPrice() {
        return $this->sellPrice;
    }
    
    /**
     * 设置建议零售价     
     * @param String $sellPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellPrice( $sellPrice) {
        $this->sellPrice = $sellPrice;
    }
    
        	
    private $supplyStock;
    
        /**
    * @return 供应商库存
    */
        public function getSupplyStock() {
        return $this->supplyStock;
    }
    
    /**
     * 设置供应商库存     
     * @param Long $supplyStock     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyStock( $supplyStock) {
        $this->supplyStock = $supplyStock;
    }
    
        	
    private $isDistribute;
    
        /**
    * @return 是否已铺货
    */
        public function getIsDistribute() {
        return $this->isDistribute;
    }
    
    /**
     * 设置是否已铺货     
     * @param Boolean $isDistribute     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsDistribute( $isDistribute) {
        $this->isDistribute = $isDistribute;
    }
    
        	
    private $channel;
    
        /**
    * @return 铺货渠道
    */
        public function getChannel() {
        return $this->channel;
    }
    
    /**
     * 设置铺货渠道     
     * @param Integer $channel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChannel( $channel) {
        $this->channel = $channel;
    }
    
        	
    private $itemId;
    
        /**
    * @return 淘宝商品ID
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置淘宝商品ID     
     * @param Long $itemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $distributeTime;
    
        /**
    * @return 铺货时间
    */
        public function getDistributeTime() {
        return $this->distributeTime;
    }
    
    /**
     * 设置铺货时间     
     * @param String $distributeTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDistributeTime( $distributeTime) {
        $this->distributeTime = $distributeTime;
    }
    
        	
    private $minTbSellPrice;
    
        /**
    * @return 淘宝最低售价
    */
        public function getMinTbSellPrice() {
        return $this->minTbSellPrice;
    }
    
    /**
     * 设置淘宝最低售价     
     * @param String $minTbSellPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinTbSellPrice( $minTbSellPrice) {
        $this->minTbSellPrice = $minTbSellPrice;
    }
    
        	
    private $maxTbSellPrice;
    
        /**
    * @return 淘宝最高售价
    */
        public function getMaxTbSellPrice() {
        return $this->maxTbSellPrice;
    }
    
    /**
     * 设置淘宝最高售价     
     * @param String $maxTbSellPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMaxTbSellPrice( $maxTbSellPrice) {
        $this->maxTbSellPrice = $maxTbSellPrice;
    }
    
        	
    private $tbStatus;
    
        /**
    * @return 淘宝状态(直接展示)， 枚举值为"未上架"、"在售"、"已下架"
    */
        public function getTbStatus() {
        return $this->tbStatus;
    }
    
    /**
     * 设置淘宝状态(直接展示)， 枚举值为"未上架"、"在售"、"已下架"     
     * @param String $tbStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTbStatus( $tbStatus) {
        $this->tbStatus = $tbStatus;
    }
    
        	
    private $tbDetail;
    
        /**
    * @return 淘宝详情页
    */
        public function getTbDetail() {
        return $this->tbDetail;
    }
    
    /**
     * 设置淘宝详情页     
     * @param String $tbDetail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTbDetail( $tbDetail) {
        $this->tbDetail = $tbDetail;
    }
    
        	
    private $offerStatus;
    
        /**
    * @return 商品状态，枚举值为"EXPIRED"(过期),"MEMBER_DELETED"(会员删除),"PUBLISHED"(上架中)
    */
        public function getOfferStatus() {
        return $this->offerStatus;
    }
    
    /**
     * 设置商品状态，枚举值为"EXPIRED"(过期),"MEMBER_DELETED"(会员删除),"PUBLISHED"(上架中)     
     * @param String $offerStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferStatus( $offerStatus) {
        $this->offerStatus = $offerStatus;
    }
    
        	
    private $tips;
    
        /**
    * @return 异常提醒（直接展示）
    */
        public function getTips() {
        return $this->tips;
    }
    
    /**
     * 设置异常提醒（直接展示）     
     * @param String $tips     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTips( $tips) {
        $this->tips = $tips;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productTitle", $this->stdResult )) {
    				$this->productTitle = $this->stdResult->{"productTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "picURI", $this->stdResult )) {
    				$this->picURI = $this->stdResult->{"picURI"};
    			}
    			    		    				    			    			if (array_key_exists ( "catId", $this->stdResult )) {
    				$this->catId = $this->stdResult->{"catId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuModelList", $this->stdResult )) {
    			$skuModelListResult=$this->stdResult->{"skuModelList"};
    				$object = json_decode ( json_encode ( $skuModelListResult ), true );
					$this->skuModelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaDaixiaoProductSkuInfoResult=new AlibabaDaixiaoProductSkuInfo();
						$AlibabaDaixiaoProductSkuInfoResult->setArrayResult($arrayobject );
						$this->skuModelList [$i] = $AlibabaDaixiaoProductSkuInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "skuModelStr", $this->stdResult )) {
    				$this->skuModelStr = $this->stdResult->{"skuModelStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "needSync", $this->stdResult )) {
    				$this->needSync = $this->stdResult->{"needSync"};
    			}
    			    		    				    			    			if (array_key_exists ( "publishTime", $this->stdResult )) {
    				$this->publishTime = $this->stdResult->{"publishTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "minPurchasePrice", $this->stdResult )) {
    				$this->minPurchasePrice = $this->stdResult->{"minPurchasePrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxPurchasePrice", $this->stdResult )) {
    				$this->maxPurchasePrice = $this->stdResult->{"maxPurchasePrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellPrice", $this->stdResult )) {
    				$this->sellPrice = $this->stdResult->{"sellPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyStock", $this->stdResult )) {
    				$this->supplyStock = $this->stdResult->{"supplyStock"};
    			}
    			    		    				    			    			if (array_key_exists ( "isDistribute", $this->stdResult )) {
    				$this->isDistribute = $this->stdResult->{"isDistribute"};
    			}
    			    		    				    			    			if (array_key_exists ( "channel", $this->stdResult )) {
    				$this->channel = $this->stdResult->{"channel"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "distributeTime", $this->stdResult )) {
    				$this->distributeTime = $this->stdResult->{"distributeTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "minTbSellPrice", $this->stdResult )) {
    				$this->minTbSellPrice = $this->stdResult->{"minTbSellPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxTbSellPrice", $this->stdResult )) {
    				$this->maxTbSellPrice = $this->stdResult->{"maxTbSellPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "tbStatus", $this->stdResult )) {
    				$this->tbStatus = $this->stdResult->{"tbStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "tbDetail", $this->stdResult )) {
    				$this->tbDetail = $this->stdResult->{"tbDetail"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerStatus", $this->stdResult )) {
    				$this->offerStatus = $this->stdResult->{"offerStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "tips", $this->stdResult )) {
    				$this->tips = $this->stdResult->{"tips"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productTitle", $this->arrayResult )) {
    			$this->productTitle = $arrayResult['productTitle'];
    			}
    		    	    			    		    			if (array_key_exists ( "picURI", $this->arrayResult )) {
    			$this->picURI = $arrayResult['picURI'];
    			}
    		    	    			    		    			if (array_key_exists ( "catId", $this->arrayResult )) {
    			$this->catId = $arrayResult['catId'];
    			}
    		    	    			    		    		if (array_key_exists ( "skuModelList", $this->arrayResult )) {
    		$skuModelListResult=$arrayResult['skuModelList'];
    			$this->skuModelList = new AlibabaDaixiaoProductSkuInfo();
    			$this->skuModelList->setStdResult ( $skuModelListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "skuModelStr", $this->arrayResult )) {
    			$this->skuModelStr = $arrayResult['skuModelStr'];
    			}
    		    	    			    		    			if (array_key_exists ( "needSync", $this->arrayResult )) {
    			$this->needSync = $arrayResult['needSync'];
    			}
    		    	    			    		    			if (array_key_exists ( "publishTime", $this->arrayResult )) {
    			$this->publishTime = $arrayResult['publishTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "minPurchasePrice", $this->arrayResult )) {
    			$this->minPurchasePrice = $arrayResult['minPurchasePrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxPurchasePrice", $this->arrayResult )) {
    			$this->maxPurchasePrice = $arrayResult['maxPurchasePrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellPrice", $this->arrayResult )) {
    			$this->sellPrice = $arrayResult['sellPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyStock", $this->arrayResult )) {
    			$this->supplyStock = $arrayResult['supplyStock'];
    			}
    		    	    			    		    			if (array_key_exists ( "isDistribute", $this->arrayResult )) {
    			$this->isDistribute = $arrayResult['isDistribute'];
    			}
    		    	    			    		    			if (array_key_exists ( "channel", $this->arrayResult )) {
    			$this->channel = $arrayResult['channel'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['itemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "distributeTime", $this->arrayResult )) {
    			$this->distributeTime = $arrayResult['distributeTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "minTbSellPrice", $this->arrayResult )) {
    			$this->minTbSellPrice = $arrayResult['minTbSellPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxTbSellPrice", $this->arrayResult )) {
    			$this->maxTbSellPrice = $arrayResult['maxTbSellPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "tbStatus", $this->arrayResult )) {
    			$this->tbStatus = $arrayResult['tbStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "tbDetail", $this->arrayResult )) {
    			$this->tbDetail = $arrayResult['tbDetail'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerStatus", $this->arrayResult )) {
    			$this->offerStatus = $arrayResult['offerStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "tips", $this->arrayResult )) {
    			$this->tips = $arrayResult['tips'];
    			}
    		    	    		}
 
   
}
?>