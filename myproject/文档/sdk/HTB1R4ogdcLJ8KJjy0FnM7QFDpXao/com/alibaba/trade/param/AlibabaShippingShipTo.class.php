<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaShippingCarrierIdentifier.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressAddress.class.php');

class AlibabaShippingShipTo extends SDKDomain {

       	
    private $expectCarrierIdentifier;
    
        /**
    * @return 买家期望的物流方式
    */
        public function getExpectCarrierIdentifier() {
        return $this->expectCarrierIdentifier;
    }
    
    /**
     * 设置买家期望的物流方式     
     * @param array include @see AlibabaShippingCarrierIdentifier[] $expectCarrierIdentifier     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExpectCarrierIdentifier(AlibabaShippingCarrierIdentifier $expectCarrierIdentifier) {
        $this->expectCarrierIdentifier = $expectCarrierIdentifier;
    }
    
        	
    private $address;
    
        /**
    * @return 收货地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置收货地址     
     * @param AlibabaAddressAddress $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress(AlibabaAddressAddress $address) {
        $this->address = $address;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "expectCarrierIdentifier", $this->stdResult )) {
    			$expectCarrierIdentifierResult=$this->stdResult->{"expectCarrierIdentifier"};
    				$object = json_decode ( json_encode ( $expectCarrierIdentifierResult ), true );
					$this->expectCarrierIdentifier = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaShippingCarrierIdentifierResult=new AlibabaShippingCarrierIdentifier();
						$AlibabaShippingCarrierIdentifierResult->setArrayResult($arrayobject );
						$this->expectCarrierIdentifier [$i] = $AlibabaShippingCarrierIdentifierResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$addressResult=$this->stdResult->{"address"};
    				$this->address = new AlibabaAddressAddress();
    				$this->address->setStdResult ( $addressResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "expectCarrierIdentifier", $this->arrayResult )) {
    		$expectCarrierIdentifierResult=$arrayResult['expectCarrierIdentifier'];
    			$this->expectCarrierIdentifier = new AlibabaShippingCarrierIdentifier();
    			$this->expectCarrierIdentifier->setStdResult ( $expectCarrierIdentifierResult);
    		}
    		    	    			    		    		if (array_key_exists ( "address", $this->arrayResult )) {
    		$addressResult=$arrayResult['address'];
    			    			$this->address = new AlibabaAddressAddress();
    			    			$this->address->setStdResult ( $addressResult);
    		}
    		    	    		}
 
   
}
?>