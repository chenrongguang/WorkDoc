<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstItemStockInfo extends SDKDomain {

       	
    private $itemId;
    
        /**
    * @return 货品id;当无规格时 productId;当存在规格时 productId#skuId
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置货品id;当无规格时 productId;当存在规格时 productId#skuId     
     * @param String $itemId     
     * 参数示例：<pre>1234或1234＃345</pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $amount;
    
        /**
    * @return 库存数量 不能为负数
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置库存数量 不能为负数     
     * @param Long $amount     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $aliID;
    
        /**
    * @return 阿里ID
    */
        public function getAliID() {
        return $this->aliID;
    }
    
    /**
     * 设置阿里ID     
     * @param Long $aliID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setAliID( $aliID) {
        $this->aliID = $aliID;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliID", $this->stdResult )) {
    				$this->aliID = $this->stdResult->{"aliID"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['itemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliID", $this->arrayResult )) {
    			$this->aliID = $arrayResult['aliID'];
    			}
    		    	    		}
 
   
}
?>