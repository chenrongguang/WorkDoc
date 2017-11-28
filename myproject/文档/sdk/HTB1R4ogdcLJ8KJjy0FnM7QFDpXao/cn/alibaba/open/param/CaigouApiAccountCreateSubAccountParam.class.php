<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAccountCreateSubAccountParam {

        
        /**
    * @return 需要创建的子帐号在接入商系统内部唯一编号或者ID
    */
        public function getEmployeeId() {
        $tempResult = $this->sdkStdResult["employeeId"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号在接入商系统内部唯一编号或者ID     
     * @param String $employeeId     
     * 参数示例：<pre>001</pre>     
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->sdkStdResult["employeeId"] = $employeeId;
    }
    
        
        /**
    * @return 需要创建的子帐号的姓名
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的姓名     
     * @param String $name     
     * 参数示例：<pre>张三</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 需要创建的子帐号的手机号，如果为空的话将来无法收到来自1688的采购业务提醒
    */
        public function getMobileNo() {
        $tempResult = $this->sdkStdResult["mobileNo"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的手机号，如果为空的话将来无法收到来自1688的采购业务提醒     
     * @param String $mobileNo     
     * 参数示例：<pre>13500000000</pre>     
     * 此参数必填     */
    public function setMobileNo( $mobileNo) {
        $this->sdkStdResult["mobileNo"] = $mobileNo;
    }
    
        
        /**
    * @return 需要创建的子帐号的邮箱，如果为空则无法收到来自1688采购业务的邮件提醒
    */
        public function getEmail() {
        $tempResult = $this->sdkStdResult["email"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的邮箱，如果为空则无法收到来自1688采购业务的邮件提醒     
     * @param String $email     
     * 参数示例：<pre>aaa@aliyun.com</pre>     
     * 此参数必填     */
    public function setEmail( $email) {
        $this->sdkStdResult["email"] = $email;
    }
    
        
        /**
    * @return 需要创建的子帐号的性别，枚举值：1或者2；1表示男，2表示女
    */
        public function getSex() {
        $tempResult = $this->sdkStdResult["sex"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的性别，枚举值：1或者2；1表示男，2表示女     
     * @param String $sex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSex( $sex) {
        $this->sdkStdResult["sex"] = $sex;
    }
    
        
        /**
    * @return 需要创建的子帐号所属部门，多级部门用"-"分割，最多三级；如果为空，系统默认会在主帐号下面创建一个“我的团队”这个部门，所有没有传部门的子帐号都会归属到这个默认部门下面去。
    */
        public function getDepartment() {
        $tempResult = $this->sdkStdResult["department"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号所属部门，多级部门用"-"分割，最多三级；如果为空，系统默认会在主帐号下面创建一个“我的团队”这个部门，所有没有传部门的子帐号都会归属到这个默认部门下面去。     
     * @param String $department     
     * 参数示例：<pre>采购部-采购一部-采购一组</pre>     
     * 此参数必填     */
    public function setDepartment( $department) {
        $this->sdkStdResult["department"] = $department;
    }
    
        
        /**
    * @return 需要创建的子帐号在1688的岗位，例如：1688采购员、采购经理、财务，如果为空的话这个子帐号就没有相关采购寻源的权限或者采购的权限
    */
        public function getRole() {
        $tempResult = $this->sdkStdResult["role"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号在1688的岗位，例如：1688采购员、采购经理、财务，如果为空的话这个子帐号就没有相关采购寻源的权限或者采购的权限     
     * @param String $role     
     * 参数示例：<pre>1688采购员</pre>     
     * 此参数必填     */
    public function setRole( $role) {
        $this->sdkStdResult["role"] = $role;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>