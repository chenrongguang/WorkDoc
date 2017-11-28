<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeFreightFreightTemplateListGetResult {

        	
    private $id;
    
        /**
    * @return 运费模板ID-PK
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置运费模板ID-PK     
     * @param Long $id     
          
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    		}

}
?>