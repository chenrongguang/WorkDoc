<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ConvertMemberIdsByLoginIdsResult {

        	
    private $memberIdMap;
    
        /**
    * @return 把成功查询到的memberid一一对应返回
    */
        public function getMemberIdMap() {
        return $this->memberIdMap;
    }
    
    /**
     * 设置把成功查询到的memberid一一对应返回     
     * @param Map $memberIdMap     
          
     * 此参数必填     */
    public function setMemberIdMap(array $memberIdMap) {
        $this->memberIdMap = $memberIdMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "memberIdMap", $this->stdResult )) {
    				$this->memberIdMap = $this->stdResult->{"memberIdMap"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "memberIdMap", $this->arrayResult )) {
    			$this->memberIdMap = $arrayResult['memberIdMap'];
    			}
    		    	    		}

}
?>