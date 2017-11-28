<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeModelOrderBaseInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeModelGuaranteeTermsInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeModelInternationalLogisticsInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeModelNativeLogisticsInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeModelProductItemInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeModelTradeTermsInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeKeyValuePair.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeOrderRateInfo.class.php');
include_once ('com/alibaba/trade/param/AlibabaInvoiceOrderInvoiceModel.class.php');

class AlibabaOpenplatformTradeModelTradeInfo extends SDKDomain {

       	
    private $baseInfo;
    
        /**
    * @return 订单基础信息
    */
        public function getBaseInfo() {
        return $this->baseInfo;
    }
    
    /**
     * 设置订单基础信息     
     * @param AlibabaOpenplatformTradeModelOrderBaseInfo $baseInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBaseInfo(AlibabaOpenplatformTradeModelOrderBaseInfo $baseInfo) {
        $this->baseInfo = $baseInfo;
    }
    
        	
    private $guaranteesTerms;
    
        /**
    * @return 保障条款
    */
        public function getGuaranteesTerms() {
        return $this->guaranteesTerms;
    }
    
    /**
     * 设置保障条款     
     * @param AlibabaOpenplatformTradeModelGuaranteeTermsInfo $guaranteesTerms     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGuaranteesTerms(AlibabaOpenplatformTradeModelGuaranteeTermsInfo $guaranteesTerms) {
        $this->guaranteesTerms = $guaranteesTerms;
    }
    
        	
    private $internationalLogistics;
    
        /**
    * @return 国际物流
    */
        public function getInternationalLogistics() {
        return $this->internationalLogistics;
    }
    
    /**
     * 设置国际物流     
     * @param AlibabaOpenplatformTradeModelInternationalLogisticsInfo $internationalLogistics     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInternationalLogistics(AlibabaOpenplatformTradeModelInternationalLogisticsInfo $internationalLogistics) {
        $this->internationalLogistics = $internationalLogistics;
    }
    
        	
    private $nativeLogistics;
    
        /**
    * @return 国内物流
    */
        public function getNativeLogistics() {
        return $this->nativeLogistics;
    }
    
    /**
     * 设置国内物流     
     * @param AlibabaOpenplatformTradeModelNativeLogisticsInfo $nativeLogistics     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNativeLogistics(AlibabaOpenplatformTradeModelNativeLogisticsInfo $nativeLogistics) {
        $this->nativeLogistics = $nativeLogistics;
    }
    
        	
    private $productItems;
    
        /**
    * @return 商品条目信息
    */
        public function getProductItems() {
        return $this->productItems;
    }
    
    /**
     * 设置商品条目信息     
     * @param array include @see AlibabaOpenplatformTradeModelProductItemInfo[] $productItems     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductItems(AlibabaOpenplatformTradeModelProductItemInfo $productItems) {
        $this->productItems = $productItems;
    }
    
        	
    private $tradeTerms;
    
        /**
    * @return 交易条款
    */
        public function getTradeTerms() {
        return $this->tradeTerms;
    }
    
    /**
     * 设置交易条款     
     * @param array include @see AlibabaOpenplatformTradeModelTradeTermsInfo[] $tradeTerms     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeTerms(AlibabaOpenplatformTradeModelTradeTermsInfo $tradeTerms) {
        $this->tradeTerms = $tradeTerms;
    }
    
        	
    private $extAttributes;
    
        /**
    * @return 订单扩展属性
    */
        public function getExtAttributes() {
        return $this->extAttributes;
    }
    
    /**
     * 设置订单扩展属性     
     * @param array include @see AlibabaOpenplatformTradeKeyValuePair[] $extAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtAttributes(AlibabaOpenplatformTradeKeyValuePair $extAttributes) {
        $this->extAttributes = $extAttributes;
    }
    
        	
    private $orderRateInfo;
    
        /**
    * @return 订单评价信息
    */
        public function getOrderRateInfo() {
        return $this->orderRateInfo;
    }
    
    /**
     * 设置订单评价信息     
     * @param AlibabaTradeOrderRateInfo $orderRateInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderRateInfo(AlibabaTradeOrderRateInfo $orderRateInfo) {
        $this->orderRateInfo = $orderRateInfo;
    }
    
        	
    private $orderInvoiceInfo;
    
        /**
    * @return 发票信息
    */
        public function getOrderInvoiceInfo() {
        return $this->orderInvoiceInfo;
    }
    
