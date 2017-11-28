<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpManufacturePullFentGoodsCodesParam {

        
        /**
    * @return 打样订单创建时间(包含) start
    */
        public function getGmtFentStart() {
        $tempResult = $this->sdkStdResult["gmtFentStart"];
        return $tempResult;
    }
    
    /**
     * 设置打样订单创建时间(包含) start     
     * @param Date $gmtFentStart     
     * 参数示例：<pre>20160101000000368%2B0800</pre>     
     * 此参数必填     */
    public function setGmtFentStart( $gmtFentStart) {
        $this->sdkStdResult["gmtFentStart"] = $gmtFentStart;
    }
    
        
        /**
    * @return 打样订单创建时间(不包含) end
    */
        public function getGmtFentEnd() {
        $tempResult = $this->sdkStdResult["gmtFentEnd"];
        return $tempResult;
    }
    
    /**
     * 设置打样订单创建时间(不包含) end     
     * @param Date $gmtFentEnd     
     * 参数示例：<pre>20160101000000368%2B0800</pre>     
     * 此参数必填     */
    public function setGmtFentEnd( $gmtFentEnd) {
        $this->sdkStdResult["gmtFentEnd"] = $gmtFentEnd;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>