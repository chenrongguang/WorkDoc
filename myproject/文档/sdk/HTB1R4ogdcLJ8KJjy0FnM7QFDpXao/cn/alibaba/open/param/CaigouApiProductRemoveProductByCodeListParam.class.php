<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductRemoveProductByCodeListParam {

        
        /**
    * @return 产品编号列表
    */
        public function getProductCodeList() {
        $tempResult = $this->sdkStdResult["productCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置产品编号列表     
     * @param List $productCodeList     
     * 参数示例：<pre>["prod_01","prod_02"]</pre>     
     * 此参数必填     */
    public function setProductCodeList(array $productCodeList) {
        $this->sdkStdResult["productCodeList"] = $productCodeList;
    }
    
        
        /**
    * @return 操作人编号
    */
        public function getEmployeeId() {
        $tempResult = $this->sdkStdResult["employeeId"];
        return $tempResult;
    }
    
    /**
     * 设置操作人编号     
     * @param String $employeeId     
     * 参数示例：<pre>em_user_01</pre>     
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->sdkStdResult["employeeId"] = $employeeId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>