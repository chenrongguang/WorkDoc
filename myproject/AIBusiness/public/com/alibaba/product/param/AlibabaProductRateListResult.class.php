<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateModel.class.php');

class AlibabaProductRateListResult {

        	
    private $modelList;
    
        /**
    * @return 
    */
        public function getModelList() {
        return $this->modelList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductRateRateModel[] $modelList     
          
     * 此参数必填     */
    public function setModelList(AlibabaProductRateRateModel $modelList) {
        $this->modelList = $modelList;
    }
    
        	
    private $totalCount;
    
        /**
    * @return 
    */
        public function getTotalCount() {
        return $this->totalCount;
    }
    
    /**
     * 设置     
     * @param Integer $totalCount     
          
     * 此参数必填     */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "modelList", $this->stdResult )) {
    			$modelListResult=$this->stdResult->{"modelList"};
    				$object = json_decode ( json_encode ( $modelListResult ), true );
					$this->modelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductRateRateModelResult=new AlibabaProductRateRateModel();
						$AlibabaProductRateRateModelResult->setArrayResult($arrayobject );
						$this->modelList [$i] = $AlibabaProductRateRateModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "modelList", $this->arrayResult )) {
    		$modelListResult=$arrayResult['modelList'];
    			$this->modelList = new AlibabaProductRateRateModel();
    			$this->modelList->setStdResult ( $modelListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['totalCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['errorMessage'];
    			}
    		    	    		}

}
?>