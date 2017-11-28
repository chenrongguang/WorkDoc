<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SellerCatInfo extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 自定义分类ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置自定义分类ID     
     * @param Integer $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 分类名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置分类名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $ordering;
    
        /**
    * @return 显示顺序
    */
        public function getOrdering() {
        return $this->ordering;
    }
    
    /**
     * 设置显示顺序     
     * @param Integer $ordering     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrdering( $ordering) {
        $this->ordering = $ordering;
    }
    
        	
    private $iconUrl;
    
        /**
    * @return 分类图片URL
    */
        public function getIconUrl() {
        return $this->iconUrl;
    }
    
    /**
     * 设置分类图片URL     
     * @param String $iconUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIconUrl( $iconUrl) {
        $this->iconUrl = $iconUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "ordering", $this->stdResult )) {
    				$this->ordering = $this->stdResult->{"ordering"};
    			}
    			    		    				    			    			if (array_key_exists ( "iconUrl", $this->stdResult )) {
    				$this->iconUrl = $this->stdResult->{"iconUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "ordering", $this->arrayResult )) {
    			$this->ordering = $arrayResult['ordering'];
    			}
    		    	    			    		    			if (array_key_exists ( "iconUrl", $this->arrayResult )) {
    			$this->iconUrl = $arrayResult['iconUrl'];
    			}
    		    	    		}
 
   
}
?>