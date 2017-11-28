<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandMemberReadServiceQueryMemberAuthCatListResult {

        	
    private $categoryList;
    
        /**
    * @return 类目id列表
    */
        public function getCategoryList() {
        return $this->categoryList;
    }
    
    /**
     * 设置类目id列表     
     * @param List $categoryList     
          
     * 此参数必填     */
    public function setCategoryList(array $categoryList) {
        $this->categoryList = $categoryList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryList", $this->stdResult )) {
    				$this->categoryList = $this->stdResult->{"categoryList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "categoryList", $this->arrayResult )) {
    			$this->categoryList = $arrayResult['categoryList'];
    			}
    		    	    		}

}
?>