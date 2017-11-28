<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelAttachment.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelAreaInfo.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelPurchaseNoteItem.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelContactInfo.class.php');

class ComAlibabaCaigouApiBuyOfferModelBuyOffer extends SDKDomain {

       	
    private $gmtQuotationExpire;
    
        /**
    * @return 询价单报价截至时间
    */
        public function getGmtQuotationExpire() {
        return $this->gmtQuotationExpire;
    }
    
    /**
     * 设置询价单报价截至时间     
     * @param Date $gmtQuotationExpire     
     * 参数示例：<pre>20140405235959000+0800</pre>     
     * 此参数必填     */
    public function setGmtQuotationExpire( $gmtQuotationExpire) {
        $this->gmtQuotationExpire = $gmtQuotationExpire;
    }
    
        	
    private $description;
    
        /**
    * @return 描述（有可能是富文本形式）
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置描述（有可能是富文本形式）     
     * @param String $description     
     * 参数示例：<pre><p>我是询价单补充说明</p></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $status;
    
        /**
    * @return 询价单状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置询价单状态     
     * @param String $status     
     * 参数示例：<pre>quotationing</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $title;
    
        /**
    * @return 标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置标题     
     * @param String $title     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $attachments;
    
        /**
    * @return 询价单附件
    */
        public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * 设置询价单附件     
     * @param array include @see ComAlibabaCaigouApiCommonModelAttachment[] $attachments     
     * 参数示例：<pre>[...]</pre>     
     * 此参数必填     */
    public function setAttachments(ComAlibabaCaigouApiCommonModelAttachment $attachments) {
        $this->attachments = $attachments;
    }
    
        	
    private $purchaseNoteId;
    
        /**
    * @return 采购单ID（询价单ID）
    */
        public function getPurchaseNoteId() {
        return $this->purchaseNoteId;
    }
    
    /**
     * 设置采购单ID（询价单ID）     
     * @param String $purchaseNoteId     
     * 参数示例：<pre>700024767</pre>     
     * 此参数必填     */
    public function setPurchaseNoteId( $purchaseNoteId) {
        $this->purchaseNoteId = $purchaseNoteId;
    }
    
        	
    private $subUserId;
    
        /**
    * @return 采购商子帐号UserId
    */
        public function getSubUserId() {
        return $this->subUserId;
    }
    
    /**
     * 设置采购商子帐号UserId     
     * @param Long $subUserId     
     * 参数示例：<pre>2041569602</pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->subUserId = $subUserId;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 采购商会员ID
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置采购商会员ID     
     * @param String $buyerMemberId     
     * 参数示例：<pre>alitpforpd</pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 询价单创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置询价单创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>20140306101603000+0800</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $receiptAddress;
    
        /**
    * @return 收货人地址
    */
        public function getReceiptAddress() {
        return $this->receiptAddress;
    }
    
    /**
     * 设置收货人地址     
     * @param ComAlibabaCaigouApiCommonModelAreaInfo $receiptAddress     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setReceiptAddress(ComAlibabaCaigouApiCommonModelAreaInfo $receiptAddress) {
        $this->receiptAddress = $receiptAddress;
    }
    
        	
    private $purchaseNoteItems;
    
        /**
    * @return 询价单条目
    */
        public function getPurchaseNoteItems() {
        return $this->purchaseNoteItems;
    }
    
    /**
     * 设置询价单条目     
     * @param array include @see ComAlibabaCaigouApiCommonModelPurchaseNoteItem[] $purchaseNoteItems     
     * 参数示例：<pre>[...]</pre>     
     * 此参数必填     */
    public function setPurchaseNoteItems(ComAlibabaCaigouApiCommonModelPurchaseNoteItem $purchaseNoteItems) {
        $this->purchaseNoteItems = $purchaseNoteItems;
    }
    
        	
    private $contactInfo;
    
        /**
    * @return 联系方式
    */
        public function getContactInfo() {
        return $this->contactInfo;
    }
    
    /**
     * 设置联系方式     
     * @param ComAlibabaCaigouApiCommonModelContactInfo $contactInfo     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setContactInfo(ComAlibabaCaigouApiCommonModelContactInfo $contactInfo) {
        $this->contactInfo = $contactInfo;
    }
    
        	
    private $prId;
    
        /**
    * @return 外部系统的prId
    */
        public function getPrId() {
        return $this->prId;
    }
    
    /**
     * 设置外部系统的prId     
     * @param String $prId     
     * 参数示例：<pre>123abc</pre>     
     * 此参数必填     */
    public function setPrId( $prId) {
        $this->prId = $prId;
    }
    
        	
    private $includeTax;
    
        /**
    * @return 是否含税
    */
        public function getIncludeTax() {
        return $this->includeTax;
    }
    
    /**
     * 设置是否含税     
     * @param Boolean $includeTax     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIncludeTax( $includeTax) {
        $this->includeTax = $includeTax;
    }
    
        	
    private $isVisibleAfterEndQuote;
    
        /**
    * @return 标记该询价单是否需要报价截止时间到期后才能查看报价单
    */
        public function getIsVisibleAfterEndQuote() {
        return $this->isVisibleAfterEndQuote;
    }
    
