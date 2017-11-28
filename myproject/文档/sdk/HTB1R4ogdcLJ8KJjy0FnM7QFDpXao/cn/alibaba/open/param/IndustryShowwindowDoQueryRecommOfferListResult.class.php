<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OfferDetailInfo.class.php');

class IndustryShowwindowDoQueryRecommOfferListResult {

        	
    private $showWindowOfferList;
    
        /**
    * @return 推荐橱窗offer列表
    */
        public function getShowWindowOfferList() {
        return $this->showWindowOfferList;
    }
    
    /**
     * 设置推荐橱窗offer列表     
     * @param array include @see OfferDetailInfo[] $showWindowOfferList     
          
     * 此参数必填     */
    public function setShowWindowOfferList(OfferDetailInfo $showWindowOfferList) {
        $this->showWindowOfferList = $showWindowOfferList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "showWindowOfferList", $this->stdResult )) {
    			$showWindowOfferListResult=$this->stdResult->{"showWindowOfferList"};
    				$object = json_decode ( json_encode ( $showWindowOfferListResult ), true );
					$this->showWindowOfferList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OfferDetailInfoResult=new OfferDetailInfo();
						$OfferDetailInfoResult->setArrayResult($arrayobject );
						$this->showWindowOfferList [$i] = $OfferDetailInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "showWindowOfferList", $this->arrayResult )) {
    		$showWindowOfferListResult=$arrayResult['showWindowOfferList'];
    			$this->showWindowOfferList = new OfferDetailInfo();
    			$this->showWindowOfferList->setStdResult ( $showWindowOfferListResult);
    		}
    		    	    		}

}
?>