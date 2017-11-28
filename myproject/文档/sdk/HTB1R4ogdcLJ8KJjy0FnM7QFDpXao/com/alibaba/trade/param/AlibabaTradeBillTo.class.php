<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressAddress.class.php');

class AlibabaTradeBillTo extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 发票收货地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置发票收货地址     
     * @param AlibabaAddressAddress $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress(AlibabaAddressAddress $address) {
        $this->address = $address;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$addressResult=$this->stdResult->{"address"};
    				$this->address = new AlibabaAddressAddress();
    				$this->address->setStdResult ( $addressResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "address", $this->arrayResult )) {
    		$addressResult=$arrayResult['address'];
    			    			$this->address = new AlibabaAddressAddress();
    			    			$this->address->setStdResult ( $addressResult);
    		}
    		    	    		}
 
   
}
?>