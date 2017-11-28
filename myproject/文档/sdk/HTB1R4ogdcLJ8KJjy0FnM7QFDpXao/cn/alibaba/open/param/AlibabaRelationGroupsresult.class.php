<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationGroupsresult extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 等级ID
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置等级ID     
     * @param Long $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $groupName;
    
        /**
    * @return 等级名称
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置等级名称     
     * @param String $groupName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->groupName = $groupName;
    }
    
        	
    private $consignCount;
    
        /**
    * @return 分销商个数
    */
        public function getConsignCount() {
        return $this->consignCount;
    }
    
    /**
     * 设置分销商个数     
     * @param Integer $consignCount     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setConsignCount( $consignCount) {
        $this->consignCount = $consignCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupName", $this->stdResult )) {
    				$this->groupName = $this->stdResult->{"groupName"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignCount", $this->stdResult )) {
    				$this->consignCount = $this->stdResult->{"consignCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupName", $this->arrayResult )) {
    			$this->groupName = $arrayResult['groupName'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignCount", $this->arrayResult )) {
    			$this->consignCount = $arrayResult['consignCount'];
    			}
    		    	    		}
 
   
}
?>