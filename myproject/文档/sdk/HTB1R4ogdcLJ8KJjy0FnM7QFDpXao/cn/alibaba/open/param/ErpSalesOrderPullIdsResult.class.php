<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpSalesOrderPullIdsResult {

        	
    private $idList;
    
        /**
    * @return 销售单Id列表
    */
        public function getIdList() {
        return $this->idList;
    }
    
    /**
     * 设置销售单Id列表     
     * @param array include @see Long[] $idList     
          
     * 此参数必填     */
    public function setIdList( $idList) {
        $this->idList = $idList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "idList", $this->stdResult )) {
    				$this->idList = $this->stdResult->{"idList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "idList", $this->arrayResult )) {
    			$this->idList = $arrayResult['idList'];
    			}
    		    	    		}

}
?>