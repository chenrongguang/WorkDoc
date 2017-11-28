<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationAddGroupParam {

        
        /**
    * @return 等级名称
    */
        public function getGroupName() {
        $tempResult = $this->sdkStdResult["groupName"];
        return $tempResult;
    }
    
    /**
     * 设置等级名称     
     * @param String $groupName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->sdkStdResult["groupName"] = $groupName;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>