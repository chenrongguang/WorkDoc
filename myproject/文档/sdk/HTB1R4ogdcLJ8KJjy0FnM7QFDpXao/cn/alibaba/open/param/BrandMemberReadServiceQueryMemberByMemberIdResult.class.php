<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandMemberReadServiceQueryMemberByMemberIdResult {

        	
    private $brandList;
    
        /**
    * @return 供应商授权品牌信息列表
    */
        public function getBrandList() {
        return $this->brandList;
    }
    
    /**
     * 设置供应商授权品牌信息列表     
     * @param List $brandList     
          
     * 此参数必填     */
    public function setBrandList(array $brandList) {
        $this->brandList = $brandList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brandList", $this->stdResult )) {
    				$this->brandList = $this->stdResult->{"brandList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "brandList", $this->arrayResult )) {
    			$this->brandList = $arrayResult['brandList'];
    			}
    		    	    		}

}
?>