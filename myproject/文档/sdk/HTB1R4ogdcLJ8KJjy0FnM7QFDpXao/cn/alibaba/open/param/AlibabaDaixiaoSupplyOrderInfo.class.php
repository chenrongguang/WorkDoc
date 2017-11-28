<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaDaixiaoSupplyOrderDetail.class.php');

class AlibabaDaixiaoSupplyOrderInfo extends SDKDomain {

       	
    private $orderModel;
    
        /**
    * @return 采购单信息
    */
        public function getOrderModel() {
        return $this->orderModel;
    }
    
    /**
     * 设置采购单信息     
     * @param AlibabaDaixiaoSupplyOrderDetail $orderModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderModel(AlibabaDaixiaoSupplyOrderDetail $orderModel) {
        $this->orderModel = $orderModel;
    }
    
        	
    private $memberId;
    
        /**
    * @return 供应商的memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置供应商的memberId     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $orderUrl;
    
        /**
    * @return 立即下单时，提交的给下单页面的url
    */
        public function getOrderUrl() {
        return $this->orderUrl;
    }
    
    /**
     * 设置立即下单时，提交的给下单页面的url     
     * @param String $orderUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderUrl( $orderUrl) {
        $this->orderUrl = $orderUrl;
    }
    
        	
    private $flow;
    
        /**
    * @return 立即下单时，提交给下单页面的参数
    */
        public function getFlow() {
        return $this->flow;
    }
    
    /**
     * 设置立即下单时，提交给下单页面的参数     
     * @param String $flow     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFlow( $flow) {
        $this->flow = $flow;
    }
    
        	
    private $id;
    
        /**
    * @return 立即下单时，提交给下单页面的参数
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置立即下单时，提交给下单页面的参数     
     * @param String $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderModel", $this->stdResult )) {
    				$orderModelResult=$this->stdResult->{"orderModel"};
    				$this->orderModel = new AlibabaDaixiaoSupplyOrderDetail();
    				$this->orderModel->setStdResult ( $orderModelResult);
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderUrl", $this->stdResult )) {
    				$this->orderUrl = $this->stdResult->{"orderUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "flow", $this->stdResult )) {
    				$this->flow = $this->stdResult->{"flow"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "orderModel", $this->arrayResult )) {
    		$orderModelResult=$arrayResult['orderModel'];
    			    			$this->orderModel = new AlibabaDaixiaoSupplyOrderDetail();
    			    			$this->orderModel->setStdResult ( $orderModelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderUrl", $this->arrayResult )) {
    			$this->orderUrl = $arrayResult['orderUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "flow", $this->arrayResult )) {
    			$this->flow = $arrayResult['flow'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    		}
 
   
}
?>