<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SpubyattributeGetParam {

        
        /**
    * @return 叶子类目ID
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置叶子类目ID     
     * @param Long $categoryID     
     * 参数示例：<pre>1042627</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        /**
    * @return 产品关键属性和值，以“>”为分隔符，输入格式如示例 ：属性:属性值>属性:属性值
    */
        public function getKeyAttributes() {
        $tempResult = $this->sdkStdResult["keyAttributes"];
        return $tempResult;
    }
    
    /**
     * 设置产品关键属性和值，以“>”为分隔符，输入格式如示例 ：属性:属性值>属性:属性值     
     * @param String $keyAttributes     
     * 参数示例：<pre>2176:BARDEN>3151:01B114EX</pre>     
     * 此参数必填     */
    public function setKeyAttributes( $keyAttributes) {
        $this->sdkStdResult["keyAttributes"] = $keyAttributes;
    }
    
        
        /**
    * @return 
    */
        public function getTimeStamp() {
        $tempResult = $this->sdkStdResult["timeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $timeStamp     
     * 参数示例：<pre></pre>     
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