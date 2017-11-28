<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CompanyGetParam {

        
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
     * 参数示例：<pre>jaffiy</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
        /**
    * @return 自定义返回字段。在companInfo结构中选择需要返回的字段名称，半角逗号分隔
    */
        public function getReturnFields() {
        $tempResult = $this->sdkStdResult["returnFields"];
        return $tempResult;
    }
    
    /**
     * 设置自定义返回字段。在companInfo结构中选择需要返回的字段名称，半角逗号分隔     
     * @param array include @see String[] $returnFields     
     * 参数示例：<pre>companyName,productionService,companyCategoryInfo,foundedPlace</pre>     
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