    /**
     * 设置发票信息     
     * @param AlibabaInvoiceOrderInvoiceModel $orderInvoiceInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderInvoiceInfo(AlibabaInvoiceOrderInvoiceModel $orderInvoiceInfo) {
        $this->orderInvoiceInfo = $orderInvoiceInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "baseInfo", $this->stdResult )) {
    				$baseInfoResult=$this->stdResult->{"baseInfo"};
    				$this->baseInfo = new AlibabaOpenplatformTradeModelOrderBaseInfo();
    				$this->baseInfo->setStdResult ( $baseInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "guaranteesTerms", $this->stdResult )) {
    				$guaranteesTermsResult=$this->stdResult->{"guaranteesTerms"};
    				$this->guaranteesTerms = new AlibabaOpenplatformTradeModelGuaranteeTermsInfo();
    				$this->guaranteesTerms->setStdResult ( $guaranteesTermsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "internationalLogistics", $this->stdResult )) {
    				$internationalLogisticsResult=$this->stdResult->{"internationalLogistics"};
    				$this->internationalLogistics = new AlibabaOpenplatformTradeModelInternationalLogisticsInfo();
    				$this->internationalLogistics->setStdResult ( $internationalLogisticsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "nativeLogistics", $this->stdResult )) {
    				$nativeLogisticsResult=$this->stdResult->{"nativeLogistics"};
    				$this->nativeLogistics = new AlibabaOpenplatformTradeModelNativeLogisticsInfo();
    				$this->nativeLogistics->setStdResult ( $nativeLogisticsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productItems", $this->stdResult )) {
    			$productItemsResult=$this->stdResult->{"productItems"};
    				$object = json_decode ( json_encode ( $productItemsResult ), true );
					$this->productItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeModelProductItemInfoResult=new AlibabaOpenplatformTradeModelProductItemInfo();
						$AlibabaOpenplatformTradeModelProductItemInfoResult->setArrayResult($arrayobject );
						$this->productItems [$i] = $AlibabaOpenplatformTradeModelProductItemInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "tradeTerms", $this->stdResult )) {
    			$tradeTermsResult=$this->stdResult->{"tradeTerms"};
    				$object = json_decode ( json_encode ( $tradeTermsResult ), true );
					$this->tradeTerms = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeModelTradeTermsInfoResult=new AlibabaOpenplatformTradeModelTradeTermsInfo();
						$AlibabaOpenplatformTradeModelTradeTermsInfoResult->setArrayResult($arrayobject );
						$this->tradeTerms [$i] = $AlibabaOpenplatformTradeModelTradeTermsInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "extAttributes", $this->stdResult )) {
    			$extAttributesResult=$this->stdResult->{"extAttributes"};
    				$object = json_decode ( json_encode ( $extAttributesResult ), true );
					$this->extAttributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeKeyValuePairResult=new AlibabaOpenplatformTradeKeyValuePair();
						$AlibabaOpenplatformTradeKeyValuePairResult->setArrayResult($arrayobject );
						$this->extAttributes [$i] = $AlibabaOpenplatformTradeKeyValuePairResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderRateInfo", $this->stdResult )) {
    				$orderRateInfoResult=$this->stdResult->{"orderRateInfo"};
    				$this->orderRateInfo = new AlibabaTradeOrderRateInfo();
    				$this->orderRateInfo->setStdResult ( $orderRateInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderInvoiceInfo", $this->stdResult )) {
    				$orderInvoiceInfoResult=$this->stdResult->{"orderInvoiceInfo"};
    				$this->orderInvoiceInfo = new AlibabaInvoiceOrderInvoiceModel();
    				$this->orderInvoiceInfo->setStdResult ( $orderInvoiceInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "baseInfo", $this->arrayResult )) {
    		$baseInfoResult=$arrayResult['baseInfo'];
    			    			$this->baseInfo = new AlibabaOpenplatformTradeModelOrderBaseInfo();
    			    			$this->baseInfo->setStdResult ( $baseInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "guaranteesTerms", $this->arrayResult )) {
    		$guaranteesTermsResult=$arrayResult['guaranteesTerms'];
    			    			$this->guaranteesTerms = new AlibabaOpenplatformTradeModelGuaranteeTermsInfo();
    			    			$this->guaranteesTerms->setStdResult ( $guaranteesTermsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "internationalLogistics", $this->arrayResult )) {
    		$internationalLogisticsResult=$arrayResult['internationalLogistics'];
    			    			$this->internationalLogistics = new AlibabaOpenplatformTradeModelInternationalLogisticsInfo();
    			    			$this->internationalLogistics->setStdResult ( $internationalLogisticsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "nativeLogistics", $this->arrayResult )) {
    		$nativeLogisticsResult=$arrayResult['nativeLogistics'];
    			    			$this->nativeLogistics = new AlibabaOpenplatformTradeModelNativeLogisticsInfo();
    			    			$this->nativeLogistics->setStdResult ( $nativeLogisticsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productItems", $this->arrayResult )) {
    		$productItemsResult=$arrayResult['productItems'];
    			$this->productItems = new AlibabaOpenplatformTradeModelProductItemInfo();
    			$this->productItems->setStdResult ( $productItemsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "tradeTerms", $this->arrayResult )) {
    		$tradeTermsResult=$arrayResult['tradeTerms'];
    			$this->tradeTerms = new AlibabaOpenplatformTradeModelTradeTermsInfo();
    			$this->tradeTerms->setStdResult ( $tradeTermsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "extAttributes", $this->arrayResult )) {
    		$extAttributesResult=$arrayResult['extAttributes'];
    			$this->extAttributes = new AlibabaOpenplatformTradeKeyValuePair();
    			$this->extAttributes->setStdResult ( $extAttributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderRateInfo", $this->arrayResult )) {
    		$orderRateInfoResult=$arrayResult['orderRateInfo'];
    			    			$this->orderRateInfo = new AlibabaTradeOrderRateInfo();
    			    			$this->orderRateInfo->setStdResult ( $orderRateInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderInvoiceInfo", $this->arrayResult )) {
    		$orderInvoiceInfoResult=$arrayResult['orderInvoiceInfo'];
    			    			$this->orderInvoiceInfo = new AlibabaInvoiceOrderInvoiceModel();
    			    			$this->orderInvoiceInfo->setStdResult ( $orderInvoiceInfoResult);
    		}
    		    	    		}
 
   
}
?>