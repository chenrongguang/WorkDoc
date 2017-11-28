<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ContactInfo extends SDKDomain {

       	
    private $name;
    
        /**
    * @return 姓名
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置姓名     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $mobile;
    
        /**
    * @return 手机
    */
        public function getMobile() {
        return $this->mobile;
    }
    
    /**
     * 设置手机     
     * @param String $mobile     
     * 参数示例：<pre>返回一个手机号码</pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }
    
        	
    private $gender;
    
        /**
    * @return 性别
    */
        public function getGender() {
        return $this->gender;
    }
    
    /**
     * 设置性别     
     * @param String $gender     
     * 参数示例：<pre>F/M</pre>     
     * 此参数必填     */
    public function setGender( $gender) {
        $this->gender = $gender;
    }
    
        	
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
     * 参数示例：<pre>返回一个固定电话.
[国家区号][地区区]固定电话</pre>     
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
     * 参数示例：<pre>返回一个传真电话.
[国家区号][地区区]传真电话</pre>     
     * 此参数必填     */
    public function setFax( $fax) {
        $this->fax = $fax;
    }
    
        	
    private $zipCode;
    
        /**
    * @return 邮政编码
    */
        public function getZipCode() {
        return $this->zipCode;
    }
    
    /**
     * 设置邮政编码     
     * @param String $zipCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setZipCode( $zipCode) {
        $this->zipCode = $zipCode;
    }
    
        	
    private $contactAddress;
    
        /**
    * @return 联系地址
    */
        public function getContactAddress() {
        return $this->contactAddress;
    }
    
    /**
     * 设置联系地址     
     * @param String $contactAddress     
     * 参数示例：<pre>[国家名][地级市][县级市][街道地址]</pre>     
     * 此参数必填     */
    public function setContactAddress( $contactAddress) {
        $this->contactAddress = $contactAddress;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "gender", $this->stdResult )) {
    				$this->gender = $this->stdResult->{"gender"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "fax", $this->stdResult )) {
    				$this->fax = $this->stdResult->{"fax"};
    			}
    			    		    				    			    			if (array_key_exists ( "zipCode", $this->stdResult )) {
    				$this->zipCode = $this->stdResult->{"zipCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactAddress", $this->stdResult )) {
    				$this->contactAddress = $this->stdResult->{"contactAddress"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['mobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "gender", $this->arrayResult )) {
    			$this->gender = $arrayResult['gender'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['phone'];
    			}
    		    	    			    		    			if (array_key_exists ( "fax", $this->arrayResult )) {
    			$this->fax = $arrayResult['fax'];
    			}
    		    	    			    		    			if (array_key_exists ( "zipCode", $this->arrayResult )) {
    			$this->zipCode = $arrayResult['zipCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "contactAddress", $this->arrayResult )) {
    			$this->contactAddress = $arrayResult['contactAddress'];
    			}
    		    	    		}
 
   
}
?>