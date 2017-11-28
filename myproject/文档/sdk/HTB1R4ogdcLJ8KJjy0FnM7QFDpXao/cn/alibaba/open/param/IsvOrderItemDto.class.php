<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IsvOrderItemDto extends SDKDomain {

       	
    private $bizStatusExt;
    
        /**
    * @return 订单详细状态 audit_pass:审核通过，issue_ready：待发布，service：服务中，suspend：挂起
     arrear_suspend：欠费挂起，closed：关闭，cancel：作废
    */
        public function getBizStatusExt() {
        return $this->bizStatusExt;
    }
    
    /**
     * 设置订单详细状态 audit_pass:审核通过，issue_ready：待发布，service：服务中，suspend：挂起
     arrear_suspend：欠费挂起，closed：关闭，cancel：作废     
     * @param String $bizStatusExt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizStatusExt( $bizStatusExt) {
        $this->bizStatusExt = $bizStatusExt;
    }
    
        	
    private $memberId;
    
        /**
    * @return 会员memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置会员memberId     
     * @param String $memberId     
     * 参数示例：<pre>test12345</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $productName;
    
        /**
    * @return 产品名称
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre>360旺店</pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 下单时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置下单时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>20130509120000000+0800</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtServiceEnd;
    
        /**
    * @return 到期时间
    */
        public function getGmtServiceEnd() {
        return $this->gmtServiceEnd;
    }
    
    /**
     * 设置到期时间     
     * @param Date $gmtServiceEnd     
     * 参数示例：<pre>20130509120000000+0800</pre>     
     * 此参数必填     */
    public function setGmtServiceEnd( $gmtServiceEnd) {
        $this->gmtServiceEnd = $gmtServiceEnd;
    }
    
        	
    private $bizStatus;
    
        /**
    * @return 订单状态
B:服务前，S:服务中，P：挂起，E：关闭，C:作废
    */
        public function getBizStatus() {
        return $this->bizStatus;
    }
    
    /**
     * 设置订单状态
B:服务前，S:服务中，P：挂起，E：关闭，C:作废     
     * @param String $bizStatus     
     * 参数示例：<pre>S</pre>     
     * 此参数必填     */
    public function setBizStatus( $bizStatus) {
        $this->bizStatus = $bizStatus;
    }
    
        	
    private $paymentAmount;
    
        /**
    * @return 到帐金额
    */
        public function getPaymentAmount() {
        return $this->paymentAmount;
    }
    
    /**
     * 设置到帐金额     
     * @param Double $paymentAmount     
     * 参数示例：<pre>250.00</pre>     
     * 此参数必填     */
    public function setPaymentAmount( $paymentAmount) {
        $this->paymentAmount = $paymentAmount;
    }
    
        	
    private $executePrice;
    
        /**
    * @return 执行金额
    */
        public function getExecutePrice() {
        return $this->executePrice;
    }
    
    /**
     * 设置执行金额     
     * @param Double $executePrice     
     * 参数示例：<pre>250.00</pre>     
     * 此参数必填     */
    public function setExecutePrice( $executePrice) {
        $this->executePrice = $executePrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizStatusExt", $this->stdResult )) {
    				$this->bizStatusExt = $this->stdResult->{"bizStatusExt"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtServiceEnd", $this->stdResult )) {
    				$this->gmtServiceEnd = $this->stdResult->{"gmtServiceEnd"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizStatus", $this->stdResult )) {
    				$this->bizStatus = $this->stdResult->{"bizStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "paymentAmount", $this->stdResult )) {
    				$this->paymentAmount = $this->stdResult->{"paymentAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "executePrice", $this->stdResult )) {
    				$this->executePrice = $this->stdResult->{"executePrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizStatusExt", $this->arrayResult )) {
    			$this->bizStatusExt = $arrayResult['bizStatusExt'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtServiceEnd", $this->arrayResult )) {
    			$this->gmtServiceEnd = $arrayResult['gmtServiceEnd'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizStatus", $this->arrayResult )) {
    			$this->bizStatus = $arrayResult['bizStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "paymentAmount", $this->arrayResult )) {
    			$this->paymentAmount = $arrayResult['paymentAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "executePrice", $this->arrayResult )) {
    			$this->executePrice = $arrayResult['executePrice'];
    			}
    		    	    		}
 
   
}
?>