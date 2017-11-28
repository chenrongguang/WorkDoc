<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductModelUserCategoryOne.class.php');

class ErpUserCategoryQueryAllResult {

        	
    private $userCategoryList;
    
        /**
    * @return 一级类目列表
    */
        public function getUserCategoryList() {
        return $this->userCategoryList;
    }
    
    /**
     * 设置一级类目列表     
     * @param array include @see ComAlibabaCaigouCoopapiProductModelUserCategoryOne[] $userCategoryList     
          
     * 此参数必填     */
    public function setUserCategoryList(ComAlibabaCaigouCoopapiProductModelUserCategoryOne $userCategoryList) {
        $this->userCategoryList = $userCategoryList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userCategoryList", $this->stdResult )) {
    			$userCategoryListResult=$this->stdResult->{"userCategoryList"};
    				$object = json_decode ( json_encode ( $userCategoryListResult ), true );
					$this->userCategoryList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouCoopapiProductModelUserCategoryOneResult=new ComAlibabaCaigouCoopapiProductModelUserCategoryOne();
						$ComAlibabaCaigouCoopapiProductModelUserCategoryOneResult->setArrayResult($arrayobject );
						$this->userCategoryList [$i] = $ComAlibabaCaigouCoopapiProductModelUserCategoryOneResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "userCategoryList", $this->arrayResult )) {
    		$userCategoryListResult=$arrayResult['userCategoryList'];
    			$this->userCategoryList = new ComAlibabaCaigouCoopapiProductModelUserCategoryOne();
    			$this->userCategoryList->setStdResult ( $userCategoryListResult);
    		}
    		    	    		}

}
?>