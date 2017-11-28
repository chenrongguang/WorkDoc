<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaMarketingCouponActivityModel.class.php');

class AlibabaMarketingListResult extends SDKDomain {

       	
    private $totalCount;
    
        /**
    * @return 
    */
        public function getTotalCount() {
        return $this->totalCount;
    }
    
    /**
     * 设置     
     * @param Integer $totalCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置     
     * @param Integer $pageIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
        	
    private $modelList;
    
        /**
    * @return 
    */
        public function getModelList() {
        return $this->modelList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaMarketingCouponActivityModel[] $modelList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModelList(AlibabaMarketingCouponActivityModel $modelList) {
        $this->modelList = $modelList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "modelList", $this->stdResult )) {
    			$modelListResult=$this->stdResult->{"modelList"};
    				$object = json_decode ( json_encode ( $modelListResult ), true );
					$this->modelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaMarketingCouponActivityModelResult=new AlibabaMarketingCouponActivityModel();
						$AlibabaMarketingCouponActivityModelResult->setArrayResult($arrayobject );
						$this->modelList [$i] = $AlibabaMarketingCouponActivityModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['totalCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['pageIndex'];
    			}
    		    	    			    		    		if (array_key_exists ( "modelList", $this->arrayResult )) {
    		$modelListResult=$arrayResult['modelList'];
    			$this->modelList = new AlibabaMarketingCouponActivityModel();
    			$this->modelList->setStdResult ( $modelListResult);
    		}
    		    	    		}
 
   
}
?>