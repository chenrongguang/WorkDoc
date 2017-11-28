<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AreaCodeGetResult {

        	
    private $areaCode;
    
        /**
    * @return 省份编码
    */
        public function getAreaCode() {
        return $this->areaCode;
    }
    
    /**
     * 设置省份编码     
     * @param Map $areaCode     
          
     * 此参数必填     */
    public function setAreaCode(array $areaCode) {
        $this->areaCode = $areaCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "areaCode", $this->stdResult )) {
    				$this->areaCode = $this->stdResult->{"areaCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "areaCode", $this->arrayResult )) {
    			$this->areaCode = $arrayResult['areaCode'];
    			}
    		    	    		}

}
?>