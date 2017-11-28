<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaBirdsnestCoopapiWarehouseParamUserWarehouseAddUpdateParam extends SDKDomain {

       	
    private $warehouseCode;
    
        /**
    * @return 仓库编号
    */
        public function getWarehouseCode() {
        return $this->warehouseCode;
    }
    
    /**
     * 设置仓库编号     
     * @param String $warehouseCode     
     * 参数示例：<pre>wh001</pre>     
     * 此参数必填     */
    public function setWarehouseCode( $warehouseCode) {
        $this->warehouseCode = $warehouseCode;
    }
    
        	
    private $name;
    
        /**
    * @return 仓库名
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置仓库名     
     * @param String $name     
     * 参数示例：<pre>清泰街仓库</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $shortName;
    
        /**
    * @return 仓库简称
    */
        public function getShortName() {
        return $this->shortName;
    }
    
    /**
     * 设置仓库简称     
     * @param String $shortName     
     * 参数示例：<pre>清泰仓</pre>     
     * 此参数必填     */
    public function setShortName( $shortName) {
        $this->shortName = $shortName;
    }
    
        	
    private $contactName;
    
        /**
    * @return 联系人姓名
    */
        public function getContactName() {
        return $this->contactName;
    }
    
    /**
     * 设置联系人姓名     
     * @param String $contactName     
     * 参数示例：<pre>张三</pre>     
     * 此参数必填     */
    public function setContactName( $contactName) {
        $this->contactName = $contactName;
    }
    
        	
    private $contactPhone;
    
        /**
    * @return 联系人电话
    */
        public function getContactPhone() {
        return $this->contactPhone;
    }
    
    /**
     * 设置联系人电话     
     * @param String $contactPhone     
     * 参数示例：<pre>0571-87412369</pre>     
     * 此参数必填     */
    public function setContactPhone( $contactPhone) {
        $this->contactPhone = $contactPhone;
    }
    
        	
    private $contactMobile;
    
        /**
    * @return 联系人手机
    */
        public function getContactMobile() {
        return $this->contactMobile;
    }
    
    /**
     * 设置联系人手机     
     * @param String $contactMobile     
     * 参数示例：<pre>13685217410</pre>     
     * 此参数必填     */
    public function setContactMobile( $contactMobile) {
        $this->contactMobile = $contactMobile;
    }
    
        	
    private $province;
    
        /**
    * @return 仓库地址：省
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置仓库地址：省     
     * @param String $province     
     * 参数示例：<pre>浙江</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $city;
    
        /**
    * @return 仓库地址：市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置仓库地址：市     
     * @param String $city     
     * 参数示例：<pre>杭州</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $district;
    
        /**
    * @return 仓库地址：区
    */
        public function getDistrict() {
        return $this->district;
    }
    
    /**
     * 设置仓库地址：区     
     * @param String $district     
     * 参数示例：<pre>下城区</pre>     
     * 此参数必填     */
    public function setDistrict( $district) {
        $this->district = $district;
    }
    
        	
    private $address;
    
        /**
    * @return 仓库地址：详细地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置仓库地址：详细地址     
     * @param String $address     
     * 参数示例：<pre>浙江省杭州市下城区清泰街1号</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $remark;
    
        /**
    * @return 备注
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "warehouseCode", $this->stdResult )) {
    				$this->warehouseCode = $this->stdResult->{"warehouseCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "shortName", $this->stdResult )) {
    				$this->shortName = $this->stdResult->{"shortName"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactName", $this->stdResult )) {
    				$this->contactName = $this->stdResult->{"contactName"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactPhone", $this->stdResult )) {
    				$this->contactPhone = $this->stdResult->{"contactPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactMobile", $this->stdResult )) {
    				$this->contactMobile = $this->stdResult->{"contactMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "district", $this->stdResult )) {
    				$this->district = $this->stdResult->{"district"};
    			}
    			    		    				    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "warehouseCode", $this->arrayResult )) {
    			$this->warehouseCode = $arrayResult['warehouseCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "shortName", $this->arrayResult )) {
    			$this->shortName = $arrayResult['shortName'];
    			}
    		    	    			    		    			if (array_key_exists ( "contactName", $this->arrayResult )) {
    			$this->contactName = $arrayResult['contactName'];
    			}
    		    	    			    		    			if (array_key_exists ( "contactPhone", $this->arrayResult )) {
    			$this->contactPhone = $arrayResult['contactPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "contactMobile", $this->arrayResult )) {
    			$this->contactMobile = $arrayResult['contactMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['province'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['city'];
    			}
    		    	    			    		    			if (array_key_exists ( "district", $this->arrayResult )) {
    			$this->district = $arrayResult['district'];
    			}
    		    	    			    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['address'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    		}
 
   
}
?>