<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuSkuAttrValueDTO.class.php');

class AlibabaIcbuSkuAttrDTO extends SDKDomain {

       	
    private $attrNameId;
    
        /**
    * @return 
    */
        public function getAttrNameId() {
        return $this->attrNameId;
    }
    
    /**
     * 设置     
     * @param Integer $attrNameId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrNameId( $attrNameId) {
        $this->attrNameId = $attrNameId;
    }
    
        	
    private $attrName;
    
        /**
    * @return 
    */
        public function getAttrName() {
        return $this->attrName;
    }
    
    /**
     * 设置     
     * @param String $attrName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrName( $attrName) {
        $this->attrName = $attrName;
    }
    
        	
    private $attrValues;
    
        /**
    * @return 
    */
        public function getAttrValues() {
        return $this->attrValues;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuSkuAttrValueDTO[] $attrValues     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrValues(AlibabaIcbuSkuAttrValueDTO $attrValues) {
        $this->attrValues = $attrValues;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attrNameId", $this->stdResult )) {
    				$this->attrNameId = $this->stdResult->{"attrNameId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrName", $this->stdResult )) {
    				$this->attrName = $this->stdResult->{"attrName"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrValues", $this->stdResult )) {
    			$attrValuesResult=$this->stdResult->{"attrValues"};
    				$object = json_decode ( json_encode ( $attrValuesResult ), true );
					$this->attrValues = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuSkuAttrValueDTOResult=new AlibabaIcbuSkuAttrValueDTO();
						$AlibabaIcbuSkuAttrValueDTOResult->setArrayResult($arrayobject );
						$this->attrValues [$i] = $AlibabaIcbuSkuAttrValueDTOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "attrNameId", $this->arrayResult )) {
    			$this->attrNameId = $arrayResult['attrNameId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrName", $this->arrayResult )) {
    			$this->attrName = $arrayResult['attrName'];
    			}
    		    	    			    		    		if (array_key_exists ( "attrValues", $this->arrayResult )) {
    		$attrValuesResult=$arrayResult['attrValues'];
    			$this->attrValues = new AlibabaIcbuSkuAttrValueDTO();
    			$this->attrValues->setStdResult ( $attrValuesResult);
    		}
    		    	    		}
 
   
}
?>