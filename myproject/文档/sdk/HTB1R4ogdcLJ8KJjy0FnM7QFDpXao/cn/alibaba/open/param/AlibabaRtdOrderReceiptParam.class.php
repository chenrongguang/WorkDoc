<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaRtdOrderOpenReceiptSubParam.class.php');

class AlibabaRtdOrderReceiptParam {

        
        /**
    * @return 三江购物订单编号
    */
        public function getBillNo() {
        $tempResult = $this->sdkStdResult["billNo"];
        return $tempResult;
    }
    
    /**
     * 设置三江购物订单编号     
     * @param String $billNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBillNo( $billNo) {
        $this->sdkStdResult["billNo"] = $billNo;
    }
    
        
        /**
    * @return 对应内部订单编号
    */
        public function getAliBillNo() {
        $tempResult = $this->sdkStdResult["aliBillNo"];
        return $tempResult;
    }
    
    /**
     * 设置对应内部订单编号     
     * @param String $aliBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliBillNo( $aliBillNo) {
        $this->sdkStdResult["aliBillNo"] = $aliBillNo;
    }
    
        
        /**
    * @return 实际收货总数量
    */
        public function getRealAmount() {
        $tempResult = $this->sdkStdResult["realAmount"];
        return $tempResult;
    }
    
    /**
     * 设置实际收货总数量     
     * @param Integer $realAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealAmount( $realAmount) {
        $this->sdkStdResult["realAmount"] = $realAmount;
    }
    
        
        /**
    * @return 具体的商品收货信息
    */
        public function getItems() {
        $tempResult = $this->sdkStdResult["items"];
        return $tempResult;
    }
    
    /**
     * 设置具体的商品收货信息     
     * @param array include @see AlibabaRtdOrderOpenReceiptSubParam[] $items     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItems(AlibabaRtdOrderOpenReceiptSubParam $items) {
        $this->sdkStdResult["items"] = $items;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>