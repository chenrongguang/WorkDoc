<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductListParam {

        
        /**
    * @return 
    */
        public function getKeyword() {
        $tempResult = $this->sdkStdResult["keyword"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $keyword     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKeyword( $keyword) {
        $this->sdkStdResult["keyword"] = $keyword;
    }
    
        
        /**
    * @return 
    */
        public function getSearchType() {
        $tempResult = $this->sdkStdResult["searchType"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $searchType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSearchType( $searchType) {
        $this->sdkStdResult["searchType"] = $searchType;
    }
    
        
        /**
    * @return 
    */
        public function getImageSize() {
        $tempResult = $this->sdkStdResult["imageSize"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $imageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageSize( $imageSize) {
        $this->sdkStdResult["imageSize"] = $imageSize;
    }
    
        
        /**
    * @return 
    */
        public function getPageIndex() {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Integer $pageIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
        /**
    * @return 
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 
    */
        public function getIp() {
        $tempResult = $this->sdkStdResult["ip"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $ip     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIp( $ip) {
        $this->sdkStdResult["ip"] = $ip;
    }
    
        
        /**
    * @return 
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Integer $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 
    */
        public function getRankId() {
        $tempResult = $this->sdkStdResult["rankId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Integer $rankId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRankId( $rankId) {
        $this->sdkStdResult["rankId"] = $rankId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>