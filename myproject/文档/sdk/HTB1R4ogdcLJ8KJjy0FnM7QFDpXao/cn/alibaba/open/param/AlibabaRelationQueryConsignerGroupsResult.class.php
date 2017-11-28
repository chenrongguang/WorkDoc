<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaRelationGroupsresult.class.php');

class AlibabaRelationQueryConsignerGroupsResult {

        	
    private $groupsModels;
    
        /**
    * @return 等级列表
    */
        public function getGroupsModels() {
        return $this->groupsModels;
    }
    
    /**
     * 设置等级列表     
     * @param array include @see AlibabaRelationGroupsresult[] $groupsModels     
          
     * 此参数必填     */
    public function setGroupsModels(AlibabaRelationGroupsresult $groupsModels) {
        $this->groupsModels = $groupsModels;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupsModels", $this->stdResult )) {
    			$groupsModelsResult=$this->stdResult->{"groupsModels"};
    				$object = json_decode ( json_encode ( $groupsModelsResult ), true );
					$this->groupsModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaRelationGroupsresultResult=new AlibabaRelationGroupsresult();
						$AlibabaRelationGroupsresultResult->setArrayResult($arrayobject );
						$this->groupsModels [$i] = $AlibabaRelationGroupsresultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "groupsModels", $this->arrayResult )) {
    		$groupsModelsResult=$arrayResult['groupsModels'];
    			$this->groupsModels = new AlibabaRelationGroupsresult();
    			$this->groupsModels->setStdResult ( $groupsModelsResult);
    		}
    		    	    		}

}
?>