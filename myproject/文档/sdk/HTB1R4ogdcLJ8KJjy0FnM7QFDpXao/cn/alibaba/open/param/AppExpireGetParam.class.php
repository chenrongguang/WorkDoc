<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AppExpireGetParam {

        
        /**
    * @return 订单到期时间
    */
        public function getGmtServiceEnd() {
        $tempResult = $this->sdkStdResult["gmtServiceEnd"];
        return $tempResult;
    }
    
    /**
     * 设置订单到期时间     
     * @param Date $gmtServiceEnd     
     * 参数示例：<pre>20130509120000000+0800</pre>     
     * 此参数必填     */
    public function setGmtServiceEnd( $gmtServiceEnd) {
        $this->sdkStdResult["gmtServiceEnd"] = $gmtServiceEnd;
    }
    
        
        /**
    * @return 订购者会员memberId
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置订购者会员memberId     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
        /**
    * @return 订单服务状态列表
B:服务前，S:服务中，P：挂起，E：关闭，C:作废
    */
        public function getBizStatusList() {
        $tempResult = $this->sdkStdResult["bizStatusList"];
        return $tempResult;
    }
    
    /**
     * 设置订单服务状态列表
B:服务前，S:服务中，P：挂起，E：关闭，C:作废     
     * @param List $bizStatusList     
     * 参数示例：<pre>["S","E"]</pre>     
     * 此参数必填     */
    public function setBizStatusList(array $bizStatusList) {
        $this->sdkStdResult["bizStatusList"] = $bizStatusList;
    }
    
        
        /**
    * @return 每页大小（用于分页）
限制：小于等于50
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页大小（用于分页）
限制：小于等于50     
     * @param Integer $pageSize     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 第几页 （用于分页）
    */
        public function getStartIndex() {
        $tempResult = $this->sdkStdResult["startIndex"];
        return $tempResult;
    }
    
    /**
     * 设置第几页 （用于分页）     
     * @param Integer $startIndex     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setStartIndex( $startIndex) {
        $this->sdkStdResult["startIndex"] = $startIndex;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>