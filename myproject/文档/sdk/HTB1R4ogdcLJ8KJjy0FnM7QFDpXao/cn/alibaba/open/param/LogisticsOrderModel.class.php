<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/LogisticsCompanyModel.class.php');

class LogisticsOrderModel extends SDKDomain {

       	
    private $type;
    
        /**
    * @return SELF_SEND_GOODS("0")自行发货，在线发货ONLINE_SEND_GOODS("1"，不需要物流的发货 NO_LOGISTICS_SEND_GOODS("2")
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置SELF_SEND_GOODS("0")自行发货，在线发货ONLINE_SEND_GOODS("1"，不需要物流的发货 NO_LOGISTICS_SEND_GOODS("2")     
     * @param String $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $id;
    
        /**
    * @return 主键id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置主键id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
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
    
        	
    private $orderId;
    
        /**
    * @return 订单id
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置订单id     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $carriage;
    
        /**
    * @return 运费(单位为分)
    */
        public function getCarriage() {
        return $this->carriage;
    }
    
    /**
     * 设置运费(单位为分)     
     * @param Long $carriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCarriage( $carriage) {
        $this->carriage = $carriage;
    }
    
        	
    private $toPost;
    
        /**
    * @return 收货人邮编
    */
        public function getToPost() {
        return $this->toPost;
    }
    
    /**
     * 设置收货人邮编     
     * @param String $toPost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToPost( $toPost) {
        $this->toPost = $toPost;
    }
    
        	
    private $toArea;
    
        /**
    * @return 收货人地址
    */
        public function getToArea() {
        return $this->toArea;
    }
    
    /**
     * 设置收货人地址     
     * @param String $toArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToArea( $toArea) {
        $this->toArea = $toArea;
    }
    
        	
    private $logisticsCompanyId;
    
        /**
    * @return 物流公司编号
    */
        public function getLogisticsCompanyId() {
        return $this->logisticsCompanyId;
    }
    
    /**
     * 设置物流公司编号     
     * @param Long $logisticsCompanyId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsCompanyId( $logisticsCompanyId) {
        $this->logisticsCompanyId = $logisticsCompanyId;
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
    
        	
    private $toProvince;
    
        /**
    * @return 收货省编码
    */
        public function getToProvince() {
        return $this->toProvince;
    }
    
    /**
     * 设置收货省编码     
     * @param String $toProvince     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToProvince( $toProvince) {
        $this->toProvince = $toProvince;
    }
    
        	
    private $toContact;
    
        /**
    * @return 收货联系人
    */
        public function getToContact() {
        return $this->toContact;
    }
    
    /**
     * 设置收货联系人     
     * @param String $toContact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToContact( $toContact) {
        $this->toContact = $toContact;
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
    
        	
    private $logisticsCompany;
    
        /**
    * @return 物流公司
    */
        public function getLogisticsCompany() {
        return $this->logisticsCompany;
    }
    
    /**
     * 设置物流公司     
     * @param LogisticsCompanyModel $logisticsCompany     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsCompany(LogisticsCompanyModel $logisticsCompany) {
        $this->logisticsCompany = $logisticsCompany;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "carriage", $this->stdResult )) {
    				$this->carriage = $this->stdResult->{"carriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "toPost", $this->stdResult )) {
    				$this->toPost = $this->stdResult->{"toPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "toArea", $this->stdResult )) {
    				$this->toArea = $this->stdResult->{"toArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsCompanyId", $this->stdResult )) {
    				$this->logisticsCompanyId = $this->stdResult->{"logisticsCompanyId"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsOrderNo", $this->stdResult )) {
    				$this->logisticsOrderNo = $this->stdResult->{"logisticsOrderNo"};
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
    			    		    				    			    			if (array_key_exists ( "fromPhone", $this->stdResult )) {
    				$this->fromPhone = $this->stdResult->{"fromPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromMobile", $this->stdResult )) {
    				$this->fromMobile = $this->stdResult->{"fromMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "fromPost", $this->stdResult )) {
    				$this->fromPost = $this->stdResult->{"fromPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "toProvince", $this->stdResult )) {
    				$this->toProvince = $this->stdResult->{"toProvince"};
    			}
    			    		    				    			    			if (array_key_exists ( "toContact", $this->stdResult )) {
    				$this->toContact = $this->stdResult->{"toContact"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsBillNo", $this->stdResult )) {
    				$this->logisticsBillNo = $this->stdResult->{"logisticsBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtSend", $this->stdResult )) {
    				$this->gmtSend = $this->stdResult->{"gmtSend"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsCompany", $this->stdResult )) {
    				$logisticsCompanyResult=$this->stdResult->{"logisticsCompany"};
    				$this->logisticsCompany = new LogisticsCompanyModel();
    				$this->logisticsCompany->setStdResult ( $logisticsCompanyResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "carriage", $this->arrayResult )) {
    			$this->carriage = $arrayResult['carriage'];
    			}
    		    	    			    		    			if (array_key_exists ( "toPost", $this->arrayResult )) {
    			$this->toPost = $arrayResult['toPost'];
    			}
    		    	    			    		    			if (array_key_exists ( "toArea", $this->arrayResult )) {
    			$this->toArea = $arrayResult['toArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsCompanyId", $this->arrayResult )) {
    			$this->logisticsCompanyId = $arrayResult['logisticsCompanyId'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsOrderNo", $this->arrayResult )) {
    			$this->logisticsOrderNo = $arrayResult['logisticsOrderNo'];
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
    		    	    			    		    			if (array_key_exists ( "fromPhone", $this->arrayResult )) {
    			$this->fromPhone = $arrayResult['fromPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromMobile", $this->arrayResult )) {
    			$this->fromMobile = $arrayResult['fromMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "fromPost", $this->arrayResult )) {
    			$this->fromPost = $arrayResult['fromPost'];
    			}
    		    	    			    		    			if (array_key_exists ( "toProvince", $this->arrayResult )) {
    			$this->toProvince = $arrayResult['toProvince'];
    			}
    		    	    			    		    			if (array_key_exists ( "toContact", $this->arrayResult )) {
    			$this->toContact = $arrayResult['toContact'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsBillNo", $this->arrayResult )) {
    			$this->logisticsBillNo = $arrayResult['logisticsBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtSend", $this->arrayResult )) {
    			$this->gmtSend = $arrayResult['gmtSend'];
    			}
    		    	    			    		    		if (array_key_exists ( "logisticsCompany", $this->arrayResult )) {
    		$logisticsCompanyResult=$arrayResult['logisticsCompany'];
    			    			$this->logisticsCompany = new LogisticsCompanyModel();
    			    			$this->logisticsCompany->setStdResult ( $logisticsCompanyResult);
    		}
    		    	    		}
 
   
}
?>