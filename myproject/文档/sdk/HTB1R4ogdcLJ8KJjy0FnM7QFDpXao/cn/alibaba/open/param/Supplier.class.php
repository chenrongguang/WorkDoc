<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CompanyInfo.class.php');
include_once ('cn/alibaba/open/param/BusinessInfo.class.php');
include_once ('cn/alibaba/open/param/BusinessAbility.class.php');
include_once ('cn/alibaba/open/param/CompanyCredit.class.php');
include_once ('cn/alibaba/open/param/ContactInfo.class.php');

class Supplier extends SDKDomain {

       	
    private $companyInfo;
    
        /**
    * @return 供应商公司信息{
	诚信通会员标识;
	政府邀约供应商标识;
	工商注册信息{
		公司名字;
		法定代表人/负责人;
		公司注册地址;
		工商注册号;
		公司类型;
		成立日期;
		注册资本;
		登记机关;
		营业期限;
		经营范围
	}
}
    */
        public function getCompanyInfo() {
        return $this->companyInfo;
    }
    
    /**
     * 设置供应商公司信息{
	诚信通会员标识;
	政府邀约供应商标识;
	工商注册信息{
		公司名字;
		法定代表人/负责人;
		公司注册地址;
		工商注册号;
		公司类型;
		成立日期;
		注册资本;
		登记机关;
		营业期限;
		经营范围
	}
}     
     * @param CompanyInfo $companyInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyInfo(CompanyInfo $companyInfo) {
        $this->companyInfo = $companyInfo;
    }
    
        	
    private $businessInfo;
    
        /**
    * @return 供应商经营信息{
    经营模式;
    主营行业;
    主营产品/服务;
    品牌名称;
    经营地址
}
    */
        public function getBusinessInfo() {
        return $this->businessInfo;
    }
    
    /**
     * 设置供应商经营信息{
    经营模式;
    主营行业;
    主营产品/服务;
    品牌名称;
    经营地址
}     
     * @param BusinessInfo $businessInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBusinessInfo(BusinessInfo $businessInfo) {
        $this->businessInfo = $businessInfo;
    }
    
        	
    private $businessAbility;
    
        /**
    * @return 供应商经营能力{
    员工人数;
    90天累计成交笔数;
    为名企供过货;
    支持买家保障;
    支持增值税发票;
    支持支付宝;
    支付宝类型;
    为淘宝卖家供过货;
    90天累计成交买家数
}
    */
        public function getBusinessAbility() {
        return $this->businessAbility;
    }
    
    /**
     * 设置供应商经营能力{
    员工人数;
    90天累计成交笔数;
    为名企供过货;
    支持买家保障;
    支持增值税发票;
    支持支付宝;
    支付宝类型;
    为淘宝卖家供过货;
    90天累计成交买家数
}     
     * @param BusinessAbility $businessAbility     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBusinessAbility(BusinessAbility $businessAbility) {
        $this->businessAbility = $businessAbility;
    }
    
        	
    private $companyCredit;
    
        /**
    * @return 供应商公司信用{
    认证类型;
    供应等级;
    描述相符;
    服务态度;
    到货速度;
    180天买家评论;
    90天平均发货速度;
    90天退款率;
    90天投诉率;
}
    */
        public function getCompanyCredit() {
        return $this->companyCredit;
    }
    
    /**
     * 设置供应商公司信用{
    认证类型;
    供应等级;
    描述相符;
    服务态度;
    到货速度;
    180天买家评论;
    90天平均发货速度;
    90天退款率;
    90天投诉率;
}     
     * @param CompanyCredit $companyCredit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyCredit(CompanyCredit $companyCredit) {
        $this->companyCredit = $companyCredit;
    }
    
        	
    private $contactInfo;
    
        /**
    * @return 供应商联系方式{
    姓名;
    手机;
    性别;
    电话;
}
    */
        public function getContactInfo() {
        return $this->contactInfo;
    }
    
