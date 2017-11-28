<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaProductItemID.class.php');
include_once ('com/alibaba/trade/param/AlibabaCommonComments.class.php');
include_once ('com/alibaba/trade/param/AlibabaTradeSourceOrder.class.php');
include_once ('com/alibaba/trade/param/AlibabaProductItemDetail.class.php');

class AlibabaTradeItemOut extends SDKDomain {

       	
    private $parentLineNumber;
    
        /**
    * @return 买家端的订单的ParentLineNumber，可以传递进来由平台做保存。
    */
        public function getParentLineNumber() {
        return $this->parentLineNumber;
    }
    
    /**
     * 设置买家端的订单的ParentLineNumber，可以传递进来由平台做保存。     
     * @param String $parentLineNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentLineNumber( $parentLineNumber) {
        $this->parentLineNumber = $parentLineNumber;
    }
    
        	
    private $lineNumber;
    
        /**
    * @return 买家端的订单的LineNumber，可以传递进来由平台做保存，这样平台将拥有根据买家端的LineNumber查找订单的能力
    */
        public function getLineNumber() {
        return $this->lineNumber;
    }
    
    /**
     * 设置买家端的订单的LineNumber，可以传递进来由平台做保存，这样平台将拥有根据买家端的LineNumber查找订单的能力     
     * @param String $lineNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLineNumber( $lineNumber) {
        $this->lineNumber = $lineNumber;
    }
    
        	
    private $quantity;
    
        /**
    * @return 购买数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置购买数量     
     * @param Float $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $itemID;
    
        /**
    * @return 商品ID描述
    */
        public function getItemID() {
        return $this->itemID;
    }
    
    /**
     * 设置商品ID描述     
     * @param AlibabaProductItemID $itemID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemID(AlibabaProductItemID $itemID) {
        $this->itemID = $itemID;
    }
    
        	
    private $comments;
    
        /**
    * @return 
    */
        public function getComments() {
        return $this->comments;
    }
    
    /**
     * 设置     
     * @param AlibabaCommonComments $comments     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setComments(AlibabaCommonComments $comments) {
        $this->comments = $comments;
    }
    
        	
    private $orderSource;
    
        /**
    * @return 
    */
        public function getOrderSource() {
        return $this->orderSource;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeSourceOrder $orderSource     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderSource(AlibabaTradeSourceOrder $orderSource) {
        $this->orderSource = $orderSource;
    }
    
        	
    private $itemDetail;
    
        /**
    * @return 商品详情
    */
        public function getItemDetail() {
        return $this->itemDetail;
    }
    
    /**
     * 设置商品详情     
     * @param AlibabaProductItemDetail $itemDetail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemDetail(AlibabaProductItemDetail $itemDetail) {
        $this->itemDetail = $itemDetail;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "parentLineNumber", $this->stdResult )) {
    				$this->parentLineNumber = $this->stdResult->{"parentLineNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "lineNumber", $this->stdResult )) {
    				$this->lineNumber = $this->stdResult->{"lineNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemID", $this->stdResult )) {
    				$itemIDResult=$this->stdResult->{"itemID"};
    				$this->itemID = new AlibabaProductItemID();
    				$this->itemID->setStdResult ( $itemIDResult);
    			}
    			    		    				    			    			if (array_key_exists ( "comments", $this->stdResult )) {
    				$commentsResult=$this->stdResult->{"comments"};
    				$this->comments = new AlibabaCommonComments();
    				$this->comments->setStdResult ( $commentsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderSource", $this->stdResult )) {
    				$orderSourceResult=$this->stdResult->{"orderSource"};
    				$this->orderSource = new AlibabaTradeSourceOrder();
    				$this->orderSource->setStdResult ( $orderSourceResult);
    			}
    			    		    				    			    			if (array_key_exists ( "itemDetail", $this->stdResult )) {
    				$itemDetailResult=$this->stdResult->{"itemDetail"};
    				$this->itemDetail = new AlibabaProductItemDetail();
    				$this->itemDetail->setStdResult ( $itemDetailResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "parentLineNumber", $this->arrayResult )) {
    			$this->parentLineNumber = $arrayResult['parentLineNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "lineNumber", $this->arrayResult )) {
    			$this->lineNumber = $arrayResult['lineNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['quantity'];
    			}
    		    	    			    		    		if (array_key_exists ( "itemID", $this->arrayResult )) {
    		$itemIDResult=$arrayResult['itemID'];
    			    			$this->itemID = new AlibabaProductItemID();
    			    			$this->itemID->setStdResult ( $itemIDResult);
    		}
    		    	    			    		    		if (array_key_exists ( "comments", $this->arrayResult )) {
    		$commentsResult=$arrayResult['comments'];
    			    			$this->comments = new AlibabaCommonComments();
    			    			$this->comments->setStdResult ( $commentsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderSource", $this->arrayResult )) {
    		$orderSourceResult=$arrayResult['orderSource'];
    			    			$this->orderSource = new AlibabaTradeSourceOrder();
    			    			$this->orderSource->setStdResult ( $orderSourceResult);
    		}
    		    	    			    		    		if (array_key_exists ( "itemDetail", $this->arrayResult )) {
    		$itemDetailResult=$arrayResult['itemDetail'];
    			    			$this->itemDetail = new AlibabaProductItemDetail();
    			    			$this->itemDetail->setStdResult ( $itemDetailResult);
    		}
    		    	    		}
 
   
}
?>