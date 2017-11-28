<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductClassifyProductParam {

        
        /**
    * @return 产品在1688平台上的主键id，java.util.List<java.lang.String>
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置产品在1688平台上的主键id，java.util.List<java.lang.String>     
     * @param List $productIds     
     * 参数示例：<pre>["1232","23423"]</pre>     
     * 此参数必填     */
    public function setProductIds(array $productIds) {
        $this->sdkStdResult["productIds"] = $productIds;
    }
    
        
        /**
    * @return 产品的叶子类目id，1688平台的自定义类目主键
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置产品的叶子类目id，1688平台的自定义类目主键     
     * @param Long $categoryId     
     * 参数示例：<pre>32264</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>