<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiCategoryDeleteUserCategoryParam {

        
        /**
    * @return 需要删除的类目在1688平台的id列表
    */
        public function getCategoryIds() {
        $tempResult = $this->sdkStdResult["categoryIds"];
        return $tempResult;
    }
    
    /**
     * 设置需要删除的类目在1688平台的id列表     
     * @param List $categoryIds     
     * 参数示例：<pre>[1232,23423]</pre>     
     * 此参数必填     */
    public function setCategoryIds(array $categoryIds) {
        $this->sdkStdResult["categoryIds"] = $categoryIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>