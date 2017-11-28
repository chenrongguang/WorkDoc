<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeBizLogisticInfo extends SDKDomain {

       	
    private $logisticsId;
    
        /**
    * @return 物流明细ID号
    */
        public function getLogisticsId() {
        return $this->logisticsId;
    }
    
    /**
     * 设置物流明细ID号     
     * @param Long $logisticsId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsId( $logisticsId) {
        $this->logisticsId = $logisticsId;
    }
    
        	
    private $fromContact;
    
        /**
    * @return 发货联系人
    */
        public function getFromContact() {
        return $this->fromContact;
    }
    
    /**
     * 设置发货联系人     
     * @param String $fromContact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromContact( $fromContact) {
        $this->fromContact = $fromContact;
    }
    
        	
    private $fromMobile;
    
        /**
    * @return 发货联系手机
    */
        public function getFromMobile() {
        return $this->fromMobile;
    }
    
    /**
     * 设置发货联系手机     
     * @param String $fromMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromMobile( $fromMobile) {
        $this->fromMobile = $fromMobile;
    }
    
        	
    private $fromPhone;
    
        /**
    * @return 发货联系电话
    */
        public function getFromPhone() {
        return $this->fromPhone;
    }
    
    /**
     * 设置发货联系电话     
     * @param String $fromPhone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromPhone( $fromPhone) {
        $this->fromPhone = $fromPhone;
    }
    
        	
    private $fromProvince;
    
        /**
    * @return 发货省编码
    */
        public function getFromProvince() {
        return $this->fromProvince;
    }
    
    /**
     * 设置发货省编码     
     * @param String $fromProvince     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromProvince( $fromProvince) {
        $this->fromProvince = $fromProvince;
    }
    
        	
    private $fromCity;
    
        /**
    * @return 发货市编码
    */
        public function getFromCity() {
        return $this->fromCity;
    }
    
    /**
     * 设置发货市编码     
     * @param String $fromCity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromCity( $fromCity) {
        $this->fromCity = $fromCity;
    }
    
        	
    private $fromArea;
    
        /**
    * @return 发货区编码
    */
        public function getFromArea() {
        return $this->fromArea;
    }
    
    /**
     * 设置发货区编码     
     * @param String $fromArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromArea( $fromArea) {
        $this->fromArea = $fromArea;
    }
    
        	
    private $fromAddress;
    
        /**
    * @return 发货街道地址
    */
        public function getFromAddress() {
        return $this->fromAddress;
    }
    
    /**
     * 设置发货街道地址     
     * @param String $fromAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromAddress( $fromAddress) {
        $this->fromAddress = $fromAddress;
    }
    
        	
    private $fromPost;
    
        /**
    * @return 发货地址邮编
    */
        public function getFromPost() {
        return $this->fromPost;
    }
    
    /**
     * 设置发货地址邮编     
     * @param String $fromPost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFromPost( $fromPost) {
        $this->fromPost = $fromPost;
    }
    
        	
    private $toContact;
    
        /**
    * @return 
    */
        public function getToContact() {
        return $this->toContact;
    }
    
    /**
     * 设置     
     * @param String $toContact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToContact( $toContact) {
        $this->toContact = $toContact;
    }
    
        	
    private $toMobile;
    
        /**
    * @return 
    */
        public function getToMobile() {
        return $this->toMobile;
    }
    
    /**
     * 设置     
     * @param String $toMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToMobile( $toMobile) {
        $this->toMobile = $toMobile;
    }
    
        	
    private $toPhone;
    
        /**
    * @return 
    */
        public function getToPhone() {
        return $this->toPhone;
    }
    
    /**
     * 设置     
     * @param String $toPhone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToPhone( $toPhone) {
        $this->toPhone = $toPhone;
    }
    
        	
    private $toProvince;
    
        /**
    * @return 
    */
        public function getToProvince() {
        return $this->toProvince;
    }
    
    /**
     * 设置     
     * @param String $toProvince     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToProvince( $toProvince) {
        $this->toProvince = $toProvince;
    }
    
        	
    private $toCity;
    
        /**
    * @return 
    */
        public function getToCity() {
        return $this->toCity;
    }
    
    /**
     * 设置     
     * @param String $toCity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToCity( $toCity) {
        $this->toCity = $toCity;
    }
    
        	
    private $toArea;
    
        /**
    * @return 
    */
        public function getToArea() {
        return $this->toArea;
    }
    
    /**
     * 设置     
     * @param String $toArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToArea( $toArea) {
        $this->toArea = $toArea;
    }
    
        	
    private $toAddress;
    
        /**
    * @return 
    */
        public function getToAddress() {
        return $this->toAddress;
    }
    
    /**
     * 设置     
     * @param String $toAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToAddress( $toAddress) {
        $this->toAddress = $toAddress;
    }
    
        	
    private $toPost;
    
        /**
    * @return 
    */
        public function getToPost() {
        return $this->toPost;
    }
    
    /**
     * 设置     
     * @param String $toPost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToPost( $toPost) {
        $this->toPost = $toPost;
    }
    
        	
    private $logisticsCompanyNo;
    
        /**
    * @return 物流公司编号
    */
        public function getLogisticsCompanyNo() {
        return $this->logisticsCompanyNo;
    }
    
    /**
     * 设置物流公司编号     
     * @param String $logisticsCompanyNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsCompanyNo( $logisticsCompanyNo) {
        $this->logisticsCompanyNo = $logisticsCompanyNo;
    }
    
        	
    private $logisticsCompanyName;
    
        /**
    * @return 快递公司名
    */
        public function getLogisticsCompanyName() {
        return $this->logisticsCompanyName;
    }
    
    /**
     * 设置快递公司名     
     * @param String $logisticsCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsCompanyName( $logisticsCompanyName) {
        $this->logisticsCompanyName = $logisticsCompanyName;
    }
    
        	
    private $logisticsBillNo;
    
        /**
    * @return 物流公司运单号
    */
        public function getLogisticsBillNo() {
        return $this->logisticsBillNo;
    }
    
    /**
     * 设置物流公司运单号     
     * @param String $logisticsBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsBillNo( $logisticsBillNo) {
        $this->logisticsBillNo = $logisticsBillNo;
    }
    
        	
    private $logisticsOrderNo;
    
        /**
    * @return 物流单号
    */
        public function getLogisticsOrderNo() {
        return $this->logisticsOrderNo;
    }
    
    /**
     * 设置物流单号     
     * @param String $logisticsOrderNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsOrderNo( $logisticsOrderNo) {
        $this->logisticsOrderNo = $logisticsOrderNo;
    }
    
        	
    private $status;
    
        /**
    * @return waitsend 等待发货
alreadysend 已发货
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置waitsend 等待发货
alreadysend 已发货     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $gmtSend;
    
        /**
    * @return 发货时间
    */
        public function getGmtSend() {
        return $this->gmtSend;
    }
    
    /**
     * 设置发货时间     
     * @param Date $gmtSend     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtSend( $gmtSend) {
        $this->gmtSend = $gmtSend;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "logisticsId", $this->stdResult )) {
    				$this->logisticsId = $this->stdResult->{"logisticsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromContact", $this->stdResult )) {
    				$this->fromContact = $this->stdResult->{"fromContact"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromMobile", $this->stdResult )) {
    				$this->fromMobile = $this->stdResult->{"fromMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromPhone", $this->stdResult )) {
    				$this->fromPhone = $this->stdResult->{"fromPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromProvince", $this->stdResult )) {
    				$this->fromProvince = $this->stdResult->{"fromProvince"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromCity", $this->stdResult )) {
    				$this->fromCity = $this->stdResult->{"fromCity"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromArea", $this->stdResult )) {
    				$this->fromArea = $this->stdResult->{"fromArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromAddress", $this->stdResult )) {
    				$this->fromAddress = $this->stdResult->{"fromAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromPost", $this->stdResult )) {
    				$this->fromPost = $this->stdResult->{"fromPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "toContact", $this->stdResult )) {
    				$this->toContact = $this->stdResult->{"toContact"};
    			}
    			    		    				    			    			if (array_key_exists ( "toMobile", $this->stdResult )) {
    				$this->toMobile = $this->stdResult->{"toMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "toPhone", $this->stdResult )) {
    				$this->toPhone = $this->stdResult->{"toPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "toProvince", $this->stdResult )) {
    				$this->toProvince = $this->stdResult->{"toProvince"};
    			}
    			    		    				    			    			if (array_key_exists ( "toCity", $this->stdResult )) {
    				$this->toCity = $this->stdResult->{"toCity"};
    			}
    			    		    				    			    			if (array_key_exists ( "toArea", $this->stdResult )) {
    				$this->toArea = $this->stdResult->{"toArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "toAddress", $this->stdResult )) {
    				$this->toAddress = $this->stdResult->{"toAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "toPost", $this->stdResult )) {
    				$this->toPost = $this->stdResult->{"toPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsCompanyNo", $this->stdResult )) {
    				$this->logisticsCompanyNo = $this->stdResult->{"logisticsCompanyNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsCompanyName", $this->stdResult )) {
    				$this->logisticsCompanyName = $this->stdResult->{"logisticsCompanyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsBillNo", $this->stdResult )) {
    				$this->logisticsBillNo = $this->stdResult->{"logisticsBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsOrderNo", $this->stdResult )) {
    				$this->logisticsOrderNo = $this->stdResult->{"logisticsOrderNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtSend", $this->stdResult )) {
    				$this->gmtSend = $this->stdResult->{"gmtSend"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "logisticsId", $this->arrayResult )) {
    			$this->logisticsId = $arrayResult['logisticsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromContact", $this->arrayResult )) {
    			$this->fromContact = $arrayResult['fromContact'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromMobile", $this->arrayResult )) {
    			$this->fromMobile = $arrayResult['fromMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromPhone", $this->arrayResult )) {
    			$this->fromPhone = $arrayResult['fromPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromProvince", $this->arrayResult )) {
    			$this->fromProvince = $arrayResult['fromProvince'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromCity", $this->arrayResult )) {
    			$this->fromCity = $arrayResult['fromCity'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromArea", $this->arrayResult )) {
    			$this->fromArea = $arrayResult['fromArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromAddress", $this->arrayResult )) {
    			$this->fromAddress = $arrayResult['fromAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromPost", $this->arrayResult )) {
    			$this->fromPost = $arrayResult['fromPost'];
    			}
    		    	    			    		    			if (array_key_exists ( "toContact", $this->arrayResult )) {
    			$this->toContact = $arrayResult['toContact'];
    			}
    		    	    			    		    			if (array_key_exists ( "toMobile", $this->arrayResult )) {
    			$this->toMobile = $arrayResult['toMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "toPhone", $this->arrayResult )) {
    			$this->toPhone = $arrayResult['toPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "toProvince", $this->arrayResult )) {
    			$this->toProvince = $arrayResult['toProvince'];
    			}
    		    	    			    		    			if (array_key_exists ( "toCity", $this->arrayResult )) {
    			$this->toCity = $arrayResult['toCity'];
    			}
    		    	    			    		    			if (array_key_exists ( "toArea", $this->arrayResult )) {
    			$this->toArea = $arrayResult['toArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "toAddress", $this->arrayResult )) {
    			$this->toAddress = $arrayResult['toAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "toPost", $this->arrayResult )) {
    			$this->toPost = $arrayResult['toPost'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsCompanyNo", $this->arrayResult )) {
    			$this->logisticsCompanyNo = $arrayResult['logisticsCompanyNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsCompanyName", $this->arrayResult )) {
    			$this->logisticsCompanyName = $arrayResult['logisticsCompanyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsBillNo", $this->arrayResult )) {
    			$this->logisticsBillNo = $arrayResult['logisticsBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsOrderNo", $this->arrayResult )) {
    			$this->logisticsOrderNo = $arrayResult['logisticsOrderNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtSend", $this->arrayResult )) {
    			$this->gmtSend = $arrayResult['gmtSend'];
    			}
    		    	    		}
 
   
}
?>