<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaMarketingListResult.class.php');

class AlibabaSellerCouponGetResult {

        	
    private $coupons;
    
        /**
    * @return 
    */
        public function getCoupons() {
        return $this->coupons;
    }
    
    /**
     * 设置     
     * @param AlibabaMarketingListResult $coupons     
          
     * 此参数必填     */
    public function setCoupons(AlibabaMarketingListResult $coupons) {
        $this->coupons = $coupons;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "coupons", $this->stdResult )) {
    				$couponsResult=$this->stdResult->{"coupons"};
    				$this->coupons = new AlibabaMarketingListResult();
    				$this->coupons->setStdResult ( $couponsResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "coupons", $this->arrayResult )) {
    		$couponsResult=$arrayResult['coupons'];
    			    			$this->coupons = new AlibabaMarketingListResult();
    			    			$this->coupons->setStdResult ( $couponsResult);
    		}
    		    	    		}

}
?>