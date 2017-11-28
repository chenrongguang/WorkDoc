<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaProductFastPublishModel.class.php');

class AlibabaOfferFastPublishParam {

        
        /**
    * @return 主模型
    */
        public function getFastpubmodel() {
        $tempResult = $this->sdkStdResult["fastpubmodel"];
        return $tempResult;
    }
    
    /**
     * 设置主模型     
     * @param AlibabaProductFastPublishModel $fastpubmodel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFastpubmodel(AlibabaProductFastPublishModel $fastpubmodel) {
        $this->sdkStdResult["fastpubmodel"] = $fastpubmodel;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>