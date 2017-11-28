<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiBuyOfferModelBuyOffer.class.php');

class CaigouApiBuyOfferGetBuyOfferByIdResult {

        	
    private $buyOffer;
    
        /**
    * @return 
    */
        public function getBuyOffer() {
        return $this->buyOffer;
    }
    
    /**
     * 设置     
     * @param ComAlibabaCaigouApiBuyOfferModelBuyOffer $buyOffer     
          
     * 此参数必填     */
    public function setBuyOffer(ComAlibabaCaigouApiBuyOfferModelBuyOffer $buyOffer) {
        $this->buyOffer = $buyOffer;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyOffer", $this->stdResult )) {
    				$buyOfferResult=$this->stdResult->{"buyOffer"};
    				$this->buyOffer = new ComAlibabaCaigouApiBuyOfferModelBuyOffer();
    				$this->buyOffer->setStdResult ( $buyOfferResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "buyOffer", $this->arrayResult )) {
    		$buyOfferResult=$arrayResult['buyOffer'];
    			    			$this->buyOffer = new ComAlibabaCaigouApiBuyOfferModelBuyOffer();
    			    			$this->buyOffer->setStdResult ( $buyOfferResult);
    		}
    		    	    		}

}
?>