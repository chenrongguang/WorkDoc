<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortmsgReadCircleByPageNumResult {

        	
    private $memberIdList;
    
        /**
    * @return 短信任务圈子中买家memberId列表
    */
        public function getMemberIdList() {
        return $this->memberIdList;
    }
    
    /**
     * 设置短信任务圈子中买家memberId列表     
     * @param List $memberIdList     
          
     * 此参数必填     */
    public function setMemberIdList(array $memberIdList) {
        $this->memberIdList = $memberIdList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "memberIdList", $this->stdResult )) {
    				$this->memberIdList = $this->stdResult->{"memberIdList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "memberIdList", $this->arrayResult )) {
    			$this->memberIdList = $arrayResult['memberIdList'];
    			}
    		    	    		}

}
?>