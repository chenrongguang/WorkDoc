<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CreditInfoGetResult {

        	
    private $tpLogo;
    
        /**
    * @return 诚信通logo的URL。1、logo中包括诚信通类型、企业Or个人(ETP:企业,PTP：个人,MTP：专业市，NONE_TP:非诚信通)Logo类型根据输入参数中的类型决定；2、如果logo类型输入值为空，提供默认logo
    */
        public function getTpLogo() {
        return $this->tpLogo;
    }
    
    /**
     * 设置诚信通logo的URL。1、logo中包括诚信通类型、企业Or个人(ETP:企业,PTP：个人,MTP：专业市，NONE_TP:非诚信通)Logo类型根据输入参数中的类型决定；2、如果logo类型输入值为空，提供默认logo     
     * @param String $tpLogo     
          
     * 此参数必填     */
    public function setTpLogo( $tpLogo) {
        $this->tpLogo = $tpLogo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "tpLogo", $this->stdResult )) {
    				$this->tpLogo = $this->stdResult->{"tpLogo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "tpLogo", $this->arrayResult )) {
    			$this->tpLogo = $arrayResult['tpLogo'];
    			}
    		    	    		}

}
?>