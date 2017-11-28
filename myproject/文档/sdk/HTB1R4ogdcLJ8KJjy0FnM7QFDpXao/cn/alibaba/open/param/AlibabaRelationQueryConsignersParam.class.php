<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationQueryConsignersParam {

        
        /**
    * @return 指定分销商LoginId
    */
        public function getConsignerLoginId() {
        $tempResult = $this->sdkStdResult["consignerLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置指定分销商LoginId     
     * @param String $consignerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignerLoginId( $consignerLoginId) {
        $this->sdkStdResult["consignerLoginId"] = $consignerLoginId;
    }
    
        
        /**
    * @return 分销商等级
    */
        public function getConsignerGrade() {
        $tempResult = $this->sdkStdResult["consignerGrade"];
        return $tempResult;
    }
    
    /**
     * 设置分销商等级     
     * @param Long $consignerGrade     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignerGrade( $consignerGrade) {
        $this->sdkStdResult["consignerGrade"] = $consignerGrade;
    }
    
        
        /**
    * @return 当前页码
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码     
     * @param Integer $currentPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 每页多少个
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页多少个     
     * @param Integer $pageSize     
     * 参数示例：<pre>10</pre>     
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