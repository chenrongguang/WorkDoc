<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureFentOrder.class.php');

class ErpManufacturePullFentDataListResult {

        	
    private $fentOrderList;
    
        /**
    * @return 打样订单列表
    */
        public function getFentOrderList() {
        return $this->fentOrderList;
    }
    
    /**
     * 设置打样订单列表     
     * @param array include @see AlibabaManufactureFentOrder[] $fentOrderList     
          
     * 此参数必填     */
    public function setFentOrderList(AlibabaManufactureFentOrder $fentOrderList) {
        $this->fentOrderList = $fentOrderList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "fentOrderList", $this->stdResult )) {
    			$fentOrderListResult=$this->stdResult->{"fentOrderList"};
    				$object = json_decode ( json_encode ( $fentOrderListResult ), true );
					$this->fentOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaManufactureFentOrderResult=new AlibabaManufactureFentOrder();
						$AlibabaManufactureFentOrderResult->setArrayResult($arrayobject );
						$this->fentOrderList [$i] = $AlibabaManufactureFentOrderResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "fentOrderList", $this->arrayResult )) {
    		$fentOrderListResult=$arrayResult['fentOrderList'];
    			$this->fentOrderList = new AlibabaManufactureFentOrder();
    			$this->fentOrderList->setStdResult ( $fentOrderListResult);
    		}
    		    	    		}

}
?>