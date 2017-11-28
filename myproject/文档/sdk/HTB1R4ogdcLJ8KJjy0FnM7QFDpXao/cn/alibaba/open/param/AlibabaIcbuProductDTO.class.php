<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductGroupDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductScoreDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductTradeDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductImageDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductExtDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductPropertyDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductDetailDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductSkuDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductShippingDTO.class.php');

class AlibabaIcbuProductDTO extends SDKDomain {

       	
    private $vaccountId;
    
        /**
    * @return 
    */
        public function getVaccountId() {
        return $this->vaccountId;
    }
    
    /**
     * 设置     
     * @param Long $vaccountId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVaccountId( $vaccountId) {
        $this->vaccountId = $vaccountId;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $keywords;
    
        /**
    * @return 
    */
        public function getKeywords() {
        return $this->keywords;
    }
    
    /**
     * 设置     
     * @param String $keywords     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKeywords( $keywords) {
        $this->keywords = $keywords;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $ownerMemberSeq;
    
        /**
    * @return 
    */
        public function getOwnerMemberSeq() {
        return $this->ownerMemberSeq;
    }
    
    /**
     * 设置     
     * @param Long $ownerMemberSeq     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOwnerMemberSeq( $ownerMemberSeq) {
        $this->ownerMemberSeq = $ownerMemberSeq;
    }
    
        	
    private $subject;
    
        /**
    * @return 
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $categoryId;
    
        /**
    * @return 
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置     
     * @param Integer $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $indByAll;
    
        /**
    * @return 
    */
        public function getIndByAll() {
        return $this->indByAll;
    }
    
    /**
     * 设置     
     * @param Float $indByAll     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIndByAll( $indByAll) {
        $this->indByAll = $indByAll;
    }
    
        	
    private $productType;
    
        /**
    * @return 
    */
        public function getProductType() {
        return $this->productType;
    }
    
    /**
     * 设置     
     * @param String $productType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductType( $productType) {
        $this->productType = $productType;
    }
    
        	
    private $version;
    
        /**
    * @return 
    */
        public function getVersion() {
        return $this->version;
    }
    
    /**
     * 设置     
     * @param Long $version     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVersion( $version) {
        $this->version = $version;
    }
    
        	
    private $id;
    
        /**
    * @return 
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置     
     * @param Integer $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $isDisplay;
    
        /**
    * @return 
    */
        public function getIsDisplay() {
        return $this->isDisplay;
    }
    
    /**
     * 设置     
     * @param String $isDisplay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsDisplay( $isDisplay) {
        $this->isDisplay = $isDisplay;
    }
    
        	
    private $draftStatus;
    
        /**
    * @return 
    */
        public function getDraftStatus() {
        return $this->draftStatus;
    }
    
    /**
     * 设置     
     * @param String $draftStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDraftStatus( $draftStatus) {
        $this->draftStatus = $draftStatus;
    }
    
        	
    private $memberSeq;
    
        /**
    * @return 
    */
        public function getMemberSeq() {
        return $this->memberSeq;
    }
    
    /**
     * 设置     
     * @param Long $memberSeq     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberSeq( $memberSeq) {
        $this->memberSeq = $memberSeq;
    }
    
        	
    private $productLongId;
    
        /**
    * @return 
    */
        public function getProductLongId() {
        return $this->productLongId;
    }
    
    /**
     * 设置     
     * @param Long $productLongId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductLongId( $productLongId) {
        $this->productLongId = $productLongId;
    }
    
        	
    private $aliMemberId;
    
        /**
    * @return 
    */
        public function getAliMemberId() {
        return $this->aliMemberId;
    }
    
