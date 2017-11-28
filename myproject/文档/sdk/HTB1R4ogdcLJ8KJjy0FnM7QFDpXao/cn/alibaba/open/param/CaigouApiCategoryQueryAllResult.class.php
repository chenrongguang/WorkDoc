<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainCategoryTopCategory.class.php');

class CaigouApiCategoryQueryAllResult {

        	
    private $categoryList;
    
        /**
    * @return 
    */
        public function getCategoryList() {
        return $this->categoryList;
    }
    
    /**
     * 设置     
     * @param array include @see CaigouDomainCategoryTopCategory[] $categoryList     
          
     * 此参数必填     */
    public function setCategoryList(CaigouDomainCategoryTopCategory $categoryList) {
        $this->categoryList = $categoryList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryList", $this->stdResult )) {
    			$categoryListResult=$this->stdResult->{"categoryList"};
    				$object = json_decode ( json_encode ( $categoryListResult ), true );
					$this->categoryList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$CaigouDomainCategoryTopCategoryResult=new CaigouDomainCategoryTopCategory();
						$CaigouDomainCategoryTopCategoryResult->setArrayResult($arrayobject );
						$this->categoryList [$i] = $CaigouDomainCategoryTopCategoryResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "categoryList", $this->arrayResult )) {
    		$categoryListResult=$arrayResult['categoryList'];
    			$this->categoryList = new CaigouDomainCategoryTopCategory();
    			$this->categoryList->setStdResult ( $categoryListResult);
    		}
    		    	    		}

}
?>