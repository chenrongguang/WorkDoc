<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCbuSearchwebOpenHsfResultIsvRecommendResult.class.php');

class ComAlibabaCbuSearchwebOpenHsfResultDaixiaoRecomCommonResult extends SDKDomain {

       	
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
    * @return 错误提示信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误提示信息     
     * @param String $errorMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $result;
    
        /**
    * @return 公司推荐结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置公司推荐结果     
     * @param ComAlibabaCbuSearchwebOpenHsfResultIsvRecommendResult $result     
     * 参数示例：<pre>{
        count:123,//推荐的供应商总数
        currentPage:1,
        pageSize:10,
        companyList: [//供应商列表，每个公司3个offer
            {
                memberId:'会员Id',
                companyName:'',
                offerResult:{
                    offerList:[推荐的3个最新offer列表]
                }
            }
        ]
    }</pre>     
     * 此参数必填     */
    public function setResult(ComAlibabaCbuSearchwebOpenHsfResultIsvRecommendResult $result) {
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
    				$this->result = new ComAlibabaCbuSearchwebOpenHsfResultIsvRecommendResult();
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
    			    			$this->result = new ComAlibabaCbuSearchwebOpenHsfResultIsvRecommendResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}
 
   
}
?>