<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiCategoryModifyUserCategoryParam {

        
        /**
    * @return Json串，包含字段：categoryName：类目名称，categoryId：必填，类目在1688的主键编码，parentId：父类目在1688的业务编码。
    */
        public function getCategoryList() {
        $tempResult = $this->sdkStdResult["categoryList"];
        return $tempResult;
    }
    
    /**
     * 设置Json串，包含字段：categoryName：类目名称，categoryId：必填，类目在1688的主键编码，parentId：父类目在1688的业务编码。     
     * @param List $categoryList     
     * 参数示例：<pre>[{"categoryName":"电子产品","categoryId":"5232","attribute":{"isExternalSupplier":"false"}},{"categoryName":"笔记本电脑","categoryId":"5232"}]</pre>     
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