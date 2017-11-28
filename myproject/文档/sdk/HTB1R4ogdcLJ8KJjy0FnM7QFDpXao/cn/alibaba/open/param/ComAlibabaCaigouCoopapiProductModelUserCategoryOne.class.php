<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductModelUserCategoryTwo.class.php');

class ComAlibabaCaigouCoopapiProductModelUserCategoryOne extends SDKDomain {

       	
    private $categoryId;
    
        /**
    * @return 1688系统中的类目id
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置1688系统中的类目id     
     * @param Long $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $categoryName;
    
        /**
    * @return 类目名称
    */
        public function getCategoryName() {
        return $this->categoryName;
    }
    
    /**
     * 设置类目名称     
     * @param String $categoryName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryName( $categoryName) {
        $this->categoryName = $categoryName;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 类目创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置类目创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 类目修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置类目修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $memberId;
    
        /**
    * @return 类目所属会员memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置类目所属会员memberId     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $parentId;
    
        /**
    * @return 1688系统中所属父类目id
    */
        public function getParentId() {
        return $this->parentId;
    }
    
    /**
     * 设置1688系统中所属父类目id     
     * @param Long $parentId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentId( $parentId) {
        $this->parentId = $parentId;
    }
    
        	
    private $jointCategoryCode;
    
        /**
    * @return 外部业务编码
    */
        public function getJointCategoryCode() {
        return $this->jointCategoryCode;
    }
    
    /**
     * 设置外部业务编码     
     * @param String $jointCategoryCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setJointCategoryCode( $jointCategoryCode) {
        $this->jointCategoryCode = $jointCategoryCode;
    }
    
        	
    private $jointParentCategorycode;
    
        /**
    * @return 父节点外部业务编码
    */
        public function getJointParentCategorycode() {
        return $this->jointParentCategorycode;
    }
    
    /**
     * 设置父节点外部业务编码     
     * @param String $jointParentCategorycode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setJointParentCategorycode( $jointParentCategorycode) {
        $this->jointParentCategorycode = $jointParentCategorycode;
    }
    
        	
    private $children;
    
        /**
    * @return 子类目节点
    */
        public function getChildren() {
        return $this->children;
    }
    
    /**
     * 设置子类目节点     
     * @param array include @see ComAlibabaCaigouCoopapiProductModelUserCategoryTwo[] $children     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildren(ComAlibabaCaigouCoopapiProductModelUserCategoryTwo $children) {
        $this->children = $children;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryName", $this->stdResult )) {
    				$this->categoryName = $this->stdResult->{"categoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentId", $this->stdResult )) {
    				$this->parentId = $this->stdResult->{"parentId"};
    			}
    			    		    				    			    			if (array_key_exists ( "jointCategoryCode", $this->stdResult )) {
    				$this->jointCategoryCode = $this->stdResult->{"jointCategoryCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "jointParentCategorycode", $this->stdResult )) {
    				$this->jointParentCategorycode = $this->stdResult->{"jointParentCategorycode"};
    			}
    			    		    				    			    			if (array_key_exists ( "children", $this->stdResult )) {
    			$childrenResult=$this->stdResult->{"children"};
    				$object = json_decode ( json_encode ( $childrenResult ), true );
					$this->children = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouCoopapiProductModelUserCategoryTwoResult=new ComAlibabaCaigouCoopapiProductModelUserCategoryTwo();
						$ComAlibabaCaigouCoopapiProductModelUserCategoryTwoResult->setArrayResult($arrayobject );
						$this->children [$i] = $ComAlibabaCaigouCoopapiProductModelUserCategoryTwoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['categoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryName", $this->arrayResult )) {
    			$this->categoryName = $arrayResult['categoryName'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentId", $this->arrayResult )) {
    			$this->parentId = $arrayResult['parentId'];
    			}
    		    	    			    		    			if (array_key_exists ( "jointCategoryCode", $this->arrayResult )) {
    			$this->jointCategoryCode = $arrayResult['jointCategoryCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "jointParentCategorycode", $this->arrayResult )) {
    			$this->jointParentCategorycode = $arrayResult['jointParentCategorycode'];
    			}
    		    	    			    		    		if (array_key_exists ( "children", $this->arrayResult )) {
    		$childrenResult=$arrayResult['children'];
    			$this->children = new ComAlibabaCaigouCoopapiProductModelUserCategoryTwo();
    			$this->children->setStdResult ( $childrenResult);
    		}
    		    	    		}
 
   
}
?>