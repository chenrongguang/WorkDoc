<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CategorySearchParam {

        
        /**
    * @return 搜索关键词
    */
        public function getKeyWord() {
        $tempResult = $this->sdkStdResult["keyWord"];
        return $tempResult;
    }
    
    /**
     * 设置搜索关键词     
     * @param String $keyWord     
     * 参数示例：<pre>car</pre>     
     * 此参数必填     */
    public function setKeyWord( $keyWord) {
        $this->sdkStdResult["keyWord"] = $keyWord;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>