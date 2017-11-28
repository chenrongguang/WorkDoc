<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OfferDetailInfo.class.php');

class OfferGetPublishOfferListResult {

        	
    private $offerDetailInfo;
    
        /**
    * @return 产品详细信息
    */
        public function getOfferDetailInfo() {
        return $this->offerDetailInfo;
    }
    
    /**
     * 设置产品详细信息     
     * @param array include @see OfferDetailInfo[] $offerDetailInfo     
          
     * 此参数必填     */
    public function setOfferDetailInfo(OfferDetailInfo $offerDetailInfo) {
        $this->offerDetailInfo = $offerDetailInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "offerDetailInfo", $this->stdResult )) {
    			$offerDetailInfoResult=$this->stdResult->{"offerDetailInfo"};
    				$object = json_decode ( json_encode ( $offerDetailInfoResult ), true );
					$this->offerDetailInfo = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OfferDetailInfoResult=new OfferDetailInfo();
						$OfferDetailInfoResult->setArrayResult($arrayobject );
						$this->offerDetailInfo [$i] = $OfferDetailInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "offerDetailInfo", $this->arrayResult )) {
    		$offerDetailInfoResult=$arrayResult['offerDetailInfo'];
    			$this->offerDetailInfo = new OfferDetailInfo();
    			$this->offerDetailInfo->setStdResult ( $offerDetailInfoResult);
    		}
    		    	    		}

}
?>