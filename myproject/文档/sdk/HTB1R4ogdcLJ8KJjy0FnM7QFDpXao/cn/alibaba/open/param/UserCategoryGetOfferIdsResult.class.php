<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UserCategoryGetOfferIdsResult {

        	
    private $groupIds;
    
        /**
    * @return 返回的自定义分类ID。多个产品的分类ID用产品ID：groupID值对形式返回；一个offer的多个分类ID半角逗号分隔。
    */
        public function getGroupIds() {
        return $this->groupIds;
    }
    
    /**
     * 设置返回的自定义分类ID。多个产品的分类ID用产品ID：groupID值对形式返回；一个offer的多个分类ID半角逗号分隔。     
     * @param String $groupIds     
          
     * 此参数必填     */
    public function setGroupIds( $groupIds) {
        $this->groupIds = $groupIds;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupIds", $this->stdResult )) {
    				$this->groupIds = $this->stdResult->{"groupIds"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupIds", $this->arrayResult )) {
    			$this->groupIds = $arrayResult['groupIds'];
    			}
    		    	    		}

}
?>