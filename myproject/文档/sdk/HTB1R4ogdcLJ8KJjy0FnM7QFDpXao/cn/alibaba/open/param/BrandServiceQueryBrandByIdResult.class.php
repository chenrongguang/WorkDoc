<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandServiceQueryBrandByIdResult {

        	
    private $id;
    
        /**
    * @return 品牌id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置品牌id     
     * @param Long $id     
          
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 品牌名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置品牌名称     
     * @param String $name     
          
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $catIds;
    
        /**
    * @return 发布类目id
    */
        public function getCatIds() {
        return $this->catIds;
    }
    
    /**
     * 设置发布类目id     
     * @param array include @see Long[] $catIds     
          
     * 此参数必填     */
    public function setCatIds( $catIds) {
        $this->catIds = $catIds;
    }
    
        	
    private $attrs;
    
        /**
    * @return 品牌属性map
    */
        public function getAttrs() {
        return $this->attrs;
    }
    
    /**
     * 设置品牌属性map     
     * @param Map $attrs     
          
     * 此参数必填     */
    public function setAttrs(array $attrs) {
        $this->attrs = $attrs;
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
    			    		    				    			    			if (array_key_exists ( "catIds", $this->stdResult )) {
    				$this->catIds = $this->stdResult->{"catIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrs", $this->stdResult )) {
    				$this->attrs = $this->stdResult->{"attrs"};
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
    		    	    			    		    			if (array_key_exists ( "catIds", $this->arrayResult )) {
    			$this->catIds = $arrayResult['catIds'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrs", $this->arrayResult )) {
    			$this->attrs = $arrayResult['attrs'];
    			}
    		    	    		}

}
?>