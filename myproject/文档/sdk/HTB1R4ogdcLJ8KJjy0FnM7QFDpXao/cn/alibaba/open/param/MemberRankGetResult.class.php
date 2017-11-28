<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MemberRankGetResult {

        	
    private $ranks;
    
        /**
    * @return 会员等级数组。数组元素包含id，discount，priceAllow，imageAllow，name，memberNumber
    */
        public function getRanks() {
        return $this->ranks;
    }
    
    /**
     * 设置会员等级数组。数组元素包含id，discount，priceAllow，imageAllow，name，memberNumber     
     * @param array include @see String[] $ranks     
          
     * 此参数必填     */
    public function setRanks( $ranks) {
        $this->ranks = $ranks;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "ranks", $this->stdResult )) {
    				$this->ranks = $this->stdResult->{"ranks"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "ranks", $this->arrayResult )) {
    			$this->ranks = $arrayResult['ranks'];
    			}
    		    	    		}

}
?>