<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductRateMoney extends SDKDomain {

       	
    private $cent;
    
        /**
    * @return 
    */
        public function getCent() {
        return $this->cent;
    }
    
    /**
     * 设置     
     * @param Long $cent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCent( $cent) {
        $this->cent = $cent;
    }
    
        	
    private $amount;
    
        /**
    * @return 
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置     
     * @param BigDecimal $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "cent", $this->stdResult )) {
    				$this->cent = $this->stdResult->{"cent"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "cent", $this->arrayResult )) {
    			$this->cent = $arrayResult['cent'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    		}
 
   
}
?>