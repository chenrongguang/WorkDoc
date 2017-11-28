<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class LogisticsCompanyModel extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 主键id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置主键id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $companyName;
    
        /**
    * @return 物流公司名称
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置物流公司名称     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $companyNo;
    
        /**
    * @return 物流公司编号
    */
        public function getCompanyNo() {
        return $this->companyNo;
    }
    
    /**
     * 设置物流公司编号     
     * @param String $companyNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyNo( $companyNo) {
        $this->companyNo = $companyNo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyNo", $this->stdResult )) {
    				$this->companyNo = $this->stdResult->{"companyNo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['companyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyNo", $this->arrayResult )) {
    			$this->companyNo = $arrayResult['companyNo'];
    			}
    		    	    		}
 
   
}
?>