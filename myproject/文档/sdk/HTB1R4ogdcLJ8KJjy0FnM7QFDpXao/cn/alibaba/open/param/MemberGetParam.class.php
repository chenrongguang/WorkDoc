<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MemberGetParam {

        
        /**
    * @return 会员id
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置会员id     
     * @param String $memberId     
     * 参数示例：<pre>ayisha000</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
        /**
    * @return 返回字段
    */
        public function getReturnFields() {
        $tempResult = $this->sdkStdResult["returnFields"];
        return $tempResult;
    }
    
    /**
     * 设置返回字段     
     * @param array include @see String[] $returnFields     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReturnFields( $returnFields) {
        $this->sdkStdResult["returnFields"] = $returnFields;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>