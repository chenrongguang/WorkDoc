<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureProduct.class.php');

class AlibabaErpManufacturePullSpProductDataListResult {

        	
    private $productList;
    
        /**
    * @return 需求单信息列表
    */
        public function getProductList() {
        return $this->productList;
    }
    
    /**
     * 设置需求单信息列表     
     * @param array include @see AlibabaManufactureProduct[] $productList     
          
     * 此参数必填     */
    public function setProductList(AlibabaManufactureProduct $productList) {
        $this->productList = $productList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productList", $this->stdResult )) {
    			$productListResult=$this->stdResult->{"productList"};
    				$object = json_decode ( json_encode ( $productListResult ), true );
					$this->productList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaManufactureProductResult=new AlibabaManufactureProduct();
						$AlibabaManufactureProductResult->setArrayResult($arrayobject );
						$this->productList [$i] = $AlibabaManufactureProductResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productList", $this->arrayResult )) {
    		$productListResult=$arrayResult['productList'];
    			$this->productList = new AlibabaManufactureProduct();
    			$this->productList->setStdResult ( $productListResult);
    		}
    		    	    		}

}
?>