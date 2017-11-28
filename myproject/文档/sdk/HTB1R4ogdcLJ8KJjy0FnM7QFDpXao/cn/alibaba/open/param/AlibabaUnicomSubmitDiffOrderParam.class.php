<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUnicomSubmitDiffOrderParam {

        
        /**
    * @return 电商的子订单订单号
    */
        public function getSupplierOrderId() {
        $tempResult = $this->sdkStdResult["supplierOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置电商的子订单订单号     
     * @param String $supplierOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierOrderId( $supplierOrderId) {
        $this->sdkStdResult["supplierOrderId"] = $supplierOrderId;
    }
    
        
        /**
    * @return 订单差异详细内容
    */
        public function getContent() {
        $tempResult = $this->sdkStdResult["content"];
        return $tempResult;
    }
    
    /**
     * 设置订单差异详细内容     
     * @param String $content     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->sdkStdResult["content"] = $content;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>