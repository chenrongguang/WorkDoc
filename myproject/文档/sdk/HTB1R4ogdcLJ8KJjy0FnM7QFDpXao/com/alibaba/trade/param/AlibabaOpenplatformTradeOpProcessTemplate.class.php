<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOpenplatformTradeOpProcessTemplate extends SDKDomain {

       	
    private $description;
    
        /**
    * @return 描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置描述     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $excludeFixedTemplate;
    
        /**
    * @return 排斥指定模板，字段值为以分号分割的模板code集合
    */
        public function getExcludeFixedTemplate() {
        return $this->excludeFixedTemplate;
    }
    
    /**
     * 设置排斥指定模板，字段值为以分号分割的模板code集合     
     * @param String $excludeFixedTemplate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExcludeFixedTemplate( $excludeFixedTemplate) {
        $this->excludeFixedTemplate = $excludeFixedTemplate;
    }
    
        	
    private $id;
    
        /**
    * @return id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $processFlowDescId;
    
        /**
    * @return 交易类型
    */
        public function getProcessFlowDescId() {
        return $this->processFlowDescId;
    }
    
    /**
     * 设置交易类型     
     * @param Long $processFlowDescId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProcessFlowDescId( $processFlowDescId) {
        $this->processFlowDescId = $processFlowDescId;
    }
    
        	
    private $promise;
    
        /**
    * @return 交易合约
    */
        public function getPromise() {
        return $this->promise;
    }
    
    /**
     * 设置交易合约     
     * @param String $promise     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPromise( $promise) {
        $this->promise = $promise;
    }
    
        	
    private $status;
    
        /**
    * @return normal：新发offer可见；修改offer可见；下单可见 recovery：新发offer不可见；未关联该模板的offer修改不可见；已经关联模板的offer修改可见；下单可见
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置normal：新发offer可见；修改offer可见；下单可见 recovery：新发offer不可见；未关联该模板的offer修改不可见；已经关联模板的offer修改可见；下单可见     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $templateCode;
    
        /**
    * @return code
    */
        public function getTemplateCode() {
        return $this->templateCode;
    }
    
    /**
     * 设置code     
     * @param String $templateCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTemplateCode( $templateCode) {
        $this->templateCode = $templateCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "excludeFixedTemplate", $this->stdResult )) {
    				$this->excludeFixedTemplate = $this->stdResult->{"excludeFixedTemplate"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "processFlowDescId", $this->stdResult )) {
    				$this->processFlowDescId = $this->stdResult->{"processFlowDescId"};
    			}
    			    		    				    			    			if (array_key_exists ( "promise", $this->stdResult )) {
    				$this->promise = $this->stdResult->{"promise"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "templateCode", $this->stdResult )) {
    				$this->templateCode = $this->stdResult->{"templateCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "excludeFixedTemplate", $this->arrayResult )) {
    			$this->excludeFixedTemplate = $arrayResult['excludeFixedTemplate'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "processFlowDescId", $this->arrayResult )) {
    			$this->processFlowDescId = $arrayResult['processFlowDescId'];
    			}
    		    	    			    		    			if (array_key_exists ( "promise", $this->arrayResult )) {
    			$this->promise = $arrayResult['promise'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "templateCode", $this->arrayResult )) {
    			$this->templateCode = $arrayResult['templateCode'];
    			}
    		    	    		}
 
   
}
?>