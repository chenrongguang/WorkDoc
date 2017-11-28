<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandMemberReadServiceQueryMemberAuthBrandListParam {

        
        /**
    * @return 发布类目id
    */
        public function getCategory() {
        $tempResult = $this->sdkStdResult["category"];
        return $tempResult;
    }
    
    /**
     * 设置发布类目id     
     * @param Long $category     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setCategory( $category) {
        $this->sdkStdResult["category"] = $category;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>