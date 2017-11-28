<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaUnicomRefundModel extends SDKDomain {

       	
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
    
        	
    private $state;
    
        /**
    * @return 挂起状态： 11联通方申请挂起，12联通方取消挂起 21 工单处理完毕 22 工单确认无法处理 23工单处理完成3天后，默认取消挂起
    */
        public function getState() {
        return $this->state;
    }
    
    /**
     * 设置挂起状态： 11联通方申请挂起，12联通方取消挂起 21 工单处理完毕 22 工单确认无法处理 23工单处理完成3天后，默认取消挂起     
     * @param Integer $state     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setState( $state) {
        $this->state = $state;
    }
    
        	
    private $workType;
    
        /**
    * @return 工单挂起类型 1为未收到，2为退货，3为换货
    */
        public function getWorkType() {
        return $this->workType;
    }
    
    /**
     * 设置工单挂起类型 1为未收到，2为退货，3为换货     
     * @param Integer $workType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWorkType( $workType) {
        $this->workType = $workType;
    }
    
        	
    private $workInfo;
    
        /**
    * @return 工单最新简要描述
    */
        public function getWorkInfo() {
        return $this->workInfo;
    }
    
    /**
     * 设置工单最新简要描述     
     * @param String $workInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWorkInfo( $workInfo) {
        $this->workInfo = $workInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "parentOrderId", $this->stdResult )) {
    				$this->parentOrderId = $this->stdResult->{"parentOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "state", $this->stdResult )) {
    				$this->state = $this->stdResult->{"state"};
    			}
    			    		    				    			    			if (array_key_exists ( "workType", $this->stdResult )) {
    				$this->workType = $this->stdResult->{"workType"};
    			}
    			    		    				    			    			if (array_key_exists ( "workInfo", $this->stdResult )) {
    				$this->workInfo = $this->stdResult->{"workInfo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "parentOrderId", $this->arrayResult )) {
    			$this->parentOrderId = $arrayResult['parentOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "state", $this->arrayResult )) {
    			$this->state = $arrayResult['state'];
    			}
    		    	    			    		    			if (array_key_exists ( "workType", $this->arrayResult )) {
    			$this->workType = $arrayResult['workType'];
    			}
    		    	    			    		    			if (array_key_exists ( "workInfo", $this->arrayResult )) {
    			$this->workInfo = $arrayResult['workInfo'];
    			}
    		    	    		}
 
   
}
?>