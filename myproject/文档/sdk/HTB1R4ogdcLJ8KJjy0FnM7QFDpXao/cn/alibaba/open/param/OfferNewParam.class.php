<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferNewParam {

        
        /**
    * @return 描述offer的json串，需要进行URLEncode 编码，编码方式为GBK
    */
        public function getOffer() {
        $tempResult = $this->sdkStdResult["offer"];
        return $tempResult;
    }
    
    /**
     * 设置描述offer的json串，需要进行URLEncode 编码，编码方式为GBK     
     * @param String $offer     
     * 参数示例：<pre>{
    "bizType": "1",
    "freightTemplateId": "1",
    "pictureAuthOffer": false,
    "subject": "测试添加11111",
    "offerDetail": "该商品为测试商品",
    "priceRanges": "100:1000`1000:2000`2000:10000",
    "imageUriList": [
        "img/ibank/2016/417/922/3123229714_1445524195.jpg",
        "img/ibank/2016/824/631/3557136428_1156466267.jpg"
    ],
    "priceAuthOffer": false,
    "mixWholeSale": true,
    "freightType": "F",
    "sendGoodsAddressId": "840222",
    "offerWeight": 0.05,
    "supportOnlineTrade": true,
    "amountOnSale": 9999,
    "categoryID": "1037264",
    "status": "online"
}</pre>     
     * 此参数必填     */
    public function setOffer( $offer) {
        $this->sdkStdResult["offer"] = $offer;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>