<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaCaigouRequisitionOpenApprovalRequisitionParam.class.php');

class AlibabaCaigouRequisitionApprovalRequisitionParam {

        
        /**
    * @return 审批参数
    */
        public function getParamList() {
        $tempResult = $this->sdkStdResult["paramList"];
        return $tempResult;
    }
    
    /**
     * 设置审批参数     
     * @param array include @see AlibabaCaigouRequisitionOpenApprovalRequisitionParam[] $paramList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParamList(AlibabaCaigouRequisitionOpenApprovalRequisitionParam $paramList) {
        $this->sdkStdResult["paramList"] = $paramList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>