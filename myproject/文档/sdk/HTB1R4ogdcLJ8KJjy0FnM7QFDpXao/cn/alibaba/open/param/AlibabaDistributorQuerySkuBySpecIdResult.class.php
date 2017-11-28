<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaDaixiaoSimpleSkuInfo.class.php');

class AlibabaDistributorQuerySkuBySpecIdResult {

        	
    private $simpleSkuInfo;
    
        /**
    * @return 简单sku信息
    */
        public function getSimpleSkuInfo() {
        return $this->simpleSkuInfo;
    }
    
    /**
     * 设置简单sku信息     
     * @param AlibabaDaixiaoSimpleSkuInfo $simpleSkuInfo     
          
     * 此参数必填     */
    public function setSimpleSkuInfo(AlibabaDaixiaoSimpleSkuInfo $simpleSkuInfo) {
        $this->simpleSkuInfo = $simpleSkuInfo;
    }
    
        	
    private $isSuccess;
    
        /**
    * @return 是否成功
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $isSuccess     
          
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "simpleSkuInfo", $this->stdResult )) {
    				$simpleSkuInfoResult=$this->stdResult->{"simpleSkuInfo"};
    				$this->simpleSkuInfo = new AlibabaDaixiaoSimpleSkuInfo();
    				$this->simpleSkuInfo->setStdResult ( $simpleSkuInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "simpleSkuInfo", $this->arrayResult )) {
    		$simpleSkuInfoResult=$arrayResult['simpleSkuInfo'];
    			    			$this->simpleSkuInfo = new AlibabaDaixiaoSimpleSkuInfo();
    			    			$this->simpleSkuInfo->setStdResult ( $simpleSkuInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['isSuccess'];
    			}
    		    	    		}

}
?>