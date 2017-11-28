<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlipayBindModel.class.php');

class TradeAlipayAccountGetResult {

        	
    private $alipayBindModel;
    
        /**
    * @return 
    */
        public function getAlipayBindModel() {
        return $this->alipayBindModel;
    }
    
    /**
     * 设置     
     * @param AlipayBindModel $alipayBindModel     
          
     * 此参数必填     */
    public function setAlipayBindModel(AlipayBindModel $alipayBindModel) {
        $this->alipayBindModel = $alipayBindModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "alipayBindModel", $this->stdResult )) {
    				$alipayBindModelResult=$this->stdResult->{"alipayBindModel"};
    				$this->alipayBindModel = new AlipayBindModel();
    				$this->alipayBindModel->setStdResult ( $alipayBindModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "alipayBindModel", $this->arrayResult )) {
    		$alipayBindModelResult=$arrayResult['alipayBindModel'];
    			    			$this->alipayBindModel = new AlipayBindModel();
    			    			$this->alipayBindModel->setStdResult ( $alipayBindModelResult);
    		}
    		    	    		}

}
?>