<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/TracedTracedProductModel.class.php');
include_once ('cn/alibaba/open/param/TracedPaginator.class.php');

class TracedTracedProductPageList extends SDKDomain {

       	
    private $dataList;
    
        /**
    * @return 
    */
        public function getDataList() {
        return $this->dataList;
    }
    
    /**
     * 设置     
     * @param array include @see TracedTracedProductModel[] $dataList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDataList(TracedTracedProductModel $dataList) {
        $this->dataList = $dataList;
    }
    
        	
    private $paginator;
    
        /**
    * @return 
    */
        public function getPaginator() {
        return $this->paginator;
    }
    
    /**
     * 设置     
     * @param TracedPaginator $paginator     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPaginator(TracedPaginator $paginator) {
        $this->paginator = $paginator;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "dataList", $this->stdResult )) {
    			$dataListResult=$this->stdResult->{"dataList"};
    				$object = json_decode ( json_encode ( $dataListResult ), true );
					$this->dataList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$TracedTracedProductModelResult=new TracedTracedProductModel();
						$TracedTracedProductModelResult->setArrayResult($arrayobject );
						$this->dataList [$i] = $TracedTracedProductModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "paginator", $this->stdResult )) {
    				$paginatorResult=$this->stdResult->{"paginator"};
    				$this->paginator = new TracedPaginator();
    				$this->paginator->setStdResult ( $paginatorResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "dataList", $this->arrayResult )) {
    		$dataListResult=$arrayResult['dataList'];
    			$this->dataList = new TracedTracedProductModel();
    			$this->dataList->setStdResult ( $dataListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "paginator", $this->arrayResult )) {
    		$paginatorResult=$arrayResult['paginator'];
    			    			$this->paginator = new TracedPaginator();
    			    			$this->paginator->setStdResult ( $paginatorResult);
    		}
    		    	    		}
 
   
}
?>