<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam.class.php');

class ErpWarehouseBatchAddUpdateParam {

        
        /**
    * @return 仓库信息新增更新
    */
        public function getParamList() {
        $tempResult = $this->sdkStdResult["paramList"];
        return $tempResult;
    }
    
    /**
     * 设置仓库信息新增更新     
     * @param array include @see ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam[] $paramList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParamList(ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam $paramList) {
        $this->sdkStdResult["paramList"] = $paramList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>