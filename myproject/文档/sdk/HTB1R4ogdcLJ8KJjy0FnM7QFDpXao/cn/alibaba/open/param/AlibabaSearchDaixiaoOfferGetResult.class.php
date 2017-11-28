<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult.class.php');

class AlibabaSearchDaixiaoOfferGetResult {

        	
    private $daixiaoOfferIsvCommonResult;
    
        /**
    * @return 代销商品搜索的返回结果
    */
        public function getDaixiaoOfferIsvCommonResult() {
        return $this->daixiaoOfferIsvCommonResult;
    }
    
    /**
     * 设置代销商品搜索的返回结果     
     * @param ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult $daixiaoOfferIsvCommonResult     
          
     * 此参数必填     */
    public function setDaixiaoOfferIsvCommonResult(ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult $daixiaoOfferIsvCommonResult) {
        $this->daixiaoOfferIsvCommonResult = $daixiaoOfferIsvCommonResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "daixiaoOfferIsvCommonResult", $this->stdResult )) {
    				$daixiaoOfferIsvCommonResultResult=$this->stdResult->{"daixiaoOfferIsvCommonResult"};
    				$this->daixiaoOfferIsvCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult();
    				$this->daixiaoOfferIsvCommonResult->setStdResult ( $daixiaoOfferIsvCommonResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "daixiaoOfferIsvCommonResult", $this->arrayResult )) {
    		$daixiaoOfferIsvCommonResultResult=$arrayResult['daixiaoOfferIsvCommonResult'];
    			    			$this->daixiaoOfferIsvCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult();
    			    			$this->daixiaoOfferIsvCommonResult->setStdResult ( $daixiaoOfferIsvCommonResultResult);
    		}
    		    	    		}

}
?>