<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BusinessInfo extends SDKDomain {

       	
    private $businessModel;
    
        /**
    * @return 经营模式
    */
        public function getBusinessModel() {
        return $this->businessModel;
    }
    
    /**
     * 设置经营模式     
     * @param String $businessModel     
     * 参数示例：<pre>返回结果包含:枚举类型:经销批发;生产加工;招商代理;商业服务;其他; 五个结果.</pre>     
     * 此参数必填     */
    public function setBusinessModel( $businessModel) {
        $this->businessModel = $businessModel;
    }
    
        	
    private $mainIndustries;
    
        /**
    * @return 主营行业
    */
        public function getMainIndustries() {
        return $this->mainIndustries;
    }
    
    /**
     * 设置主营行业     
     * @param String $mainIndustries     
     * 参数示例：<pre>该字段为用户自由填写.没有固定格式.例如:童装\婴幼儿服装、内衣</pre>     
     * 此参数必填     */
    public function setMainIndustries( $mainIndustries) {
        $this->mainIndustries = $mainIndustries;
    }
    
        	
    private $productionService;
    
        /**
    * @return 主营产品/服务
    */
        public function getProductionService() {
        return $this->productionService;
    }
    
    /**
     * 设置主营产品/服务     
     * @param array include @see String[] $productionService     
     * 参数示例：<pre>该字段为用户自由填写.没有固定格式.</pre>     
     * 此参数必填     */
    public function setProductionService( $productionService) {
        $this->productionService = $productionService;
    }
    
        	
    private $brandName;
    
        /**
    * @return 品牌名称
    */
        public function getBrandName() {
        return $this->brandName;
    }
    
    /**
     * 设置品牌名称     
     * @param String $brandName     
     * 参数示例：<pre>该字段为用户自由填写.没有固定格式.例如:
槽钢.角钢.钢板 圆钢.工字钢 H型钢.方矩管 方管.镀锌管 C型槽.彩瓦</pre>     
     * 此参数必填     */
    public function setBrandName( $brandName) {
        $this->brandName = $brandName;
    }
    
        	
    private $businessAddress;
    
        /**
    * @return 经营地址
    */
        public function getBusinessAddress() {
        return $this->businessAddress;
    }
    
    /**
     * 设置经营地址     
     * @param String $businessAddress     
     * 参数示例：<pre>省份(空格)城市</pre>     
     * 此参数必填     */
    public function setBusinessAddress( $businessAddress) {
        $this->businessAddress = $businessAddress;
    }
    
        	
    private $enterpriseType;
    
        /**
    * @return 企业类型/公司类型
    */
        public function getEnterpriseType() {
        return $this->enterpriseType;
    }
    
    /**
     * 设置企业类型/公司类型     
     * @param String $enterpriseType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEnterpriseType( $enterpriseType) {
        $this->enterpriseType = $enterpriseType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "businessModel", $this->stdResult )) {
    				$this->businessModel = $this->stdResult->{"businessModel"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainIndustries", $this->stdResult )) {
    				$this->mainIndustries = $this->stdResult->{"mainIndustries"};
    			}
    			    		    				    			    			if (array_key_exists ( "productionService", $this->stdResult )) {
    				$this->productionService = $this->stdResult->{"productionService"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandName", $this->stdResult )) {
    				$this->brandName = $this->stdResult->{"brandName"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessAddress", $this->stdResult )) {
    				$this->businessAddress = $this->stdResult->{"businessAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "enterpriseType", $this->stdResult )) {
    				$this->enterpriseType = $this->stdResult->{"enterpriseType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "businessModel", $this->arrayResult )) {
    			$this->businessModel = $arrayResult['businessModel'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainIndustries", $this->arrayResult )) {
    			$this->mainIndustries = $arrayResult['mainIndustries'];
    			}
    		    	    			    		    			if (array_key_exists ( "productionService", $this->arrayResult )) {
    			$this->productionService = $arrayResult['productionService'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandName", $this->arrayResult )) {
    			$this->brandName = $arrayResult['brandName'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessAddress", $this->arrayResult )) {
    			$this->businessAddress = $arrayResult['businessAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "enterpriseType", $this->arrayResult )) {
    			$this->enterpriseType = $arrayResult['enterpriseType'];
    			}
    		    	    		}
 
   
}
?>