<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CoopMallQuoteGroupModel extends SDKDomain {

       	
    private $quoteIdList;
    
        /**
    * @return 该分组的报价id列表
    */
        public function getQuoteIdList() {
        return $this->quoteIdList;
    }
    
    /**
     * 设置该分组的报价id列表     
     * @param List $quoteIdList     
     * 参数示例：<pre>[123,456]</pre>     
     * 此参数必填     */
    public function setQuoteIdList(array $quoteIdList) {
        $this->quoteIdList = $quoteIdList;
    }
    
        	
    private $type;
    
        /**
    * @return 分组类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置分组类型     
     * @param String $type     
     * 参数示例：<pre>nestpaired：采购商城伙拼报价；nestpairedNotStart：采购商城伙拼报价预热；nest：采购商城普通报价</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $msg;
    
        /**
    * @return 分组的文案信息，用于展示
    */
        public function getMsg() {
        return $this->msg;
    }
    
    /**
     * 设置分组的文案信息，用于展示     
     * @param String $msg     
     * 参数示例：<pre>1688采购伙拼商品</pre>     
     * 此参数必填     */
    public function setMsg( $msg) {
        $this->msg = $msg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "quoteIdList", $this->stdResult )) {
    				$this->quoteIdList = $this->stdResult->{"quoteIdList"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "msg", $this->stdResult )) {
    				$this->msg = $this->stdResult->{"msg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "quoteIdList", $this->arrayResult )) {
    			$this->quoteIdList = $arrayResult['quoteIdList'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "msg", $this->arrayResult )) {
    			$this->msg = $arrayResult['msg'];
    			}
    		    	    		}
 
   
}
?>