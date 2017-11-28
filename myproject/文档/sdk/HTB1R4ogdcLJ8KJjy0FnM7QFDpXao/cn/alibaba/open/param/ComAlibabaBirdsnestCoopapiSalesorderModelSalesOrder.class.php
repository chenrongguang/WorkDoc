<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItem.class.php');

class ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrder extends SDKDomain {

       	
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
    
        	
    private $receiverDistrict;
    
        /**
    * @return 收货人 : 区
    */
        public function getReceiverDistrict() {
        return $this->receiverDistrict;
    }
    
    /**
     * 设置收货人 : 区     
     * @param String $receiverDistrict     
     * 参数示例：<pre>下城区</pre>     
     * 此参数必填     */
    public function setReceiverDistrict( $receiverDistrict) {
        $this->receiverDistrict = $receiverDistrict;
    }
    
        	
    private $receiverCity;
    
        /**
    * @return 收货人 : 市
    */
        public function getReceiverCity() {
        return $this->receiverCity;
    }
    
    /**
     * 设置收货人 : 市     
     * @param String $receiverCity     
     * 参数示例：<pre>杭州</pre>     
     * 此参数必填     */
    public function setReceiverCity( $receiverCity) {
        $this->receiverCity = $receiverCity;
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
    
        	
    private $receiverMobile;
    
        /**
    * @return 收货人手机
    */
        public function getReceiverMobile() {
        return $this->receiverMobile;
    }
    
    /**
     * 设置收货人手机     
     * @param String $receiverMobile     
     * 参数示例：<pre>13336001111</pre>     
     * 此参数必填     */
    public function setReceiverMobile( $receiverMobile) {
        $this->receiverMobile = $receiverMobile;
    }
    
        	
    private $salesOrderId;
    
        /**
    * @return 1688系统中的销售单Id
    */
        public function getSalesOrderId() {
        return $this->salesOrderId;
    }
    
    /**
     * 设置1688系统中的销售单Id     
     * @param Long $salesOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSalesOrderId( $salesOrderId) {
        $this->salesOrderId = $salesOrderId;
    }
    
        	
    private $receiverProvince;
    
        /**
    * @return 收货人 : 省
    */
        public function getReceiverProvince() {
        return $this->receiverProvince;
    }
    
    /**
     * 设置收货人 : 省     
     * @param String $receiverProvince     
     * 参数示例：<pre>浙江</pre>     
     * 此参数必填     */
    public function setReceiverProvince( $receiverProvince) {
        $this->receiverProvince = $receiverProvince;
    }
    
        	
    private $receiverName;
    
        /**
    * @return 收货人姓名
    */
        public function getReceiverName() {
        return $this->receiverName;
    }
    
    /**
     * 设置收货人姓名     
     * @param String $receiverName     
     * 参数示例：<pre>张三</pre>     
     * 此参数必填     */
    public function setReceiverName( $receiverName) {
        $this->receiverName = $receiverName;
    }
    
        	
    private $receiverAddress;
    
        /**
    * @return 收货人 : 详细地址
    */
        public function getReceiverAddress() {
        return $this->receiverAddress;
    }
    
    /**
     * 设置收货人 : 详细地址     
     * @param String $receiverAddress     
     * 参数示例：<pre>东外路133号</pre>     
     * 此参数必填     */
    public function setReceiverAddress( $receiverAddress) {
        $this->receiverAddress = $receiverAddress;
    }
    
        	
    private $receiverPhone;
    
        /**
    * @return 收货人联系电话
    */
        public function getReceiverPhone() {
        return $this->receiverPhone;
    }
    
    /**
     * 设置收货人联系电话     
     * @param String $receiverPhone     
     * 参数示例：<pre>0571-88899778</pre>     
     * 此参数必填     */
    public function setReceiverPhone( $receiverPhone) {
        $this->receiverPhone = $receiverPhone;
    }
    
        	
    private $items;
    
        /**
    * @return 销售单Item项
    */
        public function getItems() {
        return $this->items;
    }
    
    /**
     * 设置销售单Item项     
     * @param array include @see ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItem[] $items     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItems(ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItem $items) {
        $this->items = $items;
    }
    
        	
    private $receiverLoginId;
    
        /**
    * @return 收货人的登录账号
    */
        public function getReceiverLoginId() {
        return $this->receiverLoginId;
    }
    
    /**
     * 设置收货人的登录账号     
     * @param String $receiverLoginId     
     * 参数示例：<pre>rcLogin001</pre>     
     * 此参数必填     */
    public function setReceiverLoginId( $receiverLoginId) {
        $this->receiverLoginId = $receiverLoginId;
    }
    
        	
    private $remark;
    
        /**
    * @return 备注
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注     
     * @param String $remark     
     * 参数示例：<pre>备注</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverDistrict", $this->stdResult )) {
    				$this->receiverDistrict = $this->stdResult->{"receiverDistrict"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverCity", $this->stdResult )) {
    				$this->receiverCity = $this->stdResult->{"receiverCity"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverMobile", $this->stdResult )) {
    				$this->receiverMobile = $this->stdResult->{"receiverMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "salesOrderId", $this->stdResult )) {
    				$this->salesOrderId = $this->stdResult->{"salesOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverProvince", $this->stdResult )) {
    				$this->receiverProvince = $this->stdResult->{"receiverProvince"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverName", $this->stdResult )) {
    				$this->receiverName = $this->stdResult->{"receiverName"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverAddress", $this->stdResult )) {
    				$this->receiverAddress = $this->stdResult->{"receiverAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverPhone", $this->stdResult )) {
    				$this->receiverPhone = $this->stdResult->{"receiverPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "items", $this->stdResult )) {
    			$itemsResult=$this->stdResult->{"items"};
    				$object = json_decode ( json_encode ( $itemsResult ), true );
					$this->items = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItemResult=new ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItem();
						$ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItemResult->setArrayResult($arrayobject );
						$this->items [$i] = $ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItemResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "receiverLoginId", $this->stdResult )) {
    				$this->receiverLoginId = $this->stdResult->{"receiverLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverDistrict", $this->arrayResult )) {
    			$this->receiverDistrict = $arrayResult['receiverDistrict'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverCity", $this->arrayResult )) {
    			$this->receiverCity = $arrayResult['receiverCity'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverMobile", $this->arrayResult )) {
    			$this->receiverMobile = $arrayResult['receiverMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "salesOrderId", $this->arrayResult )) {
    			$this->salesOrderId = $arrayResult['salesOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverProvince", $this->arrayResult )) {
    			$this->receiverProvince = $arrayResult['receiverProvince'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverName", $this->arrayResult )) {
    			$this->receiverName = $arrayResult['receiverName'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverAddress", $this->arrayResult )) {
    			$this->receiverAddress = $arrayResult['receiverAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverPhone", $this->arrayResult )) {
    			$this->receiverPhone = $arrayResult['receiverPhone'];
    			}
    		    	    			    		    		if (array_key_exists ( "items", $this->arrayResult )) {
    		$itemsResult=$arrayResult['items'];
    			$this->items = new ComAlibabaBirdsnestCoopapiSalesorderModelSalesOrderItem();
    			$this->items->setStdResult ( $itemsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "receiverLoginId", $this->arrayResult )) {
    			$this->receiverLoginId = $arrayResult['receiverLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    		}
 
   
}
?>