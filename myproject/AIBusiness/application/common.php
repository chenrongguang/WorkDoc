<?php
require_once(dirname(dirname(__FILE__)).'/extend/Aliyun/mns-autoloader.php');
use AliyunMNS\Client;
use AliyunMNS\Topic;
use AliyunMNS\Constants;
use AliyunMNS\Model\MailAttributes;
use AliyunMNS\Model\SmsAttributes;
use AliyunMNS\Model\BatchSmsAttributes;
use AliyunMNS\Model\MessageAttributes;
use AliyunMNS\Exception\MnsException;
use AliyunMNS\Requests\PublishMessageRequest;
use think\Response;
use phpmailer\phpmailer;
function get_json($response = [])
{
    if (version_compare(PHP_VERSION, '5.4', '>=')) {
        $json = json_encode($response, JSON_UNESCAPED_UNICODE);
    } else {
        $json = json_encode($response);
    }
    return $json;
}

/**
 * 判断访问页面是否在白名单中
 * @Author : ww
 * @param $module
 * @param $page
 * @return bool
 */
function check_white_list($module,$page)
{
    $white_list = require(CONF_PATH . 'white_list.php');
    $white_list = $white_list[strtolower($module)];
    $return = in_array($page,$white_list);
    return $return;
}

/**
 * 权限校验
 * @param $name 规则
 * @param $uid 用户id
 * @param int $type
 * @param string $mode
 * @param string $relation
 * @return bool true：有权限|false:无权限
 */
function check_auth($name, $uid, $type = 1, $mode = 'url', $relation = 'or')
{
    //权限验证需重新定义
    //...
    $auth_list = session('user.auth_list');
    $return = in_array($name,$auth_list);
    return $return;
}

/**
 * ajax数据返回，规范格式
 * @param array $data   返回的数据，默认空数组
 * @param string $msg   信息
 * @param int $code     错误码，0-未出现错误|其他出现错误
 * @param array $extend 扩展数据
 */
function ajax_returns($data = [], $msg = "", $code = 0, $extend = [])
{
    $ret = ["code" => $code, "msg" => $msg, "data" => $data];
    $ret = array_merge($ret, $extend);

    return Response::create($ret, 'json');
}

/***
 * @param $email 接收者地址
 * @param $subject 邮件标题
 * @param $content 邮件内容
 * @param array $attachment 邮件附件
 * @return bool
 * @throws Exception
 * @throws phpmailerException
 */
function sendMail($email,$subject='标题',$content='正文'){
    $mail = new phpmailer();
    $mail->isSMTP();// 使用SMTP服务
    $mail->CharSet = "utf-8";// 编码格式为utf-8，不设置编码的话，中文会出现乱码
    $mail->IsHTML(true);
    $mail->Host = C('mail_server.host');// 发送方的SMTP服务器地址
    $mail->SMTPAuth = true;// 是否使用身份验证
    $mail->Username = C('mail_server.auth_username');// 发送方的QQ邮箱用户名，就是自己的邮箱名
    $mail->Password = C('mail_server.auth_password');// 发送方的邮箱密码，不是登录密码,是qq的第三方授权登录码,要自己去开启,在邮箱的设置->账户->POP3/IMAP/SMTP/Exchange/CardDAV/CalDAV服务 里面
    $mail->SMTPSecure = "ssl";// 使用ssl协议方式,
    $mail->Port = C('mail_server.port');// QQ邮箱的ssl协议方式端口号是465/587
    $mail->setFrom(C('mail_server.from'),C('mail_server.from'));// 设置发件人信息，如邮件格式说明中的发件人,
    $mail->addAddress($email,$email);// 设置收件人信息，如邮件格式说明中的收件人
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
    $mail->Subject = $subject;// 邮件标题
    $mail->Body = $content;// 邮件正文
    return $mail->Send();

}
/***
 * @param $email 邮件正则验证函数
 */
function is_email($email){
    $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
    if(preg_match($pattern,$email)){
        return true;
    }else{
        return false;
    }
}

function F($name, $value='', $path='./') {
    static $_cache = array();
    $filename = $path . $name . '.php';
    if ('' !== $value) {
        if (is_null($value)) {
            // 删除缓存
            return unlink($filename);
        } else {
            // 缓存数据
            $dir = dirname($filename);
            // 目录不存在则创建
            if (!is_dir($dir))
                mkdir($dir);
            $_cache[$name] =   $value;
            return file_put_contents($filename, strip_whitespace("<?php\nreturn " . var_export($value, true) . ";\n?>"));
        }
    }
    if (isset($_cache[$name]))
        return $_cache[$name];
    // 获取缓存数据
    if (is_file($filename)) {
        $value = include $filename;
        $_cache[$name] = $value;
    } else {
        $value = false;
    }
    return $value;
}
// 去除代码中的空白和注释
function strip_whitespace($content) {
    $stripStr = '';
    //分析php源码
    $tokens = token_get_all($content);
    $last_space = false;
    for ($i = 0, $j = count($tokens); $i < $j; $i++) {
        if (is_string($tokens[$i])) {
            $last_space = false;
            $stripStr .= $tokens[$i];
        } else {
            switch ($tokens[$i][0]) {
                //过滤各种PHP注释
                case T_COMMENT:
                case T_DOC_COMMENT:
                    break;
                //过滤空格
                case T_WHITESPACE:
                    if (!$last_space) {
                        $stripStr .= ' ';
                        $last_space = true;
                    }
                    break;
                case T_START_HEREDOC:
                    $stripStr .= "<<<THINK\n";
                    break;
                case T_END_HEREDOC:
                    $stripStr .= "THINK;\n";
                    for($k = $i+1; $k < $j; $k++) {
                        if(is_string($tokens[$k]) && $tokens[$k] == ';') {
                            $i = $k;
                            break;
                        } else if($tokens[$k][0] == T_CLOSE_TAG) {
                            break;
                        }
                    }
                    break;
                default:
                    $last_space = false;
                    $stripStr .= $tokens[$i][1];
            }
        }
    }
    return $stripStr;
}

