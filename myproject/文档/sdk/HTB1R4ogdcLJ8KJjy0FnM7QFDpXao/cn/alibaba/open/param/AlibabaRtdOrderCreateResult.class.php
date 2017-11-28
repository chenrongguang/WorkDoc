<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaRtdOrderOpenSubResult.class.php');

class AlibabaRtdOrderCreateResult {

        	
    private $subs;
    
        /**
    * @return 具体采购商品列表
    */
        public function getSubs() {
        return $this->subs;
    }
    
    /**
     * 设置具体采购商品列表     
     * @param array include @see AlibabaRtdOrderOpenSubResult[] $subs     
          
     * 此参数必填     */
    public function setSubs(AlibabaRtdOrderOpenSubResult $subs) {
        $this->subs = $subs;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
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
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorInfo;
    
        /**
    * @return 错误信息
    */
        public function getErrorInfo() {
        return $this->errorInfo;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorInfo     
          
     * 此参数必填     */
    public function setErrorInfo( $errorInfo) {
        $this->errorInfo = $errorInfo;
    }
    
        	
    private $billNo;
    
        /**
    * @return 三江订单编号
    */
        public function getBillNo() {
        return $this->billNo;
    }
    
    /**
     * 设置三江订单编号     
     * @param String $billNo     
          
     * 此参数必填     */
    public function setBillNo( $billNo) {
        $this->billNo = $billNo;
    }
    
        	
    private $aliBillNo;
    
        /**
    * @return 对应的内部订单编号
    */
        public function getAliBillNo() {
        return $this->aliBillNo;
    }
    
    /**
     * 设置对应的内部订单编号     
     * @param String $aliBillNo     
          
     * 此参数必填     */
    public function setAliBillNo( $aliBillNo) {
        $this->aliBillNo = $aliBillNo;
    }
    
        	
    private $aliTotalPrice;
    
        /**
    * @return 内部设定采购总价
    */
        public function getAliTotalPrice() {
        return $this->aliTotalPrice;
    }
    
    /**
     * 设置内部设定采购总价     
     * @param Long $aliTotalPrice     
          
     * 此参数必填     */
    public function setAliTotalPrice( $aliTotalPrice) {
        $this->aliTotalPrice = $aliTotalPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subs", $this->stdResult )) {
    			$subsResult=$this->stdResult->{"subs"};
    				$object = json_decode ( json_encode ( $subsResult ), true );
					$this->subs = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaRtdOrderOpenSubResultResult=new AlibabaRtdOrderOpenSubResult();
						$AlibabaRtdOrderOpenSubResultResult->setArrayResult($arrayobject );
						$this->subs [$i] = $AlibabaRtdOrderOpenSubResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorInfo", $this->stdResult )) {
    				$this->errorInfo = $this->stdResult->{"errorInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "billNo", $this->stdResult )) {
    				$this->billNo = $this->stdResult->{"billNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliBillNo", $this->stdResult )) {
    				$this->aliBillNo = $this->stdResult->{"aliBillNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliTotalPrice", $this->stdResult )) {
    				$this->aliTotalPrice = $this->stdResult->{"aliTotalPrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "subs", $this->arrayResult )) {
    		$subsResult=$arrayResult['subs'];
    			$this->subs = new AlibabaRtdOrderOpenSubResult();
    			$this->subs->setStdResult ( $subsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorInfo", $this->arrayResult )) {
    			$this->errorInfo = $arrayResult['errorInfo'];
    			}
    		    	    			    		    			if (array_key_exists ( "billNo", $this->arrayResult )) {
    			$this->billNo = $arrayResult['billNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliBillNo", $this->arrayResult )) {
    			$this->aliBillNo = $arrayResult['aliBillNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliTotalPrice", $this->arrayResult )) {
    			$this->aliTotalPrice = $arrayResult['aliTotalPrice'];
    			}
    		    	    		}

}
?>