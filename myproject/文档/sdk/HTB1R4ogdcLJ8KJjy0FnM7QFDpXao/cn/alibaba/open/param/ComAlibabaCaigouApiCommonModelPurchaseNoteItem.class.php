<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelAttachment.class.php');

class ComAlibabaCaigouApiCommonModelPurchaseNoteItem extends SDKDomain {

       	
    private $subject;
    
        /**
    * @return 标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置标题     
     * @param String $subject     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $attachments;
    
        /**
    * @return 附件
    */
        public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * 设置附件     
     * @param array include @see ComAlibabaCaigouApiCommonModelAttachment[] $attachments     
     * 参数示例：<pre>[...]</pre>     
     * 此参数必填     */
    public function setAttachments(ComAlibabaCaigouApiCommonModelAttachment $attachments) {
        $this->attachments = $attachments;
    }
    
        	
    private $purchaseAmount;
    
        /**
    * @return 采购数量
    */
        public function getPurchaseAmount() {
        return $this->purchaseAmount;
    }
    
    /**
     * 设置采购数量     
     * @param Long $purchaseAmount     
     * 参数示例：<pre>102</pre>     
     * 此参数必填     */
    public function setPurchaseAmount( $purchaseAmount) {
        $this->purchaseAmount = $purchaseAmount;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $productFeature;
    
        /**
    * @return 产品描述
    */
        public function getProductFeature() {
        return $this->productFeature;
    }
    
    /**
     * 设置产品描述     
     * @param String $productFeature     
     * 参数示例：<pre>我是询价单产品描述</pre>     
     * 此参数必填     */
    public function setProductFeature( $productFeature) {
        $this->productFeature = $productFeature;
    }
    
        	
    private $purchaseNoteItemId;
    
        /**
    * @return 采购单条目ID
    */
        public function getPurchaseNoteItemId() {
        return $this->purchaseNoteItemId;
    }
    
    /**
     * 设置采购单条目ID     
     * @param String $purchaseNoteItemId     
     * 参数示例：<pre>00513d3e-5026-424a-9375-359a5cd4d38f</pre>     
     * 此参数必填     */
    public function setPurchaseNoteItemId( $purchaseNoteItemId) {
        $this->purchaseNoteItemId = $purchaseNoteItemId;
    }
    
        	
    private $productCode;
    
        /**
    * @return 外部产品code
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置外部产品code     
     * @param String $productCode     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $prItemId;
    
        /**
    * @return 外部pr的行的标识
    */
        public function getPrItemId() {
        return $this->prItemId;
    }
    
    /**
     * 设置外部pr的行的标识     
     * @param String $prItemId     
     * 参数示例：<pre>345</pre>     
     * 此参数必填     */
    public function setPrItemId( $prItemId) {
        $this->prItemId = $prItemId;
    }
    
        	
    private $purchaseCount;
    
        /**
    * @return 采购数量(最多支持3位小数)
    */
        public function getPurchaseCount() {
        return $this->purchaseCount;
    }
    
    /**
     * 设置采购数量(最多支持3位小数)     
     * @param Double $purchaseCount     
     * 参数示例：<pre>3.147</pre>     
     * 此参数必填     */
    public function setPurchaseCount( $purchaseCount) {
        $this->purchaseCount = $purchaseCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
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
    			    		    				    			    			if (array_key_exists ( "purchaseAmount", $this->stdResult )) {
    				$this->purchaseAmount = $this->stdResult->{"purchaseAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "productFeature", $this->stdResult )) {
    				$this->productFeature = $this->stdResult->{"productFeature"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseNoteItemId", $this->stdResult )) {
    				$this->purchaseNoteItemId = $this->stdResult->{"purchaseNoteItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "prItemId", $this->stdResult )) {
    				$this->prItemId = $this->stdResult->{"prItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseCount", $this->stdResult )) {
    				$this->purchaseCount = $this->stdResult->{"purchaseCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    		if (array_key_exists ( "attachments", $this->arrayResult )) {
    		$attachmentsResult=$arrayResult['attachments'];
    			$this->attachments = new ComAlibabaCaigouApiCommonModelAttachment();
    			$this->attachments->setStdResult ( $attachmentsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "purchaseAmount", $this->arrayResult )) {
    			$this->purchaseAmount = $arrayResult['purchaseAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "productFeature", $this->arrayResult )) {
    			$this->productFeature = $arrayResult['productFeature'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchaseNoteItemId", $this->arrayResult )) {
    			$this->purchaseNoteItemId = $arrayResult['purchaseNoteItemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "prItemId", $this->arrayResult )) {
    			$this->prItemId = $arrayResult['prItemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchaseCount", $this->arrayResult )) {
    			$this->purchaseCount = $arrayResult['purchaseCount'];
    			}
    		    	    		}
 
   
}
?>