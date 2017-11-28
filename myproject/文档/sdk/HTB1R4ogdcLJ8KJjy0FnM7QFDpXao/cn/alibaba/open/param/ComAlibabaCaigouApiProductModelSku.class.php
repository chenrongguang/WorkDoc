<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiProductModelSkuSpecAttribute.class.php');

class ComAlibabaCaigouApiProductModelSku extends SDKDomain {

       	
    private $price;
    
        /**
    * @return 
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置     
     * @param Double $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $specAttributes;
    
        /**
    * @return 
    */
        public function getSpecAttributes() {
        return $this->specAttributes;
    }
    
    /**
     * 设置     
     * @param array include @see ComAlibabaCaigouApiProductModelSkuSpecAttribute[] $specAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecAttributes(ComAlibabaCaigouApiProductModelSkuSpecAttribute $specAttributes) {
        $this->specAttributes = $specAttributes;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "specAttributes", $this->stdResult )) {
    			$specAttributesResult=$this->stdResult->{"specAttributes"};
    				$object = json_decode ( json_encode ( $specAttributesResult ), true );
					$this->specAttributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiProductModelSkuSpecAttributeResult=new ComAlibabaCaigouApiProductModelSkuSpecAttribute();
						$ComAlibabaCaigouApiProductModelSkuSpecAttributeResult->setArrayResult($arrayobject );
						$this->specAttributes [$i] = $ComAlibabaCaigouApiProductModelSkuSpecAttributeResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    		if (array_key_exists ( "specAttributes", $this->arrayResult )) {
    		$specAttributesResult=$arrayResult['specAttributes'];
    			$this->specAttributes = new ComAlibabaCaigouApiProductModelSkuSpecAttribute();
    			$this->specAttributes->setStdResult ( $specAttributesResult);
    		}
    		    	    		}
 
   
}
?>