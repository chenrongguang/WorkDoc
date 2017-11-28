<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCnMarketingShortlinkCreateParam {

        
        /**
    * @return 短链名称（最多只能为128个中文字符）
    */
        public function getShortUrlName() {
        $tempResult = $this->sdkStdResult["shortUrlName"];
        return $tempResult;
    }
    
    /**
     * 设置短链名称（最多只能为128个中文字符）     
     * @param String $shortUrlName     
     * 参数示例：<pre>短链名称</pre>     
     * 此参数必填     */
    public function setShortUrlName( $shortUrlName) {
        $this->sdkStdResult["shortUrlName"] = $shortUrlName;
    }
    
        
        /**
    * @return 短链类型有三种：店铺商品短链(offer)、旺铺首页短链(homepage)、自定义短链(custom)
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置短链类型有三种：店铺商品短链(offer)、旺铺首页短链(homepage)、自定义短链(custom)     
     * @param String $type     
     * 参数示例：<pre>offer/homepage/custom</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
        /**
    * @return 短链类型为offer时必须传入offerId；类型为homepage时必须传入空值;类型为custon时必须传入自定义URL(URL必须为*.1688.com域名下的URL)
    */
        public function getShortUrlData() {
        $tempResult = $this->sdkStdResult["shortUrlData"];
        return $tempResult;
    }
    
    /**
     * 设置短链类型为offer时必须传入offerId；类型为homepage时必须传入空值;类型为custon时必须传入自定义URL(URL必须为*.1688.com域名下的URL)     
     * @param String $shortUrlData     
     * 参数示例：<pre>type为offer时：2200793921355; type为homepage时：""或者null; type为custom时：http(s)://abc.1688.com;</pre>     
     * 此参数必填     */
    public function setShortUrlData( $shortUrlData) {
        $this->sdkStdResult["shortUrlData"] = $shortUrlData;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>