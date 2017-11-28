<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MemberGetLoginUriParam {

        
        /**
    * @return 登录成功后跳转的第三方应用URL地址
    */
        public function getReturnUrl() {
        $tempResult = $this->sdkStdResult["returnUrl"];
        return $tempResult;
    }
    
    /**
     * 设置登录成功后跳转的第三方应用URL地址     
     * @param String $returnUrl     
     * 参数示例：<pre>http://www.csfz.cn/</pre>     
     * 此参数必填     */
    public function setReturnUrl( $returnUrl) {
        $this->sdkStdResult["returnUrl"] = $returnUrl;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>