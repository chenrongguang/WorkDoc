<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OrderModel.class.php');

class OrderListResult extends SDKDomain {

       	
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
    
        	
    private $lastStartRow;
    
        /**
    * @return 
    */
        public function getLastStartRow() {
        return $this->lastStartRow;
    }
    
    /**
     * 设置     
     * @param String $lastStartRow     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLastStartRow( $lastStartRow) {
        $this->lastStartRow = $lastStartRow;
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
     * @param array include @see OrderModel[] $modelList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModelList(OrderModel $modelList) {
        $this->modelList = $modelList;
    }
    
        	
    private $realPrePageSize;
    
        /**
    * @return 
    */
        public function getRealPrePageSize() {
        return $this->realPrePageSize;
    }
    
    /**
     * 设置     
     * @param Integer $realPrePageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealPrePageSize( $realPrePageSize) {
        $this->realPrePageSize = $realPrePageSize;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastStartRow", $this->stdResult )) {
    				$this->lastStartRow = $this->stdResult->{"lastStartRow"};
    			}
    			    		    				    			    			if (array_key_exists ( "modelList", $this->stdResult )) {
    			$modelListResult=$this->stdResult->{"modelList"};
    				$object = json_decode ( json_encode ( $modelListResult ), true );
					$this->modelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OrderModelResult=new OrderModel();
						$OrderModelResult->setArrayResult($arrayobject );
						$this->modelList [$i] = $OrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "realPrePageSize", $this->stdResult )) {
    				$this->realPrePageSize = $this->stdResult->{"realPrePageSize"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['totalCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastStartRow", $this->arrayResult )) {
    			$this->lastStartRow = $arrayResult['lastStartRow'];
    			}
    		    	    			    		    		if (array_key_exists ( "modelList", $this->arrayResult )) {
    		$modelListResult=$arrayResult['modelList'];
    			$this->modelList = new OrderModel();
    			$this->modelList->setStdResult ( $modelListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "realPrePageSize", $this->arrayResult )) {
    			$this->realPrePageSize = $arrayResult['realPrePageSize'];
    			}
    		    	    		}
 
   
}
?>