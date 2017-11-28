<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaMarketingShortmsgMsgSendResultModel.class.php');

class AlibabaCnMarketingShortmsgReturnSendDetailParam {

        
        /**
    * @return 任务Id
    */
        public function getTaskId() {
        $tempResult = $this->sdkStdResult["taskId"];
        return $tempResult;
    }
    
    /**
     * 设置任务Id     
     * @param String $taskId     
     * 参数示例：<pre>abcdefg1234</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->sdkStdResult["taskId"] = $taskId;
    }
    
        
        /**
    * @return 任务是否成功(当hasMoreData为false时设置)
    */
        public function getSuccess() {
        $tempResult = $this->sdkStdResult["success"];
        return $tempResult;
    }
    
    /**
     * 设置任务是否成功(当hasMoreData为false时设置)     
     * @param Boolean $success     
     * 参数示例：<pre>true/false</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->sdkStdResult["success"] = $success;
    }
    
        
        /**
    * @return 结果返回码(当hasMoreData为false时设置)
    */
        public function getResultCode() {
        $tempResult = $this->sdkStdResult["resultCode"];
        return $tempResult;
    }
    
    /**
     * 设置结果返回码(当hasMoreData为false时设置)     
     * @param Integer $resultCode     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->sdkStdResult["resultCode"] = $resultCode;
    }
    
        
        /**
    * @return 错误信息(当hasMoreData为false时设置)
    */
        public function getErrorMsg() {
        $tempResult = $this->sdkStdResult["errorMsg"];
        return $tempResult;
    }
    
    /**
     * 设置错误信息(当hasMoreData为false时设置)     
     * @param String $errorMsg     
     * 参数示例：<pre>这是一段错误信息</pre>     
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->sdkStdResult["errorMsg"] = $errorMsg;
    }
    
        
        /**
    * @return 是否还有短信发送结果列表;
如果为true，则表示还有短信发送结果列表；
如果为false,则表示结果列表发送完毕,需要设置success、resultCode以及errorMsg表明该短信任务发送是否成功
    */
        public function getHasMoreData() {
        $tempResult = $this->sdkStdResult["hasMoreData"];
        return $tempResult;
    }
    
    /**
     * 设置是否还有短信发送结果列表;
如果为true，则表示还有短信发送结果列表；
如果为false,则表示结果列表发送完毕,需要设置success、resultCode以及errorMsg表明该短信任务发送是否成功     
     * @param Boolean $hasMoreData     
     * 参数示例：<pre>true/false</pre>     
     * 此参数必填     */
    public function setHasMoreData( $hasMoreData) {
        $this->sdkStdResult["hasMoreData"] = $hasMoreData;
    }
    
        
        /**
    * @return 短信发送结果列表
    */
        public function getMsgSendResultModelList() {
        $tempResult = $this->sdkStdResult["msgSendResultModelList"];
        return $tempResult;
    }
    
    /**
     * 设置短信发送结果列表     
     * @param array include @see AlibabaMarketingShortmsgMsgSendResultModel[] $msgSendResultModelList     
     * 参数示例：<pre>[
{"sellerMemberId":"b2b-2249771845","taskId":"7049f022a909443ba0d28c0000000001","memberId":"memberId1","status":"failed","failReason":"这是错误信息","resultCode":100},
{"sellerMemberId":"b2b-2249771845","taskId":"7049f022a909443ba0d28c0000000001","memberId":"memberId2","status":"failed","failReason":"这是错误信息","resultCode":101},
{"sellerMemberId":"b2b-2249771845","taskId":"7049f022a909443ba0d28c0000000001","memberId":"memberId3","status":"failed","failReason":"这是错误信息","resultCode":102},
{"sellerMemberId":"b2b-2249771845","taskId":"7049f022a909443ba0d28c0000000001","memberId":"memberId4","status":"failed","failReason":"这是错误信息","resultCode":103},
{"sellerMemberId":"b2b-2249771845","taskId":"7049f022a909443ba0d28c0000000001","memberId":"memberId5","status":"failed","failReason":"这是错误信息","resultCode":104}
]</pre>     
     * 此参数必填     */
    public function setMsgSendResultModelList(AlibabaMarketingShortmsgMsgSendResultModel $msgSendResultModelList) {
        $this->sdkStdResult["msgSendResultModelList"] = $msgSendResultModelList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>