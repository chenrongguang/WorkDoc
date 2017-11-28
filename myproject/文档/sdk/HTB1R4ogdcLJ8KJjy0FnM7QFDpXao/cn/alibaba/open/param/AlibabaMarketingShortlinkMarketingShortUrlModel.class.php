<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMarketingShortlinkMarketingShortUrlModel extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 主键id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置主键id     
     * @param Integer $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $instanceKey;
    
        /**
    * @return 唯一标示
    */
        public function getInstanceKey() {
        return $this->instanceKey;
    }
    
    /**
     * 设置唯一标示     
     * @param String $instanceKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstanceKey( $instanceKey) {
        $this->instanceKey = $instanceKey;
    }
    
        	
    private $memberId;
    
        /**
    * @return 会员memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置会员memberId     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $name;
    
        /**
    * @return 短链名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置短链名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $shortUrl;
    
        /**
    * @return 短链url
    */
        public function getShortUrl() {
        return $this->shortUrl;
    }
    
    /**
     * 设置短链url     
     * @param String $shortUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShortUrl( $shortUrl) {
        $this->shortUrl = $shortUrl;
    }
    
        	
    private $type;
    
        /**
    * @return 短链类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置短链类型     
     * @param String $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $url;
    
        /**
    * @return url
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置url     
     * @param String $url     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $appId;
    
        /**
    * @return app来源
    */
        public function getAppId() {
        return $this->appId;
    }
    
    /**
     * 设置app来源     
     * @param String $appId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppId( $appId) {
        $this->appId = $appId;
    }
    
        	
    private $pv1d;
    
        /**
    * @return T-1 天pv
    */
        public function getPv1d() {
        return $this->pv1d;
    }
    
    /**
     * 设置T-1 天pv     
     * @param Long $pv1d     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPv1d( $pv1d) {
        $this->pv1d = $pv1d;
    }
    
        	
    private $uv1d;
    
        /**
    * @return T-1 天uv
    */
        public function getUv1d() {
        return $this->uv1d;
    }
    
    /**
     * 设置T-1 天uv     
     * @param Long $uv1d     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUv1d( $uv1d) {
        $this->uv1d = $uv1d;
    }
    
        	
    private $payMordCnt1d;
    
        /**
    * @return T-1 天订单笔数
    */
        public function getPayMordCnt1d() {
        return $this->payMordCnt1d;
    }
    
    /**
     * 设置T-1 天订单笔数     
     * @param Long $payMordCnt1d     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayMordCnt1d( $payMordCnt1d) {
        $this->payMordCnt1d = $payMordCnt1d;
    }
    
        	
    private $payMordAmt1d;
    
        /**
    * @return T-1 天订单金额
    */
        public function getPayMordAmt1d() {
        return $this->payMordAmt1d;
    }
    
    /**
     * 设置T-1 天订单金额     
     * @param Double $payMordAmt1d     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayMordAmt1d( $payMordAmt1d) {
        $this->payMordAmt1d = $payMordAmt1d;
    }
    
        	
    private $pvTotal;
    
        /**
    * @return 累计pv(30天)
    */
        public function getPvTotal() {
        return $this->pvTotal;
    }
    
    /**
     * 设置累计pv(30天)     
     * @param Long $pvTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPvTotal( $pvTotal) {
        $this->pvTotal = $pvTotal;
    }
    
        	
    private $payMordCntTotal;
    
        /**
    * @return 累计订单笔数(30天)
    */
        public function getPayMordCntTotal() {
        return $this->payMordCntTotal;
    }
    
    /**
     * 设置累计订单笔数(30天)     
     * @param Long $payMordCntTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayMordCntTotal( $payMordCntTotal) {
        $this->payMordCntTotal = $payMordCntTotal;
    }
    
        	
    private $payMordAmtTotal;
    
        /**
    * @return 累计订单金额(30天)
    */
        public function getPayMordAmtTotal() {
        return $this->payMordAmtTotal;
    }
    
    /**
     * 设置累计订单金额(30天)     
     * @param Double $payMordAmtTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayMordAmtTotal( $payMordAmtTotal) {
        $this->payMordAmtTotal = $payMordAmtTotal;
    }
    
        	
    private $statDate;
    
        /**
    * @return 统计时间
    */
        public function getStatDate() {
        return $this->statDate;
    }
    
    /**
     * 设置统计时间     
     * @param String $statDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatDate( $statDate) {
        $this->statDate = $statDate;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "instanceKey", $this->stdResult )) {
    				$this->instanceKey = $this->stdResult->{"instanceKey"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "shortUrl", $this->stdResult )) {
    				$this->shortUrl = $this->stdResult->{"shortUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "appId", $this->stdResult )) {
    				$this->appId = $this->stdResult->{"appId"};
    			}
    			    		    				    			    			if (array_key_exists ( "pv1d", $this->stdResult )) {
    				$this->pv1d = $this->stdResult->{"pv1d"};
    			}
    			    		    				    			    			if (array_key_exists ( "uv1d", $this->stdResult )) {
    				$this->uv1d = $this->stdResult->{"uv1d"};
    			}
    			    		    				    			    			if (array_key_exists ( "payMordCnt1d", $this->stdResult )) {
    				$this->payMordCnt1d = $this->stdResult->{"payMordCnt1d"};
    			}
    			    		    				    			    			if (array_key_exists ( "payMordAmt1d", $this->stdResult )) {
    				$this->payMordAmt1d = $this->stdResult->{"payMordAmt1d"};
    			}
    			    		    				    			    			if (array_key_exists ( "pvTotal", $this->stdResult )) {
    				$this->pvTotal = $this->stdResult->{"pvTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "payMordCntTotal", $this->stdResult )) {
    				$this->payMordCntTotal = $this->stdResult->{"payMordCntTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "payMordAmtTotal", $this->stdResult )) {
    				$this->payMordAmtTotal = $this->stdResult->{"payMordAmtTotal"};
    			}
    			    		    				    			    			if (array_key_exists ( "statDate", $this->stdResult )) {
    				$this->statDate = $this->stdResult->{"statDate"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "instanceKey", $this->arrayResult )) {
    			$this->instanceKey = $arrayResult['instanceKey'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['memberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "shortUrl", $this->arrayResult )) {
    			$this->shortUrl = $arrayResult['shortUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "appId", $this->arrayResult )) {
    			$this->appId = $arrayResult['appId'];
    			}
    		    	    			    		    			if (array_key_exists ( "pv1d", $this->arrayResult )) {
    			$this->pv1d = $arrayResult['pv1d'];
    			}
    		    	    			    		    			if (array_key_exists ( "uv1d", $this->arrayResult )) {
    			$this->uv1d = $arrayResult['uv1d'];
    			}
    		    	    			    		    			if (array_key_exists ( "payMordCnt1d", $this->arrayResult )) {
    			$this->payMordCnt1d = $arrayResult['payMordCnt1d'];
    			}
    		    	    			    		    			if (array_key_exists ( "payMordAmt1d", $this->arrayResult )) {
    			$this->payMordAmt1d = $arrayResult['payMordAmt1d'];
    			}
    		    	    			    		    			if (array_key_exists ( "pvTotal", $this->arrayResult )) {
    			$this->pvTotal = $arrayResult['pvTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "payMordCntTotal", $this->arrayResult )) {
    			$this->payMordCntTotal = $arrayResult['payMordCntTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "payMordAmtTotal", $this->arrayResult )) {
    			$this->payMordAmtTotal = $arrayResult['payMordAmtTotal'];
    			}
    		    	    			    		    			if (array_key_exists ( "statDate", $this->arrayResult )) {
    			$this->statDate = $arrayResult['statDate'];
    			}
    		    	    		}
 
   
}
?>