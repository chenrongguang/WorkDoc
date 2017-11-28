<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuLadderPriceDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuSkuNameValueDTO.class.php');

class AlibabaIcbuSkuDTO extends SDKDomain {

       	
    private $skuId;
    
        /**
    * @return 
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置     
     * @param Long $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $skuCode;
    
        /**
    * @return 
    */
        public function getSkuCode() {
        return $this->skuCode;
    }
    
    /**
     * 设置     
     * @param String $skuCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuCode( $skuCode) {
        $this->skuCode = $skuCode;
    }
    
        	
    private $ladderPrices;
    
        /**
    * @return 
    */
        public function getLadderPrices() {
        return $this->ladderPrices;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuLadderPriceDTO[] $ladderPrices     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLadderPrices(AlibabaIcbuLadderPriceDTO $ladderPrices) {
        $this->ladderPrices = $ladderPrices;
    }
    
        	
    private $skuNameValues;
    
        /**
    * @return 
    */
        public function getSkuNameValues() {
        return $this->skuNameValues;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuSkuNameValueDTO[] $skuNameValues     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuNameValues(AlibabaIcbuSkuNameValueDTO $skuNameValues) {
        $this->skuNameValues = $skuNameValues;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "ladderPrices", $this->stdResult )) {
    			$ladderPricesResult=$this->stdResult->{"ladderPrices"};
    				$object = json_decode ( json_encode ( $ladderPricesResult ), true );
					$this->ladderPrices = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuLadderPriceDTOResult=new AlibabaIcbuLadderPriceDTO();
						$AlibabaIcbuLadderPriceDTOResult->setArrayResult($arrayobject );
						$this->ladderPrices [$i] = $AlibabaIcbuLadderPriceDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "skuNameValues", $this->stdResult )) {
    			$skuNameValuesResult=$this->stdResult->{"skuNameValues"};
    				$object = json_decode ( json_encode ( $skuNameValuesResult ), true );
					$this->skuNameValues = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuSkuNameValueDTOResult=new AlibabaIcbuSkuNameValueDTO();
						$AlibabaIcbuSkuNameValueDTOResult->setArrayResult($arrayobject );
						$this->skuNameValues [$i] = $AlibabaIcbuSkuNameValueDTOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['skuId'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['skuCode'];
    			}
    		    	    			    		    		if (array_key_exists ( "ladderPrices", $this->arrayResult )) {
    		$ladderPricesResult=$arrayResult['ladderPrices'];
    			$this->ladderPrices = new AlibabaIcbuLadderPriceDTO();
    			$this->ladderPrices->setStdResult ( $ladderPricesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "skuNameValues", $this->arrayResult )) {
    		$skuNameValuesResult=$arrayResult['skuNameValues'];
    			$this->skuNameValues = new AlibabaIcbuSkuNameValueDTO();
    			$this->skuNameValues->setStdResult ( $skuNameValuesResult);
    		}
    		    	    		}
 
   
}
?>