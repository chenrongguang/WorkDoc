<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiBuyofferPostBuyofferParam {

        
        /**
    * @return 询价单标题【不能超过80个字符】
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置询价单标题【不能超过80个字符】     
     * @param String $subject     
     * 参数示例：<pre>采购圆珠笔</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 买家子账号id.这个id同创建子账号接口的返回值。如果不创建子账号，可以不传值！
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置买家子账号id.这个id同创建子账号接口的返回值。如果不创建子账号，可以不传值！     
     * @param Long $subUserId     
     * 参数示例：<pre>3605512031</pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 询价单清单。每个item项包括：subject(采购单条目的标题,String类型,不能为空，最大字符长度300), brandName(品牌,String类型,最大字符长度128), unit(单位,String类型,不能为空，最大字符长度10),purchaseAmount(采购数量,Long类型，不能为空)，productCode(对应的产品的code,String类型，最大字符长度64)，prItemId（pr的item项目的行号，string类型，最大长度为64），desc（询价项目的描述，String类型，最大字符长度2000），attachmentIdList（附件id列表，附件的id来源于上传附件接口）
    */
        public function getItems() {
        $tempResult = $this->sdkStdResult["items"];
        return $tempResult;
    }
    
    /**
     * 设置询价单清单。每个item项包括：subject(采购单条目的标题,String类型,不能为空，最大字符长度300), brandName(品牌,String类型,最大字符长度128), unit(单位,String类型,不能为空，最大字符长度10),purchaseAmount(采购数量,Long类型，不能为空)，productCode(对应的产品的code,String类型，最大字符长度64)，prItemId（pr的item项目的行号，string类型，最大长度为64），desc（询价项目的描述，String类型，最大字符长度2000），attachmentIdList（附件id列表，附件的id来源于上传附件接口）     
     * @param List $items     
     * 参数示例：<pre>[{"desc":"描述","ip":"10.125.194.148","prItemId":"pr的item行号1","productCode":"123","purchaseAmount":12,"subject":"苹果","brandName":"品牌",unit":"个","attachmentIdList":[1262298693,1262298693,1262298707,1262298708]},{"ip":"10.125.194.148","prItemId":"pr的item行号2","productCode":"345","purchaseAmount":4,"subject":"香蕉","unit":"斤"}]</pre>     
     * 此参数必填     */
    public function setItems(array $items) {
        $this->sdkStdResult["items"] = $items;
    }
    
        
        /**
    * @return 联系人【不能超过20个字符】
    */
        public function getContact() {
        $tempResult = $this->sdkStdResult["contact"];
        return $tempResult;
    }
    
    /**
     * 设置联系人【不能超过20个字符】     
     * @param String $contact     
     * 参数示例：<pre>高先生</pre>     
     * 此参数必填     */
    public function setContact( $contact) {
        $this->sdkStdResult["contact"] = $contact;
    }
    
        
        /**
    * @return 手机【不能超过40个字符】
    */
        public function getPhone() {
        $tempResult = $this->sdkStdResult["phone"];
        return $tempResult;
    }
    
    /**
     * 设置手机【不能超过40个字符】     
     * @param String $phone     
     * 参数示例：<pre>13485296352</pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->sdkStdResult["phone"] = $phone;
    }
    
        
        /**
    * @return 询价单描述【不能超过10000个字符】
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置询价单描述【不能超过10000个字符】     
     * @param String $description     
     * 参数示例：<pre>物品要实惠，价格要优惠</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 报价截止日期
    */
        public function getGmtQuotationExpire() {
        $tempResult = $this->sdkStdResult["gmtQuotationExpire"];
        return $tempResult;
    }
    
    /**
     * 设置报价截止日期     
     * @param Date $gmtQuotationExpire     
     * 参数示例：<pre>20140801154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtQuotationExpire( $gmtQuotationExpire) {
        $this->sdkStdResult["gmtQuotationExpire"] = $gmtQuotationExpire;
    }
    
        
        /**
    * @return 收货地省(国标)【6个字符】
    */
        public function getReceiveAddressProvince() {
        $tempResult = $this->sdkStdResult["receiveAddressProvince"];
        return $tempResult;
    }
    
    /**
     * 设置收货地省(国标)【6个字符】     
     * @param String $receiveAddressProvince     
     * 参数示例：<pre>110000</pre>     
     * 此参数必填     */
    public function setReceiveAddressProvince( $receiveAddressProvince) {
        $this->sdkStdResult["receiveAddressProvince"] = $receiveAddressProvince;
    }
    
        
        /**
    * @return 收货地市(国标)【6个字符】
    */
        public function getReceiveAddressCity() {
        $tempResult = $this->sdkStdResult["receiveAddressCity"];
        return $tempResult;
    }
    
    /**
     * 设置收货地市(国标)【6个字符】     
     * @param String $receiveAddressCity     
     * 参数示例：<pre>110100</pre>     
     * 此参数必填     */
    public function setReceiveAddressCity( $receiveAddressCity) {
        $this->sdkStdResult["receiveAddressCity"] = $receiveAddressCity;
    }
    
        
        /**
    * @return 收货地区(国标)【6个字符】
    */
        public function getReceiveAddressCounty() {
        $tempResult = $this->sdkStdResult["receiveAddressCounty"];
        return $tempResult;
    }
    
    /**
     * 设置收货地区(国标)【6个字符】     
     * @param String $receiveAddressCounty     
     * 参数示例：<pre>110229</pre>     
     * 此参数必填     */
    public function setReceiveAddressCounty( $receiveAddressCounty) {
        $this->sdkStdResult["receiveAddressCounty"] = $receiveAddressCounty;
    }
    
        
        /**
    * @return 供应商要求：供应商所在地要求(国标)
    */
        public function getExpectedSupplierAreas() {
        $tempResult = $this->sdkStdResult["expectedSupplierAreas"];
        return $tempResult;
    }
    
    /**
     * 设置供应商要求：供应商所在地要求(国标)     
     * @param List $expectedSupplierAreas     
     * 参数示例：<pre>["331100","610300"]</pre>     
     * 此参数必填     */
    public function setExpectedSupplierAreas(array $expectedSupplierAreas) {
        $this->sdkStdResult["expectedSupplierAreas"] = $expectedSupplierAreas;
    }
    
        
        /**
    * @return 供应商要求：需要的发票类型.ordinary(普通发票),vat(增值税发票),none(无需发票)
    */
        public function getInvoiceRequirement() {
        $tempResult = $this->sdkStdResult["invoiceRequirement"];
        return $tempResult;
    }
    
    /**
     * 设置供应商要求：需要的发票类型.ordinary(普通发票),vat(增值税发票),none(无需发票)     
     * @param String $invoiceRequirement     
     * 参数示例：<pre>vat</pre>     
     * 此参数必填     */
    public function setInvoiceRequirement( $invoiceRequirement) {
        $this->sdkStdResult["invoiceRequirement"] = $invoiceRequirement;
    }
    
        
        /**
    * @return 供应商要求：是否支持支付宝担保交易
    */
        public function getSupportAlipayGuaranteeTrade() {
        $tempResult = $this->sdkStdResult["supportAlipayGuaranteeTrade"];
        return $tempResult;
    }
    
    /**
     * 设置供应商要求：是否支持支付宝担保交易     
     * @param Boolean $supportAlipayGuaranteeTrade     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSupportAlipayGuaranteeTrade( $supportAlipayGuaranteeTrade) {
        $this->sdkStdResult["supportAlipayGuaranteeTrade"] = $supportAlipayGuaranteeTrade;
    }
    
        
        /**
    * @return 供应商证书要求。具体值如下：1(营业执照), 2(税务登记证), 3(组织机构代码证), 12(国际和国内的产品认证证书), 37(环境管理体系认证证书), 38(企业质量管理体系认证证书), 4(外商投资企业批准证书(外资企业必须)), 103(其他), 400(税务登记证副本（加盖增值税一般纳税人印章）), 5(食品生产许可证 ), 6(酒类生产许可证), 7(化妆品生产许可证), 8(药品生产许可证), 25(安全生产许可证 ), 26(医疗器械生产企业许可证), 27(制造计量器具许可证), 28(特种设备制造许可证（包括压力容器）), 29(建筑业企业资质证书), 30(排放污染物许可证 ), 31(烟草专卖许可证), 32(药品经营许可证), 33(危险化学品经营许可证), 34(烟花爆竹零售经营许可), 35(食品经营许可证), 36(餐饮服务许可证), 39(其他), 101(道路运输经营许可证), 102(印刷经营许可证), 201(食品流通许可证), 202(食品卫生许可证), 203(酒类流通备案登记表), 204(酒类商品批发许可证), 205(酒类商品零售许可证), 206(酒类产销许可证), 207(进口货物报关单), 208(商品出入境检验检疫合格证明), 209(出入境检验检疫卫生证书), 9(产品质量监督检查证书), 10(品牌授权书(如驰名商标、行业知名品牌)), 11(区域代理授权书), 16(纺织品生态标签发明专利、外观设计专利、实用新型外观设计类证书), 17(商标注册证), 19(其他), 20(荣誉证书，如消费者协会荣誉证书、行业协会荣誉证书、重合同守信用证书), 21(银行资信类证书、银行评级证明), 22(开户许可证), 23(公司证明、人事证明、纳税证明)
    */
        public function getCertificateIds() {
        $tempResult = $this->sdkStdResult["certificateIds"];
        return $tempResult;
    }
    
    /**
     * 设置供应商证书要求。具体值如下：1(营业执照), 2(税务登记证), 3(组织机构代码证), 12(国际和国内的产品认证证书), 37(环境管理体系认证证书), 38(企业质量管理体系认证证书), 4(外商投资企业批准证书(外资企业必须)), 103(其他), 400(税务登记证副本（加盖增值税一般纳税人印章）), 5(食品生产许可证 ), 6(酒类生产许可证), 7(化妆品生产许可证), 8(药品生产许可证), 25(安全生产许可证 ), 26(医疗器械生产企业许可证), 27(制造计量器具许可证), 28(特种设备制造许可证（包括压力容器）), 29(建筑业企业资质证书), 30(排放污染物许可证 ), 31(烟草专卖许可证), 32(药品经营许可证), 33(危险化学品经营许可证), 34(烟花爆竹零售经营许可), 35(食品经营许可证), 36(餐饮服务许可证), 39(其他), 101(道路运输经营许可证), 102(印刷经营许可证), 201(食品流通许可证), 202(食品卫生许可证), 203(酒类流通备案登记表), 204(酒类商品批发许可证), 205(酒类商品零售许可证), 206(酒类产销许可证), 207(进口货物报关单), 208(商品出入境检验检疫合格证明), 209(出入境检验检疫卫生证书), 9(产品质量监督检查证书), 10(品牌授权书(如驰名商标、行业知名品牌)), 11(区域代理授权书), 16(纺织品生态标签发明专利、外观设计专利、实用新型外观设计类证书), 17(商标注册证), 19(其他), 20(荣誉证书，如消费者协会荣誉证书、行业协会荣誉证书、重合同守信用证书), 21(银行资信类证书、银行评级证明), 22(开户许可证), 23(公司证明、人事证明、纳税证明)     
     * @param List $certificateIds     
     * 参数示例：<pre>["1","2"]</pre>     
     * 此参数必填     */
    public function setCertificateIds(array $certificateIds) {
        $this->sdkStdResult["certificateIds"] = $certificateIds;
    }
    
        
        /**
    * @return 供应商要求：其他证书名称【不能超过165个字符】
    */
        public function getOtherCertificateNames() {
        $tempResult = $this->sdkStdResult["otherCertificateNames"];
        return $tempResult;
    }
    
    /**
     * 设置供应商要求：其他证书名称【不能超过165个字符】     
     * @param List $otherCertificateNames     
     * 参数示例：<pre>["诚信电商证书"]</pre>     
     * 此参数必填     */
    public function setOtherCertificateNames(array $otherCertificateNames) {
        $this->sdkStdResult["otherCertificateNames"] = $otherCertificateNames;
    }
    
        
        /**
    * @return 供应商要求：注册资金。单位万元
    */
        public function getRegCapital() {
        $tempResult = $this->sdkStdResult["regCapital"];
        return $tempResult;
    }
    
    /**
     * 设置供应商要求：注册资金。单位万元     
     * @param Long $regCapital     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setRegCapital( $regCapital) {
        $this->sdkStdResult["regCapital"] = $regCapital;
    }
    
        
        /**
    * @return 外部系统的采购需求的id （prId）【不要大于64个英文或数字字符】
    */
        public function getPrId() {
        $tempResult = $this->sdkStdResult["prId"];
        return $tempResult;
    }
    
    /**
     * 设置外部系统的采购需求的id （prId）【不要大于64个英文或数字字符】     
     * @param String $prId     
     * 参数示例：<pre>pr00001</pre>     
     * 此参数必填     */
    public function setPrId( $prId) {
        $this->sdkStdResult["prId"] = $prId;
    }
    
        
        /**
    * @return 附件id的列表。附件id来源于上传附件的接口。
    */
        public function getAttachmentIdList() {
        $tempResult = $this->sdkStdResult["attachmentIdList"];
        return $tempResult;
    }
    
    /**
     * 设置附件id的列表。附件id来源于上传附件的接口。     
     * @param List $attachmentIdList     
     * 参数示例：<pre>[1262298693,1262298693,1262298707,1262298708]</pre>     
     * 此参数必填     */
    public function setAttachmentIdList(array $attachmentIdList) {
        $this->sdkStdResult["attachmentIdList"] = $attachmentIdList;
    }
    
        
        /**
    * @return 未到截止日期不可查看报价
    */
        public function getVisibleAfterEndQuote() {
        $tempResult = $this->sdkStdResult["visibleAfterEndQuote"];
        return $tempResult;
    }
    
    /**
     * 设置未到截止日期不可查看报价     
     * @param Boolean $visibleAfterEndQuote     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setVisibleAfterEndQuote( $visibleAfterEndQuote) {
        $this->sdkStdResult["visibleAfterEndQuote"] = $visibleAfterEndQuote;
    }
    
        
        /**
    * @return 需要包含税价
    */
        public function getIncludeTax() {
        $tempResult = $this->sdkStdResult["includeTax"];
        return $tempResult;
    }
    
    /**
     * 设置需要包含税价     
     * @param Boolean $includeTax     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIncludeTax( $includeTax) {
        $this->sdkStdResult["includeTax"] = $includeTax;
    }
    
        
        /**
    * @return 报价需要包含运费价
    */
        public function getQuoteHasPostFee() {
        $tempResult = $this->sdkStdResult["quoteHasPostFee"];
        return $tempResult;
    }
    
    /**
     * 设置报价需要包含运费价     
     * @param Boolean $quoteHasPostFee     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setQuoteHasPostFee( $quoteHasPostFee) {
        $this->sdkStdResult["quoteHasPostFee"] = $quoteHasPostFee;
    }
    
        
        /**
    * @return 允许对询价单商品部分报价
    */
        public function getAllowPartOffer() {
        $tempResult = $this->sdkStdResult["allowPartOffer"];
        return $tempResult;
    }
    
    /**
     * 设置允许对询价单商品部分报价     
     * @param Boolean $allowPartOffer     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setAllowPartOffer( $allowPartOffer) {
        $this->sdkStdResult["allowPartOffer"] = $allowPartOffer;
    }
    
        
        /**
    * @return 公开询价单
    */
        public function getOpen() {
        $tempResult = $this->sdkStdResult["open"];
        return $tempResult;
    }
    
    /**
     * 设置公开询价单     
     * @param Boolean $open     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setOpen( $open) {
        $this->sdkStdResult["open"] = $open;
    }
    
        
        /**
    * @return 公开到portal
    */
        public function getOpenToPortal() {
        $tempResult = $this->sdkStdResult["openToPortal"];
        return $tempResult;
    }
    
    /**
     * 设置公开到portal     
     * @param Boolean $openToPortal     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setOpenToPortal( $openToPortal) {
        $this->sdkStdResult["openToPortal"] = $openToPortal;
    }
    
        
        /**
    * @return 交易方式
    */
        public function getProcessTemplateCode() {
        $tempResult = $this->sdkStdResult["processTemplateCode"];
        return $tempResult;
    }
    
    /**
     * 设置交易方式     
     * @param String $processTemplateCode     
     * 参数示例：<pre>assureTradeBusinessBuy
担保交易
accountPeriod 账期
stepTrade91BusinessBuy 企业担保交易91分阶段
stepTrade37BusinessBuy 企业担保交易37分阶段
stepTrade361BusinessBuy 企业担保交易361分阶段
stepTrade631BusinessBuy 企业担保交易631分阶段</pre>     
     * 此参数必填     */
    public function setProcessTemplateCode( $processTemplateCode) {
        $this->sdkStdResult["processTemplateCode"] = $processTemplateCode;
    }
    
        
        /**
    * @return 支付方式
    */
        public function getTransToolType() {
        $tempResult = $this->sdkStdResult["transToolType"];
        return $tempResult;
    }
    
    /**
     * 设置支付方式     
     * @param String $transToolType     
     * 参数示例：<pre>1 个人支付宝
2 企业支付宝
3 银行转账
4 电子承兑汇票</pre>     
     * 此参数必填     */
    public function setTransToolType( $transToolType) {
        $this->sdkStdResult["transToolType"] = $transToolType;
    }
    
        
        /**
    * @return 经营地址
    */
        public function getSupplierAreas() {
        $tempResult = $this->sdkStdResult["supplierAreas"];
        return $tempResult;
    }
    
    /**
     * 设置经营地址     
     * @param List $supplierAreas     
     * 参数示例：<pre>[1531,4853]</pre>     
     * 此参数必填     */
    public function setSupplierAreas(array $supplierAreas) {
        $this->sdkStdResult["supplierAreas"] = $supplierAreas;
    }
    
        
        /**
    * @return 是否需要签署保密协议
    */
        public function getNeedSignAgreement() {
        $tempResult = $this->sdkStdResult["needSignAgreement"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要签署保密协议     
     * @param String $needSignAgreement     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedSignAgreement( $needSignAgreement) {
        $this->sdkStdResult["needSignAgreement"] = $needSignAgreement;
    }
    
        
        /**
    * @return 采购类型：
singlepurchase:单次采购
priceprotocol:长期采购
    */
        public function getSubBizType() {
        $tempResult = $this->sdkStdResult["subBizType"];
        return $tempResult;
    }
    
    /**
     * 设置采购类型：
singlepurchase:单次采购
priceprotocol:长期采购     
     * @param String $subBizType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSubBizType( $subBizType) {
        $this->sdkStdResult["subBizType"] = $subBizType;
    }
    
        
        /**
    * @return 询价方式：
open：对1688公开征集供应商
allmysupplier：对所有合格供应商公开询价
selectedmysupplier：只允许我邀请的供应商报价
    */
        public function getSourceMethodType() {
        $tempResult = $this->sdkStdResult["sourceMethodType"];
        return $tempResult;
    }
    
    /**
     * 设置询价方式：
open：对1688公开征集供应商
allmysupplier：对所有合格供应商公开询价
selectedmysupplier：只允许我邀请的供应商报价     
     * @param String $sourceMethodType     
     * 参数示例：<pre>open</pre>     
     * 此参数必填     */
    public function setSourceMethodType( $sourceMethodType) {
        $this->sdkStdResult["sourceMethodType"] = $sourceMethodType;
    }
    
        
        /**
    * @return 邀请供应商
    */
        public function getSupplierMemberIds() {
        $tempResult = $this->sdkStdResult["supplierMemberIds"];
        return $tempResult;
    }
    
    /**
     * 设置邀请供应商     
     * @param List $supplierMemberIds     
     * 参数示例：<pre>["供应商memberId","供应商memberId"]</pre>     
     * 此参数必填     */
    public function setSupplierMemberIds(array $supplierMemberIds) {
        $this->sdkStdResult["supplierMemberIds"] = $supplierMemberIds;
    }
    
        
        /**
    * @return 价格有效期开始
    */
        public function getGmtProtocolStart() {
        $tempResult = $this->sdkStdResult["gmtProtocolStart"];
        return $tempResult;
    }
    
    /**
     * 设置价格有效期开始     
     * @param Date $gmtProtocolStart     
     * 参数示例：<pre>20140801154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtProtocolStart( $gmtProtocolStart) {
        $this->sdkStdResult["gmtProtocolStart"] = $gmtProtocolStart;
    }
    
        
        /**
    * @return 价格有效期结束
    */
        public function getGmtProtocolEnd() {
        $tempResult = $this->sdkStdResult["gmtProtocolEnd"];
        return $tempResult;
    }
    
    /**
     * 设置价格有效期结束     
     * @param Date $gmtProtocolEnd     
     * 参数示例：<pre>20140801154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtProtocolEnd( $gmtProtocolEnd) {
        $this->sdkStdResult["gmtProtocolEnd"] = $gmtProtocolEnd;
    }
    
        
        /**
    * @return 收货街道地址
    */
        public function getReceiveStreetAddress() {
        $tempResult = $this->sdkStdResult["receiveStreetAddress"];
        return $tempResult;
    }
    
    /**
     * 设置收货街道地址     
     * @param String $receiveStreetAddress     
     * 参数示例：<pre>长河街道</pre>     
     * 此参数必填     */
    public function setReceiveStreetAddress( $receiveStreetAddress) {
        $this->sdkStdResult["receiveStreetAddress"] = $receiveStreetAddress;
    }
    
        
        /**
    * @return 网购文件描述说明
    */
        public function getOnlineShoppingDesc() {
        $tempResult = $this->sdkStdResult["onlineShoppingDesc"];
        return $tempResult;
    }
    
    /**
     * 设置网购文件描述说明     
     * @param String $onlineShoppingDesc     
     * 参数示例：<pre>网购文件描述说明</pre>     
     * 此参数必填     */
    public function setOnlineShoppingDesc( $onlineShoppingDesc) {
        $this->sdkStdResult["onlineShoppingDesc"] = $onlineShoppingDesc;
    }
    
        
        /**
    * @return 网购文件附件附件id的列表id来源于上传附件的接口。
    */
        public function getOnlineShoppingAttachList() {
        $tempResult = $this->sdkStdResult["onlineShoppingAttachList"];
        return $tempResult;
    }
    
    /**
     * 设置网购文件附件附件id的列表id来源于上传附件的接口。     
     * @param List $onlineShoppingAttachList     
     * 参数示例：<pre>[1262298693,1262298693,1262298707,1262298708]</pre>     
     * 此参数必填     */
    public function setOnlineShoppingAttachList(array $onlineShoppingAttachList) {
        $this->sdkStdResult["onlineShoppingAttachList"] = $onlineShoppingAttachList;
    }
    
        
        /**
    * @return 期望收货开始时间
    */
        public function getGmtReceiveBeginDate() {
        $tempResult = $this->sdkStdResult["gmtReceiveBeginDate"];
        return $tempResult;
    }
    
    /**
     * 设置期望收货开始时间     
     * @param Date $gmtReceiveBeginDate     
     * 参数示例：<pre>20140801154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtReceiveBeginDate( $gmtReceiveBeginDate) {
        $this->sdkStdResult["gmtReceiveBeginDate"] = $gmtReceiveBeginDate;
    }
    
        
        /**
    * @return 期望收货结束日期
    */
        public function getGmtReceive() {
        $tempResult = $this->sdkStdResult["gmtReceive"];
        return $tempResult;
    }
    
    /**
     * 设置期望收货结束日期     
     * @param Date $gmtReceive     
     * 参数示例：<pre>20140801154220368+0800</pre>     
     * 此参数必填     */
    public function setGmtReceive( $gmtReceive) {
        $this->sdkStdResult["gmtReceive"] = $gmtReceive;
    }
    
        
        /**
    * @return 供应商loginIds
    */
        public function getSupplierLoginIds() {
        $tempResult = $this->sdkStdResult["supplierLoginIds"];
        return $tempResult;
    }
    
    /**
     * 设置供应商loginIds     
     * @param List $supplierLoginIds     
     * 参数示例：<pre>供应商loginIds</pre>     
     * 此参数必填     */
    public function setSupplierLoginIds(array $supplierLoginIds) {
        $this->sdkStdResult["supplierLoginIds"] = $supplierLoginIds;
    }
    
        
        /**
    * @return 采购单类型
    */
        public function getPurchaseNoteType() {
        $tempResult = $this->sdkStdResult["purchaseNoteType"];
        return $tempResult;
    }
    
    /**
     * 设置采购单类型     
     * @param String $purchaseNoteType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPurchaseNoteType( $purchaseNoteType) {
        $this->sdkStdResult["purchaseNoteType"] = $purchaseNoteType;
    }
    
        
        /**
    * @return 交货期
    */
        public function getDeliveryPeriod() {
        $tempResult = $this->sdkStdResult["deliveryPeriod"];
        return $tempResult;
    }
    
    /**
     * 设置交货期     
     * @param Integer $deliveryPeriod     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setDeliveryPeriod( $deliveryPeriod) {
        $this->sdkStdResult["deliveryPeriod"] = $deliveryPeriod;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>