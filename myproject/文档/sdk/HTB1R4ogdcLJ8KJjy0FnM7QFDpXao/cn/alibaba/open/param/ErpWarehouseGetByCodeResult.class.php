<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaBirdsnestCoopapiWarehouseModelUserWarehouse.class.php');

class ErpWarehouseGetByCodeResult {

        	
    private $userWarehouse;
    
        /**
    * @return 
    */
        public function getUserWarehouse() {
        return $this->userWarehouse;
    }
    
    /**
     * 设置     
     * @param ComAlibabaBirdsnestCoopapiWarehouseModelUserWarehouse $userWarehouse     
          
     * 此参数必填     */
    public function setUserWarehouse(ComAlibabaBirdsnestCoopapiWarehouseModelUserWarehouse $userWarehouse) {
        $this->userWarehouse = $userWarehouse;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userWarehouse", $this->stdResult )) {
    				$userWarehouseResult=$this->stdResult->{"userWarehouse"};
    				$this->userWarehouse = new ComAlibabaBirdsnestCoopapiWarehouseModelUserWarehouse();
    				$this->userWarehouse->setStdResult ( $userWarehouseResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "userWarehouse", $this->arrayResult )) {
    		$userWarehouseResult=$arrayResult['userWarehouse'];
    			    			$this->userWarehouse = new ComAlibabaBirdsnestCoopapiWarehouseModelUserWarehouse();
    			    			$this->userWarehouse->setStdResult ( $userWarehouseResult);
    		}
    		    	    		}

}
?>