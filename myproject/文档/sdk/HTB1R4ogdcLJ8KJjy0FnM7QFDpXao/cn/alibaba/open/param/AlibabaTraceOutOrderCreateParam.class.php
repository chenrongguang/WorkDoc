<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTraceOutOrderCreateParam {

        
        /**
    * @return 码类型，B或者C
    */
        public function getOrderType() {
        $tempResult = $this->sdkStdResult["orderType"];
        return $tempResult;
    }
    
    /**
     * 设置码类型，B或者C     
     * @param String $orderType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderType( $orderType) {
        $this->sdkStdResult["orderType"] = $orderType;
    }
    
        
        /**
    * @return 起始码段
    */
        public function getSnStart() {
        $tempResult = $this->sdkStdResult["snStart"];
        return $tempResult;
    }
    
    /**
     * 设置起始码段     
     * @param Long $snStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSnStart( $snStart) {
        $this->sdkStdResult["snStart"] = $snStart;
    }
    
        
        /**
    * @return 结束码段
    */
        public function getSnEnd() {
        $tempResult = $this->sdkStdResult["snEnd"];
        return $tempResult;
    }
    
    /**
     * 设置结束码段     
     * @param Long $snEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSnEnd( $snEnd) {
        $this->sdkStdResult["snEnd"] = $snEnd;
    }
    
        
        /**
    * @return 订单编号
    */
        public function getOrderCode() {
        $tempResult = $this->sdkStdResult["orderCode"];
        return $tempResult;
    }
    
    /**
     * 设置订单编号     
     * @param String $orderCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderCode( $orderCode) {
        $this->sdkStdResult["orderCode"] = $orderCode;
    }
    
        
        /**
    * @return 产品名称
    */
        public function getProductName() {
        $tempResult = $this->sdkStdResult["productName"];
        return $tempResult;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->sdkStdResult["productName"] = $productName;
    }
    
        
        /**
    * @return 产品编号
    */
        public function getProductCode() {
        $tempResult = $this->sdkStdResult["productCode"];
        return $tempResult;
    }
    
    /**
     * 设置产品编号     
     * @param String $productCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->sdkStdResult["productCode"] = $productCode;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>