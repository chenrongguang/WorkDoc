<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandInfo extends SDKDomain {

       	
    private $brandId;
    
        /**
    * @return 品牌ID
    */
        public function getBrandId() {
        return $this->brandId;
    }
    
    /**
     * 设置品牌ID     
     * @param Long $brandId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandId( $brandId) {
        $this->brandId = $brandId;
    }
    
        	
    private $brandName;
    
        /**
    * @return 品牌名字
    */
        public function getBrandName() {
        return $this->brandName;
    }
    
    /**
     * 设置品牌名字     
     * @param String $brandName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandName( $brandName) {
        $this->brandName = $brandName;
    }
    
        	
    private $brandDetail;
    
        /**
    * @return 品牌详情
    */
        public function getBrandDetail() {
        return $this->brandDetail;
    }
    
    /**
     * 设置品牌详情     
     * @param String $brandDetail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandDetail( $brandDetail) {
        $this->brandDetail = $brandDetail;
    }
    
        	
    private $logoUrl;
    
        /**
    * @return 品牌logo的url
    */
        public function getLogoUrl() {
        return $this->logoUrl;
    }
    
    /**
     * 设置品牌logo的url     
     * @param String $logoUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogoUrl( $logoUrl) {
        $this->logoUrl = $logoUrl;
    }
    
        	
    private $catIds;
    
        /**
    * @return 
    */
        public function getCatIds() {
        return $this->catIds;
    }
    
    /**
     * 设置     
     * @param Set $catIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCatIds(array $catIds) {
        $this->catIds = $catIds;
    }
    
        	
    private $brandCharacter;
    
        /**
    * @return 
    */
        public function getBrandCharacter() {
        return $this->brandCharacter;
    }
    
    /**
     * 设置     
     * @param String $brandCharacter     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandCharacter( $brandCharacter) {
        $this->brandCharacter = $brandCharacter;
    }
    
        	
    private $bookedCount30;
    
        /**
    * @return 
    */
        public function getBookedCount30() {
        return $this->bookedCount30;
    }
    
    /**
     * 设置     
     * @param Long $bookedCount30     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBookedCount30( $bookedCount30) {
        $this->bookedCount30 = $bookedCount30;
    }
    
        	
    private $brandBackRate30d;
    
        /**
    * @return 
    */
        public function getBrandBackRate30d() {
        return $this->brandBackRate30d;
    }
    
    /**
     * 设置     
     * @param Float $brandBackRate30d     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandBackRate30d( $brandBackRate30d) {
        $this->brandBackRate30d = $brandBackRate30d;
    }
    
        	
    private $area;
    
        /**
    * @return 
    */
        public function getArea() {
        return $this->area;
    }
    
    /**
     * 设置     
     * @param String $area     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setArea( $area) {
        $this->area = $area;
    }
    
        	
    private $offerCnt;
    
        /**
    * @return 
    */
        public function getOfferCnt() {
        return $this->offerCnt;
    }
    
    /**
     * 设置     
     * @param Integer $offerCnt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferCnt( $offerCnt) {
        $this->offerCnt = $offerCnt;
    }
    
        	
    private $hasActivity;
    
        /**
    * @return 
    */
        public function getHasActivity() {
        return $this->hasActivity;
    }
    
    /**
     * 设置     
     * @param Boolean $hasActivity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHasActivity( $hasActivity) {
        $this->hasActivity = $hasActivity;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brandId", $this->stdResult )) {
    				$this->brandId = $this->stdResult->{"brandId"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandName", $this->stdResult )) {
    				$this->brandName = $this->stdResult->{"brandName"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandDetail", $this->stdResult )) {
    				$this->brandDetail = $this->stdResult->{"brandDetail"};
    			}
    			    		    				    			    			if (array_key_exists ( "logoUrl", $this->stdResult )) {
    				$this->logoUrl = $this->stdResult->{"logoUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "catIds", $this->stdResult )) {
    				$this->catIds = $this->stdResult->{"catIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandCharacter", $this->stdResult )) {
    				$this->brandCharacter = $this->stdResult->{"brandCharacter"};
    			}
    			    		    				    			    			if (array_key_exists ( "bookedCount30", $this->stdResult )) {
    				$this->bookedCount30 = $this->stdResult->{"bookedCount30"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandBackRate30d", $this->stdResult )) {
    				$this->brandBackRate30d = $this->stdResult->{"brandBackRate30d"};
    			}
    			    		    				    			    			if (array_key_exists ( "area", $this->stdResult )) {
    				$this->area = $this->stdResult->{"area"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerCnt", $this->stdResult )) {
    				$this->offerCnt = $this->stdResult->{"offerCnt"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasActivity", $this->stdResult )) {
    				$this->hasActivity = $this->stdResult->{"hasActivity"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "brandId", $this->arrayResult )) {
    			$this->brandId = $arrayResult['brandId'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandName", $this->arrayResult )) {
    			$this->brandName = $arrayResult['brandName'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandDetail", $this->arrayResult )) {
    			$this->brandDetail = $arrayResult['brandDetail'];
    			}
    		    	    			    		    			if (array_key_exists ( "logoUrl", $this->arrayResult )) {
    			$this->logoUrl = $arrayResult['logoUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "catIds", $this->arrayResult )) {
    			$this->catIds = $arrayResult['catIds'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandCharacter", $this->arrayResult )) {
    			$this->brandCharacter = $arrayResult['brandCharacter'];
    			}
    		    	    			    		    			if (array_key_exists ( "bookedCount30", $this->arrayResult )) {
    			$this->bookedCount30 = $arrayResult['bookedCount30'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandBackRate30d", $this->arrayResult )) {
    			$this->brandBackRate30d = $arrayResult['brandBackRate30d'];
    			}
    		    	    			    		    			if (array_key_exists ( "area", $this->arrayResult )) {
    			$this->area = $arrayResult['area'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerCnt", $this->arrayResult )) {
    			$this->offerCnt = $arrayResult['offerCnt'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasActivity", $this->arrayResult )) {
    			$this->hasActivity = $arrayResult['hasActivity'];
    			}
    		    	    		}
 
   
}
?>