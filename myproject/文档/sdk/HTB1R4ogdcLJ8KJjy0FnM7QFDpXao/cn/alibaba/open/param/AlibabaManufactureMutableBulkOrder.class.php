<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureMutableBulkOrder extends SDKDomain {

       	
    private $bulkGoodsCode;
    
        /**
    * @return 大货订单编码(货号)
    */
        public function getBulkGoodsCode() {
        return $this->bulkGoodsCode;
    }
    
    /**
     * 设置大货订单编码(货号)     
     * @param String $bulkGoodsCode     
     * 参数示例：<pre>THZ0001ABG101GD0002A</pre>     
     * 此参数必填     */
    public function setBulkGoodsCode( $bulkGoodsCode) {
        $this->bulkGoodsCode = $bulkGoodsCode;
    }
    
        	
    private $title;
    
        /**
    * @return 产品标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置产品标题     
     * @param String $title     
     * 参数示例：<pre>云上生活2015年6月连衣裙V领50件</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $status;
    
        /**
    * @return 状态值
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态值     
     * @param String $status     
     * 参数示例：<pre>PRODUCING| PRODUCED|CLOSE
(支持自定义如:delivered,但关健状态需与文档中的一致)</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $statusDate;
    
        /**
    * @return 状态发生时间
    */
        public function getStatusDate() {
        return $this->statusDate;
    }
    
    /**
     * 设置状态发生时间     
     * @param Date $statusDate     
     * 参数示例：<pre>2016-01-20 12:01:52</pre>     
     * 此参数必填     */
    public function setStatusDate( $statusDate) {
        $this->statusDate = $statusDate;
    }
    
        	
    private $statusDesc;
    
        /**
    * @return 状态说明
    */
        public function getStatusDesc() {
        return $this->statusDesc;
    }
    
    /**
     * 设置状态说明     
     * @param String $statusDesc     
     * 参数示例：<pre>生产中｜生产完成｜关闭｜已发货（运单:345234567987）</pre>     
     * 此参数必填     */
    public function setStatusDesc( $statusDesc) {
        $this->statusDesc = $statusDesc;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bulkGoodsCode", $this->stdResult )) {
    				$this->bulkGoodsCode = $this->stdResult->{"bulkGoodsCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "statusDate", $this->stdResult )) {
    				$this->statusDate = $this->stdResult->{"statusDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "statusDesc", $this->stdResult )) {
    				$this->statusDesc = $this->stdResult->{"statusDesc"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bulkGoodsCode", $this->arrayResult )) {
    			$this->bulkGoodsCode = $arrayResult['bulkGoodsCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "statusDate", $this->arrayResult )) {
    			$this->statusDate = $arrayResult['statusDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "statusDesc", $this->arrayResult )) {
    			$this->statusDesc = $arrayResult['statusDesc'];
    			}
    		    	    		}
 
   
}
?>