<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductRateMemberIdentityAttrModel.class.php');

class AlibabaProductRateRateModelUserInfo extends SDKDomain {

       	
    private $memberIdentityAttrModel;
    
        /**
    * @return 
    */
        public function getMemberIdentityAttrModel() {
        return $this->memberIdentityAttrModel;
    }
    
    /**
     * 设置     
     * @param AlibabaProductRateMemberIdentityAttrModel $memberIdentityAttrModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberIdentityAttrModel(AlibabaProductRateMemberIdentityAttrModel $memberIdentityAttrModel) {
        $this->memberIdentityAttrModel = $memberIdentityAttrModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "memberIdentityAttrModel", $this->stdResult )) {
    				$memberIdentityAttrModelResult=$this->stdResult->{"memberIdentityAttrModel"};
    				$this->memberIdentityAttrModel = new AlibabaProductRateMemberIdentityAttrModel();
    				$this->memberIdentityAttrModel->setStdResult ( $memberIdentityAttrModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "memberIdentityAttrModel", $this->arrayResult )) {
    		$memberIdentityAttrModelResult=$arrayResult['memberIdentityAttrModel'];
    			    			$this->memberIdentityAttrModel = new AlibabaProductRateMemberIdentityAttrModel();
    			    			$this->memberIdentityAttrModel->setStdResult ( $memberIdentityAttrModelResult);
    		}
    		    	    		}
 
   
}
?>