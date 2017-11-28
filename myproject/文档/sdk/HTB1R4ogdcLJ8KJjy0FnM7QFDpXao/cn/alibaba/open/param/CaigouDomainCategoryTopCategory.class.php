<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainCategoryTwoCategory.class.php');

class CaigouDomainCategoryTopCategory extends SDKDomain {

       	
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
    
        	
    private $memberId;
    
        /**
    * @return 类目所属会员在1688的会员id
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置类目所属会员在1688的会员id     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $parentId;
    
        /**
    * @return 类目所属父类目在1688平台的id
    */
        public function getParentId() {
        return $this->parentId;
    }
    
    /**
     * 设置类目所属父类目在1688平台的id     
     * @param Long $parentId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentId( $parentId) {
        $this->parentId = $parentId;
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
    
        	
    private $categoryId;
    
        /**
    * @return 类目在1688平台上的主键id
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置类目在1688平台上的主键id     
     * @param Long $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $jointCategoryCode;
    
        /**
    * @return 类目在外部系统的主键
    */
        public function getJointCategoryCode() {
        return $this->jointCategoryCode;
    }
    
    /**
     * 设置类目在外部系统的主键     
     * @param String $jointCategoryCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setJointCategoryCode( $jointCategoryCode) {
        $this->jointCategoryCode = $jointCategoryCode;
    }
    
        	
    private $jointParentCategorycode;
    
        /**
    * @return 类目所属父类目在外部系统的主键
    */
        public function getJointParentCategorycode() {
        return $this->jointParentCategorycode;
    }
    
    /**
     * 设置类目所属父类目在外部系统的主键     
     * @param String $jointParentCategorycode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setJointParentCategorycode( $jointParentCategorycode) {
        $this->jointParentCategorycode = $jointParentCategorycode;
    }
    
        	
    private $children;
    
        /**
    * @return 子类目列表
    */
        public function getChildren() {
        return $this->children;
    }
    
    /**
     * 设置子类目列表     
     * @param array include @see CaigouDomainCategoryTwoCategory[] $children     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildren(CaigouDomainCategoryTwoCategory $children) {
        $this->children = $children;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryName", $this->stdResult )) {
    				$this->categoryName = $this->stdResult->{"categoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentId", $this->stdResult )) {
    				$this->parentId = $this->stdResult->{"parentId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
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
						$CaigouDomainCategoryTwoCategoryResult=new CaigouDomainCategoryTwoCategory();
						$CaigouDomainCategoryTwoCategoryResult->setArrayResult($arrayobject );
						$this->children [$i] = $CaigouDomainCategoryTwoCategoryResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "categoryName", $this->arrayResult )) {
    			$this->categoryName = $arrayResult['categoryName'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentId", $this->arrayResult )) {
    			$this->parentId = $arrayResult['parentId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['categoryId'];
    			}
    		    	    			    		    			if (array_key_exists ( "jointCategoryCode", $this->arrayResult )) {
    			$this->jointCategoryCode = $arrayResult['jointCategoryCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "jointParentCategorycode", $this->arrayResult )) {
    			$this->jointParentCategorycode = $arrayResult['jointParentCategorycode'];
    			}
    		    	    			    		    		if (array_key_exists ( "children", $this->arrayResult )) {
    		$childrenResult=$arrayResult['children'];
    			$this->children = new CaigouDomainCategoryTwoCategory();
    			$this->children->setStdResult ( $childrenResult);
    		}
    		    	    		}
 
   
}
?>