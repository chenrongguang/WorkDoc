<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandMemberReadServiceQueryMemberAuthCatListParam {

        
        /**
    * @return 发布类目id
    */
        public function getParentCategory() {
        $tempResult = $this->sdkStdResult["parentCategory"];
        return $tempResult;
    }
    
    /**
     * 设置发布类目id     
     * @param Long $parentCategory     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setParentCategory( $parentCategory) {
        $this->sdkStdResult["parentCategory"] = $parentCategory;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>