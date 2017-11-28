<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOfficialsiteOpenServiceParam {

        
        /**
    * @return 查询的信息类型,包括公司介绍、新闻列表、类目列表
    */
        public function getInfoType() {
        $tempResult = $this->sdkStdResult["infoType"];
        return $tempResult;
    }
    
    /**
     * 设置查询的信息类型,包括公司介绍、新闻列表、类目列表     
     * @param String $infoType     
     * 参数示例：<pre>公司介绍：company
新闻列表:news
类目列表:category</pre>     
     * 此参数必填     */
    public function setInfoType( $infoType) {
        $this->sdkStdResult["infoType"] = $infoType;
    }
    
        
        /**
    * @return 类目key
    */
        public function getCategoryKey() {
        $tempResult = $this->sdkStdResult["categoryKey"];
        return $tempResult;
    }
    
    /**
     * 设置类目key     
     * @param String $categoryKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryKey( $categoryKey) {
        $this->sdkStdResult["categoryKey"] = $categoryKey;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>