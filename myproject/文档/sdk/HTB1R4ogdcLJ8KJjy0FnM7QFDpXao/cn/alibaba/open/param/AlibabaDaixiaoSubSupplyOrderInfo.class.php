<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDaixiaoSubSupplyOrderInfo extends SDKDomain {

       	
    private $picUrl;
    
        /**
    * @return 宝贝图片地址
    */
        public function getPicUrl() {
        return $this->picUrl;
    }
    
    /**
     * 设置宝贝图片地址     
     * @param String $picUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPicUrl( $picUrl) {
        $this->picUrl = $picUrl;
    }
    
        	
    private $itemTitle;
    
        /**
    * @return 淘宝宝贝名称
    */
        public function getItemTitle() {
        return $this->itemTitle;
    }
    
    /**
     * 设置淘宝宝贝名称     
     * @param String $itemTitle     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemTitle( $itemTitle) {
        $this->itemTitle = $itemTitle;
    }
    
        	
    private $itemId;
    
        /**
    * @return 淘宝宝贝Id
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置淘宝宝贝Id     
     * @param String $itemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $offerTitle;
    
        /**
    * @return 1688商品名称
    */
        public function getOfferTitle() {
        return $this->offerTitle;
    }
    
    /**
     * 设置1688商品名称     
     * @param String $offerTitle     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferTitle( $offerTitle) {
        $this->offerTitle = $offerTitle;
    }
    
        	
    private $offerStatus;
    
        /**
    * @return 1688商品状态
    */
        public function getOfferStatus() {
        return $this->offerStatus;
    }
    
    /**
     * 设置1688商品状态     
     * @param String $offerStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferStatus( $offerStatus) {
        $this->offerStatus = $offerStatus;
    }
    
        	
    private $innerSpec;
    
        /**
    * @return Sku信息
    */
        public function getInnerSpec() {
        return $this->innerSpec;
    }
    
    /**
     * 设置Sku信息     
     * @param Map $innerSpec     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInnerSpec(array $innerSpec) {
        $this->innerSpec = $innerSpec;
    }
    
        	
    private $minPrice;
    
        /**
    * @return 1688商品最低价
    */
        public function getMinPrice() {
        return $this->minPrice;
    }
    
    /**
     * 设置1688商品最低价     
     * @param Double $minPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinPrice( $minPrice) {
        $this->minPrice = $minPrice;
    }
    
        	
    private $maxPrice;
    
        /**
    * @return 1688商品最高价
    */
        public function getMaxPrice() {
        return $this->maxPrice;
    }
    
    /**
     * 设置1688商品最高价     
     * @param Double $maxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMaxPrice( $maxPrice) {
        $this->maxPrice = $maxPrice;
    }
    
        	
    private $buyAmount;
    
        /**
    * @return 宝贝购卖数量
    */
        public function getBuyAmount() {
        return $this->buyAmount;
    }
    
    /**
     * 设置宝贝购卖数量     
     * @param Long $buyAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyAmount( $buyAmount) {
        $this->buyAmount = $buyAmount;
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
     * @param Long $stock     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStock( $stock) {
        $this->stock = $stock;
    }
    
        	
    private $supplierId;
    
        /**
    * @return 供应商Id
    */
        public function getSupplierId() {
        return $this->supplierId;
    }
    
    /**
     * 设置供应商Id     
     * @param Long $supplierId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierId( $supplierId) {
        $this->supplierId = $supplierId;
    }
    
        	
    private $supplierNickName;
    
        /**
    * @return 供应商昵称
    */
        public function getSupplierNickName() {
        return $this->supplierNickName;
    }
    
    /**
     * 设置供应商昵称     
     * @param String $supplierNickName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierNickName( $supplierNickName) {
        $this->supplierNickName = $supplierNickName;
    }
    
        	
    private $orderId;
    
        /**
    * @return 中间表的主键
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置中间表的主键     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $isSkuConfirm;
    
        /**
    * @return 是否确认过SKU信息
    */
        public function getIsSkuConfirm() {
        return $this->isSkuConfirm;
    }
    
    /**
     * 设置是否确认过SKU信息     
     * @param Boolean $isSkuConfirm     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSkuConfirm( $isSkuConfirm) {
        $this->isSkuConfirm = $isSkuConfirm;
    }
    
        	
    private $outBuyAmount;
    
        /**
    * @return tb购买数量
    */
        public function getOutBuyAmount() {
        return $this->outBuyAmount;
    }
    
    /**
     * 设置tb购买数量     
     * @param Long $outBuyAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutBuyAmount( $outBuyAmount) {
        $this->outBuyAmount = $outBuyAmount;
    }
    
        	
    private $outerSpec;
    
        /**
    * @return 外部Sku信息
    */
        public function getOuterSpec() {
        return $this->outerSpec;
    }
    
    /**
     * 设置外部Sku信息     
     * @param Map $outerSpec     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOuterSpec(array $outerSpec) {
        $this->outerSpec = $outerSpec;
    }
    
        	
    private $offerId;
    
        /**
    * @return offerId
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置offerId     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $specId;
    
        /**
    * @return spectId
    */
        public function getSpecId() {
        return $this->specId;
    }
    
    /**
     * 设置spectId     
     * @param String $specId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }
    
        	
    private $isInventoryCut;
    
        /**
    * @return 是否扣减库存
    */
        public function getIsInventoryCut() {
        return $this->isInventoryCut;
    }
    
    /**
     * 设置是否扣减库存     
     * @param Boolean $isInventoryCut     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsInventoryCut( $isInventoryCut) {
        $this->isInventoryCut = $isInventoryCut;
    }
    
        	
    private $outGoodsPrice;
    
        /**
    * @return 外部商品单价 单位：分
    */
        public function getOutGoodsPrice() {
        return $this->outGoodsPrice;
    }
    
    /**
     * 设置外部商品单价 单位：分     
     * @param Double $outGoodsPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutGoodsPrice( $outGoodsPrice) {
        $this->outGoodsPrice = $outGoodsPrice;
    }
    
        	
    private $tbSubOrderNo;
    
        /**
    * @return 淘宝子订单号
    */
        public function getTbSubOrderNo() {
        return $this->tbSubOrderNo;
    }
    
    /**
     * 设置淘宝子订单号     
     * @param String $tbSubOrderNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTbSubOrderNo( $tbSubOrderNo) {
        $this->tbSubOrderNo = $tbSubOrderNo;
    }
    
        	
    private $b2bSubOrderNo;
    
        /**
    * @return 1688子订单号
    */
        public function getB2bSubOrderNo() {
        return $this->b2bSubOrderNo;
    }
    
    /**
     * 设置1688子订单号     
     * @param String $b2bSubOrderNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setB2bSubOrderNo( $b2bSubOrderNo) {
        $this->b2bSubOrderNo = $b2bSubOrderNo;
    }
    
        	
    private $offerPicUrl;
    
        /**
    * @return 1688offer图片地址
    */
        public function getOfferPicUrl() {
        return $this->offerPicUrl;
    }
    
    /**
     * 设置1688offer图片地址     
     * @param String $offerPicUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferPicUrl( $offerPicUrl) {
        $this->offerPicUrl = $offerPicUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "picUrl", $this->stdResult )) {
    				$this->picUrl = $this->stdResult->{"picUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemTitle", $this->stdResult )) {
    				$this->itemTitle = $this->stdResult->{"itemTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerTitle", $this->stdResult )) {
    				$this->offerTitle = $this->stdResult->{"offerTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerStatus", $this->stdResult )) {
    				$this->offerStatus = $this->stdResult->{"offerStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "innerSpec", $this->stdResult )) {
    				$this->innerSpec = $this->stdResult->{"innerSpec"};
    			}
    			    		    				    			    			if (array_key_exists ( "minPrice", $this->stdResult )) {
    				$this->minPrice = $this->stdResult->{"minPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxPrice", $this->stdResult )) {
    				$this->maxPrice = $this->stdResult->{"maxPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyAmount", $this->stdResult )) {
    				$this->buyAmount = $this->stdResult->{"buyAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "stock", $this->stdResult )) {
    				$this->stock = $this->stdResult->{"stock"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierId", $this->stdResult )) {
    				$this->supplierId = $this->stdResult->{"supplierId"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierNickName", $this->stdResult )) {
    				$this->supplierNickName = $this->stdResult->{"supplierNickName"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSkuConfirm", $this->stdResult )) {
    				$this->isSkuConfirm = $this->stdResult->{"isSkuConfirm"};
    			}
    			    		    				    			    			if (array_key_exists ( "outBuyAmount", $this->stdResult )) {
    				$this->outBuyAmount = $this->stdResult->{"outBuyAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "outerSpec", $this->stdResult )) {
    				$this->outerSpec = $this->stdResult->{"outerSpec"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    				    			    			if (array_key_exists ( "isInventoryCut", $this->stdResult )) {
    				$this->isInventoryCut = $this->stdResult->{"isInventoryCut"};
    			}
    			    		    				    			    			if (array_key_exists ( "outGoodsPrice", $this->stdResult )) {
    				$this->outGoodsPrice = $this->stdResult->{"outGoodsPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "tbSubOrderNo", $this->stdResult )) {
    				$this->tbSubOrderNo = $this->stdResult->{"tbSubOrderNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "b2bSubOrderNo", $this->stdResult )) {
    				$this->b2bSubOrderNo = $this->stdResult->{"b2bSubOrderNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerPicUrl", $this->stdResult )) {
    				$this->offerPicUrl = $this->stdResult->{"offerPicUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "picUrl", $this->arrayResult )) {
    			$this->picUrl = $arrayResult['picUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemTitle", $this->arrayResult )) {
    			$this->itemTitle = $arrayResult['itemTitle'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['itemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerTitle", $this->arrayResult )) {
    			$this->offerTitle = $arrayResult['offerTitle'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerStatus", $this->arrayResult )) {
    			$this->offerStatus = $arrayResult['offerStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "innerSpec", $this->arrayResult )) {
    			$this->innerSpec = $arrayResult['innerSpec'];
    			}
    		    	    			    		    			if (array_key_exists ( "minPrice", $this->arrayResult )) {
    			$this->minPrice = $arrayResult['minPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxPrice", $this->arrayResult )) {
    			$this->maxPrice = $arrayResult['maxPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyAmount", $this->arrayResult )) {
    			$this->buyAmount = $arrayResult['buyAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "stock", $this->arrayResult )) {
    			$this->stock = $arrayResult['stock'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierId", $this->arrayResult )) {
    			$this->supplierId = $arrayResult['supplierId'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierNickName", $this->arrayResult )) {
    			$this->supplierNickName = $arrayResult['supplierNickName'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSkuConfirm", $this->arrayResult )) {
    			$this->isSkuConfirm = $arrayResult['isSkuConfirm'];
    			}
    		    	    			    		    			if (array_key_exists ( "outBuyAmount", $this->arrayResult )) {
    			$this->outBuyAmount = $arrayResult['outBuyAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "outerSpec", $this->arrayResult )) {
    			$this->outerSpec = $arrayResult['outerSpec'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['specId'];
    			}
    		    	    			    		    			if (array_key_exists ( "isInventoryCut", $this->arrayResult )) {
    			$this->isInventoryCut = $arrayResult['isInventoryCut'];
    			}
    		    	    			    		    			if (array_key_exists ( "outGoodsPrice", $this->arrayResult )) {
    			$this->outGoodsPrice = $arrayResult['outGoodsPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "tbSubOrderNo", $this->arrayResult )) {
    			$this->tbSubOrderNo = $arrayResult['tbSubOrderNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "b2bSubOrderNo", $this->arrayResult )) {
    			$this->b2bSubOrderNo = $arrayResult['b2bSubOrderNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerPicUrl", $this->arrayResult )) {
    			$this->offerPicUrl = $arrayResult['offerPicUrl'];
    			}
    		    	    		}
 
   
}
?>