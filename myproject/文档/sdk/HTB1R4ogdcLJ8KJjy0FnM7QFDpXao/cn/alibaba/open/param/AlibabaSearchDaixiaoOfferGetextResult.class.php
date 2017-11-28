<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult.class.php');

class AlibabaSearchDaixiaoOfferGetextResult {

        	
    private $daixiaoExtendOfferCommonResult;
    
        /**
    * @return { isSuccess:true, errorMsg:'', result: { count:123, currentPage:1, pageSize:10, offerList：[ {offerId、标题、价格、详情url、图片url、公司名、 公司mid、发布时间、成交数、alg打点字段} ] } }
    */
        public function getDaixiaoExtendOfferCommonResult() {
        return $this->daixiaoExtendOfferCommonResult;
    }
    
    /**
     * 设置{ isSuccess:true, errorMsg:'', result: { count:123, currentPage:1, pageSize:10, offerList：[ {offerId、标题、价格、详情url、图片url、公司名、 公司mid、发布时间、成交数、alg打点字段} ] } }     
     * @param ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult $daixiaoExtendOfferCommonResult     
          
     * 此参数必填     */
    public function setDaixiaoExtendOfferCommonResult(ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult $daixiaoExtendOfferCommonResult) {
        $this->daixiaoExtendOfferCommonResult = $daixiaoExtendOfferCommonResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "daixiaoExtendOfferCommonResult", $this->stdResult )) {
    				$daixiaoExtendOfferCommonResultResult=$this->stdResult->{"daixiaoExtendOfferCommonResult"};
    				$this->daixiaoExtendOfferCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult();
    				$this->daixiaoExtendOfferCommonResult->setStdResult ( $daixiaoExtendOfferCommonResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "daixiaoExtendOfferCommonResult", $this->arrayResult )) {
    		$daixiaoExtendOfferCommonResultResult=$arrayResult['daixiaoExtendOfferCommonResult'];
    			    			$this->daixiaoExtendOfferCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult();
    			    			$this->daixiaoExtendOfferCommonResult->setStdResult ( $daixiaoExtendOfferCommonResultResult);
    		}
    		    	    		}

}
?>