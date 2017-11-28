<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeOpProcessTemplate.class.php');

class AlibabaOpenplatformTradeResultOpProcessTemplateResultModel extends SDKDomain {

       	
    private $opProcessTemplates;
    
        /**
    * @return 
    */
        public function getOpProcessTemplates() {
        return $this->opProcessTemplates;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaOpenplatformTradeOpProcessTemplate[] $opProcessTemplates     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOpProcessTemplates(AlibabaOpenplatformTradeOpProcessTemplate $opProcessTemplates) {
        $this->opProcessTemplates = $opProcessTemplates;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "opProcessTemplates", $this->stdResult )) {
    			$opProcessTemplatesResult=$this->stdResult->{"opProcessTemplates"};
    				$object = json_decode ( json_encode ( $opProcessTemplatesResult ), true );
					$this->opProcessTemplates = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeOpProcessTemplateResult=new AlibabaOpenplatformTradeOpProcessTemplate();
						$AlibabaOpenplatformTradeOpProcessTemplateResult->setArrayResult($arrayobject );
						$this->opProcessTemplates [$i] = $AlibabaOpenplatformTradeOpProcessTemplateResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "opProcessTemplates", $this->arrayResult )) {
    		$opProcessTemplatesResult=$arrayResult['opProcessTemplates'];
    			$this->opProcessTemplates = new AlibabaOpenplatformTradeOpProcessTemplate();
    			$this->opProcessTemplates->setStdResult ( $opProcessTemplatesResult);
    		}
    		    	    		}
 
   
}
?>