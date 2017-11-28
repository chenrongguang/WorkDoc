<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationUpdateAllRightsRightTypeParam {

        
        /**
    * @return 优惠类型
    */
        public function getRightType() {
        $tempResult = $this->sdkStdResult["rightType"];
        return $tempResult;
    }
    
    /**
     * 设置优惠类型     
     * @param String $rightType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRightType( $rightType) {
        $this->sdkStdResult["rightType"] = $rightType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>