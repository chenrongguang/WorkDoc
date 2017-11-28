<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchGraphP4pSimilarParam {

        
        /**
    * @return 淘宝offer的id
    */
        public function getTaobaoOfferId() {
        $tempResult = $this->sdkStdResult["taobaoOfferId"];
        return $tempResult;
    }
    
    /**
     * 设置淘宝offer的id     
     * @param Long $taobaoOfferId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaobaoOfferId( $taobaoOfferId) {
        $this->sdkStdResult["taobaoOfferId"] = $taobaoOfferId;
    }
    
        
        /**
    * @return 查询的数量，最大4
    */
        public function getNumber() {
        $tempResult = $this->sdkStdResult["number"];
        return $tempResult;
    }
    
    /**
     * 设置查询的数量，最大4     
     * @param Integer $number     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNumber( $number) {
        $this->sdkStdResult["number"] = $number;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>