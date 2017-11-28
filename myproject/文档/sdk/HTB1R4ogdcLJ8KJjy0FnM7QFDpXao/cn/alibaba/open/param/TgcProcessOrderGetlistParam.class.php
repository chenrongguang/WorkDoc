<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TgcProcessOrderGetlistParam {

        
        /**
    * @return 指定下载该时间段内的订单，从当前日期倒推，单位：天。默认（0）取当天订单数据。
    */
        public function getIntervalDays() {
        $tempResult = $this->sdkStdResult["intervalDays"];
        return $tempResult;
    }
    
    /**
     * 设置指定下载该时间段内的订单，从当前日期倒推，单位：天。默认（0）取当天订单数据。     
     * @param Integer $intervalDays     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIntervalDays( $intervalDays) {
        $this->sdkStdResult["intervalDays"] = $intervalDays;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>