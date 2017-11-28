<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderMemoUpdateParam {

        
        /**
    * @return 
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 
    */
        public function getRemark() {
        $tempResult = $this->sdkStdResult["remark"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->sdkStdResult["remark"] = $remark;
    }
    
        
        /**
    * @return 
    */
        public function getRemarkIcon() {
        $tempResult = $this->sdkStdResult["remarkIcon"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $remarkIcon     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemarkIcon( $remarkIcon) {
        $this->sdkStdResult["remarkIcon"] = $remarkIcon;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>