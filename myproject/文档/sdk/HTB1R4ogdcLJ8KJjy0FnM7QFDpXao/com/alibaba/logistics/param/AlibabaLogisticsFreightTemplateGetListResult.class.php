<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsFreightTemplate.class.php');

class AlibabaLogisticsFreightTemplateGetListResult {

        	
    private $freightTemplates;
    
        /**
    * @return 运费模板列表
    */
        public function getFreightTemplates() {
        return $this->freightTemplates;
    }
    
    /**
     * 设置运费模板列表     
     * @param array include @see AlibabaLogisticsFreightTemplate[] $freightTemplates     
          
     * 此参数必填     */
    public function setFreightTemplates(AlibabaLogisticsFreightTemplate $freightTemplates) {
        $this->freightTemplates = $freightTemplates;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "freightTemplates", $this->stdResult )) {
    			$freightTemplatesResult=$this->stdResult->{"freightTemplates"};
    				$object = json_decode ( json_encode ( $freightTemplatesResult ), true );
					$this->freightTemplates = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsFreightTemplateResult=new AlibabaLogisticsFreightTemplate();
						$AlibabaLogisticsFreightTemplateResult->setArrayResult($arrayobject );
						$this->freightTemplates [$i] = $AlibabaLogisticsFreightTemplateResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "freightTemplates", $this->arrayResult )) {
    		$freightTemplatesResult=$arrayResult['freightTemplates'];
    			$this->freightTemplates = new AlibabaLogisticsFreightTemplate();
    			$this->freightTemplates->setStdResult ( $freightTemplatesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['errorMsg'];
    			}
    		    	    		}

}
?>