<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductModelUserCategoryOne.class.php');

class ErpUserCategoryGetByCodeResult {

        	
    private $userCategory;
    
        /**
    * @return 用户自定义类目
    */
        public function getUserCategory() {
        return $this->userCategory;
    }
    
    /**
     * 设置用户自定义类目     
     * @param ComAlibabaCaigouCoopapiProductModelUserCategoryOne $userCategory     
          
     * 此参数必填     */
    public function setUserCategory(ComAlibabaCaigouCoopapiProductModelUserCategoryOne $userCategory) {
        $this->userCategory = $userCategory;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userCategory", $this->stdResult )) {
    				$userCategoryResult=$this->stdResult->{"userCategory"};
    				$this->userCategory = new ComAlibabaCaigouCoopapiProductModelUserCategoryOne();
    				$this->userCategory->setStdResult ( $userCategoryResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "userCategory", $this->arrayResult )) {
    		$userCategoryResult=$arrayResult['userCategory'];
    			    			$this->userCategory = new ComAlibabaCaigouCoopapiProductModelUserCategoryOne();
    			    			$this->userCategory->setStdResult ( $userCategoryResult);
    		}
    		    	    		}

}
?>