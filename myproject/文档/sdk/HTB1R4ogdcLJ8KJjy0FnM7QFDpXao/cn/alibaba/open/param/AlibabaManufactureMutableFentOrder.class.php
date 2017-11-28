<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaManufactureMutableFentOrder extends SDKDomain {

       	
    private $fentGoodsCode;
    
        /**
    * @return 打样订单编码(货号)
    */
        public function getFentGoodsCode() {
        return $this->fentGoodsCode;
    }
    
    /**
     * 设置打样订单编码(货号)     
     * @param String $fentGoodsCode     
     * 参数示例：<pre>THZ0001ABG101GD00020</pre>     
     * 此参数必填     */
    public function setFentGoodsCode( $fentGoodsCode) {
        $this->fentGoodsCode = $fentGoodsCode;
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
     * 参数示例：<pre>Abc2015年6月连衣裙</pre>     
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
     * 参数示例：<pre>FENT｜PRICING｜SEALED| CLOSE｜(支持自定义如:delivered,但关健状态需与文档中的一致)</pre>     
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
     * 参数示例：<pre>打样中｜核价中｜已封样｜关闭｜已寄样(运单号:345234567987)</pre>     
     * 此参数必填     */
    public function setStatusDesc( $statusDesc) {
        $this->statusDesc = $statusDesc;
    }
    
        	
    private $bulkPrice;
    
        /**
    * @return 工厂最终报的核价价格(单元分)
    */
        public function getBulkPrice() {
        return $this->bulkPrice;
    }
    
    /**
     * 设置工厂最终报的核价价格(单元分)     
     * @param Long $bulkPrice     
     * 参数示例：<pre>5000</pre>     
     * 此参数必填     */
    public function setBulkPrice( $bulkPrice) {
        $this->bulkPrice = $bulkPrice;
    }
    
        	
    private $bomList;
    
        /**
    * @return 核价时提供的物料清单(JSON格式)
    */
        public function getBomList() {
        return $this->bomList;
    }
    
    /**
     * 设置核价时提供的物料清单(JSON格式)     
     * @param String $bomList     
     * 参数示例：<pre>[{
“材料名称”:“面料A”,
“供应商”:“中山面料厂”,
“单价”: “8.8”,
“数量”: “1”,
 “单位”: “米”
},…]</pre>     
     * 此参数必填     */
    public function setBomList( $bomList) {
        $this->bomList = $bomList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "fentGoodsCode", $this->stdResult )) {
    				$this->fentGoodsCode = $this->stdResult->{"fentGoodsCode"};
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
    			    		    				    			    			if (array_key_exists ( "bulkPrice", $this->stdResult )) {
    				$this->bulkPrice = $this->stdResult->{"bulkPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "bomList", $this->stdResult )) {
    				$this->bomList = $this->stdResult->{"bomList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "fentGoodsCode", $this->arrayResult )) {
    			$this->fentGoodsCode = $arrayResult['fentGoodsCode'];
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
    		    	    			    		    			if (array_key_exists ( "bulkPrice", $this->arrayResult )) {
    			$this->bulkPrice = $arrayResult['bulkPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "bomList", $this->arrayResult )) {
    			$this->bomList = $arrayResult['bomList'];
    			}
    		    	    		}
 
   
}
?>