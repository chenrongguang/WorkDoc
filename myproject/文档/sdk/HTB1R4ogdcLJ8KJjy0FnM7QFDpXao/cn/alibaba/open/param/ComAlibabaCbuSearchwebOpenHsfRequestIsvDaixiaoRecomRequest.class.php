<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoRecomRequest extends SDKDomain {

       	
    private $userId;
    
        /**
    * @return 淘宝用户Id
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置淘宝用户Id     
     * @param String $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $companyMemberId;
    
        /**
    * @return 供应商memberId
    */
        public function getCompanyMemberId() {
        return $this->companyMemberId;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $companyMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyMemberId( $companyMemberId) {
        $this->companyMemberId = $companyMemberId;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 分页中每页大小，当前后台默认固定10，此参数暂时可忽略不填，后续根据业务需要 调整为可变参数
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置分页中每页大小，当前后台默认固定10，此参数暂时可忽略不填，后续根据业务需要 调整为可变参数     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 分页参数的当前页
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置分页参数的当前页     
     * @param Integer $currentPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyMemberId", $this->stdResult )) {
    				$this->companyMemberId = $this->stdResult->{"companyMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyMemberId", $this->arrayResult )) {
    			$this->companyMemberId = $arrayResult['companyMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['pageSize'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    		}
 
   
}
?>