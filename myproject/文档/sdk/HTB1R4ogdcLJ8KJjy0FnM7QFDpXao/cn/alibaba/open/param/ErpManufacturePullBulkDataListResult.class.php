<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureBulkOrder.class.php');

class ErpManufacturePullBulkDataListResult {

        	
    private $bulkOrderList;
    
        /**
    * @return 大货订单列表
    */
        public function getBulkOrderList() {
        return $this->bulkOrderList;
    }
    
    /**
     * 设置大货订单列表     
     * @param array include @see AlibabaManufactureBulkOrder[] $bulkOrderList     
          
     * 此参数必填     */
    public function setBulkOrderList(AlibabaManufactureBulkOrder $bulkOrderList) {
        $this->bulkOrderList = $bulkOrderList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bulkOrderList", $this->stdResult )) {
    			$bulkOrderListResult=$this->stdResult->{"bulkOrderList"};
    				$object = json_decode ( json_encode ( $bulkOrderListResult ), true );
					$this->bulkOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaManufactureBulkOrderResult=new AlibabaManufactureBulkOrder();
						$AlibabaManufactureBulkOrderResult->setArrayResult($arrayobject );
						$this->bulkOrderList [$i] = $AlibabaManufactureBulkOrderResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "bulkOrderList", $this->arrayResult )) {
    		$bulkOrderListResult=$arrayResult['bulkOrderList'];
    			$this->bulkOrderList = new AlibabaManufactureBulkOrder();
    			$this->bulkOrderList->setStdResult ( $bulkOrderListResult);
    		}
    		    	    		}

}
?>