<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CompanyCredit extends SDKDomain {

       	
    private $authType;
    
        /**
    * @return 认证类型
    */
        public function getAuthType() {
        return $this->authType;
    }
    
    /**
     * 设置认证类型     
     * @param String $authType     
     * 参数示例：<pre>返回结果:枚举:ov 或 av 或 cna 或 pna 返回其中一个.
认证类型的名称:
ov:实地认证;
av:诚信通av认证;
cna:企业实名认证;
pna:个人实名认证;
一个用户可能具有多个资质.当有个多个资质时.返回优先级为
(实地>AV>公司实名>个人实名)</pre>     
     * 此参数必填     */
    public function setAuthType( $authType) {
        $this->authType = $authType;
    }
    
        	
    private $supplierLevel;
    
        /**
    * @return 阿里巴巴供应商等级
    */
        public function getSupplierLevel() {
        return $this->supplierLevel;
    }
    
    /**
     * 设置阿里巴巴供应商等级     
     * @param Long $supplierLevel     
     * 参数示例：<pre>1星=1;
2星=2;
3星=3;
4星=4;
5星=5;
1钻=6;
2钻=7;
3钻=8;
4钻=9;
5钻=10;
1冠=11;
2冠=12;
3冠=13;
4冠=14;
5冠=15;</pre>     
     * 此参数必填     */
    public function setSupplierLevel( $supplierLevel) {
        $this->supplierLevel = $supplierLevel;
    }
    
        	
    private $truthfulDescription;
    
        /**
    * @return 描述相符
    */
        public function getTruthfulDescription() {
        return $this->truthfulDescription;
    }
    
    /**
     * 设置描述相符     
     * @param Long $truthfulDescription     
     * 参数示例：<pre>返回结果范围0-50.分数越高越好</pre>     
     * 此参数必填     */
    public function setTruthfulDescription( $truthfulDescription) {
        $this->truthfulDescription = $truthfulDescription;
    }
    
        	
    private $serviceAttitude;
    
        /**
    * @return 服务态度
    */
        public function getServiceAttitude() {
        return $this->serviceAttitude;
    }
    
    /**
     * 设置服务态度     
     * @param Long $serviceAttitude     
     * 参数示例：<pre>返回结果范围0-50.分数越高越好</pre>     
     * 此参数必填     */
    public function setServiceAttitude( $serviceAttitude) {
        $this->serviceAttitude = $serviceAttitude;
    }
    
        	
    private $arrivalRate;
    
        /**
    * @return 到货速度
    */
        public function getArrivalRate() {
        return $this->arrivalRate;
    }
    
    /**
     * 设置到货速度     
     * @param Long $arrivalRate     
     * 参数示例：<pre>返回结果范围0-50.分数越高越好</pre>     
     * 此参数必填     */
    public function setArrivalRate( $arrivalRate) {
        $this->arrivalRate = $arrivalRate;
    }
    
        	
    private $buyersCommentsIn180days;
    
        /**
    * @return 180天买家评论
    */
        public function getBuyersCommentsIn180days() {
        return $this->buyersCommentsIn180days;
    }
    
    /**
     * 设置180天买家评论     
     * @param Long $buyersCommentsIn180days     
     * 参数示例：<pre>返回结果范围0-100.标识0~100的百分比.比率越高越好</pre>     
     * 此参数必填     */
    public function setBuyersCommentsIn180days( $buyersCommentsIn180days) {
        $this->buyersCommentsIn180days = $buyersCommentsIn180days;
    }
    
        	
    private $averageDeliverySpeedIn90days;
    
        /**
    * @return 90天平均发货速度
    */
        public function getAverageDeliverySpeedIn90days() {
        return $this->averageDeliverySpeedIn90days;
    }
    
    /**
     * 设置90天平均发货速度     
     * @param Long $averageDeliverySpeedIn90days     
     * 参数示例：<pre>返回结果范围0-100.标识0~100的百分比.比率越高越好</pre>     
     * 此参数必填     */
    public function setAverageDeliverySpeedIn90days( $averageDeliverySpeedIn90days) {
        $this->averageDeliverySpeedIn90days = $averageDeliverySpeedIn90days;
    }
    
        	
    private $refundRateIn90days;
    
        /**
    * @return 90天退款率
    */
        public function getRefundRateIn90days() {
        return $this->refundRateIn90days;
    }
    
    /**
     * 设置90天退款率     
     * @param Long $refundRateIn90days     
     * 参数示例：<pre>返回结果范围0-100.标识0~100的百分比.比率越高越好</pre>     
     * 此参数必填     */
    public function setRefundRateIn90days( $refundRateIn90days) {
        $this->refundRateIn90days = $refundRateIn90days;
    }
    
        	
    private $complaintRateIn90days;
    
        /**
    * @return 90天投诉率
    */
        public function getComplaintRateIn90days() {
        return $this->complaintRateIn90days;
    }
    
    /**
     * 设置90天投诉率     
     * @param Long $complaintRateIn90days     
     * 参数示例：<pre>返回结果范围0-100.标识0~100的百分比.比率越高越好</pre>     
     * 此参数必填     */
    public function setComplaintRateIn90days( $complaintRateIn90days) {
        $this->complaintRateIn90days = $complaintRateIn90days;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "authType", $this->stdResult )) {
    				$this->authType = $this->stdResult->{"authType"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierLevel", $this->stdResult )) {
    				$this->supplierLevel = $this->stdResult->{"supplierLevel"};
    			}
    			    		    				    			    			if (array_key_exists ( "truthfulDescription", $this->stdResult )) {
    				$this->truthfulDescription = $this->stdResult->{"truthfulDescription"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceAttitude", $this->stdResult )) {
    				$this->serviceAttitude = $this->stdResult->{"serviceAttitude"};
    			}
    			    		    				    			    			if (array_key_exists ( "arrivalRate", $this->stdResult )) {
    				$this->arrivalRate = $this->stdResult->{"arrivalRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyersCommentsIn180days", $this->stdResult )) {
    				$this->buyersCommentsIn180days = $this->stdResult->{"buyersCommentsIn180days"};
    			}
    			    		    				    			    			if (array_key_exists ( "averageDeliverySpeedIn90days", $this->stdResult )) {
    				$this->averageDeliverySpeedIn90days = $this->stdResult->{"averageDeliverySpeedIn90days"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundRateIn90days", $this->stdResult )) {
    				$this->refundRateIn90days = $this->stdResult->{"refundRateIn90days"};
    			}
    			    		    				    			    			if (array_key_exists ( "complaintRateIn90days", $this->stdResult )) {
    				$this->complaintRateIn90days = $this->stdResult->{"complaintRateIn90days"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "authType", $this->arrayResult )) {
    			$this->authType = $arrayResult['authType'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierLevel", $this->arrayResult )) {
    			$this->supplierLevel = $arrayResult['supplierLevel'];
    			}
    		    	    			    		    			if (array_key_exists ( "truthfulDescription", $this->arrayResult )) {
    			$this->truthfulDescription = $arrayResult['truthfulDescription'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceAttitude", $this->arrayResult )) {
    			$this->serviceAttitude = $arrayResult['serviceAttitude'];
    			}
    		    	    			    		    			if (array_key_exists ( "arrivalRate", $this->arrayResult )) {
    			$this->arrivalRate = $arrayResult['arrivalRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyersCommentsIn180days", $this->arrayResult )) {
    			$this->buyersCommentsIn180days = $arrayResult['buyersCommentsIn180days'];
    			}
    		    	    			    		    			if (array_key_exists ( "averageDeliverySpeedIn90days", $this->arrayResult )) {
    			$this->averageDeliverySpeedIn90days = $arrayResult['averageDeliverySpeedIn90days'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundRateIn90days", $this->arrayResult )) {
    			$this->refundRateIn90days = $arrayResult['refundRateIn90days'];
    			}
    		    	    			    		    			if (array_key_exists ( "complaintRateIn90days", $this->arrayResult )) {
    			$this->complaintRateIn90days = $arrayResult['complaintRateIn90days'];
    			}
    		    	    		}
 
   
}
?>