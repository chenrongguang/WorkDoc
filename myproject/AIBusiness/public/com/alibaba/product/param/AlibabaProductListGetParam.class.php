<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductListGetParam {

        
        /**
    * @return 业务标
    */
        public function getSigns() {
        $tempResult = $this->sdkStdResult["signs"];
        return $tempResult;
    }
    
    /**
     * 设置业务标     
     * @param array include @see String[] $signs     
     * 参数示例：<pre>['isMicroSupply']</pre>     
     * 此参数必填     */
    public function setSigns( $signs) {
        $this->sdkStdResult["signs"] = $signs;
    }
    
        
        /**
    * @return 业务名
    */
        public function getProductSupportedBizGroups() {
        $tempResult = $this->sdkStdResult["productSupportedBizGroups"];
        return $tempResult;
    }
    
    /**
     * 设置业务名     
     * @param array include @see String[] $productSupportedBizGroups     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductSupportedBizGroups( $productSupportedBizGroups) {
        $this->sdkStdResult["productSupportedBizGroups"] = $productSupportedBizGroups;
    }
    
        
        /**
    * @return 分页参数，起始为1
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置分页参数，起始为1     
     * @param Integer $pageNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 分页参数，每页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页参数，每页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 商品状态
    */
        public function getStatusList() {
        $tempResult = $this->sdkStdResult["statusList"];
        return $tempResult;
    }
    
    /**
     * 设置商品状态     
     * @param array include @see String[] $statusList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatusList( $statusList) {
        $this->sdkStdResult["statusList"] = $statusList;
    }
    
        
        /**
    * @return 类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 产品修改开始时间
    */
        public function getStartModifyTime() {
        $tempResult = $this->sdkStdResult["startModifyTime"];
        return $tempResult;
    }
    
    /**
     * 设置产品修改开始时间     
     * @param Date $startModifyTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartModifyTime( $startModifyTime) {
        $this->sdkStdResult["startModifyTime"] = $startModifyTime;
    }
    
        
        /**
    * @return 产品修改结束时间
    */
        public function getEndModifyTime() {
        $tempResult = $this->sdkStdResult["endModifyTime"];
        return $tempResult;
    }
    
    /**
     * 设置产品修改结束时间     
     * @param Date $endModifyTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndModifyTime( $endModifyTime) {
        $this->sdkStdResult["endModifyTime"] = $endModifyTime;
    }
    
        
        /**
    * @return 关键词
    */
        public function getSubjectKey() {
        $tempResult = $this->sdkStdResult["subjectKey"];
        return $tempResult;
    }
    
    /**
     * 设置关键词     
     * @param String $subjectKey     
     * 参数示例：<pre>关键词</pre>     
     * 此参数必填     */
    public function setSubjectKey( $subjectKey) {
        $this->sdkStdResult["subjectKey"] = $subjectKey;
    }
    
        
        /**
    * @return 货号
    */
        public function getCargoNumber() {
        $tempResult = $this->sdkStdResult["cargoNumber"];
        return $tempResult;
    }
    
    /**
     * 设置货号     
     * @param String $cargoNumber     
     * 参数示例：<pre>货号</pre>     
     * 此参数必填     */
    public function setCargoNumber( $cargoNumber) {
        $this->sdkStdResult["cargoNumber"] = $cargoNumber;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>