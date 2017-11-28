<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiBuyOfferModelBuyOffer.class.php');

class CaigouApiBuyofferQueryListResult {

        	
    private $buyofferList;
    
        /**
    * @return 
    */
        public function getBuyofferList() {
        return $this->buyofferList;
    }
    
    /**
     * 设置     
     * @param ComAlibabaCaigouApiBuyOfferModelBuyOffer $buyofferList     
          
     * 此参数必填     */
    public function setBuyofferList(ComAlibabaCaigouApiBuyOfferModelBuyOffer $buyofferList) {
        $this->buyofferList = $buyofferList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyofferList", $this->stdResult )) {
    				$buyofferListResult=$this->stdResult->{"buyofferList"};
    				$this->buyofferList = new ComAlibabaCaigouApiBuyOfferModelBuyOffer();
    				$this->buyofferList->setStdResult ( $buyofferListResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "buyofferList", $this->arrayResult )) {
    		$buyofferListResult=$arrayResult['buyofferList'];
    			    			$this->buyofferList = new ComAlibabaCaigouApiBuyOfferModelBuyOffer();
    			    			$this->buyofferList->setStdResult ( $buyofferListResult);
    		}
    		    	    		}

}
?>