/**
 * 获取和设置配置参数 支持批量定义
 * @param string|array $name 配置变量
 * @param mixed $value 配置值
 * @param mixed $default 默认值
 * @return mixed
 */

function C($name=null, $value=null,$default=null) {
    static $_config = array();
    // 无参数时获取所有
    if (empty($name)) {
        return $_config;
    }
    // 优先执行设置获取或赋值
    if (is_string($name)) {
        if (!strpos($name, '.')) {
            $name = strtoupper($name);
            if (is_null($value))
                return isset($_config[$name]) ? $_config[$name] : $default;
            $_config[$name] = $value;
            return null;
        }
        // 二维数组设置和获取支持
        $name = explode('.', $name);
        $name[0]   =  strtoupper($name[0]);
        if (is_null($value))
            return isset($_config[$name[0]][$name[1]]) ? $_config[$name[0]][$name[1]] : $default;
        $_config[$name[0]][$name[1]] = $value;
        return null;
    }
    // 批量设置
    if (is_array($name)){
        $_config = array_merge($_config, array_change_key_case($name,CASE_UPPER));
        return null;
    }
    return null; // 避免非法参数
}

/**
 * 发送短信方法
 * @param string|array $tel
 * @param mixed $tmpel
 * @param mixed $content
 * @return mixed
 */
 function send_message($tel='',$tmpel='',$content='')
{
    $endPoint = config("message_config.gendPoint"); // eg. http://1234567890123456.mns.cn-shenzhen.aliyuncs.com
    $accesskeyid = config("message_config.accesskeyid");
    $accesskeysecret = config("message_config.accesskeysecret");
    $client = new Client($endPoint,$accesskeyid,$accesskeysecret);
    $topicName = config("message_config.topicName"); //获取主题引用
    $topic = $client->getTopicRef($topicName);
    /**
     * Step 3. 生成SMS消息属性
     */
    // 3.1 设置发送短信的签名（SMSSignName）和模板（SMSTemplateCode）
    $batchSmsAttributes = new BatchSmsAttributes(config("message_config.smssignName"),$tmpel);
    // 3.2 （如果在短信模板中定义了参数）指定短信模板中对应参数的值
    //$batchSmsAttributes->addReceiver("13624117701", array("customer" => "56565656"));
    //$batchSmsAttributes->addReceiver($tel, array("code" => "123456","product" => "易签云"));
    $batchSmsAttributes->addReceiver($tel,$content);
    $messageAttributes = new MessageAttributes(array($batchSmsAttributes));
    /**
     * Step 4. 设置SMS消息体（必须）
     *
     * 注：目前暂时不支持消息内容为空，需要指定消息内容，不为空即可。
     */
    $messageBody = "smsmessage";
    /**
     * Step 5. 发布SMS消息
     */
    $request = new PublishMessageRequest($messageBody, $messageAttributes);
    try
    {
        $res = $topic->publishMessage($request);
        //echo $res->isSucceed(); //发送成功状态
        //echo $res->getMessageId(); //消息ID
    }
    catch (MnsException $e)
    {
        //echo $e; //失败状态

    }
}


/**
 * 三要素验证
 * @param string|array $tel
 * @param mixed $id 身份证
 * @param mixed $name 姓名
 * @param mixed $telnumber 手机号
 * @return mixed
 */
 function factor_verification($id='',$name='',$telnumber='')
 {
     $host = config("verification_config.Url");
     $appcode = config("verification_config.AppCode");
     $path = "/lianzhuo/telvertify";
     $method = "GET";
     $headers = array();
     array_push($headers, "Authorization:APPCODE " . $appcode);
     $querys = "id=".$id."&name=".$name."&telnumber=".$telnumber;
     $bodys = "";
     $url = $host . $path . "?" . $querys;
     $curl = curl_init();
     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
     curl_setopt($curl, CURLOPT_URL, $url);
     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($curl, CURLOPT_FAILONERROR, false);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($curl, CURLOPT_HEADER, false);
     if (1 == strpos("$".$host, "https://"))
     {
         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
     }
     $curl_data = curl_exec($curl);
     $request_data = json_decode($curl_data,true);
     if (curl_errno($curl)) {//出错则显示错误信息
         \think\Log::write("三要素验证-执行curl失败：" . curl_errno($curl));
     }
     return $request_data['resp']; //返回结果'code' => '0' ，'desc' =>'匹配'
 }

