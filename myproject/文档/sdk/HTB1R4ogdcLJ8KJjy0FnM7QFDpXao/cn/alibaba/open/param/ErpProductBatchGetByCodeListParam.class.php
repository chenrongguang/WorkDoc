<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpProductBatchGetByCodeListParam {

        
        /**
    * @return ERP系统中的 【商品编号#规格编号 】
若商品无规格，则只需要传商品编号
最多为20条
    */
        public function getProductCodeList() {
        $tempResult = $this->sdkStdResult["productCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置ERP系统中的 【商品编号#规格编号 】
若商品无规格，则只需要传商品编号
最多为20条     
     * @param array include @see String[] $productCodeList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCodeList( $productCodeList) {
        $this->sdkStdResult["productCodeList"] = $productCodeList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>