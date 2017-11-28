<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiCategoryAddUserCategoryResult {

        	
    private $result;
    
        /**
    * @return 返回结果为Map，key为外部系统的类目id，value为1688平台的类目id
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置返回结果为Map，key为外部系统的类目id，value为1688平台的类目id     
     * @param Map $result     
          
     * 此参数必填     */
    public function setResult(array $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['result'];
    			}
    		    	    		}

}
?>