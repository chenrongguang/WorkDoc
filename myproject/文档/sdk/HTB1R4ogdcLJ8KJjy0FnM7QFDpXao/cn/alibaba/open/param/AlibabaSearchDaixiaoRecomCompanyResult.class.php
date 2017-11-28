<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultDaixiaoRecomCommonResult.class.php');

class AlibabaSearchDaixiaoRecomCompanyResult {

        	
    private $daixiaoRecomCommonResult;
    
        /**
    * @return 推荐的供应商信息
    */
        public function getDaixiaoRecomCommonResult() {
        return $this->daixiaoRecomCommonResult;
    }
    
    /**
     * 设置推荐的供应商信息     
     * @param ComAlibabaCbuSearchwebOpenHsfResultDaixiaoRecomCommonResult $daixiaoRecomCommonResult     
          
     * 此参数必填     */
    public function setDaixiaoRecomCommonResult(ComAlibabaCbuSearchwebOpenHsfResultDaixiaoRecomCommonResult $daixiaoRecomCommonResult) {
        $this->daixiaoRecomCommonResult = $daixiaoRecomCommonResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "daixiaoRecomCommonResult", $this->stdResult )) {
    				$daixiaoRecomCommonResultResult=$this->stdResult->{"daixiaoRecomCommonResult"};
    				$this->daixiaoRecomCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoRecomCommonResult();
    				$this->daixiaoRecomCommonResult->setStdResult ( $daixiaoRecomCommonResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "daixiaoRecomCommonResult", $this->arrayResult )) {
    		$daixiaoRecomCommonResultResult=$arrayResult['daixiaoRecomCommonResult'];
    			    			$this->daixiaoRecomCommonResult = new ComAlibabaCbuSearchwebOpenHsfResultDaixiaoRecomCommonResult();
    			    			$this->daixiaoRecomCommonResult->setStdResult ( $daixiaoRecomCommonResultResult);
    		}
    		    	    		}

}
?>