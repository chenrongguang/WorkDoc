<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorConfirmOrderResult {

        	
    private $isSuccess;
    
        /**
    * @return 是否成功
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $isSuccess     
          
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
        	
    private $details;
    
        /**
    * @return 每个采购单确认是否成功，key为采购单Id，value为true/false
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置每个采购单确认是否成功，key为采购单Id，value为true/false     
     * @param Map $details     
          
     * 此参数必填     */
    public function setDetails(array $details) {
        $this->details = $details;
    }
    
        	
    private $orderUrl;
    
        /**
    * @return 立即下单时，提交的给下单页面的url
    */
        public function getOrderUrl() {
        return $this->orderUrl;
    }
    
    /**
     * 设置立即下单时，提交的给下单页面的url     
     * @param String $orderUrl     
          
     * 此参数必填     */
    public function setOrderUrl( $orderUrl) {
        $this->orderUrl = $orderUrl;
    }
    
        	
    private $flow;
    
        /**
    * @return 立即下单时，提交给下单页面的参数
    */
        public function getFlow() {
        return $this->flow;
    }
    
    /**
     * 设置立即下单时，提交给下单页面的参数     
     * @param String $flow     
          
     * 此参数必填     */
    public function setFlow( $flow) {
        $this->flow = $flow;
    }
    
        	
    private $id;
    
        /**
    * @return 立即下单时，提交给下单页面的参数
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置立即下单时，提交给下单页面的参数     
     * @param String $id     
          
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    				$this->details = $this->stdResult->{"details"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderUrl", $this->stdResult )) {
    				$this->orderUrl = $this->stdResult->{"orderUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "flow", $this->stdResult )) {
    				$this->flow = $this->stdResult->{"flow"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['isSuccess'];
    			}
    		    	    			    		    			if (array_key_exists ( "details", $this->arrayResult )) {
    			$this->details = $arrayResult['details'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderUrl", $this->arrayResult )) {
    			$this->orderUrl = $arrayResult['orderUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "flow", $this->arrayResult )) {
    			$this->flow = $arrayResult['flow'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    		}

}
?>