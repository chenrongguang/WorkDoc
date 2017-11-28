<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateRateImprScoreModel.class.php');

class AlibabaProductRateRateImprModel extends SDKDomain {

       	
    private $gmtModified;
    
        /**
    * @return 
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $receiveLoginId;
    
        /**
    * @return 
    */
        public function getReceiveLoginId() {
        return $this->receiveLoginId;
    }
    
    /**
     * 设置     
     * @param String $receiveLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveLoginId( $receiveLoginId) {
        $this->receiveLoginId = $receiveLoginId;
    }
    
        	
    private $receiveMemberId;
    
        /**
    * @return 
    */
        public function getReceiveMemberId() {
        return $this->receiveMemberId;
    }
    
    /**
     * 设置     
     * @param String $receiveMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveMemberId( $receiveMemberId) {
        $this->receiveMemberId = $receiveMemberId;
    }
    
        	
    private $cataId;
    
        /**
    * @return 
    */
        public function getCataId() {
        return $this->cataId;
    }
    
    /**
     * 设置     
     * @param Long $cataId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCataId( $cataId) {
        $this->cataId = $cataId;
    }
    
        	
    private $postUserId;
    
        /**
    * @return 
    */
        public function getPostUserId() {
        return $this->postUserId;
    }
    
    /**
     * 设置     
     * @param Long $postUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostUserId( $postUserId) {
        $this->postUserId = $postUserId;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param Integer $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $imprId;
    
        /**
    * @return 
    */
        public function getImprId() {
        return $this->imprId;
    }
    
    /**
     * 设置     
     * @param String $imprId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImprId( $imprId) {
        $this->imprId = $imprId;
    }
    
        	
    private $modifyReason;
    
        /**
    * @return 
    */
        public function getModifyReason() {
        return $this->modifyReason;
    }
    
    /**
     * 设置     
     * @param Integer $modifyReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifyReason( $modifyReason) {
        $this->modifyReason = $modifyReason;
    }
    
        	
    private $version;
    
        /**
    * @return 
    */
        public function getVersion() {
        return $this->version;
    }
    
    /**
     * 设置     
     * @param Integer $version     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVersion( $version) {
        $this->version = $version;
    }
    
        	
    private $sourceId;
    
        /**
    * @return 
    */
        public function getSourceId() {
        return $this->sourceId;
    }
    
    /**
     * 设置     
     * @param String $sourceId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceId( $sourceId) {
        $this->sourceId = $sourceId;
    }
    
        	
    private $id;
    
        /**
    * @return 
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $modifier;
    
        /**
    * @return 
    */
        public function getModifier() {
        return $this->modifier;
    }
    
    /**
     * 设置     
     * @param String $modifier     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifier( $modifier) {
        $this->modifier = $modifier;
    }
    
        	
    private $receiveUserId;
    
        /**
    * @return 
    */
        public function getReceiveUserId() {
        return $this->receiveUserId;
    }
    
    /**
     * 设置     
     * @param Long $receiveUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveUserId( $receiveUserId) {
        $this->receiveUserId = $receiveUserId;
    }
    
        	
    private $ruleId;
    
        /**
    * @return 
    */
        public function getRuleId() {
        return $this->ruleId;
    }
    
    /**
     * 设置     
     * @param String $ruleId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRuleId( $ruleId) {
        $this->ruleId = $ruleId;
    }
    
        	
    private $bizType;
    
        /**
    * @return 
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置     
     * @param String $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
        	
    private $gmtCompleted;
    
        /**
    * @return 
    */
        public function getGmtCompleted() {
        return $this->gmtCompleted;
    }
    
    /**
     * 设置     
     * @param Date $gmtCompleted     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCompleted( $gmtCompleted) {
        $this->gmtCompleted = $gmtCompleted;
    }
    
        	
    private $postLoginId;
    
        /**
    * @return 
    */
        public function getPostLoginId() {
        return $this->postLoginId;
    }
    
    /**
     * 设置     
     * @param String $postLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostLoginId( $postLoginId) {
        $this->postLoginId = $postLoginId;
    }
    
        	
    private $attributes;
    
        /**
    * @return 
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置     
     * @param String $attributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributes( $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $ruleIdMap;
    
        /**
    * @return 
    */
        public function getRuleIdMap() {
        return $this->ruleIdMap;
    }
    
    /**
     * 设置     
     * @param Map $ruleIdMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRuleIdMap(array $ruleIdMap) {
        $this->ruleIdMap = $ruleIdMap;
    }
    
        	
    private $bizId;
    
        /**
    * @return 
    */
        public function getBizId() {
        return $this->bizId;
    }
    
    /**
     * 设置     
     * @param String $bizId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizId( $bizId) {
        $this->bizId = $bizId;
    }
    
        	
    private $postMemberId;
    
        /**
    * @return 
    */
        public function getPostMemberId() {
        return $this->postMemberId;
    }
    
