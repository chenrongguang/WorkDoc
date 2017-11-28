<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouCoopapiProductModelUserProduct.class.php');

class AlibabaErpProductPaginatedList extends SDKDomain {

       	
    private $originalTotalCount;
    
        /**
    * @return 数据总量
    */
        public function getOriginalTotalCount() {
        return $this->originalTotalCount;
    }
    
    /**
     * 设置数据总量     
     * @param Integer $originalTotalCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOriginalTotalCount( $originalTotalCount) {
        $this->originalTotalCount = $originalTotalCount;
    }
    
        	
    private $records;
    
        /**
    * @return 
    */
        public function getRecords() {
        return $this->records;
    }
    
    /**
     * 设置     
     * @param array include @see ComAlibabaCaigouCoopapiProductModelUserProduct[] $records     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRecords(ComAlibabaCaigouCoopapiProductModelUserProduct $records) {
        $this->records = $records;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "originalTotalCount", $this->stdResult )) {
    				$this->originalTotalCount = $this->stdResult->{"originalTotalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "records", $this->stdResult )) {
    			$recordsResult=$this->stdResult->{"records"};
    				$object = json_decode ( json_encode ( $recordsResult ), true );
					$this->records = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouCoopapiProductModelUserProductResult=new ComAlibabaCaigouCoopapiProductModelUserProduct();
						$ComAlibabaCaigouCoopapiProductModelUserProductResult->setArrayResult($arrayobject );
						$this->records [$i] = $ComAlibabaCaigouCoopapiProductModelUserProductResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "originalTotalCount", $this->arrayResult )) {
    			$this->originalTotalCount = $arrayResult['originalTotalCount'];
    			}
    		    	    			    		    		if (array_key_exists ( "records", $this->arrayResult )) {
    		$recordsResult=$arrayResult['records'];
    			$this->records = new ComAlibabaCaigouCoopapiProductModelUserProduct();
    			$this->records->setStdResult ( $recordsResult);
    		}
    		    	    		}
 
   
}
?>