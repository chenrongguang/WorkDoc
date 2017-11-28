<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferGroupSetParam {

        
        /**
    * @return on或者off，on对应设置显示标记的开启，即：显示；off对应显示标记的关闭，即：不显示
    */
        public function getSwitchType() {
        $tempResult = $this->sdkStdResult["switchType"];
        return $tempResult;
    }
    
    /**
     * 设置on或者off，on对应设置显示标记的开启，即：显示；off对应显示标记的关闭，即：不显示     
     * @param String $switchType     
     * 参数示例：<pre>on</pre>     
     * 此参数必填     */
    public function setSwitchType( $switchType) {
        $this->sdkStdResult["switchType"] = $switchType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>