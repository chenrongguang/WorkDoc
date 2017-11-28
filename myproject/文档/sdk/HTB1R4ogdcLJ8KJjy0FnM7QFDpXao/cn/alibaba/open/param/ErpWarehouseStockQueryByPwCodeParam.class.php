<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpWarehouseStockQueryByPwCodeParam {

        
        /**
    * @return 商品编号#规格编号@仓库编号
    */
        public function getPwCodeList() {
        $tempResult = $this->sdkStdResult["pwCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置商品编号#规格编号@仓库编号     
     * @param array include @see String[] $pwCodeList     
     * 参数示例：<pre>["prod001@wh001","prod002@wh002"]</pre>     
     * 此参数必填     */
    public function setPwCodeList( $pwCodeList) {
        $this->sdkStdResult["pwCodeList"] = $pwCodeList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>