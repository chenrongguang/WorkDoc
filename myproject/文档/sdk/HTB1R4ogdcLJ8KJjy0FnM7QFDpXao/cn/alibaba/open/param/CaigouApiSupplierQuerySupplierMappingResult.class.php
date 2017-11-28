<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiSupplierQuerySupplierMappingResult {

        	
    private $supplierMap;
    
        /**
    * @return 供应商mapping关系，key是外部扩展id.value是中文站memberId.返回的map不会为null，查询失败见异常错误码
    */
        public function getSupplierMap() {
        return $this->supplierMap;
    }
    
    /**
     * 设置供应商mapping关系，key是外部扩展id.value是中文站memberId.返回的map不会为null，查询失败见异常错误码     
     * @param Map $supplierMap     
          
     * 此参数必填     */
    public function setSupplierMap(array $supplierMap) {
        $this->supplierMap = $supplierMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "supplierMap", $this->stdResult )) {
    				$this->supplierMap = $this->stdResult->{"supplierMap"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "supplierMap", $this->arrayResult )) {
    			$this->supplierMap = $arrayResult['supplierMap'];
    			}
    		    	    		}

}
?>