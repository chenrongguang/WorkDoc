<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaDaixiaoProductInfo.class.php');

class AlibabaDistributorListForAlreadyConsignmentResult {

        	
    private $productInfo;
    
        /**
    * @return 商品列表
    */
        public function getProductInfo() {
        return $this->productInfo;
    }
    
    /**
     * 设置商品列表     
     * @param array include @see AlibabaDaixiaoProductInfo[] $productInfo     
          
     * 此参数必填     */
    public function setProductInfo(AlibabaDaixiaoProductInfo $productInfo) {
        $this->productInfo = $productInfo;
    }
    
        	
    private $count;
    
        /**
    * @return 总条数
    */
        public function getCount() {
        return $this->count;
    }
    
    /**
     * 设置总条数     
     * @param Integer $count     
          
     * 此参数必填     */
    public function setCount( $count) {
        $this->count = $count;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 当前页
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页     
     * @param Integer $currentPage     
          
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页大小
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页大小     
     * @param Integer $pageSize     
          
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productInfo", $this->stdResult )) {
    			$productInfoResult=$this->stdResult->{"productInfo"};
    				$object = json_decode ( json_encode ( $productInfoResult ), true );
					$this->productInfo = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaDaixiaoProductInfoResult=new AlibabaDaixiaoProductInfo();
						$AlibabaDaixiaoProductInfoResult->setArrayResult($arrayobject );
						$this->productInfo [$i] = $AlibabaDaixiaoProductInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "count", $this->stdResult )) {
    				$this->count = $this->stdResult->{"count"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productInfo", $this->arrayResult )) {
    		$productInfoResult=$arrayResult['productInfo'];
    			$this->productInfo = new AlibabaDaixiaoProductInfo();
    			$this->productInfo->setStdResult ( $productInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "count", $this->arrayResult )) {
    			$this->count = $arrayResult['count'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['pageSize'];
    			}
    		    	    		}

}
?>