<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiQuoteModelProductQuote.class.php');

class CaigouApiQuoteQueryListByProductIdResult {

        	
    private $productQuoteList;
    
        /**
    * @return 
    */
        public function getProductQuoteList() {
        return $this->productQuoteList;
    }
    
    /**
     * 设置     
     * @param array include @see ComAlibabaCaigouApiQuoteModelProductQuote[] $productQuoteList     
          
     * 此参数必填     */
    public function setProductQuoteList(ComAlibabaCaigouApiQuoteModelProductQuote $productQuoteList) {
        $this->productQuoteList = $productQuoteList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productQuoteList", $this->stdResult )) {
    			$productQuoteListResult=$this->stdResult->{"productQuoteList"};
    				$object = json_decode ( json_encode ( $productQuoteListResult ), true );
					$this->productQuoteList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiQuoteModelProductQuoteResult=new ComAlibabaCaigouApiQuoteModelProductQuote();
						$ComAlibabaCaigouApiQuoteModelProductQuoteResult->setArrayResult($arrayobject );
						$this->productQuoteList [$i] = $ComAlibabaCaigouApiQuoteModelProductQuoteResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productQuoteList", $this->arrayResult )) {
    		$productQuoteListResult=$arrayResult['productQuoteList'];
    			$this->productQuoteList = new ComAlibabaCaigouApiQuoteModelProductQuote();
    			$this->productQuoteList->setStdResult ( $productQuoteListResult);
    		}
    		    	    		}

}
?>