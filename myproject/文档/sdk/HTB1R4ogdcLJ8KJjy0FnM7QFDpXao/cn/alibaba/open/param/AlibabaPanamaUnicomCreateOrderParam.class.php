<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaUnicomCreateOrderParam extends SDKDomain {

       	
    private $gmtModified;
    
        /**
    * @return 
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $zip;
    
        /**
    * @return 
    */
        public function getZip() {
        return $this->zip;
    }
    
    /**
     * 设置     
     * @param String $zip     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setZip( $zip) {
        $this->zip = $zip;
    }
    
        	
    private $phone;
    
        /**
    * @return 手机号 （与phone其中一个有值即可）
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置手机号 （与phone其中一个有值即可）     
     * @param String $phone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $recevierName;
    
        /**
    * @return 收货人
    */
        public function getRecevierName() {
        return $this->recevierName;
    }
    
    /**
     * 设置收货人     
     * @param String $recevierName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRecevierName( $recevierName) {
        $this->recevierName = $recevierName;
    }
    
        	
    private $invoiceState;
    
        /**
    * @return 开票方式(1为随货开票，0为订单预借，2为集中开票 )
    */
        public function getInvoiceState() {
        return $this->invoiceState;
    }
    
    /**
     * 设置开票方式(1为随货开票，0为订单预借，2为集中开票 )     
     * @param Integer $invoiceState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceState( $invoiceState) {
        $this->invoiceState = $invoiceState;
    }
    
        	
    private $remark;
    
        /**
    * @return 备注（少于100字）
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注（少于100字）     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $paymentType;
    
        /**
    * @return 支付方式 (1：货到付款，2：邮局付款，4：在线支付，5：公司转账，6：银行转账，7：网银钱包，101：金采支付)
    */
        public function getPaymentType() {
        return $this->paymentType;
    }
    
    /**
     * 设置支付方式 (1：货到付款，2：邮局付款，4：在线支付，5：公司转账，6：银行转账，7：网银钱包，101：金采支付)     
     * @param Integer $paymentType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPaymentType( $paymentType) {
        $this->paymentType = $paymentType;
    }
    
        	
    private $invoiceType;
    
        /**
    * @return 1普通发票2增值税发票
    */
        public function getInvoiceType() {
        return $this->invoiceType;
    }
    
    /**
     * 设置1普通发票2增值税发票     
     * @param Integer $invoiceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceType( $invoiceType) {
        $this->invoiceType = $invoiceType;
    }
    
        	
    private $appkey;
    
        /**
    * @return 
    */
        public function getAppkey() {
        return $this->appkey;
    }
    
    /**
     * 设置     
     * @param String $appkey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppkey( $appkey) {
        $this->appkey = $appkey;
    }
    
        	
    private $sku;
    
        /**
    * @return key:skuId value:数量
    */
        public function getSku() {
        return $this->sku;
    }
    
    /**
     * 设置key:skuId value:数量     
     * @param Map $sku     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSku(array $sku) {
        $this->sku = $sku;
    }
    
        	
    private $city;
    
        /**
    * @return 二级地址
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置二级地址     
     * @param String $city     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $thirdOrder;
    
        /**
    * @return 联通的订单单号
    */
        public function getThirdOrder() {
        return $this->thirdOrder;
    }
    
    /**
     * 设置联通的订单单号     
     * @param String $thirdOrder     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setThirdOrder( $thirdOrder) {
        $this->thirdOrder = $thirdOrder;
    }
    
        	
    private $address;
    
        /**
    * @return 详细地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置详细地址     
     * @param String $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $county;
    
        /**
    * @return 三级地址
    */
        public function getCounty() {
        return $this->county;
    }
    
    /**
     * 设置三级地址     
     * @param String $county     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCounty( $county) {
        $this->county = $county;
    }
    
        	
    private $email;
    
        /**
    * @return 邮箱
    */
        public function getEmail() {
        return $this->email;
    }
    
    /**
     * 设置邮箱     
     * @param String $email     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEmail( $email) {
        $this->email = $email;
    }
    
        	
    private $userId;
    
        /**
    * @return 用户 id
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置用户 id     
     * @param Long $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $province;
    
        /**
    * @return 一级地址
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置一级地址     
     * @param String $province     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $town;
    
        /**
    * @return 四级地址  (如果该地区有四级地址，则必须传递四级地址)
    */
        public function getTown() {
        return $this->town;
    }
    
    /**
     * 设置四级地址  (如果该地区有四级地址，则必须传递四级地址)     
     * @param String $town     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTown( $town) {
        $this->town = $town;
    }
    
        	
    private $mobile;
    
        /**
    * @return 座机号 (与mobile其中一个有值即可)
    */
        public function getMobile() {
        return $this->mobile;
    }
    
    /**
     * 设置座机号 (与mobile其中一个有值即可)     
     * @param String $mobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "zip", $this->stdResult )) {
    				$this->zip = $this->stdResult->{"zip"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "recevierName", $this->stdResult )) {
    				$this->recevierName = $this->stdResult->{"recevierName"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceState", $this->stdResult )) {
    				$this->invoiceState = $this->stdResult->{"invoiceState"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "paymentType", $this->stdResult )) {
    				$this->paymentType = $this->stdResult->{"paymentType"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceType", $this->stdResult )) {
    				$this->invoiceType = $this->stdResult->{"invoiceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "appkey", $this->stdResult )) {
    				$this->appkey = $this->stdResult->{"appkey"};
    			}
    			    		    				    			    			if (array_key_exists ( "sku", $this->stdResult )) {
    				$this->sku = $this->stdResult->{"sku"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "thirdOrder", $this->stdResult )) {
    				$this->thirdOrder = $this->stdResult->{"thirdOrder"};
    			}
    			    		    				    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "county", $this->stdResult )) {
    				$this->county = $this->stdResult->{"county"};
    			}
    			    		    				    			    			if (array_key_exists ( "email", $this->stdResult )) {
    				$this->email = $this->stdResult->{"email"};
    			}
    			    		    				    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "town", $this->stdResult )) {
    				$this->town = $this->stdResult->{"town"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "zip", $this->arrayResult )) {
    			$this->zip = $arrayResult['zip'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['phone'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "recevierName", $this->arrayResult )) {
    			$this->recevierName = $arrayResult['recevierName'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceState", $this->arrayResult )) {
    			$this->invoiceState = $arrayResult['invoiceState'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "paymentType", $this->arrayResult )) {
    			$this->paymentType = $arrayResult['paymentType'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceType", $this->arrayResult )) {
    			$this->invoiceType = $arrayResult['invoiceType'];
    			}
    		    	    			    		    			if (array_key_exists ( "appkey", $this->arrayResult )) {
    			$this->appkey = $arrayResult['appkey'];
    			}
    		    	    			    		    			if (array_key_exists ( "sku", $this->arrayResult )) {
    			$this->sku = $arrayResult['sku'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['city'];
    			}
    		    	    			    		    			if (array_key_exists ( "thirdOrder", $this->arrayResult )) {
    			$this->thirdOrder = $arrayResult['thirdOrder'];
    			}
    		    	    			    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['address'];
    			}
    		    	    			    		    			if (array_key_exists ( "county", $this->arrayResult )) {
    			$this->county = $arrayResult['county'];
    			}
    		    	    			    		    			if (array_key_exists ( "email", $this->arrayResult )) {
    			$this->email = $arrayResult['email'];
    			}
    		    	    			    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['province'];
    			}
    		    	    			    		    			if (array_key_exists ( "town", $this->arrayResult )) {
    			$this->town = $arrayResult['town'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['mobile'];
    			}
    		    	    		}
 
   
}
?>