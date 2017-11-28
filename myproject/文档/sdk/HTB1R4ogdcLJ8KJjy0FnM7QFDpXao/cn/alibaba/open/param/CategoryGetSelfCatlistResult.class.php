<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/SellerCatInfo.class.php');

class CategoryGetSelfCatlistResult {

        	
    private $sellerCats;
    
        /**
    * @return 自定义分类列表
    */
        public function getSellerCats() {
        return $this->sellerCats;
    }
    
    /**
     * 设置自定义分类列表     
     * @param array include @see SellerCatInfo[] $sellerCats     
          
     * 此参数必填     */
    public function setSellerCats(SellerCatInfo $sellerCats) {
        $this->sellerCats = $sellerCats;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sellerCats", $this->stdResult )) {
    			$sellerCatsResult=$this->stdResult->{"sellerCats"};
    				$object = json_decode ( json_encode ( $sellerCatsResult ), true );
					$this->sellerCats = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$SellerCatInfoResult=new SellerCatInfo();
						$SellerCatInfoResult->setArrayResult($arrayobject );
						$this->sellerCats [$i] = $SellerCatInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "sellerCats", $this->arrayResult )) {
    		$sellerCatsResult=$arrayResult['sellerCats'];
    			$this->sellerCats = new SellerCatInfo();
    			$this->sellerCats->setStdResult ( $sellerCatsResult);
    		}
    		    	    		}

}
?>