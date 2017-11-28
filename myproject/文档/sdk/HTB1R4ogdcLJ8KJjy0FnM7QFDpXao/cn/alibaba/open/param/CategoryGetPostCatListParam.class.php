<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CategoryGetPostCatListParam {

        
        /**
    * @return 类目ID列表，支持多个ID批量查询，多个ID以半角冒逗分隔
    */
        public function getCatIDs() {
        $tempResult = $this->sdkStdResult["catIDs"];
        return $tempResult;
    }
    
    /**
     * 设置类目ID列表，支持多个ID批量查询，多个ID以半角冒逗分隔     
     * @param String $catIDs     
     * 参数示例：<pre>1036558,1036562,1037138,1037139</pre>     
     * 此参数必填     */
    public function setCatIDs( $catIDs) {
        $this->sdkStdResult["catIDs"] = $catIDs;
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