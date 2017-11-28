<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiBuyOfferModelBuyOffer.class.php');

class CaigouApiBuyOfferQueryBuyOfferByPrIdResult {

        	
    private $buyOfferList;
    
        /**
    * @return 
    */
        public function getBuyOfferList() {
        return $this->buyOfferList;
    }
    
    /**
     * 设置     
     * @param array include @see ComAlibabaCaigouApiBuyOfferModelBuyOffer[] $buyOfferList     
          
     * 此参数必填     */
    public function setBuyOfferList(ComAlibabaCaigouApiBuyOfferModelBuyOffer $buyOfferList) {
        $this->buyOfferList = $buyOfferList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyOfferList", $this->stdResult )) {
    			$buyOfferListResult=$this->stdResult->{"buyOfferList"};
    				$object = json_decode ( json_encode ( $buyOfferListResult ), true );
					$this->buyOfferList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiBuyOfferModelBuyOfferResult=new ComAlibabaCaigouApiBuyOfferModelBuyOffer();
						$ComAlibabaCaigouApiBuyOfferModelBuyOfferResult->setArrayResult($arrayobject );
						$this->buyOfferList [$i] = $ComAlibabaCaigouApiBuyOfferModelBuyOfferResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "buyOfferList", $this->arrayResult )) {
    		$buyOfferListResult=$arrayResult['buyOfferList'];
    			$this->buyOfferList = new ComAlibabaCaigouApiBuyOfferModelBuyOffer();
    			$this->buyOfferList->setStdResult ( $buyOfferListResult);
    		}
    		    	    		}

}
?>