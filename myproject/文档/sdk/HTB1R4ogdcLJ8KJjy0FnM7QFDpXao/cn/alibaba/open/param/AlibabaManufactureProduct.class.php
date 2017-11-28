<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureProduct extends SDKDomain {

       	
    private $productCode;
    
        /**
    * @return 需求单号(款号)
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置需求单号(款号)     
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
     * 参数示例：<pre>2017-01-01 08:00:09</pre>     
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
     * 参数示例：<pre>2017-01-01 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $title;
    
        /**
    * @return 需求标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置需求标题     
     * @param String $title     
     * 参数示例：<pre>Abc2015年6月连衣裙</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $status;
    
        /**
    * @return 状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态     
     * @param String $status     
     * 参数示例：<pre>跟进中、已完成、其它 (已关闭、已回流、已暂停等)</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $monitorStatus;
    
        /**
    * @return 监控预警状态
    */
        public function getMonitorStatus() {
        return $this->monitorStatus;
    }
    
    /**
     * 设置监控预警状态     
     * @param String $monitorStatus     
     * 参数示例：<pre>正常、预警、警告、危机</pre>     
     * 此参数必填     */
    public function setMonitorStatus( $monitorStatus) {
        $this->monitorStatus = $monitorStatus;
    }
    
        	
    private $planStatus;
    
        /**
    * @return 需求计划状态
    */
        public function getPlanStatus() {
        return $this->planStatus;
    }
    
    /**
     * 设置需求计划状态     
     * @param String $planStatus     
     * 参数示例：<pre>尚未计划、已计划</pre>     
     * 此参数必填     */
    public function setPlanStatus( $planStatus) {
        $this->planStatus = $planStatus;
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
     * 参数示例：<pre>女装-连衣裙</pre>     
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
    
        	
    private $price;
    
        /**
    * @return 预计大货单价(单元分)
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置预计大货单价(单元分)     
     * @param Long $price     
     * 参数示例：<pre>10000</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $amount;
    
        /**
    * @return 预计大货生产数量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置预计大货生产数量     
     * @param Integer $amount     
     * 参数示例：<pre>50</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $remark;
    
        /**
    * @return 备注信息
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注信息     
     * @param String $remark     
     * 参数示例：<pre>如：颜色尺码工艺要求等信息</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
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
     * 参数示例：<pre>2017-02-01 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtReleasedExpect( $gmtReleasedExpect) {
        $this->gmtReleasedExpect = $gmtReleasedExpect;
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
     * 参数示例：<pre>XX时尚生活</pre>     
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
     * 参数示例：<pre>浙江杭州xx区yy街道zz号</pre>     
     * 此参数必填     */
    public function setBuyerMobile( $buyerMobile) {
        $this->buyerMobile = $buyerMobile;
    }
    
        	
    private $buyerAddress;
    
        /**
    * @return 买方联系地址
    */
        public function getBuyerAddress() {
        return $this->buyerAddress;
    }
    
    /**
     * 设置买方联系地址     
     * @param String $buyerAddress     
     * 参数示例：<pre>13100000000</pre>     
     * 此参数必填     */
    public function setBuyerAddress( $buyerAddress) {
        $this->buyerAddress = $buyerAddress;
    }
    
        	
    private $factoryName;
    
        /**
    * @return 工厂会员名称
    */
        public function getFactoryName() {
        return $this->factoryName;
    }
    
    /**
     * 设置工厂会员名称     
     * @param String $factoryName     
     * 参数示例：<pre>杭州XX服饰加工厂</pre>     
     * 此参数必填     */
    public function setFactoryName( $factoryName) {
        $this->factoryName = $factoryName;
    }
    
        	
    private $factoryMobile;
    
        /**
    * @return 工厂联系手机
    */
        public function getFactoryMobile() {
        return $this->factoryMobile;
    }
    
    /**
     * 设置工厂联系手机     
     * @param String $factoryMobile     
     * 参数示例：<pre>13100000000</pre>     
     * 此参数必填     */
    public function setFactoryMobile( $factoryMobile) {
        $this->factoryMobile = $factoryMobile;
    }
    
        	
    private $factoryAddress;
    
        /**
    * @return 工厂联系地址
    */
        public function getFactoryAddress() {
        return $this->factoryAddress;
    }
    
    /**
     * 设置工厂联系地址     
     * @param String $factoryAddress     
     * 参数示例：<pre>浙江杭州xx区yy街道zz号</pre>     
     * 此参数必填     */
    public function setFactoryAddress( $factoryAddress) {
        $this->factoryAddress = $factoryAddress;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
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
    			    		    				    			    			if (array_key_exists ( "monitorStatus", $this->stdResult )) {
    				$this->monitorStatus = $this->stdResult->{"monitorStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "planStatus", $this->stdResult )) {
    				$this->planStatus = $this->stdResult->{"planStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "catName", $this->stdResult )) {
    				$this->catName = $this->stdResult->{"catName"};
    			}
    			    		    				    			    			if (array_key_exists ( "samplePicList", $this->stdResult )) {
    				$this->samplePicList = $this->stdResult->{"samplePicList"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReleasedExpect", $this->stdResult )) {
    				$this->gmtReleasedExpect = $this->stdResult->{"gmtReleasedExpect"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMobile", $this->stdResult )) {
    				$this->buyerMobile = $this->stdResult->{"buyerMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerAddress", $this->stdResult )) {
    				$this->buyerAddress = $this->stdResult->{"buyerAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryName", $this->stdResult )) {
    				$this->factoryName = $this->stdResult->{"factoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryMobile", $this->stdResult )) {
    				$this->factoryMobile = $this->stdResult->{"factoryMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryAddress", $this->stdResult )) {
    				$this->factoryAddress = $this->stdResult->{"factoryAddress"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
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
    		    	    			    		    			if (array_key_exists ( "monitorStatus", $this->arrayResult )) {
    			$this->monitorStatus = $arrayResult['monitorStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "planStatus", $this->arrayResult )) {
    			$this->planStatus = $arrayResult['planStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "catName", $this->arrayResult )) {
    			$this->catName = $arrayResult['catName'];
    			}
    		    	    			    		    			if (array_key_exists ( "samplePicList", $this->arrayResult )) {
    			$this->samplePicList = $arrayResult['samplePicList'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReleasedExpect", $this->arrayResult )) {
    			$this->gmtReleasedExpect = $arrayResult['gmtReleasedExpect'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['buyerName'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMobile", $this->arrayResult )) {
    			$this->buyerMobile = $arrayResult['buyerMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerAddress", $this->arrayResult )) {
    			$this->buyerAddress = $arrayResult['buyerAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryName", $this->arrayResult )) {
    			$this->factoryName = $arrayResult['factoryName'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryMobile", $this->arrayResult )) {
    			$this->factoryMobile = $arrayResult['factoryMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryAddress", $this->arrayResult )) {
    			$this->factoryAddress = $arrayResult['factoryAddress'];
    			}
    		    	    		}
 
   
}
?>