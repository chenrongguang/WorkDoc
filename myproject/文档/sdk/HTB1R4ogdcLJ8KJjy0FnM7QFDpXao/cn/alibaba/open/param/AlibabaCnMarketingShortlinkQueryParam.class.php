<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortlinkQueryParam {

        
        /**
    * @return 短链唯一标识
    */
        public function getInstanceKey() {
        $tempResult = $this->sdkStdResult["instanceKey"];
        return $tempResult;
    }
    
    /**
     * 设置短链唯一标识     
     * @param String $instanceKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstanceKey( $instanceKey) {
        $this->sdkStdResult["instanceKey"] = $instanceKey;
    }
    
        
        /**
    * @return 短链类型:店铺商品短链(offer)、旺铺首页短链(homepage)、自定义短链(custom)
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置短链类型:店铺商品短链(offer)、旺铺首页短链(homepage)、自定义短链(custom)     
     * @param String $type     
     * 参数示例：<pre>offer/homepage/custom</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
        /**
    * @return 短链名称，支持模糊查询
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置短链名称，支持模糊查询     
     * @param String $name     
     * 参数示例：<pre>短链名称</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 短链url，支持模糊查询
    */
        public function getShortUrl() {
        $tempResult = $this->sdkStdResult["shortUrl"];
        return $tempResult;
    }
    
    /**
     * 设置短链url，支持模糊查询     
     * @param String $shortUrl     
     * 参数示例：<pre>https://url.m.1688.com/oKUbQ9sb</pre>     
     * 此参数必填     */
    public function setShortUrl( $shortUrl) {
        $this->sdkStdResult["shortUrl"] = $shortUrl;
    }
    
        
        /**
    * @return url，支持模糊查询
    */
        public function getUrl() {
        $tempResult = $this->sdkStdResult["url"];
        return $tempResult;
    }
    
    /**
     * 设置url，支持模糊查询     
     * @param String $url     
     * 参数示例：<pre>https://shop1412786546456.1688.com</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->sdkStdResult["url"] = $url;
    }
    
        
        /**
    * @return 设置查询该时间点以后创建的短链
    */
        public function getStartDate() {
        $tempResult = $this->sdkStdResult["startDate"];
        return $tempResult;
    }
    
    /**
     * 设置设置查询该时间点以后创建的短链     
     * @param Date $startDate     
     * 参数示例：<pre>2000-01-01 00:00:00</pre>     
     * 此参数必填     */
    public function setStartDate( $startDate) {
        $this->sdkStdResult["startDate"] = $startDate;
    }
    
        
        /**
    * @return 设置查询该时间点以前创建的短链
    */
        public function getEndDate() {
        $tempResult = $this->sdkStdResult["endDate"];
        return $tempResult;
    }
    
    /**
     * 设置设置查询该时间点以前创建的短链     
     * @param Date $endDate     
     * 参数示例：<pre>2000-01-01 00:00:00</pre>     
     * 此参数必填     */
    public function setEndDate( $endDate) {
        $this->sdkStdResult["endDate"] = $endDate;
    }
    
        
        /**
    * @return 设置当前分页，最小值为1
    */
        public function getNowPage() {
        $tempResult = $this->sdkStdResult["nowPage"];
        return $tempResult;
    }
    
    /**
     * 设置设置当前分页，最小值为1     
     * @param Integer $nowPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNowPage( $nowPage) {
        $this->sdkStdResult["nowPage"] = $nowPage;
    }
    
        
        /**
    * @return 设置当前分页大小，最小值为1,最大值为100
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置设置当前分页大小，最小值为1,最大值为100     
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