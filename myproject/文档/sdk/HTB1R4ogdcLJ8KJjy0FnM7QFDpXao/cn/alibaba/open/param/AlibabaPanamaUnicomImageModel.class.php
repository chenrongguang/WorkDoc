<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaUnicomImageModel extends SDKDomain {

       	
    private $path;
    
        /**
    * @return 图片绝对地址
    */
        public function getPath() {
        return $this->path;
    }
    
    /**
     * 设置图片绝对地址     
     * @param String $path     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPath( $path) {
        $this->path = $path;
    }
    
        	
    private $isPrimary;
    
        /**
    * @return 是否主图
    */
        public function getIsPrimary() {
        return $this->isPrimary;
    }
    
    /**
     * 设置是否主图     
     * @param Boolean $isPrimary     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsPrimary( $isPrimary) {
        $this->isPrimary = $isPrimary;
    }
    
        	
    private $orderSort;
    
        /**
    * @return 排序，从0开始
    */
        public function getOrderSort() {
        return $this->orderSort;
    }
    
    /**
     * 设置排序，从0开始     
     * @param Integer $orderSort     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderSort( $orderSort) {
        $this->orderSort = $orderSort;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "path", $this->stdResult )) {
    				$this->path = $this->stdResult->{"path"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPrimary", $this->stdResult )) {
    				$this->isPrimary = $this->stdResult->{"isPrimary"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderSort", $this->stdResult )) {
    				$this->orderSort = $this->stdResult->{"orderSort"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "path", $this->arrayResult )) {
    			$this->path = $arrayResult['path'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPrimary", $this->arrayResult )) {
    			$this->isPrimary = $arrayResult['isPrimary'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderSort", $this->arrayResult )) {
    			$this->orderSort = $arrayResult['orderSort'];
    			}
    		    	    		}
 
   
}
?>