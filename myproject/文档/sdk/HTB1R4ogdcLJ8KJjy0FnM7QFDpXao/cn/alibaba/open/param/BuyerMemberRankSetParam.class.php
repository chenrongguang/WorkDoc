<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BuyerMemberRankSetParam {

        
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
     * 参数示例：<pre>testSeller</pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sdkStdResult["sellerId"] = $sellerId;
    }
    
        
        /**
    * @return 买家会员ID
    */
        public function getBuyerId() {
        $tempResult = $this->sdkStdResult["buyerId"];
        return $tempResult;
    }
    
    /**
     * 设置买家会员ID     
     * @param String $buyerId     
     * 参数示例：<pre>testBuyer</pre>     
     * 此参数必填     */
    public function setBuyerId( $buyerId) {
        $this->sdkStdResult["buyerId"] = $buyerId;
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
     * 参数示例：<pre>783274832</pre>     
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