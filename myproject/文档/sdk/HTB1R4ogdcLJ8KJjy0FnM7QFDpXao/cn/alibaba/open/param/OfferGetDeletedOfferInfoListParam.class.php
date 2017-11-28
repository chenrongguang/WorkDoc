<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferGetDeletedOfferInfoListParam {

        
        /**
    * @return 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。     
     * @param Integer $page     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 返回列表结果集分页条数。取值范围:大于零的整数;最大值：200；默认值：35。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置返回列表结果集分页条数。取值范围:大于零的整数;最大值：200；默认值：35。     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 格式:yyyy-MM-dd HH:mm:ss；1、如果传了时间戳参数，则按增量返回，即返回按指定获取条件且对应产品信息的最近更新时间(GMTModified)晚于该时间戳的产品列表信息。2、如果没有传时间戳参数，则取所有的满足条件的产品信息；
    */
        public function getTimeStamp() {
        $tempResult = $this->sdkStdResult["timeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置格式:yyyy-MM-dd HH:mm:ss；1、如果传了时间戳参数，则按增量返回，即返回按指定获取条件且对应产品信息的最近更新时间(GMTModified)晚于该时间戳的产品列表信息。2、如果没有传时间戳参数，则取所有的满足条件的产品信息；     
     * @param String $timeStamp     
     * 参数示例：<pre>2000-07-15 12:23:54</pre>     
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->sdkStdResult["timeStamp"] = $timeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>