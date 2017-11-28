<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationConsignerModel extends SDKDomain {

       	
    private $consignStatus;
    
        /**
    * @return 合作状态
    */
        public function getConsignStatus() {
        return $this->consignStatus;
    }
    
    /**
     * 设置合作状态     
     * @param String $consignStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignStatus( $consignStatus) {
        $this->consignStatus = $consignStatus;
    }
    
        	
    private $consignCreateTime;
    
        /**
    * @return 创建关系时间
    */
        public function getConsignCreateTime() {
        return $this->consignCreateTime;
    }
    
    /**
     * 设置创建关系时间     
     * @param Long $consignCreateTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignCreateTime( $consignCreateTime) {
        $this->consignCreateTime = $consignCreateTime;
    }
    
        	
    private $consignerLoginId;
    
        /**
    * @return 分销商登录ID
    */
        public function getConsignerLoginId() {
        return $this->consignerLoginId;
    }
    
    /**
     * 设置分销商登录ID     
     * @param String $consignerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignerLoginId( $consignerLoginId) {
        $this->consignerLoginId = $consignerLoginId;
    }
    
        	
    private $consignerGrade;
    
        /**
    * @return 分销商等级
    */
        public function getConsignerGrade() {
        return $this->consignerGrade;
    }
    
    /**
     * 设置分销商等级     
     * @param Long $consignerGrade     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConsignerGrade( $consignerGrade) {
        $this->consignerGrade = $consignerGrade;
    }
    
        	
    private $lastOrder;
    
        /**
    * @return 近180交易订单
    */
        public function getLastOrder() {
        return $this->lastOrder;
    }
    
    /**
     * 设置近180交易订单     
     * @param Long $lastOrder     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLastOrder( $lastOrder) {
        $this->lastOrder = $lastOrder;
    }
    
        	
    private $lastAmount;
    
        /**
    * @return 近180交易金额（分）
    */
        public function getLastAmount() {
        return $this->lastAmount;
    }
    
    /**
     * 设置近180交易金额（分）     
     * @param Long $lastAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLastAmount( $lastAmount) {
        $this->lastAmount = $lastAmount;
    }
    
        	
    private $terminateTime;
    
        /**
    * @return 终止关系时间
    */
        public function getTerminateTime() {
        return $this->terminateTime;
    }
    
    /**
     * 设置终止关系时间     
     * @param Long $terminateTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTerminateTime( $terminateTime) {
        $this->terminateTime = $terminateTime;
    }
    
        	
    private $terminateReason;
    
        /**
    * @return 终止关系原因
    */
        public function getTerminateReason() {
        return $this->terminateReason;
    }
    
    /**
     * 设置终止关系原因     
     * @param String $terminateReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTerminateReason( $terminateReason) {
        $this->terminateReason = $terminateReason;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "consignStatus", $this->stdResult )) {
    				$this->consignStatus = $this->stdResult->{"consignStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignCreateTime", $this->stdResult )) {
    				$this->consignCreateTime = $this->stdResult->{"consignCreateTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignerLoginId", $this->stdResult )) {
    				$this->consignerLoginId = $this->stdResult->{"consignerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "consignerGrade", $this->stdResult )) {
    				$this->consignerGrade = $this->stdResult->{"consignerGrade"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastOrder", $this->stdResult )) {
    				$this->lastOrder = $this->stdResult->{"lastOrder"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastAmount", $this->stdResult )) {
    				$this->lastAmount = $this->stdResult->{"lastAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "terminateTime", $this->stdResult )) {
    				$this->terminateTime = $this->stdResult->{"terminateTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "terminateReason", $this->stdResult )) {
    				$this->terminateReason = $this->stdResult->{"terminateReason"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "consignStatus", $this->arrayResult )) {
    			$this->consignStatus = $arrayResult['consignStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignCreateTime", $this->arrayResult )) {
    			$this->consignCreateTime = $arrayResult['consignCreateTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignerLoginId", $this->arrayResult )) {
    			$this->consignerLoginId = $arrayResult['consignerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "consignerGrade", $this->arrayResult )) {
    			$this->consignerGrade = $arrayResult['consignerGrade'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastOrder", $this->arrayResult )) {
    			$this->lastOrder = $arrayResult['lastOrder'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastAmount", $this->arrayResult )) {
    			$this->lastAmount = $arrayResult['lastAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "terminateTime", $this->arrayResult )) {
    			$this->terminateTime = $arrayResult['terminateTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "terminateReason", $this->arrayResult )) {
    			$this->terminateReason = $arrayResult['terminateReason'];
    			}
    		    	    		}
 
   
}
?>