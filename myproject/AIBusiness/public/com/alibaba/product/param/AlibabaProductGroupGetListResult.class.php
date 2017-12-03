<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductGroupInfo.class.php');

class AlibabaProductGroupGetListResult {

        	
    private $productGroupInfo;
    
        /**
    * @return 商品分组信息
    */
        public function getProductGroupInfo() {
        return $this->productGroupInfo;
    }
    
    /**
     * 设置商品分组信息     
     * @param array include @see AlibabaProductProductGroupInfo[] $productGroupInfo     
          
     * 此参数必填     */
    public function setProductGroupInfo(AlibabaProductProductGroupInfo $productGroupInfo) {
        $this->productGroupInfo = $productGroupInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productGroupInfo", $this->stdResult )) {
    			$productGroupInfoResult=$this->stdResult->{"productGroupInfo"};
    				$object = json_decode ( json_encode ( $productGroupInfoResult ), true );
					$this->productGroupInfo = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductGroupInfoResult=new AlibabaProductProductGroupInfo();
						$AlibabaProductProductGroupInfoResult->setArrayResult($arrayobject );
						$this->productGroupInfo [$i] = $AlibabaProductProductGroupInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productGroupInfo", $this->arrayResult )) {
    		$productGroupInfoResult=$arrayResult['productGroupInfo'];
    			$this->productGroupInfo = new AlibabaProductProductGroupInfo();
    			$this->productGroupInfo->setStdResult ( $productGroupInfoResult);
    		}
    		    	    		}

}
?>