<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class WholesaleGetResult {

        	
    private $invoiceRemark;
    
        /**
    * @return 发票说明
    */
        public function getInvoiceRemark() {
        return $this->invoiceRemark;
    }
    
    /**
     * 设置发票说明     
     * @param String $invoiceRemark     
          
     * 此参数必填     */
    public function setInvoiceRemark( $invoiceRemark) {
        $this->invoiceRemark = $invoiceRemark;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "invoiceRemark", $this->stdResult )) {
    				$this->invoiceRemark = $this->stdResult->{"invoiceRemark"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "invoiceRemark", $this->arrayResult )) {
    			$this->invoiceRemark = $arrayResult['invoiceRemark'];
    			}
    		    	    		}

}
?>