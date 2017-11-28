<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSPIVF01GetSOPlanResult {

        	
    private $salesOrderPlan;
    
        /**
    * @return 
    */
        public function getSalesOrderPlan() {
        return $this->salesOrderPlan;
    }
    
    /**
     * 设置     
     * @param String $salesOrderPlan     
          
     * 此参数必填     */
    public function setSalesOrderPlan( $salesOrderPlan) {
        $this->salesOrderPlan = $salesOrderPlan;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "salesOrderPlan", $this->stdResult )) {
    				$this->salesOrderPlan = $this->stdResult->{"salesOrderPlan"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "salesOrderPlan", $this->arrayResult )) {
    			$this->salesOrderPlan = $arrayResult['salesOrderPlan'];
    			}
    		    	    		}

}
?>