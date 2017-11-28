<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpManufacturePullFentGoodsCodesResult {

        	
    private $goodsCodeList;
    
        /**
    * @return 打样订单编码(货号)列表
    */
        public function getGoodsCodeList() {
        return $this->goodsCodeList;
    }
    
    /**
     * 设置打样订单编码(货号)列表     
     * @param array include @see String[] $goodsCodeList     
          
     * 此参数必填     */
    public function setGoodsCodeList( $goodsCodeList) {
        $this->goodsCodeList = $goodsCodeList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "goodsCodeList", $this->stdResult )) {
    				$this->goodsCodeList = $this->stdResult->{"goodsCodeList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "goodsCodeList", $this->arrayResult )) {
    			$this->goodsCodeList = $arrayResult['goodsCodeList'];
    			}
    		    	    		}

}
?>