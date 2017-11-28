<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult.class.php');

class ComAlibabaCbuSearchwebOpenHsfResultIsvCompanyOfferResult extends SDKDomain {

       	
    private $memberId;
    
        /**
    * @return 供应商memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $companyName;
    
        /**
    * @return 供应商名称
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置供应商名称     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $offerResult;
    
        /**
    * @return 供应闪下面的推荐商品信息
    */
        public function getOfferResult() {
        return $this->offerResult;
    }
    
    /**
     * 设置供应闪下面的推荐商品信息     
     * @param ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult $offerResult     
     * 参数示例：<pre>{
        offerList：[
            {offerId、标题、价格、详情url、图片url、公司名、  
             公司mid、发布时间、成交数、alg打点字段}
        ]
    }</pre>     
     * 此参数必填     */
    public function setOfferResult(ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult $offerResult) {
        $this->offerResult = $offerResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerResult", $this->stdResult )) {
    				$offerResultResult=$this->stdResult->{"offerResult"};
    				$this->offerResult = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult();
    				$this->offerResult->setStdResult ( $offerResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['companyName'];
    			}
    		    	    			    		    		if (array_key_exists ( "offerResult", $this->arrayResult )) {
    		$offerResultResult=$arrayResult['offerResult'];
    			    			$this->offerResult = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult();
    			    			$this->offerResult->setStdResult ( $offerResultResult);
    		}
    		    	    		}
 
   
}
?>