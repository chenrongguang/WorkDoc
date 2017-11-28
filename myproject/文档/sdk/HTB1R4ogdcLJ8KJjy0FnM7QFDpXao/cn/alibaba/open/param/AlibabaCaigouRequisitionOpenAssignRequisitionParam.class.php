<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouRequisitionOpenAssignRequisitionParam extends SDKDomain {

       	
    private $itemId;
    
        /**
    * @return 请购单单项ID
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置请购单单项ID     
     * @param Long $itemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $assignLoginId;
    
        /**
    * @return 被分派登录用户loginId
    */
        public function getAssignLoginId() {
        return $this->assignLoginId;
    }
    
    /**
     * 设置被分派登录用户loginId     
     * @param String $assignLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAssignLoginId( $assignLoginId) {
        $this->assignLoginId = $assignLoginId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "assignLoginId", $this->stdResult )) {
    				$this->assignLoginId = $this->stdResult->{"assignLoginId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['itemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "assignLoginId", $this->arrayResult )) {
    			$this->assignLoginId = $arrayResult['assignLoginId'];
    			}
    		    	    		}
 
   
}
?>