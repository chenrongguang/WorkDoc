<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberGetShopInfoListResult {

        	
    private $shopInfoMap;
    
        /**
    * @return k、v形式的键值对，key是店铺的域名，value是店铺的信息
    */
        public function getShopInfoMap() {
        return $this->shopInfoMap;
    }
    
    /**
     * 设置k、v形式的键值对，key是店铺的域名，value是店铺的信息     
     * @param Map $shopInfoMap     
          
     * 此参数必填     */
    public function setShopInfoMap(array $shopInfoMap) {
        $this->shopInfoMap = $shopInfoMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "shopInfoMap", $this->stdResult )) {
    				$this->shopInfoMap = $this->stdResult->{"shopInfoMap"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "shopInfoMap", $this->arrayResult )) {
    			$this->shopInfoMap = $arrayResult['shopInfoMap'];
    			}
    		    	    		}

}
?>