<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MemberRankGetParam {

        
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
    * @return 会员等级ID
    */
        public function getMemberRankId() {
        $tempResult = $this->sdkStdResult["memberRankId"];
        return $tempResult;
    }
    
    /**
     * 设置会员等级ID     
     * @param Long $memberRankId     
     * 参数示例：<pre>756165</pre>     
     * 此参数必填     */
    public function setMemberRankId( $memberRankId) {
        $this->sdkStdResult["memberRankId"] = $memberRankId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>