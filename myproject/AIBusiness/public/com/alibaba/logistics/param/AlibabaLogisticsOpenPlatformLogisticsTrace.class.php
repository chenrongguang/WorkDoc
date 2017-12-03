<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsOpenPlatformLogisticsStep.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsOpenPlatformTraceNode.class.php');

class AlibabaLogisticsOpenPlatformLogisticsTrace extends SDKDomain {

       	
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
    
        	
    private $orderId;
    
        /**
    * @return 
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $logisticsBillNo;
    
        /**
    * @return 
    */
        public function getLogisticsBillNo() {
        return $this->logisticsBillNo;
    }
    
    /**
     * 设置     
     * @param String $logisticsBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsBillNo( $logisticsBillNo) {
        $this->logisticsBillNo = $logisticsBillNo;
    }
    
        	
    private $logisticsSteps;
    
        /**
    * @return 
    */
        public function getLogisticsSteps() {
        return $this->logisticsSteps;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaLogisticsOpenPlatformLogisticsStep[] $logisticsSteps     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsSteps(AlibabaLogisticsOpenPlatformLogisticsStep $logisticsSteps) {
        $this->logisticsSteps = $logisticsSteps;
    }
    
        	
    private $traceNodeList;
    
        /**
    * @return 
    */
        public function getTraceNodeList() {
        return $this->traceNodeList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaLogisticsOpenPlatformTraceNode[] $traceNodeList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTraceNodeList(AlibabaLogisticsOpenPlatformTraceNode $traceNodeList) {
        $this->traceNodeList = $traceNodeList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "logisticsId", $this->stdResult )) {
    				$this->logisticsId = $this->stdResult->{"logisticsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsBillNo", $this->stdResult )) {
    				$this->logisticsBillNo = $this->stdResult->{"logisticsBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsSteps", $this->stdResult )) {
    			$logisticsStepsResult=$this->stdResult->{"logisticsSteps"};
    				$object = json_decode ( json_encode ( $logisticsStepsResult ), true );
					$this->logisticsSteps = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsOpenPlatformLogisticsStepResult=new AlibabaLogisticsOpenPlatformLogisticsStep();
						$AlibabaLogisticsOpenPlatformLogisticsStepResult->setArrayResult($arrayobject );
						$this->logisticsSteps [$i] = $AlibabaLogisticsOpenPlatformLogisticsStepResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "traceNodeList", $this->stdResult )) {
    			$traceNodeListResult=$this->stdResult->{"traceNodeList"};
    				$object = json_decode ( json_encode ( $traceNodeListResult ), true );
					$this->traceNodeList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsOpenPlatformTraceNodeResult=new AlibabaLogisticsOpenPlatformTraceNode();
						$AlibabaLogisticsOpenPlatformTraceNodeResult->setArrayResult($arrayobject );
						$this->traceNodeList [$i] = $AlibabaLogisticsOpenPlatformTraceNodeResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "logisticsId", $this->arrayResult )) {
    			$this->logisticsId = $arrayResult['logisticsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsBillNo", $this->arrayResult )) {
    			$this->logisticsBillNo = $arrayResult['logisticsBillNo'];
    			}
    		    	    			    		    		if (array_key_exists ( "logisticsSteps", $this->arrayResult )) {
    		$logisticsStepsResult=$arrayResult['logisticsSteps'];
    			$this->logisticsSteps = new AlibabaLogisticsOpenPlatformLogisticsStep();
    			$this->logisticsSteps->setStdResult ( $logisticsStepsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "traceNodeList", $this->arrayResult )) {
    		$traceNodeListResult=$arrayResult['traceNodeList'];
    			$this->traceNodeList = new AlibabaLogisticsOpenPlatformTraceNode();
    			$this->traceNodeList->setStdResult ( $traceNodeListResult);
    		}
    		    	    		}
 
   
}
?>