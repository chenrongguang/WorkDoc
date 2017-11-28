<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationGetOverviewBySuppliersIdResult {

        	
    private $productLineAmount;
    
        /**
    * @return 产品分组个数
    */
        public function getProductLineAmount() {
        return $this->productLineAmount;
    }
    
    /**
     * 设置产品分组个数     
     * @param Long $productLineAmount     
          
     * 此参数必填     */
    public function setProductLineAmount( $productLineAmount) {
        $this->productLineAmount = $productLineAmount;
    }
    
        	
    private $canConsignProductAmount;
    
        /**
    * @return 可代销商品个数
    */
        public function getCanConsignProductAmount() {
        return $this->canConsignProductAmount;
    }
    
    /**
     * 设置可代销商品个数     
     * @param Long $canConsignProductAmount     
          
     * 此参数必填     */
    public function setCanConsignProductAmount( $canConsignProductAmount) {
        $this->canConsignProductAmount = $canConsignProductAmount;
    }
    
        	
    private $consignerAmount;
    
        /**
    * @return 合作中的分销商个数
    */
        public function getConsignerAmount() {
        return $this->consignerAmount;
    }
    
    /**
     * 设置合作中的分销商个数     
     * @param Long $consignerAmount     
          
     * 此参数必填     */
    public function setConsignerAmount( $consignerAmount) {
        $this->consignerAmount = $consignerAmount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productLineAmount", $this->stdResult )) {
    				$this->productLineAmount = $this->stdResult->{"productLineAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "canConsignProductAmount", $this->stdResult )) {
    				$this->canConsignProductAmount = $this->stdResult->{"canConsignProductAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignerAmount", $this->stdResult )) {
    				$this->consignerAmount = $this->stdResult->{"consignerAmount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productLineAmount", $this->arrayResult )) {
    			$this->productLineAmount = $arrayResult['productLineAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "canConsignProductAmount", $this->arrayResult )) {
    			$this->canConsignProductAmount = $arrayResult['canConsignProductAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignerAmount", $this->arrayResult )) {
    			$this->consignerAmount = $arrayResult['consignerAmount'];
    			}
    		    	    		}

}
?>