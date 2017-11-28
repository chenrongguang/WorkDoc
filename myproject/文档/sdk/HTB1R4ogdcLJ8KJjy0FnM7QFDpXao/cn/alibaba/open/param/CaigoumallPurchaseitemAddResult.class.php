<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CoopPurchaseItemAddResult.class.php');

class CaigoumallPurchaseitemAddResult {

        	
    private $purchaseItemAddResult;
    
        /**
    * @return 添加报价到进货单结果
    */
        public function getPurchaseItemAddResult() {
        return $this->purchaseItemAddResult;
    }
    
    /**
     * 设置添加报价到进货单结果     
     * @param CoopPurchaseItemAddResult $purchaseItemAddResult     
          
     * 此参数必填     */
    public function setPurchaseItemAddResult(CoopPurchaseItemAddResult $purchaseItemAddResult) {
        $this->purchaseItemAddResult = $purchaseItemAddResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "purchaseItemAddResult", $this->stdResult )) {
    				$purchaseItemAddResultResult=$this->stdResult->{"purchaseItemAddResult"};
    				$this->purchaseItemAddResult = new CoopPurchaseItemAddResult();
    				$this->purchaseItemAddResult->setStdResult ( $purchaseItemAddResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "purchaseItemAddResult", $this->arrayResult )) {
    		$purchaseItemAddResultResult=$arrayResult['purchaseItemAddResult'];
    			    			$this->purchaseItemAddResult = new CoopPurchaseItemAddResult();
    			    			$this->purchaseItemAddResult->setStdResult ( $purchaseItemAddResultResult);
    		}
    		    	    		}

}
?>