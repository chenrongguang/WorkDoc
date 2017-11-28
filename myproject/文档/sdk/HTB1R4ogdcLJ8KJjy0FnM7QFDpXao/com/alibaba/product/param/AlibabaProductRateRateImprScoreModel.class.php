<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductRateRateImprScoreModel extends SDKDomain {

       	
    private $dimension;
    
        /**
    * @return 
    */
        public function getDimension() {
        return $this->dimension;
    }
    
    /**
     * 设置     
     * @param Long $dimension     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDimension( $dimension) {
        $this->dimension = $dimension;
    }
    
        	
    private $attrShortName;
    
        /**
    * @return 
    */
        public function getAttrShortName() {
        return $this->attrShortName;
    }
    
    /**
     * 设置     
     * @param String $attrShortName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrShortName( $attrShortName) {
        $this->attrShortName = $attrShortName;
    }
    
        	
    private $name;
    
        /**
    * @return 
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $ruleId;
    
        /**
    * @return 
    */
        public function getRuleId() {
        return $this->ruleId;
    }
    
    /**
     * 设置     
     * @param Long $ruleId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRuleId( $ruleId) {
        $this->ruleId = $ruleId;
    }
    
        	
    private $score;
    
        /**
    * @return 
    */
        public function getScore() {
        return $this->score;
    }
    
    /**
     * 设置     
     * @param Long $score     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setScore( $score) {
        $this->score = $score;
    }
    
        	
    private $shortName;
    
        /**
    * @return 
    */
        public function getShortName() {
        return $this->shortName;
    }
    
    /**
     * 设置     
     * @param String $shortName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShortName( $shortName) {
        $this->shortName = $shortName;
    }
    
        	
    private $attrName;
    
        /**
    * @return 
    */
        public function getAttrName() {
        return $this->attrName;
    }
    
    /**
     * 设置     
     * @param String $attrName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrName( $attrName) {
        $this->attrName = $attrName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "dimension", $this->stdResult )) {
    				$this->dimension = $this->stdResult->{"dimension"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrShortName", $this->stdResult )) {
    				$this->attrShortName = $this->stdResult->{"attrShortName"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "ruleId", $this->stdResult )) {
    				$this->ruleId = $this->stdResult->{"ruleId"};
    			}
    			    		    				    			    			if (array_key_exists ( "score", $this->stdResult )) {
    				$this->score = $this->stdResult->{"score"};
    			}
    			    		    				    			    			if (array_key_exists ( "shortName", $this->stdResult )) {
    				$this->shortName = $this->stdResult->{"shortName"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrName", $this->stdResult )) {
    				$this->attrName = $this->stdResult->{"attrName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "dimension", $this->arrayResult )) {
    			$this->dimension = $arrayResult['dimension'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrShortName", $this->arrayResult )) {
    			$this->attrShortName = $arrayResult['attrShortName'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "ruleId", $this->arrayResult )) {
    			$this->ruleId = $arrayResult['ruleId'];
    			}
    		    	    			    		    			if (array_key_exists ( "score", $this->arrayResult )) {
    			$this->score = $arrayResult['score'];
    			}
    		    	    			    		    			if (array_key_exists ( "shortName", $this->arrayResult )) {
    			$this->shortName = $arrayResult['shortName'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrName", $this->arrayResult )) {
    			$this->attrName = $arrayResult['attrName'];
    			}
    		    	    		}
 
   
}
?>