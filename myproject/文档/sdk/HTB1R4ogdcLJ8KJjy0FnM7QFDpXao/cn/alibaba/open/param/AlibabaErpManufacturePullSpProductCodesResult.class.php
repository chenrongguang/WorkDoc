<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaErpManufacturePullSpProductCodesResult {

        	
    private $productCodeList;
    
        /**
    * @return 需求单号列表
    */
        public function getProductCodeList() {
        return $this->productCodeList;
    }
    
    /**
     * 设置需求单号列表     
     * @param array include @see String[] $productCodeList     
          
     * 此参数必填     */
    public function setProductCodeList( $productCodeList) {
        $this->productCodeList = $productCodeList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productCodeList", $this->stdResult )) {
    				$this->productCodeList = $this->stdResult->{"productCodeList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productCodeList", $this->arrayResult )) {
    			$this->productCodeList = $arrayResult['productCodeList'];
    			}
    		    	    		}

}
?>