    /**
     * 设置     
     * @param String $postMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostMemberId( $postMemberId) {
        $this->postMemberId = $postMemberId;
    }
    
        	
    private $imprScoreList;
    
        /**
    * @return 
    */
        public function getImprScoreList() {
        return $this->imprScoreList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductRateRateImprScoreModel[] $imprScoreList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImprScoreList(AlibabaProductRateRateImprScoreModel $imprScoreList) {
        $this->imprScoreList = $imprScoreList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveLoginId", $this->stdResult )) {
    				$this->receiveLoginId = $this->stdResult->{"receiveLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveMemberId", $this->stdResult )) {
    				$this->receiveMemberId = $this->stdResult->{"receiveMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "cataId", $this->stdResult )) {
    				$this->cataId = $this->stdResult->{"cataId"};
    			}
    			    		    				    			    			if (array_key_exists ( "postUserId", $this->stdResult )) {
    				$this->postUserId = $this->stdResult->{"postUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "imprId", $this->stdResult )) {
    				$this->imprId = $this->stdResult->{"imprId"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifyReason", $this->stdResult )) {
    				$this->modifyReason = $this->stdResult->{"modifyReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "version", $this->stdResult )) {
    				$this->version = $this->stdResult->{"version"};
    			}
    			    		    				    			    			if (array_key_exists ( "sourceId", $this->stdResult )) {
    				$this->sourceId = $this->stdResult->{"sourceId"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifier", $this->stdResult )) {
    				$this->modifier = $this->stdResult->{"modifier"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveUserId", $this->stdResult )) {
    				$this->receiveUserId = $this->stdResult->{"receiveUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "ruleId", $this->stdResult )) {
    				$this->ruleId = $this->stdResult->{"ruleId"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCompleted", $this->stdResult )) {
    				$this->gmtCompleted = $this->stdResult->{"gmtCompleted"};
    			}
    			    		    				    			    			if (array_key_exists ( "postLoginId", $this->stdResult )) {
    				$this->postLoginId = $this->stdResult->{"postLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    				$this->attributes = $this->stdResult->{"attributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "ruleIdMap", $this->stdResult )) {
    				$this->ruleIdMap = $this->stdResult->{"ruleIdMap"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizId", $this->stdResult )) {
    				$this->bizId = $this->stdResult->{"bizId"};
    			}
    			    		    				    			    			if (array_key_exists ( "postMemberId", $this->stdResult )) {
    				$this->postMemberId = $this->stdResult->{"postMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "imprScoreList", $this->stdResult )) {
    			$imprScoreListResult=$this->stdResult->{"imprScoreList"};
    				$object = json_decode ( json_encode ( $imprScoreListResult ), true );
					$this->imprScoreList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductRateRateImprScoreModelResult=new AlibabaProductRateRateImprScoreModel();
						$AlibabaProductRateRateImprScoreModelResult->setArrayResult($arrayobject );
						$this->imprScoreList [$i] = $AlibabaProductRateRateImprScoreModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveLoginId", $this->arrayResult )) {
    			$this->receiveLoginId = $arrayResult['receiveLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveMemberId", $this->arrayResult )) {
    			$this->receiveMemberId = $arrayResult['receiveMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "cataId", $this->arrayResult )) {
    			$this->cataId = $arrayResult['cataId'];
    			}
    		    	    			    		    			if (array_key_exists ( "postUserId", $this->arrayResult )) {
    			$this->postUserId = $arrayResult['postUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "imprId", $this->arrayResult )) {
    			$this->imprId = $arrayResult['imprId'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifyReason", $this->arrayResult )) {
    			$this->modifyReason = $arrayResult['modifyReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "version", $this->arrayResult )) {
    			$this->version = $arrayResult['version'];
    			}
    		    	    			    		    			if (array_key_exists ( "sourceId", $this->arrayResult )) {
    			$this->sourceId = $arrayResult['sourceId'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifier", $this->arrayResult )) {
    			$this->modifier = $arrayResult['modifier'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveUserId", $this->arrayResult )) {
    			$this->receiveUserId = $arrayResult['receiveUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "ruleId", $this->arrayResult )) {
    			$this->ruleId = $arrayResult['ruleId'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCompleted", $this->arrayResult )) {
    			$this->gmtCompleted = $arrayResult['gmtCompleted'];
    			}
    		    	    			    		    			if (array_key_exists ( "postLoginId", $this->arrayResult )) {
    			$this->postLoginId = $arrayResult['postLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attributes", $this->arrayResult )) {
    			$this->attributes = $arrayResult['attributes'];
    			}
    		    	    			    		    			if (array_key_exists ( "ruleIdMap", $this->arrayResult )) {
    			$this->ruleIdMap = $arrayResult['ruleIdMap'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizId", $this->arrayResult )) {
    			$this->bizId = $arrayResult['bizId'];
    			}
    		    	    			    		    			if (array_key_exists ( "postMemberId", $this->arrayResult )) {
    			$this->postMemberId = $arrayResult['postMemberId'];
    			}
    		    	    			    		    		if (array_key_exists ( "imprScoreList", $this->arrayResult )) {
    		$imprScoreListResult=$arrayResult['imprScoreList'];
    			$this->imprScoreList = new AlibabaProductRateRateImprScoreModel();
    			$this->imprScoreList->setStdResult ( $imprScoreListResult);
    		}
    		    	    		}
 
   
}
?>