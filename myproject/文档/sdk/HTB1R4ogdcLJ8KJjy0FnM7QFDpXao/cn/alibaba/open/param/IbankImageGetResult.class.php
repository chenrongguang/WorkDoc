<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/Image.class.php');

class IbankImageGetResult {

        	
    private $image;
    
        /**
    * @return 图片信息
    */
        public function getImage() {
        return $this->image;
    }
    
    /**
     * 设置图片信息     
     * @param Image $image     
          
     * 此参数必填     */
    public function setImage(Image $image) {
        $this->image = $image;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "image", $this->stdResult )) {
    				$imageResult=$this->stdResult->{"image"};
    				$this->image = new Image();
    				$this->image->setStdResult ( $imageResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "image", $this->arrayResult )) {
    		$imageResult=$arrayResult['image'];
    			    			$this->image = new Image();
    			    			$this->image->setStdResult ( $imageResult);
    		}
    		    	    		}

}
?>