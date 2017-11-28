<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/Supplier.class.php');

class CaigouApiSupplierGetSupplierResult {

        	
    private $supplier;
    
        /**
    * @return 
    */
        public function getSupplier() {
        return $this->supplier;
    }
    
    /**
     * 设置     
     * @param Supplier $supplier     
          
     * 此参数必填     */
    public function setSupplier(Supplier $supplier) {
        $this->supplier = $supplier;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "supplier", $this->stdResult )) {
    				$supplierResult=$this->stdResult->{"supplier"};
    				$this->supplier = new Supplier();
    				$this->supplier->setStdResult ( $supplierResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "supplier", $this->arrayResult )) {
    		$supplierResult=$arrayResult['supplier'];
    			    			$this->supplier = new Supplier();
    			    			$this->supplier->setStdResult ( $supplierResult);
    		}
    		    	    		}

}
?>