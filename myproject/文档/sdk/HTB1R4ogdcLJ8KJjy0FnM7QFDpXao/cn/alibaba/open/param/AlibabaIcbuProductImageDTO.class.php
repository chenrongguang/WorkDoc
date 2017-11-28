<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductImageDTO extends SDKDomain {

       	
    private $imageUrlList;
    
        /**
    * @return 
    */
        public function getImageUrlList() {
        return $this->imageUrlList;
    }
    
    /**
     * 设置     
     * @param List $imageUrlList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageUrlList(array $imageUrlList) {
        $this->imageUrlList = $imageUrlList;
    }
    
        	
    private $isDraft;
    
        /**
    * @return 
    */
        public function getIsDraft() {
        return $this->isDraft;
    }
    
    /**
     * 设置     
     * @param Boolean $isDraft     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsDraft( $isDraft) {
        $this->isDraft = $isDraft;
    }
    
        	
    private $haveImage;
    
        /**
    * @return 
    */
        public function getHaveImage() {
        return $this->haveImage;
    }
    
    /**
     * 设置     
     * @param String $haveImage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHaveImage( $haveImage) {
        $this->haveImage = $haveImage;
    }
    
        	
    private $imageUrl;
    
        /**
    * @return 
    */
        public function getImageUrl() {
        return $this->imageUrl;
    }
    
    /**
     * 设置     
     * @param String $imageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageUrl( $imageUrl) {
        $this->imageUrl = $imageUrl;
    }
    
        	
    private $imageType;
    
        /**
    * @return 
    */
        public function getImageType() {
        return $this->imageType;
    }
    
    /**
     * 设置     
     * @param String $imageType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageType( $imageType) {
        $this->imageType = $imageType;
    }
    
        	
    private $imageCount;
    
        /**
    * @return 
    */
        public function getImageCount() {
        return $this->imageCount;
    }
    
    /**
     * 设置     
     * @param Integer $imageCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageCount( $imageCount) {
        $this->imageCount = $imageCount;
    }
    
        	
    private $fileName;
    
        /**
    * @return 
    */
        public function getFileName() {
        return $this->fileName;
    }
    
    /**
     * 设置     
     * @param String $fileName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFileName( $fileName) {
        $this->fileName = $fileName;
    }
    
        	
    private $imageVersion;
    
        /**
    * @return 
    */
        public function getImageVersion() {
        return $this->imageVersion;
    }
    
    /**
     * 设置     
     * @param Integer $imageVersion     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageVersion( $imageVersion) {
        $this->imageVersion = $imageVersion;
    }
    
        	
    private $summImageUrlList;
    
        /**
    * @return 
    */
        public function getSummImageUrlList() {
        return $this->summImageUrlList;
    }
    
    /**
     * 设置     
     * @param List $summImageUrlList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummImageUrlList(array $summImageUrlList) {
        $this->summImageUrlList = $summImageUrlList;
    }
    
        	
    private $summImageUrl;
    
        /**
    * @return 
    */
        public function getSummImageUrl() {
        return $this->summImageUrl;
    }
    
    /**
     * 设置     
     * @param String $summImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummImageUrl( $summImageUrl) {
        $this->summImageUrl = $summImageUrl;
    }
    
        	
    private $imageWatermark;
    
        /**
    * @return 
    */
        public function getImageWatermark() {
        return $this->imageWatermark;
    }
    
    /**
     * 设置     
     * @param String $imageWatermark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageWatermark( $imageWatermark) {
        $this->imageWatermark = $imageWatermark;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "imageUrlList", $this->stdResult )) {
    				$this->imageUrlList = $this->stdResult->{"imageUrlList"};
    			}
    			    		    				    			    			if (array_key_exists ( "isDraft", $this->stdResult )) {
    				$this->isDraft = $this->stdResult->{"isDraft"};
    			}
    			    		    				    			    			if (array_key_exists ( "haveImage", $this->stdResult )) {
    				$this->haveImage = $this->stdResult->{"haveImage"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageType", $this->stdResult )) {
    				$this->imageType = $this->stdResult->{"imageType"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageCount", $this->stdResult )) {
    				$this->imageCount = $this->stdResult->{"imageCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "fileName", $this->stdResult )) {
    				$this->fileName = $this->stdResult->{"fileName"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageVersion", $this->stdResult )) {
    				$this->imageVersion = $this->stdResult->{"imageVersion"};
    			}
    			    		    				    			    			if (array_key_exists ( "summImageUrlList", $this->stdResult )) {
    				$this->summImageUrlList = $this->stdResult->{"summImageUrlList"};
    			}
    			    		    				    			    			if (array_key_exists ( "summImageUrl", $this->stdResult )) {
    				$this->summImageUrl = $this->stdResult->{"summImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageWatermark", $this->stdResult )) {
    				$this->imageWatermark = $this->stdResult->{"imageWatermark"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "imageUrlList", $this->arrayResult )) {
    			$this->imageUrlList = $arrayResult['imageUrlList'];
    			}
    		    	    			    		    			if (array_key_exists ( "isDraft", $this->arrayResult )) {
    			$this->isDraft = $arrayResult['isDraft'];
    			}
    		    	    			    		    			if (array_key_exists ( "haveImage", $this->arrayResult )) {
    			$this->haveImage = $arrayResult['haveImage'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['imageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageType", $this->arrayResult )) {
    			$this->imageType = $arrayResult['imageType'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageCount", $this->arrayResult )) {
    			$this->imageCount = $arrayResult['imageCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "fileName", $this->arrayResult )) {
    			$this->fileName = $arrayResult['fileName'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageVersion", $this->arrayResult )) {
    			$this->imageVersion = $arrayResult['imageVersion'];
    			}
    		    	    			    		    			if (array_key_exists ( "summImageUrlList", $this->arrayResult )) {
    			$this->summImageUrlList = $arrayResult['summImageUrlList'];
    			}
    		    	    			    		    			if (array_key_exists ( "summImageUrl", $this->arrayResult )) {
    			$this->summImageUrl = $arrayResult['summImageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageWatermark", $this->arrayResult )) {
    			$this->imageWatermark = $arrayResult['imageWatermark'];
    			}
    		    	    		}
 
   
}
?>