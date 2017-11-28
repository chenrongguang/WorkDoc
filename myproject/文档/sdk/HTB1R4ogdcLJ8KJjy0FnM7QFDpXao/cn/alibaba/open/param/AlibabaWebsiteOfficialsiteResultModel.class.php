<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaWebsiteOfficialSite.class.php');

class AlibabaWebsiteOfficialsiteResultModel extends SDKDomain {

       	
    private $message;
    
        /**
    * @return 
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置     
     * @param String $message     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $models;
    
        /**
    * @return 
    */
        public function getModels() {
        return $this->models;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaWebsiteOfficialSite[] $models     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModels(AlibabaWebsiteOfficialSite $models) {
        $this->models = $models;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置     
     * @param Integer $resultCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "models", $this->stdResult )) {
    			$modelsResult=$this->stdResult->{"models"};
    				$object = json_decode ( json_encode ( $modelsResult ), true );
					$this->models = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaWebsiteOfficialSiteResult=new AlibabaWebsiteOfficialSite();
						$AlibabaWebsiteOfficialSiteResult->setArrayResult($arrayobject );
						$this->models [$i] = $AlibabaWebsiteOfficialSiteResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['message'];
    			}
    		    	    			    		    		if (array_key_exists ( "models", $this->arrayResult )) {
    		$modelsResult=$arrayResult['models'];
    			$this->models = new AlibabaWebsiteOfficialSite();
    			$this->models->setStdResult ( $modelsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    		}
 
   
}
?>