<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizReceiveAddressGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizInvoiceGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizOtherInfoGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizCargoGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizStepPayGroup.class.php');

class AlibabaOpenplatformTradeBizMakeSingleOrderGroup extends SDKDomain {

       	
    private $receiveAddressGroup;
    
        /**
    * @return 收货地址信息
    */
        public function getReceiveAddressGroup() {
        return $this->receiveAddressGroup;
    }
    
    /**
     * 设置收货地址信息     
     * @param AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveAddressGroup(AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup) {
        $this->receiveAddressGroup = $receiveAddressGroup;
    }
    
        	
    private $invoiceGroup;
    
        /**
    * @return 发票信息
    */
        public function getInvoiceGroup() {
        return $this->invoiceGroup;
    }
    
    /**
     * 设置发票信息     
     * @param AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceGroup(AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup) {
        $this->invoiceGroup = $invoiceGroup;
    }
    
        	
    private $otherInfoGroup;
    
        /**
    * @return 多个其它信息时使用，比如一些费用
    */
        public function getOtherInfoGroup() {
        return $this->otherInfoGroup;
    }
    
    /**
     * 设置多个其它信息时使用，比如一些费用     
     * @param AlibabaOpenplatformTradeBizOtherInfoGroup $otherInfoGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOtherInfoGroup(AlibabaOpenplatformTradeBizOtherInfoGroup $otherInfoGroup) {
        $this->otherInfoGroup = $otherInfoGroup;
    }
    
        	
    private $cargoGroups;
    
        /**
    * @return 商品信息
    */
        public function getCargoGroups() {
        return $this->cargoGroups;
    }
    
    /**
     * 设置商品信息     
     * @param array include @see AlibabaOpenplatformTradeBizCargoGroup[] $cargoGroups     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCargoGroups(AlibabaOpenplatformTradeBizCargoGroup $cargoGroups) {
        $this->cargoGroups = $cargoGroups;
    }
    
        	
    private $stepPayGroup;
    
        /**
    * @return 阶段支付信息
    */
        public function getStepPayGroup() {
        return $this->stepPayGroup;
    }
    
    /**
     * 设置阶段支付信息     
     * @param AlibabaOpenplatformTradeBizStepPayGroup $stepPayGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepPayGroup(AlibabaOpenplatformTradeBizStepPayGroup $stepPayGroup) {
        $this->stepPayGroup = $stepPayGroup;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "receiveAddressGroup", $this->stdResult )) {
    				$receiveAddressGroupResult=$this->stdResult->{"receiveAddressGroup"};
    				$this->receiveAddressGroup = new AlibabaOpenplatformTradeBizReceiveAddressGroup();
    				$this->receiveAddressGroup->setStdResult ( $receiveAddressGroupResult);
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceGroup", $this->stdResult )) {
    				$invoiceGroupResult=$this->stdResult->{"invoiceGroup"};
    				$this->invoiceGroup = new AlibabaOpenplatformTradeBizInvoiceGroup();
    				$this->invoiceGroup->setStdResult ( $invoiceGroupResult);
    			}
    			    		    				    			    			if (array_key_exists ( "otherInfoGroup", $this->stdResult )) {
    				$otherInfoGroupResult=$this->stdResult->{"otherInfoGroup"};
    				$this->otherInfoGroup = new AlibabaOpenplatformTradeBizOtherInfoGroup();
    				$this->otherInfoGroup->setStdResult ( $otherInfoGroupResult);
    			}
    			    		    				    			    			if (array_key_exists ( "cargoGroups", $this->stdResult )) {
    			$cargoGroupsResult=$this->stdResult->{"cargoGroups"};
    				$object = json_decode ( json_encode ( $cargoGroupsResult ), true );
					$this->cargoGroups = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeBizCargoGroupResult=new AlibabaOpenplatformTradeBizCargoGroup();
						$AlibabaOpenplatformTradeBizCargoGroupResult->setArrayResult($arrayobject );
						$this->cargoGroups [$i] = $AlibabaOpenplatformTradeBizCargoGroupResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "stepPayGroup", $this->stdResult )) {
    				$stepPayGroupResult=$this->stdResult->{"stepPayGroup"};
    				$this->stepPayGroup = new AlibabaOpenplatformTradeBizStepPayGroup();
    				$this->stepPayGroup->setStdResult ( $stepPayGroupResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "receiveAddressGroup", $this->arrayResult )) {
    		$receiveAddressGroupResult=$arrayResult['receiveAddressGroup'];
    			    			$this->receiveAddressGroup = new AlibabaOpenplatformTradeBizReceiveAddressGroup();
    			    			$this->receiveAddressGroup->setStdResult ( $receiveAddressGroupResult);
    		}
    		    	    			    		    		if (array_key_exists ( "invoiceGroup", $this->arrayResult )) {
    		$invoiceGroupResult=$arrayResult['invoiceGroup'];
    			    			$this->invoiceGroup = new AlibabaOpenplatformTradeBizInvoiceGroup();
    			    			$this->invoiceGroup->setStdResult ( $invoiceGroupResult);
    		}
    		    	    			    		    		if (array_key_exists ( "otherInfoGroup", $this->arrayResult )) {
    		$otherInfoGroupResult=$arrayResult['otherInfoGroup'];
    			    			$this->otherInfoGroup = new AlibabaOpenplatformTradeBizOtherInfoGroup();
    			    			$this->otherInfoGroup->setStdResult ( $otherInfoGroupResult);
    		}
    		    	    			    		    		if (array_key_exists ( "cargoGroups", $this->arrayResult )) {
    		$cargoGroupsResult=$arrayResult['cargoGroups'];
    			$this->cargoGroups = new AlibabaOpenplatformTradeBizCargoGroup();
    			$this->cargoGroups->setStdResult ( $cargoGroupsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "stepPayGroup", $this->arrayResult )) {
    		$stepPayGroupResult=$arrayResult['stepPayGroup'];
    			    			$this->stepPayGroup = new AlibabaOpenplatformTradeBizStepPayGroup();
    			    			$this->stepPayGroup->setStdResult ( $stepPayGroupResult);
    		}
    		    	    		}
 
   
}
?>