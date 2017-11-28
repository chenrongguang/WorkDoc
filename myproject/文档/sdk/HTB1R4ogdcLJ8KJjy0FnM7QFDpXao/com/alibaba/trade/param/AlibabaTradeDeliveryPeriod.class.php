<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonPeriod.class.php');

class AlibabaTradeDeliveryPeriod extends SDKDomain {

       	
    private $expectPeriod;
    
        /**
    * @return 期望的交付周期
    */
        public function getExpectPeriod() {
        return $this->expectPeriod;
    }
    
    /**
     * 设置期望的交付周期     
     * @param AlibabaCommonPeriod $expectPeriod     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExpectPeriod(AlibabaCommonPeriod $expectPeriod) {
        $this->expectPeriod = $expectPeriod;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "expectPeriod", $this->stdResult )) {
    				$expectPeriodResult=$this->stdResult->{"expectPeriod"};
    				$this->expectPeriod = new AlibabaCommonPeriod();
    				$this->expectPeriod->setStdResult ( $expectPeriodResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "expectPeriod", $this->arrayResult )) {
    		$expectPeriodResult=$arrayResult['expectPeriod'];
    			    			$this->expectPeriod = new AlibabaCommonPeriod();
    			    			$this->expectPeriod->setStdResult ( $expectPeriodResult);
    		}
    		    	    		}
 
   
}
?>