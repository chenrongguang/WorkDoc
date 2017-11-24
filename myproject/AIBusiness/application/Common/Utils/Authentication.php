<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chenrongguang
 * Date: 2016-3-4
 * Time: 16:02
 */

namespace app\Common\Utils;
use app\Common\Model\Platform\App;
use app\Common\App\Mylog;


class Authentication
{
    /**
     * 错误码
     * @var string
     */
    public $code = null;

    /**
     * 错误消息
     * @var array
     */
    public $msg = array(
        'S0' => '服务请求失败',
        'S1' => '没有传递任何参数',
        'S2' => '没有传递参数:app_key',
        'S3' => 'app_key不存在',
        'S4' => '没有传递参数:method',
        'S5' => '没有传递参数:format',
        'S6' => '没有传递参数:session',
        'S7' => '没有传递参数:sign',
        'S8' => '没有传递参数:timestamp',
        'S9' => 'session无效',
        'S10' => 'timestamp无效',
        'S11' => 'sign无效',
        'S12' => '该IP地址无访问权限，请联系相关负责人',
        'S13' => 'API没有调用的权限',
    );

    /**
     * 子错误码
     * @var string
     */
    public $sub_code = null;

    /**
     * 客户端提交的全部参数
     * @var array
     */
    public $param;

    /**
     * 构造函数，初始化reuest和param参数。
     */
    public function __construct()
    {
        $request = \think\Request::instance();
        $this->param = $request->get();
        //$this->param = I('get.');
    }

    public function check()
    {
        if ($this->noRequestParam()) {
            $this->code = 'S1';
            return $this->makeFailResult();
        }
        if (!$this->noRequestAppkey()) {
            $this->code = 'S2';
            return $this->makeFailResult();
        }
        if (!$this->existsAppkey()) {
            $this->code = 'S3';
            return $this->makeFailResult();
        }
        if (!$this->noRequestMethod()) {
            $this->code = 'S4';
            return $this->makeFailResult();
        }

        if (!$this->noRequestFormat()) {
            $this->code = 'S5';
            return false;
        }
        if (!$this->noRequestSession()) {
            $this->code = 'S6';
            return $this->makeFailResult();
        }

        if (!$this->noRequestSign()) {
            $this->code = 'S7';
            return $this->makeFailResult();
        }
        if (!$this->noRequestTimestamp()) {
            $this->code = 'S8';
            return $this->makeFailResult();
        }

        if (!$this->isValidSession()) {
            $this->code = 'S9';
            return $this->makeFailResult();
        }

        if (!$this->isValidTimestamp()) {
            $this->code = 'S10';
            return $this->makeFailResult();
        }
        if (!$this->isValidSign()) {
            $this->code = 'S11';
            return $this->makeFailResult();
        }
        if (!$this->allowIPAccess()) {
            $this->code = 'S12';
            return $this->makeFailResult();
        }
        if (!$this->allowApiAccess()) {
            $this->code = 'S13';
            return $this->makeFailResult();
        }
        return true;
    }


    /**
     * @return array
     */
    protected function  makeFailResult()
    {
        return array('code' => $this->code, 'msg' => $this->msg[$this->code]);
    }


    /**
     * 判断app_key是否存在
     * @return bool
     */
    public function existsAppkey()
    {
       /*
        $app_key = config('APP_KEY_H5');

        $app_key_url = I('get.app_key');

        if ($app_key == $app_key_url) {
            return true;
        } else {
            return false;
        }
       *
        *
        *
        */
       return true;
    }

    /**
     * 验证session是否有效
     */
    public function isValidSession()
    {
        return true;
    }

    /**
     * 验证timestamp是否有效
     * @return bool
     */
    public function isValidTimeStamp()
    {
        $request_time= html_entity_decode($this->param['timestamp']);
        $time = time();
        $start_time = $time - 60*(config('AUTH_EXPIRE_TIME'));
        $end_time = $time + 60*(config('AUTH_EXPIRE_TIME'));
        if($request_time >= $start_time &&  $request_time <= $end_time ){
            return true;
        }
        return false;
    }

    /**
     * 验证sign是否有效
     * @return bool
     */
    public function isValidSign()
    {
        $sign = $this->generateSign();
        $sign_url = $this->param['sign'];
        if ($sign == $sign_url) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 验证该客户端ip是否允许访问
     * @return bool
     */
    public function allowIPAccess()
    {
        return true;
    }

    /**
     * 判断该API是否有调用权限
     * @return bool
     */
    public function allowApiAccess()
    {
        return true;
    }

    /**
     * 获取验证失败的消息
     * @return array
     */
    public function getResponseContent()
    {
        return Error::outResult($this->code, $this->msg[$this->code]);
    }

    /**
     * 判断是否未传递app_key
     * @return bool
     */
    public function noRequestAppkey()
    {
        //return null ==$this->param['app_key'];

        if(!isset($this->param['app_key']) || empty($this->param['app_key'])){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * 判断是否未传递任何参数
     * @return bool
     */
    public function noRequestParam()
    {
        return 0 == count($this->param);
    }

    /**
     * 判断是否未传递method参数
     * @return bool
     */
    public function noRequestMethod()
    {
        //return null == $this->param['method'];
        if(!isset($this->param['method'])|| empty($this->param['method'])){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * 判断是否未传递format参数
     * @return bool
     */
    public function noRequestFormat()
    {
        //return null == I('get.format');
        return true;
    }

    /**
     * 判断是否未传递session参数
     * @return bool
     */
    public function noRequestSession()
    {
        return true;
    }

    /**
     * 判断是否未sign参数
     * @return bool
     */
    public function noRequestSign()
    {
        if(!isset($this->param['sign'])|| empty($this->param['sign'])){
            return false;
        }
        else{
            return true;
        }

        //return null == $this->param['sign'];
    }

    /**
     * 判断是否未提交timestamp参数
     * @return bool
     */
    public function noRequestTimestamp()
    {
        //return null == $this->param['timestamp'];

        if(!isset($this->param['timestamp'])|| empty($this->param['timestamp'])){
            return false;
        }
        else{
            return true;
        }
    }


    //获取appkey对应的appsecrect
    private function  getSecrect($app_key){
        $model = new App();
        $data = $model ->getAppInfoByAppKey($app_key);
        return $data['app_secrect'];

    }

    /**
     * 获取加密的sign
     * @return sign
     */

    protected function generateSign()
    {
        $sign = null;
        $param = $this->param;
        $app_secret = $this->getSecrect($param['app_key']);
        if($app_secret==false ||$app_secret==null || empty($app_secret)){
            return "nofound";
        }

        $sign_param['app_key'] = $param['app_key'];
        $sign_param['app_secrect'] = $app_secret;
        $sign_param['timestamp'] = $param['timestamp'];
        $sign_param = array_change_key_case($sign_param, CASE_LOWER);
        ksort($sign_param);
        foreach($sign_param as $key => $value)
        {
            $sign .= $key . html_entity_decode($value);
        }
        return strtoupper(md5(sha1($sign)));
    }
}