<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaLstItemStockInfo.class.php');

class AlibabaLstItemSetStockParam {

        
        /**
    * @return 库存参数列表
    */
        public function getStockList() {
        $tempResult = $this->sdkStdResult["stockList"];
        return $tempResult;
    }
    
    /**
     * 设置库存参数列表     
     * @param array include @see AlibabaLstItemStockInfo[] $stockList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStockList(AlibabaLstItemStockInfo $stockList) {
        $this->sdkStdResult["stockList"] = $stockList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>