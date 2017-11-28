<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureMutableProductionPlan extends SDKDomain {

       	
    private $planDate;
    
        /**
    * @return 当前计划日期
    */
        public function getPlanDate() {
        return $this->planDate;
    }
    
    /**
     * 设置当前计划日期     
     * @param Date $planDate     
     * 参数示例：<pre>2016-03-01</pre>     
     * 此参数必填     */
    public function setPlanDate( $planDate) {
        $this->planDate = $planDate;
    }
    
        	
    private $productionCapacity;
    
        /**
    * @return 工厂产能每天最大产量（件）
    */
        public function getProductionCapacity() {
        return $this->productionCapacity;
    }
    
    /**
     * 设置工厂产能每天最大产量（件）     
     * @param Integer $productionCapacity     
     * 参数示例：<pre>500</pre>     
     * 此参数必填     */
    public function setProductionCapacity( $productionCapacity) {
        $this->productionCapacity = $productionCapacity;
    }
    
        	
    private $productionOccupy;
    
        /**
    * @return 当天产能占用数量
    */
        public function getProductionOccupy() {
        return $this->productionOccupy;
    }
    
    /**
     * 设置当天产能占用数量     
     * @param Integer $productionOccupy     
     * 参数示例：<pre>300</pre>     
     * 此参数必填     */
    public function setProductionOccupy( $productionOccupy) {
        $this->productionOccupy = $productionOccupy;
    }
    
        	
    private $productionUnit;
    
        /**
    * @return 工厂产能单元
    */
        public function getProductionUnit() {
        return $this->productionUnit;
    }
    
    /**
     * 设置工厂产能单元     
     * @param String $productionUnit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setProductionUnit( $productionUnit) {
        $this->productionUnit = $productionUnit;
    }
    
        	
    private $taskCount;
    
        /**
    * @return 任务数
    */
        public function getTaskCount() {
        return $this->taskCount;
    }
    
    /**
     * 设置任务数     
     * @param Integer $taskCount     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setTaskCount( $taskCount) {
        $this->taskCount = $taskCount;
    }
    
        	
    private $taskList;
    
        /**
    * @return 任务清单(JSON格式)
    */
        public function getTaskList() {
        return $this->taskList;
    }
    
    /**
     * 设置任务清单(JSON格式)     
     * @param String $taskList     
     * 参数示例：<pre>[{
“客户”:“中山Ａ”,
“货号”: “THZ0001x..”,
“今日计划产量”：“50“,
“预计完成时间”: “2016-02-06”, …
},…]</pre>     
     * 此参数必填     */
    public function setTaskList( $taskList) {
        $this->taskList = $taskList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "planDate", $this->stdResult )) {
    				$this->planDate = $this->stdResult->{"planDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "productionCapacity", $this->stdResult )) {
    				$this->productionCapacity = $this->stdResult->{"productionCapacity"};
    			}
    			    		    				    			    			if (array_key_exists ( "productionOccupy", $this->stdResult )) {
    				$this->productionOccupy = $this->stdResult->{"productionOccupy"};
    			}
    			    		    				    			    			if (array_key_exists ( "productionUnit", $this->stdResult )) {
    				$this->productionUnit = $this->stdResult->{"productionUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskCount", $this->stdResult )) {
    				$this->taskCount = $this->stdResult->{"taskCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskList", $this->stdResult )) {
    				$this->taskList = $this->stdResult->{"taskList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "planDate", $this->arrayResult )) {
    			$this->planDate = $arrayResult['planDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "productionCapacity", $this->arrayResult )) {
    			$this->productionCapacity = $arrayResult['productionCapacity'];
    			}
    		    	    			    		    			if (array_key_exists ( "productionOccupy", $this->arrayResult )) {
    			$this->productionOccupy = $arrayResult['productionOccupy'];
    			}
    		    	    			    		    			if (array_key_exists ( "productionUnit", $this->arrayResult )) {
    			$this->productionUnit = $arrayResult['productionUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskCount", $this->arrayResult )) {
    			$this->taskCount = $arrayResult['taskCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskList", $this->arrayResult )) {
    			$this->taskList = $arrayResult['taskList'];
    			}
    		    	    		}
 
   
}
?>