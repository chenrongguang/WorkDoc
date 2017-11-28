<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferGetParam {

        
        /**
    * @return offerID
    */
        public function getOfferId() {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置offerID     
     * @param Long $offerId     
     * 参数示例：<pre>1001238</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
        /**
    * @return 自定义返回字段。多个字段以半角逗号分隔;其中如下参数无法通过该API获得：freightTemplateId、freightType、productUnitWeight、retailPrice、sendGoodsId、unit
    */
        public function getReturnFields() {
        $tempResult = $this->sdkStdResult["returnFields"];
        return $tempResult;
    }
    
    /**
     * 设置自定义返回字段。多个字段以半角逗号分隔;其中如下参数无法通过该API获得：freightTemplateId、freightType、productUnitWeight、retailPrice、sendGoodsId、unit     
     * @param array include @see String[] $returnFields     
     * 参数示例：<pre>groupId,offerStatus,memberId,subject,details;</pre>     
     * 此参数必填     */
    public function setReturnFields( $returnFields) {
        $this->sdkStdResult["returnFields"] = $returnFields;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>