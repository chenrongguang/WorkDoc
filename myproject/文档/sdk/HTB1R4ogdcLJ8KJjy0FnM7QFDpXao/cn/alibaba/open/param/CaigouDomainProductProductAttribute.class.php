<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouDomainProductProductAttribute extends SDKDomain {

       	
    private $name;
    
        /**
    * @return 属性名
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置属性名     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $isKeyFeature;
    
        /**
    * @return 是否关键属性
    */
        public function getIsKeyFeature() {
        return $this->isKeyFeature;
    }
    
    /**
     * 设置是否关键属性     
     * @param Boolean $isKeyFeature     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsKeyFeature( $isKeyFeature) {
        $this->isKeyFeature = $isKeyFeature;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $values;
    
        /**
    * @return 属性值
    */
        public function getValues() {
        return $this->values;
    }
    
    /**
     * 设置属性值     
     * @param array include @see String[] $values     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValues( $values) {
        $this->values = $values;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "isKeyFeature", $this->stdResult )) {
    				$this->isKeyFeature = $this->stdResult->{"isKeyFeature"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "values", $this->stdResult )) {
    				$this->values = $this->stdResult->{"values"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "isKeyFeature", $this->arrayResult )) {
    			$this->isKeyFeature = $arrayResult['isKeyFeature'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "values", $this->arrayResult )) {
    			$this->values = $arrayResult['values'];
    			}
    		    	    		}
 
   
}
?>