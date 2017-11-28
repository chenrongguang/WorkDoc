<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/TracedTracedQuality.class.php');

class TracedProductSaveParam {

        
        /**
    * @return 批次ID
    */
        public function getBatchId() {
        $tempResult = $this->sdkStdResult["batchId"];
        return $tempResult;
    }
    
    /**
     * 设置批次ID     
     * @param String $batchId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBatchId( $batchId) {
        $this->sdkStdResult["batchId"] = $batchId;
    }
    
        
        /**
    * @return 批次密码
    */
        public function getBatchPassword() {
        $tempResult = $this->sdkStdResult["batchPassword"];
        return $tempResult;
    }
    
    /**
     * 设置批次密码     
     * @param String $batchPassword     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBatchPassword( $batchPassword) {
        $this->sdkStdResult["batchPassword"] = $batchPassword;
    }
    
        
        /**
    * @return 质检结果
    */
        public function getProperties() {
        $tempResult = $this->sdkStdResult["properties"];
        return $tempResult;
    }
    
    /**
     * 设置质检结果     
     * @param array include @see TracedTracedQuality[] $properties     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProperties(TracedTracedQuality $properties) {
        $this->sdkStdResult["properties"] = $properties;
    }
    
        
        /**
    * @return 产品名称
    */
        public function getProductName() {
        $tempResult = $this->sdkStdResult["productName"];
        return $tempResult;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->sdkStdResult["productName"] = $productName;
    }
    
        
        /**
    * @return 产品唯一ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置产品唯一ID     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 公司名称
    */
        public function getCompanyName() {
        $tempResult = $this->sdkStdResult["companyName"];
        return $tempResult;
    }
    
    /**
     * 设置公司名称     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->sdkStdResult["companyName"] = $companyName;
    }
    
        
        /**
    * @return 认证组织
    */
        public function getOrganization() {
        $tempResult = $this->sdkStdResult["organization"];
        return $tempResult;
    }
    
    /**
     * 设置认证组织     
     * @param String $organization     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrganization( $organization) {
        $this->sdkStdResult["organization"] = $organization;
    }
    
        
        /**
    * @return 质检报告
    */
        public function getQualityReport() {
        $tempResult = $this->sdkStdResult["qualityReport"];
        return $tempResult;
    }
    
    /**
     * 设置质检报告     
     * @param List $qualityReport     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQualityReport(array $qualityReport) {
        $this->sdkStdResult["qualityReport"] = $qualityReport;
    }
    
        
        /**
    * @return 产地
    */
        public function getArea() {
        $tempResult = $this->sdkStdResult["area"];
        return $tempResult;
    }
    
    /**
     * 设置产地     
     * @param String $area     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setArea( $area) {
        $this->sdkStdResult["area"] = $area;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>