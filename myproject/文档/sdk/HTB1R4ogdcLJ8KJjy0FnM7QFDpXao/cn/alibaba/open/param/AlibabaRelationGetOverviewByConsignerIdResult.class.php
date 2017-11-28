<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationGetOverviewByConsignerIdResult {

        	
    private $waitConfirmAmount;
    
        /**
    * @return 待确认订单数
    */
        public function getWaitConfirmAmount() {
        return $this->waitConfirmAmount;
    }
    
    /**
     * 设置待确认订单数     
     * @param Long $waitConfirmAmount     
          
     * 此参数必填     */
    public function setWaitConfirmAmount( $waitConfirmAmount) {
        $this->waitConfirmAmount = $waitConfirmAmount;
    }
    
        	
    private $hasConsignProductAmount;
    
        /**
    * @return 已代销商品个数
    */
        public function getHasConsignProductAmount() {
        return $this->hasConsignProductAmount;
    }
    
    /**
     * 设置已代销商品个数     
     * @param Long $hasConsignProductAmount     
          
     * 此参数必填     */
    public function setHasConsignProductAmount( $hasConsignProductAmount) {
        $this->hasConsignProductAmount = $hasConsignProductAmount;
    }
    
        	
    private $supplierAmount;
    
        /**
    * @return 合作中的供应商个数
    */
        public function getSupplierAmount() {
        return $this->supplierAmount;
    }
    
    /**
     * 设置合作中的供应商个数     
     * @param Long $supplierAmount     
          
     * 此参数必填     */
    public function setSupplierAmount( $supplierAmount) {
        $this->supplierAmount = $supplierAmount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "waitConfirmAmount", $this->stdResult )) {
    				$this->waitConfirmAmount = $this->stdResult->{"waitConfirmAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasConsignProductAmount", $this->stdResult )) {
    				$this->hasConsignProductAmount = $this->stdResult->{"hasConsignProductAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierAmount", $this->stdResult )) {
    				$this->supplierAmount = $this->stdResult->{"supplierAmount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "waitConfirmAmount", $this->arrayResult )) {
    			$this->waitConfirmAmount = $arrayResult['waitConfirmAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasConsignProductAmount", $this->arrayResult )) {
    			$this->hasConsignProductAmount = $arrayResult['hasConsignProductAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierAmount", $this->arrayResult )) {
    			$this->supplierAmount = $arrayResult['supplierAmount'];
    			}
    		    	    		}

}
?>