<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductInvoiceInfo extends SDKDomain {

       	
    private $invoiceId;
    
        /**
    * @return 发票号码
    */
        public function getInvoiceId() {
        return $this->invoiceId;
    }
    
    /**
     * 设置发票号码     
     * @param String $invoiceId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceId( $invoiceId) {
        $this->invoiceId = $invoiceId;
    }
    
        	
    private $invoiceCode;
    
        /**
    * @return 发票代码
    */
        public function getInvoiceCode() {
        return $this->invoiceCode;
    }
    
    /**
     * 设置发票代码     
     * @param String $invoiceCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceCode( $invoiceCode) {
        $this->invoiceCode = $invoiceCode;
    }
    
        	
    private $invoiceDate;
    
        /**
    * @return 发票日期
    */
        public function getInvoiceDate() {
        return $this->invoiceDate;
    }
    
    /**
     * 设置发票日期     
     * @param String $invoiceDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceDate( $invoiceDate) {
        $this->invoiceDate = $invoiceDate;
    }
    
        	
    private $invoiceNakedAmount;
    
        /**
    * @return 发票金额（裸价）
    */
        public function getInvoiceNakedAmount() {
        return $this->invoiceNakedAmount;
    }
    
    /**
     * 设置发票金额（裸价）     
     * @param Double $invoiceNakedAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceNakedAmount( $invoiceNakedAmount) {
        $this->invoiceNakedAmount = $invoiceNakedAmount;
    }
    
        	
    private $invoiceTaxRate;
    
        /**
    * @return 发票税率
    */
        public function getInvoiceTaxRate() {
        return $this->invoiceTaxRate;
    }
    
    /**
     * 设置发票税率     
     * @param Long $invoiceTaxRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceTaxRate( $invoiceTaxRate) {
        $this->invoiceTaxRate = $invoiceTaxRate;
    }
    
        	
    private $invoiceTaxAmount;
    
        /**
    * @return 发票税额
    */
        public function getInvoiceTaxAmount() {
        return $this->invoiceTaxAmount;
    }
    
    /**
     * 设置发票税额     
     * @param Double $invoiceTaxAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceTaxAmount( $invoiceTaxAmount) {
        $this->invoiceTaxAmount = $invoiceTaxAmount;
    }
    
        	
    private $invoiceAmount;
    
        /**
    * @return 价税合计
    */
        public function getInvoiceAmount() {
        return $this->invoiceAmount;
    }
    
    /**
     * 设置价税合计     
     * @param Double $invoiceAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceAmount( $invoiceAmount) {
        $this->invoiceAmount = $invoiceAmount;
    }
    
        	
    private $invoiceType;
    
        /**
    * @return 发票类型
0：普通发票
1：增值税普通发票
2：增值税专用发票
    */
        public function getInvoiceType() {
        return $this->invoiceType;
    }
    
    /**
     * 设置发票类型
0：普通发票
1：增值税普通发票
2：增值税专用发票     
     * @param Integer $invoiceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceType( $invoiceType) {
        $this->invoiceType = $invoiceType;
    }
    
        	
    private $success;
    
        /**
    * @return 是否开票完成
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否开票完成     
     * @param Boolean $success     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "invoiceId", $this->stdResult )) {
    				$this->invoiceId = $this->stdResult->{"invoiceId"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceCode", $this->stdResult )) {
    				$this->invoiceCode = $this->stdResult->{"invoiceCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceDate", $this->stdResult )) {
    				$this->invoiceDate = $this->stdResult->{"invoiceDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceNakedAmount", $this->stdResult )) {
    				$this->invoiceNakedAmount = $this->stdResult->{"invoiceNakedAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceTaxRate", $this->stdResult )) {
    				$this->invoiceTaxRate = $this->stdResult->{"invoiceTaxRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceTaxAmount", $this->stdResult )) {
    				$this->invoiceTaxAmount = $this->stdResult->{"invoiceTaxAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceAmount", $this->stdResult )) {
    				$this->invoiceAmount = $this->stdResult->{"invoiceAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceType", $this->stdResult )) {
    				$this->invoiceType = $this->stdResult->{"invoiceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "invoiceId", $this->arrayResult )) {
    			$this->invoiceId = $arrayResult['invoiceId'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceCode", $this->arrayResult )) {
    			$this->invoiceCode = $arrayResult['invoiceCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceDate", $this->arrayResult )) {
    			$this->invoiceDate = $arrayResult['invoiceDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceNakedAmount", $this->arrayResult )) {
    			$this->invoiceNakedAmount = $arrayResult['invoiceNakedAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceTaxRate", $this->arrayResult )) {
    			$this->invoiceTaxRate = $arrayResult['invoiceTaxRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceTaxAmount", $this->arrayResult )) {
    			$this->invoiceTaxAmount = $arrayResult['invoiceTaxAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceAmount", $this->arrayResult )) {
    			$this->invoiceAmount = $arrayResult['invoiceAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceType", $this->arrayResult )) {
    			$this->invoiceType = $arrayResult['invoiceType'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}
 
   
}
?>