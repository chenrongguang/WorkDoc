<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaCategoryAttributeInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaCategoryPostLevelAttrRel.class.php');

class AlibabaCategoryAttributeGetResult {

        	
    private $attributes;
    
        /**
    * @return 类目属性信息
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置类目属性信息     
     * @param array include @see AlibabaCategoryAttributeInfo[] $attributes     
          
     * 此参数必填     */
    public function setAttributes(AlibabaCategoryAttributeInfo $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $levelAttrRelList;
    
        /**
    * @return (废弃)类目属性级联关系，只有1688业务返回返回该字段
    */
        public function getLevelAttrRelList() {
        return $this->levelAttrRelList;
    }
    
    /**
     * 设置(废弃)类目属性级联关系，只有1688业务返回返回该字段     
     * @param array include @see AlibabaCategoryPostLevelAttrRel[] $levelAttrRelList     
          
     * 此参数必填     */
    public function setLevelAttrRelList(AlibabaCategoryPostLevelAttrRel $levelAttrRelList) {
        $this->levelAttrRelList = $levelAttrRelList;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误描述
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误描述     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $attributeLevelMapStr;
    
        /**
    * @return 级联信息字符串，可强转成map。冒号前为属性id，冒号后面为属性值id >表示层级关系
    */
        public function getAttributeLevelMapStr() {
        return $this->attributeLevelMapStr;
    }
    
    /**
     * 设置级联信息字符串，可强转成map。冒号前为属性id，冒号后面为属性值id >表示层级关系     
     * @param String $attributeLevelMapStr     
          
     * 此参数必填     */
    public function setAttributeLevelMapStr( $attributeLevelMapStr) {
        $this->attributeLevelMapStr = $attributeLevelMapStr;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    			$attributesResult=$this->stdResult->{"attributes"};
    				$object = json_decode ( json_encode ( $attributesResult ), true );
					$this->attributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCategoryAttributeInfoResult=new AlibabaCategoryAttributeInfo();
						$AlibabaCategoryAttributeInfoResult->setArrayResult($arrayobject );
						$this->attributes [$i] = $AlibabaCategoryAttributeInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "levelAttrRelList", $this->stdResult )) {
    			$levelAttrRelListResult=$this->stdResult->{"levelAttrRelList"};
    				$object = json_decode ( json_encode ( $levelAttrRelListResult ), true );
					$this->levelAttrRelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCategoryPostLevelAttrRelResult=new AlibabaCategoryPostLevelAttrRel();
						$AlibabaCategoryPostLevelAttrRelResult->setArrayResult($arrayobject );
						$this->levelAttrRelList [$i] = $AlibabaCategoryPostLevelAttrRelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributeLevelMapStr", $this->stdResult )) {
    				$this->attributeLevelMapStr = $this->stdResult->{"attributeLevelMapStr"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['attributes'];
    			$this->attributes = new AlibabaCategoryAttributeInfo();
    			$this->attributes->setStdResult ( $attributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "levelAttrRelList", $this->arrayResult )) {
    		$levelAttrRelListResult=$arrayResult['levelAttrRelList'];
    			$this->levelAttrRelList = new AlibabaCategoryPostLevelAttrRel();
    			$this->levelAttrRelList->setStdResult ( $levelAttrRelListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['errorMsg'];
    			}
    		    	    			    		    			if (array_key_exists ( "attributeLevelMapStr", $this->arrayResult )) {
    			$this->attributeLevelMapStr = $arrayResult['attributeLevelMapStr'];
    			}
    		    	    		}

}
?>