<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelArea.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelArea.class.php');
include_once ('cn/alibaba/open/param/ComAlibabaCaigouApiCommonModelArea.class.php');

class ComAlibabaCaigouApiCommonModelAreaInfo extends SDKDomain {

       	
    private $provinceCode;
    
        /**
    * @return 省代码
    */
        public function getProvinceCode() {
        return $this->provinceCode;
    }
    
    /**
     * 设置省代码     
     * @param String $provinceCode     
     * 参数示例：<pre>3478</pre>     
     * 此参数必填     */
    public function setProvinceCode( $provinceCode) {
        $this->provinceCode = $provinceCode;
    }
    
        	
    private $cityCode;
    
        /**
    * @return 市代码
    */
        public function getCityCode() {
        return $this->cityCode;
    }
    
    /**
     * 设置市代码     
     * @param String $cityCode     
     * 参数示例：<pre>3479</pre>     
     * 此参数必填     */
    public function setCityCode( $cityCode) {
        $this->cityCode = $cityCode;
    }
    
        	
    private $districtCode;
    
        /**
    * @return 区代码
    */
        public function getDistrictCode() {
        return $this->districtCode;
    }
    
    /**
     * 设置区代码     
     * @param String $districtCode     
     * 参数示例：<pre>4322</pre>     
     * 此参数必填     */
    public function setDistrictCode( $districtCode) {
        $this->districtCode = $districtCode;
    }
    
        	
    private $province;
    
        /**
    * @return 地区详情-省
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置地区详情-省     
     * @param ComAlibabaCaigouApiCommonModelArea $province     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setProvince(ComAlibabaCaigouApiCommonModelArea $province) {
        $this->province = $province;
    }
    
        	
    private $city;
    
        /**
    * @return 地区详情-市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置地区详情-市     
     * @param ComAlibabaCaigouApiCommonModelArea $city     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setCity(ComAlibabaCaigouApiCommonModelArea $city) {
        $this->city = $city;
    }
    
        	
    private $district;
    
        /**
    * @return 地区详情-区
    */
        public function getDistrict() {
        return $this->district;
    }
    
    /**
     * 设置地区详情-区     
     * @param ComAlibabaCaigouApiCommonModelArea $district     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setDistrict(ComAlibabaCaigouApiCommonModelArea $district) {
        $this->district = $district;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "provinceCode", $this->stdResult )) {
    				$this->provinceCode = $this->stdResult->{"provinceCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "cityCode", $this->stdResult )) {
    				$this->cityCode = $this->stdResult->{"cityCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "districtCode", $this->stdResult )) {
    				$this->districtCode = $this->stdResult->{"districtCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$provinceResult=$this->stdResult->{"province"};
    				$this->province = new ComAlibabaCaigouApiCommonModelArea();
    				$this->province->setStdResult ( $provinceResult);
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$cityResult=$this->stdResult->{"city"};
    				$this->city = new ComAlibabaCaigouApiCommonModelArea();
    				$this->city->setStdResult ( $cityResult);
    			}
    			    		    				    			    			if (array_key_exists ( "district", $this->stdResult )) {
    				$districtResult=$this->stdResult->{"district"};
    				$this->district = new ComAlibabaCaigouApiCommonModelArea();
    				$this->district->setStdResult ( $districtResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "provinceCode", $this->arrayResult )) {
    			$this->provinceCode = $arrayResult['provinceCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "cityCode", $this->arrayResult )) {
    			$this->cityCode = $arrayResult['cityCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "districtCode", $this->arrayResult )) {
    			$this->districtCode = $arrayResult['districtCode'];
    			}
    		    	    			    		    		if (array_key_exists ( "province", $this->arrayResult )) {
    		$provinceResult=$arrayResult['province'];
    			    			$this->province = new ComAlibabaCaigouApiCommonModelArea();
    			    			$this->province->setStdResult ( $provinceResult);
    		}
    		    	    			    		    		if (array_key_exists ( "city", $this->arrayResult )) {
    		$cityResult=$arrayResult['city'];
    			    			$this->city = new ComAlibabaCaigouApiCommonModelArea();
    			    			$this->city->setStdResult ( $cityResult);
    		}
    		    	    			    		    		if (array_key_exists ( "district", $this->arrayResult )) {
    		$districtResult=$arrayResult['district'];
    			    			$this->district = new ComAlibabaCaigouApiCommonModelArea();
    			    			$this->district->setStdResult ( $districtResult);
    		}
    		    	    		}
 
   
}
?>