<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaIcbuProductGroupDTO extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置     
     * @param Integer $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $groupName;
    
        /**
    * @return 
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置     
     * @param String $groupName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->groupName = $groupName;
    }
    
        	
    private $indByGroup2;
    
        /**
    * @return 
    */
        public function getIndByGroup2() {
        return $this->indByGroup2;
    }
    
    /**
     * 设置     
     * @param Float $indByGroup2     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIndByGroup2( $indByGroup2) {
        $this->indByGroup2 = $indByGroup2;
    }
    
        	
    private $indByGroup3;
    
        /**
    * @return 
    */
        public function getIndByGroup3() {
        return $this->indByGroup3;
    }
    
    /**
     * 设置     
     * @param Float $indByGroup3     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIndByGroup3( $indByGroup3) {
        $this->indByGroup3 = $indByGroup3;
    }
    
        	
    private $groupName2;
    
        /**
    * @return 
    */
        public function getGroupName2() {
        return $this->groupName2;
    }
    
    /**
     * 设置     
     * @param String $groupName2     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupName2( $groupName2) {
        $this->groupName2 = $groupName2;
    }
    
        	
    private $groupName3;
    
        /**
    * @return 
    */
        public function getGroupName3() {
        return $this->groupName3;
    }
    
    /**
     * 设置     
     * @param String $groupName3     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupName3( $groupName3) {
        $this->groupName3 = $groupName3;
    }
    
        	
    private $indByGroup;
    
        /**
    * @return 
    */
        public function getIndByGroup() {
        return $this->indByGroup;
    }
    
    /**
     * 设置     
     * @param Float $indByGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIndByGroup( $indByGroup) {
        $this->indByGroup = $indByGroup;
    }
    
        	
    private $groupId3;
    
        /**
    * @return 
    */
        public function getGroupId3() {
        return $this->groupId3;
    }
    
    /**
     * 设置     
     * @param Integer $groupId3     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId3( $groupId3) {
        $this->groupId3 = $groupId3;
    }
    
        	
    private $groupId2;
    
        /**
    * @return 
    */
        public function getGroupId2() {
        return $this->groupId2;
    }
    
    /**
     * 设置     
     * @param Integer $groupId2     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId2( $groupId2) {
        $this->groupId2 = $groupId2;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupName", $this->stdResult )) {
    				$this->groupName = $this->stdResult->{"groupName"};
    			}
    			    		    				    			    			if (array_key_exists ( "indByGroup2", $this->stdResult )) {
    				$this->indByGroup2 = $this->stdResult->{"indByGroup2"};
    			}
    			    		    				    			    			if (array_key_exists ( "indByGroup3", $this->stdResult )) {
    				$this->indByGroup3 = $this->stdResult->{"indByGroup3"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupName2", $this->stdResult )) {
    				$this->groupName2 = $this->stdResult->{"groupName2"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupName3", $this->stdResult )) {
    				$this->groupName3 = $this->stdResult->{"groupName3"};
    			}
    			    		    				    			    			if (array_key_exists ( "indByGroup", $this->stdResult )) {
    				$this->indByGroup = $this->stdResult->{"indByGroup"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupId3", $this->stdResult )) {
    				$this->groupId3 = $this->stdResult->{"groupId3"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupId2", $this->stdResult )) {
    				$this->groupId2 = $this->stdResult->{"groupId2"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupName", $this->arrayResult )) {
    			$this->groupName = $arrayResult['groupName'];
    			}
    		    	    			    		    			if (array_key_exists ( "indByGroup2", $this->arrayResult )) {
    			$this->indByGroup2 = $arrayResult['indByGroup2'];
    			}
    		    	    			    		    			if (array_key_exists ( "indByGroup3", $this->arrayResult )) {
    			$this->indByGroup3 = $arrayResult['indByGroup3'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupName2", $this->arrayResult )) {
    			$this->groupName2 = $arrayResult['groupName2'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupName3", $this->arrayResult )) {
    			$this->groupName3 = $arrayResult['groupName3'];
    			}
    		    	    			    		    			if (array_key_exists ( "indByGroup", $this->arrayResult )) {
    			$this->indByGroup = $arrayResult['indByGroup'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupId3", $this->arrayResult )) {
    			$this->groupId3 = $arrayResult['groupId3'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupId2", $this->arrayResult )) {
    			$this->groupId2 = $arrayResult['groupId2'];
    			}
    		    	    		}
 
   
}
?>