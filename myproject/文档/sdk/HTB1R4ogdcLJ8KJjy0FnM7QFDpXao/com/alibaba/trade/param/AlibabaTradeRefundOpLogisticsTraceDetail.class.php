<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeRefundOpLogisticsTraceStep.class.php');

class AlibabaTradeRefundOpLogisticsTraceDetail extends SDKDomain {

       	
    private $cpCode;
    
        /**
    * @return 
    */
        public function getCpCode() {
        return $this->cpCode;
    }
    
    /**
     * 设置     
     * @param String $cpCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCpCode( $cpCode) {
        $this->cpCode = $cpCode;
    }
    
        	
    private $cpName;
    
        /**
    * @return 
    */
        public function getCpName() {
        return $this->cpName;
    }
    
    /**
     * 设置     
     * @param String $cpName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCpName( $cpName) {
        $this->cpName = $cpName;
    }
    
        	
    private $currentStatus;
    
        /**
    * @return 
    */
        public function getCurrentStatus() {
        return $this->currentStatus;
    }
    
    /**
     * 设置     
     * @param String $currentStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentStatus( $currentStatus) {
        $this->currentStatus = $currentStatus;
    }
    
        	
    private $groupTracesIndex;
    
        /**
    * @return 
    */
        public function getGroupTracesIndex() {
        return $this->groupTracesIndex;
    }
    
    /**
     * 设置     
     * @param List $groupTracesIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupTracesIndex(array $groupTracesIndex) {
        $this->groupTracesIndex = $groupTracesIndex;
    }
    
        	
    private $groupTracesMap;
    
        /**
    * @return 
    */
        public function getGroupTracesMap() {
        return $this->groupTracesMap;
    }
    
    /**
     * 设置     
     * @param Map $groupTracesMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupTracesMap(array $groupTracesMap) {
        $this->groupTracesMap = $groupTracesMap;
    }
    
        	
    private $logisticsId;
    
        /**
    * @return 
    */
        public function getLogisticsId() {
        return $this->logisticsId;
    }
    
    /**
     * 设置     
     * @param String $logisticsId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsId( $logisticsId) {
        $this->logisticsId = $logisticsId;
    }
    
        	
    private $mailNo;
    
        /**
    * @return 
    */
        public function getMailNo() {
        return $this->mailNo;
    }
    
    /**
     * 设置     
     * @param String $mailNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMailNo( $mailNo) {
        $this->mailNo = $mailNo;
    }
    
        	
    private $tradeId;
    
        /**
    * @return 
    */
        public function getTradeId() {
        return $this->tradeId;
    }
    
    /**
     * 设置     
     * @param Long $tradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeId( $tradeId) {
        $this->tradeId = $tradeId;
    }
    
        	
    private $traceStepList;
    
        /**
    * @return 
    */
        public function getTraceStepList() {
        return $this->traceStepList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaTradeRefundOpLogisticsTraceStep[] $traceStepList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTraceStepList(AlibabaTradeRefundOpLogisticsTraceStep $traceStepList) {
        $this->traceStepList = $traceStepList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "cpCode", $this->stdResult )) {
    				$this->cpCode = $this->stdResult->{"cpCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "cpName", $this->stdResult )) {
    				$this->cpName = $this->stdResult->{"cpName"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentStatus", $this->stdResult )) {
    				$this->currentStatus = $this->stdResult->{"currentStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupTracesIndex", $this->stdResult )) {
    				$this->groupTracesIndex = $this->stdResult->{"groupTracesIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupTracesMap", $this->stdResult )) {
    				$this->groupTracesMap = $this->stdResult->{"groupTracesMap"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsId", $this->stdResult )) {
    				$this->logisticsId = $this->stdResult->{"logisticsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "mailNo", $this->stdResult )) {
    				$this->mailNo = $this->stdResult->{"mailNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeId", $this->stdResult )) {
    				$this->tradeId = $this->stdResult->{"tradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "traceStepList", $this->stdResult )) {
    			$traceStepListResult=$this->stdResult->{"traceStepList"};
    				$object = json_decode ( json_encode ( $traceStepListResult ), true );
					$this->traceStepList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeRefundOpLogisticsTraceStepResult=new AlibabaTradeRefundOpLogisticsTraceStep();
						$AlibabaTradeRefundOpLogisticsTraceStepResult->setArrayResult($arrayobject );
						$this->traceStepList [$i] = $AlibabaTradeRefundOpLogisticsTraceStepResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "cpCode", $this->arrayResult )) {
    			$this->cpCode = $arrayResult['cpCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "cpName", $this->arrayResult )) {
    			$this->cpName = $arrayResult['cpName'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentStatus", $this->arrayResult )) {
    			$this->currentStatus = $arrayResult['currentStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupTracesIndex", $this->arrayResult )) {
    			$this->groupTracesIndex = $arrayResult['groupTracesIndex'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupTracesMap", $this->arrayResult )) {
    			$this->groupTracesMap = $arrayResult['groupTracesMap'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsId", $this->arrayResult )) {
    			$this->logisticsId = $arrayResult['logisticsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "mailNo", $this->arrayResult )) {
    			$this->mailNo = $arrayResult['mailNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeId", $this->arrayResult )) {
    			$this->tradeId = $arrayResult['tradeId'];
    			}
    		    	    			    		    		if (array_key_exists ( "traceStepList", $this->arrayResult )) {
    		$traceStepListResult=$arrayResult['traceStepList'];
    			$this->traceStepList = new AlibabaTradeRefundOpLogisticsTraceStep();
    			$this->traceStepList->setStdResult ( $traceStepListResult);
    		}
    		    	    		}
 
   
}
?>