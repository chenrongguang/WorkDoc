<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ConvertMemberIdsByLoginIdsParam {

        
        /**
    * @return 中文站登录id！最大数量不超过110个，数量太大时抛出异常！loginIds中不包含子账号的loginid
    */
        public function getLoginIds() {
        $tempResult = $this->sdkStdResult["loginIds"];
        return $tempResult;
    }
    
    /**
     * 设置中文站登录id！最大数量不超过110个，数量太大时抛出异常！loginIds中不包含子账号的loginid     
     * @param List $loginIds     
     * 参数示例：<pre>["loginid1","loginid2"]</pre>     
     * 此参数必填     */
    public function setLoginIds(array $loginIds) {
        $this->sdkStdResult["loginIds"] = $loginIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>