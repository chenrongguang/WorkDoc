<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BuyerGetParam {

        
        /**
    * @return 卖家会员ID
    */
        public function getSellerId() {
        $tempResult = $this->sdkStdResult["sellerId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家会员ID     
     * @param String $sellerId     
     * 参数示例：<pre>testFree</pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sdkStdResult["sellerId"] = $sellerId;
    }
    
        
        /**
    * @return 会员等级ID。若该值非空且有效，则返回归属该会员等级的买家信息
    */
        public function getMemberRankId() {
        $tempResult = $this->sdkStdResult["memberRankId"];
        return $tempResult;
    }
    
    /**
     * 设置会员等级ID。若该值非空且有效，则返回归属该会员等级的买家信息     
     * @param Long $memberRankId     
     * 参数示例：<pre>39537486</pre>     
     * 此参数必填     */
    public function setMemberRankId( $memberRankId) {
        $this->sdkStdResult["memberRankId"] = $memberRankId;
    }
    
        
        /**
    * @return 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。     
     * @param Integer $pageNo     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 分页条数。取值范围:大于零的整数;最大值：100；默认值：30。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页条数。取值范围:大于零的整数;最大值：100；默认值：30。     
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