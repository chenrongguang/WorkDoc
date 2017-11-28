<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductInfo.class.php');

class AlibabaProductPageResult extends SDKDomain {

       	
    private $sizePerPage;
    
        /**
    * @return 
    */
        public function getSizePerPage() {
        return $this->sizePerPage;
    }
    
    /**
     * 设置     
     * @param Integer $sizePerPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSizePerPage( $sizePerPage) {
        $this->sizePerPage = $sizePerPage;
    }
    
        	
    private $resultList;
    
        /**
    * @return 
    */
        public function getResultList() {
        return $this->resultList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductProductInfo[] $resultList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultList(AlibabaProductProductInfo $resultList) {
        $this->resultList = $resultList;
    }
    
        	
    private $totalRecords;
    
        /**
    * @return 
    */
        public function getTotalRecords() {
        return $this->totalRecords;
    }
    
    /**
     * 设置     
     * @param Integer $totalRecords     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalRecords( $totalRecords) {
        $this->totalRecords = $totalRecords;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sizePerPage", $this->stdResult )) {
    				$this->sizePerPage = $this->stdResult->{"sizePerPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultList", $this->stdResult )) {
    			$resultListResult=$this->stdResult->{"resultList"};
    				$object = json_decode ( json_encode ( $resultListResult ), true );
					$this->resultList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductInfoResult=new AlibabaProductProductInfo();
						$AlibabaProductProductInfoResult->setArrayResult($arrayobject );
						$this->resultList [$i] = $AlibabaProductProductInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalRecords", $this->stdResult )) {
    				$this->totalRecords = $this->stdResult->{"totalRecords"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sizePerPage", $this->arrayResult )) {
    			$this->sizePerPage = $arrayResult['sizePerPage'];
    			}
    		    	    			    		    		if (array_key_exists ( "resultList", $this->arrayResult )) {
    		$resultListResult=$arrayResult['resultList'];
    			$this->resultList = new AlibabaProductProductInfo();
    			$this->resultList->setStdResult ( $resultListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalRecords", $this->arrayResult )) {
    			$this->totalRecords = $arrayResult['totalRecords'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['pageIndex'];
    			}
    		    	    		}
 
   
}
?>