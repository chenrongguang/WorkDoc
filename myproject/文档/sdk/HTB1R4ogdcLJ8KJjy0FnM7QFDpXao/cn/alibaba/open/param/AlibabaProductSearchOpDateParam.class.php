<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductSearchOpDateParam extends SDKDomain {

       	
    private $startDate;
    
        /**
    * @return 授权后，搜索开始时间
    */
        public function getStartDate() {
        return $this->startDate;
    }
    
    /**
     * 设置授权后，搜索开始时间     
     * @param Date $startDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartDate( $startDate) {
        $this->startDate = $startDate;
    }
    
        	
    private $endDate;
    
        /**
    * @return 授权后，搜索结束时间
    */
        public function getEndDate() {
        return $this->endDate;
    }
    
    /**
     * 设置授权后，搜索结束时间     
     * @param Date $endDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndDate( $endDate) {
        $this->endDate = $endDate;
    }
    
        	
    private $offerDateType;
    
        /**
    * @return 授权后，查询的时间类型
    */
        public function getOfferDateType() {
        return $this->offerDateType;
    }
    
    /**
     * 设置授权后，查询的时间类型     
     * @param String $offerDateType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferDateType( $offerDateType) {
        $this->offerDateType = $offerDateType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "startDate", $this->stdResult )) {
    				$this->startDate = $this->stdResult->{"startDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "endDate", $this->stdResult )) {
    				$this->endDate = $this->stdResult->{"endDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerDateType", $this->stdResult )) {
    				$this->offerDateType = $this->stdResult->{"offerDateType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "startDate", $this->arrayResult )) {
    			$this->startDate = $arrayResult['startDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "endDate", $this->arrayResult )) {
    			$this->endDate = $arrayResult['endDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerDateType", $this->arrayResult )) {
    			$this->offerDateType = $arrayResult['offerDateType'];
    			}
    		    	    		}
 
   
}
?>