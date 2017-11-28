<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BusinessAbility extends SDKDomain {

       	
    private $employeesCount;
    
        /**
    * @return 员工人数
    */
        public function getEmployeesCount() {
        return $this->employeesCount;
    }
    
    /**
     * 设置员工人数     
     * @param String $employeesCount     
     * 参数示例：<pre>xx-xxx人</pre>     
     * 此参数必填     */
    public function setEmployeesCount( $employeesCount) {
        $this->employeesCount = $employeesCount;
    }
    
        	
    private $strokeCountIn90days;
    
        /**
    * @return 90天累计成交笔数
    */
        public function getStrokeCountIn90days() {
        return $this->strokeCountIn90days;
    }
    
    /**
     * 设置90天累计成交笔数     
     * @param Long $strokeCountIn90days     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStrokeCountIn90days( $strokeCountIn90days) {
        $this->strokeCountIn90days = $strokeCountIn90days;
    }
    
        	
    private $hasMingQiBuyer;
    
        /**
    * @return 是否为名企供过货标识
    */
        public function getHasMingQiBuyer() {
        return $this->hasMingQiBuyer;
    }
    
    /**
     * 设置是否为名企供过货标识     
     * @param Boolean $hasMingQiBuyer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHasMingQiBuyer( $hasMingQiBuyer) {
        $this->hasMingQiBuyer = $hasMingQiBuyer;
    }
    
        	
    private $buyerProtected;
    
        /**
    * @return 是否支持买家保障
    */
        public function getBuyerProtected() {
        return $this->buyerProtected;
    }
    
    /**
     * 设置是否支持买家保障     
     * @param Boolean $buyerProtected     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerProtected( $buyerProtected) {
        $this->buyerProtected = $buyerProtected;
    }
    
        	
    private $vatInvoice;
    
        /**
    * @return 是否支持增值税发票
    */
        public function getVatInvoice() {
        return $this->vatInvoice;
    }
    
    /**
     * 设置是否支持增值税发票     
     * @param Boolean $vatInvoice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVatInvoice( $vatInvoice) {
        $this->vatInvoice = $vatInvoice;
    }
    
        	
    private $bindAlipay;
    
        /**
    * @return 是否支持支付宝
    */
        public function getBindAlipay() {
        return $this->bindAlipay;
    }
    
    /**
     * 设置是否支持支付宝     
     * @param Boolean $bindAlipay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBindAlipay( $bindAlipay) {
        $this->bindAlipay = $bindAlipay;
    }
    
        	
    private $alipayType;
    
        /**
    * @return 支付宝类型
    */
        public function getAlipayType() {
        return $this->alipayType;
    }
    
    /**
     * 设置支付宝类型     
     * @param String $alipayType     
     * 参数示例：<pre>企业支付宝,个人支付宝</pre>     
     * 此参数必填     */
    public function setAlipayType( $alipayType) {
        $this->alipayType = $alipayType;
    }
    
        	
    private $hasTaobaoSeller;
    
        /**
    * @return 是否为淘宝卖家供过货标识
    */
        public function getHasTaobaoSeller() {
        return $this->hasTaobaoSeller;
    }
    
    /**
     * 设置是否为淘宝卖家供过货标识     
     * @param Boolean $hasTaobaoSeller     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHasTaobaoSeller( $hasTaobaoSeller) {
        $this->hasTaobaoSeller = $hasTaobaoSeller;
    }
    
        	
    private $strokeBuyerCount90days;
    
        /**
    * @return 90天累计成交买家数
    */
        public function getStrokeBuyerCount90days() {
        return $this->strokeBuyerCount90days;
    }
    
    /**
     * 设置90天累计成交买家数     
     * @param Long $strokeBuyerCount90days     
     * 参数示例：<pre>返回结果为换算成自然数的百分比结果.范围0-100.分数越高越好</pre>     
     * 此参数必填     */
    public function setStrokeBuyerCount90days( $strokeBuyerCount90days) {
        $this->strokeBuyerCount90days = $strokeBuyerCount90days;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "employeesCount", $this->stdResult )) {
    				$this->employeesCount = $this->stdResult->{"employeesCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "strokeCountIn90days", $this->stdResult )) {
    				$this->strokeCountIn90days = $this->stdResult->{"strokeCountIn90days"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasMingQiBuyer", $this->stdResult )) {
    				$this->hasMingQiBuyer = $this->stdResult->{"hasMingQiBuyer"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerProtected", $this->stdResult )) {
    				$this->buyerProtected = $this->stdResult->{"buyerProtected"};
    			}
    			    		    				    			    			if (array_key_exists ( "vatInvoice", $this->stdResult )) {
    				$this->vatInvoice = $this->stdResult->{"vatInvoice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bindAlipay", $this->stdResult )) {
    				$this->bindAlipay = $this->stdResult->{"bindAlipay"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayType", $this->stdResult )) {
    				$this->alipayType = $this->stdResult->{"alipayType"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasTaobaoSeller", $this->stdResult )) {
    				$this->hasTaobaoSeller = $this->stdResult->{"hasTaobaoSeller"};
    			}
    			    		    				    			    			if (array_key_exists ( "strokeBuyerCount90days", $this->stdResult )) {
    				$this->strokeBuyerCount90days = $this->stdResult->{"strokeBuyerCount90days"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "employeesCount", $this->arrayResult )) {
    			$this->employeesCount = $arrayResult['employeesCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "strokeCountIn90days", $this->arrayResult )) {
    			$this->strokeCountIn90days = $arrayResult['strokeCountIn90days'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasMingQiBuyer", $this->arrayResult )) {
    			$this->hasMingQiBuyer = $arrayResult['hasMingQiBuyer'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerProtected", $this->arrayResult )) {
    			$this->buyerProtected = $arrayResult['buyerProtected'];
    			}
    		    	    			    		    			if (array_key_exists ( "vatInvoice", $this->arrayResult )) {
    			$this->vatInvoice = $arrayResult['vatInvoice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bindAlipay", $this->arrayResult )) {
    			$this->bindAlipay = $arrayResult['bindAlipay'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayType", $this->arrayResult )) {
    			$this->alipayType = $arrayResult['alipayType'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasTaobaoSeller", $this->arrayResult )) {
    			$this->hasTaobaoSeller = $arrayResult['hasTaobaoSeller'];
    			}
    		    	    			    		    			if (array_key_exists ( "strokeBuyerCount90days", $this->arrayResult )) {
    			$this->strokeBuyerCount90days = $arrayResult['strokeBuyerCount90days'];
    			}
    		    	    		}
 
   
}
?>