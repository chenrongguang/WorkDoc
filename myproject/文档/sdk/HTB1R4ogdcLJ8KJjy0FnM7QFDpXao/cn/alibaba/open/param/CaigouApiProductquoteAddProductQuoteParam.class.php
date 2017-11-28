<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductquoteAddProductQuoteParam {

        
        /**
    * @return 供应商在1688的memberId
    */
        public function getSupplierMemberId() {
        $tempResult = $this->sdkStdResult["supplierMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商在1688的memberId     
     * @param String $supplierMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->sdkStdResult["supplierMemberId"] = $supplierMemberId;
    }
    
        
        /**
    * @return 供应商在外部系统的ID
    */
        public function getSourceSupplierId() {
        $tempResult = $this->sdkStdResult["sourceSupplierId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商在外部系统的ID     
     * @param String $sourceSupplierId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceSupplierId( $sourceSupplierId) {
        $this->sdkStdResult["sourceSupplierId"] = $sourceSupplierId;
    }
    
        
        /**
    * @return 1688产品ID，报价需要和产品关联
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置1688产品ID，报价需要和产品关联     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 外部合作方来源ID（key），对接方主键key
    */
        public function getProductQuoteCode() {
        $tempResult = $this->sdkStdResult["productQuoteCode"];
        return $tempResult;
    }
    
    /**
     * 设置外部合作方来源ID（key），对接方主键key     
     * @param String $productQuoteCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductQuoteCode( $productQuoteCode) {
        $this->sdkStdResult["productQuoteCode"] = $productQuoteCode;
    }
    
        
        /**
    * @return 报价标题
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置报价标题     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return "交互数据结构为：jsonArray 
skuId：表示集团内部skuId 
fid：表示对于某一个规格key 
order：表示顺序 
阶梯价说明： 
beginAmount：表示起始数量 
endAmount：表示结束数量 
如： 
大于或等于100，beginAmount：100 
endAmount:-1 
1-100不包括100 
beginAmount：1 
endAmount：100 "
    */
        public function getSku() {
        $tempResult = $this->sdkStdResult["sku"];
        return $tempResult;
    }
    
    /**
     * 设置"交互数据结构为：jsonArray 
skuId：表示集团内部skuId 
fid：表示对于某一个规格key 
order：表示顺序 
阶梯价说明： 
beginAmount：表示起始数量 
endAmount：表示结束数量 
如： 
大于或等于100，beginAmount：100 
endAmount:-1 
1-100不包括100 
beginAmount：1 
endAmount：100 "     
     * @param List $sku     
     * 参数示例：<pre>[
    {
        "beginAmount": 1,
        "imgUrl": "img/ibank/2014/643/145/1262541346_1793450063.jpg",
        "priceRangeList": [
            {
                "beginAmount": 1,
                "bizType": "product",
                "endAmount": 5,
                "price": 10110
            },
            {
                "beginAmount": 6,
                "bizType": "product",
                "endAmount": -1,
                "price": 10010
            }
        ],
        "skuAttributeList": [
            {
                "fid": 100,
                "name": "规格0",
                "order": 1,
                "value": "value00"
            },
            {
                "fid": 101,
                "name": "规格1",
                "order": 2,
                "value": "value01"
            }
        ],
        "skuId": 11854
    },
    {
        "beginAmount": 1,
        "imgUrl": "img/ibank/2014/643/145/1262541346_1793450063.jpg",
        "priceRangeList": [
            {
                "beginAmount": 1,
                "bizType": "product",
                "endAmount": 5,
                "price": 11110
            },
            {
                "beginAmount": 6,
                "bizType": "product",
                "endAmount": -1,
                "price": 11010
            }
        ],
        "skuAttributeList": [
            {
                "fid": 100,
                "name": "规格0",
                "order": 1,
                "value": "value010"
            },
            {
                "fid": 101,
                "name": "规格1",
                "order": 2,
                "value": "value011"
            }
        ],
        "skuId": 11855
    }
]</pre>     
     * 此参数必填     */
    public function setSku(array $sku) {
        $this->sdkStdResult["sku"] = $sku;
    }
    
        
        /**
    * @return 报价产品单位，要求和所属产品单位一致
    */
        public function getUnit() {
        $tempResult = $this->sdkStdResult["unit"];
        return $tempResult;
    }
    
    /**
     * 设置报价产品单位，要求和所属产品单位一致     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->sdkStdResult["unit"] = $unit;
    }
    
        
        /**
    * @return 报价开始日期
    */
        public function getGmtStartDate() {
        $tempResult = $this->sdkStdResult["gmtStartDate"];
        return $tempResult;
    }
    
    /**
     * 设置报价开始日期     
     * @param Date $gmtStartDate     
     * 参数示例：<pre>20141221154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtStartDate( $gmtStartDate) {
        $this->sdkStdResult["gmtStartDate"] = $gmtStartDate;
    }
    
        
        /**
    * @return 报价过期日期
    */
        public function getGmtExpireDate() {
        $tempResult = $this->sdkStdResult["gmtExpireDate"];
        return $tempResult;
    }
    
    /**
     * 设置报价过期日期     
     * @param Date $gmtExpireDate     
     * 参数示例：<pre>20150801154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtExpireDate( $gmtExpireDate) {
        $this->sdkStdResult["gmtExpireDate"] = $gmtExpireDate;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>