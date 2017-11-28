<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoOfferRequest extends SDKDomain {

       	
    private $keywords;
    
        /**
    * @return 关键词
    */
        public function getKeywords() {
        return $this->keywords;
    }
    
    /**
     * 设置关键词     
     * @param String $keywords     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setKeywords( $keywords) {
        $this->keywords = $keywords;
    }
    
        	
    private $descendOrder;
    
        /**
    * @return 是否降序，true降序，false升序
    */
        public function getDescendOrder() {
        return $this->descendOrder;
    }
    
    /**
     * 设置是否降序，true降序，false升序     
     * @param Boolean $descendOrder     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setDescendOrder( $descendOrder) {
        $this->descendOrder = $descendOrder;
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
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $sortType;
    
        /**
    * @return 排序类型，取值：price,booked,post_time，分布代表价格排序、销量排序、发布时间排序
    */
        public function getSortType() {
        return $this->sortType;
    }
    
    /**
     * 设置排序类型，取值：price,booked,post_time，分布代表价格排序、销量排序、发布时间排序     
     * @param String $sortType     
     * 参数示例：<pre>price</pre>     
     * 此参数必填     */
    public function setSortType( $sortType) {
        $this->sortType = $sortType;
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
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "keywords", $this->stdResult )) {
    				$this->keywords = $this->stdResult->{"keywords"};
    			}
    			    		    				    			    			if (array_key_exists ( "descendOrder", $this->stdResult )) {
    				$this->descendOrder = $this->stdResult->{"descendOrder"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "sortType", $this->stdResult )) {
    				$this->sortType = $this->stdResult->{"sortType"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "keywords", $this->arrayResult )) {
    			$this->keywords = $arrayResult['keywords'];
    			}
    		    	    			    		    			if (array_key_exists ( "descendOrder", $this->arrayResult )) {
    			$this->descendOrder = $arrayResult['descendOrder'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['pageSize'];
    			}
    		    	    			    		    			if (array_key_exists ( "sortType", $this->arrayResult )) {
    			$this->sortType = $arrayResult['sortType'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    		}
 
   
}
?>