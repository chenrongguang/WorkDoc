<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstStockOperateResult extends SDKDomain {

       	
    private $itemId;
    
        /**
    * @return 货品id
当无规格时 productId
当存在规格时 productId#skuId
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置货品id
当无规格时 productId
当存在规格时 productId#skuId     
     * @param String $itemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $result;
    
        /**
    * @return 操作是否成功
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置操作是否成功     
     * @param Boolean $result     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResult( $result) {
        $this->result = $result;
    }
    
        	
    private $code;
    
        /**
    * @return 业务异常码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置业务异常码     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $desc;
    
        /**
    * @return 业务异常信息
    */
        public function getDesc() {
        return $this->desc;
    }
    
    /**
     * 设置业务异常信息     
     * @param String $desc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDesc( $desc) {
        $this->desc = $desc;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "desc", $this->stdResult )) {
    				$this->desc = $this->stdResult->{"desc"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['itemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['result'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "desc", $this->arrayResult )) {
    			$this->desc = $arrayResult['desc'];
    			}
    		    	    		}
 
   
}
?>