    /**
     * 设置标记该询价单是否需要报价截止时间到期后才能查看报价单     
     * @param Boolean $isVisibleAfterEndQuote     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsVisibleAfterEndQuote( $isVisibleAfterEndQuote) {
        $this->isVisibleAfterEndQuote = $isVisibleAfterEndQuote;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtQuotationExpire", $this->stdResult )) {
    				$this->gmtQuotationExpire = $this->stdResult->{"gmtQuotationExpire"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachments", $this->stdResult )) {
    			$attachmentsResult=$this->stdResult->{"attachments"};
    				$object = json_decode ( json_encode ( $attachmentsResult ), true );
					$this->attachments = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiCommonModelAttachmentResult=new ComAlibabaCaigouApiCommonModelAttachment();
						$ComAlibabaCaigouApiCommonModelAttachmentResult->setArrayResult($arrayobject );
						$this->attachments [$i] = $ComAlibabaCaigouApiCommonModelAttachmentResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseNoteId", $this->stdResult )) {
    				$this->purchaseNoteId = $this->stdResult->{"purchaseNoteId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subUserId", $this->stdResult )) {
    				$this->subUserId = $this->stdResult->{"subUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiptAddress", $this->stdResult )) {
    				$receiptAddressResult=$this->stdResult->{"receiptAddress"};
    				$this->receiptAddress = new ComAlibabaCaigouApiCommonModelAreaInfo();
    				$this->receiptAddress->setStdResult ( $receiptAddressResult);
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseNoteItems", $this->stdResult )) {
    			$purchaseNoteItemsResult=$this->stdResult->{"purchaseNoteItems"};
    				$object = json_decode ( json_encode ( $purchaseNoteItemsResult ), true );
					$this->purchaseNoteItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiCommonModelPurchaseNoteItemResult=new ComAlibabaCaigouApiCommonModelPurchaseNoteItem();
						$ComAlibabaCaigouApiCommonModelPurchaseNoteItemResult->setArrayResult($arrayobject );
						$this->purchaseNoteItems [$i] = $ComAlibabaCaigouApiCommonModelPurchaseNoteItemResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "contactInfo", $this->stdResult )) {
    				$contactInfoResult=$this->stdResult->{"contactInfo"};
    				$this->contactInfo = new ComAlibabaCaigouApiCommonModelContactInfo();
    				$this->contactInfo->setStdResult ( $contactInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "prId", $this->stdResult )) {
    				$this->prId = $this->stdResult->{"prId"};
    			}
    			    		    				    			    			if (array_key_exists ( "includeTax", $this->stdResult )) {
    				$this->includeTax = $this->stdResult->{"includeTax"};
    			}
    			    		    				    			    			if (array_key_exists ( "isVisibleAfterEndQuote", $this->stdResult )) {
    				$this->isVisibleAfterEndQuote = $this->stdResult->{"isVisibleAfterEndQuote"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtQuotationExpire", $this->arrayResult )) {
    			$this->gmtQuotationExpire = $arrayResult['gmtQuotationExpire'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    		if (array_key_exists ( "attachments", $this->arrayResult )) {
    		$attachmentsResult=$arrayResult['attachments'];
    			$this->attachments = new ComAlibabaCaigouApiCommonModelAttachment();
    			$this->attachments->setStdResult ( $attachmentsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "purchaseNoteId", $this->arrayResult )) {
    			$this->purchaseNoteId = $arrayResult['purchaseNoteId'];
    			}
    		    	    			    		    			if (array_key_exists ( "subUserId", $this->arrayResult )) {
    			$this->subUserId = $arrayResult['subUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['buyerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    		if (array_key_exists ( "receiptAddress", $this->arrayResult )) {
    		$receiptAddressResult=$arrayResult['receiptAddress'];
    			    			$this->receiptAddress = new ComAlibabaCaigouApiCommonModelAreaInfo();
    			    			$this->receiptAddress->setStdResult ( $receiptAddressResult);
    		}
    		    	    			    		    		if (array_key_exists ( "purchaseNoteItems", $this->arrayResult )) {
    		$purchaseNoteItemsResult=$arrayResult['purchaseNoteItems'];
    			$this->purchaseNoteItems = new ComAlibabaCaigouApiCommonModelPurchaseNoteItem();
    			$this->purchaseNoteItems->setStdResult ( $purchaseNoteItemsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "contactInfo", $this->arrayResult )) {
    		$contactInfoResult=$arrayResult['contactInfo'];
    			    			$this->contactInfo = new ComAlibabaCaigouApiCommonModelContactInfo();
    			    			$this->contactInfo->setStdResult ( $contactInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "prId", $this->arrayResult )) {
    			$this->prId = $arrayResult['prId'];
    			}
    		    	    			    		    			if (array_key_exists ( "includeTax", $this->arrayResult )) {
    			$this->includeTax = $arrayResult['includeTax'];
    			}
    		    	    			    		    			if (array_key_exists ( "isVisibleAfterEndQuote", $this->arrayResult )) {
    			$this->isVisibleAfterEndQuote = $arrayResult['isVisibleAfterEndQuote'];
    			}
    		    	    		}
 
   
}
?>