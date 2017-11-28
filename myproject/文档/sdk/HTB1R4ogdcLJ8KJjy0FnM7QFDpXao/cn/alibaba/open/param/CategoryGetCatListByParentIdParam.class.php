<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CategoryGetCatListByParentIdParam {

        
        /**
    * @return 父类目ID
    */
        public function getParentCategoryID() {
        $tempResult = $this->sdkStdResult["parentCategoryID"];
        return $tempResult;
    }
    
    /**
     * 设置父类目ID     
     * @param Long $parentCategoryID     
     * 参数示例：<pre>10012</pre>     
     * 此参数必填     */
    public function setParentCategoryID( $parentCategoryID) {
        $this->sdkStdResult["parentCategoryID"] = $parentCategoryID;
    }
    
        
        /**
    * @return 获取该父类目的所有子类目
    */
        public function getGetAllChildren() {
        $tempResult = $this->sdkStdResult["getAllChildren"];
        return $tempResult;
    }
    
    /**
     * 设置获取该父类目的所有子类目     
     * @param String $getAllChildren     
     * 参数示例：<pre>取值“T” （取全部子类目信息）或 “F”（只取一级子类目信息），默认“F”。</pre>     
     * 此参数必填     */
    public function setGetAllChildren( $getAllChildren) {
        $this->sdkStdResult["getAllChildren"] = $getAllChildren;
    }
    
        
        public function getTimeStamp() {
        $tempResult = $this->sdkStdResult["timeStamp"];
        return $tempResult;
    }
    
    /**
          
     * @param String $timeStamp     
          
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->sdkStdResult["timeStamp"] = $timeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>