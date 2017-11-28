<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationProductlinesresult extends SDKDomain {

       	
    private $productlineId;
    
        /**
    * @return 产品分组ID
    */
        public function getProductlineId() {
        return $this->productlineId;
    }
    
    /**
     * 设置产品分组ID     
     * @param Long $productlineId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductlineId( $productlineId) {
        $this->productlineId = $productlineId;
    }
    
        	
    private $productlineName;
    
        /**
    * @return 产品分组名称
    */
        public function getProductlineName() {
        return $this->productlineName;
    }
    
    /**
     * 设置产品分组名称     
     * @param String $productlineName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductlineName( $productlineName) {
        $this->productlineName = $productlineName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productlineId", $this->stdResult )) {
    				$this->productlineId = $this->stdResult->{"productlineId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productlineName", $this->stdResult )) {
    				$this->productlineName = $this->stdResult->{"productlineName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productlineId", $this->arrayResult )) {
    			$this->productlineId = $arrayResult['productlineId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productlineName", $this->arrayResult )) {
    			$this->productlineName = $arrayResult['productlineName'];
    			}
    		    	    		}
 
   
}
?>