<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResult.class.php');

class ComAlibabaCbuSearchwebOpenHsfResultIsvRecommendResult extends SDKDomain {

       	
    private $count;
    
        /**
    * @return 推荐的总条目数
    */
        public function getCount() {
        return $this->count;
    }
    
    /**
     * 设置推荐的总条目数     
     * @param Integer $count     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCount( $count) {
        $this->count = $count;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 当前页
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页     
     * @param Integer $currentPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页大小
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $companyList;
    
        /**
    * @return 推荐的公司列表信息
    */
        public function getCompanyList() {
        return $this->companyList;
    }
    
    /**
     * 设置推荐的公司列表信息     
     * @param array include @see ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResult[] $companyList     
     * 参数示例：<pre>[//供应商列表，每个公司3个offer
            {
                memberId:'会员Id',
                companyName:'',
                offerResult:{
                    offerList:[推荐的3个最新offer列表]
                }
            }
        ]</pre>     
     * 此参数必填     */
    public function setCompanyList(ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResult $companyList) {
        $this->companyList = $companyList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "count", $this->stdResult )) {
    				$this->count = $this->stdResult->{"count"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyList", $this->stdResult )) {
    			$companyListResult=$this->stdResult->{"companyList"};
    				$object = json_decode ( json_encode ( $companyListResult ), true );
					$this->companyList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResultResult=new ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResult();
						$ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResultResult->setArrayResult($arrayobject );
						$this->companyList [$i] = $ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "count", $this->arrayResult )) {
    			$this->count = $arrayResult['count'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['pageSize'];
    			}
    		    	    			    		    		if (array_key_exists ( "companyList", $this->arrayResult )) {
    		$companyListResult=$arrayResult['companyList'];
    			$this->companyList = new ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResult();
    			$this->companyList->setStdResult ( $companyListResult);
    		}
    		    	    		}
 
   
}
?>