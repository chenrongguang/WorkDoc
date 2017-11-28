<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigoumallQuoteAmountGetParam {

        
        /**
    * @return 报价id列表
    */
        public function getIdList() {
        $tempResult = $this->sdkStdResult["idList"];
        return $tempResult;
    }
    
    /**
     * 设置报价id列表     
     * @param List $idList     
     * 参数示例：<pre>[123,456]</pre>     
     * 此参数必填     */
    public function setIdList(array $idList) {
        $this->sdkStdResult["idList"] = $idList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>