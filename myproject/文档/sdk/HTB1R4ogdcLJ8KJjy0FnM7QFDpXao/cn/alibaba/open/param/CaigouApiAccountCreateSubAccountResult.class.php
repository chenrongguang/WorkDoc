<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAccountCreateSubAccountResult {

        	
    private $subUserId;
    
        /**
    * @return 创建成功的子帐号ID或者是已经与接入商系统内部employeeId绑定的子帐号ID
    */
        public function getSubUserId() {
        return $this->subUserId;
    }
    
    /**
     * 设置创建成功的子帐号ID或者是已经与接入商系统内部employeeId绑定的子帐号ID     
     * @param Long $subUserId     
          
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->subUserId = $subUserId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subUserId", $this->stdResult )) {
    				$this->subUserId = $this->stdResult->{"subUserId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subUserId", $this->arrayResult )) {
    			$this->subUserId = $arrayResult['subUserId'];
    			}
    		    	    		}

}
?>