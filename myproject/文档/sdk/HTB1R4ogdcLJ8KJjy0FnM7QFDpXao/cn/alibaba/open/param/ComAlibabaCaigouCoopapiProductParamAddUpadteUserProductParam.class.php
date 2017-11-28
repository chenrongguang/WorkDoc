<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouCoopapiProductParamAddUpadteUserProductParam extends SDKDomain {

       	
    private $userCategoryCode;
    
        /**
    * @return 外部系统中的类目编号
    */
        public function getUserCategoryCode() {
        return $this->userCategoryCode;
    }
    
    /**
     * 设置外部系统中的类目编号     
     * @param String $userCategoryCode     
     * 参数示例：<pre>Cat001</pre>     
     * 此参数必填     */
    public function setUserCategoryCode( $userCategoryCode) {
        $this->userCategoryCode = $userCategoryCode;
    }
    
        	
    private $productCode;
    
        /**
    * @return 外部系统中的商品编号
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置外部系统中的商品编号     
     * @param String $productCode     
     * 参数示例：<pre>“Pt0001”or
“Pt0001#Sku0001”</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $remark;
    
        /**
    * @return 备注信息
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注信息     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $attachmentList;
    
        /**
    * @return 附件地址列表
    */
        public function getAttachmentList() {
        return $this->attachmentList;
    }
    
    /**
     * 设置附件地址列表     
     * @param array include @see Long[] $attachmentList     
     * 参数示例：<pre>[“000012”,“000013”]</pre>     
     * 此参数必填     */
    public function setAttachmentList( $attachmentList) {
        $this->attachmentList = $attachmentList;
    }
    
        	
    private $productAttributes;
    
        /**
    * @return 产品属性  用来承载Sku属性
    */
        public function getProductAttributes() {
        return $this->productAttributes;
    }
    
    /**
     * 设置产品属性  用来承载Sku属性     
     * @param String $productAttributes     
     * 参数示例：<pre>{“颜色”:”白色”}</pre>     
     * 此参数必填     */
    public function setProductAttributes( $productAttributes) {
        $this->productAttributes = $productAttributes;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre>双</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $title;
    
        /**
    * @return 标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置标题     
     * @param String $title     
     * 参数示例：<pre>篮球鞋</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $referencePrice;
    
        /**
    * @return 参考价 单位分
    */
        public function getReferencePrice() {
        return $this->referencePrice;
    }
    
    /**
     * 设置参考价 单位分     
     * @param Long $referencePrice     
     * 参数示例：<pre>15000</pre>     
     * 此参数必填     */
    public function setReferencePrice( $referencePrice) {
        $this->referencePrice = $referencePrice;
    }
    
        	
    private $originCountry;
    
        /**
    * @return 原产地
    */
        public function getOriginCountry() {
        return $this->originCountry;
    }
    
    /**
     * 设置原产地     
     * @param String $originCountry     
     * 参数示例：<pre>浙江</pre>     
     * 此参数必填     */
    public function setOriginCountry( $originCountry) {
        $this->originCountry = $originCountry;
    }
    
        	
    private $barCode;
    
        /**
    * @return 条形码
    */
        public function getBarCode() {
        return $this->barCode;
    }
    
    /**
     * 设置条形码     
     * @param String $barCode     
     * 参数示例：<pre>Ax123ns2df9134</pre>     
     * 此参数必填     */
    public function setBarCode( $barCode) {
        $this->barCode = $barCode;
    }
    
        	
    private $instruction;
    
        /**
    * @return 说明
    */
        public function getInstruction() {
        return $this->instruction;
    }
    
    /**
     * 设置说明     
     * @param String $instruction     
     * 参数示例：<pre>篮球鞋运动款</pre>     
     * 此参数必填     */
    public function setInstruction( $instruction) {
        $this->instruction = $instruction;
    }
    
        	
    private $extendAttributes;
    
        /**
    * @return JSON扩展属性 用来承载不同Erp系统的特殊属性【暂时不提供查询】
    */
        public function getExtendAttributes() {
        return $this->extendAttributes;
    }
    
    /**
     * 设置JSON扩展属性 用来承载不同Erp系统的特殊属性【暂时不提供查询】     
     * @param String $extendAttributes     
     * 参数示例：<pre>{“extendUnit”:"箱"}</pre>     
     * 此参数必填     */
    public function setExtendAttributes( $extendAttributes) {
        $this->extendAttributes = $extendAttributes;
    }
    
        	
    private $picUrlList;
    
        /**
    * @return 图片地址列表
    */
        public function getPicUrlList() {
        return $this->picUrlList;
    }
    
    /**
     * 设置图片地址列表     
     * @param array include @see Long[] $picUrlList     
     * 参数示例：<pre>[“000012”,“000013”]</pre>     
     * 此参数必填     */
    public function setPicUrlList( $picUrlList) {
        $this->picUrlList = $picUrlList;
    }
    
        	
    private $overwrite;
    
        /**
    * @return 产品更新接口增加了参数overwrite， 默认为false。
当此参数为false：若已经存在用户在1688平台手工创建的同编号产品数据，会返回fail
当此参数为true：强制覆盖产品信息，并将此条产品标记为ERP导入数据
overwrite 不会覆盖上架中的产品
    */
        public function getOverwrite() {
        return $this->overwrite;
    }
    
    /**
     * 设置产品更新接口增加了参数overwrite， 默认为false。
当此参数为false：若已经存在用户在1688平台手工创建的同编号产品数据，会返回fail
当此参数为true：强制覆盖产品信息，并将此条产品标记为ERP导入数据
overwrite 不会覆盖上架中的产品     
     * @param Boolean $overwrite     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setOverwrite( $overwrite) {
        $this->overwrite = $overwrite;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userCategoryCode", $this->stdResult )) {
    				$this->userCategoryCode = $this->stdResult->{"userCategoryCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachmentList", $this->stdResult )) {
    				$this->attachmentList = $this->stdResult->{"attachmentList"};
    			}
    			    		    				    			    			if (array_key_exists ( "productAttributes", $this->stdResult )) {
    				$this->productAttributes = $this->stdResult->{"productAttributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "referencePrice", $this->stdResult )) {
    				$this->referencePrice = $this->stdResult->{"referencePrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "originCountry", $this->stdResult )) {
    				$this->originCountry = $this->stdResult->{"originCountry"};
    			}
    			    		    				    			    			if (array_key_exists ( "barCode", $this->stdResult )) {
    				$this->barCode = $this->stdResult->{"barCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "instruction", $this->stdResult )) {
    				$this->instruction = $this->stdResult->{"instruction"};
    			}
    			    		    				    			    			if (array_key_exists ( "extendAttributes", $this->stdResult )) {
    				$this->extendAttributes = $this->stdResult->{"extendAttributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "picUrlList", $this->stdResult )) {
    				$this->picUrlList = $this->stdResult->{"picUrlList"};
    			}
    			    		    				    			    			if (array_key_exists ( "overwrite", $this->stdResult )) {
    				$this->overwrite = $this->stdResult->{"overwrite"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userCategoryCode", $this->arrayResult )) {
    			$this->userCategoryCode = $arrayResult['userCategoryCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['productCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['remark'];
    			}
    		    	    			    		    			if (array_key_exists ( "attachmentList", $this->arrayResult )) {
    			$this->attachmentList = $arrayResult['attachmentList'];
    			}
    		    	    			    		    			if (array_key_exists ( "productAttributes", $this->arrayResult )) {
    			$this->productAttributes = $arrayResult['productAttributes'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "referencePrice", $this->arrayResult )) {
    			$this->referencePrice = $arrayResult['referencePrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "originCountry", $this->arrayResult )) {
    			$this->originCountry = $arrayResult['originCountry'];
    			}
    		    	    			    		    			if (array_key_exists ( "barCode", $this->arrayResult )) {
    			$this->barCode = $arrayResult['barCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "instruction", $this->arrayResult )) {
    			$this->instruction = $arrayResult['instruction'];
    			}
    		    	    			    		    			if (array_key_exists ( "extendAttributes", $this->arrayResult )) {
    			$this->extendAttributes = $arrayResult['extendAttributes'];
    			}
    		    	    			    		    			if (array_key_exists ( "picUrlList", $this->arrayResult )) {
    			$this->picUrlList = $arrayResult['picUrlList'];
    			}
    		    	    			    		    			if (array_key_exists ( "overwrite", $this->arrayResult )) {
    			$this->overwrite = $arrayResult['overwrite'];
    			}
    		    	    		}
 
   
}
?>