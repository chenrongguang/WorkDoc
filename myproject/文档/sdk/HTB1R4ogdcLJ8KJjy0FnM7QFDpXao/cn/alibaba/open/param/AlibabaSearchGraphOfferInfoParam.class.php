<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchGraphOfferInfoParam {

        
        /**
    * @return 淘宝用户的登陆的nickName
    */
        public function getTaobaoNickName() {
        $tempResult = $this->sdkStdResult["taobaoNickName"];
        return $tempResult;
    }
    
    /**
     * 设置淘宝用户的登陆的nickName     
     * @param String $taobaoNickName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaobaoNickName( $taobaoNickName) {
        $this->sdkStdResult["taobaoNickName"] = $taobaoNickName;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>