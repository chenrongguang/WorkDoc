<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiBuyofferCloseBuyOfferParam {

        
        /**
    * @return 询价单id，为创建询价单api的返回值
    */
        public function getBuyOfferId() {
        $tempResult = $this->sdkStdResult["buyOfferId"];
        return $tempResult;
    }
    
    /**
     * 设置询价单id，为创建询价单api的返回值     
     * @param Long $buyOfferId     
     * 参数示例：<pre>70012132</pre>     
     * 此参数必填     */
    public function setBuyOfferId( $buyOfferId) {
        $this->sdkStdResult["buyOfferId"] = $buyOfferId;
    }
    
        
        /**
    * @return 关闭询价单原因【不要超过20个字符】
    */
        public function getCloseReason() {
        $tempResult = $this->sdkStdResult["closeReason"];
        return $tempResult;
    }
    
    /**
     * 设置关闭询价单原因【不要超过20个字符】     
     * @param String $closeReason     
     * 参数示例：<pre>未收到合适的报价</pre>     
     * 此参数必填     */
    public function setCloseReason( $closeReason) {
        $this->sdkStdResult["closeReason"] = $closeReason;
    }
    
        
        /**
    * @return 关闭询价单的详细描述【不要超过40个字符】
    */
        public function getCloseDesc() {
        $tempResult = $this->sdkStdResult["closeDesc"];
        return $tempResult;
    }
    
    /**
     * 设置关闭询价单的详细描述【不要超过40个字符】     
     * @param String $closeDesc     
     * 参数示例：<pre>这些报价要么价格比较贵，要么供应商不够优秀</pre>     
     * 此参数必填     */
    public function setCloseDesc( $closeDesc) {
        $this->sdkStdResult["closeDesc"] = $closeDesc;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>