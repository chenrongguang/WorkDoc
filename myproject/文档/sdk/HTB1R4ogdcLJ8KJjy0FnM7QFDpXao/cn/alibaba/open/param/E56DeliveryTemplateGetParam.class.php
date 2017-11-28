<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class E56DeliveryTemplateGetParam {

        
        /**
    * @return 模板ID
    */
        public function getTemplateId() {
        $tempResult = $this->sdkStdResult["templateId"];
        return $tempResult;
    }
    
    /**
     * 设置模板ID     
     * @param String $templateId     
     * 参数示例：<pre>13223</pre>     
     * 此参数必填     */
    public function setTemplateId( $templateId) {
        $this->sdkStdResult["templateId"] = $templateId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>