<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainProductProductAttribute.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiProductModelProductImage.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelAttachment.class.php');

class CaigouDomainProductProductCoop extends SDKDomain {

       	
    private $memberId;
    
        /**
    * @return 用户编号
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置用户编号     
     * @param String $memberId     
     * 参数示例：<pre>zhoulh***001</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $productCode;
    
        /**
    * @return 产品编号
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置产品编号     
     * @param String $productCode     
     * 参数示例：<pre>prod_01</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $title;
    
        /**
    * @return 产品名
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置产品名     
     * @param String $title     
     * 参数示例：<pre>山地车车架</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $unit;
    
        /**
    * @return 产品单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置产品单位     
     * @param String $unit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $remark;
    
        /**
    * @return 产品备注
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置产品备注     
     * @param String $remark     
     * 参数示例：<pre>配装140-200行程前叉</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $status;
    
        /**
    * @return 状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态     
     * @param String $status     
     * 参数示例：<pre>new del</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $gmtLastTrade;
    
        /**
    * @return 最后交易时间
    */
        public function getGmtLastTrade() {
        return $this->gmtLastTrade;
    }
    
    /**
     * 设置最后交易时间     
     * @param String $gmtLastTrade     
     * 参数示例：<pre>yyyy-MM-dd HH:mm:ss</pre>     
     * 此参数必填     */
    public function setGmtLastTrade( $gmtLastTrade) {
        $this->gmtLastTrade = $gmtLastTrade;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param String $gmtCreate     
     * 参数示例：<pre>yyyy-MM-dd HH:mm:ss</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param String $gmtModified     
     * 参数示例：<pre>yyyy-MM-dd HH:mm:ss</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $attributes;
    
        /**
    * @return 属性列表
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置属性列表     
     * @param array include @see CaigouDomainProductProductAttribute[] $attributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributes(CaigouDomainProductProductAttribute $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $imgList;
    
        /**
    * @return 产品图片
    */
        public function getImgList() {
        return $this->imgList;
    }
    
    /**
     * 设置产品图片     
     * @param array include @see ComAlibabaCaigouApiProductModelProductImage[] $imgList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImgList(ComAlibabaCaigouApiProductModelProductImage $imgList) {
        $this->imgList = $imgList;
    }
    
        	
    private $attachments;
    
        /**
    * @return 产品附件列表
    */
        public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * 设置产品附件列表     
     * @param array include @see ComAlibabaCaigouApiCommonModelAttachment[] $attachments     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttachments(ComAlibabaCaigouApiCommonModelAttachment $attachments) {
        $this->attachments = $attachments;
    }
    
        	
    private $productId;
    
        /**
    * @return 产品副标题
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置产品副标题     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtLastTrade", $this->stdResult )) {
    				$this->gmtLastTrade = $this->stdResult->{"gmtLastTrade"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    			$attributesResult=$this->stdResult->{"attributes"};
    				$object = json_decode ( json_encode ( $attributesResult ), true );
					$this->attributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$CaigouDomainProductProductAttributeResult=new CaigouDomainProductProductAttribute();
						$CaigouDomainProductProductAttributeResult->setArrayResult($arrayobject );
						$this->attributes [$i] = $CaigouDomainProductProductAttributeResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "imgList", $this->stdResult )) {
    			$imgListResult=$this->stdResult->{"imgList"};
    				$object = json_decode ( json_encode ( $imgListResult ), true );
					$this->imgList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiProductModelProductImageResult=new ComAlibabaCaigouApiProductModelProductImage();
						$ComAlibabaCaigouApiProductModelProductImageResult->setArrayResult($arrayobject );
						$this->imgList [$i] = $ComAlibabaCaigouApiProductModelProductImageResult;
					}
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
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtLastTrade", $this->arrayResult )) {
    			$this->gmtLastTrade = $arrayResult['gmtLastTrade'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['attributes'];
    			$this->attributes = new CaigouDomainProductProductAttribute();
    			$this->attributes->setStdResult ( $attributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "imgList", $this->arrayResult )) {
    		$imgListResult=$arrayResult['imgList'];
    			$this->imgList = new ComAlibabaCaigouApiProductModelProductImage();
    			$this->imgList->setStdResult ( $imgListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "attachments", $this->arrayResult )) {
    		$attachmentsResult=$arrayResult['attachments'];
    			$this->attachments = new ComAlibabaCaigouApiCommonModelAttachment();
    			$this->attachments->setStdResult ( $attachmentsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    		}
 
   
}
?>