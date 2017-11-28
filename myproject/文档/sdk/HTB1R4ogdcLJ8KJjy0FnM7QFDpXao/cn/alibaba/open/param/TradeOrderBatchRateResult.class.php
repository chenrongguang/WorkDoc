<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderBatchRateResult {

        	
    private $failedOrder;
    
        /**
    * @return 提交评价失败的订单Map(Long,String),前者为失败的订单号，后者为失败的错误码：
1 返回为空时，创建全部成功
2 没指定订单号及评价内容时,接口直接返回成功结果
3 当订单已经评价过时，接口直接返回成功结果，不做任何处理
4 当指定的订单不是指定postMemberId用户的订单是，接口直接返回成功结果，不做任何处理
5 当指定的订单不处于待评价状态时，接口直接返回成功结果，不做任何处理
    */
        public function getFailedOrder() {
        return $this->failedOrder;
    }
    
    /**
     * 设置提交评价失败的订单Map(Long,String),前者为失败的订单号，后者为失败的错误码：
1 返回为空时，创建全部成功
2 没指定订单号及评价内容时,接口直接返回成功结果
3 当订单已经评价过时，接口直接返回成功结果，不做任何处理
4 当指定的订单不是指定postMemberId用户的订单是，接口直接返回成功结果，不做任何处理
5 当指定的订单不处于待评价状态时，接口直接返回成功结果，不做任何处理     
     * @param Map $failedOrder     
          
     * 此参数必填     */
    public function setFailedOrder(array $failedOrder) {
        $this->failedOrder = $failedOrder;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "failedOrder", $this->stdResult )) {
    				$this->failedOrder = $this->stdResult->{"failedOrder"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "failedOrder", $this->arrayResult )) {
    			$this->failedOrder = $arrayResult['failedOrder'];
    			}
    		    	    		}

}
?>