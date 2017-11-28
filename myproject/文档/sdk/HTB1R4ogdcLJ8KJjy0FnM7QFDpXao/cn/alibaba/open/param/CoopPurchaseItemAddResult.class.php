<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CoopPurchaseItemAddResult extends SDKDomain {

       	
    private $isSucess;
    
        /**
    * @return 是否添加成功
    */
        public function getIsSucess() {
        return $this->isSucess;
    }
    
    /**
     * 设置是否添加成功     
     * @param Boolean $isSucess     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsSucess( $isSucess) {
        $this->isSucess = $isSucess;
    }
    
        	
    private $purchaseItemId;
    
        /**
    * @return 购物车对应的主键id
    */
        public function getPurchaseItemId() {
        return $this->purchaseItemId;
    }
    
    /**
     * 设置购物车对应的主键id     
     * @param Long $purchaseItemId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setPurchaseItemId( $purchaseItemId) {
        $this->purchaseItemId = $purchaseItemId;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码     
     * @param String $errorCode     
     * 参数示例：<pre>invalid-params：参数错误；product-quotation-not-exist：报价不存在；system-error：系统错误；no-permission：无权限；product-quotation-out-of-amount：库存不足；</pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 错误文案信息
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误文案信息     
     * @param String $errorMessage     
     * 参数示例：<pre>系统错误</pre>     
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSucess", $this->stdResult )) {
    				$this->isSucess = $this->stdResult->{"isSucess"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseItemId", $this->stdResult )) {
    				$this->purchaseItemId = $this->stdResult->{"purchaseItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSucess", $this->arrayResult )) {
    			$this->isSucess = $arrayResult['isSucess'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchaseItemId", $this->arrayResult )) {
    			$this->purchaseItemId = $arrayResult['purchaseItemId'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['errorMessage'];
    			}
    		    	    		}
 
   
}
?>