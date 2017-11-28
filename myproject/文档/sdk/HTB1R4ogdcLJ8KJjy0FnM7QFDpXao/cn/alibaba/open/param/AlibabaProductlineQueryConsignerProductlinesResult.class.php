<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaRelationProductlinesresult.class.php');

class AlibabaProductlineQueryConsignerProductlinesResult {

        	
    private $productlineModels;
    
        /**
    * @return 产品分组结果集合
    */
        public function getProductlineModels() {
        return $this->productlineModels;
    }
    
    /**
     * 设置产品分组结果集合     
     * @param array include @see AlibabaRelationProductlinesresult[] $productlineModels     
          
     * 此参数必填     */
    public function setProductlineModels(AlibabaRelationProductlinesresult $productlineModels) {
        $this->productlineModels = $productlineModels;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productlineModels", $this->stdResult )) {
    			$productlineModelsResult=$this->stdResult->{"productlineModels"};
    				$object = json_decode ( json_encode ( $productlineModelsResult ), true );
					$this->productlineModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaRelationProductlinesresultResult=new AlibabaRelationProductlinesresult();
						$AlibabaRelationProductlinesresultResult->setArrayResult($arrayobject );
						$this->productlineModels [$i] = $AlibabaRelationProductlinesresultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productlineModels", $this->arrayResult )) {
    		$productlineModelsResult=$arrayResult['productlineModels'];
    			$this->productlineModels = new AlibabaRelationProductlinesresult();
    			$this->productlineModels->setStdResult ( $productlineModelsResult);
    		}
    		    	    		}

}
?>