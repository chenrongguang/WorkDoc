<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainCategoryTopCategory.class.php');

class CaigouApiCategoryGetByIdResult {

        	
    private $category;
    
        /**
    * @return 
    */
        public function getCategory() {
        return $this->category;
    }
    
    /**
     * 设置     
     * @param CaigouDomainCategoryTopCategory $category     
          
     * 此参数必填     */
    public function setCategory(CaigouDomainCategoryTopCategory $category) {
        $this->category = $category;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "category", $this->stdResult )) {
    				$categoryResult=$this->stdResult->{"category"};
    				$this->category = new CaigouDomainCategoryTopCategory();
    				$this->category->setStdResult ( $categoryResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "category", $this->arrayResult )) {
    		$categoryResult=$arrayResult['category'];
    			    			$this->category = new CaigouDomainCategoryTopCategory();
    			    			$this->category->setStdResult ( $categoryResult);
    		}
    		    	    		}

}
?>