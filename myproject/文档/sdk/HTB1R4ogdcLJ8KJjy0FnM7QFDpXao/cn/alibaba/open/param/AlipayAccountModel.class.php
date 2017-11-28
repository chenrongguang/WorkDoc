<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlipayAccountModel extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置     
     * @param String $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $userId;
    
        /**
    * @return 
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置     
     * @param String $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $mobile;
    
        /**
    * @return 
    */
        public function getMobile() {
        return $this->mobile;
    }
    
    /**
     * 设置     
     * @param String $mobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }
    
        	
    private $gender;
    
        /**
    * @return 
    */
        public function getGender() {
        return $this->gender;
    }
    
    /**
     * 设置     
     * @param String $gender     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGender( $gender) {
        $this->gender = $gender;
    }
    
        	
    private $firmName;
    
        /**
    * @return 
    */
        public function getFirmName() {
        return $this->firmName;
    }
    
    /**
     * 设置     
     * @param String $firmName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFirmName( $firmName) {
        $this->firmName = $firmName;
    }
    
        	
    private $realName;
    
        /**
    * @return 
    */
        public function getRealName() {
        return $this->realName;
    }
    
    /**
     * 设置     
     * @param String $realName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealName( $realName) {
        $this->realName = $realName;
    }
    
        	
    private $certNo;
    
        /**
    * @return 
    */
        public function getCertNo() {
        return $this->certNo;
    }
    
    /**
     * 设置     
     * @param String $certNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCertNo( $certNo) {
        $this->certNo = $certNo;
    }
    
        	
    private $certType;
    
        /**
    * @return 
    */
        public function getCertType() {
        return $this->certType;
    }
    
    /**
     * 设置     
     * @param String $certType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCertType( $certType) {
        $this->certType = $certType;
    }
    
        	
    private $province;
    
        /**
    * @return 
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置     
     * @param String $province     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $city;
    
        /**
    * @return 
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置     
     * @param String $city     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $zip;
    
        /**
    * @return 
    */
        public function getZip() {
        return $this->zip;
    }
    
    /**
     * 设置     
     * @param String $zip     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setZip( $zip) {
        $this->zip = $zip;
    }
    
        	
    private $phone;
    
        /**
    * @return 
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置     
     * @param String $phone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $certifyGrade;
    
        /**
    * @return 
    */
        public function getCertifyGrade() {
        return $this->certifyGrade;
    }
    
    /**
     * 设置     
     * @param String $certifyGrade     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCertifyGrade( $certifyGrade) {
        $this->certifyGrade = $certifyGrade;
    }
    
        	
    private $loginId;
    
        /**
    * @return 
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置     
     * @param String $loginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $alipayAccountType;
    
        /**
    * @return 
    */
        public function getAlipayAccountType() {
        return $this->alipayAccountType;
    }
    
    /**
     * 设置     
     * @param String $alipayAccountType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayAccountType( $alipayAccountType) {
        $this->alipayAccountType = $alipayAccountType;
    }
    
        	
    private $alipayAccountStatus;
    
        /**
    * @return 
    */
        public function getAlipayAccountStatus() {
        return $this->alipayAccountStatus;
    }
    
    /**
     * 设置     
     * @param String $alipayAccountStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayAccountStatus( $alipayAccountStatus) {
        $this->alipayAccountStatus = $alipayAccountStatus;
    }
    
        	
    private $enablePayment;
    
        /**
    * @return 
    */
        public function getEnablePayment() {
        return $this->enablePayment;
    }
    
    /**
     * 设置     
     * @param Boolean $enablePayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEnablePayment( $enablePayment) {
        $this->enablePayment = $enablePayment;
    }
    
        	
    private $bankAuth;
    
        /**
    * @return 
    */
        public function getBankAuth() {
        return $this->bankAuth;
    }
    
    /**
     * 设置     
     * @param Boolean $bankAuth     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBankAuth( $bankAuth) {
        $this->bankAuth = $bankAuth;
    }
    
        	
    private $mobileAuth;
    
        /**
    * @return 
    */
        public function getMobileAuth() {
        return $this->mobileAuth;
    }
    
    /**
     * 设置     
     * @param Boolean $mobileAuth     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobileAuth( $mobileAuth) {
        $this->mobileAuth = $mobileAuth;
    }
    
        	
    private $certified;
    
        /**
    * @return 
    */
        public function getCertified() {
        return $this->certified;
    }
    
    /**
     * 设置     
     * @param Boolean $certified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCertified( $certified) {
        $this->certified = $certified;
    }
    
        	
    private $blackList;
    
        /**
    * @return 
    */
        public function getBlackList() {
        return $this->blackList;
    }
    
    /**
     * 设置     
     * @param Boolean $blackList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBlackList( $blackList) {
        $this->blackList = $blackList;
    }
    
        	
    private $mobileBinding;
    
        /**
    * @return 
    */
        public function getMobileBinding() {
        return $this->mobileBinding;
    }
    
    /**
     * 设置     
     * @param Boolean $mobileBinding     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobileBinding( $mobileBinding) {
        $this->mobileBinding = $mobileBinding;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "gender", $this->stdResult )) {
    				$this->gender = $this->stdResult->{"gender"};
    			}
    			    		    				    			    			if (array_key_exists ( "firmName", $this->stdResult )) {
    				$this->firmName = $this->stdResult->{"firmName"};
    			}
    			    		    				    			    			if (array_key_exists ( "realName", $this->stdResult )) {
    				$this->realName = $this->stdResult->{"realName"};
    			}
    			    		    				    			    			if (array_key_exists ( "certNo", $this->stdResult )) {
    				$this->certNo = $this->stdResult->{"certNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "certType", $this->stdResult )) {
    				$this->certType = $this->stdResult->{"certType"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "zip", $this->stdResult )) {
    				$this->zip = $this->stdResult->{"zip"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "certifyGrade", $this->stdResult )) {
    				$this->certifyGrade = $this->stdResult->{"certifyGrade"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayAccountType", $this->stdResult )) {
    				$this->alipayAccountType = $this->stdResult->{"alipayAccountType"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayAccountStatus", $this->stdResult )) {
    				$this->alipayAccountStatus = $this->stdResult->{"alipayAccountStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "enablePayment", $this->stdResult )) {
    				$this->enablePayment = $this->stdResult->{"enablePayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "bankAuth", $this->stdResult )) {
    				$this->bankAuth = $this->stdResult->{"bankAuth"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobileAuth", $this->stdResult )) {
    				$this->mobileAuth = $this->stdResult->{"mobileAuth"};
    			}
    			    		    				    			    			if (array_key_exists ( "certified", $this->stdResult )) {
    				$this->certified = $this->stdResult->{"certified"};
    			}
    			    		    				    			    			if (array_key_exists ( "blackList", $this->stdResult )) {
    				$this->blackList = $this->stdResult->{"blackList"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobileBinding", $this->stdResult )) {
    				$this->mobileBinding = $this->stdResult->{"mobileBinding"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['address'];
    			}
    		    	    			    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['mobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "gender", $this->arrayResult )) {
    			$this->gender = $arrayResult['gender'];
    			}
    		    	    			    		    			if (array_key_exists ( "firmName", $this->arrayResult )) {
    			$this->firmName = $arrayResult['firmName'];
    			}
    		    	    			    		    			if (array_key_exists ( "realName", $this->arrayResult )) {
    			$this->realName = $arrayResult['realName'];
    			}
    		    	    			    		    			if (array_key_exists ( "certNo", $this->arrayResult )) {
    			$this->certNo = $arrayResult['certNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "certType", $this->arrayResult )) {
    			$this->certType = $arrayResult['certType'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['province'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['city'];
    			}
    		    	    			    		    			if (array_key_exists ( "zip", $this->arrayResult )) {
    			$this->zip = $arrayResult['zip'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['phone'];
    			}
    		    	    			    		    			if (array_key_exists ( "certifyGrade", $this->arrayResult )) {
    			$this->certifyGrade = $arrayResult['certifyGrade'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['loginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayAccountType", $this->arrayResult )) {
    			$this->alipayAccountType = $arrayResult['alipayAccountType'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayAccountStatus", $this->arrayResult )) {
    			$this->alipayAccountStatus = $arrayResult['alipayAccountStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "enablePayment", $this->arrayResult )) {
    			$this->enablePayment = $arrayResult['enablePayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "bankAuth", $this->arrayResult )) {
    			$this->bankAuth = $arrayResult['bankAuth'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobileAuth", $this->arrayResult )) {
    			$this->mobileAuth = $arrayResult['mobileAuth'];
    			}
    		    	    			    		    			if (array_key_exists ( "certified", $this->arrayResult )) {
    			$this->certified = $arrayResult['certified'];
    			}
    		    	    			    		    			if (array_key_exists ( "blackList", $this->arrayResult )) {
    			$this->blackList = $arrayResult['blackList'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobileBinding", $this->arrayResult )) {
    			$this->mobileBinding = $arrayResult['mobileBinding'];
    			}
    		    	    		}
 
   
}
?>