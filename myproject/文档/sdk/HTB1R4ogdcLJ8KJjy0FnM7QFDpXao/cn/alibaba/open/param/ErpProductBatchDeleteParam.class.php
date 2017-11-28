<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpProductBatchDeleteParam {

        
        /**
    * @return 外部系统商品编号列表
    */
        public function getProductCodeList() {
        $tempResult = $this->sdkStdResult["productCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置外部系统商品编号列表     
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