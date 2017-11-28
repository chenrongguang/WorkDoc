<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CreditInfoGetParam {

        
        /**
    * @return 会员ID，多个ID半角用分号连接，如：test1;test2 最多可以传200个会员ID
    */
        public function getMemberIds() {
        $tempResult = $this->sdkStdResult["memberIds"];
        return $tempResult;
    }
    
    /**
     * 设置会员ID，多个ID半角用分号连接，如：test1;test2 最多可以传200个会员ID     
     * @param String $memberIds     
     * 参数示例：<pre>testfree</pre>     
     * 此参数必填     */
    public function setMemberIds( $memberIds) {
        $this->sdkStdResult["memberIds"] = $memberIds;
    }
    
        
        /**
    * @return SMALL 小图标；STANDARD 标准图标；WINPORT 旺铺图标；CREDIT 信用标识（默认值）；LARGE_TRANSPARENT 透明图标；SMALL_SEARCH 搜索引擎页面展示诚信通logo图标
    */
        public function getLogoStyle() {
        $tempResult = $this->sdkStdResult["logoStyle"];
        return $tempResult;
    }
    
    /**
     * 设置SMALL 小图标；STANDARD 标准图标；WINPORT 旺铺图标；CREDIT 信用标识（默认值）；LARGE_TRANSPARENT 透明图标；SMALL_SEARCH 搜索引擎页面展示诚信通logo图标     
     * @param String $logoStyle     
     * 参数示例：<pre>STANDARD</pre>     
     * 此参数必填     */
    public function setLogoStyle( $logoStyle) {
        $this->sdkStdResult["logoStyle"] = $logoStyle;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>