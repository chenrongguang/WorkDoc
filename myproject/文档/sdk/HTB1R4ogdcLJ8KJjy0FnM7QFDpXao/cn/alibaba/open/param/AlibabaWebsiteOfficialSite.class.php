<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaWebsiteOfficialSite extends SDKDomain {

       	
    private $content;
    
        /**
    * @return 信息详细内容
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置信息详细内容     
     * @param String $content     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
        	
    private $lastModified;
    
        /**
    * @return 信息最后更改时间
    */
        public function getLastModified() {
        return $this->lastModified;
    }
    
    /**
     * 设置信息最后更改时间     
     * @param Date $lastModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLastModified( $lastModified) {
        $this->lastModified = $lastModified;
    }
    
        	
    private $name;
    
        /**
    * @return 信息名字
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置信息名字     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $categoryKey;
    
        /**
    * @return 信息所属类目的key
    */
        public function getCategoryKey() {
        return $this->categoryKey;
    }
    
    /**
     * 设置信息所属类目的key     
     * @param String $categoryKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryKey( $categoryKey) {
        $this->categoryKey = $categoryKey;
    }
    
        	
    private $infoSource;
    
        /**
    * @return 信息来源
    */
        public function getInfoSource() {
        return $this->infoSource;
    }
    
    /**
     * 设置信息来源     
     * @param String $infoSource     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInfoSource( $infoSource) {
        $this->infoSource = $infoSource;
    }
    
        	
    private $instanceKey;
    
        /**
    * @return 信息key
    */
        public function getInstanceKey() {
        return $this->instanceKey;
    }
    
    /**
     * 设置信息key     
     * @param String $instanceKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstanceKey( $instanceKey) {
        $this->instanceKey = $instanceKey;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastModified", $this->stdResult )) {
    				$this->lastModified = $this->stdResult->{"lastModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryKey", $this->stdResult )) {
    				$this->categoryKey = $this->stdResult->{"categoryKey"};
    			}
    			    		    				    			    			if (array_key_exists ( "infoSource", $this->stdResult )) {
    				$this->infoSource = $this->stdResult->{"infoSource"};
    			}
    			    		    				    			    			if (array_key_exists ( "instanceKey", $this->stdResult )) {
    				$this->instanceKey = $this->stdResult->{"instanceKey"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['content'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastModified", $this->arrayResult )) {
    			$this->lastModified = $arrayResult['lastModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryKey", $this->arrayResult )) {
    			$this->categoryKey = $arrayResult['categoryKey'];
    			}
    		    	    			    		    			if (array_key_exists ( "infoSource", $this->arrayResult )) {
    			$this->infoSource = $arrayResult['infoSource'];
    			}
    		    	    			    		    			if (array_key_exists ( "instanceKey", $this->arrayResult )) {
    			$this->instanceKey = $arrayResult['instanceKey'];
    			}
    		    	    		}
 
   
}
?>