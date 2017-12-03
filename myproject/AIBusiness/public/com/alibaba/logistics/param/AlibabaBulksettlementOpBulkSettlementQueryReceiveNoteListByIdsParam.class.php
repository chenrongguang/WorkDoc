<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaBulksettlementOpBulkSettlementQueryReceiveNoteListByIdsParam {

        
        /**
    * @return 收货主单id 列表
    */
        public function getReceiveNodeIds() {
        $tempResult = $this->sdkStdResult["receiveNodeIds"];
        return $tempResult;
    }
    
    /**
     * 设置收货主单id 列表     
     * @param List $receiveNodeIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveNodeIds(array $receiveNodeIds) {
        $this->sdkStdResult["receiveNodeIds"] = $receiveNodeIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>