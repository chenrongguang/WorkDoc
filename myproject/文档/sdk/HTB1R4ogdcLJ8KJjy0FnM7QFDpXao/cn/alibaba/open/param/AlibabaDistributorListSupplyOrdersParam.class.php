<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorListSupplyOrdersParam {

        
        /**
    * @return 模糊查询关键字
    */
        public function getKeyword() {
        $tempResult = $this->sdkStdResult["keyword"];
        return $tempResult;
    }
    
    /**
     * 设置模糊查询关键字     
     * @param String $keyword     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKeyword( $keyword) {
        $this->sdkStdResult["keyword"] = $keyword;
    }
    
        
        /**
    * @return 供应商memberId
    */
        public function getSupplierMemberId() {
        $tempResult = $this->sdkStdResult["supplierMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $supplierMemberId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->sdkStdResult["supplierMemberId"] = $supplierMemberId;
    }
    
        
        /**
    * @return 数据状态，0：待处理（正常），1：已删除（逻辑删除），2：已忽略
    */
        public function getDataStatus() {
        $tempResult = $this->sdkStdResult["dataStatus"];
        return $tempResult;
    }
    
    /**
     * 设置数据状态，0：待处理（正常），1：已删除（逻辑删除），2：已忽略     
     * @param Long $dataStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDataStatus( $dataStatus) {
        $this->sdkStdResult["dataStatus"] = $dataStatus;
    }
    
        
        /**
    * @return 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页码。取值范围:大于零的整数;默认值为1，即返回第一页数据     
     * @param Integer $pageNo     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 返回列表结果集每页条数。取值范围:大于零的整数;默认为20条，网页端默认10条
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置返回列表结果集每页条数。取值范围:大于零的整数;默认为20条，网页端默认10条     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
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