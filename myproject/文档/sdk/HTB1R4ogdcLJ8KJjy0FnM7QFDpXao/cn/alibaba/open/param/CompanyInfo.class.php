<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/IndustrialAndCommercialRegistrationInfo.class.php');

class CompanyInfo extends SDKDomain {

       	
    private $tp;
    
        /**
    * @return 是否诚信通会员标识
    */
        public function getTp() {
        return $this->tp;
    }
    
    /**
     * 设置是否诚信通会员标识     
     * @param Boolean $tp     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTp( $tp) {
        $this->tp = $tp;
    }
    
        	
    private $governmentInvitedSupplier;
    
        /**
    * @return 是否政府邀约供应商标识
    */
        public function getGovernmentInvitedSupplier() {
        return $this->governmentInvitedSupplier;
    }
    
    /**
     * 设置是否政府邀约供应商标识     
     * @param Boolean $governmentInvitedSupplier     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGovernmentInvitedSupplier( $governmentInvitedSupplier) {
        $this->governmentInvitedSupplier = $governmentInvitedSupplier;
    }
    
        	
    private $icrInfo;
    
        /**
    * @return 工商注册信息{公司名字,法定代表人/负责人,公司注册地址,工商注册号,公司类型,成立日期,注册资本,登记机关,营业期限,经营范围}
    */
        public function getIcrInfo() {
        return $this->icrInfo;
    }
    
    /**
     * 设置工商注册信息{公司名字,法定代表人/负责人,公司注册地址,工商注册号,公司类型,成立日期,注册资本,登记机关,营业期限,经营范围}     
     * @param IndustrialAndCommercialRegistrationInfo $icrInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIcrInfo(IndustrialAndCommercialRegistrationInfo $icrInfo) {
        $this->icrInfo = $icrInfo;
    }
    
        	
    private $homepageUrl;
    
        /**
    * @return 公司网址
    */
        public function getHomepageUrl() {
        return $this->homepageUrl;
    }
    
    /**
     * 设置公司网址     
     * @param array include @see String[] $homepageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHomepageUrl( $homepageUrl) {
        $this->homepageUrl = $homepageUrl;
    }
    
        	
    private $companySummary;
    
        /**
    * @return 公司简介
    */
        public function getCompanySummary() {
        return $this->companySummary;
    }
    
    /**
     * 设置公司简介     
     * @param String $companySummary     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanySummary( $companySummary) {
        $this->companySummary = $companySummary;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "tp", $this->stdResult )) {
    				$this->tp = $this->stdResult->{"tp"};
    			}
    			    		    				    			    			if (array_key_exists ( "governmentInvitedSupplier", $this->stdResult )) {
    				$this->governmentInvitedSupplier = $this->stdResult->{"governmentInvitedSupplier"};
    			}
    			    		    				    			    			if (array_key_exists ( "icrInfo", $this->stdResult )) {
    				$icrInfoResult=$this->stdResult->{"icrInfo"};
    				$this->icrInfo = new IndustrialAndCommercialRegistrationInfo();
    				$this->icrInfo->setStdResult ( $icrInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "homepageUrl", $this->stdResult )) {
    				$this->homepageUrl = $this->stdResult->{"homepageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "companySummary", $this->stdResult )) {
    				$this->companySummary = $this->stdResult->{"companySummary"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "tp", $this->arrayResult )) {
    			$this->tp = $arrayResult['tp'];
    			}
    		    	    			    		    			if (array_key_exists ( "governmentInvitedSupplier", $this->arrayResult )) {
    			$this->governmentInvitedSupplier = $arrayResult['governmentInvitedSupplier'];
    			}
    		    	    			    		    		if (array_key_exists ( "icrInfo", $this->arrayResult )) {
    		$icrInfoResult=$arrayResult['icrInfo'];
    			    			$this->icrInfo = new IndustrialAndCommercialRegistrationInfo();
    			    			$this->icrInfo->setStdResult ( $icrInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "homepageUrl", $this->arrayResult )) {
    			$this->homepageUrl = $arrayResult['homepageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "companySummary", $this->arrayResult )) {
    			$this->companySummary = $arrayResult['companySummary'];
    			}
    		    	    		}
 
   
}
?>