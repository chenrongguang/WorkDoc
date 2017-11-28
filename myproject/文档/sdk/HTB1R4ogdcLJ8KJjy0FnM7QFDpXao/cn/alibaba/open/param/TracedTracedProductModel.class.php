<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/TracedTracedEstimateStandard.class.php');
include_once ('cn/alibaba/open/param/TracedTracedQuality.class.php');

class TracedTracedProductModel extends SDKDomain {

       	
    private $productId;
    
        /**
    * @return 产品唯一ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置产品唯一ID     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $offerId;
    
        /**
    * @return offerId
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置offerId     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $productName;
    
        /**
    * @return 产品名称
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $companyName;
    
        /**
    * @return 公司名称
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置公司名称     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $organization;
    
        /**
    * @return 认证组织
    */
        public function getOrganization() {
        return $this->organization;
    }
    
    /**
     * 设置认证组织     
     * @param String $organization     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrganization( $organization) {
        $this->organization = $organization;
    }
    
        	
    private $qualityReport;
    
        /**
    * @return 质检报告
    */
        public function getQualityReport() {
        return $this->qualityReport;
    }
    
    /**
     * 设置质检报告     
     * @param List $qualityReport     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQualityReport(array $qualityReport) {
        $this->qualityReport = $qualityReport;
    }
    
        	
    private $area;
    
        /**
    * @return 产地
    */
        public function getArea() {
        return $this->area;
    }
    
    /**
     * 设置产地     
     * @param String $area     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setArea( $area) {
        $this->area = $area;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $applyNum;
    
        /**
    * @return 申请码量
    */
        public function getApplyNum() {
        return $this->applyNum;
    }
    
    /**
     * 设置申请码量     
     * @param Long $applyNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setApplyNum( $applyNum) {
        $this->applyNum = $applyNum;
    }
    
        	
    private $num;
    
        /**
    * @return 实际质检数量
    */
        public function getNum() {
        return $this->num;
    }
    
    /**
     * 设置实际质检数量     
     * @param Long $num     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNum( $num) {
        $this->num = $num;
    }
    
        	
    private $suppNum;
    
        /**
    * @return 补充码量
    */
        public function getSuppNum() {
        return $this->suppNum;
    }
    
    /**
     * 设置补充码量     
     * @param Long $suppNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuppNum( $suppNum) {
        $this->suppNum = $suppNum;
    }
    
        	
    private $estimateStandard;
    
        /**
    * @return 质检标准
    */
        public function getEstimateStandard() {
        return $this->estimateStandard;
    }
    
    /**
     * 设置质检标准     
     * @param array include @see TracedTracedEstimateStandard[] $estimateStandard     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEstimateStandard(TracedTracedEstimateStandard $estimateStandard) {
        $this->estimateStandard = $estimateStandard;
    }
    
        	
    private $properties;
    
        /**
    * @return 质检结果
    */
        public function getProperties() {
        return $this->properties;
    }
    
    /**
     * 设置质检结果     
     * @param array include @see TracedTracedQuality[] $properties     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProperties(TracedTracedQuality $properties) {
        $this->properties = $properties;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "organization", $this->stdResult )) {
    				$this->organization = $this->stdResult->{"organization"};
    			}
    			    		    				    			    			if (array_key_exists ( "qualityReport", $this->stdResult )) {
    				$this->qualityReport = $this->stdResult->{"qualityReport"};
    			}
    			    		    				    			    			if (array_key_exists ( "area", $this->stdResult )) {
    				$this->area = $this->stdResult->{"area"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "applyNum", $this->stdResult )) {
    				$this->applyNum = $this->stdResult->{"applyNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "num", $this->stdResult )) {
    				$this->num = $this->stdResult->{"num"};
    			}
    			    		    				    			    			if (array_key_exists ( "suppNum", $this->stdResult )) {
    				$this->suppNum = $this->stdResult->{"suppNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "estimateStandard", $this->stdResult )) {
    			$estimateStandardResult=$this->stdResult->{"estimateStandard"};
    				$object = json_decode ( json_encode ( $estimateStandardResult ), true );
					$this->estimateStandard = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$TracedTracedEstimateStandardResult=new TracedTracedEstimateStandard();
						$TracedTracedEstimateStandardResult->setArrayResult($arrayobject );
						$this->estimateStandard [$i] = $TracedTracedEstimateStandardResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "properties", $this->stdResult )) {
    			$propertiesResult=$this->stdResult->{"properties"};
    				$object = json_decode ( json_encode ( $propertiesResult ), true );
					$this->properties = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$TracedTracedQualityResult=new TracedTracedQuality();
						$TracedTracedQualityResult->setArrayResult($arrayobject );
						$this->properties [$i] = $TracedTracedQualityResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['companyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "organization", $this->arrayResult )) {
    			$this->organization = $arrayResult['organization'];
    			}
    		    	    			    		    			if (array_key_exists ( "qualityReport", $this->arrayResult )) {
    			$this->qualityReport = $arrayResult['qualityReport'];
    			}
    		    	    			    		    			if (array_key_exists ( "area", $this->arrayResult )) {
    			$this->area = $arrayResult['area'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "applyNum", $this->arrayResult )) {
    			$this->applyNum = $arrayResult['applyNum'];
    			}
    		    	    			    		    			if (array_key_exists ( "num", $this->arrayResult )) {
    			$this->num = $arrayResult['num'];
    			}
    		    	    			    		    			if (array_key_exists ( "suppNum", $this->arrayResult )) {
    			$this->suppNum = $arrayResult['suppNum'];
    			}
    		    	    			    		    		if (array_key_exists ( "estimateStandard", $this->arrayResult )) {
    		$estimateStandardResult=$arrayResult['estimateStandard'];
    			$this->estimateStandard = new TracedTracedEstimateStandard();
    			$this->estimateStandard->setStdResult ( $estimateStandardResult);
    		}
    		    	    			    		    		if (array_key_exists ( "properties", $this->arrayResult )) {
    		$propertiesResult=$arrayResult['properties'];
    			$this->properties = new TracedTracedQuality();
    			$this->properties->setStdResult ( $propertiesResult);
    		}
    		    	    		}
 
   
}
?>