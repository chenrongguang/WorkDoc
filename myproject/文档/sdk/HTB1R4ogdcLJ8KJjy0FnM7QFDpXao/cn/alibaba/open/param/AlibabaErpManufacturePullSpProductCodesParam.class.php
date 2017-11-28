<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaErpManufacturePullSpProductCodesParam {

        
        /**
    * @return 需求创建时间 start
    */
        public function getGmtCreateStart() {
        $tempResult = $this->sdkStdResult["gmtCreateStart"];
        return $tempResult;
    }
    
    /**
     * 设置需求创建时间 start     
     * @param Date $gmtCreateStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreateStart( $gmtCreateStart) {
        $this->sdkStdResult["gmtCreateStart"] = $gmtCreateStart;
    }
    
        
        /**
    * @return 需求创建时间 end
    */
        public function getGmtCreateEnd() {
        $tempResult = $this->sdkStdResult["gmtCreateEnd"];
        return $tempResult;
    }
    
    /**
     * 设置需求创建时间 end     
     * @param Date $gmtCreateEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreateEnd( $gmtCreateEnd) {
        $this->sdkStdResult["gmtCreateEnd"] = $gmtCreateEnd;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>