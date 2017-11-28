<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressArea.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressCountry.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressCity.class.php');
include_once ('com/alibaba/trade/param/AlibabaAddressProvince.class.php');

class AlibabaAddressPostalAddress extends SDKDomain {

       	
    private $postalCode;
    
        /**
    * @return 邮编
    */
        public function getPostalCode() {
        return $this->postalCode;
    }
    
    /**
     * 设置邮编     
     * @param String $postalCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostalCode( $postalCode) {
        $this->postalCode = $postalCode;
    }
    
        	
    private $street;
    
        /**
    * @return 街道信息
    */
        public function getStreet() {
        return $this->street;
    }
    
    /**
     * 设置街道信息     
     * @param String $street     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStreet( $street) {
        $this->street = $street;
    }
    
        	
    private $name;
    
        /**
    * @return 名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $area;
    
        /**
    * @return 区对象
    */
        public function getArea() {
        return $this->area;
    }
    
    /**
     * 设置区对象     
     * @param AlibabaAddressArea $area     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setArea(AlibabaAddressArea $area) {
        $this->area = $area;
    }
    
        	
    private $country;
    
        /**
    * @return 国家对象
    */
        public function getCountry() {
        return $this->country;
    }
    
    /**
     * 设置国家对象     
     * @param AlibabaAddressCountry $country     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCountry(AlibabaAddressCountry $country) {
        $this->country = $country;
    }
    
        	
    private $city;
    
        /**
    * @return 城市对象
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置城市对象     
     * @param AlibabaAddressCity $city     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCity(AlibabaAddressCity $city) {
        $this->city = $city;
    }
    
        	
    private $province;
    
        /**
    * @return 省份对象
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置省份对象     
     * @param AlibabaAddressProvince $province     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvince(AlibabaAddressProvince $province) {
        $this->province = $province;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "postalCode", $this->stdResult )) {
    				$this->postalCode = $this->stdResult->{"postalCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "street", $this->stdResult )) {
    				$this->street = $this->stdResult->{"street"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "area", $this->stdResult )) {
    				$areaResult=$this->stdResult->{"area"};
    				$this->area = new AlibabaAddressArea();
    				$this->area->setStdResult ( $areaResult);
    			}
    			    		    				    			    			if (array_key_exists ( "country", $this->stdResult )) {
    				$countryResult=$this->stdResult->{"country"};
    				$this->country = new AlibabaAddressCountry();
    				$this->country->setStdResult ( $countryResult);
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$cityResult=$this->stdResult->{"city"};
    				$this->city = new AlibabaAddressCity();
    				$this->city->setStdResult ( $cityResult);
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$provinceResult=$this->stdResult->{"province"};
    				$this->province = new AlibabaAddressProvince();
    				$this->province->setStdResult ( $provinceResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "postalCode", $this->arrayResult )) {
    			$this->postalCode = $arrayResult['postalCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "street", $this->arrayResult )) {
    			$this->street = $arrayResult['street'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    		if (array_key_exists ( "area", $this->arrayResult )) {
    		$areaResult=$arrayResult['area'];
    			    			$this->area = new AlibabaAddressArea();
    			    			$this->area->setStdResult ( $areaResult);
    		}
    		    	    			    		    		if (array_key_exists ( "country", $this->arrayResult )) {
    		$countryResult=$arrayResult['country'];
    			    			$this->country = new AlibabaAddressCountry();
    			    			$this->country->setStdResult ( $countryResult);
    		}
    		    	    			    		    		if (array_key_exists ( "city", $this->arrayResult )) {
    		$cityResult=$arrayResult['city'];
    			    			$this->city = new AlibabaAddressCity();
    			    			$this->city->setStdResult ( $cityResult);
    		}
    		    	    			    		    		if (array_key_exists ( "province", $this->arrayResult )) {
    		$provinceResult=$arrayResult['province'];
    			    			$this->province = new AlibabaAddressProvince();
    			    			$this->province->setStdResult ( $provinceResult);
    		}
    		    	    		}
 
   
}
?>