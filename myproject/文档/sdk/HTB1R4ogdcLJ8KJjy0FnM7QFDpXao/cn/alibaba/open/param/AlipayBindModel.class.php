<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlipayAccountModel.class.php');

class AlipayBindModel extends SDKDomain {

       	
    private $enabled;
    
        /**
    * @return 
    */
        public function getEnabled() {
        return $this->enabled;
    }
    
    /**
     * 设置     
     * @param Boolean $enabled     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEnabled( $enabled) {
        $this->enabled = $enabled;
    }
    
        	
    private $memberId;
    
        /**
    * @return 
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $alipayAccountModel;
    
        /**
    * @return 
    */
        public function getAlipayAccountModel() {
        return $this->alipayAccountModel;
    }
    
    /**
     * 设置     
     * @param AlipayAccountModel $alipayAccountModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayAccountModel(AlipayAccountModel $alipayAccountModel) {
        $this->alipayAccountModel = $alipayAccountModel;
    }
    
        	
    private $accountType;
    
        /**
    * @return 
    */
        public function getAccountType() {
        return $this->accountType;
    }
    
    /**
     * 设置     
     * @param String $accountType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAccountType( $accountType) {
        $this->accountType = $accountType;
    }
    
        	
    private $alipayRelationId;
    
        /**
    * @return 
    */
        public function getAlipayRelationId() {
        return $this->alipayRelationId;
    }
    
    /**
     * 设置     
     * @param String $alipayRelationId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayRelationId( $alipayRelationId) {
        $this->alipayRelationId = $alipayRelationId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "enabled", $this->stdResult )) {
    				$this->enabled = $this->stdResult->{"enabled"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayAccountModel", $this->stdResult )) {
    				$alipayAccountModelResult=$this->stdResult->{"alipayAccountModel"};
    				$this->alipayAccountModel = new AlipayAccountModel();
    				$this->alipayAccountModel->setStdResult ( $alipayAccountModelResult);
    			}
    			    		    				    			    			if (array_key_exists ( "accountType", $this->stdResult )) {
    				$this->accountType = $this->stdResult->{"accountType"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayRelationId", $this->stdResult )) {
    				$this->alipayRelationId = $this->stdResult->{"alipayRelationId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "enabled", $this->arrayResult )) {
    			$this->enabled = $arrayResult['enabled'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    		if (array_key_exists ( "alipayAccountModel", $this->arrayResult )) {
    		$alipayAccountModelResult=$arrayResult['alipayAccountModel'];
    			    			$this->alipayAccountModel = new AlipayAccountModel();
    			    			$this->alipayAccountModel->setStdResult ( $alipayAccountModelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "accountType", $this->arrayResult )) {
    			$this->accountType = $arrayResult['accountType'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayRelationId", $this->arrayResult )) {
    			$this->alipayRelationId = $arrayResult['alipayRelationId'];
    			}
    		    	    		}
 
   
}
?>