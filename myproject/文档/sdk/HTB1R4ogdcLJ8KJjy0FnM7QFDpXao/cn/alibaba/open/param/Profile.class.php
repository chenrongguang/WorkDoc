<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class Profile extends SDKDomain {

       	
    private $accountId;
    
        /**
    * @return 会员ID
    */
        public function getAccountId() {
        return $this->accountId;
    }
    
    /**
     * 设置会员ID     
     * @param String $accountId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    
        	
    private $usedSpace;
    
        /**
    * @return 已使用空间，单位为字节
    */
        public function getUsedSpace() {
        return $this->usedSpace;
    }
    
    /**
     * 设置已使用空间，单位为字节     
     * @param Integer $usedSpace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUsedSpace( $usedSpace) {
        $this->usedSpace = $usedSpace;
    }
    
        	
    private $totalSpace;
    
        /**
    * @return 总空间，单位为字节
    */
        public function getTotalSpace() {
        return $this->totalSpace;
    }
    
    /**
     * 设置总空间，单位为字节     
     * @param Integer $totalSpace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalSpace( $totalSpace) {
        $this->totalSpace = $totalSpace;
    }
    
        	
    private $isFull;
    
        /**
    * @return 空间是否已满，true：已满 false：未满
    */
        public function getIsFull() {
        return $this->isFull;
    }
    
    /**
     * 设置空间是否已满，true：已满 false：未满     
     * @param Boolean $isFull     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsFull( $isFull) {
        $this->isFull = $isFull;
    }
    
        	
    private $spaceUsage;
    
        /**
    * @return 已使用空间占总空间百分比，精确到小数点后两位。如占用30.31%，返回值为30.31
    */
        public function getSpaceUsage() {
        return $this->spaceUsage;
    }
    
    /**
     * 设置已使用空间占总空间百分比，精确到小数点后两位。如占用30.31%，返回值为30.31     
     * @param Double $spaceUsage     
     * 参数示例：<pre>30.31</pre>     
     * 此参数必填     */
    public function setSpaceUsage( $spaceUsage) {
        $this->spaceUsage = $spaceUsage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "accountId", $this->stdResult )) {
    				$this->accountId = $this->stdResult->{"accountId"};
    			}
    			    		    				    			    			if (array_key_exists ( "usedSpace", $this->stdResult )) {
    				$this->usedSpace = $this->stdResult->{"usedSpace"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalSpace", $this->stdResult )) {
    				$this->totalSpace = $this->stdResult->{"totalSpace"};
    			}
    			    		    				    			    			if (array_key_exists ( "isFull", $this->stdResult )) {
    				$this->isFull = $this->stdResult->{"isFull"};
    			}
    			    		    				    			    			if (array_key_exists ( "spaceUsage", $this->stdResult )) {
    				$this->spaceUsage = $this->stdResult->{"spaceUsage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "accountId", $this->arrayResult )) {
    			$this->accountId = $arrayResult['accountId'];
    			}
    		    	    			    		    			if (array_key_exists ( "usedSpace", $this->arrayResult )) {
    			$this->usedSpace = $arrayResult['usedSpace'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalSpace", $this->arrayResult )) {
    			$this->totalSpace = $arrayResult['totalSpace'];
    			}
    		    	    			    		    			if (array_key_exists ( "isFull", $this->arrayResult )) {
    			$this->isFull = $arrayResult['isFull'];
    			}
    		    	    			    		    			if (array_key_exists ( "spaceUsage", $this->arrayResult )) {
    			$this->spaceUsage = $arrayResult['spaceUsage'];
    			}
    		    	    		}
 
   
}
?>