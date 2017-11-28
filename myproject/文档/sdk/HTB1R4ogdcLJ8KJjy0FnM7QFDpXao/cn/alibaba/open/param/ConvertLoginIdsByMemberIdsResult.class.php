<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ConvertLoginIdsByMemberIdsResult {

        	
    private $loginIdMap;
    
        /**
    * @return memberId与loginId的对应关系
    */
        public function getLoginIdMap() {
        return $this->loginIdMap;
    }
    
    /**
     * 设置memberId与loginId的对应关系     
     * @param Map $loginIdMap     
          
     * 此参数必填     */
    public function setLoginIdMap(array $loginIdMap) {
        $this->loginIdMap = $loginIdMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "loginIdMap", $this->stdResult )) {
    				$this->loginIdMap = $this->stdResult->{"loginIdMap"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "loginIdMap", $this->arrayResult )) {
    			$this->loginIdMap = $arrayResult['loginIdMap'];
    			}
    		    	    		}

}
?>