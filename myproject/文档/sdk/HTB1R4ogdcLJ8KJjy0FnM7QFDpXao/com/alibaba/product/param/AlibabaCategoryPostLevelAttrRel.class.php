<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCategoryPostLevelAttrRel extends SDKDomain {

       	
    private $fid;
    
        /**
    * @return 属性id
    */
        public function getFid() {
        return $this->fid;
    }
    
    /**
     * 设置属性id     
     * @param Integer $fid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFid( $fid) {
        $this->fid = $fid;
    }
    
        	
    private $subFids;
    
        /**
    * @return 子关联属性
    */
        public function getSubFids() {
        return $this->subFids;
    }
    
    /**
     * 设置子关联属性     
     * @param array include @see Integer[] $subFids     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubFids( $subFids) {
        $this->subFids = $subFids;
    }
    
        	
    private $attrType;
    
        /**
    * @return 0和空都为现货属性层级关系，1为加工属性层级关系，后面其它的可加
    */
        public function getAttrType() {
        return $this->attrType;
    }
    
    /**
     * 设置0和空都为现货属性层级关系，1为加工属性层级关系，后面其它的可加     
     * @param Integer $attrType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrType( $attrType) {
        $this->attrType = $attrType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "fid", $this->stdResult )) {
    				$this->fid = $this->stdResult->{"fid"};
    			}
    			    		    				    			    			if (array_key_exists ( "subFids", $this->stdResult )) {
    				$this->subFids = $this->stdResult->{"subFids"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrType", $this->stdResult )) {
    				$this->attrType = $this->stdResult->{"attrType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "fid", $this->arrayResult )) {
    			$this->fid = $arrayResult['fid'];
    			}
    		    	    			    		    			if (array_key_exists ( "subFids", $this->arrayResult )) {
    			$this->subFids = $arrayResult['subFids'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrType", $this->arrayResult )) {
    			$this->attrType = $arrayResult['attrType'];
    			}
    		    	    		}
 
   
}
?>