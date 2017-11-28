<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult.class.php');

class ComAlibabaCbuSearchwebOpenHsfResultDaixiaoOfferIsvCommonResult extends SDKDomain {

       	
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 接口错误场景的错误信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置接口错误场景的错误信息     
     * @param String $errorMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $result;
    
        /**
    * @return 商品的查询结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置商品的查询结果     
     * @param ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult $result     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResult(ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['isSuccess'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['errorMsg'];
    			}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}
 
   
}
?>