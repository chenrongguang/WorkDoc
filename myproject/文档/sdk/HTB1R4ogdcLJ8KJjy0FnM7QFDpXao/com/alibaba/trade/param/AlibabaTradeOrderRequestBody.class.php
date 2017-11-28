<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeItemOut.class.php');

class AlibabaTradeOrderRequestBody extends SDKDomain {

       	
    private $itemOuts;
    
        /**
    * @return 购买的商品信息
    */
        public function getItemOuts() {
        return $this->itemOuts;
    }
    
    /**
     * 设置购买的商品信息     
     * @param array include @see AlibabaTradeItemOut[] $itemOuts     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemOuts(AlibabaTradeItemOut $itemOuts) {
        $this->itemOuts = $itemOuts;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemOuts", $this->stdResult )) {
    			$itemOutsResult=$this->stdResult->{"itemOuts"};
    				$object = json_decode ( json_encode ( $itemOutsResult ), true );
					$this->itemOuts = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeItemOutResult=new AlibabaTradeItemOut();
						$AlibabaTradeItemOutResult->setArrayResult($arrayobject );
						$this->itemOuts [$i] = $AlibabaTradeItemOutResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "itemOuts", $this->arrayResult )) {
    		$itemOutsResult=$arrayResult['itemOuts'];
    			$this->itemOuts = new AlibabaTradeItemOut();
    			$this->itemOuts->setStdResult ( $itemOutsResult);
    		}
    		    	    		}
 
   
}
?>