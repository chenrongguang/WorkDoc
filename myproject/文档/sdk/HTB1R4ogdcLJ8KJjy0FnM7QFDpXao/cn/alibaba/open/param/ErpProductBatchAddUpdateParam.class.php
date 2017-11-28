<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductParamAddUpadteUserProductParam.class.php');

class ErpProductBatchAddUpdateParam {

        
        /**
    * @return 批量新增修改参数
    */
        public function getParamList() {
        $tempResult = $this->sdkStdResult["paramList"];
        return $tempResult;
    }
    
    /**
     * 设置批量新增修改参数     
     * @param array include @see ComAlibabaCaigouCoopapiProductParamAddUpadteUserProductParam[] $paramList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParamList(ComAlibabaCaigouCoopapiProductParamAddUpadteUserProductParam $paramList) {
        $this->sdkStdResult["paramList"] = $paramList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>