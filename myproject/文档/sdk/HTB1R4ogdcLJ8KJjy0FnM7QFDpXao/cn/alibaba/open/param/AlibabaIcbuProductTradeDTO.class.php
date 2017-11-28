<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductTradeDTO extends SDKDomain {

       	
    private $port;
    
        /**
    * @return 
    */
        public function getPort() {
        return $this->port;
    }
    
    /**
     * 设置     
     * @param String $port     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPort( $port) {
        $this->port = $port;
    }
    
        	
    private $downPaymentRate;
    
        /**
    * @return 
    */
        public function getDownPaymentRate() {
        return $this->downPaymentRate;
    }
    
    /**
     * 设置     
     * @param Integer $downPaymentRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDownPaymentRate( $downPaymentRate) {
        $this->downPaymentRate = $downPaymentRate;
    }
    
        	
    private $paymentMethodOther;
    
        /**
    * @return 
    */
        public function getPaymentMethodOther() {
        return $this->paymentMethodOther;
    }
    
    /**
     * 设置     
     * @param String $paymentMethodOther     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPaymentMethodOther( $paymentMethodOther) {
        $this->paymentMethodOther = $paymentMethodOther;
    }
    
        	
    private $supplyPeriod;
    
        /**
    * @return 
    */
        public function getSupplyPeriod() {
        return $this->supplyPeriod;
    }
    
    /**
     * 设置     
     * @param String $supplyPeriod     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyPeriod( $supplyPeriod) {
        $this->supplyPeriod = $supplyPeriod;
    }
    
        	
    private $minOrderUnit;
    
        /**
    * @return 
    */
        public function getMinOrderUnit() {
        return $this->minOrderUnit;
    }
    
    /**
     * 设置     
     * @param Integer $minOrderUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOrderUnit( $minOrderUnit) {
        $this->minOrderUnit = $minOrderUnit;
    }
    
        	
    private $supplyUnit;
    
        /**
    * @return 
    */
        public function getSupplyUnit() {
        return $this->supplyUnit;
    }
    
    /**
     * 设置     
     * @param Integer $supplyUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyUnit( $supplyUnit) {
        $this->supplyUnit = $supplyUnit;
    }
    
        	
    private $minOrderOther;
    
        /**
    * @return 
    */
        public function getMinOrderOther() {
        return $this->minOrderOther;
    }
    
    /**
     * 设置     
     * @param String $minOrderOther     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOrderOther( $minOrderOther) {
        $this->minOrderOther = $minOrderOther;
    }
    
        	
    private $priceUnit;
    
        /**
    * @return 
    */
        public function getPriceUnit() {
        return $this->priceUnit;
    }
    
    /**
     * 设置     
     * @param Integer $priceUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPriceUnit( $priceUnit) {
        $this->priceUnit = $priceUnit;
    }
    
        	
    private $packagingDesc;
    
        /**
    * @return 
    */
        public function getPackagingDesc() {
        return $this->packagingDesc;
    }
    
    /**
     * 设置     
     * @param String $packagingDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPackagingDesc( $packagingDesc) {
        $this->packagingDesc = $packagingDesc;
    }
    
        	
    private $supplyOther;
    
        /**
    * @return 
    */
        public function getSupplyOther() {
        return $this->supplyOther;
    }
    
    /**
     * 设置     
     * @param String $supplyOther     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyOther( $supplyOther) {
        $this->supplyOther = $supplyOther;
    }
    
        	
    private $consignmentDate;
    
        /**
    * @return 
    */
        public function getConsignmentDate() {
        return $this->consignmentDate;
    }
    
    /**
     * 设置     
     * @param Integer $consignmentDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignmentDate( $consignmentDate) {
        $this->consignmentDate = $consignmentDate;
    }
    
        	
    private $priceRange;
    
        /**
    * @return 
    */
        public function getPriceRange() {
        return $this->priceRange;
    }
    
    /**
     * 设置     
     * @param String $priceRange     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPriceRange( $priceRange) {
        $this->priceRange = $priceRange;
    }
    
        	
    private $assuranceType;
    
        /**
    * @return 
    */
        public function getAssuranceType() {
        return $this->assuranceType;
    }
    
    /**
     * 设置     
     * @param String $assuranceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAssuranceType( $assuranceType) {
        $this->assuranceType = $assuranceType;
    }
    
        	
    private $consignmentTerm;
    
        /**
    * @return 
    */
        public function getConsignmentTerm() {
        return $this->consignmentTerm;
    }
    
    /**
     * 设置     
     * @param String $consignmentTerm     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignmentTerm( $consignmentTerm) {
        $this->consignmentTerm = $consignmentTerm;
    }
    
        	
    private $supplyQuantity;
    
        /**
    * @return 
    */
        public function getSupplyQuantity() {
        return $this->supplyQuantity;
    }
    
    /**
     * 设置     
     * @param String $supplyQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyQuantity( $supplyQuantity) {
        $this->supplyQuantity = $supplyQuantity;
    }
    
        	
    private $minOrderQuantity;
    
        /**
    * @return 
    */
        public function getMinOrderQuantity() {
        return $this->minOrderQuantity;
    }
    
    /**
     * 设置     
     * @param String $minOrderQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinOrderQuantity( $minOrderQuantity) {
        $this->minOrderQuantity = $minOrderQuantity;
    }
    
        	
    private $paymentMethod;
    
        /**
    * @return 
    */
        public function getPaymentMethod() {
        return $this->paymentMethod;
    }
    
    /**
     * 设置     
     * @param String $paymentMethod     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPaymentMethod( $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }
    
        	
    private $moneyType;
    
        /**
    * @return 
    */
        public function getMoneyType() {
        return $this->moneyType;
    }
    
    /**
     * 设置     
     * @param Integer $moneyType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMoneyType( $moneyType) {
        $this->moneyType = $moneyType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "port", $this->stdResult )) {
    				$this->port = $this->stdResult->{"port"};
    			}
    			    		    				    			    			if (array_key_exists ( "downPaymentRate", $this->stdResult )) {
    				$this->downPaymentRate = $this->stdResult->{"downPaymentRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "paymentMethodOther", $this->stdResult )) {
    				$this->paymentMethodOther = $this->stdResult->{"paymentMethodOther"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyPeriod", $this->stdResult )) {
    				$this->supplyPeriod = $this->stdResult->{"supplyPeriod"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOrderUnit", $this->stdResult )) {
    				$this->minOrderUnit = $this->stdResult->{"minOrderUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyUnit", $this->stdResult )) {
    				$this->supplyUnit = $this->stdResult->{"supplyUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOrderOther", $this->stdResult )) {
    				$this->minOrderOther = $this->stdResult->{"minOrderOther"};
    			}
    			    		    				    			    			if (array_key_exists ( "priceUnit", $this->stdResult )) {
    				$this->priceUnit = $this->stdResult->{"priceUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "packagingDesc", $this->stdResult )) {
    				$this->packagingDesc = $this->stdResult->{"packagingDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyOther", $this->stdResult )) {
    				$this->supplyOther = $this->stdResult->{"supplyOther"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignmentDate", $this->stdResult )) {
    				$this->consignmentDate = $this->stdResult->{"consignmentDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "priceRange", $this->stdResult )) {
    				$this->priceRange = $this->stdResult->{"priceRange"};
    			}
    			    		    				    			    			if (array_key_exists ( "assuranceType", $this->stdResult )) {
    				$this->assuranceType = $this->stdResult->{"assuranceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignmentTerm", $this->stdResult )) {
    				$this->consignmentTerm = $this->stdResult->{"consignmentTerm"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyQuantity", $this->stdResult )) {
    				$this->supplyQuantity = $this->stdResult->{"supplyQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "minOrderQuantity", $this->stdResult )) {
    				$this->minOrderQuantity = $this->stdResult->{"minOrderQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "paymentMethod", $this->stdResult )) {
    				$this->paymentMethod = $this->stdResult->{"paymentMethod"};
    			}
    			    		    				    			    			if (array_key_exists ( "moneyType", $this->stdResult )) {
    				$this->moneyType = $this->stdResult->{"moneyType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "port", $this->arrayResult )) {
    			$this->port = $arrayResult['port'];
    			}
    		    	    			    		    			if (array_key_exists ( "downPaymentRate", $this->arrayResult )) {
    			$this->downPaymentRate = $arrayResult['downPaymentRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "paymentMethodOther", $this->arrayResult )) {
    			$this->paymentMethodOther = $arrayResult['paymentMethodOther'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyPeriod", $this->arrayResult )) {
    			$this->supplyPeriod = $arrayResult['supplyPeriod'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOrderUnit", $this->arrayResult )) {
    			$this->minOrderUnit = $arrayResult['minOrderUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyUnit", $this->arrayResult )) {
    			$this->supplyUnit = $arrayResult['supplyUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOrderOther", $this->arrayResult )) {
    			$this->minOrderOther = $arrayResult['minOrderOther'];
    			}
    		    	    			    		    			if (array_key_exists ( "priceUnit", $this->arrayResult )) {
    			$this->priceUnit = $arrayResult['priceUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "packagingDesc", $this->arrayResult )) {
    			$this->packagingDesc = $arrayResult['packagingDesc'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyOther", $this->arrayResult )) {
    			$this->supplyOther = $arrayResult['supplyOther'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignmentDate", $this->arrayResult )) {
    			$this->consignmentDate = $arrayResult['consignmentDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "priceRange", $this->arrayResult )) {
    			$this->priceRange = $arrayResult['priceRange'];
    			}
    		    	    			    		    			if (array_key_exists ( "assuranceType", $this->arrayResult )) {
    			$this->assuranceType = $arrayResult['assuranceType'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignmentTerm", $this->arrayResult )) {
    			$this->consignmentTerm = $arrayResult['consignmentTerm'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyQuantity", $this->arrayResult )) {
    			$this->supplyQuantity = $arrayResult['supplyQuantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "minOrderQuantity", $this->arrayResult )) {
    			$this->minOrderQuantity = $arrayResult['minOrderQuantity'];
    			}
    		    	    			    		    			if (array_key_exists ( "paymentMethod", $this->arrayResult )) {
    			$this->paymentMethod = $arrayResult['paymentMethod'];
    			}
    		    	    			    		    			if (array_key_exists ( "moneyType", $this->arrayResult )) {
    			$this->moneyType = $arrayResult['moneyType'];
    			}
    		    	    		}
 
   
}
?>