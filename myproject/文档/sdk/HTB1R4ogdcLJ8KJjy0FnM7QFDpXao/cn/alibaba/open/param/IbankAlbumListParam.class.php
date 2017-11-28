<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankAlbumListParam {

        
        /**
    * @return 相册类型
    */
        public function getAlbumType() {
        $tempResult = $this->sdkStdResult["albumType"];
        return $tempResult;
    }
    
    /**
     * 设置相册类型     
     * @param String $albumType     
     * 参数示例：<pre>CUSTOM-自定义相册；MY-我的相册；</pre>     
     * 此参数必填     */
    public function setAlbumType( $albumType) {
        $this->sdkStdResult["albumType"] = $albumType;
    }
    
        
        /**
    * @return 返回列表结果集分页条数。取值范围:大于零的整数;最大值：500；默认值：10。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置返回列表结果集分页条数。取值范围:大于零的整数;最大值：500；默认值：10。     
     * @param Integer $pageSize     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。     
     * @param Integer $pageNo     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>