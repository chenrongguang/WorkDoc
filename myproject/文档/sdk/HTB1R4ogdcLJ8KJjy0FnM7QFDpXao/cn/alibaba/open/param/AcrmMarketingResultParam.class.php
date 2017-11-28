<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AcrmMarketingResultParam {

        
        /**
    * @return 营销类型
    */
        public function getMarketingType() {
        $tempResult = $this->sdkStdResult["marketingType"];
        return $tempResult;
    }
    
    /**
     * 设置营销类型     
     * @param String $marketingType     
     * 参数示例：<pre>SMS,EDM</pre>     
     * 此参数必填     */
    public function setMarketingType( $marketingType) {
        $this->sdkStdResult["marketingType"] = $marketingType;
    }
    
        
        /**
    * @return 营销活动创建时间
    */
        public function getMarketingActionCreateTime() {
        $tempResult = $this->sdkStdResult["marketingActionCreateTime"];
        return $tempResult;
    }
    
    /**
     * 设置营销活动创建时间     
     * @param Date $marketingActionCreateTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarketingActionCreateTime( $marketingActionCreateTime) {
        $this->sdkStdResult["marketingActionCreateTime"] = $marketingActionCreateTime;
    }
    
        
        /**
    * @return 营销活动发送人数
    */
        public function getMarketingMemberCount() {
        $tempResult = $this->sdkStdResult["marketingMemberCount"];
        return $tempResult;
    }
    
    /**
     * 设置营销活动发送人数     
     * @param Long $marketingMemberCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarketingMemberCount( $marketingMemberCount) {
        $this->sdkStdResult["marketingMemberCount"] = $marketingMemberCount;
    }
    
        
        /**
    * @return 引导页传入的actionId
    */
        public function getReferActionId() {
        $tempResult = $this->sdkStdResult["referActionId"];
        return $tempResult;
    }
    
    /**
     * 设置引导页传入的actionId     
     * @param String $referActionId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReferActionId( $referActionId) {
        $this->sdkStdResult["referActionId"] = $referActionId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>