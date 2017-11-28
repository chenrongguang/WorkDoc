<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpUserCategoryGetByCodeParam {

        
        /**
    * @return Erp系统中的类目编号
    */
        public function getCategoryCode() {
        $tempResult = $this->sdkStdResult["categoryCode"];
        return $tempResult;
    }
    
    /**
     * 设置Erp系统中的类目编号     
     * @param String $categoryCode     
     * 参数示例：<pre>cat0001</pre>     
     * 此参数必填     */
    public function setCategoryCode( $categoryCode) {
        $this->sdkStdResult["categoryCode"] = $categoryCode;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>