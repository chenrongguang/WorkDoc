<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpManufacturePullBulkGoodsCodesParam {

        
        /**
    * @return 打样订单创建时间 start
    */
        public function getGmtBulkStart() {
        $tempResult = $this->sdkStdResult["gmtBulkStart"];
        return $tempResult;
    }
    
    /**
     * 设置打样订单创建时间 start     
     * @param Date $gmtBulkStart     
     * 参数示例：<pre>20160101000000368%2B0800</pre>     
     * 此参数必填     */
    public function setGmtBulkStart( $gmtBulkStart) {
        $this->sdkStdResult["gmtBulkStart"] = $gmtBulkStart;
    }
    
        
        /**
    * @return 打样订单创建时间 End
    */
        public function getGmtBulkEnd() {
        $tempResult = $this->sdkStdResult["gmtBulkEnd"];
        return $tempResult;
    }
    
    /**
     * 设置打样订单创建时间 End     
     * @param Date $gmtBulkEnd     
     * 参数示例：<pre>20160101000000368%2B0800</pre>     
     * 此参数必填     */
    public function setGmtBulkEnd( $gmtBulkEnd) {
        $this->sdkStdResult["gmtBulkEnd"] = $gmtBulkEnd;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>