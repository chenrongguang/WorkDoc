<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListProductSearchDTO.class.php');
include_once ('cn/alibaba/open/param/AlibabaIcbuProductListSearchContextDTO.class.php');

class AlibabaIcbuProductListProductSearchResult extends SDKDomain {

       	
    private $suppliersNumber;
    
        /**
    * @return 
    */
        public function getSuppliersNumber() {
        return $this->suppliersNumber;
    }
    
    /**
     * 设置     
     * @param Integer $suppliersNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuppliersNumber( $suppliersNumber) {
        $this->suppliersNumber = $suppliersNumber;
    }
    
        	
    private $resultsNumber;
    
        /**
    * @return 
    */
        public function getResultsNumber() {
        return $this->resultsNumber;
    }
    
    /**
     * 设置     
     * @param Integer $resultsNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultsNumber( $resultsNumber) {
        $this->resultsNumber = $resultsNumber;
    }
    
        	
    private $extraResultsNumber;
    
        /**
    * @return 
    */
        public function getExtraResultsNumber() {
        return $this->extraResultsNumber;
    }
    
    /**
     * 设置     
     * @param Integer $extraResultsNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtraResultsNumber( $extraResultsNumber) {
        $this->extraResultsNumber = $extraResultsNumber;
    }
    
        	
    private $suppliersMap;
    
        /**
    * @return 
    */
        public function getSuppliersMap() {
        return $this->suppliersMap;
    }
    
    /**
     * 设置     
     * @param Map $suppliersMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuppliersMap(array $suppliersMap) {
        $this->suppliersMap = $suppliersMap;
    }
    
        	
    private $statisticMap;
    
        /**
    * @return 
    */
        public function getStatisticMap() {
        return $this->statisticMap;
    }
    
    /**
     * 设置     
     * @param Map $statisticMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatisticMap(array $statisticMap) {
        $this->statisticMap = $statisticMap;
    }
    
        	
    private $productsList;
    
        /**
    * @return 
    */
        public function getProductsList() {
        return $this->productsList;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaIcbuProductListProductSearchDTO[] $productsList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductsList(AlibabaIcbuProductListProductSearchDTO $productsList) {
        $this->productsList = $productsList;
    }
    
        	
    private $searchContextDTO;
    
        /**
    * @return 
    */
        public function getSearchContextDTO() {
        return $this->searchContextDTO;
    }
    
    /**
     * 设置     
     * @param AlibabaIcbuProductListSearchContextDTO $searchContextDTO     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSearchContextDTO(AlibabaIcbuProductListSearchContextDTO $searchContextDTO) {
        $this->searchContextDTO = $searchContextDTO;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "suppliersNumber", $this->stdResult )) {
    				$this->suppliersNumber = $this->stdResult->{"suppliersNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultsNumber", $this->stdResult )) {
    				$this->resultsNumber = $this->stdResult->{"resultsNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "extraResultsNumber", $this->stdResult )) {
    				$this->extraResultsNumber = $this->stdResult->{"extraResultsNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "suppliersMap", $this->stdResult )) {
    				$this->suppliersMap = $this->stdResult->{"suppliersMap"};
    			}
    			    		    				    			    			if (array_key_exists ( "statisticMap", $this->stdResult )) {
    				$this->statisticMap = $this->stdResult->{"statisticMap"};
    			}
    			    		    				    			    			if (array_key_exists ( "productsList", $this->stdResult )) {
    			$productsListResult=$this->stdResult->{"productsList"};
    				$object = json_decode ( json_encode ( $productsListResult ), true );
					$this->productsList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaIcbuProductListProductSearchDTOResult=new AlibabaIcbuProductListProductSearchDTO();
						$AlibabaIcbuProductListProductSearchDTOResult->setArrayResult($arrayobject );
						$this->productsList [$i] = $AlibabaIcbuProductListProductSearchDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "searchContextDTO", $this->stdResult )) {
    				$searchContextDTOResult=$this->stdResult->{"searchContextDTO"};
    				$this->searchContextDTO = new AlibabaIcbuProductListSearchContextDTO();
    				$this->searchContextDTO->setStdResult ( $searchContextDTOResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "suppliersNumber", $this->arrayResult )) {
    			$this->suppliersNumber = $arrayResult['suppliersNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultsNumber", $this->arrayResult )) {
    			$this->resultsNumber = $arrayResult['resultsNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "extraResultsNumber", $this->arrayResult )) {
    			$this->extraResultsNumber = $arrayResult['extraResultsNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "suppliersMap", $this->arrayResult )) {
    			$this->suppliersMap = $arrayResult['suppliersMap'];
    			}
    		    	    			    		    			if (array_key_exists ( "statisticMap", $this->arrayResult )) {
    			$this->statisticMap = $arrayResult['statisticMap'];
    			}
    		    	    			    		    		if (array_key_exists ( "productsList", $this->arrayResult )) {
    		$productsListResult=$arrayResult['productsList'];
    			$this->productsList = new AlibabaIcbuProductListProductSearchDTO();
    			$this->productsList->setStdResult ( $productsListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "searchContextDTO", $this->arrayResult )) {
    		$searchContextDTOResult=$arrayResult['searchContextDTO'];
    			    			$this->searchContextDTO = new AlibabaIcbuProductListSearchContextDTO();
    			    			$this->searchContextDTO->setStdResult ( $searchContextDTOResult);
    		}
    		    	    		}
 
   
}
?>