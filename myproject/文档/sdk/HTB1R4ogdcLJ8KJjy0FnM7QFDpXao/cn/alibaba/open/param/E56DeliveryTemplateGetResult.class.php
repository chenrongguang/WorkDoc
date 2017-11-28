<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class E56DeliveryTemplateGetResult {

        	
    private $code;
    
        /**
    * @return 调用结果：0:成功;2001:模板不存在;3001:参数错误;8001:业务异常;9001:超出流量控制;9999:系统异常
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置调用结果：0:成功;2001:模板不存在;3001:参数错误;8001:业务异常;9001:超出流量控制;9999:系统异常     
     * @param Integer $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    		}

}
?>