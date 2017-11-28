<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ShowWindowModel extends SDKDomain {

       	
    private $swUsedCount;
    
        /**
    * @return 已用橱窗数
    */
        public function getSwUsedCount() {
        return $this->swUsedCount;
    }
    
    /**
     * 设置已用橱窗数     
     * @param Integer $swUsedCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwUsedCount( $swUsedCount) {
        $this->swUsedCount = $swUsedCount;
    }
    
        	
    private $swTotalCount;
    
        /**
    * @return 橱窗总数
    */
        public function getSwTotalCount() {
        return $this->swTotalCount;
    }
    
    /**
     * 设置橱窗总数     
     * @param Integer $swTotalCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwTotalCount( $swTotalCount) {
        $this->swTotalCount = $swTotalCount;
    }
    
        	
    private $swBaseCount;
    
        /**
    * @return 基准橱窗数
    */
        public function getSwBaseCount() {
        return $this->swBaseCount;
    }
    
    /**
     * 设置基准橱窗数     
     * @param Integer $swBaseCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwBaseCount( $swBaseCount) {
        $this->swBaseCount = $swBaseCount;
    }
    
        	
    private $swAwardCount;
    
        /**
    * @return 奖励橱窗数
    */
        public function getSwAwardCount() {
        return $this->swAwardCount;
    }
    
    /**
     * 设置奖励橱窗数     
     * @param Integer $swAwardCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwAwardCount( $swAwardCount) {
        $this->swAwardCount = $swAwardCount;
    }
    
        	
    private $swReduceCount;
    
        /**
    * @return 扣减橱窗数
    */
        public function getSwReduceCount() {
        return $this->swReduceCount;
    }
    
    /**
     * 设置扣减橱窗数     
     * @param Integer $swReduceCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwReduceCount( $swReduceCount) {
        $this->swReduceCount = $swReduceCount;
    }
    
        	
    private $swRemainCount;
    
        /**
    * @return 剩余橱窗数
    */
        public function getSwRemainCount() {
        return $this->swRemainCount;
    }
    
    /**
     * 设置剩余橱窗数     
     * @param Integer $swRemainCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwRemainCount( $swRemainCount) {
        $this->swRemainCount = $swRemainCount;
    }
    
        	
    private $swActivityCount;
    
        /**
    * @return 活动奖励橱窗数
    */
        public function getSwActivityCount() {
        return $this->swActivityCount;
    }
    
    /**
     * 设置活动奖励橱窗数     
     * @param Integer $swActivityCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwActivityCount( $swActivityCount) {
        $this->swActivityCount = $swActivityCount;
    }
    
        	
    private $memberId;
    
        /**
    * @return 会员ID
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置会员ID     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $versionId;
    
        /**
    * @return 版本ID
    */
        public function getVersionId() {
        return $this->versionId;
    }
    
    /**
     * 设置版本ID     
     * @param Integer $versionId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVersionId( $versionId) {
        $this->versionId = $versionId;
    }
    
        	
    private $swBaseCountReason;
    
        /**
    * @return 基准橱窗数原因
    */
        public function getSwBaseCountReason() {
        return $this->swBaseCountReason;
    }
    
    /**
     * 设置基准橱窗数原因     
     * @param String $swBaseCountReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwBaseCountReason( $swBaseCountReason) {
        $this->swBaseCountReason = $swBaseCountReason;
    }
    
        	
    private $swAwardCountReason;
    
        /**
    * @return 奖励橱窗数原因
    */
        public function getSwAwardCountReason() {
        return $this->swAwardCountReason;
    }
    
    /**
     * 设置奖励橱窗数原因     
     * @param String $swAwardCountReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwAwardCountReason( $swAwardCountReason) {
        $this->swAwardCountReason = $swAwardCountReason;
    }
    
        	
    private $swReduceCountReason;
    
        /**
    * @return 扣减橱窗数原因
    */
        public function getSwReduceCountReason() {
        return $this->swReduceCountReason;
    }
    
    /**
     * 设置扣减橱窗数原因     
     * @param String $swReduceCountReason     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSwReduceCountReason( $swReduceCountReason) {
        $this->swReduceCountReason = $swReduceCountReason;
    }
    
        	
    private $blackListMemberStatus;
    
        /**
    * @return 是否黑名单会员，true为黑名单，false不为黑名单
    */
        public function getBlackListMemberStatus() {
        return $this->blackListMemberStatus;
    }
    
    /**
     * 设置是否黑名单会员，true为黑名单，false不为黑名单     
     * @param Boolean $blackListMemberStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBlackListMemberStatus( $blackListMemberStatus) {
        $this->blackListMemberStatus = $blackListMemberStatus;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 橱窗运算时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置橱窗运算时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "swUsedCount", $this->stdResult )) {
    				$this->swUsedCount = $this->stdResult->{"swUsedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "swTotalCount", $this->stdResult )) {
    				$this->swTotalCount = $this->stdResult->{"swTotalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "swBaseCount", $this->stdResult )) {
    				$this->swBaseCount = $this->stdResult->{"swBaseCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "swAwardCount", $this->stdResult )) {
    				$this->swAwardCount = $this->stdResult->{"swAwardCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "swReduceCount", $this->stdResult )) {
    				$this->swReduceCount = $this->stdResult->{"swReduceCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "swRemainCount", $this->stdResult )) {
    				$this->swRemainCount = $this->stdResult->{"swRemainCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "swActivityCount", $this->stdResult )) {
    				$this->swActivityCount = $this->stdResult->{"swActivityCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "versionId", $this->stdResult )) {
    				$this->versionId = $this->stdResult->{"versionId"};
    			}
    			    		    				    			    			if (array_key_exists ( "swBaseCountReason", $this->stdResult )) {
    				$this->swBaseCountReason = $this->stdResult->{"swBaseCountReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "swAwardCountReason", $this->stdResult )) {
    				$this->swAwardCountReason = $this->stdResult->{"swAwardCountReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "swReduceCountReason", $this->stdResult )) {
    				$this->swReduceCountReason = $this->stdResult->{"swReduceCountReason"};
    			}
    			    		    				    			    			if (array_key_exists ( "blackListMemberStatus", $this->stdResult )) {
    				$this->blackListMemberStatus = $this->stdResult->{"blackListMemberStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "swUsedCount", $this->arrayResult )) {
    			$this->swUsedCount = $arrayResult['swUsedCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "swTotalCount", $this->arrayResult )) {
    			$this->swTotalCount = $arrayResult['swTotalCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "swBaseCount", $this->arrayResult )) {
    			$this->swBaseCount = $arrayResult['swBaseCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "swAwardCount", $this->arrayResult )) {
    			$this->swAwardCount = $arrayResult['swAwardCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "swReduceCount", $this->arrayResult )) {
    			$this->swReduceCount = $arrayResult['swReduceCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "swRemainCount", $this->arrayResult )) {
    			$this->swRemainCount = $arrayResult['swRemainCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "swActivityCount", $this->arrayResult )) {
    			$this->swActivityCount = $arrayResult['swActivityCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "versionId", $this->arrayResult )) {
    			$this->versionId = $arrayResult['versionId'];
    			}
    		    	    			    		    			if (array_key_exists ( "swBaseCountReason", $this->arrayResult )) {
    			$this->swBaseCountReason = $arrayResult['swBaseCountReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "swAwardCountReason", $this->arrayResult )) {
    			$this->swAwardCountReason = $arrayResult['swAwardCountReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "swReduceCountReason", $this->arrayResult )) {
    			$this->swReduceCountReason = $arrayResult['swReduceCountReason'];
    			}
    		    	    			    		    			if (array_key_exists ( "blackListMemberStatus", $this->arrayResult )) {
    			$this->blackListMemberStatus = $arrayResult['blackListMemberStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    		}
 
   
}
?>