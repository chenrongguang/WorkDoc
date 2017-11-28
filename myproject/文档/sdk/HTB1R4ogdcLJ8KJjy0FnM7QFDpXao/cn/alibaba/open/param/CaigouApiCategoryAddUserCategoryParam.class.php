<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiCategoryAddUserCategoryParam {

        
        /**
    * @return Json串，包含字段：categoryName：类目名称，categoryId：类目在外部业务的主键编码，parentId：父节点在外部系统的业务编码。
    */
        public function getCategoryList() {
        $tempResult = $this->sdkStdResult["categoryList"];
        return $tempResult;
    }
    
    /**
     * 设置Json串，包含字段：categoryName：类目名称，categoryId：类目在外部业务的主键编码，parentId：父节点在外部系统的业务编码。     
     * @param List $categoryList     
     * 参数示例：<pre>[{"categoryName":"电子产品","categoryId":"sd001","attribute":{"isExternalSupplier":"true"}}，{"categoryName":"笔记本电脑","categoryId":"sd002","parentId":"sd001","attribute":{"isExternalSupplier":"true"}}]</pre>     
     * 此参数必填     */
    public function setCategoryList(array $categoryList) {
        $this->sdkStdResult["categoryList"] = $categoryList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>