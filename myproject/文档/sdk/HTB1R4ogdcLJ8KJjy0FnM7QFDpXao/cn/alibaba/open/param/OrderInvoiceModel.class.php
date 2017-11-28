<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OrderInvoiceModel extends SDKDomain {

       	
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
    
        	
    private $orderId;
    
        /**
    * @return 订单号
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置订单号     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $invoiceCompanyName;
    
        /**
    * @return 发票公司名称
    */
        public function getInvoiceCompanyName() {
        return $this->invoiceCompanyName;
    }
    
    /**
     * 设置发票公司名称     
     * @param String $invoiceCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceCompanyName( $invoiceCompanyName) {
        $this->invoiceCompanyName = $invoiceCompanyName;
    }
    
        	
    private $taxpayerIdentify;
    
        /**
    * @return 纳税人识别号
    */
        public function getTaxpayerIdentify() {
        return $this->taxpayerIdentify;
    }
    
    /**
     * 设置纳税人识别号     
     * @param String $taxpayerIdentify     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaxpayerIdentify( $taxpayerIdentify) {
        $this->taxpayerIdentify = $taxpayerIdentify;
    }
    
        	
    private $bankAndAccount;
    
        /**
    * @return 公司开户行和帐号
    */
        public function getBankAndAccount() {
        return $this->bankAndAccount;
    }
    
    /**
     * 设置公司开户行和帐号     
     * @param String $bankAndAccount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBankAndAccount( $bankAndAccount) {
        $this->bankAndAccount = $bankAndAccount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceCompanyName", $this->stdResult )) {
    				$this->invoiceCompanyName = $this->stdResult->{"invoiceCompanyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxpayerIdentify", $this->stdResult )) {
    				$this->taxpayerIdentify = $this->stdResult->{"taxpayerIdentify"};
    			}
    			    		    				    			    			if (array_key_exists ( "bankAndAccount", $this->stdResult )) {
    				$this->bankAndAccount = $this->stdResult->{"bankAndAccount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceCompanyName", $this->arrayResult )) {
    			$this->invoiceCompanyName = $arrayResult['invoiceCompanyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxpayerIdentify", $this->arrayResult )) {
    			$this->taxpayerIdentify = $arrayResult['taxpayerIdentify'];
    			}
    		    	    			    		    			if (array_key_exists ( "bankAndAccount", $this->arrayResult )) {
    			$this->bankAndAccount = $arrayResult['bankAndAccount'];
    			}
    		    	    		}
 
   
}
?>