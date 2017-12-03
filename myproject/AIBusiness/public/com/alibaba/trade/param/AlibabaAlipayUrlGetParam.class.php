<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAlipayUrlGetParam {

        
        /**
    * @return 订单Id列表
    */
        public function getOrderIdList() {
        $tempResult = $this->sdkStdResult["orderIdList"];
        return $tempResult;
    }
    
    /**
     * 设置订单Id列表     
     * @param array include @see Long[] $orderIdList     
     * 参数示例：<pre>[74321349391498520]</pre>     
     * 此参数必填     */
    public function setOrderIdList( $orderIdList) {
        $this->sdkStdResult["orderIdList"] = $orderIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>