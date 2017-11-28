<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpProductQueryAllParam {

        
        /**
    * @return 页码 最小页码为1
    */
        public function getPageNum() {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置页码 最小页码为1     
     * @param Integer $pageNum     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNum( $pageNum) {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
        /**
    * @return 分页大小 默认为20
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页大小 默认为20     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>