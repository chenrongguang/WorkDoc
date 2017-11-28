<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaLstStockOperateResult.class.php');

class AlibabaLstItemSetStockResult {

        	
    private $resultList;
    
        /**
    * @return 修改结果
    */
        public function getResultList() {
        return $this->resultList;
    }
    
    /**
     * 设置修改结果     
     * @param array include @see AlibabaLstStockOperateResult[] $resultList     
          
     * 此参数必填     */
    public function setResultList(AlibabaLstStockOperateResult $resultList) {
        $this->resultList = $resultList;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 系统异常码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置系统异常码     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 系统异常描述
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置系统异常描述     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultList", $this->stdResult )) {
    			$resultListResult=$this->stdResult->{"resultList"};
    				$object = json_decode ( json_encode ( $resultListResult ), true );
					$this->resultList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLstStockOperateResultResult=new AlibabaLstStockOperateResult();
						$AlibabaLstStockOperateResultResult->setArrayResult($arrayobject );
						$this->resultList [$i] = $AlibabaLstStockOperateResultResult;
					}
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
				    		    		if (array_key_exists ( "resultList", $this->arrayResult )) {
    		$resultListResult=$arrayResult['resultList'];
    			$this->resultList = new AlibabaLstStockOperateResult();
    			$this->resultList->setStdResult ( $resultListResult);
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