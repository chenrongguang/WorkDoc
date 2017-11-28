<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MemberGetLoginUriResult {

        	
    private $url;
    
        /**
    * @return 会员登录url地址。用户通过url登录成功后，按指定的跳转的地址，并返回登录成功的用户名和SessionID
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置会员登录url地址。用户通过url登录成功后，按指定的跳转的地址，并返回登录成功的用户名和SessionID     
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