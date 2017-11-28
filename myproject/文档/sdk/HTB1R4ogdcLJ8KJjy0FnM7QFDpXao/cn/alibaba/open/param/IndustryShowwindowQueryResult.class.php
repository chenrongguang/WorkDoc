<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ShowWindowModel.class.php');

class IndustryShowwindowQueryResult {

        	
    private $showWindowModel;
    
        /**
    * @return 返回橱窗Model
    */
        public function getShowWindowModel() {
        return $this->showWindowModel;
    }
    
    /**
     * 设置返回橱窗Model     
     * @param ShowWindowModel $showWindowModel     
          
     * 此参数必填     */
    public function setShowWindowModel(ShowWindowModel $showWindowModel) {
        $this->showWindowModel = $showWindowModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "showWindowModel", $this->stdResult )) {
    				$showWindowModelResult=$this->stdResult->{"showWindowModel"};
    				$this->showWindowModel = new ShowWindowModel();
    				$this->showWindowModel->setStdResult ( $showWindowModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "showWindowModel", $this->arrayResult )) {
    		$showWindowModelResult=$arrayResult['showWindowModel'];
    			    			$this->showWindowModel = new ShowWindowModel();
    			    			$this->showWindowModel->setStdResult ( $showWindowModelResult);
    		}
    		    	    		}

}
?>