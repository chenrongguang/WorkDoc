<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductParamWriteUserCategoryCoopParam.class.php');

class ErpUserCategoryBatchAddUpdateParam {

        
        /**
    * @return 批量新增修改参数列表
    */
        public function getUserCategoryList() {
        $tempResult = $this->sdkStdResult["userCategoryList"];
        return $tempResult;
    }
    
    /**
     * 设置批量新增修改参数列表     
     * @param array include @see ComAlibabaCaigouCoopapiProductParamWriteUserCategoryCoopParam[] $userCategoryList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserCategoryList(ComAlibabaCaigouCoopapiProductParamWriteUserCategoryCoopParam $userCategoryList) {
        $this->sdkStdResult["userCategoryList"] = $userCategoryList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>