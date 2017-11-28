<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationDeleteGroupParam {

        
        /**
    * @return 供应商UserId
    */
        public function getSupplierId() {
        $tempResult = $this->sdkStdResult["supplierId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商UserId     
     * @param Long $supplierId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierId( $supplierId) {
        $this->sdkStdResult["supplierId"] = $supplierId;
    }
    
        
        /**
    * @return 等级Id
    */
        public function getGroupId() {
        $tempResult = $this->sdkStdResult["groupId"];
        return $tempResult;
    }
    
    /**
     * 设置等级Id     
     * @param Long $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }
    
        
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