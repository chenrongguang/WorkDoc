<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResult.class.php');

class AlibabaCbuSearchwebOpenHsfResultIsvGraphCommonResult extends SDKDomain {

       	
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
    * @return 错误场景的错误提示信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误场景的错误提示信息     
     * @param String $errorMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $result;
    
        /**
    * @return 同款相似款的统计信息
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置同款相似款的统计信息     
     * @param array include @see AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResult[] $result     
     * 参数示例：<pre>[
    {
        taobaoOfferId:1,
        similarOffers:2,
        sameOffers:3
    },{
        taobaoOfferId:2,
        similarOffers:3,
        sameOffers:4
    }
]</pre>     
     * 此参数必填     */
    public function setResult(AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResult $result) {
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
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResultResult=new AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResult();
						$AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResultResult;
					}
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
    			$this->result = new AlibabaCbuSearchwebOpenHsfResultIsvGraphOfferResult();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}
 
   
}
?>