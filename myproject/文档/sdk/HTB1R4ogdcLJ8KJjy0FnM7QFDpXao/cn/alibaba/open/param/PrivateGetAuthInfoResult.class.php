<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PrivateGetAuthInfoResult {

        	
    private $imageList;
    
        /**
    * @return 图片是否可见。true：买家可见；false：买家不可见
    */
        public function getImageList() {
        return $this->imageList;
    }
    
    /**
     * 设置图片是否可见。true：买家可见；false：买家不可见     
     * @param Boolean $imageList     
          
     * 此参数必填     */
    public function setImageList( $imageList) {
        $this->imageList = $imageList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "imageList", $this->stdResult )) {
    				$this->imageList = $this->stdResult->{"imageList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "imageList", $this->arrayResult )) {
    			$this->imageList = $arrayResult['imageList'];
    			}
    		    	    		}

}
?>