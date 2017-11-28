<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouCoopapiProductParamWriteUserCategoryCoopParam extends SDKDomain {

       	
    private $categoryName;
    
        /**
    * @return 自定义类目名称
    */
        public function getCategoryName() {
        return $this->categoryName;
    }
    
    /**
     * 设置自定义类目名称     
     * @param String $categoryName     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setCategoryName( $categoryName) {
        $this->categoryName = $categoryName;
    }
    
        	
    private $categoryCode;
    
        /**
    * @return 外部系统中的类目编号
    */
        public function getCategoryCode() {
        return $this->categoryCode;
    }
    
    /**
     * 设置外部系统中的类目编号     
     * @param String $categoryCode     
     * 参数示例：<pre>cat0001</pre>     
     * 此参数必填     */
    public function setCategoryCode( $categoryCode) {
        $this->categoryCode = $categoryCode;
    }
    
        	
    private $parentCategoryCode;
    
        /**
    * @return 外部系统中的父类目编号
    */
        public function getParentCategoryCode() {
        return $this->parentCategoryCode;
    }
    
    /**
     * 设置外部系统中的父类目编号     
     * @param String $parentCategoryCode     
     * 参数示例：<pre>cat0000</pre>     
     * 此参数必填     */
    public function setParentCategoryCode( $parentCategoryCode) {
        $this->parentCategoryCode = $parentCategoryCode;
    }
    
        	
    private $extendAttributes;
    
        /**
    * @return 扩展属性
    */
        public function getExtendAttributes() {
        return $this->extendAttributes;
    }
    
    /**
     * 设置扩展属性     
     * @param String $extendAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtendAttributes( $extendAttributes) {
        $this->extendAttributes = $extendAttributes;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryName", $this->stdResult )) {
    				$this->categoryName = $this->stdResult->{"categoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryCode", $this->stdResult )) {
    				$this->categoryCode = $this->stdResult->{"categoryCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentCategoryCode", $this->stdResult )) {
    				$this->parentCategoryCode = $this->stdResult->{"parentCategoryCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "extendAttributes", $this->stdResult )) {
    				$this->extendAttributes = $this->stdResult->{"extendAttributes"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "categoryName", $this->arrayResult )) {
    			$this->categoryName = $arrayResult['categoryName'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryCode", $this->arrayResult )) {
    			$this->categoryCode = $arrayResult['categoryCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentCategoryCode", $this->arrayResult )) {
    			$this->parentCategoryCode = $arrayResult['parentCategoryCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "extendAttributes", $this->arrayResult )) {
    			$this->extendAttributes = $arrayResult['extendAttributes'];
    			}
    		    	    		}
 
   
}
?>