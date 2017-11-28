<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PriceRangeInfo extends SDKDomain {

       	
    private $range;
    
        /**
    * @return 最小起订量。
    */
        public function getRange() {
        return $this->range;
    }
    
    /**
     * 设置最小起订量。     
     * @param Integer $range     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRange( $range) {
        $this->range = $range;
    }
    
        	
    private $price;
    
        /**
    * @return 价格。商品批发价格
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置价格。商品批发价格     
     * @param Double $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "range", $this->stdResult )) {
    				$this->range = $this->stdResult->{"range"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "range", $this->arrayResult )) {
    			$this->range = $arrayResult['range'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    		}
 
   
}
?>