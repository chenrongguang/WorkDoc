<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigoumallQuoteOrderGroupParam {

        
        /**
    * @return 报价在1688平台的Id列表
    */
        public function getQuoteIdList() {
        $tempResult = $this->sdkStdResult["quoteIdList"];
        return $tempResult;
    }
    
    /**
     * 设置报价在1688平台的Id列表     
     * @param List $quoteIdList     
     * 参数示例：<pre>[123,456]</pre>     
     * 此参数必填     */
    public function setQuoteIdList(array $quoteIdList) {
        $this->sdkStdResult["quoteIdList"] = $quoteIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>