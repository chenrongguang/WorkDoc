<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam.class.php');

class ErpWarehouseQueryAllResult {

        	
    private $result;
    
        /**
    * @return 
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置     
     * @param array include @see ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam[] $result     
          
     * 此参数必填     */
    public function setResult(ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParamResult=new ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam();
						$ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParamResult->setArrayResult($arrayobject );
						$this->result [$i] = $ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParamResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			$this->result = new ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>