<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class Image extends SDKDomain {

       	
    private $accountId;
    
        /**
    * @return 会员ID
    */
        public function getAccountId() {
        return $this->accountId;
    }
    
    /**
     * 设置会员ID     
     * @param String $accountId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    
        	
    private $id;
    
        /**
    * @return 图片ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置图片ID     
     * @param Integer $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 图片名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置图片名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $description;
    
        /**
    * @return 图片描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置图片描述     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $url;
    
        /**
    * @return 图片URL(原图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置图片URL(原图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）     
     * @param String $url     
     * 参数示例：<pre>img/ibank/15/02/60/15026073.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $urlMini;
    
        /**
    * @return 图片URL(缩略图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
    */
        public function getUrlMini() {
        return $this->urlMini;
    }
    
    /**
     * 设置图片URL(缩略图)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）     
     * @param String $urlMini     
     * 参数示例：<pre>img/ibank/15/02/60/15026073.jpg</pre>     
     * 此参数必填     */
    public function setUrlMini( $urlMini) {
        $this->urlMini = $urlMini;
    }
    
        	
    private $url310x310;
    
        /**
    * @return 图片URL(310x310)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
    */
        public function getUrl310x310() {
        return $this->url310x310;
    }
    
    /**
     * 设置图片URL(310x310)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）     
     * @param String $url310x310     
     * 参数示例：<pre>img/ibank/15/02/60/15026073.jpg</pre>     
     * 此参数必填     */
    public function setUrl310x310( $url310x310) {
        $this->url310x310 = $url310x310;
    }
    
        	
    private $url220x220;
    
        /**
    * @return 图片URL(220x220)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
    */
        public function getUrl220x220() {
        return $this->url220x220;
    }
    
    /**
     * 设置图片URL(220x220)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）     
     * @param String $url220x220     
     * 参数示例：<pre>img/ibank/15/02/60/15026073.jpg</pre>     
     * 此参数必填     */
    public function setUrl220x220( $url220x220) {
        $this->url220x220 = $url220x220;
    }
    
        	
    private $url64x64;
    
        /**
    * @return 图片URL(64x64)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）
    */
        public function getUrl64x64() {
        return $this->url64x64;
    }
    
    /**
     * 设置图片URL(64x64)，图片的相对路径（即除去http://server:port部分，如:img/ibank/15/02/60/15026073.jpg）     
     * @param String $url64x64     
     * 参数示例：<pre>img/ibank/15/02/60/15026073.jpg</pre>     
     * 此参数必填     */
    public function setUrl64x64( $url64x64) {
        $this->url64x64 = $url64x64;
    }
    
        	
    private $createTime;
    
        /**
    * @return 图片上传时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置图片上传时间     
     * @param String $createTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
        	
    private $size;
    
        /**
    * @return 图片大小，单位为字节
    */
        public function getSize() {
        return $this->size;
    }
    
    /**
     * 设置图片大小，单位为字节     
     * @param Integer $size     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSize( $size) {
        $this->size = $size;
    }
    
        	
    private $albumId;
    
        /**
    * @return 图片所属相册
    */
        public function getAlbumId() {
        return $this->albumId;
    }
    
    /**
     * 设置图片所属相册     
     * @param Integer $albumId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlbumId( $albumId) {
        $this->albumId = $albumId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "accountId", $this->stdResult )) {
    				$this->accountId = $this->stdResult->{"accountId"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "urlMini", $this->stdResult )) {
    				$this->urlMini = $this->stdResult->{"urlMini"};
    			}
    			    		    				    			    			if (array_key_exists ( "url310x310", $this->stdResult )) {
    				$this->url310x310 = $this->stdResult->{"url310x310"};
    			}
    			    		    				    			    			if (array_key_exists ( "url220x220", $this->stdResult )) {
    				$this->url220x220 = $this->stdResult->{"url220x220"};
    			}
    			    		    				    			    			if (array_key_exists ( "url64x64", $this->stdResult )) {
    				$this->url64x64 = $this->stdResult->{"url64x64"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "size", $this->stdResult )) {
    				$this->size = $this->stdResult->{"size"};
    			}
    			    		    				    			    			if (array_key_exists ( "albumId", $this->stdResult )) {
    				$this->albumId = $this->stdResult->{"albumId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "accountId", $this->arrayResult )) {
    			$this->accountId = $arrayResult['accountId'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    			    		    			if (array_key_exists ( "urlMini", $this->arrayResult )) {
    			$this->urlMini = $arrayResult['urlMini'];
    			}
    		    	    			    		    			if (array_key_exists ( "url310x310", $this->arrayResult )) {
    			$this->url310x310 = $arrayResult['url310x310'];
    			}
    		    	    			    		    			if (array_key_exists ( "url220x220", $this->arrayResult )) {
    			$this->url220x220 = $arrayResult['url220x220'];
    			}
    		    	    			    		    			if (array_key_exists ( "url64x64", $this->arrayResult )) {
    			$this->url64x64 = $arrayResult['url64x64'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['createTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "size", $this->arrayResult )) {
    			$this->size = $arrayResult['size'];
    			}
    		    	    			    		    			if (array_key_exists ( "albumId", $this->arrayResult )) {
    			$this->albumId = $arrayResult['albumId'];
    			}
    		    	    		}
 
   
}
?>