<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaBulksettlementOpCreateBulkSettlementImplParam {

        
        /**
    * @return 收货单子单id列表，Long类型
    */
        public function getReceiveEntryNoteIds() {
        $tempResult = $this->sdkStdResult["receiveEntryNoteIds"];
        return $tempResult;
    }
    
    /**
     * 设置收货单子单id列表，Long类型     
     * @param List $receiveEntryNoteIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveEntryNoteIds(array $receiveEntryNoteIds) {
        $this->sdkStdResult["receiveEntryNoteIds"] = $receiveEntryNoteIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>