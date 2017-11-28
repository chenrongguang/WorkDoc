<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSellerCouponGetParam {

        
        /**
    * @return 卖家的userid
    */
        public function getSellerId() {
        $tempResult = $this->sdkStdResult["sellerId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家的userid     
     * @param Long $sellerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sdkStdResult["sellerId"] = $sellerId;
    }
    
        
        /**
    * @return 券类型过滤：店铺券为0、商品券为1、包邮券为8。
如果传入空集合，则默认查询0、1、8三种类型的卡券
    */
        public function getCouponTypes() {
        $tempResult = $this->sdkStdResult["couponTypes"];
        return $tempResult;
    }
    
    /**
     * 设置券类型过滤：店铺券为0、商品券为1、包邮券为8。
如果传入空集合，则默认查询0、1、8三种类型的卡券     
     * @param Set $couponTypes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponTypes(array $couponTypes) {
        $this->sdkStdResult["couponTypes"] = $couponTypes;
    }
    
        
        /**
    * @return 优惠券使用终端：所有终端可使用为0；手机专享为2
    */
        public function getTerminal() {
        $tempResult = $this->sdkStdResult["terminal"];
        return $tempResult;
    }
    
    /**
     * 设置优惠券使用终端：所有终端可使用为0；手机专享为2     
     * @param Integer $terminal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTerminal( $terminal) {
        $this->sdkStdResult["terminal"] = $terminal;
    }
    
        
        /**
    * @return 页码：第一页从1开始
    */
        public function getPageIndex() {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置页码：第一页从1开始     
     * @param Integer $pageIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
        /**
    * @return 每页大小：默认值为10，最大值150
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页大小：默认值为10，最大值150     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>