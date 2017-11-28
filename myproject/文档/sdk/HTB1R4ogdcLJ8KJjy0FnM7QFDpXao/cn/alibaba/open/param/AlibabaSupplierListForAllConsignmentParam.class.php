<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSupplierListForAllConsignmentParam {

        
        /**
    * @return 模糊查询的关键字
    */
        public function getKeyword() {
        $tempResult = $this->sdkStdResult["keyword"];
        return $tempResult;
    }
    
    /**
     * 设置模糊查询的关键字     
     * @param String $keyword     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKeyword( $keyword) {
        $this->sdkStdResult["keyword"] = $keyword;
    }
    
        
        /**
    * @return 产品线Id
    */
        public function getProductlineId() {
        $tempResult = $this->sdkStdResult["productlineId"];
        return $tempResult;
    }
    
    /**
     * 设置产品线Id     
     * @param Long $productlineId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductlineId( $productlineId) {
        $this->sdkStdResult["productlineId"] = $productlineId;
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