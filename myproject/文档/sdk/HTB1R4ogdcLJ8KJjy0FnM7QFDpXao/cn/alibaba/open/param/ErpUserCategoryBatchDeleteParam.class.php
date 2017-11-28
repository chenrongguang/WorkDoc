<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpUserCategoryBatchDeleteParam {

        
        /**
    * @return 外部系统自定义类目编号列表
    */
        public function getCategoryCodeList() {
        $tempResult = $this->sdkStdResult["categoryCodeList"];
        return $tempResult;
    }
    
    /**
     * 设置外部系统自定义类目编号列表     
     * @param array include @see String[] $categoryCodeList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryCodeList( $categoryCodeList) {
        $this->sdkStdResult["categoryCodeList"] = $categoryCodeList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>