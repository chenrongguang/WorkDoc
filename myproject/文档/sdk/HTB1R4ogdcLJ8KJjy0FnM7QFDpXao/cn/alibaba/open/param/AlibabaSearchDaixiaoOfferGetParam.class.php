<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoOfferRequest.class.php');

class AlibabaSearchDaixiaoOfferGetParam {

        
        /**
    * @return 搜索参数
    */
        public function getRequest() {
        $tempResult = $this->sdkStdResult["request"];
        return $tempResult;
    }
    
    /**
     * 设置搜索参数     
     * @param ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoOfferRequest $request     
     * 参数示例：<pre>{
	keywords:'mp3',
	sortType:'booked',
	descendOrder:true,
	currentPage:1,
	pageSize:10
}</pre>     
     * 此参数必填     */
    public function setRequest(ComAlibabaCbuSearchwebOpenHsfRequestIsvDaixiaoOfferRequest $request) {
        $this->sdkStdResult["request"] = $request;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>