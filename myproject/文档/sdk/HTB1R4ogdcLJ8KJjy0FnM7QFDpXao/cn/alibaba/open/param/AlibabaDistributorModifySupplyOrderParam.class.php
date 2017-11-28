<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorModifySupplyOrderParam {

        
        /**
    * @return 采购单Id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置采购单Id     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return sku规格Id，例如af478130f6c683c4c77bb511796617d7，非sku类型则不用传
    */
        public function getSpecId() {
        $tempResult = $this->sdkStdResult["specId"];
        return $tempResult;
    }
    
    /**
     * 设置sku规格Id，例如af478130f6c683c4c77bb511796617d7，非sku类型则不用传     
     * @param String $specId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->sdkStdResult["specId"] = $specId;
    }
    
        
        /**
    * @return sku规格信息的Map,key为规格属性名称，value为规格属性值，例如{"颜色":"黄色","尺码":"XS"}
    */
        public function getSpecInfo() {
        $tempResult = $this->sdkStdResult["specInfo"];
        return $tempResult;
    }
    
    /**
     * 设置sku规格信息的Map,key为规格属性名称，value为规格属性值，例如{"颜色":"黄色","尺码":"XS"}     
     * @param Map $specInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecInfo(array $specInfo) {
        $this->sdkStdResult["specInfo"] = $specInfo;
    }
    
        
        /**
    * @return 购买数量
    */
        public function getBuyAmount() {
        $tempResult = $this->sdkStdResult["buyAmount"];
        return $tempResult;
    }
    
    /**
     * 设置购买数量     
     * @param Long $buyAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyAmount( $buyAmount) {
        $this->sdkStdResult["buyAmount"] = $buyAmount;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>