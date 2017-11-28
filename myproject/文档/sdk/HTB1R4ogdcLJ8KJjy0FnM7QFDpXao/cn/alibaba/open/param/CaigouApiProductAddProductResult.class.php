<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiProductAddProductResult {

        	
    private $id;
    
        /**
    * @return 产品在1688采购平台的主键id，如果发布失败则为空，具体的看错误码
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置产品在1688采购平台的主键id，如果发布失败则为空，具体的看错误码     
     * @param Long $id     
          
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    		}

}
?>