<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureProductTask extends SDKDomain {

       	
    private $productCode;
    
        /**
    * @return 需求单号(款号)
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置需求单号(款号)     
     * @param String $productCode     
     * 参数示例：<pre>THZ0001ABG101</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>2017-01-01 08:00:09</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre>2017-01-01 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $taskKey;
    
        /**
    * @return 任务标识
    */
        public function getTaskKey() {
        return $this->taskKey;
    }
    
    /**
     * 设置任务标识     
     * @param String $taskKey     
     * 参数示例：<pre>payFent</pre>     
     * 此参数必填     */
    public function setTaskKey( $taskKey) {
        $this->taskKey = $taskKey;
    }
    
        	
    private $taskName;
    
        /**
    * @return 任务名称
    */
        public function getTaskName() {
        return $this->taskName;
    }
    
    /**
     * 设置任务名称     
     * @param String $taskName     
     * 参数示例：<pre>打样支付</pre>     
     * 此参数必填     */
    public function setTaskName( $taskName) {
        $this->taskName = $taskName;
    }
    
        	
    private $preTaskKey;
    
        /**
    * @return 前置任务标识
    */
        public function getPreTaskKey() {
        return $this->preTaskKey;
    }
    
    /**
     * 设置前置任务标识     
     * @param String $preTaskKey     
     * 参数示例：<pre>receiveFent</pre>     
     * 此参数必填     */
    public function setPreTaskKey( $preTaskKey) {
        $this->preTaskKey = $preTaskKey;
    }
    
        	
    private $gmtStart;
    
        /**
    * @return 初始计划时间
    */
        public function getGmtStart() {
        return $this->gmtStart;
    }
    
    /**
     * 设置初始计划时间     
     * @param Date $gmtStart     
     * 参数示例：<pre>2017-02-01 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtStart( $gmtStart) {
        $this->gmtStart = $gmtStart;
    }
    
        	
    private $gmtPlan;
    
        /**
    * @return 当前计划时间
    */
        public function getGmtPlan() {
        return $this->gmtPlan;
    }
    
    /**
     * 设置当前计划时间     
     * @param Date $gmtPlan     
     * 参数示例：<pre>2017-02-02 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtPlan( $gmtPlan) {
        $this->gmtPlan = $gmtPlan;
    }
    
        	
    private $gmtActual;
    
        /**
    * @return 实际完成时间
    */
        public function getGmtActual() {
        return $this->gmtActual;
    }
    
    /**
     * 设置实际完成时间     
     * @param Date $gmtActual     
     * 参数示例：<pre>2017-02-02 09:00:09</pre>     
     * 此参数必填     */
    public function setGmtActual( $gmtActual) {
        $this->gmtActual = $gmtActual;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskKey", $this->stdResult )) {
    				$this->taskKey = $this->stdResult->{"taskKey"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskName", $this->stdResult )) {
    				$this->taskName = $this->stdResult->{"taskName"};
    			}
    			    		    				    			    			if (array_key_exists ( "preTaskKey", $this->stdResult )) {
    				$this->preTaskKey = $this->stdResult->{"preTaskKey"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtStart", $this->stdResult )) {
    				$this->gmtStart = $this->stdResult->{"gmtStart"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtPlan", $this->stdResult )) {
    				$this->gmtPlan = $this->stdResult->{"gmtPlan"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtActual", $this->stdResult )) {
    				$this->gmtActual = $this->stdResult->{"gmtActual"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskKey", $this->arrayResult )) {
    			$this->taskKey = $arrayResult['taskKey'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskName", $this->arrayResult )) {
    			$this->taskName = $arrayResult['taskName'];
    			}
    		    	    			    		    			if (array_key_exists ( "preTaskKey", $this->arrayResult )) {
    			$this->preTaskKey = $arrayResult['preTaskKey'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtStart", $this->arrayResult )) {
    			$this->gmtStart = $arrayResult['gmtStart'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtPlan", $this->arrayResult )) {
    			$this->gmtPlan = $arrayResult['gmtPlan'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtActual", $this->arrayResult )) {
    			$this->gmtActual = $arrayResult['gmtActual'];
    			}
    		    	    		}
 
   
}
?>