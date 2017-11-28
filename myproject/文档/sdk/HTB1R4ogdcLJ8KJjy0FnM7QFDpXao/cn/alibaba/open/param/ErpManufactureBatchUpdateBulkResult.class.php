<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpManufactureBatchUpdateBulkResult {

        	
    private $succeseGodesCodeList;
    
        /**
    * @return 操作成功的货号列表
    */
        public function getSucceseGodesCodeList() {
        return $this->succeseGodesCodeList;
    }
    
    /**
     * 设置操作成功的货号列表     
     * @param array include @see String[] $succeseGodesCodeList     
          
     * 此参数必填     */
    public function setSucceseGodesCodeList( $succeseGodesCodeList) {
        $this->succeseGodesCodeList = $succeseGodesCodeList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "succeseGodesCodeList", $this->stdResult )) {
    				$this->succeseGodesCodeList = $this->stdResult->{"succeseGodesCodeList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "succeseGodesCodeList", $this->arrayResult )) {
    			$this->succeseGodesCodeList = $arrayResult['succeseGodesCodeList'];
    			}
    		    	    		}

}
?>