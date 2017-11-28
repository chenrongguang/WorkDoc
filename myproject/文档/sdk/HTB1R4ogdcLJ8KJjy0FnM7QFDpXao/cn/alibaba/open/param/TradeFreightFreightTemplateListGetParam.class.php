<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeFreightFreightTemplateListGetParam {

        
        /**
    * @return 会员ID
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置会员ID     
     * @param String $memberId     
     * 参数示例：<pre>ptpzouran106</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>