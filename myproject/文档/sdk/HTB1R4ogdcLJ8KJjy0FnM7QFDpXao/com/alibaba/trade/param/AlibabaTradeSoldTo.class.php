<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressAddress.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonContact.class.php');

class AlibabaTradeSoldTo extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置     
     * @param AlibabaAddressAddress $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress(AlibabaAddressAddress $address) {
        $this->address = $address;
    }
    
        	
    private $contact;
    
        /**
    * @return 
    */
        public function getContact() {
        return $this->contact;
    }
    
    /**
     * 设置     
     * @param AlibabaCommonContact $contact     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContact(AlibabaCommonContact $contact) {
        $this->contact = $contact;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$addressResult=$this->stdResult->{"address"};
    				$this->address = new AlibabaAddressAddress();
    				$this->address->setStdResult ( $addressResult);
    			}
    			    		    				    			    			if (array_key_exists ( "contact", $this->stdResult )) {
    				$contactResult=$this->stdResult->{"contact"};
    				$this->contact = new AlibabaCommonContact();
    				$this->contact->setStdResult ( $contactResult);
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
    		    	    			    		    		if (array_key_exists ( "contact", $this->arrayResult )) {
    		$contactResult=$arrayResult['contact'];
    			    			$this->contact = new AlibabaCommonContact();
    			    			$this->contact->setStdResult ( $contactResult);
    		}
    		    	    		}
 
   
}
?>