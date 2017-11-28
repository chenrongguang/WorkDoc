<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeBizInvoiceInfo extends SDKDomain {

       	
    private $invoiceId;
    
        /**
    * @return 发票主键
    */
        public function getInvoiceId() {
        return $this->invoiceId;
    }
    
    /**
     * 设置发票主键     
     * @param Long $invoiceId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceId( $invoiceId) {
        $this->invoiceId = $invoiceId;
    }
    
        	
    private $invoiceCompanyName;
    
        /**
    * @return 发票公司名称(即发票抬头-title)
    */
        public function getInvoiceCompanyName() {
        return $this->invoiceCompanyName;
    }
    
    /**
     * 设置发票公司名称(即发票抬头-title)     
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
    * @return 银行账号
    */
        public function getBankAndAccount() {
        return $this->bankAndAccount;
    }
    
    /**
     * 设置银行账号     
     * @param String $bankAndAccount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBankAndAccount( $bankAndAccount) {
        $this->bankAndAccount = $bankAndAccount;
    }
    
        	
    private $receiveAddress;
    
        /**
    * @return 发票收货人地址
    */
        public function getReceiveAddress() {
        return $this->receiveAddress;
    }
    
    /**
     * 设置发票收货人地址     
     * @param String $receiveAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveAddress( $receiveAddress) {
        $this->receiveAddress = $receiveAddress;
    }
    
        	
    private $receivePhone;
    
        /**
    * @return 发票收货人电话
    */
        public function getReceivePhone() {
        return $this->receivePhone;
    }
    
    /**
     * 设置发票收货人电话     
     * @param String $receivePhone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceivePhone( $receivePhone) {
        $this->receivePhone = $receivePhone;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "invoiceId", $this->stdResult )) {
    				$this->invoiceId = $this->stdResult->{"invoiceId"};
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
    			    		    				    			    			if (array_key_exists ( "receiveAddress", $this->stdResult )) {
    				$this->receiveAddress = $this->stdResult->{"receiveAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "receivePhone", $this->stdResult )) {
    				$this->receivePhone = $this->stdResult->{"receivePhone"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "invoiceId", $this->arrayResult )) {
    			$this->invoiceId = $arrayResult['invoiceId'];
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
    		    	    			    		    			if (array_key_exists ( "receiveAddress", $this->arrayResult )) {
    			$this->receiveAddress = $arrayResult['receiveAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "receivePhone", $this->arrayResult )) {
    			$this->receivePhone = $arrayResult['receivePhone'];
    			}
    		    	    		}
 
   
}
?>