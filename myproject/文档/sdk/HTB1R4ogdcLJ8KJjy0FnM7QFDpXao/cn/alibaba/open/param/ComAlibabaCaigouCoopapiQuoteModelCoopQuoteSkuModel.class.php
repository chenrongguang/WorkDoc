<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouCoopapiQuoteModelCoopQuoteSkuModel extends SDKDomain {

       	
    private $quoteId;
    
        /**
    * @return 产品报价id
    */
        public function getQuoteId() {
        return $this->quoteId;
    }
    
    /**
     * 设置产品报价id     
     * @param Long $quoteId     
     * 参数示例：<pre>1688</pre>     
     * 此参数必填     */
    public function setQuoteId( $quoteId) {
        $this->quoteId = $quoteId;
    }
    
        	
    private $skuIdMap;
    
        /**
    * @return 1688和外部系统sku的mapping关系，key合作方skuId，value为1688skuId
    */
        public function getSkuIdMap() {
        return $this->skuIdMap;
    }
    
    /**
     * 设置1688和外部系统sku的mapping关系，key合作方skuId，value为1688skuId     
     * @param Map $skuIdMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuIdMap(array $skuIdMap) {
        $this->skuIdMap = $skuIdMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "quoteId", $this->stdResult )) {
    				$this->quoteId = $this->stdResult->{"quoteId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuIdMap", $this->stdResult )) {
    				$this->skuIdMap = $this->stdResult->{"skuIdMap"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "quoteId", $this->arrayResult )) {
    			$this->quoteId = $arrayResult['quoteId'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuIdMap", $this->arrayResult )) {
    			$this->skuIdMap = $arrayResult['skuIdMap'];
    			}
    		    	    		}
 
   
}
?>