<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaCaigouRequisitionOpenAssignRequisitionParam.class.php');

class AlibabaCaigouRequisitionAssignRequisitionParam {

        
        /**
    * @return 分派参数
    */
        public function getParamList() {
        $tempResult = $this->sdkStdResult["paramList"];
        return $tempResult;
    }
    
    /**
     * 设置分派参数     
     * @param array include @see AlibabaCaigouRequisitionOpenAssignRequisitionParam[] $paramList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParamList(AlibabaCaigouRequisitionOpenAssignRequisitionParam $paramList) {
        $this->sdkStdResult["paramList"] = $paramList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>