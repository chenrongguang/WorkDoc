<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuSkuAttrValueDTO extends SDKDomain {

       	
    private $customAttrValueName;
    
        /**
    * @return 
    */
        public function getCustomAttrValueName() {
        return $this->customAttrValueName;
    }
    
    /**
     * 设置     
     * @param String $customAttrValueName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCustomAttrValueName( $customAttrValueName) {
        $this->customAttrValueName = $customAttrValueName;
    }
    
        	
    private $attrValueId;
    
        /**
    * @return 
    */
        public function getAttrValueId() {
        return $this->attrValueId;
    }
    
    /**
     * 设置     
     * @param Integer $attrValueId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrValueId( $attrValueId) {
        $this->attrValueId = $attrValueId;
    }
    
        	
    private $markInfo;
    
        /**
    * @return 
    */
        public function getMarkInfo() {
        return $this->markInfo;
    }
    
    /**
     * 设置     
     * @param String $markInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarkInfo( $markInfo) {
        $this->markInfo = $markInfo;
    }
    
        	
    private $fileName;
    
        /**
    * @return 
    */
        public function getFileName() {
        return $this->fileName;
    }
    
    /**
     * 设置     
     * @param String $fileName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFileName( $fileName) {
        $this->fileName = $fileName;
    }
    
        	
    private $systemAttrValueName;
    
        /**
    * @return 
    */
        public function getSystemAttrValueName() {
        return $this->systemAttrValueName;
    }
    
    /**
     * 设置     
     * @param String $systemAttrValueName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSystemAttrValueName( $systemAttrValueName) {
        $this->systemAttrValueName = $systemAttrValueName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "customAttrValueName", $this->stdResult )) {
    				$this->customAttrValueName = $this->stdResult->{"customAttrValueName"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrValueId", $this->stdResult )) {
    				$this->attrValueId = $this->stdResult->{"attrValueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "markInfo", $this->stdResult )) {
    				$this->markInfo = $this->stdResult->{"markInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "fileName", $this->stdResult )) {
    				$this->fileName = $this->stdResult->{"fileName"};
    			}
    			    		    				    			    			if (array_key_exists ( "systemAttrValueName", $this->stdResult )) {
    				$this->systemAttrValueName = $this->stdResult->{"systemAttrValueName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "customAttrValueName", $this->arrayResult )) {
    			$this->customAttrValueName = $arrayResult['customAttrValueName'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrValueId", $this->arrayResult )) {
    			$this->attrValueId = $arrayResult['attrValueId'];
    			}
    		    	    			    		    			if (array_key_exists ( "markInfo", $this->arrayResult )) {
    			$this->markInfo = $arrayResult['markInfo'];
    			}
    		    	    			    		    			if (array_key_exists ( "fileName", $this->arrayResult )) {
    			$this->fileName = $arrayResult['fileName'];
    			}
    		    	    			    		    			if (array_key_exists ( "systemAttrValueName", $this->arrayResult )) {
    			$this->systemAttrValueName = $arrayResult['systemAttrValueName'];
    			}
    		    	    		}
 
   
}
?>