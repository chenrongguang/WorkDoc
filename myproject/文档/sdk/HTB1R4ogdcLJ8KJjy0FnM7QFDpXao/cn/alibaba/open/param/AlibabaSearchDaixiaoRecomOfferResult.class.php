<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult.class.php');

class AlibabaSearchDaixiaoRecomOfferResult {

        	
    private $daxiaoOfferIsvCommonResult;
    
        /**
    * @return 代销市场推荐的商品信息
    */
        public function getDaxiaoOfferIsvCommonResult() {
        return $this->daxiaoOfferIsvCommonResult;
    }
    
    /**
     * 设置代销市场推荐的商品信息     
     * @param ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult $daxiaoOfferIsvCommonResult     
          
     * 此参数必填     */
    public function setDaxiaoOfferIsvCommonResult(ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult $daxiaoOfferIsvCommonResult) {
        $this->daxiaoOfferIsvCommonResult = $daxiaoOfferIsvCommonResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "daxiaoOfferIsvCommonResult", $this->stdResult )) {
    				$daxiaoOfferIsvCommonResultResult=$this->stdResult->{"daxiaoOfferIsvCommonResult"};
    				$this->daxiaoOfferIsvCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult();
    				$this->daxiaoOfferIsvCommonResult->setStdResult ( $daxiaoOfferIsvCommonResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "daxiaoOfferIsvCommonResult", $this->arrayResult )) {
    		$daxiaoOfferIsvCommonResultResult=$arrayResult['daxiaoOfferIsvCommonResult'];
    			    			$this->daxiaoOfferIsvCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult();
    			    			$this->daxiaoOfferIsvCommonResult->setStdResult ( $daxiaoOfferIsvCommonResultResult);
    		}
    		    	    		}

}
?>