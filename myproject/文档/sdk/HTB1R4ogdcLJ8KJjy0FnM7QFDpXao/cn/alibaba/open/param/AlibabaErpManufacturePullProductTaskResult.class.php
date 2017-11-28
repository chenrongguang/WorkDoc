<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaManufactureProductTask.class.php');

class AlibabaErpManufacturePullProductTaskResult {

        	
    private $productTaskList;
    
        /**
    * @return 需求单任务节点列表
    */
        public function getProductTaskList() {
        return $this->productTaskList;
    }
    
    /**
     * 设置需求单任务节点列表     
     * @param array include @see AlibabaManufactureProductTask[] $productTaskList     
          
     * 此参数必填     */
    public function setProductTaskList(AlibabaManufactureProductTask $productTaskList) {
        $this->productTaskList = $productTaskList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productTaskList", $this->stdResult )) {
    			$productTaskListResult=$this->stdResult->{"productTaskList"};
    				$object = json_decode ( json_encode ( $productTaskListResult ), true );
					$this->productTaskList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaManufactureProductTaskResult=new AlibabaManufactureProductTask();
						$AlibabaManufactureProductTaskResult->setArrayResult($arrayobject );
						$this->productTaskList [$i] = $AlibabaManufactureProductTaskResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productTaskList", $this->arrayResult )) {
    		$productTaskListResult=$arrayResult['productTaskList'];
    			$this->productTaskList = new AlibabaManufactureProductTask();
    			$this->productTaskList->setStdResult ( $productTaskListResult);
    		}
    		    	    		}

}
?>