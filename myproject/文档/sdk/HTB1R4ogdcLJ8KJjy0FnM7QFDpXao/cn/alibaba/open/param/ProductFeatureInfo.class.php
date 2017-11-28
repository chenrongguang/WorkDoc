<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ProductFeatureInfo extends SDKDomain {

       	
    private $propId;
    
        /**
    * @return 属性ID。版本1不支持返回属性ID
    */
        public function getPropId() {
        return $this->propId;
    }
    
    /**
     * 设置属性ID。版本1不支持返回属性ID     
     * @param Integer $propId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPropId( $propId) {
        $this->propId = $propId;
    }
    
        	
    private $propName;
    
        /**
    * @return 属性名称
    */
        public function getPropName() {
        return $this->propName;
    }
    
    /**
     * 设置属性名称     
     * @param String $propName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPropName( $propName) {
        $this->propName = $propName;
    }
    
        	
    private $propValueId;
    
        /**
    * @return 属性值ID。版本1不支持返回属性值ID
    */
        public function getPropValueId() {
        return $this->propValueId;
    }
    
    /**
     * 设置属性值ID。版本1不支持返回属性值ID     
     * @param Integer $propValueId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPropValueId( $propValueId) {
        $this->propValueId = $propValueId;
    }
    
        	
    private $propValue;
    
        /**
    * @return 属性值
    */
        public function getPropValue() {
        return $this->propValue;
    }
    
    /**
     * 设置属性值     
     * @param String $propValue     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPropValue( $propValue) {
        $this->propValue = $propValue;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "propId", $this->stdResult )) {
    				$this->propId = $this->stdResult->{"propId"};
    			}
    			    		    				    			    			if (array_key_exists ( "propName", $this->stdResult )) {
    				$this->propName = $this->stdResult->{"propName"};
    			}
    			    		    				    			    			if (array_key_exists ( "propValueId", $this->stdResult )) {
    				$this->propValueId = $this->stdResult->{"propValueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "propValue", $this->stdResult )) {
    				$this->propValue = $this->stdResult->{"propValue"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "propId", $this->arrayResult )) {
    			$this->propId = $arrayResult['propId'];
    			}
    		    	    			    		    			if (array_key_exists ( "propName", $this->arrayResult )) {
    			$this->propName = $arrayResult['propName'];
    			}
    		    	    			    		    			if (array_key_exists ( "propValueId", $this->arrayResult )) {
    			$this->propValueId = $arrayResult['propValueId'];
    			}
    		    	    			    		    			if (array_key_exists ( "propValue", $this->arrayResult )) {
    			$this->propValue = $arrayResult['propValue'];
    			}
    		    	    		}
 
   
}
?>