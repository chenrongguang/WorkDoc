<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainProductProductCoop.class.php');

class CaigouApiProductQueryProductByCodeListResult {

        	
    private $prodList;
    
        /**
    * @return 产品列表
    */
        public function getProdList() {
        return $this->prodList;
    }
    
    /**
     * 设置产品列表     
     * @param CaigouDomainProductProductCoop $prodList     
          
     * 此参数必填     */
    public function setProdList(CaigouDomainProductProductCoop $prodList) {
        $this->prodList = $prodList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "prodList", $this->stdResult )) {
    				$prodListResult=$this->stdResult->{"prodList"};
    				$this->prodList = new CaigouDomainProductProductCoop();
    				$this->prodList->setStdResult ( $prodListResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "prodList", $this->arrayResult )) {
    		$prodListResult=$arrayResult['prodList'];
    			    			$this->prodList = new CaigouDomainProductProductCoop();
    			    			$this->prodList->setStdResult ( $prodListResult);
    		}
    		    	    		}

}
?>