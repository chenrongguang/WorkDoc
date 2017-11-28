<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ExprTestParam {

        
        /**
    * @return 名字
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置名字     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 年龄
    */
        public function getAge() {
        $tempResult = $this->sdkStdResult["age"];
        return $tempResult;
    }
    
    /**
     * 设置年龄     
     * @param Integer $age     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAge( $age) {
        $this->sdkStdResult["age"] = $age;
    }
    
        
        /**
    * @return 婚否
    */
        public function getMarried() {
        $tempResult = $this->sdkStdResult["married"];
        return $tempResult;
    }
    
    /**
     * 设置婚否     
     * @param Boolean $married     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarried( $married) {
        $this->sdkStdResult["married"] = $married;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>