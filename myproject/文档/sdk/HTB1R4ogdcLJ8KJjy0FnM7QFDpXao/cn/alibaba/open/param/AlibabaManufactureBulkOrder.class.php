<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureBulkOrder extends SDKDomain {

       	
    private $bulkGoodsCode;
    
        /**
    * @return 大货订单编码(货号)
    */
        public function getBulkGoodsCode() {
        return $this->bulkGoodsCode;
    }
    
    /**
     * 设置大货订单编码(货号)     
     * @param String $bulkGoodsCode     
     * 参数示例：<pre>THZ0001ABG101GD0002A</pre>     
     * 此参数必填     */
    public function setBulkGoodsCode( $bulkGoodsCode) {
        $this->bulkGoodsCode = $bulkGoodsCode;
    }
    
        	
    private $productCode;
    
        /**
    * @return 款式编码(款号)
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置款式编码(款号)     
     * @param String $productCode     
     * 参数示例：<pre>THZ0001ABG101</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
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
     * 参数示例：<pre>2016-01-01 08:00:09</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
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
     * 参数示例：<pre>2016-01-01 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $title;
    
        /**
    * @return 产品标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置产品标题     
     * @param String $title     
     * 参数示例：<pre>Abc2015年6月连衣裙</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $status;
    
        /**
    * @return 订单状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置订单状态     
     * @param String $status     
     * 参数示例：<pre>PRODUCING(生产中)| PRODUCED(生产完成)| CLOSE(关闭)</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $gmtBulk;
    
        /**
    * @return 大货下单时间
    */
        public function getGmtBulk() {
        return $this->gmtBulk;
    }
    
    /**
     * 设置大货下单时间     
     * @param Date $gmtBulk     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtBulk( $gmtBulk) {
        $this->gmtBulk = $gmtBulk;
    }
    
        	
    private $gmtReleasedExpect;
    
        /**
    * @return 期望交货时间
    */
        public function getGmtReleasedExpect() {
        return $this->gmtReleasedExpect;
    }
    
    /**
     * 设置期望交货时间     
     * @param Date $gmtReleasedExpect     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtReleasedExpect( $gmtReleasedExpect) {
        $this->gmtReleasedExpect = $gmtReleasedExpect;
    }
    
        	
    private $gmtReleased;
    
        /**
    * @return 实际交货时间
    */
        public function getGmtReleased() {
        return $this->gmtReleased;
    }
    
    /**
     * 设置实际交货时间     
     * @param Date $gmtReleased     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtReleased( $gmtReleased) {
        $this->gmtReleased = $gmtReleased;
    }
    
        	
    private $gmtReceived;
    
        /**
    * @return 确认收到时间
    */
        public function getGmtReceived() {
        return $this->gmtReceived;
    }
    
    /**
     * 设置确认收到时间     
     * @param Date $gmtReceived     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtReceived( $gmtReceived) {
        $this->gmtReceived = $gmtReceived;
    }
    
        	
    private $bulkPrice;
    
        /**
    * @return 大货价格(分)
    */
        public function getBulkPrice() {
        return $this->bulkPrice;
    }
    
    /**
     * 设置大货价格(分)     
     * @param Long $bulkPrice     
     * 参数示例：<pre>5000</pre>     
     * 此参数必填     */
    public function setBulkPrice( $bulkPrice) {
        $this->bulkPrice = $bulkPrice;
    }
    
        	
    private $bulkCount;
    
        /**
    * @return 大货数量
    */
        public function getBulkCount() {
        return $this->bulkCount;
    }
    
    /**
     * 设置大货数量     
     * @param Integer $bulkCount     
     * 参数示例：<pre>500</pre>     
     * 此参数必填     */
    public function setBulkCount( $bulkCount) {
        $this->bulkCount = $bulkCount;
    }
    
        	
    private $buyerName;
    
        /**
    * @return 买方会员名称
    */
        public function getBuyerName() {
        return $this->buyerName;
    }
    
    /**
     * 设置买方会员名称     
     * @param String $buyerName     
     * 参数示例：<pre>郑小姐</pre>     
     * 此参数必填     */
    public function setBuyerName( $buyerName) {
        $this->buyerName = $buyerName;
    }
    
        	
    private $buyerMobile;
    
        /**
    * @return 买方联系手机
    */
        public function getBuyerMobile() {
        return $this->buyerMobile;
    }
    
    /**
     * 设置买方联系手机     
     * @param String $buyerMobile     
     * 参数示例：<pre>13100000000</pre>     
     * 此参数必填     */
    public function setBuyerMobile( $buyerMobile) {
        $this->buyerMobile = $buyerMobile;
    }
    
        	
    private $catName;
    
        /**
    * @return 类目名称
    */
        public function getCatName() {
        return $this->catName;
    }
    
    /**
     * 设置类目名称     
     * @param String $catName     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setCatName( $catName) {
        $this->catName = $catName;
    }
    
        	
    private $samplePicList;
    
        /**
    * @return 样图url列表
    */
        public function getSamplePicList() {
        return $this->samplePicList;
    }
    
    /**
     * 设置样图url列表     
     * @param array include @see String[] $samplePicList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSamplePicList( $samplePicList) {
        $this->samplePicList = $samplePicList;
    }
    
        	
    private $buyerAddress;
    
        /**
    * @return 买家联系地址
    */
        public function getBuyerAddress() {
        return $this->buyerAddress;
    }
    
    /**
     * 设置买家联系地址     
     * @param String $buyerAddress     
     * 参数示例：<pre>浙江杭州xx区yy街道zz号</pre>     
     * 此参数必填     */
    public function setBuyerAddress( $buyerAddress) {
        $this->buyerAddress = $buyerAddress;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bulkGoodsCode", $this->stdResult )) {
    				$this->bulkGoodsCode = $this->stdResult->{"bulkGoodsCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtBulk", $this->stdResult )) {
    				$this->gmtBulk = $this->stdResult->{"gmtBulk"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReleasedExpect", $this->stdResult )) {
    				$this->gmtReleasedExpect = $this->stdResult->{"gmtReleasedExpect"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReleased", $this->stdResult )) {
    				$this->gmtReleased = $this->stdResult->{"gmtReleased"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReceived", $this->stdResult )) {
    				$this->gmtReceived = $this->stdResult->{"gmtReceived"};
    			}
    			    		    				    			    			if (array_key_exists ( "bulkPrice", $this->stdResult )) {
    				$this->bulkPrice = $this->stdResult->{"bulkPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bulkCount", $this->stdResult )) {
    				$this->bulkCount = $this->stdResult->{"bulkCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMobile", $this->stdResult )) {
    				$this->buyerMobile = $this->stdResult->{"buyerMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "catName", $this->stdResult )) {
    				$this->catName = $this->stdResult->{"catName"};
    			}
    			    		    				    			    			if (array_key_exists ( "samplePicList", $this->stdResult )) {
    				$this->samplePicList = $this->stdResult->{"samplePicList"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerAddress", $this->stdResult )) {
    				$this->buyerAddress = $this->stdResult->{"buyerAddress"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bulkGoodsCode", $this->arrayResult )) {
    			$this->bulkGoodsCode = $arrayResult['bulkGoodsCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtBulk", $this->arrayResult )) {
    			$this->gmtBulk = $arrayResult['gmtBulk'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReleasedExpect", $this->arrayResult )) {
    			$this->gmtReleasedExpect = $arrayResult['gmtReleasedExpect'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReleased", $this->arrayResult )) {
    			$this->gmtReleased = $arrayResult['gmtReleased'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReceived", $this->arrayResult )) {
    			$this->gmtReceived = $arrayResult['gmtReceived'];
    			}
    		    	    			    		    			if (array_key_exists ( "bulkPrice", $this->arrayResult )) {
    			$this->bulkPrice = $arrayResult['bulkPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bulkCount", $this->arrayResult )) {
    			$this->bulkCount = $arrayResult['bulkCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['buyerName'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMobile", $this->arrayResult )) {
    			$this->buyerMobile = $arrayResult['buyerMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "catName", $this->arrayResult )) {
    			$this->catName = $arrayResult['catName'];
    			}
    		    	    			    		    			if (array_key_exists ( "samplePicList", $this->arrayResult )) {
    			$this->samplePicList = $arrayResult['samplePicList'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerAddress", $this->arrayResult )) {
    			$this->buyerAddress = $arrayResult['buyerAddress'];
    			}
    		    	    		}
 
   
}
?>