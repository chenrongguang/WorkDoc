<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUnicomQueryOrderParam {

        
        /**
    * @return 开始时间
    */
        public function getStartDate() {
        $tempResult = $this->sdkStdResult["startDate"];
        return $tempResult;
    }
    
    /**
     * 设置开始时间     
     * @param String $startDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartDate( $startDate) {
        $this->sdkStdResult["startDate"] = $startDate;
    }
    
        
        /**
    * @return 结束时间
    */
        public function getEndDate() {
        $tempResult = $this->sdkStdResult["endDate"];
        return $tempResult;
    }
    
    /**
     * 设置结束时间     
     * @param String $endDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndDate( $endDate) {
        $this->sdkStdResult["endDate"] = $endDate;
    }
    
        
        /**
    * @return 订单类别
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置订单类别     
     * @param Integer $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
        /**
    * @return 当前页码
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码     
     * @param Integer $page     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>