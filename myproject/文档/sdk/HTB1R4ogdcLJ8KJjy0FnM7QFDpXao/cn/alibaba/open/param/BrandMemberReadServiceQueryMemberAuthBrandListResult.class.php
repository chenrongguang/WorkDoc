<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandMemberReadServiceQueryMemberAuthBrandListResult {

        	
    private $brandIdList;
    
        /**
    * @return 品牌id列表
    */
        public function getBrandIdList() {
        return $this->brandIdList;
    }
    
    /**
     * 设置品牌id列表     
     * @param List $brandIdList     
          
     * 此参数必填     */
    public function setBrandIdList(array $brandIdList) {
        $this->brandIdList = $brandIdList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brandIdList", $this->stdResult )) {
    				$this->brandIdList = $this->stdResult->{"brandIdList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "brandIdList", $this->arrayResult )) {
    			$this->brandIdList = $arrayResult['brandIdList'];
    			}
    		    	    		}

}
?>