<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductQueryProductParam {

        
        /**
    * @return 操作人员编号
    */
        public function getEmployeeId() {
        $tempResult = $this->sdkStdResult["employeeId"];
        return $tempResult;
    }
    
    /**
     * 设置操作人员编号     
     * @param String $employeeId     
     * 参数示例：<pre>emorg_001</pre>     
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->sdkStdResult["employeeId"] = $employeeId;
    }
    
        
        /**
    * @return 产品名(模糊查询)
    */
        public function getInputTitle() {
        $tempResult = $this->sdkStdResult["inputTitle"];
        return $tempResult;
    }
    
    /**
     * 设置产品名(模糊查询)     
     * @param String $inputTitle     
     * 参数示例：<pre>JEEP车保险杠</pre>     
     * 此参数必填     */
    public function setInputTitle( $inputTitle) {
        $this->sdkStdResult["inputTitle"] = $inputTitle;
    }
    
        
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
    * @return 分页页码
    */
        public function getPageIndex() {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置分页页码     
     * @param Integer $pageIndex     
     * 参数示例：<pre>大于0的整数</pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
        /**
    * @return 单页数据行数
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置单页数据行数     
     * @param Integer $pageSize     
     * 参数示例：<pre>大于0的整数</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>