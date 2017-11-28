<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuSkuDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuSkuAttrDTO.class.php');

class AlibabaIcbuProductSkuDTO extends SDKDomain {

       	
    private $skus;
    
        /**
    * @return 
    */
        public function getSkus() {
        return $this->skus;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuSkuDTO[] $skus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkus(AlibabaIcbuSkuDTO $skus) {
        $this->skus = $skus;
    }
    
        	
    private $skuAttrs;
    
        /**
    * @return 
    */
        public function getSkuAttrs() {
        return $this->skuAttrs;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuSkuAttrDTO[] $skuAttrs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuAttrs(AlibabaIcbuSkuAttrDTO $skuAttrs) {
        $this->skuAttrs = $skuAttrs;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skus", $this->stdResult )) {
    			$skusResult=$this->stdResult->{"skus"};
    				$object = json_decode ( json_encode ( $skusResult ), true );
					$this->skus = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuSkuDTOResult=new AlibabaIcbuSkuDTO();
						$AlibabaIcbuSkuDTOResult->setArrayResult($arrayobject );
						$this->skus [$i] = $AlibabaIcbuSkuDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "skuAttrs", $this->stdResult )) {
    			$skuAttrsResult=$this->stdResult->{"skuAttrs"};
    				$object = json_decode ( json_encode ( $skuAttrsResult ), true );
					$this->skuAttrs = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuSkuAttrDTOResult=new AlibabaIcbuSkuAttrDTO();
						$AlibabaIcbuSkuAttrDTOResult->setArrayResult($arrayobject );
						$this->skuAttrs [$i] = $AlibabaIcbuSkuAttrDTOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "skus", $this->arrayResult )) {
    		$skusResult=$arrayResult['skus'];
    			$this->skus = new AlibabaIcbuSkuDTO();
    			$this->skus->setStdResult ( $skusResult);
    		}
    		    	    			    		    		if (array_key_exists ( "skuAttrs", $this->arrayResult )) {
    		$skuAttrsResult=$arrayResult['skuAttrs'];
    			$this->skuAttrs = new AlibabaIcbuSkuAttrDTO();
    			$this->skuAttrs->setStdResult ( $skuAttrsResult);
    		}
    		    	    		}
 
   
}
?>