<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MemberGetLogoutUriResult {

        	
    private $url;
    
        /**
    * @return 会员登出url地址。用户通过url登出成功后，按指定的跳转的地址，并返回登出成功的用户名
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置会员登出url地址。用户通过url登出成功后，按指定的跳转的地址，并返回登出成功的用户名     
     * @param String $url     
          
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    		}

}
?>