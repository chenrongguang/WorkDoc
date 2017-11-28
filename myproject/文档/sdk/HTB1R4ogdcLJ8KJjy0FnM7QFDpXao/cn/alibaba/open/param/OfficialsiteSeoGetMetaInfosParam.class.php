<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfficialsiteSeoGetMetaInfosParam {

        
        /**
    * @return 要获取的pagename列表
    */
        public function getPageNames() {
        $tempResult = $this->sdkStdResult["pageNames"];
        return $tempResult;
    }
    
    /**
     * 设置要获取的pagename列表     
     * @param array include @see String[] $pageNames     
     * 参数示例：<pre>["index","offerlist","newslist","companyinfo","creditdetail","creditdetail_remark","creditdetail_certificate","creditdetail_guarantee","albumlist","contactinfo","custompage1","offerdetail","feedback","privatezone"]</pre>     
     * 此参数必填     */
    public function setPageNames( $pageNames) {
        $this->sdkStdResult["pageNames"] = $pageNames;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>