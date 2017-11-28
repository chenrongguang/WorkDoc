<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OfferImageInfo extends SDKDomain {

       	
    private $imageURI;
    
        /**
    * @return 图片URL（推荐用这个）
    */
        public function getImageURI() {
        return $this->imageURI;
    }
    
    /**
     * 设置图片URL（推荐用这个）     
     * @param String $imageURI     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageURI( $imageURI) {
        $this->imageURI = $imageURI;
    }
    
        	
    private $originalImageURI;
    
        /**
    * @return 原图URL
    */
        public function getOriginalImageURI() {
        return $this->originalImageURI;
    }
    
    /**
     * 设置原图URL     
     * @param String $originalImageURI     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOriginalImageURI( $originalImageURI) {
        $this->originalImageURI = $originalImageURI;
    }
    
        	
    private $size64x64URL;
    
        /**
    * @return 图片URL
    */
        public function getSize64x64URL() {
        return $this->size64x64URL;
    }
    
    /**
     * 设置图片URL     
     * @param String $size64x64URL     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSize64x64URL( $size64x64URL) {
        $this->size64x64URL = $size64x64URL;
    }
    
        	
    private $summURL;
    
        /**
    * @return 图片URL
    */
        public function getSummURL() {
        return $this->summURL;
    }
    
    /**
     * 设置图片URL     
     * @param String $summURL     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummURL( $summURL) {
        $this->summURL = $summURL;
    }
    
        	
    private $size310x310URL;
    
        /**
    * @return 图片URL
    */
        public function getSize310x310URL() {
        return $this->size310x310URL;
    }
    
    /**
     * 设置图片URL     
     * @param String $size310x310URL     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSize310x310URL( $size310x310URL) {
        $this->size310x310URL = $size310x310URL;
    }
    
        	
    private $offerId;
    
        /**
    * @return 产品ID
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置产品ID     
     * @param Integer $offerId     
     * 参数示例：<pre>708192222</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "imageURI", $this->stdResult )) {
    				$this->imageURI = $this->stdResult->{"imageURI"};
    			}
    			    		    				    			    			if (array_key_exists ( "originalImageURI", $this->stdResult )) {
    				$this->originalImageURI = $this->stdResult->{"originalImageURI"};
    			}
    			    		    				    			    			if (array_key_exists ( "size64x64URL", $this->stdResult )) {
    				$this->size64x64URL = $this->stdResult->{"size64x64URL"};
    			}
    			    		    				    			    			if (array_key_exists ( "summURL", $this->stdResult )) {
    				$this->summURL = $this->stdResult->{"summURL"};
    			}
    			    		    				    			    			if (array_key_exists ( "size310x310URL", $this->stdResult )) {
    				$this->size310x310URL = $this->stdResult->{"size310x310URL"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "imageURI", $this->arrayResult )) {
    			$this->imageURI = $arrayResult['imageURI'];
    			}
    		    	    			    		    			if (array_key_exists ( "originalImageURI", $this->arrayResult )) {
    			$this->originalImageURI = $arrayResult['originalImageURI'];
    			}
    		    	    			    		    			if (array_key_exists ( "size64x64URL", $this->arrayResult )) {
    			$this->size64x64URL = $arrayResult['size64x64URL'];
    			}
    		    	    			    		    			if (array_key_exists ( "summURL", $this->arrayResult )) {
    			$this->summURL = $arrayResult['summURL'];
    			}
    		    	    			    		    			if (array_key_exists ( "size310x310URL", $this->arrayResult )) {
    			$this->size310x310URL = $arrayResult['size310x310URL'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    		}
 
   
}
?>