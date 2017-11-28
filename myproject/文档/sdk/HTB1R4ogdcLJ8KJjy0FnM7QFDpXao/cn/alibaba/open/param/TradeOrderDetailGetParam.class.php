<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderDetailGetParam {

        
        /**
    * @return 订单号
    */
        public function getId() {
        $tempResult = $this->sdkStdResult["id"];
        return $tempResult;
    }
    
    /**
     * 设置订单号     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->sdkStdResult["id"] = $id;
    }
    
        
        /**
    * @return 是否需要订单明细
    */
        public function getNeedOrderEntries() {
        $tempResult = $this->sdkStdResult["needOrderEntries"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要订单明细     
     * @param Boolean $needOrderEntries     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedOrderEntries( $needOrderEntries) {
        $this->sdkStdResult["needOrderEntries"] = $needOrderEntries;
    }
    
        
        /**
    * @return 是否需要发票信息
    */
        public function getNeedInvoiceInfo() {
        $tempResult = $this->sdkStdResult["needInvoiceInfo"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要发票信息     
     * @param Boolean $needInvoiceInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedInvoiceInfo( $needInvoiceInfo) {
        $this->sdkStdResult["needInvoiceInfo"] = $needInvoiceInfo;
    }
    
        
        /**
    * @return 是否需要订单备注
    */
        public function getNeedOrderMemoList() {
        $tempResult = $this->sdkStdResult["needOrderMemoList"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要订单备注     
     * @param Boolean $needOrderMemoList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedOrderMemoList( $needOrderMemoList) {
        $this->sdkStdResult["needOrderMemoList"] = $needOrderMemoList;
    }
    
        
        /**
    * @return 是否需要物流单信息
    */
        public function getNeedLogisticsOrderList() {
        $tempResult = $this->sdkStdResult["needLogisticsOrderList"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要物流单信息     
     * @param Boolean $needLogisticsOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedLogisticsOrderList( $needLogisticsOrderList) {
        $this->sdkStdResult["needLogisticsOrderList"] = $needLogisticsOrderList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>