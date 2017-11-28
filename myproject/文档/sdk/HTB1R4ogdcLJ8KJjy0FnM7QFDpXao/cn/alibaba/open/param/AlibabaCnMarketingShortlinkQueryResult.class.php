<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaMarketingShortlinkQueryResultModel.class.php');

class AlibabaCnMarketingShortlinkQueryResult {

        	
    private $resultModel;
    
        /**
    * @return 结果模型
    */
        public function getResultModel() {
        return $this->resultModel;
    }
    
    /**
     * 设置结果模型     
     * @param AlibabaMarketingShortlinkQueryResultModel $resultModel     
          
     * 此参数必填     */
    public function setResultModel(AlibabaMarketingShortlinkQueryResultModel $resultModel) {
        $this->resultModel = $resultModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultModel", $this->stdResult )) {
    				$resultModelResult=$this->stdResult->{"resultModel"};
    				$this->resultModel = new AlibabaMarketingShortlinkQueryResultModel();
    				$this->resultModel->setStdResult ( $resultModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "resultModel", $this->arrayResult )) {
    		$resultModelResult=$arrayResult['resultModel'];
    			    			$this->resultModel = new AlibabaMarketingShortlinkQueryResultModel();
    			    			$this->resultModel->setStdResult ( $resultModelResult);
    		}
    		    	    		}

}
?>