<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaMarketingShortlinkCreateResultModel.class.php');

class AlibabaCnMarketingShortlinkCreateResult {

        	
    private $resultModel;
    
        /**
    * @return 结果模型
    */
        public function getResultModel() {
        return $this->resultModel;
    }
    
    /**
     * 设置结果模型     
     * @param AlibabaMarketingShortlinkCreateResultModel $resultModel     
          
     * 此参数必填     */
    public function setResultModel(AlibabaMarketingShortlinkCreateResultModel $resultModel) {
        $this->resultModel = $resultModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultModel", $this->stdResult )) {
    				$resultModelResult=$this->stdResult->{"resultModel"};
    				$this->resultModel = new AlibabaMarketingShortlinkCreateResultModel();
    				$this->resultModel->setStdResult ( $resultModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "resultModel", $this->arrayResult )) {
    		$resultModelResult=$arrayResult['resultModel'];
    			    			$this->resultModel = new AlibabaMarketingShortlinkCreateResultModel();
    			    			$this->resultModel->setStdResult ( $resultModelResult);
    		}
    		    	    		}

}
?>