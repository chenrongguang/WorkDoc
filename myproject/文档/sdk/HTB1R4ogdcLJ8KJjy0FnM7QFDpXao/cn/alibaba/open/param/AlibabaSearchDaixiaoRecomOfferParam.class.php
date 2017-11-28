<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoRecomRequest.class.php');

class AlibabaSearchDaixiaoRecomOfferParam {

        
        /**
    * @return 查询参数
    */
        public function getRequest() {
        $tempResult = $this->sdkStdResult["request"];
        return $tempResult;
    }
    
    /**
     * 设置查询参数     
     * @param ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoRecomRequest $request     
     * 参数示例：<pre>{
    userId:123,//淘宝用户id
    companyMemberId:'xxx',//供应商id
    pageSize:10,//每页大小
    currentPage// 当前页
}</pre>     
     * 此参数必填     */
    public function setRequest(ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoRecomRequest $request) {
        $this->sdkStdResult["request"] = $request;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>