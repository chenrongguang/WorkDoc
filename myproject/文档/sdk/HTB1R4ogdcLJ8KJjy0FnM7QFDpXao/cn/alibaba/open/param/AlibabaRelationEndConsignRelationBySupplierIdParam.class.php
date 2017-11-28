<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationEndConsignRelationBySupplierIdParam {

        
        /**
    * @return 分销商LoginId
    */
        public function getConsignerLoginId() {
        $tempResult = $this->sdkStdResult["consignerLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置分销商LoginId     
     * @param String $consignerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignerLoginId( $consignerLoginId) {
        $this->sdkStdResult["consignerLoginId"] = $consignerLoginId;
    }
    
        
        /**
    * @return 终止关系原因
    */
        public function getReason() {
        $tempResult = $this->sdkStdResult["reason"];
        return $tempResult;
    }
    
    /**
     * 设置终止关系原因     
     * @param String $reason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReason( $reason) {
        $this->sdkStdResult["reason"] = $reason;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>