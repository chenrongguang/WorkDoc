<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/BrandInfo.class.php');

class OnlineTestResult {

        	
    private $brand;
    
        /**
    * @return 
    */
        public function getBrand() {
        return $this->brand;
    }
    
    /**
     * 设置     
     * @param array include @see BrandInfo[] $brand     
          
     * 此参数必填     */
    public function setBrand(BrandInfo $brand) {
        $this->brand = $brand;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brand", $this->stdResult )) {
    			$brandResult=$this->stdResult->{"brand"};
    				$object = json_decode ( json_encode ( $brandResult ), true );
					$this->brand = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$BrandInfoResult=new BrandInfo();
						$BrandInfoResult->setArrayResult($arrayobject );
						$this->brand [$i] = $BrandInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "brand", $this->arrayResult )) {
    		$brandResult=$arrayResult['brand'];
    			$this->brand = new BrandInfo();
    			$this->brand->setStdResult ( $brandResult);
    		}
    		    	    		}

}
?>