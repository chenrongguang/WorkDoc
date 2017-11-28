<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class Album extends SDKDomain {

       	
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
    * @return 相册ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置相册ID     
     * @param String $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $type;
    
        /**
    * @return 相册类型.CUSTOM-自定义相册 MY-我的相册 OFF-下架相册
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置相册类型.CUSTOM-自定义相册 MY-我的相册 OFF-下架相册     
     * @param String $type     
     * 参数示例：<pre>CUSTOM</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $name;
    
        /**
    * @return 相册名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置相册名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $description;
    
        /**
    * @return 相册描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置相册描述     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $createDate;
    
        /**
    * @return 相册创建时间,格式为“yyyy-MM-dd”
    */
        public function getCreateDate() {
        return $this->createDate;
    }
    
    /**
     * 设置相册创建时间,格式为“yyyy-MM-dd”     
     * @param String $createDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateDate( $createDate) {
        $this->createDate = $createDate;
    }
    
        	
    private $imageCount;
    
        /**
    * @return 相册中图片数量
    */
        public function getImageCount() {
        return $this->imageCount;
    }
    
    /**
     * 设置相册中图片数量     
     * @param Integer $imageCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageCount( $imageCount) {
        $this->imageCount = $imageCount;
    }
    
        	
    private $coverPicUrl;
    
        /**
    * @return 相册封面图片URL
    */
        public function getCoverPicUrl() {
        return $this->coverPicUrl;
    }
    
    /**
     * 设置相册封面图片URL     
     * @param String $coverPicUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCoverPicUrl( $coverPicUrl) {
        $this->coverPicUrl = $coverPicUrl;
    }
    
        	
    private $coverPicId;
    
        /**
    * @return 相册封面图片ID
    */
        public function getCoverPicId() {
        return $this->coverPicId;
    }
    
    /**
     * 设置相册封面图片ID     
     * @param Integer $coverPicId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCoverPicId( $coverPicId) {
        $this->coverPicId = $coverPicId;
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
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "createDate", $this->stdResult )) {
    				$this->createDate = $this->stdResult->{"createDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageCount", $this->stdResult )) {
    				$this->imageCount = $this->stdResult->{"imageCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "coverPicUrl", $this->stdResult )) {
    				$this->coverPicUrl = $this->stdResult->{"coverPicUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "coverPicId", $this->stdResult )) {
    				$this->coverPicId = $this->stdResult->{"coverPicId"};
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
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "createDate", $this->arrayResult )) {
    			$this->createDate = $arrayResult['createDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageCount", $this->arrayResult )) {
    			$this->imageCount = $arrayResult['imageCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "coverPicUrl", $this->arrayResult )) {
    			$this->coverPicUrl = $arrayResult['coverPicUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "coverPicId", $this->arrayResult )) {
    			$this->coverPicId = $arrayResult['coverPicId'];
    			}
    		    	    		}
 
   
}
?>