<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouApiCommonModelArea extends SDKDomain {

       	
    private $name;
    
        /**
    * @return 地区名
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置地区名     
     * @param String $name     
     * 参数示例：<pre>浙江</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $id;
    
        /**
    * @return 地区代码
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置地区代码     
     * @param Integer $id     
     * 参数示例：<pre>3478</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $parentId;
    
        /**
    * @return 父级地区代码
    */
        public function getParentId() {
        return $this->parentId;
    }
    
    /**
     * 设置父级地区代码     
     * @param Integer $parentId     
     * 参数示例：<pre>1001</pre>     
     * 此参数必填     */
    public function setParentId( $parentId) {
        $this->parentId = $parentId;
    }
    
        	
    private $areaType;
    
        /**
    * @return 地区类型
    */
        public function getAreaType() {
        return $this->areaType;
    }
    
    /**
     * 设置地区类型     
     * @param String $areaType     
     * 参数示例：<pre>province</pre>     
     * 此参数必填     */
    public function setAreaType( $areaType) {
        $this->areaType = $areaType;
    }
    
        	
    private $ordering;
    
        /**
    * @return 
    */
        public function getOrdering() {
        return $this->ordering;
    }
    
    /**
     * 设置     
     * @param Integer $ordering     
     * 参数示例：<pre>574</pre>     
     * 此参数必填     */
    public function setOrdering( $ordering) {
        $this->ordering = $ordering;
    }
    
        	
    private $zip;
    
        /**
    * @return 
    */
        public function getZip() {
        return $this->zip;
    }
    
    /**
     * 设置     
     * @param String $zip     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setZip( $zip) {
        $this->zip = $zip;
    }
    
        	
    private $phoneArea;
    
        /**
    * @return 
    */
        public function getPhoneArea() {
        return $this->phoneArea;
    }
    
    /**
     * 设置     
     * @param String $phoneArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhoneArea( $phoneArea) {
        $this->phoneArea = $phoneArea;
    }
    
        	
    private $defaultSelect;
    
        /**
    * @return 
    */
        public function getDefaultSelect() {
        return $this->defaultSelect;
    }
    
    /**
     * 设置     
     * @param Boolean $defaultSelect     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDefaultSelect( $defaultSelect) {
        $this->defaultSelect = $defaultSelect;
    }
    
        	
    private $disable;
    
        /**
    * @return 
    */
        public function getDisable() {
        return $this->disable;
    }
    
    /**
     * 设置     
     * @param Boolean $disable     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setDisable( $disable) {
        $this->disable = $disable;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentId", $this->stdResult )) {
    				$this->parentId = $this->stdResult->{"parentId"};
    			}
    			    		    				    			    			if (array_key_exists ( "areaType", $this->stdResult )) {
    				$this->areaType = $this->stdResult->{"areaType"};
    			}
    			    		    				    			    			if (array_key_exists ( "ordering", $this->stdResult )) {
    				$this->ordering = $this->stdResult->{"ordering"};
    			}
    			    		    				    			    			if (array_key_exists ( "zip", $this->stdResult )) {
    				$this->zip = $this->stdResult->{"zip"};
    			}
    			    		    				    			    			if (array_key_exists ( "phoneArea", $this->stdResult )) {
    				$this->phoneArea = $this->stdResult->{"phoneArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "defaultSelect", $this->stdResult )) {
    				$this->defaultSelect = $this->stdResult->{"defaultSelect"};
    			}
    			    		    				    			    			if (array_key_exists ( "disable", $this->stdResult )) {
    				$this->disable = $this->stdResult->{"disable"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentId", $this->arrayResult )) {
    			$this->parentId = $arrayResult['parentId'];
    			}
    		    	    			    		    			if (array_key_exists ( "areaType", $this->arrayResult )) {
    			$this->areaType = $arrayResult['areaType'];
    			}
    		    	    			    		    			if (array_key_exists ( "ordering", $this->arrayResult )) {
    			$this->ordering = $arrayResult['ordering'];
    			}
    		    	    			    		    			if (array_key_exists ( "zip", $this->arrayResult )) {
    			$this->zip = $arrayResult['zip'];
    			}
    		    	    			    		    			if (array_key_exists ( "phoneArea", $this->arrayResult )) {
    			$this->phoneArea = $arrayResult['phoneArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "defaultSelect", $this->arrayResult )) {
    			$this->defaultSelect = $arrayResult['defaultSelect'];
    			}
    		    	    			    		    			if (array_key_exists ( "disable", $this->arrayResult )) {
    			$this->disable = $arrayResult['disable'];
    			}
    		    	    		}
 
   
}
?>