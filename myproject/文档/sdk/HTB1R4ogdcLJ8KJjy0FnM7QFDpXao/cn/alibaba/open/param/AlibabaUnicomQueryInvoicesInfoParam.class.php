<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUnicomQueryInvoicesInfoParam {

        
        /**
    * @return 第三方申请发票的唯一id标识
    */
        public function getMarkId() {
        $tempResult = $this->sdkStdResult["markId"];
        return $tempResult;
    }
    
    /**
     * 设置第三方申请发票的唯一id标识     
     * @param String $markId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarkId( $markId) {
        $this->sdkStdResult["markId"] = $markId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>