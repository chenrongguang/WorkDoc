<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureFentOrder extends SDKDomain {

       	
    private $fentGoodsCode;
    
        /**
    * @return 1688系统中的打样单编码(货号)
    */
        public function getFentGoodsCode() {
        return $this->fentGoodsCode;
    }
    
    /**
     * 设置1688系统中的打样单编码(货号)     
     * @param String $fentGoodsCode     
     * 参数示例：<pre>THZ0001ABG101GD00020</pre>     
     * 此参数必填     */
    public function setFentGoodsCode( $fentGoodsCode) {
        $this->fentGoodsCode = $fentGoodsCode;
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
     * 参数示例：<pre>2016-01-01 08:00:08</pre>     
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
     * 参数示例：<pre>Abc2015年6月连衣裙</pre>     
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
     * 参数示例：<pre>FENT(说明:打样中)｜PRICING(核价中)｜SEALED(已封样) | CLOSE(关闭)</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $status;
    
        /**
    * @return 状态值
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态值     
     * @param String $status     
     * 参数示例：<pre>FENT(说明:打样中)｜PRICING(核价中)｜SEALED(已封样) | CLOSE(关闭)</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $gmtFent;
    
        /**
    * @return 打样下单时间
    */
        public function getGmtFent() {
        return $this->gmtFent;
    }
    
    /**
     * 设置打样下单时间     
     * @param Date $gmtFent     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtFent( $gmtFent) {
        $this->gmtFent = $gmtFent;
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
    
        	
    private $gmtFinalQuote;
    
        /**
    * @return 工厂最终报价时间
    */
        public function getGmtFinalQuote() {
        return $this->gmtFinalQuote;
    }
    
    /**
     * 设置工厂最终报价时间     
     * @param Date $gmtFinalQuote     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtFinalQuote( $gmtFinalQuote) {
        $this->gmtFinalQuote = $gmtFinalQuote;
    }
    
        	
    private $gmtFinalAccept;
    
        /**
    * @return 买家接受最终报价时间
    */
        public function getGmtFinalAccept() {
        return $this->gmtFinalAccept;
    }
    
    /**
     * 设置买家接受最终报价时间     
     * @param Date $gmtFinalAccept     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setGmtFinalAccept( $gmtFinalAccept) {
        $this->gmtFinalAccept = $gmtFinalAccept;
    }
    
        	
    private $fentPrice;
    
        /**
    * @return 工厂打样的价格(单元分)
    */
        public function getFentPrice() {
        return $this->fentPrice;
    }
    
    /**
     * 设置工厂打样的价格(单元分)     
     * @param Long $fentPrice     
     * 参数示例：<pre>50000</pre>     
     * 此参数必填     */
    public function setFentPrice( $fentPrice) {
        $this->fentPrice = $fentPrice;
    }
    
        	
    private $bulkPrice;
    
        /**
    * @return 工厂最终报的核价价格(单元分)
    */
        public function getBulkPrice() {
        return $this->bulkPrice;
    }
    
    /**
     * 设置工厂最终报的核价价格(单元分)     
     * @param Long $bulkPrice     
     * 参数示例：<pre>5000</pre>     
     * 此参数必填     */
    public function setBulkPrice( $bulkPrice) {
        $this->bulkPrice = $bulkPrice;
    }
    
        	
    private $bulkCount;
    
        /**
    * @return 预计大货数量
    */
        public function getBulkCount() {
        return $this->bulkCount;
    }
    
    /**
     * 设置预计大货数量     
     * @param Integer $bulkCount     
     * 参数示例：<pre>500</pre>     
     * 此参数必填     */
    public function setBulkCount( $bulkCount) {
        $this->bulkCount = $bulkCount;
    }
    
        	
    private $buyerName;
    
        /**
    * @return 买方会员姓名
    */
        public function getBuyerName() {
        return $this->buyerName;
    }
    
    /**
     * 设置买方会员姓名     
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
					    			    			if (array_key_exists ( "fentGoodsCode", $this->stdResult )) {
    				$this->fentGoodsCode = $this->stdResult->{"fentGoodsCode"};
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
    			    		    				    			    			if (array_key_exists ( "gmtFent", $this->stdResult )) {
    				$this->gmtFent = $this->stdResult->{"gmtFent"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReleasedExpect", $this->stdResult )) {
    				$this->gmtReleasedExpect = $this->stdResult->{"gmtReleasedExpect"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtFinalQuote", $this->stdResult )) {
    				$this->gmtFinalQuote = $this->stdResult->{"gmtFinalQuote"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtFinalAccept", $this->stdResult )) {
    				$this->gmtFinalAccept = $this->stdResult->{"gmtFinalAccept"};
    			}
    			    		    				    			    			if (array_key_exists ( "fentPrice", $this->stdResult )) {
    				$this->fentPrice = $this->stdResult->{"fentPrice"};
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
				    		    			if (array_key_exists ( "fentGoodsCode", $this->arrayResult )) {
    			$this->fentGoodsCode = $arrayResult['fentGoodsCode'];
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
    		    	    			    		    			if (array_key_exists ( "gmtFent", $this->arrayResult )) {
    			$this->gmtFent = $arrayResult['gmtFent'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReleasedExpect", $this->arrayResult )) {
    			$this->gmtReleasedExpect = $arrayResult['gmtReleasedExpect'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtFinalQuote", $this->arrayResult )) {
    			$this->gmtFinalQuote = $arrayResult['gmtFinalQuote'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtFinalAccept", $this->arrayResult )) {
    			$this->gmtFinalAccept = $arrayResult['gmtFinalAccept'];
    			}
    		    	    			    		    			if (array_key_exists ( "fentPrice", $this->arrayResult )) {
    			$this->fentPrice = $arrayResult['fentPrice'];
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