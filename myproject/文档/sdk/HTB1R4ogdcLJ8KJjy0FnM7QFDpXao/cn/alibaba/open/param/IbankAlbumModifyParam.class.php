<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IbankAlbumModifyParam {

        
        /**
    * @return 相册ID
    */
        public function getAlbumId() {
        $tempResult = $this->sdkStdResult["albumId"];
        return $tempResult;
    }
    
    /**
     * 设置相册ID     
     * @param Long $albumId     
     * 参数示例：<pre>66200059</pre>     
     * 此参数必填     */
    public function setAlbumId( $albumId) {
        $this->sdkStdResult["albumId"] = $albumId;
    }
    
        
        /**
    * @return 相册名称。最长30个中文字符。不传默认为不修改。
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置相册名称。最长30个中文字符。不传默认为不修改。     
     * @param String $name     
     * 参数示例：<pre>albumName2</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 相册描述。最长2000个中文字符
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置相册描述。最长2000个中文字符     
     * @param String $description     
     * 参数示例：<pre>desc1</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 相册访问权限。取值范围:0-不公开；1-公开；2-密码访问。只有开通旺铺的会员可以设置相册权限为“公开”和“密码访问”，未开通旺铺的会员相册访问权限限制为“不公开”。不传默认为不修改。
    */
        public function getAuthority() {
        $tempResult = $this->sdkStdResult["authority"];
        return $tempResult;
    }
    
    /**
     * 设置相册访问权限。取值范围:0-不公开；1-公开；2-密码访问。只有开通旺铺的会员可以设置相册权限为“公开”和“密码访问”，未开通旺铺的会员相册访问权限限制为“不公开”。不传默认为不修改。     
     * @param Integer $authority     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setAuthority( $authority) {
        $this->sdkStdResult["authority"] = $authority;
    }
    
        
        /**
    * @return 相册访问密码。4-16位非中文字符。当authority为2-密码访问时必填。
    */
        public function getPassword() {
        $tempResult = $this->sdkStdResult["password"];
        return $tempResult;
    }
    
    /**
     * 设置相册访问密码。4-16位非中文字符。当authority为2-密码访问时必填。     
     * @param String $password     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setPassword( $password) {
        $this->sdkStdResult["password"] = $password;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>