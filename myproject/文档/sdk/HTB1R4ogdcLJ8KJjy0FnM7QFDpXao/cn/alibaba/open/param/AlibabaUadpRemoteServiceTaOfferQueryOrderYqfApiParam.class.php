<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUadpRemoteServiceTaOfferQueryOrderYqfApiParam {

        
        /**
    * @return 时间，格式yyyy-MM-dd
    */
        public function getTime() {
        $tempResult = $this->sdkStdResult["time"];
        return $tempResult;
    }
    
    /**
     * 设置时间，格式yyyy-MM-dd     
     * @param String $time     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTime( $time) {
        $this->sdkStdResult["time"] = $time;
    }
    
        
        /**
    * @return 时间类型，0创建时间；1更新时间
    */
        public function getTimeType() {
        $tempResult = $this->sdkStdResult["timeType"];
        return $tempResult;
    }
    
    /**
     * 设置时间类型，0创建时间；1更新时间     
     * @param Integer $timeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTimeType( $timeType) {
        $this->sdkStdResult["timeType"] = $timeType;
    }
    
        
        /**
    * @return 
    */
        public function getPageOffset() {
        $tempResult = $this->sdkStdResult["pageOffset"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Integer $pageOffset     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageOffset( $pageOffset) {
        $this->sdkStdResult["pageOffset"] = $pageOffset;
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
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>