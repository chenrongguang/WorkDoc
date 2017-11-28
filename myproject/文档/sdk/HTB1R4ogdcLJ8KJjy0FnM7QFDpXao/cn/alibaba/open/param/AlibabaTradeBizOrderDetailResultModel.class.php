<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaTradeBizSingleOrderModel.class.php');

class AlibabaTradeBizOrderDetailResultModel extends SDKDomain {

       	
    private $total;
    
        /**
    * @return 结果个数
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置结果个数     
     * @param Integer $total     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
        	
    private $toReturn;
    
        /**
    * @return 结果模型
    */
        public function getToReturn() {
        return $this->toReturn;
    }
    
    /**
     * 设置结果模型     
     * @param array include @see AlibabaTradeBizSingleOrderModel[] $toReturn     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToReturn(AlibabaTradeBizSingleOrderModel $toReturn) {
        $this->toReturn = $toReturn;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    				    			    			if (array_key_exists ( "toReturn", $this->stdResult )) {
    			$toReturnResult=$this->stdResult->{"toReturn"};
    				$object = json_decode ( json_encode ( $toReturnResult ), true );
					$this->toReturn = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeBizSingleOrderModelResult=new AlibabaTradeBizSingleOrderModel();
						$AlibabaTradeBizSingleOrderModelResult->setArrayResult($arrayobject );
						$this->toReturn [$i] = $AlibabaTradeBizSingleOrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['total'];
    			}
    		    	    			    		    		if (array_key_exists ( "toReturn", $this->arrayResult )) {
    		$toReturnResult=$arrayResult['toReturn'];
    			$this->toReturn = new AlibabaTradeBizSingleOrderModel();
    			$this->toReturn->setStdResult ( $toReturnResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}
 
   
}
?>