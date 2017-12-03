<?php

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

