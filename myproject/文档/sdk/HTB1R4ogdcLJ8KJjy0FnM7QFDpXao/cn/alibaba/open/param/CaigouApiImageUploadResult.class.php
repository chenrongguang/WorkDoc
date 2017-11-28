<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiImageUploadResult {

        	
    private $success;
    
        /**
    * @return 图片是否上传成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置图片是否上传成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 上传失败的错误码。当success为false的时候
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置上传失败的错误码。当success为false的时候     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $id;
    
        /**
    * @return 图片的标识id，传给响应的应用方。
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置图片的标识id，传给响应的应用方。     
     * @param Long $id     
          
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $imgUrl;
    
        /**
    * @return 图片的相对路径(即除去http://server:port部分，如:img/product/15/02/60/15026073.jpg)
    */
        public function getImgUrl() {
        return $this->imgUrl;
    }
    
    /**
     * 设置图片的相对路径(即除去http://server:port部分，如:img/product/15/02/60/15026073.jpg)     
     * @param String $imgUrl     
          
     * 此参数必填     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }
    
        	
    private $searchImgUrl;
    
        /**
    * @return 搜索图片在网上的相对路径（即除去http://server:port部分，如:mg/product/15/02/60/15026073.search.jpg）
    */
        public function getSearchImgUrl() {
        return $this->searchImgUrl;
    }
    
    /**
     * 设置搜索图片在网上的相对路径（即除去http://server:port部分，如:mg/product/15/02/60/15026073.search.jpg）     
     * @param String $searchImgUrl     
          
     * 此参数必填     */
    public function setSearchImgUrl( $searchImgUrl) {
        $this->searchImgUrl = $searchImgUrl;
    }
    
        	
    private $miniImgUrl;
    
        /**
    * @return 缩略图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.summ.jpg）
    */
        public function getMiniImgUrl() {
        return $this->miniImgUrl;
    }
    
    /**
     * 设置缩略图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.summ.jpg）     
     * @param String $miniImgUrl     
          
     * 此参数必填     */
    public function setMiniImgUrl( $miniImgUrl) {
        $this->miniImgUrl = $miniImgUrl;
    }
    
        	
    private $imgUrl64x64;
    
        /**
    * @return 64x64图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.64x64.jpg）
    */
        public function getImgUrl64x64() {
        return $this->imgUrl64x64;
    }
    
    /**
     * 设置64x64图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.64x64.jpg）     
     * @param String $imgUrl64x64     
          
     * 此参数必填     */
    public function setImgUrl64x64( $imgUrl64x64) {
        $this->imgUrl64x64 = $imgUrl64x64;
    }
    
        	
    private $imgUrl220x220;
    
        /**
    * @return 220x220图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.220x220jpg）
    */
        public function getImgUrl220x220() {
        return $this->imgUrl220x220;
    }
    
    /**
     * 设置220x220图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.220x220jpg）     
     * @param String $imgUrl220x220     
          
     * 此参数必填     */
    public function setImgUrl220x220( $imgUrl220x220) {
        $this->imgUrl220x220 = $imgUrl220x220;
    }
    
        	
    private $imgUrl310x310;
    
        /**
    * @return 310x310图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.310x310.jpg）
    */
        public function getImgUrl310x310() {
        return $this->imgUrl310x310;
    }
    
    /**
     * 设置310x310图片在网上的相对路径（即除去http://server:port部分，如:img/product/15/02/60/15026073.310x310.jpg）     
     * @param String $imgUrl310x310     
          
     * 此参数必填     */
    public function setImgUrl310x310( $imgUrl310x310) {
        $this->imgUrl310x310 = $imgUrl310x310;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl", $this->stdResult )) {
    				$this->imgUrl = $this->stdResult->{"imgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "searchImgUrl", $this->stdResult )) {
    				$this->searchImgUrl = $this->stdResult->{"searchImgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "miniImgUrl", $this->stdResult )) {
    				$this->miniImgUrl = $this->stdResult->{"miniImgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl64x64", $this->stdResult )) {
    				$this->imgUrl64x64 = $this->stdResult->{"imgUrl64x64"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl220x220", $this->stdResult )) {
    				$this->imgUrl220x220 = $this->stdResult->{"imgUrl220x220"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl310x310", $this->stdResult )) {
    				$this->imgUrl310x310 = $this->stdResult->{"imgUrl310x310"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrl", $this->arrayResult )) {
    			$this->imgUrl = $arrayResult['imgUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "searchImgUrl", $this->arrayResult )) {
    			$this->searchImgUrl = $arrayResult['searchImgUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "miniImgUrl", $this->arrayResult )) {
    			$this->miniImgUrl = $arrayResult['miniImgUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrl64x64", $this->arrayResult )) {
    			$this->imgUrl64x64 = $arrayResult['imgUrl64x64'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrl220x220", $this->arrayResult )) {
    			$this->imgUrl220x220 = $arrayResult['imgUrl220x220'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrl310x310", $this->arrayResult )) {
    			$this->imgUrl310x310 = $arrayResult['imgUrl310x310'];
    			}
    		    	    		}

}
?>