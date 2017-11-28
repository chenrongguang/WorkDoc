<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaUnicomCreateRefundParam extends SDKDomain {

       	
    private $appkey;
    
        /**
    * @return 
    */
        public function getAppkey() {
        return $this->appkey;
    }
    
    /**
     * 设置     
     * @param String $appkey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppkey( $appkey) {
        $this->appkey = $appkey;
    }
    
        	
    private $userId;
    
        /**
    * @return 
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置     
     * @param Long $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $workType;
    
        /**
    * @return 申请挂起类型，1为未收到，2为退货，3为换货
    */
        public function getWorkType() {
        return $this->workType;
    }
    
    /**
     * 设置申请挂起类型，1为未收到，2为退货，3为换货     
     * @param Integer $workType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWorkType( $workType) {
        $this->workType = $workType;
    }
    
        	
    private $content;
    
        /**
    * @return 挂起申请描述 50字符以内
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置挂起申请描述 50字符以内     
     * @param String $content     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
        	
    private $parentOrderId;
    
        /**
    * @return 主订单 id
    */
        public function getParentOrderId() {
        return $this->parentOrderId;
    }
    
    /**
     * 设置主订单 id     
     * @param String $parentOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentOrderId( $parentOrderId) {
        $this->parentOrderId = $parentOrderId;
    }
    
        	
    private $subOrderId;
    
        /**
    * @return 子订单 id
    */
        public function getSubOrderId() {
        return $this->subOrderId;
    }
    
    /**
     * 设置子订单 id     
     * @param String $subOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubOrderId( $subOrderId) {
        $this->subOrderId = $subOrderId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "appkey", $this->stdResult )) {
    				$this->appkey = $this->stdResult->{"appkey"};
    			}
    			    		    				    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "workType", $this->stdResult )) {
    				$this->workType = $this->stdResult->{"workType"};
    			}
    			    		    				    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentOrderId", $this->stdResult )) {
    				$this->parentOrderId = $this->stdResult->{"parentOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subOrderId", $this->stdResult )) {
    				$this->subOrderId = $this->stdResult->{"subOrderId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "appkey", $this->arrayResult )) {
    			$this->appkey = $arrayResult['appkey'];
    			}
    		    	    			    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    			    		    			if (array_key_exists ( "workType", $this->arrayResult )) {
    			$this->workType = $arrayResult['workType'];
    			}
    		    	    			    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['content'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentOrderId", $this->arrayResult )) {
    			$this->parentOrderId = $arrayResult['parentOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "subOrderId", $this->arrayResult )) {
    			$this->subOrderId = $arrayResult['subOrderId'];
    			}
    		    	    		}
 
   
}
?>