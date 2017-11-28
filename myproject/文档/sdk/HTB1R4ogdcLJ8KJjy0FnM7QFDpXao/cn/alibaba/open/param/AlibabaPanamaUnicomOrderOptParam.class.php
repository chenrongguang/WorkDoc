<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaUnicomOrderOptParam extends SDKDomain {

       	
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
    
        	
    private $action;
    
        /**
    * @return 动作
    */
        public function getAction() {
        return $this->action;
    }
    
    /**
     * 设置动作     
     * @param String $action     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAction( $action) {
        $this->action = $action;
    }
    
        	
    private $userId;
    
        /**
    * @return userId
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置userId     
     * @param Long $userId     
     * 参数示例：<pre>如果入参模型外有，以外部的为准</pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "parentOrderId", $this->stdResult )) {
    				$this->parentOrderId = $this->stdResult->{"parentOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subOrderId", $this->stdResult )) {
    				$this->subOrderId = $this->stdResult->{"subOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "action", $this->stdResult )) {
    				$this->action = $this->stdResult->{"action"};
    			}
    			    		    				    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "parentOrderId", $this->arrayResult )) {
    			$this->parentOrderId = $arrayResult['parentOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "subOrderId", $this->arrayResult )) {
    			$this->subOrderId = $arrayResult['subOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "action", $this->arrayResult )) {
    			$this->action = $arrayResult['action'];
    			}
    		    	    			    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    		}
 
   
}
?>