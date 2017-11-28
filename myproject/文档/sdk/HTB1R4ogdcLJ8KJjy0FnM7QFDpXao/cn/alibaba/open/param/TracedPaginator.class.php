<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TracedPaginator extends SDKDomain {

       	
    private $page;
    
        /**
    * @return 
    */
        public function getPage() {
        return $this->page;
    }
    
    /**
     * 设置     
     * @param Integer $page     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->page = $page;
    }
    
        	
    private $items;
    
        /**
    * @return 
    */
        public function getItems() {
        return $this->items;
    }
    
    /**
     * 设置     
     * @param Integer $items     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItems( $items) {
        $this->items = $items;
    }
    
        	
    private $itemsPerPage;
    
        /**
    * @return 
    */
        public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    
    /**
     * 设置     
     * @param Integer $itemsPerPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "page", $this->stdResult )) {
    				$this->page = $this->stdResult->{"page"};
    			}
    			    		    				    			    			if (array_key_exists ( "items", $this->stdResult )) {
    				$this->items = $this->stdResult->{"items"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemsPerPage", $this->stdResult )) {
    				$this->itemsPerPage = $this->stdResult->{"itemsPerPage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "page", $this->arrayResult )) {
    			$this->page = $arrayResult['page'];
    			}
    		    	    			    		    			if (array_key_exists ( "items", $this->arrayResult )) {
    			$this->items = $arrayResult['items'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemsPerPage", $this->arrayResult )) {
    			$this->itemsPerPage = $arrayResult['itemsPerPage'];
    			}
    		    	    		}
 
   
}
?>