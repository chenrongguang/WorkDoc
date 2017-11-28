<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRightsUpdateAllRightsParam {

        
        /**
    * @return 权益设置类型
    */
        public function getRightType() {
        $tempResult = $this->sdkStdResult["rightType"];
        return $tempResult;
    }
    
    /**
     * 设置权益设置类型     
     * @param String $rightType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRightType( $rightType) {
        $this->sdkStdResult["rightType"] = $rightType;
    }
    
        
        /**
    * @return 全设置模型
    */
        public function getRightDetail() {
        $tempResult = $this->sdkStdResult["rightDetail"];
        return $tempResult;
    }
    
    /**
     * 设置全设置模型     
     * @param String $rightDetail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRightDetail( $rightDetail) {
        $this->sdkStdResult["rightDetail"] = $rightDetail;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>