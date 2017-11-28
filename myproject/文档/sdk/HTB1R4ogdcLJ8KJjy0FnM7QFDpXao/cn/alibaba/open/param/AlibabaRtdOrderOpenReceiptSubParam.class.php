<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRtdOrderOpenReceiptSubParam extends SDKDomain {

       	
    private $subBillNo;
    
        /**
    * @return 三江购物子订单编号
    */
        public function getSubBillNo() {
        return $this->subBillNo;
    }
    
    /**
     * 设置三江购物子订单编号     
     * @param String $subBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubBillNo( $subBillNo) {
        $this->subBillNo = $subBillNo;
    }
    
        	
    private $aliBillNo;
    
        /**
    * @return 对应内部子订单编号
    */
        public function getAliBillNo() {
        return $this->aliBillNo;
    }
    
    /**
     * 设置对应内部子订单编号     
     * @param String $aliBillNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliBillNo( $aliBillNo) {
        $this->aliBillNo = $aliBillNo;
    }
    
        	
    private $barCode;
    
        /**
    * @return 商品条码
    */
        public function getBarCode() {
        return $this->barCode;
    }
    
    /**
     * 设置商品条码     
     * @param String $barCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBarCode( $barCode) {
        $this->barCode = $barCode;
    }
    
        	
    private $skuId;
    
        /**
    * @return 商品规格
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置商品规格     
     * @param String $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $realAmount;
    
        /**
    * @return 实际收货数量
    */
        public function getRealAmount() {
        return $this->realAmount;
    }
    
    /**
     * 设置实际收货数量     
     * @param Integer $realAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealAmount( $realAmount) {
        $this->realAmount = $realAmount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subBillNo", $this->stdResult )) {
    				$this->subBillNo = $this->stdResult->{"subBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliBillNo", $this->stdResult )) {
    				$this->aliBillNo = $this->stdResult->{"aliBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "barCode", $this->stdResult )) {
    				$this->barCode = $this->stdResult->{"barCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "realAmount", $this->stdResult )) {
    				$this->realAmount = $this->stdResult->{"realAmount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subBillNo", $this->arrayResult )) {
    			$this->subBillNo = $arrayResult['subBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliBillNo", $this->arrayResult )) {
    			$this->aliBillNo = $arrayResult['aliBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "barCode", $this->arrayResult )) {
    			$this->barCode = $arrayResult['barCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['skuId'];
    			}
    		    	    			    		    			if (array_key_exists ( "realAmount", $this->arrayResult )) {
    			$this->realAmount = $arrayResult['realAmount'];
    			}
    		    	    		}
 
   
}
?>