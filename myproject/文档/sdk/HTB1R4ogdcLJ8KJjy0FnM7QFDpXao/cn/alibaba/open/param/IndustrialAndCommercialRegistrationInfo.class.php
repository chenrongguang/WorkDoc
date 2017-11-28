<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IndustrialAndCommercialRegistrationInfo extends SDKDomain {

       	
    private $name;
    
        /**
    * @return 公司名字
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置公司名字     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $principal;
    
        /**
    * @return 法定代表人/负责人
    */
        public function getPrincipal() {
        return $this->principal;
    }
    
    /**
     * 设置法定代表人/负责人     
     * @param String $principal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrincipal( $principal) {
        $this->principal = $principal;
    }
    
        	
    private $companyAddress;
    
        /**
    * @return 公司注册地址
    */
        public function getCompanyAddress() {
        return $this->companyAddress;
    }
    
    /**
     * 设置公司注册地址     
     * @param String $companyAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyAddress( $companyAddress) {
        $this->companyAddress = $companyAddress;
    }
    
        	
    private $registrationId;
    
        /**
    * @return 工商注册号
    */
        public function getRegistrationId() {
        return $this->registrationId;
    }
    
    /**
     * 设置工商注册号     
     * @param String $registrationId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRegistrationId( $registrationId) {
        $this->registrationId = $registrationId;
    }
    
        	
    private $enterpriseType;
    
        /**
    * @return 公司类型
    */
        public function getEnterpriseType() {
        return $this->enterpriseType;
    }
    
    /**
     * 设置公司类型     
     * @param String $enterpriseType     
     * 参数示例：<pre>有限责任公司</pre>     
     * 此参数必填     */
    public function setEnterpriseType( $enterpriseType) {
        $this->enterpriseType = $enterpriseType;
    }
    
        	
    private $dateOfEstablishment;
    
        /**
    * @return 成立日期
    */
        public function getDateOfEstablishment() {
        return $this->dateOfEstablishment;
    }
    
    /**
     * 设置成立日期     
     * @param String $dateOfEstablishment     
     * 参数示例：<pre>年份</pre>     
     * 此参数必填     */
    public function setDateOfEstablishment( $dateOfEstablishment) {
        $this->dateOfEstablishment = $dateOfEstablishment;
    }
    
        	
    private $registeredCapital;
    
        /**
    * @return 注册资本
    */
        public function getRegisteredCapital() {
        return $this->registeredCapital;
    }
    
    /**
     * 设置注册资本     
     * @param String $registeredCapital     
     * 参数示例：<pre>1000万</pre>     
     * 此参数必填     */
    public function setRegisteredCapital( $registeredCapital) {
        $this->registeredCapital = $registeredCapital;
    }
    
        	
    private $redistrationAuthority;
    
        /**
    * @return 登记机关
    */
        public function getRedistrationAuthority() {
        return $this->redistrationAuthority;
    }
    
    /**
     * 设置登记机关     
     * @param String $redistrationAuthority     
     * 参数示例：<pre>深证市市场监督管理局</pre>     
     * 此参数必填     */
    public function setRedistrationAuthority( $redistrationAuthority) {
        $this->redistrationAuthority = $redistrationAuthority;
    }
    
        	
    private $businessTerm;
    
        /**
    * @return 营业期限
    */
        public function getBusinessTerm() {
        return $this->businessTerm;
    }
    
    /**
     * 设置营业期限     
     * @param String $businessTerm     
     * 参数示例：<pre>起始时间-终止时间</pre>     
     * 此参数必填     */
    public function setBusinessTerm( $businessTerm) {
        $this->businessTerm = $businessTerm;
    }
    
        	
    private $businessScope;
    
        /**
    * @return 经营范围
    */
        public function getBusinessScope() {
        return $this->businessScope;
    }
    
    /**
     * 设置经营范围     
     * @param String $businessScope     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBusinessScope( $businessScope) {
        $this->businessScope = $businessScope;
    }
    
        	
    private $bank;
    
        /**
    * @return 开户银行
    */
        public function getBank() {
        return $this->bank;
    }
    
    /**
     * 设置开户银行     
     * @param String $bank     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBank( $bank) {
        $this->bank = $bank;
    }
    
        	
    private $bankAccount;
    
        /**
    * @return 银行账号
    */
        public function getBankAccount() {
        return $this->bankAccount;
    }
    
    /**
     * 设置银行账号     
     * @param String $bankAccount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBankAccount( $bankAccount) {
        $this->bankAccount = $bankAccount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "principal", $this->stdResult )) {
    				$this->principal = $this->stdResult->{"principal"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyAddress", $this->stdResult )) {
    				$this->companyAddress = $this->stdResult->{"companyAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "registrationId", $this->stdResult )) {
    				$this->registrationId = $this->stdResult->{"registrationId"};
    			}
    			    		    				    			    			if (array_key_exists ( "enterpriseType", $this->stdResult )) {
    				$this->enterpriseType = $this->stdResult->{"enterpriseType"};
    			}
    			    		    				    			    			if (array_key_exists ( "dateOfEstablishment", $this->stdResult )) {
    				$this->dateOfEstablishment = $this->stdResult->{"dateOfEstablishment"};
    			}
    			    		    				    			    			if (array_key_exists ( "registeredCapital", $this->stdResult )) {
    				$this->registeredCapital = $this->stdResult->{"registeredCapital"};
    			}
    			    		    				    			    			if (array_key_exists ( "redistrationAuthority", $this->stdResult )) {
    				$this->redistrationAuthority = $this->stdResult->{"redistrationAuthority"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessTerm", $this->stdResult )) {
    				$this->businessTerm = $this->stdResult->{"businessTerm"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessScope", $this->stdResult )) {
    				$this->businessScope = $this->stdResult->{"businessScope"};
    			}
    			    		    				    			    			if (array_key_exists ( "bank", $this->stdResult )) {
    				$this->bank = $this->stdResult->{"bank"};
    			}
    			    		    				    			    			if (array_key_exists ( "bankAccount", $this->stdResult )) {
    				$this->bankAccount = $this->stdResult->{"bankAccount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "principal", $this->arrayResult )) {
    			$this->principal = $arrayResult['principal'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyAddress", $this->arrayResult )) {
    			$this->companyAddress = $arrayResult['companyAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "registrationId", $this->arrayResult )) {
    			$this->registrationId = $arrayResult['registrationId'];
    			}
    		    	    			    		    			if (array_key_exists ( "enterpriseType", $this->arrayResult )) {
    			$this->enterpriseType = $arrayResult['enterpriseType'];
    			}
    		    	    			    		    			if (array_key_exists ( "dateOfEstablishment", $this->arrayResult )) {
    			$this->dateOfEstablishment = $arrayResult['dateOfEstablishment'];
    			}
    		    	    			    		    			if (array_key_exists ( "registeredCapital", $this->arrayResult )) {
    			$this->registeredCapital = $arrayResult['registeredCapital'];
    			}
    		    	    			    		    			if (array_key_exists ( "redistrationAuthority", $this->arrayResult )) {
    			$this->redistrationAuthority = $arrayResult['redistrationAuthority'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessTerm", $this->arrayResult )) {
    			$this->businessTerm = $arrayResult['businessTerm'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessScope", $this->arrayResult )) {
    			$this->businessScope = $arrayResult['businessScope'];
    			}
    		    	    			    		    			if (array_key_exists ( "bank", $this->arrayResult )) {
    			$this->bank = $arrayResult['bank'];
    			}
    		    	    			    		    			if (array_key_exists ( "bankAccount", $this->arrayResult )) {
    			$this->bankAccount = $arrayResult['bankAccount'];
    			}
    		    	    		}
 
   
}
?>