    /**
     * 设置供应商联系方式{
    姓名;
    手机;
    性别;
    电话;
}     
     * @param ContactInfo $contactInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContactInfo(ContactInfo $contactInfo) {
        $this->contactInfo = $contactInfo;
    }
    
        	
    private $certifications;
    
        /**
    * @return 供应商资质证书 {
	key包含:businessLicence;taxRegistration;taxRegistrationBackUp;OrganizationCode;approvalOfForeignInvestmentEnterprises;icpLicence;productLicence;otherLicence;
value 为List<供应商资质证书>类型:List的泛型请参见 domain:供应商资质证书
key的名字解释.
	营业执照 : businessLicence;
	税务登记证 : taxRegistration;
	税务登记证副本 : taxRegistrationBackUp;
	组织结构代码证 : OrganizationCode;
	外商投资企业批准证书 : approvalOfForeignInvestmentEnterprises;
	经营许可类证书列表（支持多个）: icpLicence;
	产品类证书列表（支持多个）:	productLicence;
	其他类证书列表（支持多个）:	otherLicence;
}
    */
        public function getCertifications() {
        return $this->certifications;
    }
    
    /**
     * 设置供应商资质证书 {
	key包含:businessLicence;taxRegistration;taxRegistrationBackUp;OrganizationCode;approvalOfForeignInvestmentEnterprises;icpLicence;productLicence;otherLicence;
value 为List<供应商资质证书>类型:List的泛型请参见 domain:供应商资质证书
key的名字解释.
	营业执照 : businessLicence;
	税务登记证 : taxRegistration;
	税务登记证副本 : taxRegistrationBackUp;
	组织结构代码证 : OrganizationCode;
	外商投资企业批准证书 : approvalOfForeignInvestmentEnterprises;
	经营许可类证书列表（支持多个）: icpLicence;
	产品类证书列表（支持多个）:	productLicence;
	其他类证书列表（支持多个）:	otherLicence;
}     
     * @param Map $certifications     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCertifications(array $certifications) {
        $this->certifications = $certifications;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "companyInfo", $this->stdResult )) {
    				$companyInfoResult=$this->stdResult->{"companyInfo"};
    				$this->companyInfo = new CompanyInfo();
    				$this->companyInfo->setStdResult ( $companyInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "businessInfo", $this->stdResult )) {
    				$businessInfoResult=$this->stdResult->{"businessInfo"};
    				$this->businessInfo = new BusinessInfo();
    				$this->businessInfo->setStdResult ( $businessInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "businessAbility", $this->stdResult )) {
    				$businessAbilityResult=$this->stdResult->{"businessAbility"};
    				$this->businessAbility = new BusinessAbility();
    				$this->businessAbility->setStdResult ( $businessAbilityResult);
    			}
    			    		    				    			    			if (array_key_exists ( "companyCredit", $this->stdResult )) {
    				$companyCreditResult=$this->stdResult->{"companyCredit"};
    				$this->companyCredit = new CompanyCredit();
    				$this->companyCredit->setStdResult ( $companyCreditResult);
    			}
    			    		    				    			    			if (array_key_exists ( "contactInfo", $this->stdResult )) {
    				$contactInfoResult=$this->stdResult->{"contactInfo"};
    				$this->contactInfo = new ContactInfo();
    				$this->contactInfo->setStdResult ( $contactInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "certifications", $this->stdResult )) {
    				$this->certifications = $this->stdResult->{"certifications"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "companyInfo", $this->arrayResult )) {
    		$companyInfoResult=$arrayResult['companyInfo'];
    			    			$this->companyInfo = new CompanyInfo();
    			    			$this->companyInfo->setStdResult ( $companyInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "businessInfo", $this->arrayResult )) {
    		$businessInfoResult=$arrayResult['businessInfo'];
    			    			$this->businessInfo = new BusinessInfo();
    			    			$this->businessInfo->setStdResult ( $businessInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "businessAbility", $this->arrayResult )) {
    		$businessAbilityResult=$arrayResult['businessAbility'];
    			    			$this->businessAbility = new BusinessAbility();
    			    			$this->businessAbility->setStdResult ( $businessAbilityResult);
    		}
    		    	    			    		    		if (array_key_exists ( "companyCredit", $this->arrayResult )) {
    		$companyCreditResult=$arrayResult['companyCredit'];
    			    			$this->companyCredit = new CompanyCredit();
    			    			$this->companyCredit->setStdResult ( $companyCreditResult);
    		}
    		    	    			    		    		if (array_key_exists ( "contactInfo", $this->arrayResult )) {
    		$contactInfoResult=$arrayResult['contactInfo'];
    			    			$this->contactInfo = new ContactInfo();
    			    			$this->contactInfo->setStdResult ( $contactInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "certifications", $this->arrayResult )) {
    			$this->certifications = $arrayResult['certifications'];
    			}
    		    	    		}
 
   
}
?>