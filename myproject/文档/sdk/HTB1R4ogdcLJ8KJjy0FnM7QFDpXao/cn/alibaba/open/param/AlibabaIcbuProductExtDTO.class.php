<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductEffectDTO.class.php');

class AlibabaIcbuProductExtDTO extends SDKDomain {

       	
    private $outUrl;
    
        /**
    * @return 
    */
        public function getOutUrl() {
        return $this->outUrl;
    }
    
    /**
     * 设置     
     * @param String $outUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutUrl( $outUrl) {
        $this->outUrl = $outUrl;
    }
    
        	
    private $redModel;
    
        /**
    * @return 
    */
        public function getRedModel() {
        return $this->redModel;
    }
    
    /**
     * 设置     
     * @param String $redModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRedModel( $redModel) {
        $this->redModel = $redModel;
    }
    
        	
    private $productEffectDTO;
    
        /**
    * @return 
    */
        public function getProductEffectDTO() {
        return $this->productEffectDTO;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductEffectDTO $productEffectDTO     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductEffectDTO(AlibabaIcbuProductEffectDTO $productEffectDTO) {
        $this->productEffectDTO = $productEffectDTO;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "outUrl", $this->stdResult )) {
    				$this->outUrl = $this->stdResult->{"outUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "redModel", $this->stdResult )) {
    				$this->redModel = $this->stdResult->{"redModel"};
    			}
    			    		    				    			    			if (array_key_exists ( "productEffectDTO", $this->stdResult )) {
    				$productEffectDTOResult=$this->stdResult->{"productEffectDTO"};
    				$this->productEffectDTO = new AlibabaIcbuProductEffectDTO();
    				$this->productEffectDTO->setStdResult ( $productEffectDTOResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "outUrl", $this->arrayResult )) {
    			$this->outUrl = $arrayResult['outUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "redModel", $this->arrayResult )) {
    			$this->redModel = $arrayResult['redModel'];
    			}
    		    	    			    		    		if (array_key_exists ( "productEffectDTO", $this->arrayResult )) {
    		$productEffectDTOResult=$arrayResult['productEffectDTO'];
    			    			$this->productEffectDTO = new AlibabaIcbuProductEffectDTO();
    			    			$this->productEffectDTO->setStdResult ( $productEffectDTOResult);
    		}
    		    	    		}
 
   
}
?>