<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouApiProductModelProductImage extends SDKDomain {

       	
    private $imageUrl;
    
        /**
    * @return 图片路径，图片银行上传后的路径，原图
    */
        public function getImageUrl() {
        return $this->imageUrl;
    }
    
    /**
     * 设置图片路径，图片银行上传后的路径，原图     
     * @param String $imageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageUrl( $imageUrl) {
        $this->imageUrl = $imageUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['imageUrl'];
    			}
    		    	    		}
 
   
}
?>