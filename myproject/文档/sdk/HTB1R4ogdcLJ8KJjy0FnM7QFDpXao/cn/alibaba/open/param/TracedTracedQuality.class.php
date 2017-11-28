<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedTracedQuality extends SDKDomain {

       	
    private $name;
    
        /**
    * @return 评估的项目
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置评估的项目     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $text;
    
        /**
    * @return 评估的内容
    */
        public function getText() {
        return $this->text;
    }
    
    /**
     * 设置评估的内容     
     * @param String $text     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setText( $text) {
        $this->text = $text;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "text", $this->stdResult )) {
    				$this->text = $this->stdResult->{"text"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "text", $this->arrayResult )) {
    			$this->text = $arrayResult['text'];
    			}
    		    	    		}
 
   
}
?>