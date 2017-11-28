<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/Album.class.php');

class IbankAlbumGetResult {

        	
    private $album;
    
        /**
    * @return 相册信息
    */
        public function getAlbum() {
        return $this->album;
    }
    
    /**
     * 设置相册信息     
     * @param Album $album     
          
     * 此参数必填     */
    public function setAlbum(Album $album) {
        $this->album = $album;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "album", $this->stdResult )) {
    				$albumResult=$this->stdResult->{"album"};
    				$this->album = new Album();
    				$this->album->setStdResult ( $albumResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "album", $this->arrayResult )) {
    		$albumResult=$arrayResult['album'];
    			    			$this->album = new Album();
    			    			$this->album->setStdResult ( $albumResult);
    		}
    		    	    		}

}
?>