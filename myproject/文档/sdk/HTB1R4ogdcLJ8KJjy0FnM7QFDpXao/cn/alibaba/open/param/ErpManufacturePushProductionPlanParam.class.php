<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureMutableProductionPlan.class.php');

class ErpManufacturePushProductionPlanParam {

        
        /**
    * @return 需要更新的生产计划列表
    */
        public function getPlanList() {
        $tempResult = $this->sdkStdResult["planList"];
        return $tempResult;
    }
    
    /**
     * 设置需要更新的生产计划列表     
     * @param array include @see AlibabaManufactureMutableProductionPlan[] $planList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPlanList(AlibabaManufactureMutableProductionPlan $planList) {
        $this->sdkStdResult["planList"] = $planList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>