    /**
     * 设置     
     * @param Long $aliMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliMemberId( $aliMemberId) {
        $this->aliMemberId = $aliMemberId;
    }
    
        	
    private $productGroup;
    
        /**
    * @return 
    */
        public function getProductGroup() {
        return $this->productGroup;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductGroupDTO $productGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductGroup(AlibabaIcbuProductGroupDTO $productGroup) {
        $this->productGroup = $productGroup;
    }
    
        	
    private $productScore;
    
        /**
    * @return 
    */
        public function getProductScore() {
        return $this->productScore;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductScoreDTO $productScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductScore(AlibabaIcbuProductScoreDTO $productScore) {
        $this->productScore = $productScore;
    }
    
        	
    private $productTrade;
    
        /**
    * @return 
    */
        public function getProductTrade() {
        return $this->productTrade;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductTradeDTO $productTrade     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductTrade(AlibabaIcbuProductTradeDTO $productTrade) {
        $this->productTrade = $productTrade;
    }
    
        	
    private $productImage;
    
        /**
    * @return 
    */
        public function getProductImage() {
        return $this->productImage;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductImageDTO $productImage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductImage(AlibabaIcbuProductImageDTO $productImage) {
        $this->productImage = $productImage;
    }
    
        	
    private $productExtDTO;
    
        /**
    * @return 
    */
        public function getProductExtDTO() {
        return $this->productExtDTO;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductExtDTO $productExtDTO     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductExtDTO(AlibabaIcbuProductExtDTO $productExtDTO) {
        $this->productExtDTO = $productExtDTO;
    }
    
        	
    private $properties;
    
        /**
    * @return 
    */
        public function getProperties() {
        return $this->properties;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductPropertyDTO[] $properties     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProperties(AlibabaIcbuProductPropertyDTO $properties) {
        $this->properties = $properties;
    }
    
        	
    private $details;
    
        /**
    * @return 
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductDetailDTO $details     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetails(AlibabaIcbuProductDetailDTO $details) {
        $this->details = $details;
    }
    
        	
    private $productSku;
    
        /**
    * @return 
    */
        public function getProductSku() {
        return $this->productSku;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductSkuDTO $productSku     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductSku(AlibabaIcbuProductSkuDTO $productSku) {
        $this->productSku = $productSku;
    }
    
        	
    private $productShipping;
    
        /**
    * @return 
    */
        public function getProductShipping() {
        return $this->productShipping;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductShippingDTO $productShipping     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductShipping(AlibabaIcbuProductShippingDTO $productShipping) {
        $this->productShipping = $productShipping;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "vaccountId", $this->stdResult )) {
    				$this->vaccountId = $this->stdResult->{"vaccountId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "keywords", $this->stdResult )) {
    				$this->keywords = $this->stdResult->{"keywords"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "ownerMemberSeq", $this->stdResult )) {
    				$this->ownerMemberSeq = $this->stdResult->{"ownerMemberSeq"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "indByAll", $this->stdResult )) {
    				$this->indByAll = $this->stdResult->{"indByAll"};
    			}
    			    		    				    			    			if (array_key_exists ( "productType", $this->stdResult )) {
    				$this->productType = $this->stdResult->{"productType"};
    			}
    			    		    				    			    			if (array_key_exists ( "version", $this->stdResult )) {
    				$this->version = $this->stdResult->{"version"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "isDisplay", $this->stdResult )) {
    				$this->isDisplay = $this->stdResult->{"isDisplay"};
    			}
    			    		    				    			    			if (array_key_exists ( "draftStatus", $this->stdResult )) {
    				$this->draftStatus = $this->stdResult->{"draftStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberSeq", $this->stdResult )) {
    				$this->memberSeq = $this->stdResult->{"memberSeq"};
    			}
    			    		    				    			    			if (array_key_exists ( "productLongId", $this->stdResult )) {
    				$this->productLongId = $this->stdResult->{"productLongId"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliMemberId", $this->stdResult )) {
    				$this->aliMemberId = $this->stdResult->{"aliMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productGroup", $this->stdResult )) {
    				$productGroupResult=$this->stdResult->{"productGroup"};
    				$this->productGroup = new AlibabaIcbuProductGroupDTO();
    				$this->productGroup->setStdResult ( $productGroupResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productScore", $this->stdResult )) {
    				$productScoreResult=$this->stdResult->{"productScore"};
    				$this->productScore = new AlibabaIcbuProductScoreDTO();
    				$this->productScore->setStdResult ( $productScoreResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productTrade", $this->stdResult )) {
    				$productTradeResult=$this->stdResult->{"productTrade"};
    				$this->productTrade = new AlibabaIcbuProductTradeDTO();
    				$this->productTrade->setStdResult ( $productTradeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productImage", $this->stdResult )) {
    				$productImageResult=$this->stdResult->{"productImage"};
    				$this->productImage = new AlibabaIcbuProductImageDTO();
    				$this->productImage->setStdResult ( $productImageResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productExtDTO", $this->stdResult )) {
    				$productExtDTOResult=$this->stdResult->{"productExtDTO"};
    				$this->productExtDTO = new AlibabaIcbuProductExtDTO();
    				$this->productExtDTO->setStdResult ( $productExtDTOResult);
    			}
    			    		    				    			    			if (array_key_exists ( "properties", $this->stdResult )) {
    			$propertiesResult=$this->stdResult->{"properties"};
    				$object = json_decode ( json_encode ( $propertiesResult ), true );
					$this->properties = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductPropertyDTOResult=new AlibabaIcbuProductPropertyDTO();
						$AlibabaIcbuProductPropertyDTOResult->setArrayResult($arrayobject );
						$this->properties [$i] = $AlibabaIcbuProductPropertyDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    				$detailsResult=$this->stdResult->{"details"};
    				$this->details = new AlibabaIcbuProductDetailDTO();
    				$this->details->setStdResult ( $detailsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productSku", $this->stdResult )) {
    				$productSkuResult=$this->stdResult->{"productSku"};
    				$this->productSku = new AlibabaIcbuProductSkuDTO();
    				$this->productSku->setStdResult ( $productSkuResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productShipping", $this->stdResult )) {
    				$productShippingResult=$this->stdResult->{"productShipping"};
    				$this->productShipping = new AlibabaIcbuProductShippingDTO();
    				$this->productShipping->setStdResult ( $productShippingResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "vaccountId", $this->arrayResult )) {
    			$this->vaccountId = $arrayResult['vaccountId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "keywords", $this->arrayResult )) {
    			$this->keywords = $arrayResult['keywords'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "ownerMemberSeq", $this->arrayResult )) {
    			$this->ownerMemberSeq = $arrayResult['ownerMemberSeq'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['categoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "indByAll", $this->arrayResult )) {
    			$this->indByAll = $arrayResult['indByAll'];
    			}
    		    	    			    		    			if (array_key_exists ( "productType", $this->arrayResult )) {
    			$this->productType = $arrayResult['productType'];
    			}
    		    	    			    		    			if (array_key_exists ( "version", $this->arrayResult )) {
    			$this->version = $arrayResult['version'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "isDisplay", $this->arrayResult )) {
    			$this->isDisplay = $arrayResult['isDisplay'];
    			}
    		    	    			    		    			if (array_key_exists ( "draftStatus", $this->arrayResult )) {
    			$this->draftStatus = $arrayResult['draftStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberSeq", $this->arrayResult )) {
    			$this->memberSeq = $arrayResult['memberSeq'];
    			}
    		    	    			    		    			if (array_key_exists ( "productLongId", $this->arrayResult )) {
    			$this->productLongId = $arrayResult['productLongId'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliMemberId", $this->arrayResult )) {
    			$this->aliMemberId = $arrayResult['aliMemberId'];
    			}
    		    	    			    		    		if (array_key_exists ( "productGroup", $this->arrayResult )) {
    		$productGroupResult=$arrayResult['productGroup'];
    			    			$this->productGroup = new AlibabaIcbuProductGroupDTO();
    			    			$this->productGroup->setStdResult ( $productGroupResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productScore", $this->arrayResult )) {
    		$productScoreResult=$arrayResult['productScore'];
    			    			$this->productScore = new AlibabaIcbuProductScoreDTO();
    			    			$this->productScore->setStdResult ( $productScoreResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productTrade", $this->arrayResult )) {
    		$productTradeResult=$arrayResult['productTrade'];
    			    			$this->productTrade = new AlibabaIcbuProductTradeDTO();
    			    			$this->productTrade->setStdResult ( $productTradeResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productImage", $this->arrayResult )) {
    		$productImageResult=$arrayResult['productImage'];
    			    			$this->productImage = new AlibabaIcbuProductImageDTO();
    			    			$this->productImage->setStdResult ( $productImageResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productExtDTO", $this->arrayResult )) {
    		$productExtDTOResult=$arrayResult['productExtDTO'];
    			    			$this->productExtDTO = new AlibabaIcbuProductExtDTO();
    			    			$this->productExtDTO->setStdResult ( $productExtDTOResult);
    		}
    		    	    			    		    		if (array_key_exists ( "properties", $this->arrayResult )) {
    		$propertiesResult=$arrayResult['properties'];
    			$this->properties = new AlibabaIcbuProductPropertyDTO();
    			$this->properties->setStdResult ( $propertiesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "details", $this->arrayResult )) {
    		$detailsResult=$arrayResult['details'];
    			    			$this->details = new AlibabaIcbuProductDetailDTO();
    			    			$this->details->setStdResult ( $detailsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productSku", $this->arrayResult )) {
    		$productSkuResult=$arrayResult['productSku'];
    			    			$this->productSku = new AlibabaIcbuProductSkuDTO();
    			    			$this->productSku->setStdResult ( $productSkuResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productShipping", $this->arrayResult )) {
    		$productShippingResult=$arrayResult['productShipping'];
    			    			$this->productShipping = new AlibabaIcbuProductShippingDTO();
    			    			$this->productShipping->setStdResult ( $productShippingResult);
    		}
    		    	    		}
 
   
}
?>