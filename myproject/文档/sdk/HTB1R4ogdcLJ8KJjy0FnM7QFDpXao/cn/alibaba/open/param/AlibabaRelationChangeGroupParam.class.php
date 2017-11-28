<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationChangeGroupParam {

        
        /**
    * @return 等级ID
    */
        public function getGroupId() {
        $tempResult = $this->sdkStdResult["groupId"];
        return $tempResult;
    }
    
    /**
     * 设置等级ID     
     * @param Long $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }
    
        
        /**
    * @return 需要修改的列表
    */
        public function getLoginIdList() {
        $tempResult = $this->sdkStdResult["loginIdList"];
        return $tempResult;
    }
    
    /**
     * 设置需要修改的列表     
     * @param array include @see String[] $loginIdList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoginIdList( $loginIdList) {
        $this->sdkStdResult["loginIdList"] = $loginIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>