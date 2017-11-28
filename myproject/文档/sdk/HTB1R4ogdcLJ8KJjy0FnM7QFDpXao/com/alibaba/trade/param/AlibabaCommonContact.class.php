<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressPostalAddress.class.php');

class AlibabaCommonContact extends SDKDomain {

       	
    private $phone;
    
        /**
    * @return 电话
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置电话     
     * @param String $phone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $fax;
    
        /**
    * @return 传真
    */
        public function getFax() {
        return $this->fax;
    }
    
    /**
     * 设置传真     
     * @param String $fax     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFax( $fax) {
        $this->fax = $fax;
    }
    
        	
    private $email;
    
        /**
    * @return 邮件
    */
        public function getEmail() {
        return $this->email;
    }
    
    /**
     * 设置邮件     
     * @param String $email     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEmail( $email) {
        $this->email = $email;
    }
    
        	
    private $name;
    
        /**
    * @return 联系人姓名
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置联系人姓名     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $role;
    
        /**
    * @return 在交易流程中，该联系人的角色
    */
        public function getRole() {
        return $this->role;
    }
    
    /**
     * 设置在交易流程中，该联系人的角色     
     * @param String $role     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRole( $role) {
        $this->role = $role;
    }
    
        	
    private $url;
    
        /**
    * @return 
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置     
     * @param String $url     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $mobile;
    
        /**
    * @return 手机号
    */
        public function getMobile() {
        return $this->mobile;
    }
    
    /**
     * 设置手机号     
     * @param String $mobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }
    
        	
    private $postalAddress;
    
        /**
    * @return 
    */
        public function getPostalAddress() {
        return $this->postalAddress;
    }
    
    /**
     * 设置     
     * @param AlibabaAddressPostalAddress $postalAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostalAddress(AlibabaAddressPostalAddress $postalAddress) {
        $this->postalAddress = $postalAddress;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "fax", $this->stdResult )) {
    				$this->fax = $this->stdResult->{"fax"};
    			}
    			    		    				    			    			if (array_key_exists ( "email", $this->stdResult )) {
    				$this->email = $this->stdResult->{"email"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "role", $this->stdResult )) {
    				$this->role = $this->stdResult->{"role"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "postalAddress", $this->stdResult )) {
    				$postalAddressResult=$this->stdResult->{"postalAddress"};
    				$this->postalAddress = new AlibabaAddressPostalAddress();
    				$this->postalAddress->setStdResult ( $postalAddressResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['phone'];
    			}
    		    	    			    		    			if (array_key_exists ( "fax", $this->arrayResult )) {
    			$this->fax = $arrayResult['fax'];
    			}
    		    	    			    		    			if (array_key_exists ( "email", $this->arrayResult )) {
    			$this->email = $arrayResult['email'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "role", $this->arrayResult )) {
    			$this->role = $arrayResult['role'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['mobile'];
    			}
    		    	    			    		    		if (array_key_exists ( "postalAddress", $this->arrayResult )) {
    		$postalAddressResult=$arrayResult['postalAddress'];
    			    			$this->postalAddress = new AlibabaAddressPostalAddress();
    			    			$this->postalAddress->setStdResult ( $postalAddressResult);
    		}
    		    	    		}
 
   
}
?>