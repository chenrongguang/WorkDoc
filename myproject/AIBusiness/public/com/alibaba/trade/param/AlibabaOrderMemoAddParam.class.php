<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOrderMemoAddParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderId     
     * 参数示例：<pre>1234567</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 备注信息
    */
        public function getMemo() {
        $tempResult = $this->sdkStdResult["memo"];
        return $tempResult;
    }
    
    /**
     * 设置备注信息     
     * @param String $memo     
     * 参数示例：<pre>订单备注详情</pre>     
     * 此参数必填     */
    public function setMemo( $memo) {
        $this->sdkStdResult["memo"] = $memo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>