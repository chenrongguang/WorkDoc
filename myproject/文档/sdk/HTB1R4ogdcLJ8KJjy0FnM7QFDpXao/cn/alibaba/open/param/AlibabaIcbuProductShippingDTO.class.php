<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductShippingDTO extends SDKDomain {

       	
    private $weight;
    
        /**
    * @return 
    */
        public function getWeight() {
        return $this->weight;
    }
    
    /**
     * 设置     
     * @param String $weight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWeight( $weight) {
        $this->weight = $weight;
    }
    
        	
    private $volume;
    
        /**
    * @return 
    */
        public function getVolume() {
        return $this->volume;
    }
    
    /**
     * 设置     
     * @param String $volume     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVolume( $volume) {
        $this->volume = $volume;
    }
    
        	
    private $weightUnitType;
    
        /**
    * @return 
    */
        public function getWeightUnitType() {
        return $this->weightUnitType;
    }
    
    /**
     * 设置     
     * @param Integer $weightUnitType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWeightUnitType( $weightUnitType) {
        $this->weightUnitType = $weightUnitType;
    }
    
        	
    private $shippingTemplateId;
    
        /**
    * @return 
    */
        public function getShippingTemplateId() {
        return $this->shippingTemplateId;
    }
    
    /**
     * 设置     
     * @param Long $shippingTemplateId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShippingTemplateId( $shippingTemplateId) {
        $this->shippingTemplateId = $shippingTemplateId;
    }
    
        	
    private $size;
    
        /**
    * @return 
    */
        public function getSize() {
        return $this->size;
    }
    
    /**
     * 设置     
     * @param String $size     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSize( $size) {
        $this->size = $size;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "weight", $this->stdResult )) {
    				$this->weight = $this->stdResult->{"weight"};
    			}
    			    		    				    			    			if (array_key_exists ( "volume", $this->stdResult )) {
    				$this->volume = $this->stdResult->{"volume"};
    			}
    			    		    				    			    			if (array_key_exists ( "weightUnitType", $this->stdResult )) {
    				$this->weightUnitType = $this->stdResult->{"weightUnitType"};
    			}
    			    		    				    			    			if (array_key_exists ( "shippingTemplateId", $this->stdResult )) {
    				$this->shippingTemplateId = $this->stdResult->{"shippingTemplateId"};
    			}
    			    		    				    			    			if (array_key_exists ( "size", $this->stdResult )) {
    				$this->size = $this->stdResult->{"size"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "weight", $this->arrayResult )) {
    			$this->weight = $arrayResult['weight'];
    			}
    		    	    			    		    			if (array_key_exists ( "volume", $this->arrayResult )) {
    			$this->volume = $arrayResult['volume'];
    			}
    		    	    			    		    			if (array_key_exists ( "weightUnitType", $this->arrayResult )) {
    			$this->weightUnitType = $arrayResult['weightUnitType'];
    			}
    		    	    			    		    			if (array_key_exists ( "shippingTemplateId", $this->arrayResult )) {
    			$this->shippingTemplateId = $arrayResult['shippingTemplateId'];
    			}
    		    	    			    		    			if (array_key_exists ( "size", $this->arrayResult )) {
    			$this->size = $arrayResult['size'];
    			}
    		    	    		}
 
   
}
?>