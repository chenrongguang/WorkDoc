<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsCommonError.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsExpressExpressWTDSolution.class.php');

class AlibabaLogisticsInternationalexpressWtdSolutionGetListResult {

        	
    private $error;
    
        /**
    * @return 错误信息
    */
        public function getError() {
        return $this->error;
    }
    
    /**
     * 设置错误信息     
     * @param AlibabaLogisticsCommonError $error     
          
     * 此参数必填     */
    public function setError(AlibabaLogisticsCommonError $error) {
        $this->error = $error;
    }
    
        	
    private $solutions;
    
        /**
    * @return 方案信息
    */
        public function getSolutions() {
        return $this->solutions;
    }
    
    /**
     * 设置方案信息     
     * @param array include @see AlibabaLogisticsExpressExpressWTDSolution[] $solutions     
          
     * 此参数必填     */
    public function setSolutions(AlibabaLogisticsExpressExpressWTDSolution $solutions) {
        $this->solutions = $solutions;
    }
    
        	
    private $success;
    
        /**
    * @return 是否处理成功：true为成功，false为失败，失败原因见error
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否处理成功：true为成功，false为失败，失败原因见error     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "error", $this->stdResult )) {
    				$errorResult=$this->stdResult->{"error"};
    				$this->error = new AlibabaLogisticsCommonError();
    				$this->error->setStdResult ( $errorResult);
    			}
    			    		    				    			    			if (array_key_exists ( "solutions", $this->stdResult )) {
    			$solutionsResult=$this->stdResult->{"solutions"};
    				$object = json_decode ( json_encode ( $solutionsResult ), true );
					$this->solutions = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsExpressExpressWTDSolutionResult=new AlibabaLogisticsExpressExpressWTDSolution();
						$AlibabaLogisticsExpressExpressWTDSolutionResult->setArrayResult($arrayobject );
						$this->solutions [$i] = $AlibabaLogisticsExpressExpressWTDSolutionResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "error", $this->arrayResult )) {
    		$errorResult=$arrayResult['error'];
    			    			$this->error = new AlibabaLogisticsCommonError();
    			    			$this->error->setStdResult ( $errorResult);
    		}
    		    	    			    		    		if (array_key_exists ( "solutions", $this->arrayResult )) {
    		$solutionsResult=$arrayResult['solutions'];
    			$this->solutions = new AlibabaLogisticsExpressExpressWTDSolution();
    			$this->solutions->setStdResult ( $solutionsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>