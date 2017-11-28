<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaUnicomOrderVO.class.php');

class AlibabaUnicomOrderResult extends SDKDomain {

       	
    private $total;
    
        /**
    * @return 订单总数
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置订单总数     
     * @param Integer $total     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
        	
    private $totalPage;
    
        /**
    * @return 总页数
    */
        public function getTotalPage() {
        return $this->totalPage;
    }
    
    /**
     * 设置总页数     
     * @param Integer $totalPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalPage( $totalPage) {
        $this->totalPage = $totalPage;
    }
    
        	
    private $curPage;
    
        /**
    * @return 当前页
    */
        public function getCurPage() {
        return $this->curPage;
    }
    
    /**
     * 设置当前页     
     * @param Integer $curPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurPage( $curPage) {
        $this->curPage = $curPage;
    }
    
        	
    private $orders;
    
        /**
    * @return 详细的订单数据
    */
        public function getOrders() {
        return $this->orders;
    }
    
    /**
     * 设置详细的订单数据     
     * @param array include @see AlibabaUnicomOrderVO[] $orders     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrders(AlibabaUnicomOrderVO $orders) {
        $this->orders = $orders;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalPage", $this->stdResult )) {
    				$this->totalPage = $this->stdResult->{"totalPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "curPage", $this->stdResult )) {
    				$this->curPage = $this->stdResult->{"curPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "orders", $this->stdResult )) {
    			$ordersResult=$this->stdResult->{"orders"};
    				$object = json_decode ( json_encode ( $ordersResult ), true );
					$this->orders = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaUnicomOrderVOResult=new AlibabaUnicomOrderVO();
						$AlibabaUnicomOrderVOResult->setArrayResult($arrayobject );
						$this->orders [$i] = $AlibabaUnicomOrderVOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['total'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalPage", $this->arrayResult )) {
    			$this->totalPage = $arrayResult['totalPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "curPage", $this->arrayResult )) {
    			$this->curPage = $arrayResult['curPage'];
    			}
    		    	    			    		    		if (array_key_exists ( "orders", $this->arrayResult )) {
    		$ordersResult=$arrayResult['orders'];
    			$this->orders = new AlibabaUnicomOrderVO();
    			$this->orders->setStdResult ( $ordersResult);
    		}
    		    	    		}
 
   
}
?>