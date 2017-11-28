<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CompanyInfo.class.php');

class CompanyGetResult {

        	
    private $company;
    
        /**
    * @return 根据自定义返回字段返回公司库信息以及相应的字段访问权限返回。只有会员本人在登录状态下且传入sessionid参数时，才返回会员隐私数据。
    */
        public function getCompany() {
        return $this->company;
    }
    
    /**
     * 设置根据自定义返回字段返回公司库信息以及相应的字段访问权限返回。只有会员本人在登录状态下且传入sessionid参数时，才返回会员隐私数据。     
     * @param CompanyInfo $company     
          
     * 此参数必填     */
    public function setCompany(CompanyInfo $company) {
        $this->company = $company;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "company", $this->stdResult )) {
    				$companyResult=$this->stdResult->{"company"};
    				$this->company = new CompanyInfo();
    				$this->company->setStdResult ( $companyResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "company", $this->arrayResult )) {
    		$companyResult=$arrayResult['company'];
    			    			$this->company = new CompanyInfo();
    			    			$this->company->setStdResult ( $companyResult);
    		}
    		    	    		}

}
?>