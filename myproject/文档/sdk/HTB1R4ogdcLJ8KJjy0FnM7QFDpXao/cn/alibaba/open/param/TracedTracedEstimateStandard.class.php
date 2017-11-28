<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedTracedEstimateStandard extends SDKDomain {

       	
    private $belongs;
    
        /**
    * @return 标准名称
    */
        public function getBelongs() {
        return $this->belongs;
    }
    
    /**
     * 设置标准名称     
     * @param String $belongs     
     * 参数示例：<pre>如：国家标准</pre>     
     * 此参数必填     */
    public function setBelongs( $belongs) {
        $this->belongs = $belongs;
    }
    
        	
    private $name;
    
        /**
    * @return 标准项目
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置标准项目     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $type;
    
        /**
    * @return 标准类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置标准类型     
     * @param String $type     
     * 参数示例：<pre>文本、数字类型</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $text;
    
        /**
    * @return 标准文本内容
    */
        public function getText() {
        return $this->text;
    }
    
    /**
     * 设置标准文本内容     
     * @param String $text     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setText( $text) {
        $this->text = $text;
    }
    
        	
    private $min;
    
        /**
    * @return 标准的最小值
    */
        public function getMin() {
        return $this->min;
    }
    
    /**
     * 设置标准的最小值     
     * @param Double $min     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMin( $min) {
        $this->min = $min;
    }
    
        	
    private $max;
    
        /**
    * @return 标准的最大值
    */
        public function getMax() {
        return $this->max;
    }
    
    /**
     * 设置标准的最大值     
     * @param Double $max     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMax( $max) {
        $this->max = $max;
    }
    
        	
    private $containsMin;
    
        /**
    * @return 是否包含最小值,0不包括，1包括
    */
        public function getContainsMin() {
        return $this->containsMin;
    }
    
    /**
     * 设置是否包含最小值,0不包括，1包括     
     * @param Double $containsMin     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContainsMin( $containsMin) {
        $this->containsMin = $containsMin;
    }
    
        	
    private $containsMax;
    
        /**
    * @return 是否包含最大值，0不包括，1包括
    */
        public function getContainsMax() {
        return $this->containsMax;
    }
    
    /**
     * 设置是否包含最大值，0不包括，1包括     
     * @param Double $containsMax     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContainsMax( $containsMax) {
        $this->containsMax = $containsMax;
    }
    
        	
    private $unit;
    
        /**
    * @return 标准的单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置标准的单位     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "belongs", $this->stdResult )) {
    				$this->belongs = $this->stdResult->{"belongs"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "text", $this->stdResult )) {
    				$this->text = $this->stdResult->{"text"};
    			}
    			    		    				    			    			if (array_key_exists ( "min", $this->stdResult )) {
    				$this->min = $this->stdResult->{"min"};
    			}
    			    		    				    			    			if (array_key_exists ( "max", $this->stdResult )) {
    				$this->max = $this->stdResult->{"max"};
    			}
    			    		    				    			    			if (array_key_exists ( "containsMin", $this->stdResult )) {
    				$this->containsMin = $this->stdResult->{"containsMin"};
    			}
    			    		    				    			    			if (array_key_exists ( "containsMax", $this->stdResult )) {
    				$this->containsMax = $this->stdResult->{"containsMax"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "belongs", $this->arrayResult )) {
    			$this->belongs = $arrayResult['belongs'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "text", $this->arrayResult )) {
    			$this->text = $arrayResult['text'];
    			}
    		    	    			    		    			if (array_key_exists ( "min", $this->arrayResult )) {
    			$this->min = $arrayResult['min'];
    			}
    		    	    			    		    			if (array_key_exists ( "max", $this->arrayResult )) {
    			$this->max = $arrayResult['max'];
    			}
    		    	    			    		    			if (array_key_exists ( "containsMin", $this->arrayResult )) {
    			$this->containsMin = $arrayResult['containsMin'];
    			}
    		    	    			    		    			if (array_key_exists ( "containsMax", $this->arrayResult )) {
    			$this->containsMax = $arrayResult['containsMax'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    		}
 
   
}
?>